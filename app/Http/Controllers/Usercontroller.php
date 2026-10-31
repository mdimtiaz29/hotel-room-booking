<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Models\Setting;
use App\Models\Room;
use App\Models\User;
use App\Models\RoomBooking;
use App\Models\RoomPhoto;
use App\Models\Review;
use App\Mail\Verifyuser;
use App\Mail\ForgetVerify;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class Usercontroller extends Controller
{
    
    public function about()
{

    $setting = Setting::orderBy('sl', 'desc')->first();

    return view('about', ['setting' => $setting]);
}
public function roomdetails()
{
$today = Carbon::today();
    $details = Room::with('allinfo')
        ->where('status', 1)
        ->get();

    foreach ($details as $room) {

        // count ALL confirmed bookings (no date filter)
       $booked = RoomBooking::where('room_id', $room->id)
            ->where('confirm', 1)
            ->whereDate('checkin', '<=', $today)
            ->whereDate('checkout', '>', $today)
            ->count();

        // remaining rooms
        $room->remaining = $room->quantity - $booked;
    }

    return view('rooms', ['details' => $details]);
}
function more($id){
   $details = Room::with('allinfo')->find($id);
   return view('moredetails', ['more' => $details]);         
}


function user_signup(Request $request){
    $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|unique:users,email',
        'phn' => 'required|max:20',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'password'=>'required | min:4 | confirmed',
        'address' => 'required',
        'postalcode' => 'required|max:20',
        'dob' => 'required|date'
    ]);
$path = $request->file('image')->store('userphoto', 'public');

$user=User::create([
  'name'=>$request->name,
  'email'=>$request->email,
  'password'=>Hash::make($request->password),
  'phn'=>$request->phn,
  'image'=>$path,
  'address'=>$request->address,
  'postalcode'=>$request->postalcode,
  'dob'=>$request->dob,
]);




$link=Crypt::encryptString($user->email);

 $link = url('/verify-link/'.$link); 
 Mail::to($user->email)->send(new Verifyuser($link));

if ($user) {
   
    Session::flash('addmsg', 'Please check your email for confirmation. If you do not check and verify you cannot access properly!');
    return redirect('/');
}

}
public function user_Verify($email)
{
 
$orgEmail=Crypt::decryptString($email);

$user=User::where('email',$orgEmail)->first();
if($user){
  $user->active=2;
  if($user->save()){
    
     Session::put('user', $user);
    return redirect('/');
}
}
}

function user_login(Request $r) {
     $validation = $r->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $r->email)->first();

    if ($user && Hash::check($r->password, $user->password)) {
       
       Session::put('user',$user);
       
        return redirect('/');
    } 
    else{
      $validation= $r->validate([
'user' => 'required',

      ],[
        'user.required'=>'User does not exist. Please check email and password!',
      ]);
    }
   
}
function logout(){
          Session::forget('user');
       return redirect('/'); 
}
function user_forget(Request $r){

 $validation = $r->validate([
        'email' => 'required|email',
       
    ]);

    $user = User::where('email', $r->email)->first();
if(!$user){
      $validation= $r->validate([
'user' => 'required',

      ],[
        'user.required'=>'User does not exist. Please check email!',
      ]);
    }
    $link=Crypt::encryptString($user->email);

 $link = url('/verify-forgot-email/'.$link); 
 Mail::to($user->email)->send(new ForgetVerify($link));
  Session::flash('forgetmsg','Please check email!');
    return redirect('/');
}
function userForgot($email){

  $orgEmail=Crypt::decryptString($email);

$user=User::where('email',$orgEmail)->first();
if($user){

  if($user->active==2){  //verified
    
    return view('reset-password',['email'=>$user->email]);
  }else if($user->active==1){  //if it is not verified with gmail
     return redirect('/');
  }
}else{
  return redirect('/');
}
}
function updatePassword(Request $request){
  $validation = $request->validate([

  'password'=>'required | min:4 | confirmed'
]);
 $user=User::where('email',$request->email)->first();
 if($user){
  $user->password=$request->password;
  if($user->save()){
    return view('user-login');
  }
 }
}











function book($id){
   $details = Room::with('allinfo')->find($id);
   return view('confirmbooking', ['detail' => $details]);  
}
function confirm(Request $request){
  $validation = $request->validate([
        'checkin' => 'required',
        'checkout' => 'required',
    ]);
  $user_id=Session::get('user')->id;

$result=RoomBooking::create([
  'user_id'=>$user_id,
  'room_id'=>$request->room_id,
  'checkin'=>$request->checkin,
  'checkout'=>$request->checkout,
  'adult'=>$request->adult,
  'children'=>$request->children
  
]);  

if($result){
  Session::flash('confirm','Thank you for choosing us!  
Your reservation is confirmed. A confirmation email with booking details will be sent to your Gmail shortly.');
  return redirect('roomdetails');
}

}
function profile($id){
$user_details = User::with('bookings.room')->withCount('bookings')->find($id);

return view('profile',['result'=>$user_details]);
}
function cancel($id){
 $r=RoomBooking::find($id);
  if($r->confirm==0){
  $r->confirm=2;
$r->save();
  
  return redirect('/');
}
}
public function checkAvailability(Request $request)
{
    $checkin = $request->checkin;
    $checkout = $request->checkout;
    $adult = $request->adult;
    $children = $request->children;

    $rooms = Room::where('status', 1)->get();

    $availableRooms = [];

    foreach ($rooms as $room) {

        $booked = RoomBooking::where('room_id', $room->id)
            ->where('confirm', 1)
            ->where(function ($q) use ($checkin, $checkout) {
                $q->where('checkin', '<', $checkout)
                  ->where('checkout', '>', $checkin);
            })
            ->count();

        $remaining = $room->quantity - $booked;

        // optional filter by capacity
        if ($remaining > 0 && $room->adult >= $adult && $room->children >= $children) {
            $availableRooms[] = [
    'room_id' => $room->id,
    'name' => $room->name,
    'remaining' => $remaining,
    'price' => $room->price
];
        }
    }

    if (count($availableRooms) > 0) {
    return response()->json([
        'status' => 'available',
        'available_rooms' => count($availableRooms),
        'rooms' => $availableRooms
    ]);
}

return response()->json([
    'status' => 'not_available',
    'available_rooms' => 0,
    'rooms' => []
]);
}
function ratereview($id){
  $user_id=Session::get('user')->id;
$booking = RoomBooking::where('id', $id)
    ->where('user_id', $user_id) // or specific user id
    ->where('confirm', 1)
    ->first();

  return view('review',['info'=>$booking]);
}
public function storerate(Request $request)
{
    $request->validate([
        'booking_id' => 'required',
        'room_id' => 'required',
        'rating' => 'required|integer|min:1|max:5',
        'review_text' => 'required|string|max:500',
    ]);

    // Check ownership
    $booking = RoomBooking::where('id', $request->booking_id)
        ->where('user_id', session('user')->id)
        ->firstOrFail();

    // Prevent duplicate
    $exists = Review::where('booking_id', $request->booking_id)
        ->where('user_id', session('user')->id)
        ->exists();

    if ($exists) {
        return back()->with('error', 'Already reviewed!');
    }

    Review::create([
        'user_id' => session('user')->id,
        'booking_id' => $request->booking_id,
        'room_id' => $request->room_id,
        'rating' => $request->rating,
        'review_text' => $request->review_text,
    ]);

    return back()->with('success', 'Review added!');
}
function allrates($id){
    $rate_details = Review::with(['user', 'room'])
        ->where('room_id', $id)
        ->get();

    return view('rateinfo',['result'=>$rate_details]);
}
}
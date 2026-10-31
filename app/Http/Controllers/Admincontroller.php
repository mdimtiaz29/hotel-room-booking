<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\UserQuery;
use App\Models\Feature;
use App\Models\Room;
use App\Models\Facility;
use App\Models\RoomBooking;
use App\Models\RoomPhoto;
use Illuminate\Support\Facades\Session;
use App\Mail\EmailConfirm;
use Illuminate\Support\Facades\Mail;
class Admincontroller extends Controller
{
    //
   function adminlog(Request $request){
     $validation= $request->validate([
'name' => 'required|string|min:3',
'password' => 'required|string|min:6',
      ]);
      $admin = Admin::where([
      ['name','=', $request->name],
      ['password','=', $request->password],
      ])->first();

      if (!$admin) {

         $validation= $request->validate([
'user' => 'required',

      ],[
        'user.required'=>'User does not exist',
      ]);
}
      Session::put('admin',$admin);
      return redirect('admin');

   }
   function admin(){
        $admin= Session::get('admin');
            if($admin){
             return view('dashboard'); 
               
                    
 }else{
     return redirect('adminlogin'); 
 }  
   }

   function logout(){
      Session::forget('admin');
       return redirect('admin-login'); 
}
 public function store(Request $request)
    {
      $validation= $request->validate([
            'site_title' => 'required',
'site_about' => 'required',
      ]);
        Setting::create([
            'site_title' => $request->site_title,
            'site_about' => $request->site_about
        ]);

        return view('settings');
    }

    public function fetch()
{
$setting = Setting::orderBy('sl', 'desc')->first();
return response()->json($setting);
}
function user_queries(Request $request){
      $validation= $request->validate([
'name' => 'required|string',
'email' => 'required',
'subject' => 'required|string',
'message' => 'required|string|max:255',
      ]);
       UserQuery::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message
    ]);
          Session::flash('queries','Message sent successfully!');
return view('contact');
}
function allquery(){
                  $admin= Session::get('admin');
            if($admin){
                $userQuery=UserQuery::orderBy('id','desc')->paginate(5);
              // return $userQuery;
            return view('user_queries',['getname'=>$admin->name,'users'=>$userQuery]);
 }else{
    return redirect('admin-login'); 
 }  
}
function deletequery($id){
      $isdelete=UserQuery::destroy($id);
if($isdelete){
      Session::flash('dltquery',"Query got deleted!");
}
return redirect('user_queries');
}
function mark($id){
      $result = UserQuery::find($id);
        if($result->seen==0){
      $result->seen=1;
      if($result->save()){
            return redirect('user_queries');
      }
}
}
public function markAll()
{
    UserQuery::query()->update(['seen' => 1]);
      Session::flash('markquery',"Queries got marked!");
    return redirect('user_queries');
}
function add_feature(Request $request){

      Feature::create([
    'name' => $request->name
]);
Session::flash('addfet',"New feature added!");
    return view('addfeature');
}
function add_facility(Request $request){

      Facility::create([
    'name' => $request->name
]);
Session::flash('addfac',"New facility added!");
    return view('addfacilities');
}
function fetchfandf(){
     $result=Feature::all();
     $rof = Facility::all();
     
     return view('fandf',['allfet'=>$result,'allfac'=>$rof]);
}
function deletefet($id){
       $isdelete=Feature::destroy($id);
       if($isdelete){
          Session::flash('dltfet',"One feature got deleted!");   
       }
       return redirect('fandf');
}
function delfac($id){

       $isdelete=Facility::destroy($id);
       if($isdelete){
          Session::flash('dltfac',"One facility got deleted!");   
       }
       return redirect('fandf');
}
function room(){
        $allroom=Room::all();
      return view("room_admin",['allroom'=>$allroom]);
}
function addroom(){
    $allfac=Facility::all();
      $allfet=Feature::all();   
       return view("add-newroom",['allfac'=>$allfac,'allfet'=>$allfet]);
}
function addnewroom(Request $request){
      $features = implode(',', $request->features);
$facilities = implode(',', $request->facilities);

Room::create([
'name' => $request->name,
'area' => $request->area,
'price' => $request->price,
'quantity' => $request->quantity,
'adult' => $request->adult,
'children' => $request->children,
'description' => $request->description,
'features' => $features,
'facilities' => $facilities
]);
$allfac=Facility::all();
      $allfet=Feature::all();   
      Session::flash('roomadded',"One new room added");  
       return view("add-newroom",['allfac'=>$allfac,'allfet'=>$allfet]);
}
public function updatestatus($id)
{
    $room = Room::find($id);

    $room->status = $room->status == 1 ? 0 : 1;

    $room->save();

    return redirect('room');
}
function add_photo($id){
       $photos = RoomPhoto::where('room_id', $id)->get();
       if($photos){
      return view('Addphoto',['id'=>$id,'photos'=>$photos]);
}
return view('Addphoto',['id'=>$id]);
}
public function addroomphoto(Request $request)
{
    $request->validate([
        'room_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        
    ]);
    
    $path = $request->file('room_photo')->store('roomphotos', 'public');

    RoomPhoto::create([
        'photoname' => $path,
        'room_id' => $request->id
    ]);
  
   Session::flash('insertimg','New Room Photo Uploaded');
    return redirect('room');
 }
function deleteroom($id){
      $isdelete=Room::destroy($id);
      if($isdelete){
             Session::flash('deleteroom','One room deleted');
    return redirect('room');  
      }
}
function updatephoto($id){
      $result=RoomPhoto::where('room_id', $id)->first();
      return view('updatephoto',['result'=>$result]);
}
function update(Request $request,$id){
    $request->validate([
        'room_photo_update' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        
    ]);
 
    $r = RoomPhoto::find($id);

    if ($request->hasFile('room_photo_update')) {
        $path = $request->file('room_photo_update')->store('roomphotos', 'public');
  
        $r->photoname = $path;
    }

    if($r->save()){
                   Session::flash('updt','Photo updated');
    return redirect('room'); 
    }
}






public function confirmdetails()
{
    $bookings = RoomBooking::with('room', 'user')
                ->orderBy('id', 'desc') // Latest records first
                ->paginate(10); // 10 records per page

    return view('admin-user', compact('bookings'));
}

function confirmupdate($id){
  $r=RoomBooking::find($id);
  if($r->confirm==0)
  $r->confirm=1;
$r->save();
return redirect('confirmdetails');
}


function mail($email){
$to=$email;
$msg="Your booking has been confirmed successfully. We look forward to welcoming you to our hotel!";
$subject="Booking Confirmation – Welcome to Our Hotel";
Mail::to($to)->send(new EmailConfirm($msg,$subject));
return redirect('confirmdetails');
}
}

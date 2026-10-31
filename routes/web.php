<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\checkuserauth;
use App\Http\Middleware\checkadminauth;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/check-time', function () {
    return now();
});
//for users
Route::view('/','welcome');
Route::view('/about','about');
Route::view('/rooms','rooms');
Route::view('/facilities','facilities');
Route::view('/contact','contact');
Route::view('/user-login','user-login');
Route::view('/user-signup','user-signup');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('roomdetails',[UserController::class, 'roomdetails'])->middleware(checkuserauth::class);
Route::get('/moredetails/{id}', [UserController::class, 'more'])
    ->name('room.more')->middleware(checkuserauth::class);

Route::post('signup',[UserController::class, 'user_signup']);
Route::get('/verify-link/{email}',[Usercontroller::class,'user_Verify']);
Route::post('/user-login',[Usercontroller::class,'user_login']);
Route::get('/userlogout',[Usercontroller::class,'logout'])->middleware(checkuserauth::class);
Route::post('/forget',[Usercontroller::class,'user_forget']);
Route::view('/forget-password','forgot-password-email');
Route::get('/verify-forgot-email/{email}',[Usercontroller::class,'userForgot']);
Route::post('/update_password',[Usercontroller::class,'updatePassword']);


//trial
Route::get('/book/{id}',[UserController::class, 'book'])->middleware(checkuserauth::class);
Route::post('/confirm-booking',[UserController::class, 'confirm'])->middleware(checkuserauth::class);
Route::get('/user-profile/{id}',[UserController::class, 'profile'])->middleware(checkuserauth::class);
Route::get('/cancel/{id}', [UserController::class,'cancel'])->middleware(checkuserauth::class);
Route::get('/checkroom',[UserController::class,'check']);
Route::post('/check-availability', [UserController::class, 'checkAvailability']);
Route::get('/ratereview/{id}',[UserController::class,'ratereview'])->middleware(checkuserauth::class);
Route::post('/review',[UserController::class,'storerate'])->middleware(checkuserauth::class);
Route::get('/checkreview/{id}',[UserController::class,'allrates']);




Route::view('/admin-login','admin-login');
Route::post('/admin-login',[Admincontroller::class,'adminlog']);
Route::get('/adminlogout',[Admincontroller::class,'logout'])->middleware(checkadminauth::class);
Route::view('/settings','settings')->middleware(checkadminauth::class);
Route::view('/edit-settings','edit-settings')->middleware(checkadminauth::class);
Route::view('/edit-addmember','edit-addmember')->middleware(checkadminauth::class);
Route::view('/dashboard','dashboard')->middleware(checkadminauth::class);
Route::get('/admin',[Admincontroller::class,'admin'])->middleware(checkadminauth::class);
Route::post('/edit-settings', [Admincontroller::class, 'store'])->middleware(checkadminauth::class);
Route::get('/fetch-settings', [Admincontroller::class, 'fetch'])->middleware(checkadminauth::class);
Route::post('/queries', [Admincontroller::class, 'user_queries'])->middleware(checkadminauth::class);
Route::get('/user_queries', [Admincontroller::class, 'allquery'])->middleware(checkadminauth::class);
Route::get('/delete/{id}', [Admincontroller::class, 'deletequery'])->middleware(checkadminauth::class);
Route::get('/markread/{id}', [Admincontroller::class, 'mark'])->middleware(checkadminauth::class);
Route::post('/mark-all-read', [AdminController::class,'markAll'])->name('mark.all')->middleware(checkadminauth::class);
Route::get('/fandf', [Admincontroller::class, 'fetchfandf'])->middleware(checkadminauth::class);
Route::view('/addfeature','addfeature')->middleware(checkadminauth::class);
Route::view('/addfacilities','addfacilities')->middleware(checkadminauth::class);
Route::post('/addfeature',[Admincontroller::class, 'add_feature'])->middleware(checkadminauth::class);
Route::get('/deletefeature/{id}', [Admincontroller::class, 'deletefet'])->middleware(checkadminauth::class);
Route::post('/addfacilities',[Admincontroller::class, 'add_facility'])->middleware(checkadminauth::class);
Route::get('/room', [Admincontroller::class, 'room'])->middleware(checkadminauth::class);
Route::get('/delfac/{id}', [Admincontroller::class, 'delfac'])->middleware(checkadminauth::class);
Route::get('addroom', [Admincontroller::class, 'addroom'])->middleware(checkadminauth::class);
Route::post('/addnewroom',[Admincontroller::class, 'addnewroom'])->middleware(checkadminauth::class);
Route::get('/updatestatus/{id}', [Admincontroller::class, 'updatestatus'])->name('room.status')->middleware(checkadminauth::class);
Route::get('addphoto/{id}', [Admincontroller::class, 'add_photo'])->middleware(checkadminauth::class);
Route::post('/addphoto/uploadroomphoto',[Admincontroller::class, 'addroomphoto'])->middleware(checkadminauth::class);
Route::get('delroom/{id}',[Admincontroller::class, 'deleteroom'])->middleware(checkadminauth::class);
Route::get('/updatephoto/{id}',[Admincontroller::class, 'updatephoto'])->middleware(checkadminauth::class);
Route::put('/room/update/{id}', [Admincontroller::class, 'update'])->middleware(checkadminauth::class);
Route::get('/confirmdetails', [Admincontroller::class, 'confirmdetails'])->middleware(checkadminauth::class);
Route::get('/finalconfirm/{id}', [Admincontroller::class, 'confirmupdate'])->middleware(checkadminauth::class);
Route::get('/confirmgmail/{email}', [Admincontroller::class, 'mail'])->middleware(checkadminauth::class);



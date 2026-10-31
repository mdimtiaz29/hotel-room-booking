@extends('layout')
@section('title', 'edit-settings')
<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f4f6f9;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.settings-card{
    background:white;
    width:420px;
    padding:30px;
    border-radius:10px;
    box-shadow:0px 5px 20px rgba(0,0,0,0.1);
}

.settings-card h1{
    text-align:center;
    margin-bottom:25px;
}

.form-group{
    margin-bottom:18px;
}

label{
    font-weight:bold;
    display:block;
    margin-bottom:6px;
}

input, textarea{
    width:100%;
    padding:10px;
    border-radius:6px;
    border:1px solid #ccc;
    font-size:14px;
}

input:focus, textarea:focus{
    outline:none;
    border-color:#333;
}

.btn-group{
    display:flex;
    justify-content:space-between;
    margin-top:20px;
}

.btn{
    padding:10px 18px;
    border:none;
    border-radius:6px;
    cursor:pointer;
    font-size:14px;
}

.cancel{
    background:#ddd;
}

.cancel:hover{
    background:#bbb;
    text-decoration:underline;
}

.submit{
    background:#000;
    color:white;
}

.submit:hover{
    background:#333;
        text-decoration:underline;
}

</style>
@section('main')

 <div class="settings-card">

<form action="/edit-settings" method="POST">
@csrf

<h1>General Settings</h1>

<div class="form-group">
<label>Site Title</label>
<input type="text" name="site_title" placeholder="Enter site title">

</div>

<div class="form-group">
<label>About Website</label>
<textarea name="site_about" rows="4" placeholder="Write about your website"></textarea>
            @error('site_about') <p class="fs-6 text-danger">{{$message}}</p> @enderror
</div>

<div class="btn-group">
<button type="reset" class="btn cancel">Cancel</button>
<button type="submit" class="btn submit">Save Settings</button>
</div>

</form>

</div>


@endsection

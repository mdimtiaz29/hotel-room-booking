@extends('layout')
@section('title', 'edit-addmember')
<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f1f3f6;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card{
    background:white;
    width:420px;
    padding:30px;
    border-radius:10px;
    box-shadow:0px 6px 20px rgba(0,0,0,0.1);
}

.card h1{
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

input{
    width:100%;
    padding:10px;
    border-radius:6px;
    border:1px solid #ccc;
    font-size:14px;
}

input:focus{
    outline:none;
    border-color:#333;
}

.buttons{
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
    background:black;
    color:white;
}

.submit:hover{
    background:#333;
        text-decoration:underline;
}

</style>
@section('main')

 <div class="card">

<form action="#" enctype="multipart/form-data">

<h1>Add Management Team</h1>

<div class="form-group">
<label>Name</label>
<input type="text" name="name" placeholder="Enter Name">
</div>

<div class="form-group">
<label>Picture</label>
<input type="file" name="picture" accept=".jpg,.png,.jpeg">
</div>

<div class="buttons">
<button type="reset" class="btn cancel">Cancel</button>
<button type="submit" class="btn submit">Submit</button>
</div>

</form>

</div>


@endsection

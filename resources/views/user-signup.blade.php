@extends('layout')
@section('title', 'user-signup')
<style>
     body {
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }


        .register-card {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 600px;
            color: #fff;
        }

        .register-card .badge {
            display: block;
            margin-bottom: 20px;
            font-size: 0.9rem;
            text-align: center;
        }

        .register-card input,
        .register-card textarea,
        .register-card select {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: none;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            transition: all 0.3s ease;
        }

        .register-card input:focus,
        .register-card textarea:focus {
            outline: none;
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 5px #fff;
        }

        
        .register-card input[type="file"] {
            padding: 5px 10px;
        }

        
        .register-card .btn-register {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
box-sizing: border-box;
            border: 2px solid rgb(251, 247, 247);
            color: #fff;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .register-card .btn-register:hover {
                                    box-sizing: border-box;
            border: 2px solid rgb(63, 55, 108);
            background-color: rgb(63, 55, 108);
            transform: scale(1.05);
        }


        .row > .col-md-6 {
            margin-bottom: 15px;
        }


    </style>
@section('main')
 <div class="container d-flex justify-content-center align-items-center py-5">
    <div class="card shadow-lg border-0 rounded-4 p-4 w-100" style="max-width: 750px;">

        <!-- Header -->
        <div class="text-center mb-4">
            <h3 class="fw-bold">Create Account</h3>
            <p class="text-muted mb-0">Fill in your details to register</p>
        </div>

        <!-- Notice -->
        <div class="alert alert-light border rounded-3 small text-muted">
            ⚠️ Note: Your details must match your ID (Passport, Driving License) required during check-in
        </div>

        <form action="signup" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">

                <!-- Username -->
                <div class="col-md-6">
                    <label class="form-label">Username</label>
                    <input type="text" name="name" class="form-control rounded-3 shadow-none" placeholder="Enter username">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control rounded-3 shadow-none" placeholder="Enter email">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="phn" class="form-control rounded-3 shadow-none" placeholder="01XXXXXXXXX">
                    @error('phn') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Profile Image -->
                <div class="col-md-6">
                    <label class="form-label">Profile Photo</label>
                    <input type="file" name="image" class="form-control rounded-3 shadow-none">
                    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Password -->
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control rounded-3 shadow-none" placeholder="••••••••">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Confirm Password -->
                <div class="col-md-6">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control rounded-3 shadow-none" placeholder="••••••••">
                </div>

                <!-- Address -->
                <div class="col-12">
                    <label class="form-label">Address</label>
                    <textarea name="address" rows="2" class="form-control rounded-3 shadow-none" style="resize:none;" placeholder="Enter full address"></textarea>
                    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Postal Code -->
                <div class="col-md-6">
                    <label class="form-label">Postal Code</label>
                    <input type="text" name="postalcode" class="form-control rounded-3 shadow-none" placeholder="Postal code">
                    @error('postalcode') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- DOB -->
                <div class="col-md-6">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-control rounded-3 shadow-none">
                    @error('dob') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

            </div>

            <!-- Button -->
            <button type="submit" class="btn btn-dark w-100 mt-4 rounded-3 py-2 fw-semibold">
                Register
            </button>

            <!-- Footer -->
            <p class="text-center mt-3 text-muted small">
                Already have an account? <a href="user-login" class="text-decoration-none">Login</a>
            </p>

        </form>
    </div>
</div>
@endsection
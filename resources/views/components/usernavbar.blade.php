  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
<a class="navbar-brand text-light" href="#">
    <span class="fw-bold fs-3">TJ</span>
    <span class="fw-light text-uppercase fs-5 ms-1" style="letter-spacing:3px;">
        HOTEL
    </span>
</a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse me-auto" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link me-3 text-font text-light" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 text-font text-light" href="roomdetails">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 text-font text-light" href="facilities">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 text-font text-light" href="contact">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 text-font text-light" href="about">About</a>
          
          </li>
                   @if(session('user'))

        <li class="nav-item"><a class="nav-link text-font text-light" href="/user-profile/{{ session('user')['id'] }}" target="_blank">{{ucfirst(session('user.name'))}}</a></li>
          <li class="nav-item"><a class="nav-link text-font text-light" href="/userlogout">Logout</a></li>   
       
        @else
          <li class="nav-item">
            <a class="btn btn-color text-light me-3" href="user-login">Login</a>
          </li>
          
          <li class="nav-item">
            <a class="btn btn-color text-light me-3" href="user-signup">Register</a>
          </li>
          @endif
        </ul>

      </div>
    </div>
  </nav>

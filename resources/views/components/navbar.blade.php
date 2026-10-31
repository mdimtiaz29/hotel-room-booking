<nav class="navbar navbar-expand-lg bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand text-light text-font" href="#">ADMIN-PANEL</a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
          <li>
<a class="nav-link text-font text-light" href="dashboard">Dashboard</a>
</li>
                 <li>
<a class="nav-link text-font text-light" href="room">Rooms</a>
</li>

         @if(session('admin'))

        <li class="nav-item"><a class="nav-link text-font text-light" href="#">Welcome {{ucfirst(session('admin.name'))}}</a></li>
            
       
        @endif
                 <li>
<a class="nav-link text-font text-light" href="settings">Settings</a>
</li>
            <li>
<a class="nav-link text-font text-light" href="fandf">Features and Facilities</a>
</li>
<li>
<a class="nav-link text-font text-light" href="/user_queries">User Queries</a>
</li>
        <li class="nav-item">
          <a class="btn btn-color text-light me-5"  href="/adminlogout">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


      

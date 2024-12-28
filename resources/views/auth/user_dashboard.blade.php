<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Dashboard | Library</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <script src="{{ asset('js/changeBackground.js') }}"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('storage/images/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/images/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Bc Library" />
    <link rel="manifest" href="{{ asset('storage/images/site.webmanifest') }}" />

</head>
<body>

  @if (!session('login'))
    <script>window.location.href = "{{ route('login') }}";</script>
@endif

  @include('includes.header')
  <div class="div-logic">  <div>
<div class="notification">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416l400 0c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4l0-25.4c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112l0 25.4c0 47.9 13.9 94.6 39.7 134.6L72.3 368C98.1 328 112 281.3 112 233.4l0-25.4c0-61.9 50.1-112 112-112zm64 352l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg>
</div>
        <a href="">DASHBOARD</a>
    </div>
    <div class="account-dropdown">
      <a href="#" class="dropdown-toggle">ACCOUNT▾ </a>
      <div class="dropdown-content">
          <a href="{{route('myProfile')}}">My Profile</a>
          <a href="#"  id="logout-link" >Logout</a>
      </div>
  </div>
    <div>
        <a href="">ISSUED BOOKS</a>
    </div>
  </div>


<div class="whole-status-container"> 
<div class="status1-container">
       <div> <span style='font-size:100px;  color: rgb(165, 224, 231);'>&#9776;</span> <br> 0 <br> Book Issued </div>
</div>
 
<div class="status2-container">
 
  <div> <span style='font-size:100px; color: burlywood;'>&#9851;</span> <br> 0 <br> Books Not Returned Yet </div> 
   
</div>
</div>

  <script>


document.getElementById('logout-link').addEventListener('click', function(event) {
    event.preventDefault(); 

    fetch("{{ route('logout') }}", {
        method: "POST", 
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}", 
            "Content-Type": "application/json"
        }
    })
    .then(response => {
        if (response.ok) {
           
            window.location.href = "{{ route('login') }}"; 
        } else {
            console.error("Logout failed.");
        }
    })
    .catch(error => console.error("Error:", error));
});



     window.addEventListener('DOMContentLoaded', (event) => {
      const dropdown = document.querySelector('.dropdown-content');
      dropdown.style.display = 'none';  
    });


    document.querySelector('.account-dropdown').addEventListener('click', function(event) {
      event.stopPropagation(); 
      const dropdown = this.querySelector('.dropdown-content');

      dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
    });

   
    document.addEventListener('click', function(event) {
      const dropdown = document.querySelector('.dropdown-content');
    
      if (!event.target.closest('.account-dropdown')) {
        dropdown.style.display = 'none';
      }
    });


  </script>

</body>

</html>


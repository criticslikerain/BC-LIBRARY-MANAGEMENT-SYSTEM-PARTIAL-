<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Change Password | Library</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="{{ asset('js/dropDown.js') }}"></script>
</head>
<body>
  @include('includes.header')
  <div class="div-logic"> 
    <div>
      <a href="{{route('UserDashboard')}}">DASHBOARD</a>
    </div>
    <div class="account-dropdown">
      <a href="#" class="dropdown-toggle">ACCOUNT▾</a>
      <div class="dropdown-content">
        <a href="{{route('myProfile')}}">My Profile</a>
        <a href="#"  id="logout-link" >Logout</a> 
      </div>
    </div>
  </div> 

  <div class ="bg-style" id="background" style="height:75vh;"></div>
  <div class="changePassword-Container">
    <div class="changePassword">
      <h3>Change Password</h3>
    </div>
    <form action="">
    <div class="changePasswordInputs">
      <div>
        <label for="">Current Password</label> <br>
        <input type="password">
      </div>
      <div>
        <label for="">New Password</label> <br>
        <input type="password">
      </div>
      <div>
        <label for="">Confirm Password</label> <br>
        <input type="password">
      </div>
      <button class="changePass-btn">Change</button>
    </div>
    </form>
  </div>
  @include('includes.blackfooter')




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
           
            window.location.href = "{{ route('admin.login') }}"; 
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



  document.addEventListener('DOMContentLoaded', function() {
            const images = [
                "{{ asset('storage/images/changepassword-bg.png') }}",
                "{{ asset('storage/images/changepassword-bg2.png') }}",
                "{{ asset('storage/images/changepassword-bg3.png') }}"
            ];
        
            let currentIndex = 0;
        
            function changeBackground() {
                const background = document.getElementById('background');
                background.style.backgroundImage = `url(${images[currentIndex]})`;
                background.style.backgroundSize = 'cover';
                background.style.backgroundPosition = 'center';
                background.style.backgroundRepeat = 'no-repeat';
                currentIndex = (currentIndex + 1) % images.length;
            }    
            changeBackground();
            setInterval(changeBackground, 5000);
        });
</script>

</body>
</html>
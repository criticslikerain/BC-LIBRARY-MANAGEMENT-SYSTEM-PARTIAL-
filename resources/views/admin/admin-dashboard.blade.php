<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Dashboard | Library</title>
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

  
  @if (!session('admin'))
    <script>window.location.href = "{{ route('admin') }}";</script>
@endif

    @include('includes.header') 
    <div class="div-logic">
          <div>
            <a href="{{route('AdminDashboard')}}">DASHBOARD</a>
            <div  class="side-nav-toggle">
              <a class="open-nav">
                <span >☰</span>
              </a>   
              </div> 
           </div>    
            <div class="account-dropdown">
              <a href="#" class="dropdown-toggle">ACCOUNT▾ </a>
              <div class="dropdown-content">
                  <a href="{{route('changePassword')}}">Change Password</a>
                  <a href="#"  id="logout-link" >Logout</a>
              </div>
            </div>
     </div>
     
      <div  class="sidenav" id="sidenav">

        <div class="mySidenav" id="mySidenav">
          <h3>
            <div class="Categ-highlighter">
              <a href="#" class="dropdown-toggle1">@include('includes.snippets.categories-logo')Categories▸</a>
            </div>
            <div class="dropdown-content1" style="display: none; margin-left: 20px;">
              <a href="{{route('Categories')}}">@include('includes.snippets.add-logo')Add Category</a>
              <a href="{{route('manageCategories')}}">@include('includes.snippets.manage-logo')Manage Category</a>
            </div>
            
            <a href="#" class="dropdown-toggle1">@include('includes.snippets.author-logo')Authors ▸</a>
            <div class="dropdown-content1" style="display: none; margin-left: 20px;">
             
              <a href="{{route('Authors')}}">@include('includes.snippets.add-logo')Add Author</a>
              <a href="{{route('manageAuthors')}}">@include('includes.snippets.manage-logo')Manage Author</a>
            </div>
        
            <a href="#" class="dropdown-toggle1">@include('includes.snippets.book-logo')Books ▸</a>
            <div class="dropdown-content1" style="display: none; margin-left: 20px;">
              <a href="{{route('Books')}}">@include('includes.snippets.add-logo')Add Book</a>
              <a href="{{route('manageBooks')}}">@include('includes.snippets.manage-logo')Manage Books</a>
            </div>
  
  
            <a href="#" class="dropdown-toggle1">@include('includes.snippets.issuedbooks-logo')Issue Books▸</a>
            <div class="dropdown-content1" style="display: none; margin-left: 20px;">
            <a href="{{route('IssuedBooks')}}">@include('includes.snippets.add-logo')Issue New Book</a>
              <a href="{{route('manageIssuedBooks')}}">@include('includes.snippets.manage-logo')Manage Issued Books</a>
            </div>
        
            <a href="{{route('RegisteredStudents')}}">@include('includes.snippets.regstudents-logo')Reg Students</a>
          </h3>
        </div>
 
      </div>

      <div class="status-pane">
        <div class="status-pane-container">
          <div class="status-pane-text">
            STATUS PANE
          </div>
            <div class="border-text">
              <div class="status"> 
              <div class="book-listed-box">
                <span>
                  &#128218; 
                </span>
                <br> {{$listdbooks}} <br> Books Listed 
              </div>
              <div class="time-issued-box">
              <span>
                &#9745;
              </span>
                <br>{{$issuedbooks}}<br> Times Book Issued  
              </div>
              <div class="books-returned">
              <span>
                &#9851;
              </span>
              <br>{{$returnedbooks}} <br> Times  Books Returned
              </div>
              <div class="registered-users">
                <div class="users-logo1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                </div>
                {{$regstds}} <br> Registered Users
              </div>
              <div class="authors-listed">
                <div class="authors-logo1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l293.1 0c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1l-91.4 0zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/></svg>
                </div>
                {{$listdathrs}} <br> Authors Listed
              </div>
              <div class="listed-categories">
              <span>
                &#9636;
              </span>
              <br> {{$listdcats}}<br> Listed Categories
              </div>
            </div>
          </div>
        </div>
      </div>
</body>






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



document.querySelector(".open-nav").addEventListener("click", function() {
  const sidenav = document.getElementById("sidenav");
  const links = document.querySelectorAll(".mySidenav a");
  const svgs = document.querySelectorAll(".mySidenav svg");

  const currentWidth = window.getComputedStyle(sidenav).getPropertyValue("width");

  if (currentWidth === "0px") {
    sidenav.style.width = "15%";  
    links.forEach(link => link.classList.remove("shrink-text"));  
    svgs.forEach(svg => svg.style.display = "inline"); 
  } else {
    sidenav.style.width = "0";  
    links.forEach(link => link.classList.add("shrink-text"));  
    svgs.forEach(svg => svg.style.display = "none"); 
  }
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

 

 document.querySelector(".open-nav").addEventListener("click", function() {
  const sidenav = document.getElementById("sidenav");
  const links = document.querySelectorAll(".mySidenav a");


  const currentWidth = window.getComputedStyle(sidenav).getPropertyValue("width");

  if (currentWidth === "0px") {
    sidenav.style.width = "15%"; 
    links.forEach(link => link.classList.remove("shrink-text"));  
  } else {
    sidenav.style.width = "0";  
    links.forEach(link => link.classList.add("shrink-text")); 
  }
});



document.addEventListener('DOMContentLoaded', () => {
  const categoryToggle1 = document.querySelector('.dropdown-toggle1');
  const categoryContent1 = document.querySelector('.dropdown-content1');
  const sidenav = document.querySelector('.sidenav');

  categoryToggle1.addEventListener('click', (event) => {
    event.preventDefault(); 
    const isVisible = categoryContent1.style.display === 'block';

  
    if (isVisible) {
      categoryContent1.style.display = 'none';
      sidenav.classList.remove('expanded'); 
    } else {
      categoryContent1.style.display = 'block';
      sidenav.classList.add('expanded'); 
    }
  });


  document.addEventListener('click', (event) => {
    if (!event.target.closest('.dropdown-toggle1')) {
      categoryContent1.style.display = 'none';
      sidenav.classList.remove('expanded');
    }
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const dropdowns = document.querySelectorAll('.dropdown-toggle1');
  const sidenav = document.querySelector('.sidenav'); 


  dropdowns.forEach(dropdown => {
    dropdown.addEventListener('click', function(event) {
      event.preventDefault(); 
      const content = this.nextElementSibling; 
      const isVisible = content.style.display === 'block'; 


      document.querySelectorAll('.dropdown-content1').forEach(dropdownContent => {
        dropdownContent.style.display = 'none';
      });

    
      sidenav.classList.remove('expanded');


      if (!isVisible) {
        content.style.display = 'block'; 
        sidenav.classList.add('expanded'); 
      }
    });
  });


  document.querySelector(".open-nav").addEventListener("click", function() {
    const currentWidth = window.getComputedStyle(sidenav).getPropertyValue("width");

    if (currentWidth === "0px") {
      sidenav.style.width = "15%"; 
      sidenav.classList.add('expanded');
    } else {
      sidenav.style.width = "0"; 
      sidenav.classList.remove('expanded'); 
    }
  });


  document.addEventListener('click', (event) => {

    dropdowns.forEach(dropdown => {
      const content = dropdown.nextElementSibling;
      if (!event.target.closest('.dropdown-toggle1')) {
        content.style.display = 'none';
      }
    });


    if (!event.target.closest('.sidenav') && !event.target.closest('.open-nav')) {
      sidenav.style.width = "0"; 
      sidenav.classList.remove('expanded');
    }
  });
});
</script>

</html>


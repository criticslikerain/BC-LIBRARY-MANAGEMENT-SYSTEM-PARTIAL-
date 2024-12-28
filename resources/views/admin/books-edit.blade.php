<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Books | Library</title>
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


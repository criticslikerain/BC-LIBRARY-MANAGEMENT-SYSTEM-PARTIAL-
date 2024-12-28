<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Manage Authors | Library</title>
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

<style>

.table-container{
float:right;
height: 81.7%;
width: 85%;



.container {
    max-width: 100%;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    margin-left: 25px;
}


.card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.card-header {
    background-color: #007bff;
    color: white;
    padding: 15px 20px;
    border-radius: 8px 8px 0 0;
    font-size: 1.5rem;
    font-weight: bold;
}

.card-body {
    padding: 20px;
}


.table {
    width: 100%;
    margin: 0;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
}

.table th {
    background-color: #f1f1f1;
    font-weight: bold;
    color: #333;
}

.table tbody tr:hover {
    background-color: #f5f5f5;
}

.table .btn {
    border-radius: 5px;
}


.btn-success, .btn-danger {
    padding: 5px 10px;
    font-size: 0.875rem;
    border-radius: 4px;
    color: white;
    text-align: center;
    text-decoration: none;
}

.btn-success {
    background-color: #28a745;
}

.btn-danger {
    background-color: #dc3545;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 8px 15px;
    font-size: 14px;
    border-radius: 5px;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 8px 15px;
    font-size: 14px;
    border-radius: 5px;
}

.btn:hover {
    opacity: 0.9;
}

/* Responsive Table */
@media (max-width: 768px) {
    .table th, .table td {
        padding: 8px;
    }

    .btn {
        font-size: 0.75rem;
        padding: 5px 10px;
    }
}
}

</style>
</em>
  
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
                  <a href="#" id="logout-link">Logout</a>
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


      <div class="table-container">
        <div class="container mt-4">
          <div class="card">
              <div class="card-header">
                  <h4>Authors Listing</h4>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Author</th>
                                  <th>Creation Date</th>
                                  <th>Updation Date</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @php
                         
                                  $authors = [
                                      ['id' => 1, 'AuthorName' => 'David Goggins', 'creationDate' => '2023-01-01', 'UpdationDate' => '2023-02-01'],
                                      ['id' => 2, 'AuthorName' => 'Dale Carnegie', 'creationDate' => '2023-01-10', 'UpdationDate' => '2023-02-05'],
                                      ['id' => 3, 'AuthorName' => 'Robert Kiyosaki', 'creationDate' => '2023-02-01', 'UpdationDate' => '2023-02-10'],
                                  ];
                              @endphp
      
                              @foreach ($authors as $index => $author)
                                  <tr class="odd gradeX">
                                      <td class="center">{{ $index + 1 }}</td>
                                      <td class="center">{{ $author['AuthorName'] }}</td>
                                      <td class="center">{{ $author['creationDate'] }}</td>
                                      <td class="center">{{ $author['UpdationDate'] }}</td>
                                      <td class="center">
                                          <a href="">
                                              <button class="btn btn-primary">
                                                  <i class="fa fa-edit"></i> Edit
                                              </button>
                                          </a>
                                          <a href="" onclick="return confirm('Are you sure you want to delete?');">
                                              <button class="btn btn-danger">
                                                  <i class="fa fa-trash"></i> Delete
                                              </button>
                                          </a>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
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


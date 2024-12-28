<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registered Students | Library</title>
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
  width: 85%;
  height: 81.7%;

  .container {
    max-width: 100%;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
}


.card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    margin-left: 25px;
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


 .modal {
  display: none; 
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.5);
  width: 100%;
  height: 100%;
  z-index: 1000;
}

.modal-content {
  background-color: white;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  width: 400px;
  text-align: center;
  position: absolute;
  left: 40%;
  top: 35%;

}

.modal h3 {
  margin-bottom: 20px;
}

.modal-buttons {
  display: flex;
  justify-content: space-between;
}

.modal-buttons button {
  width: 45%;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  border: none;
}

.modal-buttons .btn-danger {
  background-color: #dc3545;
  color: white;
}

.modal-buttons .btn-primary {
  background-color: #007bff;
  color: white;
}

.modal-buttons button:hover {
  opacity: 0.9;
}
</style>


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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Reg Students
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Email id</th>
                                            <th>Mobile Number</th>
                                            <th>Reg Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $students = [
                                                (object) ['StudentId' => 'S001', 'FullName' => 'Nathaniel Inocando ', 'EmailId' => 'humsilkysweet@gmail.com', 'MobileNumber' => '1234567890', 'RegDate' => '2024-01-01', 'Status' => 1, 'id' => 1],
                                                (object) ['StudentId' => 'S002', 'FullName' => 'Aleson Irag', 'EmailId' => 'Alesonirag@gmail.com', 'MobileNumber' => '9876543210', 'RegDate' => '2024-02-15', 'Status' => 0, 'id' => 2],
                                                // Add more student objects as needed
                                            ];
                                            $cnt = 1;
                                        @endphp
        
                                        @foreach($students as $student)
                                            <tr class="odd gradeX">
                                                <td class="center">{{ $cnt++ }}</td>
                                                <td class="center">{{ $student->StudentId }}</td>
                                                <td class="center">{{ $student->FullName }}</td>
                                                <td class="center">{{ $student->EmailId }}</td>
                                                <td class="center">{{ $student->MobileNumber }}</td>
                                                <td class="center">{{ $student->RegDate }}</td>
                                                <td class="center">
                                                    @if($student->Status == 1)
                                                        {{ "Active" }}
                                                    @else
                                                        {{ "Blocked" }}
                                                    @endif
                                                </td>
                                                <td class="center">
                                                    @if($student->Status == 1)
                                                    <a href="javascript:void(0)" onclick="document.getElementById('confirmation-modal').style.display='block'">
                                                      <button class="btn btn-danger">Block</button>
                                                  </a>
                                                  
                                                    @else
                                                        <a href="" onclick="return confirm('Are you sure you want to activate this student?');">
                                                            <button class="btn btn-primary"> Activate</button>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Registered Students Table -->
                </div>
            </div>
        </div>
      </div>
      <div id="confirmation-modal" class="modal">
        <div class="modal-content">
          <h3>NOTE: <br><br>Are you sure you want to block this student?</h3>
          <div class="modal-buttons">
            <button id="confirm-block" class="btn btn-danger">Yes, Block</button>
            <button id="cancel-block" class="btn btn-primary">Cancel</button>
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




document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById('confirmation-modal');
  const confirmBlock = document.getElementById('confirm-block');
  const cancelBlock = document.getElementById('cancel-block');
  const blockButtons = document.querySelectorAll('.btn-danger');
  

  blockButtons.forEach(button => {
    button.addEventListener('click', function(event) {
      event.preventDefault();  
      modal.style.display = 'block';
    });
  });
  
  
  cancelBlock.addEventListener('click', () => {
    modal.style.display = 'none';
  });


  confirmBlock.addEventListener('click', () => {
  
    alert('Student has been blocked!');
    modal.style.display = 'none';
  });


  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benedicto College | Library Catalog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('storage/images/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('storage/images/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/images/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Bc Library" />
    <link rel="manifest" href="{{ asset('storage/images/site.webmanifest') }}" />
    
    <style>
        .login-hover:hover {
            background-color: rgb(197, 197, 208);   
            color: white; 
         
        }

        .policy a{

          text-decoration: none;
          color: grey;
        }
        .policy a:hover{
        color: rgb(209, 57, 34);
        transition: color 0.5s ease;
        animation-delay: 1s;
        }
        .login-hover {
            display: inline-block;
            background-color: transparent; 
            padding: 5px 15px;
            color: black;
            transition: background-color 0.3s, color 0.3s; 
            float: right;
        }

      
        #background {
            width: 100%;
            height: 100vh;
            position: relative;
        }

 
        .bottom {
            height: 350px;
            background-color: #09293b;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #032054;
            border-top: 5px solid #d48506;
            height: 40px;
        }

        footer p {
            margin: 0; 
        }

        .Click-here{
          text-align: center;
          justify-content: center;
          display:flex;
          position: absolute;
          transform: translate(-45%, -50%);
          top: 130%;
          left:45%;
          color: rgb(199, 195, 195);
          font-size: 25px;
          border: 2px solid white;
     
        }

        .Click-here:hover{
          background-color:rgb(164, 164, 176);
          transition: background-color 0.3s, color 0.3s; 
        }

        .Mission{

          float:left;
          color: white;
          font-size: 15px;
          padding-top: 30px;
          
        }

        .col-1{

          float: left;
          padding-top: 50px;
          padding-left:50px;
          background-color: #09293b;
          color: white;
        }
        .col-2{


float: left;
padding-top: 50px;
padding-left:80px;
padding-right: 30px;
background-color: #09293b;
color: white;

}

.col-2 a{

  text-decoration: none;
  color: grey;
}
.col-3{

float: left;
padding-top: 50px;
padding-left:80px;
color: white;
background-color: #09293b;

}
.col-4{

float: left;
padding-top: 50px;
padding-left:60px;
background-color: #09293b;
color: white;

}

.col-2 a:hover{
  color: rgb(209, 57, 34);
  transition: color 0.3s ease;
}

.bc_logo{

  margin-bottom: 10px;
  justify-content:center;
  position: absolute;
  left: 2%;
  top: 0%;

}

      

    </style>
</head>
<body>

    <header style="
                background-color: #09293b;
                 height:60px; 
                 border-bottom: 5px solid #d48506;
                ">
             <a href="{{route('Dashboard')}}">    
           <img class="bc_logo" src="{{ asset('storage/images/BcLogo2.png') }}" alt="BC LOGO" width="300">
            </a>
  </header>
    <div style="background-color: #e7e5e5; height: 60px;">
        <a class="login-hover" href="{{route('Login')}}">
            <p style="float: right; margin-right: 50px; color: black;">LOGIN</p>
        </a>
    </div>


    <div id="background" style="height:75vh;"></div>


  <div>
    <h1 style="
        position: absolute;  
            top: 40%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            text-align: center;
            color: #e7e5e5;
            font-size: 60px;
            z-index: 1000;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.6);
            padding-top: 20px;

    "> 
   ONLINE LIBRARY <br>MANAGEMENT SYSTEM
   <div class="Click-here">
    <a href="{{route('Login')}}" id="toLogin" style="text-decoration: none; color: white; padding: 10px 10px;" >
    Click Here To Login
    </a>
  </div>
 </h1>
  </div>
  <div>
    <span class="arrow-down">
      🠋
    </span>
  </div>
    <div style= "background-color: white; height: 10px;">
        
    </div>


        <div class="bottom">

            <div class="col-1">
                <strong>BENEDICTO COLLEGE</strong> <br>
                <p>Your Education... Our Mission</p><br>
                
                <p>As the preferred higher educational institution in the Asia-<br>
                  Pacific, Benedicto College will be a globally competitive<br>
                  institution and a catalyst in nation-building, creating a<br>
                  better quality of life and developing productive members<br>
                  of the society.
                </p>
            </div>
            <div class="col-2">
               <strong>QUICK LINKS</strong>
               <ul>
                  <a href="https://benedictocollege.edu.ph/facilities/index.html"> Facilities</a>
                  <br>
                  <a href="https://benedictocollege.edu.ph/career-opportunities/index.html">> Career Opportunities </a>
                  <br>
                  <a href="https://benedictocollege.edu.ph/alumni/index.html">> Alumni </a>
                  <br>
                  <a href="https://benedictocollege.edu.ph/news/index.html">> News </a>
                  <br>
                  <a href="https://benedictocollege.edu.ph/gallery/index.html">> Gallery </a>
                  <br>
                  <a href="https://benedictocollege.edu.ph/research-and-development/index.html">> Research and <br>Development </a>
                  <br>
                  <a href="https://benedictocollege.edu.ph/academic-calendar/index.html">> Academic Calendar </a>
                  <br>
                  <a href="https://benedictocollege.edu.ph/downloadables/downloads.html">> Downloads </a>
               </ul>
          </div>
          <div class="col-3">
            <strong>LEARN MORE ABOUT US!</strong>
            <br><br>
            <strong style="text-decoration: underline;">MANDAUE CITY CAMPUS</strong>
            <p>📍 A.S. Fortuna Street,<br>
              Mandaue City 6014<br>
              Metro Cebu, Philippines
              <br><br>
              Tel. Nos.:<br>
              +63 (32) 345 5790 (COLLEGE)<br>
              +63 (32) 345 6873 (BASIC EDUCATION)<br>
              +63 (32) 344 9320 (TECHVOC)<br>

              
            </p>
         </div>
          <div class="col-4">
            <br><br>
          <strong style="text-decoration: underline;">CEBU CITY CAMPUS</strong>
          <p>📍 Don Bernardo Benedicto Street<br>
            Reclamation, Cebu City 6000<br>>
            Metro Cebu, Philippines<br>
            <br>
            Tel. No.:<br>
            +63 (32) 231 7111
          </p>
         </div>
       
        </div>
      


    <footer>
        <p>&copy; 2024 Benedicto College. All Rights Reserved. | GROUP 5</p>
        <p class="policy">
          <a href="#">Contact Us</a> |
          <a href="#">Privacy Policy</a>
      </p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = [
                "{{ asset('storage/images/image1.png') }}",
                "{{ asset('storage/images/image2.jpg') }}",
                "{{ asset('storage/images/image3.jpg') }}"
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

        const arrow = document.querySelector(".arrow-down");

arrow.addEventListener("click", function () {
  if (arrow.textContent.trim() === "🠋") {

    window.scrollTo({
      top: document.body.scrollHeight,
      behavior: "smooth",
    });
    arrow.textContent = "🠉"; 
  } else {

    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
    arrow.textContent = "🠋"; 
  }
});
        
    </script>
</body>
</html>

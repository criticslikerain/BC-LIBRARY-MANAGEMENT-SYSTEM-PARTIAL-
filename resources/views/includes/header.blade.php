<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel = "stylesheet" href="{{asset('css/app.css')}}">
</head>

<style>
  .bc_logo{

margin-bottom: 10px;
justify-content:center;
position: absolute;
left: 2%;
top: 0%;
}


</style>
<body>
  
  <header style="
                background-color: #09293b;
                 height:60px; 
                 border-bottom: 5px solid #d48506;
                ">
                <a href="{{route('Dashboard')}}">
           <img class="bc_logo" src="{{ asset('storage/images/BcLogo2.png') }}" alt="Uploaded Image" width="300">
               <a/>
  </header>

</body>
</html>
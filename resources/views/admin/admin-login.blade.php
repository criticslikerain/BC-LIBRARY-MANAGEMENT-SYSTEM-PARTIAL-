<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login | Library</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('includes.header')
    <div class="div-logic"></div>
    <div id="background" style="height:75vh;"></div>
    <div class="div-logic"></div>
    <div class="login-container">
        <div class="userlogin-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/>
            </svg>
        </div>

        <h3>Login to Your Account</h3>
        <p>Please enter your credentials below.</p>

 
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <label for="admin">Username</label>
            <input 
                type="text" 
                id="admin" 
                name="admin" 
                placeholder="Enter Username" 
                title="Please Enter Your Username"
                value="{{ old('admin') }}"   
            >
            <div id="adminError" style="color: red; font-size: 0.9em;"></div>
            <div id="studentIdError" style="color: red; font-size: 0.9em;"></div>
            @if (session('error'))
            <div style="color: red; font-weight: bold;" class="alert alert-danger">{{ session('error') }}</div>
        @endif

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" >
            <div id="passwordError" style="color: red; font-size: 0.9em;"></div>
            @error('adminpassword')
                <span style="color: red;">{{ $message }}</span>
            @enderror

            <button type="submit">Login</button>
        </form>

        @if (session('error'))
            <div style="color: red; font-weight: bold;" class="alert alert-danger">{{ session('error') }}</div>
        @endif
    </div>

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


        document.getElementById('adminLoginForm').addEventListener('submit', function(event) {
       
            document.getElementById('adminError').textContent = '';
            document.getElementById('passwordError').textContent = '';
            document.getElementById('admin').classList.remove('error-border');
            document.getElementById('password').classList.remove('error-border');

            let isValid = true;

            const admin = document.getElementById('admin').value;
            const password = document.getElementById('password').value;

            if (admin.trim() === '') {
                document.getElementById('adminError').textContent = 'Username is required.';
                document.getElementById('admin').classList.add('error-border');
                isValid = false;
            }

            if (password.trim() === '') {
                document.getElementById('passwordError').textContent = 'Password is required.';
                document.getElementById('password').classList.add('error-border');
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault();  
            }
        });
    </script>

    @include('includes.blackfooter')
</body>
</html>


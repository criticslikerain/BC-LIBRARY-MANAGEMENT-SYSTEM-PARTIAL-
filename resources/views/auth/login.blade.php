<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login | Library</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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

 
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="StudentId">Student ID</label>
            <input 
                type="text" 
                id="StudentId" 
                name="StudentId" 
                placeholder="2000-00000" 
                pattern="\d{4}-\d{5}" 
                title="Please enter a valid Student ID in the format: 2000-00000"  
                value="{{ old('StudentId') }}" 
                oninput="formatStudentId(this)" 
                maxlength="10"
            >
            <div id="studentIdError" style="color: red; font-size: 0.9em;"></div>
            @error('StudentId')
                <span style="color: red;">{{ $message }}</span>
            @enderror

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" >
            <div id="passwordError" style="color: red; font-size: 0.9em;"></div>
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror

            <button type="submit">Login</button>
        </form>

        @if (session('error'))
            <div style="color: red; font-weight: bold;" class="alert alert-danger">{{ session('error') }}</div>
        @endif
    </div>

    <script>

function formatStudentId(input) {

    let value = input.value.replace(/[^0-9-]/g, '');
    

    if (value.length > 4 && value[4] !== '-') {
        value = value.slice(0, 4) + '-' + value.slice(4);
    }

    if (!/^\d{0,4}(-?\d{0,5})?$/.test(value)) {
        value = value.slice(0, -1);
    }


    input.value = value;
}

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


        function validateForm(event) {
        let isValid = true;

   
        const studentIdInput = document.getElementById('StudentId');
        const studentIdError = document.getElementById('studentIdError');
        const studentIdPattern = /^\d{4}-\d{5}$/;

        if (!studentIdInput.value) {
            studentIdError.textContent = "Student ID is required.";
            isValid = false;
        } else if (!studentIdPattern.test(studentIdInput.value)) {
            studentIdError.textContent = "Please enter a valid Student ID in the format: 2000-00000.";
            isValid = false;
        } else {
            studentIdError.textContent = "";
        }

      
        const passwordInput = document.getElementById('password');
        const passwordError = document.getElementById('passwordError');

        if (!passwordInput.value) {
            passwordError.textContent = "Password is required.";
            isValid = false;
        } else {
            passwordError.textContent = "";
        }

      
        if (!isValid) {
            event.preventDefault();
        }
    }
    </script>

    @include('includes.blackfooter')
</body>
</html>


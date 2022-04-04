<html>
    <head>
        <title>Login Quiz App</title>
    </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<body>
@include('components.alert')
<!-- component -->
<div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">

    <div class="flex w-64">
        <img src="{{  asset('quiz-logo.png')  }}" alt="">
    </div>
    @if ($errors->any())
        <div class="bg-red-500 text-white w-25 p-5">
            <ul class="text-center">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

    <!-- Layout  -->
    <div class="bg-white w-96 shadow-xl rounded p-5">
        <h1 class="text-3xl font-medium">Login</h1>
        <p class="text-gray-400">Sign in to continue to our application</p>
        <form class="space-y-5 mt-5" method="POST" action="{{  route('login.store')  }}">
            @csrf
            <input type="email" class="w-full h-12 border border-gray-800 rounded px-3" name="email"
                   placeholder="Email" />
            <div class="w-full flex items-center  border border-gray-800 rounded px-3">
                <input type="password" class="w-4/5 h-12"  placeholder="password" name="password" />
            </div>
            <div class="">
                <a href="#!" class="font-medium text-blue-700 hover:bg-blue-300 rounded-full p-2">Forgot Password ?</a>
            </div>

            <button class="text-center w-full bg-blue-700 rounded-full text-white py-3 font-medium">Submit</button>

        </form>
    </div>
    <!-- Footer -->
    <p>Don't have account ? <a href="{{  route('register')  }}" class="text-blue-700 font-medium">Register</a>  </p>
</div>

</body>
</html>

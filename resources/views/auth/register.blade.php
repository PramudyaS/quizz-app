<html>
<head>
    <title>Login Quiz App</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<body>
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
        <h1 class="text-3xl font-medium">Register</h1>
        <p class="text-gray-400">Register to create account</p>
        <form class="space-y-5 mt-5" method="POST" action="{{  route('register.store')  }}">
            @csrf
            <input type="hidden" name="role" value="guest">
            <input type="text" class="w-full h-12 border border-gray-800 rounded px-3" name="name" placeholder="Name" />
            <input type="email" class="w-full h-12 border border-gray-800 rounded px-3" name="email"
                   placeholder="Email" />
            <div class="w-full flex items-center  border border-gray-800 rounded px-3">
                <input type="password" class="w-4/5 h-12" name="password"  placeholder="password" />
            </div>
            <button class="text-center w-full bg-blue-700 rounded-full text-white py-3 font-medium">Submit</button>
        </form>
    </div>
    <!-- Footer -->
    <p>have account ? <a href="{{  route('login')  }}" class="text-blue-700 font-medium">Login</a>  </p>
</div>
</body>
</html>

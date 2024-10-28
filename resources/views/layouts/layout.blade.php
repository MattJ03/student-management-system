<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class=" bg-gray-500 leading-normal tracking-normal">
<div class="flex">
    <aside class="w-1/4 bg-gray-800 min-h-screen text-white p-4">
        <h2 class="bg-gray-500 text-bold text-white">Student Management System</h2>
    <nav>
        <ul>
            <li class="mb-2"><a href="{{ route('student.index') }}" class="text-white hover:text-gray-700">Students</a>  </li>
        </ul>
    </nav>
    </aside>
    <div class="w-3/4 p-8">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">@yield('page-title', 'Welcome to the Student Management System')</h1>
            <div class="flex items-center">
                <span class="mr-4">{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}" class="text-blue-600 hover:text-blue-800">Logout</a>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="mt-8">
            <p class="text-gray-600">&copy; {{ date('Y') }} School Management System. All rights reserved.</p>
        </footer>
    </div>
</div>


</body>
</html>

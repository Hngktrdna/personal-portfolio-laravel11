<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equuiv-"X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Personal Portfolio Website HTML, CSS, JavaScript</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

<!-- header design -->
<header class="header">
    <a href="#" class="logo">Sarah.</a>

    <div class="bx bx-menu" id="menu-icon"></div>

    <nav class="navbar">
    <a href="{{ route("home") }}"  class="{{ $page == "home"? "active": "" }}">Home</a>
    <a href="{{ route("about") }}" class="{{ $page == "about"? "active": "" }}">About</a>
    <a href="{{ route("education") }}" class="{{ $page == "education"? "active": "" }}">Education</a>
    {{-- <a href="{{ route("skills") }}" class="{{ $page == "skills"? "active": "" }}">Skills</a> --}}
    <a href="{{ route("project") }}" class="{{ $page == "project"? "active": "" }}">Project</a>
    <a href="{{ route("contact") }}" class="{{ $page == "contact"? "active": "" }}">Adress</a>
    </nav>
</header>

<main>
    @yield('content')
</main>
 
</body>
</html>
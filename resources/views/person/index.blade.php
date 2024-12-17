@extends('layout.index', ['page' => 'home'])
@section('content')
<section class="home" id="home">
    <div class="home-content">
        <h1>Hi, I'm <span>Sarah Alia Rahmah</span></h1>
        <div class="text-animate">
            <h3>Wikrama's Student</h3>
        </div>
        <p style="font-size: 1.8em;">Welcome to my portfolio! <br> 
            Here, you'll find a showcase of my projects and ideas, driven by a passion for solving complex problems and creating innovative solutions. Explore my work to see my commitment to creativity, precision, and continuous learning.</p>

        <div class="btn-box">
            <a href="https://www.linkedin.com/in/sarah-alia-rahmah-4ba270341/" class="btn">Hire Me</a>
            <a href="https://wa.me/0895332356200" class="btn">Let's Talk</a>
        </div>
    </div>

    <!-- <aside>
        <img src="https://ih0.redbubble.net/image.1672692759.5706/raf,360x360,075,t,fafafa:ca443f4786.jpg" alt="https://ih0.redbubble.net/image.1672692759.5706/raf,360x360,075,t,fafafa:ca443f4786.jpg">
    </aside> -->

    <div class="home-sci">
        <a href="mailto:sarahaliarahmah1763@gmail.com"><i class='bx bx-envelope'></i></a>
        <a href="https://wa.me/0895332356200"><i class='bx bxl-whatsapp' ></i></a>
        <a href="https://www.linkedin.com/in/sarah-alia-rahmah-4ba270341/"><i class='bx bxl-linkedin' ></i></a>
    </div>

    <div class="home-imgHover"></div>
</section>

<style>
    html, body {
        height: 100%;
        margin: 0;
    }
    
    .home {
        height: 100vh; /* Mengatur tinggi elemen section menjadi 100% dari tinggi viewport */
        background-image: url({{ asset("img/purplesky.png") }});
        background-size: cover; /* Membuat gambar mencakup seluruh latar belakang */
        background-position: center; /* Memusatkan gambar latar belakang */
        background-repeat: no-repeat; /* Menghindari pengulangan gambar */
    }
</style>
@endsection
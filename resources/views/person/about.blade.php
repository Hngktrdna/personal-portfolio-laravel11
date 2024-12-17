@extends('layout.index' , ['page' => 'about'])
@section('content')
<section class="about" id="about">
    <h2 class="heading">About <span>Me</span></h2>

    <div class="about-img">
        <img src="{{ asset("img/Foto Nametag.jpg") }}" alt="">
        <span class="circle-spin"></span>
    </div>

    <div class="about-content">
        <h3>Wikrama's Student!</h3>
        <p>Hello! My name is Sarah Alia Rahmah. I was born in Bogor, April 23th 2008.</p>
        <p>My personality is INTP (Itroverted, Intuitive, Thinking, Perceiving).</p>
        <p>I love reading and enjoy listening to music.</p>

        <div class="btn-box btns">
            <a href="https://pdfhost.io/v/H.tNDaBFp_CV_Sarah_Alia_Rahmah" class="btn">Read My CV</a>
        </div>
    </div>
</section>
@endsection
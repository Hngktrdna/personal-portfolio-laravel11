@extends('layout.index' , ['page' => 'contact'])
@section('content')

<section class="contact" id="contact">
    <h2 class="heading">My <span>Adress</span></h2>

    {{-- <form action="#">
        <div class="input-box">
            <div class="input-field">
                <input type="text" placeholder="Full Name" required>
                <span class="focus"></span>
            </div>
            <div class="input-field">
                <input type="text" placeholder="Email Adress" required>
                <span class="focus"></span>
            </div>
        </div>

        <div class="input-box">
            <div class="input-field">
                <input type="number" placeholder="Mobile Number" required>
                <span class="focus"></span>
            </div>
            <div class="input-field">
                <input type="text" placeholder="Email Subject" required>
                <span class="focus"></span>
            </div>
        </div>

        <div class="textarea-field">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <span class="focus"></span>
        </div>

        <div class="btn-box btns">
        <button type="submit" class="btn">Submit</button>
    </div>
    </form> --}}
    
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d306.25911485051364!2d106.86001278375345!3d-6.658084568799521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8f9edb67a0f%3A0xdbb59261da8c9b59!2sPonpes%20Salafiyah%20Hidayatullah!5e0!3m2!1sen!2sid!4v1718257353390!5m2!1sen!2sid" width="800" height="500" style="border-radius:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<style>
    .map-container {
        display: flex;
        justify-content: center; /* Pusatkan secara horizontal */
        align-items: center; /* Pusatkan secara vertikal */
        margin-top: 20px; /* Jarak atas jika diperlukan */
    }
</style>

@endsection
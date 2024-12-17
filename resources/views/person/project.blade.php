@extends('layout.index', ['page' => 'project'])
@section('content')
<section>
  <style>
    .minip {
        margin: 20px;
        float: left;
        width: 350px; 
    }

    .clr {
        clear: both;
    }
</style>
    <link rel="stylesheet" href="https://use.typekit.net/mbt4tna.css">
    <link rel="stylesheet" href="https://use.typekit.net/kid2tin.css">
    
    <div class="minip">
      <div class="mg">
        <div class="clr"></div>
        <div class="group">
          <span>My Project</span>
        </div>
      </div>
      <div class="av" style="background-image: url({{ asset("img/forPP.png") }});"></div>
      <div class="info">
        <name>Personal Portfolio</name>
        <deets>
          See My Personal Portfolio
        </deets>
      </div>
      <a class="plot" title="Personal Portfolio Project" href="http://127.0.0.1:8000/">
        view project →
      </a>
    </div>

    <div class="minip">
      <div class="mg">
        <div class="clr"></div>
        <div class="group">
          <span>My Project</span>
        </div>
      </div>
      <div class="av" style="background-image: url('https://static.vecteezy.com/system/resources/thumbnails/008/666/463/small_2x/vintage-motorcycle-bike-line-pop-art-logo-colorful-design-with-dark-background-abstract-illustration-isolated-black-background-for-t-shirt-poster-clothing-merch-apparel-badge-design-vector.jpg');"></div>
      <div class="info">
        <name>Motorcycle Rental</name>
        <deets>
          See My Motorcyle Rental Project
        </deets>
      </div>
      <a class="plot" title="Motorcycle Rental Project" href="https://github.com/Hngktrdna/Rental-Motor">
        view project →
      </a>
    </div>

    <div class="minip">
      <div class="mg">
        <div class="clr"></div>
        <div class="group">
          <span>My Project</span>
        </div>
      </div>
      <div class="av" style="background-image: url('https://logodownload.com.br/wp-content/uploads/edd/2017/06/shell-logo.jpg');"></div>
      <div class="info">
        <name>Shell</name>
        <deets>
          See My Shell Project
        </deets>
      </div>
      <a class="plot" title="Shell Project" href="https://github.com/Hngktrdna/Bahan-Bakar">
        view project →
      </a>
    </div>

    <div class="minip">
      <div class="mg">
        <div class="clr"></div>
        <div class="group">
          <span>My Project</span>
        </div>
      </div>
      <div class="av" style="background-image: url('https://th.bing.com/th/id/OIP.wv9VN2yzVCrZzigyvyhBTAHaGF?rs=1&pid=ImgDetMain');"></div>
      <div class="info">
        <name>Cashier</name>
        <deets>
          See Cashier Project
        </deets>
      </div>
      <a class="plot" title="Cashier Project" href="https://github.com/Hngktrdna/Project-Kasir">
        view project →
      </a>
    </div>
</section>

</style>
@endsection
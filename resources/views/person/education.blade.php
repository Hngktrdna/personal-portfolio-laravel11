@extends('layout.index' , ['page' => 'education'])
@section('content')
<section class="education" id="education">
    <h2 class="heading">My <span>Journey</span></h2>

    <div class="education-row">
        <div class="education-column">
            <h3 class="title">Education</h3>

                <div class="education-box">
                    
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2023 - Now</div>
                            <h3>High School - <span>SMK Wikrama Bogor</span></h3>
                            <p font-weight: bold>Software and Game Development Major</p>
                            <p>
                                <ul>
                                    <li>Learning programming languages like Python, HTML, CSS, JavaScript, and PHP.</li>
                                    <li>Completed projects, including websites for shopping, billing management, and a drugstore using Laravel.</li>
                                    <li>Participated in extracurricular activities like Python programming.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="education-column">
            <h3 class="title">Experience</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 0000 - 0000</div>
                            <h3>SOON</h3>
                            <p>-</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 000 - 0000</div>
                            <h3>SOON</h3>
                            <p>-</p>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</section>
@endsection
@extends('layouts.academic')

@section('content')
<section class="section-area section-sp2 popular-courses-bx page-section" style="padding-bottom: 0em !important;" id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Teaser Video Pembelajaran</h2>
            </div>
        <div class="row">
            <div class="col-md-12">
                <p>Salah satu materi utama pembelajaran online dalam LMS (Learning Management System) adalah tersedianya video pembelajaran di setiap minggu perkuliahan. Anda dapat mengaksesnya setiap minggu dengan berulang-ulang untuk dapat memperjelas pemahaman anda tentang materi yang dirancang setiap minggu. Dengan cara demikian anda tidak dapat kehilangan satu penjelasan dari dosen yang mengampu mata kuliah. Kelebihan dari metode pembelajaran on-line dengan tersedianya materi video pembelajaran adalah:</p>
                <ol class="ml-5">
                    <li>Materi bersifat repeatable at anytime</li>
                    <li>Penjelasan dosen atau tutor dapat direkam secara digital untuk dijadikan sebagai bahan diskusi.</li>
                    <li>Setiap video pembelajaran disertai dengan pointer atau topik-topik utama dalam bentuk slide PPT yang memudahkan anda dalam memahami isi materi perkuliahan</li>
                    <li>Video dilengkapi dengan teknologi animasi audio visual yang memudahkan anda dalam memahami ilustrasi suatu sistem atau teori yang kompleks</li>
                </ol>
                <p>Dengan adanya video pembelajaran tersebut, diskusi dengan dosen atau tutor dalam forum LMS dapat dilakukan secara interaktif. Anda dapat menanyakan kepada dosen atau tutor terkait materi yang dijelaskan. Sehingga penjelasan dosen dapat anda eksplorasi secara lebih mendalam dan kritis. Penjelasan utama dengan video pembelajaran dalam LMS juga didukung oleh aktifitas Live Video Streaming atau Video Conference di setiap minggu perkuliahan. Sehingga penjelasan oleh dosen dapat anda dapatkan secara lebih dibandingkan dengan metode tatap muka di kelas.</p>
                <p>Selain itu, isi video pembelajaran di setiap mata kuliah dalam setiap minggu perkuliahan dapat berupa sebagai berikut:</p>
                <ol class="ml-5">
                    <li>Video Penjelasan Materi</li>
                    <li>Video Tutorial/Instruksi</li>
                    <li>Video Simulasi atau demo praktikum laboratorium atau perangkat lunak</li>
                    <li>Video Seminar Ilmiah (Webinar Ilmiah)</li>
                </ol>
                <p>Berikut adalah contoh video pembelajaran (teaser), silahkan mencoba:</p>
                <div class="video-teaser">
                    <video controls src="{{ asset('homepages/images/video/teaservideo2.mp4') }}"></video>
                </div>
                    {{-- <iframe class="embed-responsive-item" src="{{ asset('homepages/images/video/teaservideo1.mp4') }}" frameborder="0" allowfullscreen></iframe> --}}
            </div>
        </div>
    </div>
</section>
@endsection
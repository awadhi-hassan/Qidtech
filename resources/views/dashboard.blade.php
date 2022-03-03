<x-app-layout>
    <div class="slider">
        @foreach($slideshow_photos as $slideshow_photo)
            @if ($slideshow_photo !== '.' & $slideshow_photo !== '..')

            <div class="company-name">Qidtech<span class="company-name-s">Solutions</span></div>
            <ul class="align-items-center">
                <li>Design <span>.</span></li>
                <li>Brand <span>.</span></li>
                <li>Print <span>.</span></li>
                <li>Promo</li>
            </ul>
            <p>Contact Qidtech Solutions to get you started.</p>
                <div class="myslide">
                    <div class="slideshow-desc">
                        <h1>{{ pathinfo($slideshow_photo, PATHINFO_FILENAME) }}</h1>
                    </div>

                    <img src='{{ asset("storage/slideshow/{$slideshow_photo}") }}'>
                </div>
            @endif
        @endforeach
        <div class="dotsbox">
            @for ($i=1; $i < count($slideshow_photos); $i++)
                <span class="dot" onclick="currentSlide({{$i}})"></span>
            @endfor
        </div>
    </div>
</x-app-layout>

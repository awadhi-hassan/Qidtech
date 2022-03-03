<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    @foreach($slideshow_photos as $slideshow_photo)
        <ul>
            @if ($slideshow_photo !== '.' & $slideshow_photo !== '..')
                <img src='{{ asset("storage/slideshow/{$slideshow_photo}") }}' alt="">
            @endif
        </ul>
    @endforeach
</div>

@if(count($gallery??[]))
    <div class="video-gallery row row-grid pt-s">
        @foreach($gallery as $video)

                <iframe class="video_iframe" src="{{ url('https://www.youtube.com/embed/'.$video->video) }}" frameborder="0" allow="autoplay;" allowfullscreen></iframe>

        @endforeach
        @if (empty($skip_plugins))
            @push('js')
                @js(aSite('js/video.js'))
            @endpush
        @endif
    </div>
@endif
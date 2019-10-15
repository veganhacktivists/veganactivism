@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        @include('partials.nav-info-bar')

        <div class="row">
            @include('components.org-details-card')
        </div>

        <!-- -->
        <div id="disqus_thread" class="mt-2 p-4 card"></div>
    
		<script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = https://veganactivism.org/anonymous-for-the-voiceless;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = anonymous-for-the-voiceless; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://youaretheirvoice.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>

    <div class="col-lg-4 mt-30 mt-lg-0">
        @include('partials.sidebar')
    </div>
@endsection

@section('scripts')
  <script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    tag.class = "embed-responsive-item";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
      @foreach($organization->youtubeVideos as $youtubeVideo)
        player = new YT.Player('player-{{ $youtubeVideo->id }}', {
          height: '390',
          width: '640',
          videoId: "{{ $youtubeVideo->youtube_id }}",
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      @endforeach
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
      // event.target.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
      if (event.data == YT.PlayerState.PLAYING && !done) {
        setTimeout(stopVideo, 6000);
        done = true;
      }
    }
    function stopVideo() {
      player.stopVideo();
    }
  </script>

@endsection

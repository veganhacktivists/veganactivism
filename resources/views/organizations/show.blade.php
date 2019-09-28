@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        @include('partials.welcome-card')

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

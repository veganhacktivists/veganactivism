<div class="card m-3 p-0 border-0 col" >
    <div class="embed-responsive embed-responsive-16by9">
        <img src={{ $organization->image_full_url}} class="card-img-top embed-responsive-item" alt="...">
    </div>
    <div class="card-body">
        <h4 class="card-title font-weight-bold">Get involved with: {{ $organization->title }}</h4>
        <hr>
        @if($organization->hasDetails())
          {{ $organization->details }}
        @else
          <h2 class="font-weight-bold">What are they all about?</h2>


          <div class="card-text">
            <i class="fa-angle-double-right fa-w-14"></i> {!! $organization->about !!}
          </div>

          @foreach($organization->youtubeVideos as $youtubeVideo)
            <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
            <div id="player-{{ $youtubeVideo->id }}" class="embed-responsive embed-responsive-16by9"></div>
          @endforeach

          <h2 class="font-weight-bold">What type of activism do they do?</h2>

          <div class="card-text">
            <i class="fa-angle-double-right fa-w-14"></i> {!! $organization->activism !!}
          </div>

          <h2 class="font-weight-bold">How do I get involved?</h2>
          <p class="card-text">
            <i class="fa-angle-double-right fa-w-14"></i> To start volunteering with {{ $organization->title }}, click a button below!
          </p>
        @endif

        <div class="row justify-content-center">
            @foreach($organization->links as $link)
              @include('components.links.' . $link->type, ['url' => $link->url])
            @endforeach
        </div>

        <hr>

        <div class="post-navigation">
            <div class="small text-muted my-2">VEGANACTIVISM.ORG</div>
            <a href="/" class="font-weight-bold primary"><i class="fas fa-arrow-left"></i> Go back to homepage</a>
        </div>
        
    </div>

</div>

<div class="card m-3 p-0 border-0 col" >
        <img src="{{ $organization->image_full_url}}" class="card-img-top embed-responsive-item" alt="...">
    <div class="card-body">
        <div class="row px-4 justify-content-between">
          <span class="card-title font-weight-bold">Get involved with {{ $organization->title }}!</span>

          @if(Auth::check() && backpack_user()->canEdit($organization))
            <a href="/admin/organization/{{$organization->id}}/edit">
              <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-purple" style="background-color: #343a40;">
                Edit&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i></button>
            </a>
          @endif
        </div>
        <hr>
        @if($organization->hasDetails())
          {{ $organization->details }}
        @else
          <h2 class="font-weight-bold">What are they all about?</h2>

          <div class="card-text">
            {!! $organization->about !!}
          </div>

          @foreach($organization->youtubeVideos as $youtubeVideo)
            <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
            <div id="player-{{ $youtubeVideo->id }}" class="embed-responsive embed-responsive-16by9 py-3"></div>
          @endforeach

         @if($organization->activism != null) 
          <h2 class="font-weight-bold">What type of activism do they do?</h2>

          <div class="card-text">
            {!! $organization->activism !!}
          </div>
        @endif
		  <br>
          <h2 class="font-weight-bold">How do I get involved?</h2>
          <p class="card-text">
            To start volunteering with {{ $organization->title }}, click a button below!
          </p>
        @endif

        <div class="row">
            @foreach($organization->links as $link)
              @if(View::exists('components.links.' . $link->type))
                @include('components.links.' . $link->type, ['url' => $link->url])
              @endif
            @endforeach
        </div>

        <hr>

        <div class="small text-muted my-2">VEGANACTIVISM.ORG</div>

        <div class="row">
          <div class="col-sm-6 post-navigation">
            <a href="/" class="font-weight-bold primary"><i class="fas fa-arrow-left"></i> Go back to homepage</a>
          </div>

          <div class="col-sm-6 post-navigation text-right">
            <div class="small text-muted">Page last updated: {{ \Carbon\Carbon::parse($organization->updated_at)->diffForHumans() }}</div>
          </div>
        </div>        
    </div>

</div>

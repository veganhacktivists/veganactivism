<div class="card m-3 p-0 border-0 col" >
    <div class="embed-responsive embed-responsive-16by9">
        <img src="https://picsum.photos/id/237/1920/1080" class="card-img-top embed-responsive-item" alt="...">
    </div>
    <div class="card-body">
        <h4 class="card-title font-weight-bold">Get involed with: {{ $organization->title }}</h4>
        <hr>
        @if(strlen($organization->details) == 0)
          <h2 class="font-weight-bold">What are they all about?</h2>

          <div class="card-text">
            <i class="fa-angle-double-right fa-w-14"></i> {!! $organization->about !!}
          </div>

          <h2 class="font-weight-bold">What type of activism do they do?</h2>

          <div class="card-text">
            <i class="fa-angle-double-right fa-w-14"></i> {!! $organization->activism !!}
          </div>

          <h2 class="font-weight-bold">How do I get involved?</h2>
          <p class="card-text">
            <i class="fa-angle-double-right fa-w-14"></i> To start volunteering with {{ $organization->title }}, click a button below!
          </p>
        @else
          {{ $organization->details }}
        @endif

        <div class="row justify-content-center">
            <a href="{{ $organization->website()->url }}?ref=veganactivism.org" target="_blank" class="btn btn-danger my-1 py-1"><i class="fas fa-link mr-2"></i>Visit Homepage</a>
            <a href="" class="btn btn-dark ml-3 my-1 py-1"><i class="fas fa-calendar-alt mr-2"></i>View Events</a>
            <a href="" target="_blank" class="btn btn-dark ml-3 my-1 py-1"><i class="fab fa-facebook-square mr-2"></i>Facebook</a>
            <a href="" class="btn btn-dark ml-3 my-1 py-1"><i class="fas fa-envelope mr-2"></i>Contact</a>
        </div>

        <hr>

        <div class="post-navigation">
            <div class="small text-muted my-2">VEGANACTIVISM.ORG</div>
            <a href="/" class="font-weight-bold primary"><i class="fas fa-arrow-left"></i> Go back to homepage</a>
        </div>
    </div>
</div>

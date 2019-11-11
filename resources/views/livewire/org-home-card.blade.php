<div class="col-md-6 col-lg-6">
  <div class="card my-3 border-0">

    <div class="ribbon-holder">
      @if ($organization['featured'] === 1)
        <div class="ribbon ribbon-holder">Featured</div>
      @endif
      <img style="height: 120px;" src={{ $organization['image_card_url']}} class="card-img-top" alt={{ $organization['title'] }}>
    </div>

    <div class="card-body">
      <h5 class="mb-3">
        <a href="{{ $organization['show_route'] }}" class="text-dark font-weight-bold" style="line-height: 1.5 !important;">{{ $organization['call_to_action'] }}
        </a>
      </h5>
      <p class="card-text">{{ $organization['card_content'] }}</p>
      <div class="my-2 mx-1 row">
        <a href="{{ $organization['show_route'] }}" class="btn btn-dark py-1"><i class="fas fa-info-circle mr-1"></i>Learn More</a>
        <a href="{{ $organization['website_url'] }}" target="_blank" class="btn btn-danger ml-3 py-1"
           onclick="axios.post('/organizations/{{ $organization['id'] }}/clicks')">
          <i class="fas fa-link mr-1"></i>Visit Website
        </a>
      </div>
      <p class="card-text"><small><strong>{{ $organization['website_clicks']}}</strong> Activists clicked on this.</small></p>
    </div>
  </div>
</div>

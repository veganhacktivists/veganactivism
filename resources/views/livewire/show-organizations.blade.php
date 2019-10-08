<div>

    <select class="form-control col-3" wire:change="setSort($event.target.value)">
        <option value="default">Sort By</option>
        <option value="created_at">Recent</option>
        <option value="created_at_older">Older</option>
        <option value="clicks">Clicks</option>
    </select>

    <div class="row">
        @foreach ($organizations as $organization)
        <div class="col-md-6 col-lg-6">
            <div class="card my-3 border-0">
                <img src={{ $organization['image_card_url']}} class="card-img-top" alt={{ $organization['title'] }}>
                <div class="card-body">
                    <h5 class="mb-3"><a href="{{ $organization['show_route'] }}" class="text-dark font-weight-bold">{{ $organization['call_to_action'] }}

                            @if($organization['featured'] == 1)
                            <span class="badge badge-primary">Featured</span>
                            @endif

                        </a></h5>
                    <p class="card-text">{{ $organization['card_content'] }}</p>
                    <div class="my-2 mx-1 row">
                        <a href="{{ $organization['show_route'] }}" class="btn btn-dark py-1"><i class="fas fa-info-circle mr-1"></i>Learn More</a>
                        <a href="{{ $organization['website_url'] }}" target="_blank" class="btn btn-danger ml-3 py-1"><i class="fas fa-link mr-1"></i>Visit Website</a>
                    </div>
                    <p class="card-text"><small class="text-muted">STREET ACTIVISM - </small> <small><strong>{{ $organization['website_clicks']}}</strong> Activists clicked on this.</small></p>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-md-6 col-lg-6">
            <div class="card my-3 border-0">
                <img src="https://veganactivism.org/banners/add-your-organization.jpg" class="card-img-top" alt="Add your organization">
                <div class="card-body">
                    <h5 class="mb-3"><a href="https://veganhacktivists.org/contact?veganactivism" class="text-dark font-weight-bold">
                            Add your organization here or recommend one for us!
                        </a></h5>
                    <p class="card-text">New organizations are added on a case-by-case basis. Let us know who you'd like to be added!</p>
                    <div class="my-2 mx-1 row">
                        <a href="https://veganhacktivists.org/contact?veganactivism" class="btn bg-color-purple text-light py-1"><i class="fas fa-plus mr-1"></i>Add an Organization</a>
                    </div>
                    <p class="card-text"><small>CLICK THE BUTTON ABOVE TO CONTACT US </small></p>
                </div>
            </div>
        </div>

    </div>
</div>
<div>

    <select class="form-control col-3" wire:model="sort">
        <option value="default">Sort By</option>
        <option value="created_at">Recent</option>
        <option value="created_at_older">Older</option>
        <option value="clicks">Clicks</option>
    </select>

    <div class="row">
        @foreach ($organizations as $organization)
            <div  class="col-md-6 col-lg-6">
                <div class="card my-3 border-0">
                    <img src={{ $organization['image_card_url']}} class="card-img-top" alt={{ $organization['title'] }}>
                    <div class="card-body">
                        <h4 class="card-title"><a href="org.show_route" class="text-dark font-weight-bold">{{ $organization['title'] }}</a></h4>
                        <p class="card-text">{{ $organization['card_content'] }}</p>

                        <div class="my-2 mx-1 row">
                            <a href="pages/" class="btn btn-dark py-1 "><i class="fas fa-info-circle mr-1"></i>Learn More</a>
                            <a href="" target="_blank" class="btn btn-danger ml-3 py-1"><i class="fas fa-link mr-1"></i>Visit Website</a>
                        </div>
                    <p class="card-text"><small class="text-muted">STREET ACTIVISM - </small> <small><strong>{{ $organization['website_clicks']}}</strong> Activists clicked on this.</small></p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>

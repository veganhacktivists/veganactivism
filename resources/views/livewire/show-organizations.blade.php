<div>

<div class="d-flex justify-content-between">
<div class="w-25">
  <select class="form-control" wire:change="setSort($event.target.value)">
      <option value="default">Sort By</option>
      <option value="created_at">Recent</option>
      <option value="created_at_older">Older</option>
      <option value="clicks">Popularity</option>
  </select>
</div>
	@if(Auth::check() && backpack_user()?->can(\App\Models\User::PERMISSION_NAVBAR_VIEW))
	<a href="{{backpack_url()}}">
	<button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-purple mb-0" style="background-color: #dc3545;">
	<i class="fas fa-user-cog mr-2"></i> Administration Panel</button>
	</a>
	@else
	<a href="/login">
	<button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-purple mb-0" style="background-color: #343a40;">
	Login&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i></button>
	</a>
	@endif
</div>

    <div class="row">
        @foreach ($featuredOrganizations as $organization)
          @livewire('org-home-card', ['organization' => $organization, 'key' => $organization['id']])
        @endforeach
        @foreach ($regularOrganizations as $organization)
          @livewire('org-home-card', ['organization' => $organization, 'key' => $organization['id']])
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
                        <a href="https://veganhacktivists.org/contact?veganactivism" class="btn btn-purple text-light py-1"><i class="fas fa-plus mr-1"></i>Add an Organization</a>
                    </div>
                    <p class="card-text"><small>CLICK THE BUTTON ABOVE TO CONTACT US </small></p>
                </div>
            </div>
        </div>

    </div>
</div>

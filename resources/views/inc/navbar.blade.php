

@if(Auth::check())
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
       {{ link_to_route('home', config('app.name'), null, ['class' => 'navbar-brand']) }}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbarNav">
        <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="text-secondary" href="{{backpack_url()}}">Admin Dashboard</a>
           </li>
        </ul>
      </div>
   </nav>
@endif

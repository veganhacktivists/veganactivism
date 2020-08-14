@extends('layouts.app')

@section('content')
  <div class="col-lg-8">
    @include('partials.welcome-card')
	
	<div class="card my-3">
  <div class="card-body pl-4 pr-4">
  	<a href="https://animalrightsmap.org/" target="_blank" style="position: absolute;right: 24px;margin-top: -5px;">
	<button type="submit" class="btn btn-danger ml-3 py-1" style="">
	Open Map&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i></button>
	</a>	
				
    <h4 style="padding-bottom: 5px;"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Global Animal Rights Activism Map </h4>
   <iframe width="100%" height="300px" frameborder="0" allowfullscreen="" src="//umap.openstreetmap.fr/de/map/animal-rights-map_487135?scaleControl=false&amp;miniMap=false&amp;scrollWheelZoom=true&amp;zoomControl=true&amp;allowEdit=false&amp;moreControl=true&amp;searchControl=true&amp;tilelayersControl=false&amp;embedControl=null&amp;datalayersControl=expanded&amp;onLoadPanel=caption&amp;captionBar=false&amp;fullscreenControl=false&amp;locateControl=true&amp;measureControl=false" style="overflow:hidden;height:300px;width:100%"></iframe>

  <div class="my-2 mx-1 row" style="
    margin-bottom: -10px!important;
">
        <a href="https://animalrightsmap.org" target="_blank"><i class="fas fa-info-circle mr-1"></i>Click here to launch the map!</a>
        
      </div></div>
</div>

    @livewire('show-organizations')

    @include('partials.special-thanks')
  </div>

  <div class="col-lg-4 mt-30 mt-lg-0">
    @include('partials.sidebar')
  </div>
@endsection

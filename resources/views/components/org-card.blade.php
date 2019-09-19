
<div lass="col-md-6">
  <div class="card my-3 border-0">
    <img src="{{ $post->image_card_url }}" class="card-img-top" alt=#">
    <div class="card-body">
      <h4 class="card-title"><a href="#" class="text-dark font-weight-bold">{{ $post->title }}</a></h4>
      <p class="card-text">{{ $post->card_content}}</p>

      <div class="my-2 mx-1 row">
        <a href="#" class="btn btn-dark py-1 "><i class="fas fa-info-circle mr-1"></i>Learn More</a>
        <a href="#" target="_blank" class="btn btn-danger ml-3 py-1"><i class="fas fa-link mr-1"></i>Visit Website</a>
      </div>
      <p class="card-text"><small class="text-muted">STREET ACTIVISM - </small> <small><strong>400</strong> Activists clicked on this.</small></p>
    </div>
  </div>
</div>
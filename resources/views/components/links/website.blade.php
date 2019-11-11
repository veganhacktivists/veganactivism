<a href="{{ $url }}?ref=veganactivism.org"
   target="_blank"
   class="btn btn-danger ml-3 my-1 py-1"
   onclick="axios.post('/organizations/{{ $organization['id'] }}/clicks')"
>
  <i class="fas fa-link mr-2"></i>Visit Website
</a>

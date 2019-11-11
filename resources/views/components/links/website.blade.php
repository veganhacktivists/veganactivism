<a href="{{ $url }}?ref=veganactivism.org"
   target="_blank"
   class="btn btn-danger ml-3 my-1 py-1"
   onclick="axios.post('{{route('organizations.clicks.store', $organization['id'])}}')"
>
  <i class="fas fa-link mr-2"></i>Visit Website
</a>

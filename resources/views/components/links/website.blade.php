<a href="{{ $url }}?ref=veganactivism.org"
   target="_blank"
   class="btn btn-danger ms-3 my-1 py-1"
   onclick="axios.post('{{route('organizations.clicks.store', $organization['slug'])}}')"
>
  <i class="fas fa-link me-2"></i>Visit Website
</a>

<div class="container">
    @foreach ($posts->chunk(3) as $chunk)
        <div class="row">
            @foreach ($chunk as $post)
                @include('components.org-card', $post);
            @endforeach
        </div>
    @endforeach
</div>
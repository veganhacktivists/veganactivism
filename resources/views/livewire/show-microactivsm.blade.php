<ul class="list-unstyled list mb-0">
    @foreach($ideas as $idea)
    <li>
        <div class="row pt-2">
            <div class="d-none d-sm-block col-sm-2 col-md-1 col-lg-2 p-0 text-center">
            <span class="list-item-number">{{ $loop->iteration }}</span>
            </div>
            <div class="col-12 col-sm-10 pl-4 pl-sm-0 pl-md-4 pl-lg-0 mb-4">
            <strong class="list-item-title" style="background-color: {{ $idea->color}}"> {{$idea->title}}</strong>
                {!! $idea->description !!}
            </div>
        </div>
    </li>
    @endforeach
</ul>

<x-home-master>

    @section('content')

    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>

    <!-- Blog Post -->
    @foreach($posts as $post)

    <div class="card mb-4">
        <img class="card-img-top" src="{{$post->post_image}}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{$post->body}}</p>
            <a href="{{route('post', $post->id)}}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            {{$post->created_at->diffForHumans()}}, by
            <a href="#">{{$post->user->name}}</a>
        </div>
    </div>

    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>

    @endsection

</x-home-master>
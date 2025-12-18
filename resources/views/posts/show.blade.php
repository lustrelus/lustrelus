<x-layout>
    <h1>{{  $post->title }}</h1>

    @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="100">
                        @else
                            No Image
                        @endif

    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}">Return to all posts</a>
</x-layout>

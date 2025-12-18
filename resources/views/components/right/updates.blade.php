<aside class="box" id='updates'>

    <marquee>~ Freshest update! ~</marquee>

    @foreach($posts as $post)

            <div id="updates-post">
    <a href='/posts/{{ $post->id }}'>

    <h3>{{ $post->title }}</h3>
    <p>{{ Str::limit($post->content, 100) }}</p>
    <h6>{{ $post->updated_at->diffForHumans() }}</h6>


    </a>
            </div>

    @endforeach

    <hr>
    <a href={{ route('posts.index') }}>All updates</a>

</aside>

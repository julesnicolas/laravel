
<ul>
    @forelse($post->comments as $c)
        <li>Comment : {{ $c->message }}</li>
    @empty
        <li>No comment</li>
    @endforelse
</ul>
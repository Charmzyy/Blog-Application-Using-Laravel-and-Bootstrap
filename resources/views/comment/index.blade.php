<section class="comments">
    <h2>Comments</h2>
    @foreach($comments as $comment)
        <div class="comment">
            <p>{{ $comment->content }}</p>
            <p>By: </p>
            <p>On: {{ $comment->created_at }}</p>
        </div>
    @endforeach
</section>
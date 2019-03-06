
<p>
    {{ $article->content }}
    <small>{{ $article->created_at }}</small>
    <br/>
    <br/>
    <div style="text-align: center;">
        <img src="{{ $message->embed(storage_path('태산2.jpeg')) }}" alt="">
    </div>
</p>

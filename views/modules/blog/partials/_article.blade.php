<article class="post-wrap">
    <div class="row">
        <div class="col-md-4">
            <div class="post-media">
                <a href="{{ $post->present()->firstImage(800,null,'resize',80) }}" data-gal="prettyPhoto"><img class="img-thumbnail" src="{{ $post->present()->firstImage(400,500,'fit',80) }}" alt=""></a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="post-header">
                <h2 class="post-title"><a href="{{ $post->url }}">{{ $post->title }}</a></h2>
                <div class="post-meta"><a href="#">{{ $post->author->fullname }}</a> / {{ $post->created_at->formatLocalized('%d %B %Y') }} / <a href="{{ $post->category->url }}">{{ $post->category->name }}</a></div>
            </div>
            <div class="post-body">
                <div class="post-excerpt">
                    <p>{!! $post->intro !!}</p>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-read-more"><a href="{{ $post->url }}" class="btn btn-theme btn-theme-transparent btn-icon-left">Devamını Oku</a></span>
            </div>
        </div>
    </div>
</article>
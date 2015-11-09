@include('ao-html::cols', ['tag', $tag])

<div class="form-group">
    {!! '<button ' !!}

    @if($tag->disabled)
        {!! 'disabled="disabled"' !!}
    @endif

    {!! strlen($tag->classes) > 0 ? 'class="' . $tag->classes . '"' : 'class="btn btn-default"' !!}
    {!! strlen($tag->id) > 0 ? 'id="' . $tag->id . '"' : '' !!}
    {!! strlen($tag->type) > 0 ? 'type="' . $tag->type . '"' : '' !!}
    {!! strlen($tag->title) > 0 ? 'title="' . $tag->title . '"' : '' !!}
    {!! '>' . $tag->label . '</button>' !!}
</div>

@include('ao-html::cols-end', ['tag', $tag])
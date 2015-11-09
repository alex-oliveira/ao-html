@include('ao-html::cols', ['tag', $tag])

{!! '<section ' !!}
{!! strlen($tag->classes) > 0 ? 'class="' . $tag->classes . '"' : 'class="panel-group"' !!}
{!! strlen($tag->id) > 0 ? 'id="' . $tag->id . '"' : 'data-parent="panel-group-collapse"' !!}
{!! '>' !!}
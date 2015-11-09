@include('ao-html::cols', ['tag', $tag])

<ul class="{!! strlen($tag->classes) > 0 ? $tag->classes : 'nav nav-tabs' !!}" {!! strlen($tag->id) > 0 ? 'id="' . $tag->id . '"' : '' !!}>
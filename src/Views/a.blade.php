@include('ao-html::cols', ['tag', $tag])

{!! '<a ' !!}

class="{!! strlen($tag->classes) > 0 ? $tag->classes : 'btn btn-xs btn-default' !!} {!! $tag->disabled ? 'disabled' : '' !!}"

{!! strlen($tag->tooltip) > 0 ? 'ao-tooltip="' . $tag->tooltip . '"' : '' !!}
{!! strlen($tag->id) > 0 ? 'id="' . $tag->id . '"' : '' !!}
{!! strlen($tag->href) > 0 ? 'href="' . $tag->href . '"' : '' !!}
{!! strlen($tag->title) > 0 ? 'title="' . $tag->title . '"' : '' !!}
{!! '>' . (strlen($tag->icon) > 0 ? '<i class="' . $tag->icon .'"></i>' : $tag->label) . '</a>' !!}

@include('ao-html::cols-end', ['tag', $tag])
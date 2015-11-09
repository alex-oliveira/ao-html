<li class="{!! strlen($tag->classes) > 0 ? $tag->classes : '' !!} {{ $tag->active ? 'active' : '' }}" {!! strlen($tag->id) > 0 ? 'id="' . $tag->id . '"' : '' !!}>
    <a href="{{ $tag->href }}" title="{{ $tag->title }}">
        <i class="{{ $tag->icon }}"></i> <span class="hidden-xs">{{ $tag->label }}</span>
    </a>
</li>
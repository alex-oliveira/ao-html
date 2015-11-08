<li class="{{ $tag->active ? 'active' : '' }}">
    <a href="{{ $tag->href }}" title="{{ $tag->title }}">
        <i class="{{ $tag->icon }}"></i> <span class="hidden-xs">{{ $tag->label }}</span>
    </a>
</li>
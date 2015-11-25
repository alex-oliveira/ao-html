<?php
$att = [];
$att[] = 'class="' . (strlen($tag->classes) > 0 ? $tag->classes : '') . ' ' . ($tag->active ? 'active' : '') . '"';
strlen($tag->id) > 0 ? $att[] = 'id="' . $tag->id . '"' : null;
?>

<li {!! implode(' ', $att) !!} >
    <a href="{{ $tag->href }}" title="{{ $tag->title }}" data-toggle="tab">
        <i class="{{ $tag->icon }}"></i> <span class="hidden-xs">{{ $tag->label }}</span>
    </a>
</li>
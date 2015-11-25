<?php
$attr = [];
$attr[] = 'class="' . (strlen($tag->classes) > 0 ? $tag->classes : '') . ' ' . ($tag->disabled ? 'disabled' : '') . '"';
strlen($tag->id) > 0 ? $attr[] = 'id="' . $tag->id . '"' : null;
strlen($tag->title) > 0 ? $attr[] = 'title="' . $tag->title . '"' : null;
strlen($tag->tooltip) > 0 ? $attr[] = 'ao-tooltip="' . $tag->tooltip . '"' : null;
strlen($tag->href) > 0 ? $attr[] = 'href="' . $tag->href . '"' : null;
?>

@include('ao-html::cols', ['tag', $tag])

<a {!! implode(' ', $attr) !!} >{!! $tag->label !!}</a>

@include('ao-html::cols-end', ['tag', $tag])
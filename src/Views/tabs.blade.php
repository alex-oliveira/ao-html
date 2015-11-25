@include('ao-html::cols', ['tag', $tag])

<?php
$att = [];
$att[] = 'class="' . (strlen($tag->classes) > 0 ? $tag->classes : 'nav nav-tabs') . '"';
strlen($tag->id) > 0 ? $att[] = 'id="' . $tag->id . '"' : null;
?>

<ul {!! implode(' ', $att) !!} role="tablist">
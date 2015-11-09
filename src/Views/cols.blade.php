@if(strlen($tag->cols) > 0)
    <div class="{!! is_numeric($tag->cols) ? 'col-sm-' . $tag->cols : $tag->cols !!} {!! is_numeric($tag->offset) ? 'col-sm-offset-' . $tag->offset : $tag->offset !!}">
@endif

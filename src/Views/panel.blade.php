@include('ao-html::cols', ['tag', $tag])

<div class="{!! strlen($tag->classes) > 0 ? $tag->classes : 'panel panel-default' !!}" {!! strlen($tag->id) > 0 ? 'id="' . $tag->id . '"' : '' !!}>
    <div class="panel-heading" href="#collapse-{{ str_slug($tag->label, '-') }}" {!! strlen($tag->parent) > 0 ? 'data-parent="#' . $tag->parent . '"' : '' !!} data-toggle="collapse" title="Expandir/Contrair">
        <h4 class="panel-title">
            <i class="glyphicon glyphicon-{{ $tag->closed ? 'plus' : 'minus' }}-sign"></i>&ensp; {{ $tag->label }}
        </h4>
    </div>
    <div id="collapse-{{ str_slug($tag->label, '-') }}" class="panel-collapse collapse {{ $tag->closed ? '' : 'in' }}">
        <div class="panel-body">
            @if($tag->row)
                <div class="row">
            @endif
<div class="panel panel-default">
    <div class="panel-heading" href="#collapse-{{ str_slug($tag->label, '-') }}" data-toggle="collapse" title="Expandir/Contrair">
        <h4 class="panel-title">
            <i class="glyphicon glyphicon-{{ $tag->closed ? 'plus' : 'minus' }}-sign"></i>&ensp; {{ $tag->label }}
        </h4>
    </div>
    <div id="collapse-{{ str_slug($tag->label, '-') }}" class="panel-collapse collapse {{ $tag->closed ? '' : 'in' }}">
        <div class="panel-body">
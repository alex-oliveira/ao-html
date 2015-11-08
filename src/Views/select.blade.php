<div class="form-group">
    <label>
        {!! $tag->label !!}
        @if($tag->required)
            <sup ao-tooltip="top" title="Campo obrigatório">
                <i class="glyphicon glyphicon-asterisk text-danger"></i>
            </sup>
        @endif
        @if($tag->help)
            <i class="glyphicon glyphicon-question-sign pull-right text-info" ao-popover="top" title="Ajuda" data-content="{!! $tag->help !!}"></i>
        @endif
    </label>
    {!! '<select class="form-control" ' !!}
    {!! strlen($tag->name) > 0 ? 'name="' . $tag->name . '"' : '' !!}
    {!! $tag->required ? 'required="required"' : '' !!}
    {!! strlen($tag->title) > 0 ? 'title="' . $tag->title . '"' : '' !!}
    {!! strlen($tag->placeholder) > 0 ? 'placeholder="' . $tag->placeholder . '"' : '' !!}
    {!! '>' !!}
    @if($tag->old)
        @if($tag->pattern)
            @foreach($tag->options as $key => $value)
                <option value="{!! $key !!}" {!! $value == old($tag->oldName(), $tag->pattern) ? 'selected="selected"' : '' !!}>{!! $value !!}</option>
            @endforeach
        @else
            @foreach($tag->options as $key => $value)
                <option value="{!! $key !!}" {!! $value == old($tag->oldName()) ? 'selected="selected"' : '' !!}>{!! $value !!}</option>
            @endforeach
        @endif
    @else
        @if($tag->pattern)
            @foreach($tag->options as $key => $value)
                <option value="{!! $key !!}" {!! $value == $tag->pattern ? 'selected="selected"' : '' !!}>{!! $value !!}</option>
            @endforeach
        @else
            @foreach($tag->options as $key => $value)
                <option value="{!! $key !!}">{!! $value !!}</option>
            @endforeach
        @endif
    @endif
    {!! '</select>' !!}
</div>
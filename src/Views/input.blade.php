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

    {!! '<input class="form-control" ' !!}
    {!! strlen($tag->type) > 0 ? 'type="' . $tag->type . '"' : '' !!}

    @if($tag->disabled)
        {!! 'disabled="disabled"' !!}
    @endif

    {!! strlen($tag->name) > 0 ? 'name="' . $tag->name . '"' : '' !!}
    {!! $tag->required ? 'required="required"' : '' !!}
    {!! strlen($tag->maxlength) > 0 ? 'maxlength="' . $tag->maxlength . '"' : '' !!}
    {!! strlen($tag->title) > 0 ? 'title="' . $tag->title . '"' : '' !!}
    {!! strlen($tag->placeholder) > 0 ? 'placeholder="' . $tag->placeholder . '"' : '' !!}

    @if(strlen($tag->value) > 0)
        {!! 'value="' . $tag->value . '"' !!}
    @else
        @if($tag->old)
            @if($tag->pattern)
                {!! 'value="' . old($tag->oldName(), $tag->pattern) . '"' !!}
            @else
                {!! 'value="' . old($tag->oldName()) . '"' !!}
            @endif
        @else
            @if($tag->pattern)
                {!! 'value="' . $tag->pattern . '"' !!}
            @else
                {!! 'value=""' !!}
            @endif
        @endif
    @endif

    {!! ' />' !!}
</div>
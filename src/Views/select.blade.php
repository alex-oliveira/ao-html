@include('ao-html::cols', ['tag', $tag])

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
    {!! '<select ' !!}

    @if($tag->disabled)
        {!! 'disabled="disabled"' !!}
    @endif

    {!! strlen($tag->classes) > 0 ? 'class="' . $tag->classes . '"' : 'class="form-control"' !!}
    {!! strlen($tag->id) > 0 ? 'id="' . $tag->id . '"' : '' !!}
    {!! strlen($tag->name) > 0 ? 'name="' . $tag->name . '"' : '' !!}
    {!! $tag->required ? 'required="required"' : '' !!}
    {!! $tag->readonly ? 'readonly="readonly"' : '' !!}
    {!! strlen($tag->title) > 0 ? 'title="' . $tag->title . '"' : '' !!}
    {!! strlen($tag->placeholder) > 0 ? 'placeholder="' . $tag->placeholder . '"' : '' !!}
    {!! '>' !!}

    <?php $v = $tag->options_value ?>
    <?php $l = $tag->options_label ?>

    @if(strlen($tag->value) > 0)
        @foreach($tag->options as $o)
            <option value="{!! $o[$v] !!}" {!! $o[$v] == $tag->value ? 'selected="selected"' : '' !!} title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
        @endforeach
    @else
        @if($tag->old)
            @if($tag->pattern)
                @foreach($tag->options as $o)
                    <option value="{!! $o[$v] !!}" {!! $o[$v] == old($tag->oldName(), $tag->pattern) ? 'selected="selected"' : '' !!} title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
                @endforeach
            @else
                @foreach($tag->options as $o)
                    <option value="{!! $o[$v] !!}" {!! $o[$v] == old($tag->oldName()) ? 'selected="selected"' : '' !!} title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
                @endforeach
            @endif
        @else
            @if($tag->pattern)
                @foreach($tag->options as $o)
                    <option value="{!! $o[$v] !!}" {!! $o[$v] == $tag->pattern ? 'selected="selected"' : '' !!} title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
                @endforeach
            @else
                @foreach($tag->options as $o)
                    <option value="{!! $o[$v] !!}" title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
                @endforeach
            @endif
        @endif
    @endif

    {!! '</select>' !!}
</div>

@include('ao-html::cols-end', ['tag', $tag])
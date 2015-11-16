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
    {!! '>' !!}

    <?php
    $v = $tag->options_value;
    $l = $tag->options_label;
    $old = $tag->old;
    $value = $tag->value;
    $pattern = $tag->pattern;
    ?>

    <option value="">{!! strlen($tag->placeholder) > 0 ? '&gg; ' . $tag->placeholder : '' !!}</option>
    @if(strlen($value) > 0)
        @foreach($tag->options as $o)
            <option value="{!! $o[$v] !!}" {!! $o[$v] == $value ? 'selected="selected"' : '' !!} title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
        @endforeach
    @else
        @if($old)
            @if(strlen($pattern) > 0)
                @foreach($tag->options as $o)
                    <option value="{!! $o[$v] !!}" {!! $o[$v] == old($tag->oldName(), $pattern) ? 'selected="selected"' : '' !!} title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
                @endforeach
            @else
                @foreach($tag->options as $o)
                    <option value="{!! $o[$v] !!}" {!! $o[$v] == old($tag->oldName()) ? 'selected="selected"' : '' !!} title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
                @endforeach
            @endif
        @else
            @if(strlen($pattern) > 0)
                @foreach($tag->options as $o)
                    <option value="{!! $o[$v] !!}" {!! $o[$v] == $pattern ? 'selected="selected"' : '' !!} title="{!! $o[$l] !!}">{!! $o[$l] !!}</option>
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
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

    <?php
    $att = [];
    $att[] = 'class="' . ( strlen($tag->classes) > 0 ? $tag->classes : 'form-control' ) . '"';
    strlen($tag->id) > 0 ? $att[] = 'id="' . $tag->id . '"' : null;
    strlen($tag->name) > 0 ? $att[] = 'name="' . $tag->name . '"' : null;
    $tag->required ? $att[] = 'required="required"' : null;
    $tag->readonly ? $att[] = 'readonly="readonly"' : null;
    strlen($tag->title) > 0 ? $att[] = 'title="' . $tag->title . '"' : null;
    $tag->disabled ? $att[] = 'disabled="disabled"' : null;

    $pattern = $tag->pattern;
    $value = $tag->value;
    $old = $tag->old;
    ?>

    <select {!! implode(' ', $att) !!} >
        <option value="">{!! strlen($tag->placeholder) > 0 ? '&gg; ' . $tag->placeholder : '' !!}</option>
        @if(strlen($value) > 0)
            @foreach($tag->options as $v => $l)
                <option value="{!! $v !!}" {!! $v == $value ? 'selected="selected"' : '' !!} title="{!! $l !!}">{!! $l !!}</option>
            @endforeach
        @else
            @if($old)
                @if(strlen($pattern) > 0)
                    @foreach($tag->options as $v => $l)
                        <option value="{!! $v !!}" {!! $v == old($tag->oldName(), $pattern) ? 'selected="selected"' : '' !!} title="{!! $l !!}">{!! $l !!}</option>
                    @endforeach
                @else
                    @foreach($tag->options as $v => $l)
                        <option value="{!! $v !!}" {!! $v == old($tag->oldName()) ? 'selected="selected"' : '' !!} title="{!! $l !!}">{!! $l !!}</option>
                    @endforeach
                @endif
            @else
                @if(strlen($pattern) > 0)
                    @foreach($tag->options as $v => $l)
                        <option value="{!! $v !!}" {!! $v == $pattern ? 'selected="selected"' : '' !!} title="{!! $l !!}">{!! $l !!}</option>
                    @endforeach
                @else
                    @foreach($tag->options as $v => $l)
                        <option value="{!! $v !!}" title="{!! $l !!}">{!! $l !!}</option>
                    @endforeach
                @endif
            @endif
        @endif
    </select>
</div>

@include('ao-html::cols-end', ['tag', $tag])
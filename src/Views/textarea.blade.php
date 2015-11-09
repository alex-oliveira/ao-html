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
    {!! '<textarea ' !!}

    @if($tag->disabled)
        {!! 'disabled="disabled"' !!}
    @endif

    {!! strlen($tag->classes) > 0 ? 'class="' . $tag->classes . '"' : 'class="form-control"' !!}
    {!! strlen($tag->id) > 0 ? 'id="' . $tag->id . '"' : '' !!}
    {!! strlen($tag->name) > 0 ? 'name="' . $tag->name . '"' : '' !!}
    {!! $tag->required ? 'required="required"' : '' !!}
    {!! $tag->readonly ? 'readonly="readonly"' : '' !!}
    {!! strlen($tag->maxlength) > 0 ? 'maxlength="' . $tag->maxlength . '"' : '' !!}
    {!! strlen($tag->title) > 0 ? 'title="' . $tag->title . '"' : '' !!}
    {!! strlen($tag->placeholder) > 0 ? 'placeholder="' . $tag->placeholder . '"' : '' !!}
    {!! strlen($tag->disabled) > 0 ? 'disabled="disabled"' : '' !!}

    <?php
    echo '>';
    if(strlen($tag->value) > 0){
        echo $tag->value;
    }else{
        if($tag->old){
            if($tag->pattern){
                echo old($tag->oldName(), $tag->pattern);
            }else{
                echo old($tag->oldName());
            }
        }elseif($tag->pattern){
            echo $tag->pattern;
        }
    }
    echo '</textarea>';
    ?>
</div>

@include('ao-html::cols-end', ['tag', $tag])
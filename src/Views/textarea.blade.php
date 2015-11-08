<div class="form-group">
    <label>
        {{ $tag->label }}

        @if($tag->required)
            <sup gsw-tooltip="top" title="Campo obrigatório">
                <i class="fa fa-asterisk text-danger"></i>
            </sup>
        @endif
    </label>
    <textarea class="form-control"
            {!! strlen($tag->name) > 0 ? 'name="' . $tag->name . '"' : '' !!}
            {!! $tag->required ? 'required="required"' : '' !!}
            {!! strlen($tag->maxlength) > 0 ? 'maxlength="' . $tag->maxlength . '"' : '' !!}
            {!! strlen($tag->title) > 0 ? 'title="' . $tag->title . '"' : '' !!}
            {!! strlen($tag->placeholder) > 0 ? 'placeholder="' . $tag->placeholder . '"' : '' !!}
            >{!! $tag->old ? old($tag->oldName()) : '' !!}</textarea>
</div>
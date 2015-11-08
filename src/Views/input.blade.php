<div class="form-group">
    <label>
        {{ $tag->label }}

        @if($tag->required)
            <sup gsw-tooltip="top" title="Campo obrigatório">
                <i class="fa fa-asterisk text-danger"></i>
            </sup>
        @endif
    </label>
    <input class="form-control"
           {!! strlen($tag->type) > 0 ? 'type="' . $tag->type . '"' : '' !!}
           {!! strlen($tag->name) > 0 ? 'name="' . $tag->name . '"' : '' !!}
           {!! $tag->required ? 'required="required"' : '' !!}
           {!! strlen($tag->maxlength) > 0 ? 'maxlength="' . $tag->maxlength . '"' : '' !!}
           {!! strlen($tag->title) > 0 ? 'title="' . $tag->title . '"' : '' !!}
           {!! strlen($tag->placeholder) > 0 ? 'placeholder="' . $tag->placeholder . '"' : '' !!}
           value="{!! $tag->old ? old($tag->oldName()) : '' !!}" />
</div>
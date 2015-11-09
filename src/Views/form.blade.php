<form class="{!! $tag->classes !!}" id="{!! $tag->id !!}" name="{!! $tag->name !!}" action="{!! $tag->action !!}" method="{!! $tag->method == 'get' ? 'get' : 'post' !!}" >
    @if($tag->method != 'get')
        {!! csrf_field() !!}
        @if($tag->method != 'post')
            {!! method_field($tag->method) !!}
        @endif
    @endif

    @if($tag->row)
        <div class="row">
    @endif
<form class="{!! $tag->classes !!}" id="{!! $tag->id !!}" name="{!! $tag->name !!}" action="{!! $tag->action !!}" method="{!! $tag->method !!}" >
    @if($tag->method != 'get')
        {!! csrf_field() !!}
        @if($tag->method != 'post')
            {!! method_field($tag->method) !!}
        @endif
    @endif

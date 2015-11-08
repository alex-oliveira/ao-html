<form {{ 0 }}>
    @if($tag->method != 'get')
        {!! csrf_field() !!}
        @if($tag->method != 'post')
            {!! method_field($tag->method) !!}
        @endif
    @endif

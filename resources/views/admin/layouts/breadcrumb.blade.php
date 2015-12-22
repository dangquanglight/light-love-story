<ul class="breadcrumb breadcrumb-top">
    @if(isset($breadcrumb))
        @foreach($breadcrumb as $item)
            <li>
                @if(isset($item['url']) && !empty($item['url']))
                    <a href="{{$item['url']}}">
                        {{$item['name']}}
                    </a>
                @else
                    {{$item['name']}}
                @endif
            </li>
        @endforeach
    @endif
</ul>

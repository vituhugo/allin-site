<ul class="section-recomende--list col-12 col-lg-3 d-none d-lg-block list-unstyled">
    @foreach($list as $key => $item)
        <li class="section-recomende--list--item @if($key === 0) current @endif" data-for="{{ str_slug($item['name']) }}">
            <i class="ico {{ $item['ico'] }}"></i>
            {{ $item['name'] }}
        </li>
    @endforeach
    @if (!empty($see_more))
    <li class="section-recomende--list--item-white-space">
        <a href="{{$see_more}}" class="btn large"><i class="ico ico-go"></i>Saiba mais</a>
    </li>
    @endif
</ul>
<ul class="section-recomende--container col-12 col-lg-8 list-unstyled">
    @foreach($list as $key => $item)

        <li class="row mx-0 section-recomende--anchor d-block d-lg-none @if($key === 0) current @endif" data-for="{{ str_slug($item['name']) }}">
            <i class="ico {{ $item['ico'] }}"></i>
            {{ $item['name'] }}
        </li>
        <li id="{{ str_slug($item['name']) }}" class="section-recomende--container--content row mx-0 p-sm-5 p-3 p-lg-0 @if($key !== 0) hide @endif">
            <div class="section-recomende--container--img col-md-6 col-12">
                <img src="{{ $item['image']['src'] }}" alt="{{ $item['image']['alt'] || '' }}" title="{{ $item['image']['title'] || '' }}" class="ml-md-3" />
            </div>
            <div class="section-recomende--container--text col-md-6 col-12 pl-md-5 mt-4 mt-md-0">
                <i class="ico {{ $item['ico'] }}"></i>
                <h4 class="section-recomende--container--title my-3">
                    {!! $item['title'] !!}
                </h4>
                {!! $item['content'] !!}
            @if (!empty($item['highlights']))
                    <ul class="section-recomende--container--text--list list-unstyled d-flex mt-4">
                        @foreach($item['highlights'] as $highlight)
                            <li class="section-recomende--container--text--list--item text-center col-4">
                                <i class="ico {{ $highlight['ico'] }}"></i>
                                <strong class="d-block"> {{ $highlight['name'] }}</strong>
                                {{ $highlight['description'] }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </li>
    @endforeach
    @if (!empty($see_more))
        <li class="row mx-0 section-recomende--anchor current d-block d-lg-none" data-for="{{ str_slug($item['name']) }}">
            <i class="ico {{ $item['ico'] }}"></i>
            {{ $item['name'] }}
        </li>
    @endif
</ul>
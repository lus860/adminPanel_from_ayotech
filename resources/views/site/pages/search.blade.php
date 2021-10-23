@extends('site.layouts.app')
@section('content')
    <div class="container">
        @if(!empty($departament) && count($departament))
            @foreach($departament  as $r)
            <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="department/{{$r->url}}"> {{$r->title}}</a>
                        @php
                            $description = html_entity_decode(strip_tags($r->description));
                            $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                        @endphp
                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else
                            @php
                                preg_match('/(\S+\s+){0,70}/',$description, $matches);
                            @endphp
                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif

        @if(!empty($pages) && count($pages))
            @foreach($pages  as $r)

                <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="{{$r->url}}"> {{$r->title}}</a>
                        @php
                            $title = html_entity_decode(strip_tags($r->title));
                            $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $title, $matches);
                        @endphp
                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else
                            @php
                                preg_match('/(\S+\s+){0,70}/',$title, $matches);
                            @endphp
                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif

        @if(!empty($benefactor) && count($benefactor))
            @foreach($benefactor  as $r)

                <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="benefactor/{{$r->url}}"> {{$r->title}}</a>
                        @php
                            $description = html_entity_decode(strip_tags($r->description));
                            $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                        @endphp
                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else
                            @php
                                preg_match('/(\S+\s+){0,70}/',$description, $matches);
                            @endphp
                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif

        @if(!empty($director) && count($director))
            @foreach($director  as $r)

                <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="{{$r->url}}"> {{$r->title}}</a>
                        @php
                            $description = html_entity_decode(strip_tags($r->description));
                            $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                        @endphp
                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else
                            @php
                                preg_match('/(\S+\s+){0,70}/',$description, $matches);
                            @endphp
                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif

        @if(!empty($history) && count($history))
            @foreach($history  as $r)

                <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="/history"> {{$r->title}}</a>
                        @php
                            $description = html_entity_decode(strip_tags($r->desc));
                            $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                        @endphp
                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else
                            @php
                                preg_match('/(\S+\s+){0,70}/',$description, $matches);
                            @endphp
                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif

        @if(!empty($news) && count($news))
            @foreach($news  as $r)

                <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="news/{{$r->url}}"> {{$r->title}}</a>
                        @php
                            $description = html_entity_decode(strip_tags($r->short));
                            $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                        @endphp
                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else
                            @php
                                preg_match('/(\S+\s+){0,70}/',$description, $matches);
                            @endphp
                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif

        @if(!empty($services) && count($services))
            @foreach($services  as $r)
                <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="services/{{$r->url}}"> {{$r->title}}</a>
                        @php
                            $description = html_entity_decode(strip_tags($r->description));
                            $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                        @endphp
                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else
                            @php
                                preg_match('/(\S+\s+){0,70}/',$description, $matches);
                            @endphp
                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif


        @if(!empty($statistics) && count($statistics))
            @foreach($statistics  as $r)

                <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="statistics/{{$r->url}}"> {{$r->title}}</a>
                        @php
                            $description = html_entity_decode(strip_tags($r->description));
                            $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                        @endphp
                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else
                            @php
                                preg_match('/(\S+\s+){0,70}/',$description, $matches);
                            @endphp
                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif

            @if(!empty($staff) && count($staff))
                @foreach($staff  as $r)

                    <section class="pl-5 mt-5 mb-5">
                        <div class="row search-content" style="flex-direction: column">
                            <a href="staff/{{$r->url}}"> {{$r->ns}}</a>
                            @php
                                $description = html_entity_decode(strip_tags($r->desc));
                                $regexp = implode('|', explode(' ', preg_quote($search)));
                                preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                            @endphp
                            <p class="text-gray">
                            @isset($matches[0])
                                {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                            @else
                                @php
                                    preg_match('/(\S+\s+){0,70}/',$description, $matches);
                                @endphp
                                @isset($matches[0])
                                    {{ $matches[0] }}
                                @endisset
                            @endisset

                        </div>
                    </section>
                @endforeach
            @endif


            @if(!empty($subservices) && count($subservices))
                @foreach($subservices  as $r)
                    <section class="pl-5 mt-5 mb-5">
                        <div class="row search-content" style="flex-direction: column">
                            <a href=""> {{$r->title}}</a>
                            @php
                                $description = html_entity_decode(strip_tags($r->desc));
                                $regexp = implode('|', explode(' ', preg_quote($search)));
                                preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                            @endphp
                            <p class="text-gray">
                            @isset($matches[0])
                                {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                            @else
                                @php
                                    preg_match('/(\S+\s+){0,70}/',$description, $matches);
                                @endphp
                                @isset($matches[0])
                                    {{ $matches[0] }}
                                @endisset
                            @endisset

                        </div>
                    </section>
                @endforeach
            @endif
        @if(!empty($vacancy) && count($vacancy))
            @foreach($vacancy  as $r)

                <section class="pl-5 mt-5 mb-5">
                    <div class="row search-content" style="flex-direction: column">
                        <a href="vacancy/{{$r->url}}"> {{$r->title}}</a>
                        @php
                            $description = html_entity_decode(strip_tags($r->desc));
                             $regexp = implode('|', explode(' ', preg_quote($search)));
                            preg_match('/(\S+\s+){0,20}\S*('.$regexp.')\S*(\s+\S+){0,50}/iu', $description, $matches);
                        @endphp

                        <p class="text-gray">
                        @isset($matches[0])
                            {!! preg_replace("/\s*(\S*($regexp)\S*)\s*/iu", '<span style="background-color:orange; color:#ffffff"> $0 </span>', $matches[0]) !!}
                        @else

                            {{ $description  }}


                            @isset($matches[0])
                                {{ $matches[0] }}
                            @endisset
                        @endisset

                    </div>
                </section>
            @endforeach
        @endif


    </div>
@endsection

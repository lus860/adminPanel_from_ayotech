
<?php
$monthNames= [
    "January"=>t('Dates info.January'),
    "February"=>t('Dates info.February'),
    "March"=> t('Dates info.March'),
    "April"=> t('Dates info.April'),
    "May"=> t('Dates info.May'),
    "June"=> t('Dates info.June'),
    "July"=>  t('Dates info.July'),
    "August"=>  t('Dates info.August'),
    "September"=> t('Dates info.September'),
    "October"=> t('Dates info.October'),
    "November"=> t('Dates info.November'),
    "December"=> t('Dates info.December')];
?>
    <div style="padding: 10px;box-shadow: 0 0 3px #00000038; max-width: 33%;">
        <a href="{{route('news',['url' =>$news->url])}}">
            <div style="padding: 10px; border: 1px solid #5D2409;">
                <div class="home_news_container_first_img_container"
                     style="background: linear-gradient(black,transparent,black),url({{asset('u/news/'.$news->image)}});">
                    <div>
                        <p> {{ $monthNames[$news->created_at->format('F')]}} {{$news->created_at->format('d,Y')}}</p>
                        <p>{{$news->title}}</p>
                    </div>
                    <div>
                        <p>{{$news->short}}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

@extends('layouts.news')
@section('content')
<div class="container">
    <style>
        section nav {
            background: url(/img/btn_menu2.jpg) no-repeat left bottom !important;
        }

        .pagination2 {
            font-size: clamp(12px, 3vw, 16px);
            margin-top: 20px;
            text-align: center;
        }

        .pagination2 a,
        .pagination2 strong {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #6d85a4;
            color: #6d85a4;
            width: auto;
            min-width: 25px;
            height: 25px;
            margin: 0 2px;
            padding-inline: 4px;
        }

        .pagination2 a:hover,
        .pagination2 a.active,
        .pagination2 strong:hover,
        .pagination2 strong.active {
            background: #eedbb2;
        }

        .pagination2 strong {
            background: #eedbb2;
        }

        .pagination {
            font-size: clamp(12px, 3vw, 16px);
            margin-top: 20px;
            text-align: center;
        }

        .pagination ul {
            text-align: center;
        }

        .pagination ul li {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #6d85a4;
            width: 25px;
            height: 25px;
            margin: 0 2px;
        }

        .pagination ul li:hover,
        .pagination ul li.active {
            background: #eedbb2;
        }

        .pagination ul li:hover a,
        .pagination ul li.active a {
            color: #eedbb2;
        }

        .pagination ul li a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            color: #6d85a4;
        }
    </style>
    <script src="/download/315x280_Canvas2.js"></script>
    <script src="/download/canvas2.js"></script>
    <nav class="menu">
        <span tab="download" title="Tải game" class="btn download active">
            <canvas id="canvas2" width="315" height="280"></canvas>
        </span>
    </nav>

    <div class="content">
        <div class="block download hyhy download_hyyhy">
            <h1>TIN TỨC MỚI NHẤT</h1>
            <br>
            <div class="list-newpage content-newpage">


                @foreach ($news as $item)
                <a href="/tin-tuc/{{ $item->slug}}" class="it-newpage f-tahoma">
                    <div class="in-newpage m-auto d-flex a-center j-center">

                        <div class="cat-title-des">
                            <div class="cat">{{ App\Models\Post::CATEGORIES[$item->category]}} </div>
                            <div class="title-newpage f-tahomabold">{{ $item->title}}</div>
                            <div class="des-newpage">{!! substr($item->content,0, 100) !!}...</div>
                        </div>
                    </div>
                </a>
                @endforeach

                {{ $news->links("news.pgnt")}}

                <!-- <div class="search">
        <form action="https://cuuam.gosu.vn/home/news/tin-tuc.html" method="get">
            <input class="txt_s" type="text" name="keyword">
            <input class="btn_s" type="submit" value="">
        </form>
    </div> -->

            </div>
        </div>
    </div>
</div>
@endsection
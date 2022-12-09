<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/3f5b3fe9f7.js" crossorigin="anonymous"></script>
    <title>Home</title>
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
</head>

<body>

    <div class="mainwrapper">

        @include('header')

        <div class="home">
            <div class="search-box">
                <div class="searchbar">
                    <form action="/">
                        <div class="search" id="search">

                            <input type="text" name="search" id="zoekbar" placeholder="Search words..">

                            <button class="search-button">
                                <i id="search-icon" class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>

                        {{-- <span>Ctrl + /</span> --}}
                    </form>
                    <div class="tags">
                        @foreach ($tests as $test)
                        <div class="tag">
                            <a class="hometags" href="/?tag={{ $test->tag}}">{{ $test->tag}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="artikels">
                @unless(count($listings) == 0)
                @foreach($listings as $listing)
                <div class="artikel">
                    <div class="bovenkant">
                        <div class="title">{{$listing->title}}</div>
                        <div class="artikeltags">

                            @foreach ($listing->tags as $tag)
                            <div class="artikeltag">
                                {{ $tag->tag}}
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="content">
                        <p>{{$listing->body}}
                        </p>
                    </div>
                    <div class="onderkant">
                        <div class="onderkantlinks">
                            <div class="username">
                                @if (!is_null($listing->user))
                                {{ $listing->user->name }}


                                @else
                                Deleted user
                                @endif
                            </div>

                        </div>
                        <div class="onderkantrechts">
                            <div class="tags">
                                <div class="artikeltag">
                                    <i class="fa-solid fa-thumbs-up" id="like-button"></i> {{$listing->likes}}
                                </div>
                                <div class="artikeltag">
                                    <i class="fa-solid fa-thumbs-down" id="dislike button"></i> {{$listing->dislikes}}
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                @endforeach
                @else
                <p>no words found be the first one to make it</p>
                @endunless
            </div>

            <script src="js/script.js"></script>

            @include('footer')
</body>

</html>
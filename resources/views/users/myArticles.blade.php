<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/myarticles.css">
    {{--
    <link rel="stylesheet" href="css/home.css"> --}}
    <script src="https://kit.fontawesome.com/3f5b3fe9f7.js" crossorigin="anonymous"></script>
    <title>My articles</title>
</head>

<body>
    @include('header')

    @if (session('message'))
    <div class="alert alert-succes">
        {{session('message')}}
    </div>

    @endif

    <form action="/listings/" method="POST">
        @csrf
        @method('DELETE')
        <button id="deleteknop">Delete all articles</i></button>
    </form>
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
                        {{ $listing->user->name }}
                    </div>
                    <div class="datum">{{ date('d-m-Y', strtotime($listing->user->created_at)) }}</div>

                </div>
                <div class="onderkantrechts">
                    <div class="tags">
                        <form action="/listing/{{ $listing->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="delete-button"><i class="fa-solid fa-trash" id="delete-icon"></i></button>
                        </form>
                        <div class="artikeltag">
                            <i class="fa-solid fa-thumbs-up"></i> {{$listing->likes}}
                        </div>
                        <div class="artikeltag">
                            <i class="fa-solid fa-thumbs-down"></i> {{$listing->dislikes}}
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

</body>

</html>
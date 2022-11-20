<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/3f5b3fe9f7.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    @include('header')

    <div class="home">
        <div class="search-box">
            <div class="searchbar">
                <div class="search">
                    <input type="text" value="" placeholder="Search words..">
                    <div class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="tags">
                    <div class="tag">
                        database
                    </div>
                    <div class="tag">
                        database
                    </div>
                    <div class="tag">
                        database
                    </div>
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
                            <div class="artikeltag">
                                database
                            </div>
                            <div class="artikeltag">
                                database
                            </div>
                            <div class="artikeltag">
                                database
                            </div>
                        </div>
                        

                    </div>
                    <div class="content">
                        <p>{{$listing->body}}
                        </p>
                    </div>
                    <div class="onderkant">
                        <div class="onderkantlinks">
                            <div class="username">BurgerGamer67</div>
                            <div class="datum">10-11-2022</div>
                        </div>
                        <div class="onderkantrechts"> 
                            <div class="tags">
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
    </div>
    


    @include('footer')
</body>

</html>
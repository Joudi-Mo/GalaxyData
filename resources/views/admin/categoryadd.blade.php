<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/table.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/categoryadd.css')}}">
    <script src="https://kit.fontawesome.com/3f5b3fe9f7.js" crossorigin="anonymous"></script>
    <title>Categories</title>
</head>

<body>
    @include('header')

    <form action="/categoryaddverwerk" method="POST">
     @csrf
        <div class="table-container">
          
          <h1>Add Category</h1>
          
          <div class="search">
            <input type="text" name="category" value="" placeholder="Add a category..">
            <div class="search-icon">
              
            </div>
          </div>
        

          <div class="tablebutton">
            <a class="" ><button class="yes">Add</button></a>
          </div>
        </div>
    </form>



    
</body>

</html>
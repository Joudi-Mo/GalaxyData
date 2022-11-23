<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/app.css">
   
    <link rel="stylesheet" href="css/articleadd.css">
    <script src="https://kit.fontawesome.com/3f5b3fe9f7.js" crossorigin="anonymous"></script>
    <title>Categories</title>
</head>

<body>
    @include('header')
    <div class="articleadd">
        <div class="table-container">
       
            <div class="inputbox">
                <h1 class="titles">Title</h1>
           
                <div class="search">
                  <input type="text" value="" placeholder="Add a title..">
                </div>
            </div>

            <div class="inputbox">
                <h1 class="titles">Content</h1>
           
                <div class="search">  
                  <textarea name="paragraph_text" cols="60" rows="10" placeholder="Add content.."></textarea>
                </div>
            </div>

            <div class="inputbox">
                <h1 class="titles">Category</h1>
           
                <div class="search">
                  <select name="category" id="cars" placeholder="Add content..">
                    <option value="" disabled selected hidden>Add a category..</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                  </select>
                </div>
            </div>

            <div class="inputbox">
                <h1 class="titles">Tags</h1>
           
                <div class="search">
                  <input type="text" value="" placeholder="Add tags..">
                </div>
            </div>  
          
         
    
          
        </div>
        <div class="tablebutton">
            <a class="" href="admin.categoryadd"><button class="yes">Add</button></a>
         </div>
        
    </div>

   


    @include('footer')
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet"  href="css/header.css">
</head>

    
<header> 
    <a href="/" class="logo">
        <h1>Galaxy</h1><h1 class="secondletter">Data</h1>
    </a>
    
<nav> 
    
    <ul class="nav__links">
        <li><a href="/articleaddpage">Create article</a></li>
        <li><a href="/">Home</a></li>
        <li><a href="/about">Contact</a></li>
    </ul>
   
</nav>
<div class="buttons">
    @auth
       
        <a class="afterloginlinks" href="/myarticles"><button>My articles</button></a>
        <form action="/logout" method="POST">
         @csrf  
            <a class="afterloginrechts">
                <button type="submit">Log out</button>
            </a>
        </form>
        
    @else
   
        <a class="atc" href="/login"><button>Log in</button></a>
        <a class="cta" href="/register"><button>Sign Up</button></a>
    @endauth
</div>
    
</header>

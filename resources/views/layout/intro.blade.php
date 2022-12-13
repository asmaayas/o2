<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
    <link rel="stylesheet" href="./css/buss.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
/>
</head>

<body>
<div class="meune">
<img src="{{ asset('img/logo.png') }}" alt="" >
{{-- 
<ul >

    <li class="ma "><a href="#" class="bold" >Buss</a></li>`
    <li class="ma "><a href="#" >Vans</a></li>
    <li class="ma "><a href="#" >Cars</a></li>

</ul> --}}

</div>
    <div class="base ">
        <div class="circle4">
            <div class="circle2">
                <div class="circle3">
                    <div class="circleMap" id="biig">
                        <div class="circleMap__items top li " onclick="myFunction()">
                            <a href="/home"><img src="https://imgs.search.brave.com/HrlZ4j2HfBoFriokx-qOLfKh2pwclFZmC9TAjceElQ0/rs:fit:640:480:1/g:ce/aHR0cHM6Ly8yLmJw/LmJsb2dzcG90LmNv/bS8tb1RXYWx4a25f/ZE0vVWJXVjFnNEJf/cEkvQUFBQUFBQUFG/bTgvb3FmeUg3ZlB6/ejgvczE2MDAvZ2xv/c3N5K3JvdW5kK2Zs/YWcrb2Yram9yZGFu/LnBuZw" style="height: 200px; width:200px"  alt="">
                            {{-- <div class="fi fi-jo" style="width: 200px; height:100px"></div>  --}}
                            
                            <div class="circleMap__items--text pic">
                              <a href="/home">Jordan</a> 
                            </div>
                        </div>
                        <div class="circleMap__items left li">
                            <img src="https://imgs.search.brave.com/0s3geQm6PrkrslS7SwFw2G8PypXa-umAx3OFwodh1c4/rs:fit:256:256:1/g:ce/aHR0cDovL2F1eC5p/Y29uc3BhbGFjZS5j/b20vdXBsb2Fkcy8x/Mjc2MjQ2MDQ1LnBu/Zw"   alt="">
                            {{-- <div class="fi fi-lb" style="width: 150px; height:80px"></div> --}}
                 

                            <div class="circleMap__items--text pic">Lebanon</div>
                        </div>
                        <div class="circleMap__items bottom li">
                            <img src="https://imgs.search.brave.com/8A9hNtGwwgHZ811VT4xfaKrOxnnxCiQW1KybpxwUXdk/rs:fit:640:480:1/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZWZsYWdpY29u/cy5jb20vdGh1bWIv/Z2xvc3N5X3JvdW5k/X2ljb24vZWd5cHQv/ZWd5cHRfNjQwLnBu/Zw"   alt="">
                            {{-- <div class="fi fi-eg" style="width: 150px; height:80px"></div> --}}
                            <div class="circleMap__items--text pic">Egypt
                            </div>
                        </div>
                        <div class="circleMap__items right li">
                            <img src="https://imgs.search.brave.com/uIZd7NNM4Jjb2-lASSf8vbFTJHutaiN8Tuo5-_Sxfm0/rs:fit:640:480:1/g:ce/aHR0cDovL2ltZy5m/cmVlZmxhZ2ljb25z/LmNvbS90aHVtYi9n/bG9zc3lfcm91bmRf/aWNvbi9mcmFuY2Uv/ZnJhbmNlXzY0MC5w/bmc"   alt="">
                            {{-- <div class="fi fi-fr" style="width: 150px; height:80px"></div> --}}
                            <div class="circleMap__items--text pic">France</div>
                        </div>
                        <div class="circleMap__item circleMa center li">

                            
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

 



  



  <script>
  function myFunction() {
   document.getElementById("biig").style.background = "url(1.jpg)";
}
  </script>
  
</body>
<!--  -->
</html>
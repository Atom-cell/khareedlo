{{-- <html>
    <head>
      <title>
        Khareed Lo
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link rel="stylesheet" href="{{asset('/css/description.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      <style> --}}
@extends('layout.template')
@section('style')

      
     .img-wrapper {
      position: relative;
    }
    
    .img-wrapper img {
      width: 100%;
      height: 200%;
    }
    
    .img-wrapper .overlay {
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    
    .img-wrapper h2 {
      margin: 0 0 .5em;
    }
    
    #text {
      z-index: 100;
      position: absolute;
      color: white;
      font-size: 24px;
      font-weight: bold;
      left: 150px;
      top: 350px;
    }
@endsection
      {{-- </style>
    </head>
    <body> --}}
@section('content')
    

        <div class="container-fluid">
            <h3 style="text-align:center; text-transform: uppercase;font-family: 'Alata', sans-serif;">{{$gender}}</h3>
        </div>
        <br><br>

        <div class="img-wrapper">
          <a href ="/main/{{$gender}}/{{"shirt"}}" > <img src="/images/shirt3.jpg" class="img-responsive" style="object-fit: fill; height:auto;"/></a>
          
          <div class="carousel-caption">
           <h1 style ="color:black;font-family: 'Alata', sans-serif;"><em>Shirts.<br> New Arrival </em></h1>
           </div>
        
        </div>
        <div class="img-wrapper">
          <a href="/main/{{$gender}}/{{"pant"}}"> <img src="/images/pant3.jpg" style="object-fit: contain; height:auto; " /></a>
           <div class="carousel-caption">
           <h1 style ="color:#3f57ab  ;  font-family: 'Alata', sans-serif;"><em>Pants. <br> Wear a Brand. </em></h1>
           </div>
        </div>
        <div class="img-wrapper">
          <a href="/main/{{$gender}}/{{"shoes"}}"> <img src="/images/shoes1.jpg" style="object-fit: contain; height:auto;"/></a>
           <div class="carousel-caption">
           <h1 style ="color:white  ;  font-family: 'Alata', sans-serif;"><em>Shoes. <br> Get Comfortable!</em></h1>
           </div>
        </div>
        
        <br>

        {{-- <button class="btn btn-block"><a href="/main/{{$gender}}/{{"shirt"}}">SHIRTS</a></button>
        <button class="btn btn-block"><a href="/main/{{$gender}}/{{"pant"}}">PANTS</a></button>
        <button class="btn btn-block"><a href="/main/{{$gender}}/{{"shoes"}}">SHOES</a></button> --}}
        


        <br>

        
    
        <br>
        @endsection


    {{-- <script>
        var qty=localStorage.getItem('qty');
        document.getElementById('cartNum').innerHTML=qty;
    </script>


    </body>
</html> --}}
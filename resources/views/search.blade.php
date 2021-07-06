{{-- <html>
    <head>
        <title>
            Khareed Lo
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('/css/cart.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div class="container-fluid" >
            <nav class="navbar navbar-expand-sm ">
                <a class="navbar-brand" href="main.html"><img src="/images/logo.png" height=100 width=100 alt=""></a>
                <h2 class="navbar-brand">Khareed Lo</h2>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                <i class="fa fa-bars" style="color:black;"></i>
            </button>
  
            <div id="navbar" class="navbar-collapse collapse " style="text-align: right;">
                <ul class="navbar-nav ml-auto" > 
                    <!-- <h2 class="navbar-brand">Khareed Lo</h2> -->
                    <!-- <li><a class="nav-link " href="" style="color:black;">Home</a></li> -->
                    <li><a class="nav-link " href="male.html" style="color:black;">MALE</a></li>
                    <li><a class="nav-link " href="female.html" style="color:black;">FEMALE</a></li>
                    <!-- <li><a class="nav-link " href="contacts.html" style="color:black;">Contact</a></li> -->
                    <li><button onclick="window.location.href='login.html'"><i onclick="login()" class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="account">person</i></button></li>
                    <li><button onclick="window.location.href='search.html'"><i class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="search" >search</i></button></li>
                    <li><button onclick="window.location.href='cart.html'"><i class="material-icons md-36" style="color:black;margin: 8px; font-size: 30px; ">shopping_bag</i></button></li>
                    <span id=cartNum></span>

                    <!-- <button >asasas</button> -->
                    
                </ul>

            </div>
            </nav>
        </div> --}}
@extends('layout.template')
@section('content')
    


        <div class="container">
            <form action="/search" method="post">
                @csrf
                <input type="text" name="searchBar" class="form-control form-control-lg" placeholder="Search shirts, pants, shoes"/><br>

                <button class="btn btn-block" style="width: 80%;background-color: black;color:white ; margin: auto;">Search</button>

            </form>
        </div>
        <br>
        <div class="container" style=" text-align:center; font-size:20px;width:30%; padding:20px; color:black">
            <?php
                    if (empty($error)){}
                    else{echo $error; } 
            ?>
        </div>


        <br><br>

        <div class="container-fluid">
            <div class="row">
              @foreach($Record as $rcd)

              {{-- onclick="location.href='/edit?id={{$rcd->id}}'" --}}
                <div class="col-12 col-sm-3">  
                    <a href="/description?id={{$rcd->id}}"><img  src="/{{$rcd->picture}}" class="img-fluid" alt="" class="hero-img" /></a>
                    <h5>{{$rcd->name}}</h5>
                    <h6><b>Rs.{{$rcd->price}}</b></h6>
                </div>
                <br>
                @endforeach

                {{-- <div class="container" style="display: inline-block; padding:10px;">
                  {{$Record->links( "pagination::bootstrap-4")}}
                </div> --}}
            </div>
        </div>
        <br>

        {{-- <script>
            
        </script>
        
                
        
    </body>
</html> --}}

@endsection
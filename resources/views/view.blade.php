<?php $q=0;?>
<html>
    <head>
        <title>
            Khareed Lo
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}"> 
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
                <a class="navbar-brand" href="/home"><img src="/images/logo.png" height=100 width=100 alt=""></a>
                <a class="nav-link " href="/home" style="color:black;"><h2 class="navbar-brand">Khareed Lo</h2></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                <i class="fa fa-bars" style="color:black;"></i>
            </button>
  
            <div id="navbar" class="navbar-collapse collapse " style="text-align: right;">
                <ul class="navbar-nav ml-auto" > 
                    <!-- <h2 class="navbar-brand">Khareed Lo</h2> -->
                    <!-- <li><a class="nav-link " href="" style="color:black;">Home</a></li> -->
                    <li><a class="nav-link " href="/productPage/{{"male"}}" style="color:black;">MALE</a></li>


                    <li><a class="nav-link " href="/productPage/{{"female"}}" style="color:black;">FEMALE</a></li>
                    <!-- <li><a class="nav-link " href="contacts.html" style="color:black;">Contact</a></li> -->
                    
                    
                </ul>

            </div>
            </nav>
        </div>


       
        <br>


        <div class=" container table-responsive mb-3">
            <table class="table table-hover table-condensed w-auto">
                <thead>
                    <tr>
                        <div class="row">
                            <th class="col-12 col-sm-3">ID</th>
                            <th class="col-12 col-sm-3">Products</th>
                            <th class="col-12 col-sm-3">Name</th>
                            <th class="col-12 col-sm-3">Quantity</th>
                            <th class="col-12 col-sm-3">Size</th>
                            <th class="col-12 col-sm-3">Price</th>
                            <th class="col-12 col-sm-3">Edit</th>
                            <th class="col-12 col-sm-3">Remove</th>
                        </div>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Record as $rcd)

                    <?php
                        $q+=$rcd->price;
                        

                    ?>

                    <tr>
                        <div class="row">
                            <td>{{$rcd->id}}</td>
                            <td>
                                <img src="/{{$rcd->picture}}" style="width: 3rem; height: 3rem;">
                            </td>
                            <td>{{$rcd->name}}</td>
                            <td> <p>{{$rcd->quantity2}}</p></td>
                            <td> <p>{{$rcd->size}}</p></td>
                            <td>Rs.{{$rcd->price}}</td>
                            <td><button class="btn btn-primary" onclick="location.href='/edit/{{$rcd->id}}/{{$rcd->size}}'">Edit</button></td>
                            {{-- "/edit?id={{$std->user_Id}}" --}}
                            <td><button class="btn btn-danger" onclick="location.href='/delete/{{$rcd->id}}/{{$rcd->size}}'">Remove</button></td>
                        </div> 
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

        {{-- {!! $Record->render() !!} --}}

            {{-- <div class="container" style="display: inline-block; padding:10px;">
                  {{$Record->links( "pagination::bootstrap-4")}}
            </div> --}}

            <script>
                
                

            </script>
            {{-- <div>{{$Record->links()}}</div> --}}

            
    </body>
</html>
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
                <a class="navbar-brand" href="main.html"><img src="/images/logo.png" height=100 width=100 alt=""></a>
                <a class="nav-link " href="main.html" style="color:black;"><h2 class="navbar-brand">Khareed Lo</h2></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                <i class="fa fa-bars" style="color:black;"></i>
            </button>
  
            <div id="navbar" class="navbar-collapse collapse " style="text-align: right;">
                <ul class="navbar-nav ml-auto" > 
                    <!-- <h2 class="navbar-brand">Khareed Lo</h2> -->
                    <!-- <li><a class="nav-link " href="" style="color:black;">Home</a></li> -->
                    {{-- <li><a class="nav-link " href="/productPage" style="color:black;">MALE</a></li> --}}
                    <li><a class="nav-link " href="/productPage/{{"male"}}" style="color:black;">MALE</a></li>


                    <li><a class="nav-link " href="/productPage/{{"female"}}" style="color:black;">FEMALE</a></li>
                    <!-- <li><a class="nav-link " href="contacts.html" style="color:black;">Contact</a></li> -->
                    
                    
                </ul>

            </div>
            </nav>
        </div>

        <div class="container">
            <form action="/sort" method="POST">
                @csrf
                <input type="date" name="sort">
                <input type="submit" class="btn" style="background-color: black; color:white" value="Sort">
                <br>
              </form>
        </div>
        <br>



        <div class="container-fluid">
            <button class="btn  btn-lg btn-block" style="background-color:black;color:white;" onclick="myFunction2()">UN-DELIVERED</button>
            <hr   style="border-width: 3px; border-color:black">
        </div>


        <div class=" container-fluid table-responsive mb-3" id="undelivered">
            <table class="table table-hover table-condensed w-auto">
                <thead>
                    <tr>
                        <div class="row">
                            <th class="col-12 col-sm-1">OrderID</th>
                            <th class="col-12 col-sm-1">UserID</th>
                            <th class="col-12 col-sm-1">Email</th>
                            <th class="col-12 col-sm-1">Address</th>
                            <th class="col-12 col-sm-1">Postal Code</th>
                            <th class="col-12 col-sm-1">Phone</th>
                            <th class="col-12 col-sm-1">PID</th>
                            <th class="col-12 col-sm-1">Qty</th>
                            <th class="col-12 col-sm-1">Size</th>
                            <th class="col-12 col-sm-1">Price</th>
                            <th class="col-12 col-sm-1">Date</th>
                            <th class="col-12 col-sm-1">Delivered</th>
                            <th class="col-12 col-sm-1">Check</th>
                        </div>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($ordersU as $o)
                            
                        <div class="row">
                            <td class="col-12 col-sm-1">{{$o->order_id}}</td>
                            <td class="col-12 col-sm-1">{{$o->user_id}}</td>
                            <td class="col-12 col-sm-1">{{$o->email}}</td>
                            <td class="col-12 col-sm-1">{{$o->address}}</td>
                            <td class="col-12 col-sm-1">{{$o->post_code}}</td>
                            <td class="col-12 col-sm-1">{{$o->phone}}</td>
                            <td class="col-12 col-sm-1">{{$o->p_id}}</td>
                            <td class="col-12 col-sm-1">{{$o->quantity}}</td>
                            <td class="col-12 col-sm-1">{{$o->size}}</td>
                            <td class="col-12 col-sm-1">{{$o->price}}</td>
                            <td class="col-12 col-sm-1">{{$o->time}}</td>
                            <td class="col-12 col-sm-1">{{$o->completed}}</td>
                            <th class="col-12 col-sm-1"><button class="btn btn-success" 
                                onclick="location.href='/complete/{{$o->order_id}}'">check</button></th>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr   style="border-width: 3px; border-color:black">

        </div> 

        <div class="container-fluid">
            <button class="btn  btn-lg btn-block" style="background-color:black;color:white;" onclick="myFunction()">DELIVERED</button>
            <hr   style="border-width: 3px; border-color:black">
        </div>


        {{-- delivered --}}

        <div class=" container table-responsive mb-3" id="delivered">
            <table class="table table-hover table-condensed w-auto">
                <thead>
                    <tr>
                        <div class="row">
                            <th class="col-12 col-sm-1">OrderID</th>
                            <th class="col-12 col-sm-1">UserID</th>
                            <th class="col-12 col-sm-1">Email</th>
                            <th class="col-12 col-sm-1">Address</th>
                            <th class="col-12 col-sm-1">Postal Code</th>
                            <th class="col-12 col-sm-1">Phone</th>
                            <th class="col-12 col-sm-1">PID</th>
                            <th class="col-12 col-sm-1">Qty</th>
                            <th class="col-12 col-sm-1">Size</th>
                            <th class="col-12 col-sm-1">Price</th>
                            <th class="col-12 col-sm-1">Date</th>
                            <th class="col-12 col-sm-1">Delivered</th>
                        </div>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($ordersC as $o)
                            
                        <div class="row">
                            <td class="col-12 col-sm-1">{{$o->order_id}}</td>
                            <td class="col-12 col-sm-1">{{$o->user_id}}</td>
                            <td class="col-12 col-sm-1">{{$o->email}}</td>
                            <td class="col-12 col-sm-1">{{$o->address}}</td>
                            <td class="col-12 col-sm-1">{{$o->post_code}}</td>
                            <td class="col-12 col-sm-1">{{$o->phone}}</td>
                            <td class="col-12 col-sm-1">{{$o->p_id}}</td>
                            <td class="col-12 col-sm-1">{{$o->quantity}}</td>
                            <td class="col-12 col-sm-1">{{$o->size}}</td>
                            <td class="col-12 col-sm-1">{{$o->price}}</td>
                            <td class="col-12 col-sm-1">{{$o->time}}</td>
                            <td class="col-12 col-sm-1">{{$o->completed}}</td>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr   style="border-width: 3px; border-color:black">

        </div> 



        
        
        <script>
            function myFunction() {
            var x = document.getElementById("delivered");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            }

            function myFunction2() {
            var x = document.getElementById("undelivered");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            }


        </script>

    </body>
</html>
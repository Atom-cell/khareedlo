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
                    {{-- <li><a class="nav-link " href="/productPage" style="color:black;">MALE</a></li> --}}
                    <li><a class="nav-link " href="/productPage/{{"male"}}" style="color:black;">MALE</a></li>


                    <li><a class="nav-link " href="/productPage/{{"female"}}" style="color:black;">FEMALE</a></li>
                    <!-- <li><a class="nav-link " href="contacts.html" style="color:black;">Contact</a></li> -->
                    {{-- <li><button onclick="window.location.href='login.html'"><i onclick="login()" class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="account">person</i></button></li>
                    <li><button onclick="window.location.href='search.html'"><i class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="search" >search</i></button></li>
                    <li><button onclick="window.location.href='cart.html'"><i class="material-icons md-36" style="color:black;margin: 8px; font-size: 30px; ">shopping_bag</i></button></li> --}}
                    <!-- <button >asasas</button> -->
                    
                </ul>

            </div>
            </nav>
        </div>

        <!-- body {
            font-family: 'Nunito', sans-serif;
        } -->

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <button class="btn  btn-lg btn-block" style="background-color:black;color:white; " onclick="location.href='/addProduct'">ADD</button>
                </div>
                <div class="col-6">
                    <button class="btn  btn-lg btn-block" style="background-color:black;color:white;" onclick="location.href='/orders'">ORDERS</button>
                </div>
                <div class="col-8 offset-2">
                    <br>
                    <button class="btn  btn-lg btn-block" style="background-color:black;color:white;" onclick="location.href='/customerDisplay'">CUSTOMERS</button>
                </div>
            </div>
        </div>
        <br>


        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-2">
                    {{-- <button class="btn btn-outline-primary btn-lg" onclick="location.href='/view'">Male Shirts</button> --}}
                    <button class="btn btn-outline-secondary btn-lg" onclick="location.href='view/{{"male"}}/{{"shirt"}}'">Male Shirts</button>
                </div>
                <div class="col-12 col-sm-2">
                    <button class="btn btn-outline-secondary btn-lg" onclick="location.href='view/{{"female"}}/{{"shirt"}}'">FeMale Shirts</button>
                </div>
                <div class="col-12 col-sm-2">
                    <button class="btn btn-outline-secondary btn-lg" onclick="location.href='view/{{"male"}}/{{"pant"}}'">Male Pants</button>
                </div>
                <div class="col-12 col-sm-2">
                    <button class="btn btn-outline-secondary btn-lg" onclick="location.href='view/{{"female"}}/{{"pant"}}'">FeMale Pants</button>
                </div>
                <div class="col-12 col-sm-2">
                    <button class="btn btn-outline-secondary btn-lg" onclick="location.href='viewShoes/{{"shoes"}}'">Shoes</button>
                </div>

            </div>
        </div>


        <!-- <div class=" container table-responsive mb-3">
            <table class="table table-hover table-condensed w-auto">
                <thead>
                    <tr>
                        <div class="row">
                            <th class="col-12 col-sm-3">Products</th>
                            <th class="col-12 col-sm-3">Details</th>
                            <th class="col-12 col-sm-3">Quantity</th>
                            <th class="col-12 col-sm-3">Price</th>
                            <th class="col-12 col-sm-3">Update</th>
                            <th class="col-12 col-sm-3">Remove</th>
                        </div>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <div class="row">
                            <td>
                                <img src="1.jpg" style="width: 3rem; height: 3rem;">
                            </td>
                            <td>Blue Polo Shirt</td>
                            <td><p>10</p></td>
                            <td>Rs.1200.00</td>
                            <td><button class="btn btn-primary">Update</button></td>
                            <td><button class="btn btn-danger">Remove</button></td>
                        </div>
                        
                    </tr>
                    <tr>
                        <div class="row">
                            <td>
                                <img src="3.jpg" style="width: 3rem; height: 3rem;">
                            </td>
                            <td>Brick Red Shirt</td>
                            <td><p>10</p></td>
                            <td>Rs.1200.00</td>
                            <td><button class="btn btn-primary">Update</button></td>
                            <td><button class="btn btn-danger">Remove</button></td>
                        </div>
                        
                    </tr>
                </tbody>
            </table>
            </div> -->
        

    </body>
</html>
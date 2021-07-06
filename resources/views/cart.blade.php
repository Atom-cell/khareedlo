<?php $q=0;?>

<html>
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

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet"> 

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div class="container-fluid" >
            <nav class="navbar navbar-expand-sm ">
                <a class="navbar-brand" href="main.html"><img src="/images/logo.png" height=100 width=100 alt=""></a>
                <h2 class="navbar-brand" style="font-family: 'Alata', sans-serif;">Khareed Lo</h2>
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
                    <li><button onclick="window.location.href='/account'"><i onclick="login()" class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="account">person</i></button></li>
                    <li><button onclick="window.location.href='/search'"><i class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="search" >search</i></button></li>
                    <li><button onclick="window.location.href='/cart'"><i class="material-icons md-36" style="color:black;margin: 8px; font-size: 30px; ">shopping_bag</i></button></li>
                    <span id=cartNum></span>
                    <!-- <button >asasas</button> -->
                    
                </ul>
                </ul>

            </div>
            </nav>
        </div>

        

        <?php
            if (empty($error)){}
            else{echo $error; } 
        ?>

        <div class=" container-fluid">
            <h3 class="col-12 col-sm-12 offset-sm-1" ><b>SHOPPING CART</b></h3>
            <hr   style="border-width: 5px; border-color:black">
        </div>
        <br>




        <div class=" container table-responsive mb-3">
        <table class="table table-hover table-condensed w-auto">
            <thead>
                <tr>
                    <div class="row">
                        <th class="col-12 col-sm-3">Product</th>
                        <th class="col-12 col-sm-3">Name</th>
                        <th class="col-12 col-sm-3">Size</th>
                        <th class="col-12 col-sm-3">Quantity</th>
                        <th class="col-12 col-sm-3">Price</th>
                        <th class="col-12 col-sm-3">Remove</th>

                    </div>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartData as $cd)

                <div id="php_price">
                    <?php
                        $q+=$cd->price2;
                    ?>
                </div>
                
                    
                <tr id="cid{{$cd->cart_id}}">
                    <div class="row">
                        
                            <td>
                                <img src={{$cd->picture}} style="width: 8rem; height: 8rem;">
                            </td>
                            <td>{{$cd->name}}</td>
                            <td>{{$cd->size}}</td>
                            <td>{{$cd->quantity2}}</td>
                            <td id='price{{$cd->price2}}'>Rs.{{$cd->price2}}</td>
                            <td><button class="btn btn-danger deleteRecord" data-id="{{ $cd->cart_id }}")">Remove</button></td>
                            {{-- class="btn btn-danger" onclick="delete({{$cd->cart_id}})" --}}

                    </div>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-11 text-right">
                    <b>Tax</b>
                </div>
                <div class="col-1">
                    5%
                </div>
            </div>
            <div class="row">
                <div class="col-11 text-right">
                    <b>Shipping Fee</b>
                </div>
                <div class="col-1">
                    Rs.300
                </div>
            </div>
            <div class="row">
                <div class="col-11 text-right">
                    <b>SubTotal</b>
                </div>
                <div class="col-1" id="subTotal">
                </div>
            </div>
            </div>
        </div>

        <div class="container mb-3 mt-3">
            <div class="row">
                <div class="col-6 offset-6 col-sm-6 offset-sm-6 text-right">
                    <button class="btn btn-warning" id="checkout" onclick="checkout()">Checkout</button>
                    {{-- onclick="window.location.href='checkout'" --}}
                </div>
            </div>
        </div>

        <div class=" container-fluid">
                <hr   style="border-width: 5px; border-color:black">
        </div>

        <script>

            var num = <?php echo $q ?>;
            var tax=num*0.05;
            document.getElementById('subTotal').innerHTML=num+tax+300;

            $(".deleteRecord").click(function()
            {
                var id = $(this).data("id");

                var token = $("meta[name='csrf-token']").attr("content");
                $.ajax(
                {
                    url: "deleteItem/"+id,
                    type: 'get',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success:function(response){
                        $("#cid"+id).remove();
                    }
                });
            });

            $(document).ready(function(){
                $(document).ajaxSuccess(function(){
                    location.reload();  //Refresh page
                        
                    // var a = $("#price"+price).val();
                    // var b =$("#price").data();
                    // alert(a);
                    // alert(b)
                    // alert($("#subTotal").val());
                    // alert($("#subTotal").data());

                    // // b=b-a;
                    // // $("#subTotal").html=b;
                });
            });

            function checkout()
            {
                var total =document.getElementById('subTotal').innerHTML;
                localStorage.setItem('total', total);
                if(total==300){
                    alert("EMpty Cart")
                }
                else{
                window.location.href='checkout';}

            }
            



        </script>
        
        
    </body>
</html>
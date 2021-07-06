<html>
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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="container-fluid" >
            <nav class="navbar navbar-expand-sm ">
                <a class="navbar-brand" href="/home"><img src="/images/logo.png" height=100 width=100 alt=""></a>
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
                    <!-- <button >asasas</button> -->
                    <!-- <button >asasas</button> -->
                    
                </ul>

            </div>
            </nav>
        </div>

        <div class="container" style=" text-align:center; font-size:20px;width:30%; padding:20px; color:black">
            <?php
                    if (empty($msg)){}
                    else{echo $msg; } 
            ?>
        </div>

        @php
            $i=0;
            $size = array();
            $q=array();
        @endphp

        <div class="container" >
            <div class="row">
                @foreach($Record as $rcd)
                <div class="col-12 col-sm-6">
                    <img  src="/{{$rcd->picture}}" class="img-fluid" alt="" class="hero-img" />
                </div>
                <div class="col-12 col-sm-6 info" >
                    <h1 class="name">{{$rcd->name}}</h1>
                    <h4 class="price">Rs.{{$rcd->price}}</h4>
                    <label for="">Size:</label>
                    <br>

                    <form action="/addToCart/{{$rcd->id}}" method="POST">
                        @csrf
                        <input type="radio" id="small" name="size" value="9" required>
                        <label for="9">9</label><span id="9" style="margin-left: 20px"></span><br>
                        <input type="radio" id="medium" name="size" value="10" required>
                        <label for="10">10</label><span id="10" style="margin-left: 20px"></span><br>
                        <input type="radio" id="large" name="size" value="11" required>
                        <label for="11">11</label><span id="11" style="margin-left: 20px"></span><br>
                        <input type="radio" id="xlarge" name="size" value="12" required>
                        <label for="12">12</label><span id="12" style="margin-left: 20px"></span>
                        
                        <br><br>
                        <label for="quantity">Quantity</label>
                        <input type="number" value="1" min="1" name='quantity' id="qty" required>
                        <br><br>
                        <button class="btn btn-lg btn-block" id="cartBtn" onclick="cartAdd({{$rcd->quantity}})">Add to cart</button>

                    </form>
                    {{-- onclick="cartAdd({{$rcd->quantity}})" --}}

                    <p><b>Composition & Care:</b></p>
                    <p>
                        {{$rcd->details}} <br>
     
                    </p>
                </div>
                @php
                    $i++;
                    if($i==1){
                        break;
                    }
                @endphp
                @endforeach
            </div>
        </div>

        @foreach ($Record as $rcd)
            @php
                array_push($size, $rcd->size);
                array_push($q, $rcd->quantity2);
            @endphp    
        @endforeach

        <script>
            var size = <?php echo json_encode($size);?>;
            var qty =<?php echo json_encode($q);?>;

            var selectedOption = $("input:radio[name=size]:checked").val();

            for (let i = 0; i < size.length; i++) 
            {
                if(size[i] === "9")
                {
                    document.getElementById("9").innerHTML=`${qty[i]}pc`;
                }
                if(size[i] === "10")
                {
                    document.getElementById("10").innerHTML=`${qty[i]}pc`;
                }
                if(size[i] === "11")
                {
                    document.getElementById("11").innerHTML=`${qty[i]}pc`;
                }
                if(size[i] === "12")
                {
                    document.getElementById("12").innerHTML=`${qty[i]}pc`;
                }
            }

            $(document).ready(function(){
            $('input[type=radio]').click(function()
            {
                // alert(this.value);
                document.getElementById('qty').setAttribute('max',2);

                for (let i = 0; i < size.length; i++) 
                {
                    if(this.value === size[i])
                    {
                        var q = qty[i];
                        // alert(q);
                        document.getElementById('qty').setAttribute('max',q);
                        break;
                    }
                    if(this.value === size[i])
                    {
                        var q = qty[i];
                        // alert(q);
                        document.getElementById('qty').setAttribute('max',q);
                        break;
                    } 
                    if(this.value === size[i])
                    {
                        var q = qty[i];
                        document.getElementById('qty').setAttribute('max',q);
                        break;
                    }
                    if(this.value === size[i])
                    {
                        var q = qty[i];
                        document.getElementById('qty').setAttribute('max',q);
                        break;
                    }
                }

            });
            });
            






         

        </script>


    </body>
</html>
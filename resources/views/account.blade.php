<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Khareed-Lo/Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
<link rel="stylesheet" href="{{asset('/css/main2.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet"> 
		
  <style></style>
</head>

<body>
<div class="container-fluid" id="con" >
            <nav class="navbar navbar-expand-sm ">
                <a  class="navbar-brand" href="/home" class="atag"><img src="/images/khareedlo.png" height=100 width=100 alt=""></a>
                <a   class="nav-link " href="/home" class="atag" style="color:black;"><h2 class="navbar-brand" style="font-family: 'Alata', sans-serif;">Khareed Lo</h2></a>
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
                    <li class="lst" ><button  class="slidebutton " onclick="window.location.href='/account'"><i onclick="login()" class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="account">person</i></button></li>
                    <li class="lst" ><button class="slidebutton " onclick="window.location.href='/search'"><i class="material-icons md-36" style="color:black; margin: 8px; font-size: 30px;" id="search" >search</i></button></li>
                    <li class="lst" ><button class="slidebutton " onclick="window.location.href='/cart'"><i class="material-icons md-36" style="color:black;margin: 8px; font-size: 30px; ">shopping_bag</i></button></li>
                    <!-- <button >asasas</button> -->
                    
                </ul>

            </div>
            </nav>
        </div>
	
	<div class="container-fluid">
	<h3 class="col-12 col-sm-12 offset-sm-1" style="font-size:25px"><b>MY ACCOUNT</b></h3>
    <h3 class="col-12 col-sm-12 offset-sm-1" style="font-size:25px"><a href="logout" type="submit" class="btn btn-dark" style="background-color:black; padding-bottom:5px">LOG OUT</a></h3>
    

	<hr   style="border-width: 3px; border-color:black">
	</div>
	
	<div class="container">

	<h5><b>Account Details</b></h5>
	
  <div class=" container table-responsive mb-3">
    <table class="table table-hover table-condensed w-auto">
        <tbody>
            <tr>
                @foreach ($Record as $rcd)
                    
                
                <div class="row">
                    <th class="col-12 col-sm-3">Name</th>
                    <td class="col-12 col-sm-3">{{$rcd->fname}}{{$rcd->lname}}</td>
                    
                </div>
            </tr>
            <tr>
              <div class="row">
                  <th class="col-12 col-sm-3">Email Address</th>
                  <td class="col-12 col-sm-3">{{$rcd->email}}</td>
              </div>
          </tr>
          <tr>
            <div class="row">
                <th class="col-12 col-sm-3">Password</th>
                <td class="col-12 col-sm-3">{{$rcd->password}}</td>
            </div>
        </tr>
        @endforeach
        
        </tbody>
    </table>
    </div>
	<br>

	<a href="forgetPassword" type="submit" class="btn btn-dark" style="background-color:black; padding-bottom:5px">Change Password</a>
<br><br>
<hr>
<h5><b>Shipping Details</b></h5>



<div class=" container table-responsive mb-3">
  <table class="table table-hover table-condensed w-auto">
      <tbody>
          <tr>
              @foreach ($Record as $rcd)
                  
              
              <div class="row">
                  <th class="col-12 col-sm-3">Address</th>
                  <td class="col-12 col-sm-3">{{$rcd->address}}</td>
                  
              </div>
          </tr>
          <tr>
            <div class="row">
                <th class="col-12 col-sm-3">City</th>
                <td class="col-12 col-sm-3">{{$rcd->city}}</td>
            </div>
        </tr>
        <tr>
          <div class="row">
              <th class="col-12 col-sm-3">Postal Code</th>
              <td class="col-12 col-sm-3">{{$rcd->post_code}}</td>
          </div>
      </tr>
      <tr>
        <div class="row">
            <th class="col-12 col-sm-3">Phone Number</th>
            <td class="col-12 col-sm-3">{{$rcd->phone}}</td>
        </div>
    </tr>
    @endforeach
      
      </tbody>
  </table>
  </div>
  <a href="editAccount" type="submit" class="btn btn-dark" style="background-color:black; padding-bottom:5px">Edit Details</a>
<br><br>
<hr>
  <p><b> Order History</b></p>
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
                </div>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartData as $cd)

          
                
            <tr >
                <div class="row">
                    
                        <td>
                            <img src={{$cd->picture}} style="width: 3rem; height: 3rem;">
                        </td>
                        <td>{{$cd->name}}</td>
                        <td>{{$cd->size}}</td>
                        <td>{{$cd->quantity}}</td>
                        <td id='price{{$cd->price}}'>Rs.{{$cd->price}}</td>
                        {{-- class="btn btn-danger" onclick="delete({{$cd->cart_id}})" --}}
                </div>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

			
			

	<footer class="page-footer font-small pt-4 text-dark" style="background-color:#f2f0f0">

  <div class="container">
  <div class="row">
  <div class="col-12 col-sm-6">

        <h5 class="text-uppercase">Footer Content</h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>

      </div>

  <div class="col-12 col-sm-3 offset-sm-3">
  <h4><em> Reach Us On: </em></h4>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href= "https://web.facebook.com/" class="btn-floating btn-fb mx-1">
          <i class="fa fa-facebook-official fa-2x" style="color:black"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href= "https://twitter.com/?lang=en" class="btn-floating btn-tw mx-1">
          <i class="fa fa-twitter fa-2x" style="color:black"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href= "https://www.instagram.com/" class="btn-floating btn-gplus mx-1">
          <i class="fa fa-instagram fa-2x" style="color:black"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href= "https://www.youtube.com/" class="btn-floating btn-dribbble mx-1">
          <i class="fa fa-youtube-play fa-2x" style="color:black"> </i>
        </a>
      </li>
    </ul>
  </div>
  </div>
  </div>

  <div class="footer-copyright text-center py-3" >© 2021 Copyright:
    <a href="https://Khareed-Lo.com">Khareed-Lo.com</a>
  </div>

</footer>

</body>




</html>

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
                    <li><a class="nav-link " href="/productPage/{{"male"}}" style="color:black;">MALE</a></li>
                    <li><a class="nav-link " href="/productPage/{{"female"}}" style="color:black;">FEMALE</a></li>
                    <!-- <li><a class="nav-link " href="contacts.html" style="color:black;">Contact</a></li> -->
                    
                    
                </ul>

            </div>
            </nav>
        </div>
        <br>

        <div class="container">
            <form action="/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="myFile">Add images</label>
                  <input type="file" id="myfile" name="pic">              
                </div>
                <div class="form-group">
                  <label for="itemName">Name</label>
                  <input type="text" class="form-control" name="name" id="itemName" placeholder="Item Name" required>
                </div>
                <div class="form-group">
                    <p>Category</p>
                    <input type="radio" id="shirt" name="Category" value="shirt" required>
                    <label for="shirt">Shirt</label><br>
                    <input type="radio" id="pant" name="Category" value="pant" required>
                    <label for="pant">Pant</label><br>
                    <input type="radio" id="shoes" name="Category" value="shoes" required>
                    <label for="shoes">Shoes</label><br>
                </div>
                <div class="form-group">
                  <label class="form-check-label" for="details">Details</label>
                  <textarea  type="text" class="form-control"  name="descp" id="deatils" rows="6" required></textarea>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="qty">Quantity</label>
                    <input type="number" min=0 name="qty1" id="qty" required>

                    <span><label class="form-check-label" for="size">Size1</label>
                        <input type="text" min=0 name="size1" id="qty" required></span>

                </div>
                <div class="form-group">
                    <label class="form-check-label" for="qty">Quantity</label>
                    <input type="number" min=0 name="qty2" id="qty" required>

                    <span><label class="form-check-label" for="size">Size2</label>
                        <input type="text" min=0 name="size2" id="qty" required></span>

                </div>
                <div class="form-group">
                    <label class="form-check-label" for="qty">Quantity</label>
                    <input type="number" min=0 name="qty3" id="qty" required>

                    <span><label class="form-check-label" for="size">Size3</label>
                        <input type="text" min=0 name="size3" id="qty" required></span>

                </div>
                <div class="form-group">
                    <label class="form-check-label" for="qty">Quantity</label>
                    <input type="number" min=0 name="qty4" id="qty" required>

                    <span><label class="form-check-label" for="size">Size4</label>
                        <input type="text" min=0 name="size4" id="qty" required></span>

                </div>
                <div class="form-group">
                    <label class="form-check-label" for="price">Price</label>
                    <input type="number" name="price" min=0  id="price" required>
                </div>
                <div class="form-group">
                    <p>Please select your gender:</p>
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female" required>
                    <label for="female">Female</label><br>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
              </form>
        </div>
        <br><br>
    
    </body>
</html>
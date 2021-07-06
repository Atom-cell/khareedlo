<html>
    <head>
        <title>
            Khareed Lo
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link rel="stylesheet" href="main.css">
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
        
    
        <div class="container">
            <h2>Edit</h2>
            <hr><br>
            <form action="/update/{{$id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="myFile">Add image</label>
                  <input type="file" id="myfile" name="pic" required>              
                </div>
                <div class="form-group">
                  <label for="itemName">Name</label>
                  <input type="text"  name="name" value="{{$Record[0]->name}}" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class="form-check-label" for="size">Size</label>
                  <input  type="text" class="form-control"  value="{{$Record[0]->size}}" name="size"  required>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="qty">Quantity</label>
                    <input type="number" min=0 name="qty" id="qty" value="value="{{$Record[0]->quantity2}}" required>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="price">Price</label>
                    <input type="number" name="price" id="price" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>

        </div>

        


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
                            
                        </div>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Record as $rcd)
                    <tr>
                        <div class="row">
                            <td>{{$rcd->id}}</td>
                            <td>
                                <img src="/{{$rcd->picture}}" style="width: 3rem; height: 3rem;">
                            </td>
                            <td>{{$rcd->name}}</td>
                            <td><p>{{$rcd->quantity2}}</p></td>
                            <td><p>{{$rcd->size}}</p></td>
                            <td>Rs.{{$rcd->price}}</td>
                            
                        </div> 
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            </div>

    </body>
</html>
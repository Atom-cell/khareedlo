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
                <a class="nav-link " href="/homew" style="color:black;"><h2 class="navbar-brand">Khareed Lo</h2></a>
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
        <br>
        <h1><u>CUSTOMERS</u></h1>
        <br>

        </div>
          <div class=" container table-responsive mb-3">
            <table class="table table-hover table-condensed w-auto table-bordered">
                <thead>
                    <tr>
                        <div class="row">
                            <th class="col-12 col-sm-3">User-ID</th>
                            <th class="col-12 col-sm-3">First Name</th>
                            <th class="col-12 col-sm-3">Last Name</th>
                            <th class="col-12 col-sm-3">Email</th>
                            <th class="col-12 col-sm-3">Address</th>
                            <th class="col-12 col-sm-3">Phone Number</th>
                            <th class="col-12 col-sm-3">Post Code</th>
                            <th class="col-12 col-sm-3">Price Spent</th>
                            

                            
                        </div>
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach ($usr as $u)
                    <tr>
                        <div class="row">
                            <td>{{$u->user_id}}</td>
                            <td>{{$u->fname}}</td>
                            <td>{{$u->lname}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->address}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->post_code}}</td>
                            <td>{{$u->total_price}}</td>
                            {{-- class="btn btn-danger" onclick="delete({{$u->user_id}})" --}}
                            
                            
                        </div> 
                        
                    </tr>
                    @endforeach
                   
                    
                </tbody>
                
            </table>
            <hr>
            </div>

     <script>
    //  $(".deleteRecord").click(function()
    //         {
    //             var id = $(this).data("id");

    //             var token = $("meta[name='csrf-token']").attr("content");
    //             $.ajax(
    //             {
    //                 url: "deleteUsr/"+id,
    //                 type: 'get',
    //                 data: {
    //                     "id": id,
    //                     "_token": token,
    //                 },
    //                 success:function(response){
    //                     $("#cid"+id).remove();
                       
    //                 }
    //             });
    //         });

    //         $(document).ready(function(){
    //             $(document).ajaxSuccess(function(){
    //                 location.reload();  //Refresh page
                        
    //                 // var a = $("#price"+price).val();
    //                 // var b =$("#price").data();
    //                 // alert(a);
    //                 // alert(b)
    //                 // alert($("#subTotal").val());
    //                 // alert($("#subTotal").data());

    //                 // // b=b-a;
    //                 // // $("#subTotal").html=b;
    //             });
    //         });


     </script>       

    </body>
</html>
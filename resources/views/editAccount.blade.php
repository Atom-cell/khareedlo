@extends('layout.template')

@section('content')
    

        <div class="container-fluid">
            <h3 class="col-12 col-sm-12 offset-sm-1" style="font-size:25px"><b>MY ACCOUNT</b></h3>
            <h5 class="col-12 col-sm-12 offset-sm-1" style="font-size:25px">Edit Shipping Details</h5>            
            <hr   style="border-width: 3px; border-color:black">
            </div>

            <div class="container">
                <form action="/editUserAccount" method="POST">
                    @csrf
                    <label for="address">Address</label> 
                    <input type="text" name="address" maxlength="100" size="30" value='{{$Record[0]->address}}'><br><br>
    
                    <label for="city">City</label>
                    <input type="text" name="city" value={{$Record[0]->city}}><br><br>
    
                    <label for="post_code">Postal Code</label>
                    <input type="text" name="zip" value={{$Record[0]->post_code}}><br><br>
    
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" value={{$Record[0]->phone}}>

                    <input type="submit" class="btn btn-primary btn-block" style="background-color: black;margin-top=20px;" value="submit">
                        {{-- <p style=" padding-top: 10px"></p>
                          <a href="" type="submit" class="btn btn-primary btn-block" style="background-color: black">SUBMIT</a> --}}

    
    
                </form>

            </div>
            


            <div class=" container-fluid">
                <hr   style="border-width: 5px; border-color:black">
            </div>


        








        
    {{-- </body>
</html> --}}
@endsection
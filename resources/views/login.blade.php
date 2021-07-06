@extends('layout.template')

@section('title')
    login
@endsection

@section('content')
	
	<div class="container-fluid">
	<h3 class="col-12 col-sm-12 offset-sm-1" ><b>LOG IN</b></h3>
	<hr   style="border-width: 5px; border-color:black">
	</div>
	<br>

  

  <div class="container" style=" text-align:center; margin-botton:20%; font-size:30px;width:50% ;background-color:red; color:black">
    <?php
            if (empty($error)){}
            else{echo $error; } 
    ?>
  </div>
	
	<div class="container" style="margin-top: 2%" >
        <div class="row">
			<div class="col-md-5 mx-auto" style="border-style: groove;">
			<div id="first" >
				<div class="myform form " >
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h4 style="padding-top:10px">I'M ALREADY A CLIENT!</h4>
							<hr>
						 </div>
					</div>
                          {{-- login/{{$pid}}" --}}
                   <form action="/login" method="post" name="login">
                       @csrf
                           <div class="form-group">
                              <label for="exampleInputEmail1">EMAIL ADDRESS *</label>
                              <input type="email" name="email"  class="form-control" id="email" required >
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">PASSWORD *</label>
                              <input type="password" name="password" id="password"  class="form-control" required >
                           </div>
                            <div class ="form-group">
                            <a href= "forgetPassword" style="color:blue"><b>Forgotten your password?</b></a> 
                            </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class="btn btn-dark btn-block" style="background-color:black">LOG IN</button>
                           </div>
                        </form>
						   
						   <div class="col-md-12 text-center ">
							<p style=" padding-top: 10px"> OR </p>
                              <a href="/signup" type="submit" class="btn btn-primary btn-block" >CREATE NEW ACCOUNT</a>
                           </div>
						   <br>

                    

				</div>
			</div>
			</div>
			</div>

			</div>

			<br><br>
			
	@endsection

    
    @section('script')
    @endsection
@extends('layout.template')

@section('title')
    Sign-Up
@endsection

@section('style')
  .ptag{  
    opacity: 0;
    height: 0;
	margin: 0 10px;
}


.valid{
    border-color: green;
}
.invalid{
    border-color: red;
}

.invalid + .ptag{
    font-weight: bold;
    color: red;
    opacity: 1;
	height: auto;
}

form{
    margin: 10px auto;
}
input{
    padding: 6px 14px;
    width: 100%;
}
@endsection

@section('content')

	<div class="container-fluid">
	<h3 class="col-12 col-sm-12 offset-sm-1" ><b>SIGN UP</b></h3>
	<hr   style="border-width: 5px; border-color:black">
	</div>
	<br>
	
	<div class="container" >
        <div class="row">
			<div class="col-md-5 mx-auto" style="border-style: groove;">
			<div id="first" >
				<div class="myform form " >
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h3 style="padding-top:10px">CREATE AN ACCOUNT</h3>
							<hr>
						 </div>
					</div>
                <form action="/signup" method="post" name="login">
                    @csrf
                            <div class="form-group">
                    <label for="first-name">FIRST NAME</label>
                    <input type="text" class="form-control" name="Fname" id="fname"  onkeyup="validate(this), emptychk()" onchange="emptychk()" >
                    <p class="ptag">First Name must be letters and contain 3 - 12 characters</p>

                    </div>
                    <div class="form-group">
                    <label for="last-name">LAST NAME</label>
                    <input type="text" class="form-control" name="Lname" id="lname"  onkeyup="validate(this), emptychk()" onchange="emptychk()" >
                    <p class="ptag">Last Name must be letters and contain 3 - 12 characters</p>

                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">YOUR EMAIL ADDRESS</label>
                    <input type="email" name="email"  class="form-control" id="email" onkeyup="validate(this), emptychk()" onchange="emptychk()">
                    <p class="ptag">Email must be a valid address, e.g. me@mydomain.com</p>

                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">YOUR PASSWORD</label>
                    <input type="password" name="password" id="password"  class="form-control" onkeyup="validate(this), emptychk()" onchange="emptychk()">
                    <p class="ptag">Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters</p>

                    </div>
                    <div class="col-md-12 text-center ">
                    <button type="submit" id="signBtn" class="btn btn-dark btn-block disabled"   style="background-color:black">CREATE AN ACCOUNT</button>
                    </div>
                    <br>

                </form>
	</div>
	</div>
	</div>
	</div>

	</div>

	<br><br>
			
	@endsection

    
  @section('script')

    const patterns = {
        Fname: /^[a-z\\s]{3,12}$/i,
		Lname: /^[a-z\\s]{3,12}$/i,
        password: /^[a-z0-9@-]{8,20}$/i,
        email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
};

function validate(field){
	if(field.value != ""){
    if(patterns[field.name].test(field.value)){
        field.className = 'valid';
    } else {
        field.className = 'invalid';
    }
	}
	else{
		
	}
};

function emptychk() 
{
       if ($('#fname').val() != "" && $('#lname').val() != '' && $('#email').val() != '' && $('#password').val() != '') {
		   $('#signBtn').removeClass('disabled');  
       }
	   else{
		$('#signBtn').addClass('disabled');
	   }
}

 @endsection
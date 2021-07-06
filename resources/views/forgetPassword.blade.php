{{-- <html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Khareed-Lo/newpass</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <link rel="stylesheet" href="main2.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
@extends('layout.template')
		
  {{-- <style> --}}
@section('style')
  .ptag{  
    opacity: 0;
    height: 0;
	margin: 0 10px;
}

#match{
font-weight: bold;
    color: green;
    opacity: 1;
	height: auto;

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
  {{-- /* </style>
</head> */ --}}

@section('content')
	
	<div class="container-fluid">
	<h3 class="col-12 col-sm-12 offset-sm-1" style="font-size:25px"><b>LOG IN</b></h3>
	<hr   style="border-width: 3px; border-color:black">
	</div>
	<br>
	
	<div class="container" >
        <div class="row">
			<div class="col-md-5 mx-auto" style="border-style: groove;">
						 <div class="col-md-12 text-center ">
							<h4 style="padding-top:10px; font-size:20px">CHANGE YOUR PASSWORD</h4>
							<hr>
							
						 </div>
						 <p class="pl-1">ENTER YOUR NEW ACCOUNT PASSWORD BELOW. <br>ONCE CONFIRMED, YOU'LL BE ABLE TO LOGIN YOUR ACCOUNT.</p>
						 <hr><br>
                   <form action="/resetPassword" method="POST" >
                    @csrf
                           {{-- <div class="form-group"> --}}

                            <input type="text" name="email" placeholder="ENTER EMAIL" class="form-control rounded-0" style="border:none; border-bottom:1px solid black"><br>



                            <input type="password" name="password" class="form-control rounded-0" style="border:none; border-bottom:1px solid black"
                            placeholder="NEW PASSWORD" onkeyup="validate(this)" id="pass1" ></input>
                            <p class="ptag">Password must alphanumeric (@, _ and - are also allowed) and be 8 - 20 characters</p>

                            <br>
                            <input type="password" name="password2" class="form-control rounded-0" style="border:none; border-bottom:1px solid black"
                            placeholder="CONFIRM NEW PASSWORD" onkeyup="matchpass()" id="pass2" ></input>
                            <p class="ptag" id="match" style="padding-top: 10px"> </p>
                            <br>
                            
                            <button type="submit" class="btn btn-dark btn-block" style="background-color:black">SUBMIT</button>
                            
							  
							  
						   <br>

                    </form>
                    </div>
			<br><br>
			</div>
			</div>
			</div>

			<br><br>
			<hr   style="border-width: 3px; border-color:black; margin-bottom:5%;">
	
			
			
@endsection

{{-- <script> --}}
@section('script')

const patterns = {
		password: /^[a-z0-9@-]{8,20}$/i,
        //             yourname @ domain   .  com          ( .uk )
};

function validate(field){
	console.log(field.value);
    if(patterns[field.name].test(field.value)){
        field.className = 'valid';
    } else {
        field.className = 'invalid';
    }
}




function matchpass(){
	var p1 = document.getElementById('pass1').value;
	var p2 = document.getElementById('pass2').value;
	if(p1 !=""){
	if (p1 != p2) {
			document.getElementById('match').innerHTML = "Password does not match"; 
        }
	else{
		document.getElementById('match').innerHTML = "Password match";
}	
}   
    }





@endsection
{{-- </script> --}}




{{-- </body>
</html> --}}


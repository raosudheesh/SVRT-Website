<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Demo</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
	body {
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 600px;
		margin: 50px auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
    margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
  .img-logo{
    width: 600px;
  }
  @media (max-width:820px) {
    .signup-form,.img-logo{
      width: 350px;
    }
    .signup-form h2{
      font-size:25px;
    }
  }  
</style>
<script>
  $('#clgType').change(function(){
    if($(this).val()==="other"){
      $("#otherClg").show();
    }
    else{
      $("#otherClg").hide();
    }
  });
</script>
</head>
<body>
<div class="signup-form">
    <img src="incredia_logo.jpg" class="img-logo">
    <form action="pgRedirect.php" method="POST">
      <h2>Register</h2>
      <br>
      <h6 class="text-center">Fill the Details</h6>
      <br>
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="first_name" placeholder="First Name*" required="required">
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="last_name" placeholder="Last Name*" required="required">
        </div>        	
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="usn" placeholder="USN*" required="required">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email*" required="required">
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="contact" placeholder="Contact No.*" required="required">
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="alt_contact" placeholder="Alternate Contact No.">
        </div>        	
      </div>
      <div class="form-group">
        <select class="form-control" name="clg_type" id="clgType" required>
          <option value="none" hidden>Select the College*</option>
          <option value="nmamit">N.M.A.M. Institute of Technology</option>
          <option value="other">Other Colleges</option>
        </select>
      </div>
      <div class="form-group" id="otherClg" style="display: none;">
        <small class="form-text text-muted">If others, please specify.</small>
        <input type="text" class="form-control" name="clg_name" placeholder="College Name *" required="required">
      </div>
      <p>* These are required fields</p>
      <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-info btn-lg btn-block">
      </div>
    </form>
</div>
</body>
</html>
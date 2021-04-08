<!DOCTYPE html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html>
<style>
.button-box
{
    width: 230.8px;
    height: 35px;
    margin: 10px auto;
    position: relative;
    box-shadow: 0 0 20px 0px #60B0FE;
    border-radius: 30px; 
}

.button-box .toggle-btn {
    padding: 5px 31.9px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
}

</style>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" href="CSS/styleLogin.css">
</head>
<body>
	<div class="hero"><img src="backgroundlogin.jpg">
	</div>
<div class="container" >
	<a href="Index.php"><img id="vsenseLogo" src="v-sense black.png" height="300px" width="300px"></a>
    <div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>

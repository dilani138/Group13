<!-- |THIS IS apply on line PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php");?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_apply_on_line.php"); ?> <!-- |NAVIGATION OF THE PAGE| -->
   
<?php 

session_start();
if(isset($_SESSION["errorMessage"]))
{
    //echo "error";
    echo "<script type='text/javascript'>alert('".$_SESSION["errorMessage"]."')</script>";
    $_SESSION["errorMessage"] =null;
}
?>
   

<html>
	<head>
		<style>  
            body{
                margin: auto;
                background-image: url("LoginScreenBackground.png");
                background-repeat: no-repeat;
                background-size: 100% 720px;
            } 
            .container{
                width: 500px;
                height: 400px;
                text-align: center;
                background-color: rgba(0, 0, 0,0.7);
                border-radius: 4px;
                margin: 0 auto; 
                margin-top: 150px; 
            }
            .container img{
                width: 180px;
                height: 150px; 
                margin-top: -60px;
                margin-bottom: 30px;
            } 

            input[type="text"],input[type="password"]{
                height: 45px;
                width: 300px;
                font-size: 18px;
                border: none;
                margin-bottom: 20px;
                border-radius: 4px;
                background-color: #fff;
                padding-left: 40px; 
            }
            /*.form-input::before{
                content: "\f007";
                position: absolute;
                font-family: "FontAwesome";
                padding-left: 5px;
                color: #000000;
                padding-top: 5px;
                font-size: 35px;
            }*/

            .btn-login{
                padding: 15px 30px;
                color: #fff;
                font-size: 18px;
                border-radius: 4px;
                border: none;
                background-color: #2ECC71;
                border-bottom: 4px  solid #27AE60;
            }
		
		</style> 
	</head>
<body>
<body><div class="container">
        <img src="person.png">
            <form>
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter Username">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Enter Password">
            </div>
            <input type="Submit" name="Submit" value="LOGIN" class="btn-login">
            </form>
        </div></body>
</body>
</html>
<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>

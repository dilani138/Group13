<div class="container">
    <?php
        include("../../includes/main/header.php");
        include("../../includes/navigations/nav_active_skill_directory.php");
    ?>
</div>

<?php 

session_start();
if(isset($_SESSION["errorMessage"]))
{
    //echo "error";
    echo "<script type='text/javascript'>alert('".$_SESSION["errorMessage"]."')</script>";
    $_SESSION["errorMessage"] =null;
}

?>

<div class="content">
        <div class= "col-b-1 " >    
        <div class= "col-c-1 " >
        <div class= "col-c-3-2 right " >

		

            <form>
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter Username">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Enter Password">
            </div>
            <input type="Submit" name="Submit" value="LOGIN" class="btn-login">
            </form>

        </div>       
        </div>
    </div>
</div>

 <?php
        include("../../includes/main/footer.php");
?>
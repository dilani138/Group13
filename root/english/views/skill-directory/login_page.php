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

            <form action="login_query.php" method="post">
                <table border="0px" align="cener">
                    <tr>
                        <td>User Name :</td>
                        <td><input type="text" name="un" placeholder="Enter Your User Name" required> </td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td><input type="password" name="pw" placeholder="Enter Your Password" required> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="login" value="Log In" > </td>
                    </tr>
                </table>
            </form>
        </div>       
        </div>
    </div>
</div>

 <?php
        include("../../includes/main/footer.php");
?>
<div class="container">
    <?php
        include("../../includes/main/header.php");
        include("../../includes/navigations/nav_active_skill_directory.php");
    ?>
</div>

<div class="content">
        <div class= "col-b-1 " >    
        <div class= "col-c-1 " >
        <div class= "col-c-3-2 right " >
		<form method="post" action="../../php/login_query.php">
            <table border="0px" align="cener">
                <tr>
                    <td>User Name :</td>
                    <td><input type="text" name="un" placeholder="Enter Your User Name" > </td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="pw" placeholder="Enter Your Password" > </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="login" value="Log In" > </td>
                </tr>
            </table>
        </div>       
        </div>
    </div>
</div>

 <?php
        include("../../includes/main/footer.php");
?>
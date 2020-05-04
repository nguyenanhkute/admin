<?php 
     if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <page import="model.User"></page>
        <page contentType="text/html" pageEncoding="UTF-8"></page>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>header</title>
    </head>
    <body>
        <div id="header">
            <div class="inHeader">
        		<div class="mosAdmin">
        		        
        		            <ul>
                                <li style="font-size: 18px;">
                                    <?php echo $_SESSION['taikhoan'];?><br>
                                </li>
                                <li>
                                    <a href="./controllers/logoutAdmin.php">Đăng xuất</a>
                                </li>
                            </ul>
        		</div>
                <div class="clear"></div>
            </div>
        </div>
        
    </body>
</html>


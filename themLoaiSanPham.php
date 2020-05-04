<?php
session_start();
$id = isset($_SESSION["taikhoan"]) ? $_SESSION["taikhoan"] : '1';
if ($id == '1'){
	header("Location: \admin\dangnhap.php");
} else{

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="img/core-img/icon.ico">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thêm loại sản phẩm</title>
        <c:set var="root" value="${pageContext.request.contextPath}"/>
        <link href="/css/mos-style.css" rel='stylesheet' type='text/css' />
		
    </head>
    <body>
        <?php include 'parts/header.php'?>
        <form action="controllers/loaisanpham.php" method="post" enctype="multipart/form-data">
        <div id="wrapper">
            <?php include "parts/menu.php" ?>
            <div id="rightContent" >
                <div style="margin: 30px;">
                <h2>Thêm loại sản phẩm </h2><br><br>
                    <table width="75%" >
			             <tr >
                            <td width="125px"><b>Tên loại sản phẩm</b></td>
                            <td><input required type="text" class="sedang" name="tenLSP" style="width:170px;"></td>
                        </tr>
						 <tr>
                            <td width="125px"><b>Ảnh loại sản phẩm</b></td>
                            <td><input type="text" class="sedang" name="AnhLSP" style="width:170px;"></td>
                        </tr>
                        <tr>
                            <td>
                            <input type="hidden" name="command" value="insert">
                            <input type="submit" class="button" value="Lưu dữ liệu" onclick="">
                        </td></tr>
                    </table>
                 </div>
            </div> 
            <div class ="clear"></div>

            <?php include "parts/footer.php" ?>
            
         </div>
       </form> 
    </body>
</html>

<?php } ?>

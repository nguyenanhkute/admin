<?php
session_start();
$id = isset($_SESSION["taikhoan"]) ? $_SESSION["taikhoan"] : '1';
if ($id == '1'){
	header("Location: \admin\dangnhap.php");
} else{

?>
<?php 
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
            $page = 1;
        ?>
<!DOCTYPE html>
<html>
<head>
         <link rel="icon" href="img/core-img/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sản phẩm</title>
        <c:set var="root" value="${pageContext.request.contextPath}"/>
        <link href="css/mos-style.css" rel='stylesheet'type='text/css' />
        <link href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style_phantrang.css"/>
</head>
<body>
    <?php include "parts/header.php"?>
    <div id="wrapper">
        <?php include "parts/menu.php"?>
        <div id="rightContent">

        <h2>Quản lí sản phẩm</h2><br>
        <?php require_once("/var/www/html/admin/model/sanpham.php");?>
        <?php $list_sanpham = lay_sampham(); ?>
        <a href="themSanPham.php"  class="button" > Thêm sản phẩm </a>
        <div class="searchp"> 
            <form action="controllers/sanpham.php" method="post" enctype="multipart/form-data" >
               <input   type="search" name="txt_search" value="" placeholder="search..." /> 
                <input type="hidden" name="command" value="search">
            </form>             
        </div>
        <form  id="user-form" method="post" enctype="multipart/form-data" role="form">
            <table class='data' id = 'loaisanphamTables'>
             <tr class='data'>
				<th class="data" width='30px'>STT</th>
                <th class="data">Tên Loại SP</th>
				<th class="data">Sản phẩm</th>
                <th class="data">Ảnh</th>
                <th class="data">Giá</th>
                <th class="data">Mô tả</th>
                <th class="data">Sửa thông tin</th>
			</tr> 
                <?php $i=0 ; ?>
                <?php 
                $numberProd = 10;  // Số sản phẩm 1 trang
                $quantityProd = mysqli_num_rows($list_sanpham);  // Tổng sp
                $numberPage = ceil($quantityProd/$numberProd);   // Số trang 1, 2, 3, 4.
                $begin = ($page - 1)*$numberProd; 

                $product1=lay_sampham_phantrang($begin,$numberProd);

                while ($sanpham= mysqli_fetch_array($product1)){ ?>
            <tr class='data'>
                <?php $i= $i +1; ?>
                <td ><h4 ><?php echo $i; ?></h4></td>
                <td ><h4 ><?php echo $sanpham['TenLoaiSP'] ?></h4></td>
                <td ><h4 ><?php echo $sanpham['TenSP']; ?></h4></td>
                <?php $img = $sanpham['HinhAnh'];?>
                <td><?php echo '<img src="' .$img. '" style="max-width:50px;" />'; ?></td>
                <td ><?php echo $sanpham ? number_format($sanpham['Gia'],0,',',',') : 0; ?></td>
                <td style="width: 15%" name = 'mota'><?php echo $sanpham['MoTa'] ?></td>
                <td >
                    <a href="suaSanPham.php?masp=<?php echo $sanpham['MaSP']; ?>">Sửa thông tin</a>
                </td>
            </tr>
                <?php } ?>
            </table>  
            <ul class="pagination modal-1" style="margin-left: 300px;">
                <?php
                    for($t = 1; $t <= $numberPage; $t++)
                    {
                        ?>
                        <li><a href='sanpham.php?page=<?php echo $t;?>'><?php echo $t;?></a></li>

                        <?php 
                    }
                ?>
            </ul>
                    
        </form>
        </div>
        <div class="clear"></div>
        <?php include "parts/footer.php"?>
        </div>
        
    </body>
</html>
<?php } ?>

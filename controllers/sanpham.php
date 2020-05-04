<?php
include_once('/var/www/html/admin/model/sanpham.php');
include_once('/var/www/html/admin/model/loaisanpham.php');
	$command=$_POST['command'];
echo $command;/**/
	if($command=="update"){
		$masp = $_POST['maSP'];
		$tensp= $_POST['tenSP'];
		$gia= $_POST['gia'];
		$mota= $_POST['mota'];
		$anh_name=$_POST['AnhSP'];
		
			update_sanpham($masp,$tensp,$gia,$mota,$anh_name);
	
		header('location:\admin\sanpham.php');
	}

	if($command=="insert"){
		$tensp= $_POST['tenSP'];
		$gia= $_POST['gia'];
		$mota= $_POST['mota'];
		$tenlsp=$_POST['tenLSP'];
		$arr_malsp=mysqli_fetch_array(lay_malsp($tenlsp));
		$malsp=$arr_malsp['MaLoaiSP'];
		$anh_name=$_POST['AnhSP'];
		insert_sanpham($malsp,$tensp,$anh_name,$gia,$mota);
		header('location:\admin\sanpham.php');
	}	

	if($command=="search"){
		$search = isset($_POST['txt_search'])?$_POST['txt_search']:'';

		if ($search!==""){
		$num = mysqli_fetch_row(search_sanpham($search));
		echo $num;
		if ($num>0){
			echo "$num kết quả được tìm thấy với từ khóa <b>$search</b>";
			header("Location:/admin/timkiemSanPham.php?keyword=$search");
		}else {
			echo "Không tìm thấy bất kì sản phẩm nào với từ khóa <b>$search</b>";
			header("Location:/admin/timkiemSanPham.php?keyword=$search");
		}

	}else{
		header("Location:/admin/sanpham.php");
	}
}
?>

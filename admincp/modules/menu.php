<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><a href="index.php?quanly=loaisp&ac=them">Quản lý loại SP</a></li>
             <li><a href="index.php?quanly=hieusp&ac=them">Quản lý hiệu SP</a></li>
            <li><a href="index.php?quanly=sanpham&ac=them">Quản lý SP</a></li>
            <li><a href="index.php?quanly=tintuc&ac=them">Quản lý tin tức</a></li>
            <li><a href="login.php">Đăng xuất</a></li>
            </form>
        </ul>
       
    </div>

 <form action="index.php?quanly=timkiem&ac=sp" method="post" enctype="multipart/form-data">
     <p><input type="text" name="masp" placeholder=" Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm" />
        </p>
        </form>
<!DOCTYPE html>
<html>
<head>
	<title>quenmatkhau</title>
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/css/style6.css">
	<link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../public/js/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="../public/js/fancybox/jquery.fancybox.css">
	<script type="text/javascript" src="../public/js/bxslider/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../public/js/bxslider/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="../public/js/fancybox/jquery.fancybox.js"></script>
	<meta charset="utf-8">
</head>
<body>
		<div id="top">
			<div class="col-md-6">
				<ul>
					<li>
						<img src="../public/images/Phone.jpg" style="width: 6%"><a href="">01698224906</a>
					</li>
					<li>
						<img src="../public/images/gmail-128.jpg" style="width: 6%"><a href="">NgocPhuoc@Gmail.com</a>
					</li>
					</ul>
			</div>
			
</div>
		</div>
		<div id="menu">
  			<ul>
    			<li><a href="trangchu.php" title="trang chủ">Trang chủ</a></li>
    			<li><a href="chucnang.php" title="chức năng">Chức Năng</a></li>
    			<li><a href="#" title="diễn đàn">Diễn đàn</a></li>
    			<li><a href="dangnhap.php" title="tài khoản">Tài khoản</a></li>
    			<li><a href="dangky.php" title="đăng ký">Đăng Ký</a></li>
    			<li><a href="#" title="tin tức">Tin tức</a></li>
    			<li><a href="#" title="hỏi đáp">Hỏi đáp</a></li>
    			<li><a href="lienhe.php" title="liên hệ">Liên hệ</a></li>
  			</ul>
		</div>
	</div>
	<div id="content">
		<ul class="slider">
  			<li><a href=""><img src="../public/images/banner1.jpg"></a></li>
  			<li><a href=""><img src="../public/images/banner2.jpg"></a></li>
  			<li><a href=""><img src="../public/images/banner3.jpg"></a></li>
  		</ul>		
	<script type="text/javascript">
			$(document).ready(function(){
				  	$('.slider').bxSlider({
				  		auto:true,
				  		page:false,
				});
			});
	</script>
	</div>
	<div class="lmatkhau">
		<a href="">Quên Mật Khẩu</a><br><br>
		<div id="dangnhap" dir="ltr">
				<form class="dangnhapform" action="dangnhap.html" method="post"  novalidate="novalidate">
							<input type="hidden" name="" value="">
							<input type="hidden" name="" value="">
							<input type="hidden" name="" value="">
							<input type="hidden" name="" value="">
							<input type="hidden" name="" value="">
			</div>
			<div class="col-md-12">
					<a href="">Tài Khoản :</a>
					<span><input class="HoTen" type="text" name="your-name" value="" size="60" class="" aria-invalid="false" placeholder="Nhập Tên Tài Khoản"></span>
				</div><br><br>
			<div class="col-md-12">
					<a href="">Xác Nhận Email :</a>
					<span><input class="Email" type="text" name="your-email" value="" size="60" class="" aria-invalid="false" placeholder="Nhập Mật Khẩu"></span>
				</div><br><br>
			<div class="col-md-12">
					<a href="">Xác Nhận Số Điện Thoại :</a>
					<span><input class="Phone" type="text" name="your-phone" value="" size="60" class="" aria-invalid="false" placeholder="Nhập Mật Khẩu"></span>
				</div><br><br>
			<div class="col-md-12">
					<a href="">Mật Khẩu Mới :</a>
					<span><input class="pasword" type="text" name="your-password" value="" size="60" class="" aria-invalid="false" placeholder="Nhập Mật Khẩu"></span>
				</div><br><br>
			<div class="col-md-12">
					<input type="submit" name="dangky" value="Lấy Lại Mật Khẩu">
			</div><br><br>
		</form>
		</div>
	</div>
	<div class="bot">
			<div class="container">
			<div class="col-md-5"><div>
				<img src="../public/images/Businessman.jpg" height="70" width="70">
				<marquee direction="left"><p style="color: #ff0000;font-size: 17px"><b>HÂN HẠNH ĐƯỢC PHỤC VỤ BẠN</b></p></marquee>
				</div>
			<div class="lienhe"> 
                    <a href="">Địa chỉ: 20 Nguyen Hue </a><br>
                    <a href="">Email: NgocPhuoc@gmail.com</a><br>
                    <a href="">Hotline : 01698224906</a>
                    <img src="../public/images/payment_cards.png" style="width: 100%">
                </div></div>
            <div class="col-md-3">
                <h4 class="cd">CỘNG ĐỒNG</h4>
                <a href=""><img src="../public/images/fb.png"></a>
                <a href=""><img src="../public/images/yb.png"></a>
                <a href=""><img src="../public/images/tw.png"></a><br>
                	<a href="lienhe.html">Hỗ Trợ và Liên Hệ</a><br>
           			<a href="chucnang.html">Kế Hoạch Phát Triển</a><br>
           			<a href="lienhe.html">Lợi Ích Khách Hàng</a>
           		 </div>
           	<div class="col-md-4"><div>
           		 <h4 class="cd">VỀ CHÚNG TÔI </h4>
           		 	<a href="trangchu.html">Cập Nhật Sản Phẩm mới</a><br>
           		 	<a href="chucnang.html">Đảm Bảo Tuyệt Mật</a><br>
           		 	<a href="lienhe.html">Góp Ý,Khiếu Nại</a><br>
           		 	<a href="chucnang.html">Tuyển dụng</a><br>
           		 	<a href="trangchu.html">Giới thiệu website</a>
           		</div>
           	</div>
          </div>
       </div>
</body>
</html> 		 	
<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>trang chu</title>
	<?php 
		include "lib.php"
	?>
</head>
<body>
		<div id="top" class="row">
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
			<div class="col-md-6 search">
				<div id="search">
<form class="searchform" action="trangchu.html" method="get">
<input class="s" onfocus="if (this.value == 'Tìm Kiếm...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Tìm Kiếm...';}" type="text" name="s" value="Tìm Kiếm..." />

<input class="searchsubmit" type="submit" value="Search" />

</form>

</div>
</div>
		</div>
		<div id="menu">
  			<ul>
    			<li><a href="index.php" title="trang chủ">Trang chủ</a></li>
    			<li><a href="tintuc.php" title="tin tức">Tin Tức</a></li>
    			<?php if(isset($_SESSION["login"])) { ?>
            	<li class="nav-item">
              	<a class="nav-link" href="admin/logout.php">&nbsp;Logout&nbsp;</a>
            	</li>
             	<li class="nav-item">
              	<a class="nav-link" href="admin/index.php" >Admin Page&nbsp;</a>
            	</li>
            	<?php }else{ ?>         
				<li><a href="dangnhap.php" title="chức năng">Tài Khoản</a></li>          
            	<?php } ?>
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
	<div class="container">
		<div class="row">
			<div class="col-md-7">
	 			<a href="">Tin Tức :</a>
					<i>Xin Cảm Ơn Bạn đã sử dụng Dịch Vụ của chúng tôi<br>
					Dưới Đây là một số mặt hàng rất thịnh hành ở trong nước <br>
					và cả Quốc tế nó thực sự rất hấp dẫn,hữu ích Và được nhiều người tin dùng.<br>
					Được nhập khẩu từ các công ty có uy tín và chất lượng cao <br>Của các nước như Nhật Bản Hay Mỹ,...<br>
					Đảm bảo cho bạn sự tiện ích và hữu dụng một cách tối đa,<br>Về các mặt hàng mà chúng tôi muốn giới thiệu cho bạn.<br>
					Chúng tôi hứa sẽ hỗ trợ các bạn hết mình để lựa chọn được các mặt hàng ưng ý <br>
					và sẽ liên hệ với các trang bán hàng online uy tín để hỗ trợ bạn giao dịch thật tốt.<br>
					Mọi thắc mắc hay yêu cầu chúng tôi hứa sẽ khắc phục sớm nhất cho bạn.<br></i>
					<strong>Hãy Đến Với Chúng Tôi</strong>
			</div>
			<div class="col-md-5">
				<a href=""><img src="../public/images/laptop.gif" width="550" height="250"></a>
			</div>
		</div>

	</div>
			<div id="main">
				<div class="center_left" style="float: left;">
						<p>
						<a href=""><img src="../public/images/images.jpg" ></a>
						</p>
						<p>
							<a href=""><img src="../public/images/giphy.gif"></a>
						</p>
			</div>
				<div class="center_right">
					<li>
						<table>
		 					<tr>
		 						<th>Các Sản Phẩm</th>
		 					</tr>
		 					<tr>
		 						<td><img src="../public/images/1999-200.jpg" height="15" width="15"><a href="">Dell</a></td>
		 					</tr>
		 					<tr>
		 						<td><img src="../public/images/086227-rounded-glossy-black-icon-business-computer-laptop2.jpg" height="15" width="15"><a href="">Asus</a></td>
		 					</tr>
		 					<tr>
		 						<td><img src="../public/images/laptop_2.jpg" height="15" width="15"><a href="">HP Vavilion</a></td>
		 					</tr>
							<tr>
		 						<td><img src="images/086227-rounded-glossy-black-icon-business-computer-laptop2.jpg" height="15" width="15"><a href="">Acer</a></td>
		 					</tr>
		 					<tr>
		 						<td><img src="../public/images/1999-200.jpg" height="15" width="15"><a href="">Lenovo</a></td>
		 					</tr>
							 <tr>
		 						<td><img src="../public/images/laptop_2.jpg" height="15" width="15"><a href="">Apple macbook</a></td>
		 					</tr>
		 					<tr>
		 						<td><img src="../public/images/laptop-pictogram.jpg" height="15" width="15"><a href="">Sony Vaio</a></td>
		 					</tr>
						</table>
					</li>
			</div>
				</div>
					<div class="container">
						<div id="Mtinh" class="row">
							<?php
			                $sql = "select * from products";
			                $result = $conn->query($sql);
			                if($result->num_rows > 0)
			                {
			                  while($row = $result->fetch_assoc()) {?>
							<div class="col-md-3">
								<a href="single.php?id=<?php echo $row["id"];?>"><img height="300px" width="150px" src="<?php echo URL_IMAGE.$row['image'];?>" alt=""></a>
								<p><a href="#" style="text-align: center;"><?php echo $row["name"];?></a><p>
								<br>
								<a href="#"><?php echo $row["price"];?></a>
							</div>
							<?php  }
                  }
                ?>
						</div>
					</div>
<div id="quytrinh">
    <div class="container">
    <div class="row">
    	<div class=" col-md-2 col-md-offset-1">

                        <p class=" col-md-12 " >01.</p>

                        <span>CHỌN SẢN PHẨM</span>
                    </div>            
                    <div class="col-md-2">

                        <p class=" col-md-12" >02.</p>

                        <span>LIÊN HỆ TRONG 24H</span>
                    </div>               
                    <div class=" col-md-2">

                        <p class="col-md-12 " >03.</p>

                        <span>THẮC MẮC,HỎI ĐÁP</span>
                    </div>               
                    <div class="list-service col-xs-12 col-md-2">

                        <p class=" col-md-12 " >04.</p>

                        <span>LIÊN HỆ VỚI  CÁC TRANG BÁN HÀNG</span>
                    </div>     
                    <div class="list-service  col-xs-12 col-md-2">

                        <p class=" col-md-12 " >05.</p>

                        <span>BÀN GIAO SẢN PHẨM</span>
                    </div>
                    </div>
	</div>
    </div>
  </div>
  </div>
		<div class="bot">
			<div class="container">
			<div class="row">
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
       </div> 		 	
</body>
</html>

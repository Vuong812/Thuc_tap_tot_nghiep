<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Style.css"/>
<link rel="stylesheet" type="text/css" href="responsive.css"/>
<link rel="icon" href="Images/cropped-GiapPham-Main-Favicon-32x32.png"/>
<title>Giap Pham - Chia sẻ kiến thức</title>
</head>

<body>
<div class="container">
<!--HEADER-->
	<div class="logo">
    <a href="Trangchu.php"><img src="Images/Logo.png" width="400px" height="80px" class="logo_left"/></a>
    <a href="#"><img src="Images/HawkHost-banner-top.jpg" style="margin-left:280px" class="logo_right"></a>
    </div>
    <div id="menu">
    	<ul class="main_menu">
            <li><a href="#">TIN TỨC &nabla;</a>
            	<ul class="sub_menu">
                	<li><a href="#">Ô tô</a></li>
                    <li><a href="#">Sức khỏe</a></li>
                    <li><a href="#">Tài chính</a></li>
                </ul>
            </li>
            <li><a href="Lienhe.php">LIÊN HỆ</a></li>
            <li><a href="Add.php">THÊM BÀI VIẾT MỚI</a></li>
        </ul>
    </div>
<!--MAIN-->
    <div class="main">
    <h1>ADMIN</h1>
    <hr width="835px" style="margin-left:40px">
    	
    	<ul>
        	<?php
				include ('control.php');
				$tin= new Account();
				$se_all=$tin->select_all();
				foreach($se_all as $all_value)
				{		
			?> 
            		<li>
                        <a href="#">
                        <img src="Images/<?php echo $all_value['Image'];?>" alt="Mã giảm giá Hawk Host 55% trọn đời – Summer Sale" width="400px" height="240px"/>
                        </a>
                        <h2><a href="#"><?php echo $all_value['TieuDe'];?></a></h2>
                        <p class="view"> Thể Loại: <?php echo $all_value['TheLoai'];?></p>
                        <p><?php echo $all_value['NoiDung'];?></p>
                        <a href="update.php?select=<?php echo $all_value['MaTin'] ?>">
                        <img src="Images/icon_edit.png" width="40px" height="40px"/></a>
                        <a href="Del_acc.php?del=<?php echo $all_value['MaTin'] ?>"
                         onclick="if(confirm('Bạn có chắc chắn xóa không?')) return true; else return false;">
                        <img src="Images/delete-1432400-1211078.webp" width="45px" height="40px"/></a>
                    </li>
                     <hr width="835px">
          <?php }?>
        </ul> 
         <div class="next">
         	<a href="" target="_blank" class="button">1</a>
            <a href="" target="_blank" class="button">2</a>
            <a href="" target="_blank" class="button">...</a>
            <a href="" target="_blank" class="button">5</a>
            <a href="" target="_blank" class="button" style="background-color:#052851; color:#FFF; width:80px">next&rarr;</a>
         </div>
  </div>
<!--ASIDE-->
    <div class="right">
    	<input type="text" placeholder="Search"/>
        <h3>HawkHost Coupon</h3>
<pre>
Mã giảm giá cho Hong Kong & Singapore
<div class="button"><a href="#">Coupon 15% trọn đời</a></div>

Shared Hosting
<div class="button"><a href="#">Coupon 30% trọn đời</a></div>
<div class="button"><a href="#">Coupon 40% trọn đời</a></div>

Reseller Hosting   
<div class="button"><a href="#">Coupon 30% trọn đời</a></div>

Semi Dedicated Hosting
<div class="button"><a href="#">Coupon 30% trọn đời</a></div>
</pre>
<h3>Bài viết mới nhất</h3>
<hr>
	<p><a href="#">Mã giảm giá Hawk Host 55% trọn đời – Summer Sale</a></p></p>
    <hr>
    <p><a href="#">Hawk Host Coupon Tháng 7/2020 – Giảm lên tới 40% Hosting, có coupon trọn đời</a></p>
    <hr>
    <p><a href="#">Vultr Coupon Code tháng 07/2020 – Tặng tới 103 USD miễn phí</a></p>
    <hr>
    <p><a href="#">Mã giảm giá Hawk Host dành riêng cho độc giả Giap Pham – Giảm giá trọn đời location Hong Kong & Singapore</a></p>
    <hr>
    <p><a href="#">Mã giảm giá Hawk Host 55% trọn đời – Happy Spring</a></p>
    <hr>
    <p><a href="#">Mã giảm giá Hawk Host không còn dùng được cho location Hong Kong và Singapore</a></p>
    <hr>
    <p><a href="#">Đánh giá Hawk Host – Hosting tốc độ cao giá rẻ</a></p>
    <hr>
    <p><a href="#">Hướng dẫn cài đặt Windows trên VPS Vultr chi tiết</a></p>
    <hr>
    <p><a href="#">Hướng dẫn cài đặt VPS Vultr và cách sử dụng cơ bản</a></p>
    <hr>
    <p><a href="#">VPS tốt nhất nên dùng trong năm 2020</a></p>
        <h3>Hosting nên dùng</h3>
        <a href="#"><img src="Images/Banner-Hawk-Host.png"/></a>
        <h3>VPS nên dùng</h3>
        <a href="#"><img src="Images/Vultr-100-USD.png"/></a>
 	</div>
<!--FOOTER-->
 <div class="end">
 	<table>
    	<tr>
        	<td style="padding-bottom:13px" class="td1">
 	<pre>
     <span style="color:#FC0">Giới thiệu</span>
     <span style="color:white">Giap Pham là blog chia sẻ các
     kiến thức giúp tất cả mọi người trang bị
     thêm nhiều kiến thức trong cuộc sống.
     Sự hài lòng của độc giả là niềm
     hạnh phúc của chúng tôi.</span> </pre>
    		</td>
            <td>
            	<ul>
                	<span style="color:#FC0"><p>Liên kết</p></span>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Bản quyền</a></li>
                    <li><a href="#">Điều khoản sử dụng</a></li>
                    <li><a href="#">Bảo mật thông tin</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </td>
            <td style="padding-bottom:70px">
            	<ul>
                	 <span style="color:#FC0"><p>Dịch vụ</p></span>	
                	<li><a href="#">Thiết kế website trọn gói</a></li>
                    <li><a href="#">Cài đặt VPS/Server</a></li>
                </ul>
            </td>
            <td style="padding-bottom:70px">
            	<ul>
                	 <span style="color:#FC0"><p>Liên hệ</p></span>
                    <li><a href="#">contact@giappham.com</a></li>
                    <li><a href="#">Fanpage: Giap Pham</a></li>
                </ul>
            </td>
   		</tr>
    </table>
    <p class="last">Copyright &copy; 2020 <a href="" style="color:white">Giap Pham</a> / <a href="" style="color:white">Sitemap</a></p>
 </div>
</div>
</body>
</html>

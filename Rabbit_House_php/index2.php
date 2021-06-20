<?php 
session_start();
if(isset($_SESSION["username"]))
	$username	=	$_SESSION["username"];
else
	header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rabbit House</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css?" />
</head>
<style>
#mon{
    width:240px;
    height:320px;
    margin:3px;
    text-align:center;
    float:left;
}
#tenMon{
    margin-top:5px;
    vertical-align:top;
    height: 40px;
	font-size: 25px;
}
#tenMon a{
    text-decoration: none;
    color:#000;
    font-size:25px;
}
#tenMon a:hover{
    color: #000;
}
#hinhAnh {
    width: 150px;
    height: 200px;
}
#hinhAnh:hover{
    transfrom: scale(1.1);
}
#dongia {
    margin-top:10px;
    font-size:30px;
}
#donGia span{
    color:#000;
    font-size: 30px;
    font-weight:bold;
}
#nutchonmua {
  height:30px;
}	
</style>
<body>
  <header>
    <div>
    <div id="logo"><a href="./index2.php"><img src="./img/logo.png"></a></div>
    <div id="menu">
      <ul>
		<li><span>Chào: <?=$username?></span></li>
		<li><a href="#">Giỏ hàng</a></li>
		<li><a href="./index.php">Đăng xuất</a></li>
      </ul>
		</div>
		<div id="menu" style="margin-left: 50%">
			<ul>
        <li><a href="./produce.php">Sản phẩm</a></li>
        <li><a href="./information.php">Thông tin</a></li>
	</ul>
    </div>
  </div>
  </header>
  <div id="body">
    <div id="photo">
    <img src="./img/bgphoto.jfif">
  </div>
  <article>
  <section id="info" align="center" style="margin-left: 10%">
		<span>Món mới</span>
			<?php
				include "include/connect.inc";
				$sql		=	"select * from tblmon limit 0, 12";
				$rs 		=	mysqli_query($conn, $sql);												   
				while($row=mysqli_fetch_array($rs)){	
			?>
			<div id="mon">
				<p id="tenMon"><a href="chitietmon.php"><?=$row["tenMon"]?></a></p>
				<img id="hinhAnh" src="uploads/<?=$row["hinhAnh"]?>">
				<p id="donGia">Đơn giá: <span><?=$row["gia"]?>VND</span></p>
				<a href="#"><img id="nutmuahang" src="./img/Chonmua.png"></a></br>
			</div>
		<?php }?>
	   </br></br>
	  </section>  
	  </br></br></br></br></br></br></br></br></br></br> </br></br></br></br></br></br></br></br></br></br>
  <div id="info" style="margin-top: 15px">
	   </br></br>
                <span style="margin-top: 250px">Twitter</span>
                <div id="cont-footer-twitter" style="padding 30px; float:left; margin-left:17%">
                    <div class="twitter-widget" style="text-align: center;">
                        <a class="twitter-timeline" style="text-align: center"; data-height="300" data-width="800" data-theme="white" data-link-color="#ef3488" data-border-color="#ef3488" data-chrome="noheader nofooter noborders transparent" href="https://twitter.com/aokidaisuke91">ツイートの青木大介</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <ul>
                    <li><a href="https://twitter.com/intent/tweet?text=%E9%9D%92%E6%9C%A8%E5%A4%A7%E4%BB%8B%E3%81%AE%E5%85%AC%E5%BC%8F%E3%82%B5%E3%82%A4%E3%83%88%E3%81%A7%E3%81%99%E3%80%82%0D%0A&%E3%81%BF%E3%82%93%E3%81%AA%E3%81%95%E3%82%93%E3%82%88%E3%82%8D%E3%81%97%E3%81%8F%EF%BD%9E&hashtags=&related=" title="Twitter"><img src="./img/twitter.png"></a></li>
                    <li><a href="https://social-plugins.line.me/lineit/share?text=%E9%9D%92%E6%9C%A8%E5%A4%A7%E4%BB%8B%E3%81%AE%E5%85%AC%E5%BC%8F%E3%82%B5%E3%82%A4%E3%83%88%E3%81%A7%E3%81%99%E3%80%82" title="Line"><img src="./img/line.png"></a></li>
                    <li><a href="#" title="Facebook"><img src="./img/facebook.png"></a></li>
                </ul>
            </div>
        </article>
        <footer>
            <p style="text-align: center;">掲載されているすべてのコンテンツ(記事、画像、音声データ、映像データ等)の無断転載を禁じます。<br/>🄫 2021 Power by Dragon Inc</p>
        </footer>
        
</body>
</html>

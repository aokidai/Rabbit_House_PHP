<?php 
session_start();
if(isset($_SESSION["username"])){
	$username	=	$_SESSION["username"];
	$idKhachhang = $_SESSION["idKhachhang"];}
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
	margin-top: 100px;
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
#info1{
    padding: 50px;
}
#info1 span{
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
    font-family: 'Times New Roman', Times, serif;
    font-size: 40px;
    font-weight: bold;
}
#info1 ul{
    display: block;
    margin-left: auto;
    margin-right: auto; 
    list-style-type: none;
    overflow: hidden;
    text-align: center;
    margin-top: 30%;
}
#info1 ul li{
    display: list-item;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    list-style-position:unset;
    display: inline-block;
    list-style-type:none;
    line-height: 40px;
    margin-left: -2px;
    width: 120px;
    height: 40px;
}
#info1 ul li a img{
    width: 70px;
    height: 70px;
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
	  <span>Giỏ Hàng</span><br/><br/>
		 <div class="table-responsive table-bordered">
				<table class="table" align="center">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên món</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
							<th>Xóa </th>
						</tr>
					</thead>
					<script>
					 function del_confirm(strlink){
						 ok	=	confirm("Bạn có muốn xóa không?");
						 if(ok!=0)
							 window.location.href=strlink;
					 }
					</script>
					<tbody
						<?php 
							$tinhtien=0;
							include("./include/connect.inc"); 
							$sql		=	"select * from tblhoadon where idKhachhang = '$idKhachhang'";
							$rs 		=	mysqli_query($conn, $sql);
							$i			=	1;							
						  while($row=mysqli_fetch_array($rs)){	
							  $sql2	= 	"select * from tblmon where idMon = ".$row["idMon"]."";
									$rs2 		=	mysqli_query($conn, $sql2);
									$row2=mysqli_fetch_array($rs2);
							echo" <tr>
								<td>$i</td>
								<td>".$row2["tenMon"]."</td>
								<td>".$row["soLuong"]."</td>
								<td>".$tinhtien=$row["soLuong"]*$row2["gia"]."</td>
								<td><a href='javascript:del_confirm(\"del_giohang.php?id=".$row["iHhoadon"]."\")'>Xóa</a></td>
								</tr>";	
						   $i++;
						  }
						?>
						   <tr align="center">
								<th colspan="5"><a href="index2.php">Mua hàng</a></th>
					</tr>
					</tbody>
				</table>
			</div>
			</form>
	  </section>  
  <div id="info1" style="margin-top: 15px">
	   </br></br>
                <span style="margin-top: 150px">Twitter</span>
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

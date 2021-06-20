<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rabbit House</title>
	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../css/metisMenu.min.css" rel="stylesheet">

	<!-- Timeline CSS -->
	<link href="../css/timeline.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../css/startmin.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="../css/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<script>
	function checkLogin(){
		if(document.form.txtusername.value==""){
			alert("Nhap username!");
			document.form.txtusername.focus();
			return;
		}
		if(document.form.txtpassword.value==""){
			alert("Nhap password!");
			document.form.txtpassword.focus();
			return;
		}
		if(document.form.txtrepassword.value==""){
			alert("Nhap password!");
			document.form.txtrepassword.focus();
			return;
		}
		document.form.submit();
	}
</script>	

<body>
	 <?php 
	 if(isset($_POST["txtusername"])){
		 include "./include/connect.inc";
		 $username	=	$_POST["txtusername"];
		 $password	=	$_POST["txtpassword"];
		 $repass	=	$_POST["txtrepass"];
		 if($password == $repass)
		 {
			 $sql		=	"update tblkhachhang set  password= '$password' where username='$username'";
			 $rs		=	mysqli_query($conn, $sql);
			 if($rs){
				 echo"<script>window.location.href='login.php'</script>";
			 }
		 }
		 else
			 echo "<script>alert('Mật khẩu không trùng')</script>";
		 
	 }
	?>
<center>
<form id="form1" name="frmLogin" method="post" action="forgot.php">
  <table width="401" border="1" style="margin-top: 20px" >
    <tbody>
      <tr>
        <td colspan="2" align="center">Đăng nhập</td>
      </tr>
      <tr align="center">
        <td width="136">Tài khoản:</td>
        <td width="249"><input type="text" name="txtusername" id="textfield"></td>
      </tr>
      <tr align="center">
        <td>Mật khẩu mới:</td>
        <td><input type="password" name="txtpassword" id="textfield2"></td>
      </tr>
	<tr align="center">
        <td>Nhập lại mật khẩu:</td>
        <td><input type="password" name="txtrepass" id="textfield3"></td>
      </tr>
      <tr align="center">
        <td colspan="2"><input onClick="checkLogin()" type="submit" name="button" id="button" value="Đổi" >
        <input type="reset" name="reset" id="reset" value="Làm lại"></td>
      </tr>
	<tr align="center">
			 <td colspan="2"><a href="./create.php"><span style="text-align: center; color: blue"><i>Bạn chưa có tài khoản?</i></span></a></td>
      </tr>
    </tbody>
  </table>
	</center>
</form>
	
</body>
</html>
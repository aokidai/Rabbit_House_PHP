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
		if(document.form.txtName.value==""){
			alert("Nhập họ tên!");
			document.form.txtName.focus();
			return;
		}
		if(document.form.txtSDT.value==""){
			alert("Nhap số điện thoại!");
			document.form.txtSDT.focus();
			return;
		}
		if(document.form.txtUsername.value==""){
			alert("Nhap username!");
			document.form.txtUsername.focus();
			return;
		}
		if(document.form.txtPassword.value==""){
			alert("Nhap password!");
			document.form.txtPassword.focus();
			return;
		}
		document.form.submit();
	}
</script>	

<body>
	 <?php 
	 if(isset($_POST["txtusername"])){
		 include "./include/connect.inc";
		 $tenKH	= $_POST["txtName"];
		 $soDT = $_POST["txtSDT"];
		 $username	=	$_POST["txtusername"];
		 $password	=	$_POST["txtpassword"];
		 $sql		=	"insert into tblkhachhang(tenKH, SDT, username, password) values('$tenKH', '$soDT', '$username', '$password')";
		 $rs		=	mysqli_query($conn, $sql);
		 if($rs){
			 echo"<script>window.location.href='login.php'</script>";
		 }
		 else
			 echo "<script>alert('Sai thông tin')</script>";
		 
	 }
	?>
<center>
<form id="form1" name="frmLogin" method="post" action="create.php">
  <table width="401" border="1" style="margin-top: 20px" >
    <tbody>
      <tr>
        <td colspan="2" align="center">Đăng nhập</td>
      </tr>
	  <tr align="center">
        <td width="136">Họ tên:</td>
        <td width="249"><input type="text" name="txtName" id="textfield4"></td>
      </tr>
      <tr align="center">
        <td>Số ĐT:</td>
        <td><input type="text" name="txtSDT" id="textfield5"></td>
      </tr>
      <tr align="center">
        <td width="136">Tài khoản:</td>
        <td width="249"><input type="text" name="txtusername" id="textfield"></td>
      </tr>
      <tr align="center">
        <td>Mật khẩu:</td>
        <td><input type="password" name="txtpassword" id="textfield2"></td>
      </tr>
      <tr align="center">
        <td colspan="2"><input type="submit" name="button" id="button" value="Đăng nhập" onClick="checkLogin()">
        <input type="reset" name="reset" id="reset" value="Làm lại"></td>
      </tr>
		 <tr>
			 <td colspan="2"><a href="./forgot.php"><span style="float: right; color: red"><i>Quên mật khẩu?</i></span></a></td>
      </tr>
	<tr align="center">
			 <td colspan="2"><a href="./login.php"><span style="text-align: center; color: blue"><i>Bạn có tài khoản?</i></span></a></td>
      </tr>
    </tbody>
  </table>
	</center>
</form>
	
</body>
</html>
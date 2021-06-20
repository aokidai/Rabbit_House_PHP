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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Quản trị Rabbit House</title>

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="blank.php">Rabbit House</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?=$username?></$username?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>Quản lí tài khoản</a>
                            </li>
                            <li class="divider"></li>
                            <li>
								<a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

              <?php
					include"../include/left_admin.php";
				?>
            </nav>
			<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">DANH SÁCH MÓN</h1>
							<button type="button" class="btn btn-success" style="margin-bottom: 20px" onClick="javascript:window.location.href='insert_mon.php'">Thêm món</button>
							
                        </div>
						
                        <!-- /.col-lg-12 -->
                    </div>
                    
                                   <div class="table-responsive table-bordered">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên món</th>
													<th>Giá</th>
													<th>Hình ảnh</th>
                                                    <th>Sửa</th>
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
													include("../include/connect.inc"); 
													$sql		=	"select * from tblmon";
												   	$rs 		=	mysqli_query($conn, $sql);
												    $count		=	mysqli_num_rows($rs);
												    // Hiển thị
												    $pageSize = 5;
												   	$pos 		=	(!isset($_GET["page"]))?0:($_GET["page"] -1)*$pageSize;	
												    $sql		=	"select * from tblmon limit $pos, $pageSize";
												   	$rs 		=	mysqli_query($conn, $sql);
												   	$i			=	1;
												  while($row=mysqli_fetch_array($rs)){											  
													echo" <tr>
														<td>$i</td>
														<td>".$row["tenMon"]."</td>
														<td>".$row["gia"]."</td>
														<td><img src='../uploads/".$row["hinhAnh"]."' width=100 height=100></td>
														<td><a href='edit_mon.php?id=".$row["idMon"]."&idLoai=".$row["idLoai"]."'>Sửa</a></td>
														<td><a href='javascript:del_confirm(\"del_mon.php?id=".$row["idMon"]."\")'>Xóa</a></td>
														</tr>";	
												   $i++;
												  }
												?>
                                               
                                               
                                                <tr>
                                                    <th colspan="4">
													 <?php 
													  
														for($i=1; $i<=ceil($count/$pageSize);$i++)
															echo "<a href='list_mon.php?page=$i'>".$i."</a>&nbsp&nbsp";
													?>
											</th>
                                                   
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
<?php 
	if(isset($data["check"])){
		if($data["check"]){
			if($_SESSION['quyen']=="admin" || $_SESSION['quyen']=="nhanvien" || $_SESSION['quyen']=="nhatuyendung"){
				header("location: http://localhost:8080/BaoCao/QUANTRI/");
			}else {
				header("location: http://localhost:8080/BaoCao/");
			}
			// header("location: http://localhost:8080/NEW/Login/TrangQuanTriView.php");
		}else{
			header("location: http://localhost:8080/BaoCao/Login/");
		}
	}
?>
<?php 
	if(isset($data["checkdk"])){
            if($data["checkdk"]){
				require_once "./mvc/views/pages/".$data["Page2"].".php";
            }else{
                require_once "./mvc/views/pages/".$data["Page"].".php";	
            }	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Login</title>

</head>

<body>

<?php
	require_once "./mvc/views/pages/".$data["Page"].".php";
?>

</body>
</html>
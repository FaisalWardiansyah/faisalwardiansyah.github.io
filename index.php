<?php
include 'koneksi.php';

	if(isset($_POST['signin'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="SELECT *FROM admin WHERE username='$username' AND password='$password'";
		$query=mysqli_query($koneksi,$sql);
		
		
		if(mysqli_fetch_array($query)) {
			session_start();
			$_SESSION['username']=$username;
			header('location:home.php');
		}
		else{
			echo " <div class='alert alert-warning d-flex align-items-center' role='alert'>
  					<svg xmlns='warning.svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>
    					<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
    				  </svg>
  				<div>
    	 			Username dan Password anda salah
  				</div>
				</div>";
			}
		}
		
		if(isset($_POST['signin'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$select="SELECT *FROM user WHERE username='$username' AND password='$password'";
		$sqli=mysqli_query($koneksi,$select);
		
		if(mysqli_fetch_array($sqli)) {
			session_start();
			$_SESSION['username']=$username;
			header('location:home.php');
		}
		
	}
?>
	
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
    	<link rel="stylesheet" href="style.css" />
    	<link rel="stylesheet" href="css/bootstrap.min.css" />
    	<script src="js/bootstrap.min.js"></script>
    	<style>
    		
    	</style>
    
	</head>

	<body class="bg-primary">
	  <center>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container ">
                        <div class="row justify-content-center ">
                            <div class="col-lg-5 ">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header "><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="username" placeholder="Masukan Username anda" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="signin">Login</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registrasi.php">Belum punya akun? Daftar</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
        <footer class="py-4 bg-primary mt-auto bg-primary">
        	<div class="container-fluid px-4">
            	<div class="d-flex align-items-center justify-content-between small">
                	<div class="container px-6"><p class="m-0 text-center text-white">Copyright &copy; Faisal Wardiansyah 2023</p></div>
                </div>
            </div>
        </footer>
	</body>
</html>
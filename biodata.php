<?php
include 'koneksi.php';
session_start();

if(!isset($_SESSION['username'])) {
	header('location:index.php');
	exit;
	}

	if(isset($_POST['daftar'])) {
		$nama=$_POST['nama'];
		$kelamin=$_POST['kelamin'];
		$tempat=$_POST['tempat'];
		$lahir=$_POST['lahir'];
		$alamat=$_POST['alamat'];
		$nohp=$_POST['nohp'];
		$sql="INSERT INTO penumpang VALUES ('$_SESSION[username]','','$nama','$alamat','$kelamin','$nohp','$tempat','$lahir')";
			
		
		
		if(mysqli_query($koneksi,$sql)) {
			header('location:home.php');
		}
		else{
			echo "error";
}
		
	}
	
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
    	<link rel="stylesheet" href="css/bootstrap.min.css" />
    	<script src="js/bootstrap.min.js"></script>
    
    	<style>
    		img
    	{
    		width:25px;
    	}
    	</style>
    </head>
    
    <body>
    	<main>
        	<div class="container">
            	<div class="row justify-content-center">
            		<div class="col-lg-7">
            			<div class="card shadow-lg border-0 rounded-lg mt-5">
                        	<div class="card-header bg-primary"><h3 class="text-center font-weight-light my-4 text-white">B I O D A T A</h3></div>
                        
  						  	<div class="card-body">
  						  		<form class="row g-3" action="" method="POST">
  									<div class="col-md-12">
    									<label for="nama" class="form-label">Nama Lengkap</label>
    									<input type="text" name="nama" class="form-control" id="nama" required>
  									</div>
  
  								  <div class="col-md-12"><label>Jenis kelamin</label>
  									<div class="form-check">
  										<input type="radio" name="kelamin" value="Laki-laki" class="form-check-input" id="flexRadioDefault1" required>
  										<label class="form-check-label" for="flexRadioDefault1">
    										Laki-laki
  										</label>
									  </div>
									
									  <div class="form-check">
  								  	<input type="radio" name="kelamin" value="Perempuan" class="form-check-input" id="flexRadioDefault2" checked>
  								  	<label class="form-check-label" for="flexRadioDefault2">
    								  	Perempuan
  									  </label>
									  </div>
									</div>
									
								  
									
									
									  <div class="col-md-6">
    									<label for="tempat" class="form-label">Tempat</label>
    									<input type="text" name="tempat" class="form-control" id="tempat" required>
  									</div>
  
								      <div class="col-md-6">
    									<label for="tanggal" class="form-label">Tanggal Lahir</label>
    									<input type="date" name="lahir" class="form-control" id="tanggal" required>
  									</div>
  									
									  
  								    <div class=""><label>Alamat</label></div>
  									<div class="col-md-12">
    									<input type="text" name="alamat" class="form-control" placeholder="Alamat anda" required>
  									</div>
  
  									
  
  									<div class="col-md-12">
    									<label for="nohp" class="form-label">Nomor HP</label>
    									<input type="text" name="nohp" class="form-control" id="nohp" placeholder="Nomor aktif anda" required>
  									</div>
  
  								    
                                      
           						   <div class="mt-4 mb-0 col-md-12">                          
										<div class="d-grid"><button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Next<img src="aset/right.png"/></button></div>
									  </div>

												<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  										<div class="modal-dialog">
    										<div class="modal-content text-center">
      										<div class="modal-header">
        										<h5 class="modal-title" id="exampleModalLabel">Ketentuan yang harus disetujui!</h5>
        										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      										</div>
      										<div class="modal-body">
      											Dengan ini anda mensetujui syarat dan ketentuan yang berlaku.
										      </div>
      										<div class="modal-footer">
        										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        										<button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
      										</div>
    										</div>
  										</div>
										</div>
                                            
									</form>
  							  </div>
  							<div class="card-footer text-center">
  								<p>Copyright &copy; Faisal Wardiansyah 2023</p>
		  				 </div>
						</div>
        			</div>
        		</div>
        	</div>
        </main>
    </body>
</html>
<?php
	include 'koneksi.php';
	session_start();
	
	if(!isset($_SESSION['username'])) {
	header('location:index.php');
	exit;
	}
	
	
	//Query tabel mobil
	$i="SELECT *FROM mobil where id_mobil='1'";
	$one=mysqli_query($koneksi,$i);
	$satu=mysqli_fetch_array($one);
	
	$ii="SELECT *FROM mobil where id_mobil='2'";
	$two=mysqli_query($koneksi,$ii);
	$dua=mysqli_fetch_array($two);
	
	$iii="SELECT *FROM mobil where id_mobil='3'";
	$three=mysqli_query($koneksi,$iii);
	$tiga=mysqli_fetch_array($three);
	
	$iv="SELECT *FROM mobil where id_mobil='4'";
	$four=mysqli_query($koneksi,$iv);
	$empat=mysqli_fetch_array($four);
	
	
	
	//Query tabel sopir
	$v="SELECT *FROM sopir where id_sopir='1'";
	$five=mysqli_query($koneksi,$v);
	$lima=mysqli_fetch_array($five);
	
	$vi="SELECT *FROM sopir where id_sopir='2'";
	$six=mysqli_query($koneksi,$vi);
	$enam=mysqli_fetch_array($six);
	
	$vii="SELECT *FROM sopir where id_sopir='3'";
	$seven=mysqli_query($koneksi,$vii);
	$tujuh=mysqli_fetch_array($seven);
	
	$viii="SELECT *FROM sopir where id_sopir='4'";
	$eight=mysqli_query($koneksi,$viii);
	$delapan=mysqli_fetch_array($eight);
	
	if(isset($_POST['pesan_i'])) {
		$jenis_mobil_i=$_POST['jenis_mobil_i'];
		$warna_i=$_POST['warna_i'];
		$plat_nomor_i=$_POST['plat_nomor_i'];
		$kapasitas_i=$_POST['kapasitas_i'];
		$sql_i="INSERT INTO sementara VALUES('$jenis_mobil_i','$warna_i','$plat_nomor_i','$kapasitas_i')";
		
		if(mysqli_query($koneksi,$sql_i)) {
		header('location:sopir.php?id_mobil=$one[id_mobil]');
		
		}
		
	}
	
	if(isset($_POST['pesan_ii'])) {
		$jenis_mobil_ii=$_POST['jenis_mobil_ii'];
		$warna_ii=$_POST['warna_ii'];
		$plat_nomor_ii=$_POST['plat_nomor_ii'];
		$kapasitas_ii=$_POST['kapasitas_ii'];
		$sql_ii="INSERT INTO sementara VALUES('$jenis_mobil_ii','$warna_ii','$plat_nomor_ii','$kapasitas_ii')";
		
		if(mysqli_query($koneksi,$sql_ii)) {
		header('location:sopir.php');
		
		}
	}
	
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
    	<link rel="stylesheet" href="css/bootstrap.min.css" />
    	<script src="js/bootstrap.min.js"></script>
    	<link rel="stylesheet" href="style.css" />
    
    	<style>
    		#foto
    	{
    		position:relative;
    		top:15px;
    	}
    
    		.my-card
    	{
    		width:100%;
    		margin:60px auto;
    			
    	}
    		
    	
    	
		
    	</style>
    	<title>Pemesanan</title>
    
	</head>

	<body>
	<form method="POST">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Pemesanan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto" >
                        <a class="nav-link link-light p-3 active" href="home.php"><img style="width:25px;" src="aset/home.png"/>| Home</a>
        				<a class="nav-link link-light p-3 active" href="pemesanan.php"><img style="width:25px;" src="aset/list.png"/>| Pemesanan</a>
        				<a class="nav-link link-light p-3 active" href="about.php"><img style="width:25px;" src="aset/info.png"/>| About</a>
        				<a class="nav-link link-light p-3 active" href="logout.php"><img style="width:25px;" src="aset/logout.png"/>| Logout</a>
                    </ul>
                </div>
            </div>
         </nav>
			
			
		<section style="position:relative; top:56px; background-color:#e2edff;" class="jumbotron text-center mb-1">
			<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: 90%; top: 1rem; margin: auto; transition: 0.5s;">
  			<strong>Selamat datang!</strong> Silahkan pilih mobil yang ingin anda sewa untuk travel.
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<br>
			<svg xmlns="aset/wave.svg" viewBox="0 0 1440 320">
  			<path fill="#ffffff" fill-opacity="1" d="M0,64L48,96C96,128,192,192,288,181.3C384,171,480,85,576,90.7C672,96,768,192,864,224C960,256,1056,224,1152,186.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
			</svg>
		</section>
			
			
			
			<!--Pesanan-->
						<div class="col-md-3 mb-3">
							<div class="card bg-primary shadow my-card" style="width: 18rem;">
  							<div class="card-body">
  							  <h5 class="text-center text-light">Toyota Alphard</h5>
    							<img src="aset/aset-mobil/1.png" class="mobil" style="width: 15rem;">
    							<center><button type="button" class="btn btn-light" id="tombol" data-bs-toggle="modal" data-bs-target="#exampleModal1">Detail</button></center>
  						 	</div>
  							</div>
							</div>
						
						<div class="col-md-3 mb-3">
							<div class="card bg-primary shadow my-card" style="width: 18rem;">
  							<div class="card-body">
  							  <h5 class="text-center text-light">Toyota Avanza</h5>
    							<img src="aset/aset-mobil/2.png" class="mobil" style="width: 15rem;">
    							<center><button type="button" class="btn btn-light" id="tombol" data-bs-toggle="modal" data-bs-target="#exampleModal2">Detail</button></center>
  							</div>
							</div>
						</div>
					
						<div class="col-md-3 mb-3">
							<div class="card bg-primary shadow my-card" style="width: 18rem;">
  							<div class="card-body">
  							  <h5 class="text-center text-light">Suzuki Ertiga</h5>
    							<img src="aset/aset-mobil/3.png" class="mobil" style="width: 15rem;">
    							<center><button type="button" class="btn btn-light" id="tombol" data-bs-toggle="modal" data-bs-target="#exampleModal3">Detail</button></center>
  							</div>
							</div>
						</div>
						
						<div class="col-md-3 mb-3">
							<div class="card bg-primary shadow my-card" style="width: 18rem;">
  							<div class="card-body">
  							  <h5 class="text-center text-light">Nissan Evalia</h5>
    							<img src="aset/aset-mobil/4.png" class="mobil" style="width: 15rem;">
    							<center><button type="button" class="btn btn-light" id="tombol" data-bs-toggle="modal" data-bs-target="#exampleModal4">Detail</button></center>
  							</div>
							</div>
						</div>
						
						
			<!--akhir Pesanan-->
				
				
			<!-- Modal 1-->
			<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content text-center">
      			<div class="modal-header bg-primary">
        			<h5 class="modal-title text-light" id="exampleModalLabel">Detail Mobil</h5>
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">
      				<img src="aset/aset-mobil/1.png" style="width: 14rem;"/><hr>
      			  <div class="text-start">
      				
      	
      				<div class="mb-3">
      					<label for="disabledTextInput" class="form-label d-none">Jenis Mobil</label>
      					<input type="text" name="id_mobil_i" id="disabledTextInput" class="form-control d-none" value="<?php echo $satu['id_mobil']; ?>" placeholder="<?php echo $satu['id_mobil']; ?>">
   				   </div>
   
      				<div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Jenis Mobil</label>
      					<input type="text" name="jenis_mobil_i" id="disabledTextInput" class="form-control" value="<?php echo $satu['jenis_mobil']; ?>" placeholder="<?php echo $satu['jenis_mobil']; ?>">
   				   </div>
   
   				  <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Warna</label>
      					<input type="text" name="warna_i" id="disabledTextInput" class="form-control" value="<?php echo $satu['warna']; ?>" placeholder="<?php echo $satu['warna']; ?>">
   				   </div>
  
                      <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Plat Nomor</label>
      					<input type="text" name="plat_nomor_i" id="disabledTextInput" class="form-control" value="<?php echo $satu['plat_nomor']; ?>" placeholder="<?php echo $satu['plat_nomor']; ?>">
   				   </div>
   
   				   <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Kapasitas Penumpang</label>
      					<input type="text" name="kapasitas_i" id="disabledTextInput" class="form-control" value="<?php echo $satu['kapasitas']; ?>" placeholder="<?php echo $satu['kapasitas']; ?>">
   				   </div>
   					
   				  
   			   	<hr>
   					<div class="card shadow">
   				 	<div class="card-header bg-primary"><h3 class="text-center font-weight-light text-light my-4">Bio Sopir</h3></div>
  						<div class="card-body text-center">
  						<center><img src="aset/aset-sopir/sopir-1.png" style="width: 9rem"/></center>
  						<br>
  						<h5 style="font-size:18px;"><?php echo $lima['nama_sopir']; ?></h5>
    					  <h5 style="font-size: 14px;"><?php echo $lima['alamat']; ?></h5>
    				 	 <h5 style="font-size: 12px;"><?php echo $lima['no_hp']; ?></h5>
    						
  						</div>
						</div>
                     <br>
                     <hr>
                     <br>
                     
  					<div class="mb-3">
  					<label class="form-label">Tujuan</label>
    					<select class="form-select form-select mb-3" aria-label=".form-select example">
  						<option selected>Pilih Tujuan</option>
  						<option value="Lubuk Linggau">Lubuk Linggau</option>
  						<option value="Jambi">Jambi</option>
 						 <option value="Bengkulu">Bengkulu</option>
                          <option value="Kepahiyang">Kepahiyang</option>
 						 <option value="Palembang">Palembang</option>
 						 <option value="Curup">Curup</option>
 						 <option value="Padang">Padang</option>
						</select>
    				    <div id="emailHelp" class="form-text"><i>*/ Pilih tujuan yang disediakan.</i></div>
  					</div>
  
 					   <div class="mb-3">
    						<label for="exampleInputEmail1" class="form-label">Email</label>
    						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Informasi lebih lanjut akan dikirim ke email anda.</i></div>
  					  </div>
  					
						<div class="mb-3">
    						<label for="penumpang" class="form-label">Penumpang</label>
    						<input type="text" class="form-control" id="penumpang" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Jumlah penumpang yang ingin anda pesan.</i></div>
  					  </div>
  					
                       <div class="mb-3">
    						<label for="harga" class="form-label">Harga</label>
    						<input type="text" class="form-control" id="harga" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Harga per penumpang.</i></div>
  					  </div>
  					
					
					
        
   				
   			   </div>
				 </div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        		<button type="submit" name="pesan_i" class="btn btn-primary">Pesan</button>
      		</div>
    		</div>
  		</div>
		</div>
		<!--Akhir Modal 1-->
			
		<!-- Modal 2-->
			<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content text-center">
      			<div class="modal-header bg-primary">
        			<h5 class="modal-title text-light" id="exampleModalLabel">Detail Mobil</h5>
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">
      				<img src="aset/aset-mobil/2.png" style="width: 14rem;"/><hr>
      			  <div class="text-start">
      				<fieldset >
      				<div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Jenis Mobil</label>
      					<input type="text" name="jenis_mobil_ii" id="disabledTextInput" class="form-control" value="<?php echo $dua['jenis_mobil']; ?>" placeholder="<?php echo $dua['jenis_mobil']; ?>">
   				   </div>
   
   				  <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Warna</label>
      					<input type="text" name="warna_ii" id="disabledTextInput" class="form-control" value="<?php echo $dua['warna']; ?>" placeholder="<?php echo $dua['warna']; ?>">
   				   </div>
  
                      <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Plat Nomor</label>
      					<input type="text" name="plat_nomor_ii" id="disabledTextInput" class="form-control" value="<?php echo $dua['plat_nomor']; ?>" placeholder="<?php echo $dua['plat_nomor']; ?>">
   				   </div>
   
   				   <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Kapasitas Penumpang</label>
      					<input type="text" name="kapasitas_ii" id="disabledTextInput" class="form-control" value="<?php echo $dua['kapasitas']; ?>" placeholder="<?php echo $dua['kapasitas']; ?>">
   				   </div>
      		
      
      				<hr>
   					<div class="card shadow">
   				 	<div class="card-header bg-primary"><h3 class="text-center font-weight-light text-light my-4">Bio Sopir</h3></div>
  						<div class="card-body text-center">
  						<center><img src="aset/aset-sopir/sopir-4.png" style="width: 9rem"/></center>
  						<br>
  						<h5 style="font-size:18px;"><?php echo $enam['nama_sopir']; ?></h5>
    					  <h5 style="font-size: 14px;"><?php echo $enam['alamat']; ?></h5>
    				 	 <h5 style="font-size: 12px;"><?php echo $enam['no_hp']; ?></h5>
    						
  						</div>
						</div>
                     <br>
                     <hr>
                     <br>
                     
  					<div class="mb-3">
  					<label class="form-label">Tujuan</label>
    					<select class="form-select form-select mb-3" aria-label=".form-select example">
  						<option selected>Pilih Tujuan</option>
  						<option value="Lubuk Linggau">Lubuk Linggau</option>
  						<option value="Jambi">Jambi</option>
 						 <option value="Bengkulu">Bengkulu</option>
                          <option value="Kepahiyang">Kepahiyang</option>
 						 <option value="Palembang">Palembang</option>
 						 <option value="Curup">Curup</option>
 						 <option value="Padang">Padang</option>
						</select>
    				    <div id="emailHelp" class="form-text"><i>*/ Pilih tujuan yang disediakan.</i></div>
  					</div>
  
 					   <div class="mb-3">
    						<label for="exampleInputEmail1" class="form-label">Email</label>
    						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Informasi lebih lanjut akan dikirim ke email anda.</i></div>
  					  </div>
  					
						<div class="mb-3">
    						<label for="penumpang" class="form-label">Penumpang</label>
    						<input type="text" class="form-control" id="penumpang" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Jumlah penumpang yang ingin anda pesan.</i></div>
  					  </div>
  					
                       <div class="mb-3">
    						<label for="harga" class="form-label">Harga</label>
    						<input type="text" class="form-control" id="harga" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Harga per penumpang.</i></div>
  					  </div>
  					
        
   				</fielset>
   			   </div>
				 </div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        		<button type="submit" name="pesan_ii" class="btn btn-primary">Pesan</button>
      		</div>
    		</div>
  		</div>
		</div>
		<!--Akhir Modal 2-->
			
			
		<!-- Modal 3-->
			<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content text-center">
      			<div class="modal-header bg-primary">
        			<h5 class="modal-title text-light" id="exampleModalLabel">Detail Mobil</h5>
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">
      				<img src="aset/aset-mobil/3.png" style="width: 14rem;"/><hr>
      			  <div class="text-start">
      				<fieldset >
      				<div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Jenis Mobil</label>
      					<input type="text" name="jenis_mobil" id="disabledTextInput" class="form-control" value="<?php echo $tiga['jenis_mobil']; ?>" placeholder="<?php echo $tiga['jenis_mobil']; ?>">
   				   </div>
   
   				  <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Warna</label>
      					<input type="text" name="warna" id="disabledTextInput" class="form-control" value="<?php echo $tiga['warna']; ?>" placeholder="<?php echo $tiga['warna']; ?>">
   				   </div>
  
                      <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Plat Nomor</label>
      					<input type="text" name="plat_nomor" id="disabledTextInput" class="form-control" value="<?php echo $tiga['plat_nomor']; ?>" placeholder="<?php echo $tiga['plat_nomor']; ?>">
   				   </div>
   
   				   <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Kapasitas Penumpang</label>
      					<input type="text" name="kapasitas" id="disabledTextInput" class="form-control" value="<?php echo $tiga['kapasitas']; ?>" placeholder="<?php echo $tiga['kapasitas']; ?>">
   				   </div>
      
      
      				<hr>
   					<div class="card shadow">
   				 	<div class="card-header bg-primary"><h3 class="text-center font-weight-light text-light my-4">Bio Sopir</h3></div>
  						<div class="card-body text-center">
  						<center><img src="aset/aset-sopir/sopir-3.png" style="width: 9rem"/></center>
  						<br>
  						<h5 style="font-size:18px;"><?php echo $tujuh['nama_sopir']; ?></h5>
    					  <h5 style="font-size: 14px;"><?php echo $tujuh['alamat']; ?></h5>
    				 	 <h5 style="font-size: 12px;"><?php echo $tujuh['no_hp']; ?></h5>
    						
  						</div>
						</div>
                     <br>
                     <hr>
                     <br>
                     
  					<div class="mb-3">
  					<label class="form-label">Tujuan</label>
    					<select class="form-select form-select mb-3" aria-label=".form-select example">
  						<option selected>Pilih Tujuan</option>
  						<option value="Lubuk Linggau">Lubuk Linggau</option>
  						<option value="Jambi">Jambi</option>
 						 <option value="Bengkulu">Bengkulu</option>
                          <option value="Kepahiyang">Kepahiyang</option>
 						 <option value="Palembang">Palembang</option>
 						 <option value="Curup">Curup</option>
 						 <option value="Padang">Padang</option>
						</select>
    				    <div id="emailHelp" class="form-text"><i>*/ Pilih tujuan yang disediakan.</i></div>
  					</div>
  
 					   <div class="mb-3">
    						<label for="exampleInputEmail1" class="form-label">Email</label>
    						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Informasi lebih lanjut akan dikirim ke email anda.</i></div>
  					  </div>
  					
						<div class="mb-3">
    						<label for="penumpang" class="form-label">Penumpang</label>
    						<input type="text" class="form-control" id="penumpang" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Jumlah penumpang yang ingin anda pesan.</i></div>
  					  </div>
  					
                       <div class="mb-3">
    						<label for="harga" class="form-label">Harga</label>
    						<input type="text" class="form-control" id="harga" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Harga per penumpang.</i></div>
  					  </div>
  					
        
   				</fielset>
   			   </div>
				 </div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        		<button type="submit" name="pesan" class="btn btn-primary">Pesan</button>
      		</div>
    		</div>
  		</div>
		</div>
		<!--Akhir Modal 3-->
			
		<!-- Modal 4-->
			<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content text-center">
      			<div class="modal-header bg-primary">
        			<h5 class="modal-title text-light" id="exampleModalLabel">Detail Mobil</h5>
        			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      			</div>
      			<div class="modal-body">
      				<img src="aset/aset-mobil/4.png" style="width: 14rem;"/><hr>
      			  <div class="text-start">
      				<fieldset >
      				<div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Jenis Mobil</label>
      					<input type="text" name="jenis_mobil" id="disabledTextInput" class="form-control" value="<?php echo $empat['jenis_mobil']; ?>" placeholder="<?php echo $empat['jenis_mobil']; ?>">
   				   </div>
   
   				  <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Warna</label>
      					<input type="text" name="warna" id="disabledTextInput" class="form-control" value="<?php echo $empat['warna']; ?>" placeholder="<?php echo $empat['warna']; ?>">
   				   </div>
  
                      <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Plat Nomor</label>
      					<input type="text" name="plat_nomor" id="disabledTextInput" class="form-control" value="<?php echo $empat['plat_nomor']; ?>" placeholder="<?php echo $empat['plat_nomor']; ?>">
   				   </div>
   
   				   <div class="mb-3">
      					<label for="disabledTextInput" class="form-label">Kapasitas Penumpang</label>
      					<input type="text" name="kapasitas" id="disabledTextInput" class="form-control" value="<?php echo $empat['kapasitas']; ?>" placeholder="<?php echo $empat['kapasitas']; ?>">
   				   </div>
      
        
        
        			<hr>
   					<div class="card shadow">
   				 	<div class="card-header bg-primary"><h3 class="text-center font-weight-light text-light my-4">Bio Sopir</h3></div>
  						<div class="card-body text-center">
  						<center><img src="aset/aset-sopir/sopir-2.png" style="width: 9rem"/></center>
  						<br>
  						<h5 style="font-size:18px;"><?php echo $delapan['nama_sopir']; ?></h5>
    					  <h5 style="font-size: 14px;"><?php echo $delapan['alamat']; ?></h5>
    				 	 <h5 style="font-size: 12px;"><?php echo $delapan['no_hp']; ?></h5>
    						
  						</div>
						</div>
                     <br>
                     <hr>
                     <br>
                     
  					<div class="mb-3">
  					<label class="form-label">Tujuan</label>
    					<select class="form-select form-select mb-3" aria-label=".form-select example">
  						<option selected>Pilih Tujuan</option>
  						<option value="Lubuk Linggau">Lubuk Linggau</option>
  						<option value="Jambi">Jambi</option>
 						 <option value="Bengkulu">Bengkulu</option>
                          <option value="Kepahiyang">Kepahiyang</option>
 						 <option value="Palembang">Palembang</option>
 						 <option value="Curup">Curup</option>
 						 <option value="Padang">Padang</option>
						</select>
    				    <div id="emailHelp" class="form-text"><i>*/ Pilih tujuan yang disediakan.</i></div>
  					</div>
  
 					   <div class="mb-3">
    						<label for="exampleInputEmail1" class="form-label">Email</label>
    						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Informasi lebih lanjut akan dikirim ke email anda.</i></div>
  					  </div>
  					
						<div class="mb-3">
    						<label for="penumpang" class="form-label">Penumpang</label>
    						<input type="text" class="form-control" id="penumpang" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Jumlah penumpang yang ingin anda pesan.</i></div>
  					  </div>
  					
                       <div class="mb-3">
    						<label for="harga" class="form-label">Harga</label>
    						<input type="text" class="form-control" id="harga" aria-describedby="emailHelp">
    					  <div id="emailHelp" class="form-text"><i>*/ Harga per penumpang.</i></div>
  					  </div>
  					
   				</fielset>
   			   </div>
				 </div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        		<button type="submit" name="pesan" class="btn btn-primary">Pesan</button>
      		</div>
    		</div>
  		</div>
		</div>
		<!--Akhir Modal 4-->
			
		
			
			
                                            
			<section style="position:relative; top:50px; background-color:#e2edff;" id="foot" class="jumbotron ">
  		  	<svg xmlns="aset/wave2.svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,192L48,208C96,224,192,256,288,234.7C384,213,480,139,576,96C672,53,768,43,864,85.3C960,128,1056,224,1152,240C1248,256,1344,192,1392,160L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  				<p class="text-center">Copyright &copy; Faisal Wardiansyah 2023</p>
			</section>
			
		</form>
	</body>
</html>
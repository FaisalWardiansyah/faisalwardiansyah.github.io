<?php
include 'koneksi.php';
session_start();

if(!isset($_SESSION['username'])) {
	header('location:index.php');
	exit;
	}


$query = mysqli_query($koneksi,"SELECT * FROM biodata");
?>


<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
    	<link rel="stylesheet" href="css/bootstrap.min.css" />
    	<script src="js/bootstrap.min.js"></script>
    	
    	
		
		<link rel="stylesheet" type="text/css" href="DataTables/dataTables.bootstrap5.min.css"/>
		
		<script type="text/javascript" src="DataTables/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="DataTables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="DataTables/dataTables.bootstrap5.min.js"></script>

    
    	<style>
    		#back
    		{
				background-color:#e2edff;
			}
    	</style>
	</head>
	
	<body>
		
		<div id="back">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link link-light p-3 active" href="home.php"><img style="width:25px;" src="aset/home.png"/>| Home</a>
        				<a class="nav-link link-light p-3 active" href="pemesanan.php"><img style="width:25px;" src="aset/list.png"/>| Pemesanan</a>
        				<a class="nav-link link-light p-3 active" href="about.php"><img style="width:25px;" src="aset/info.png"/>| About</a>
        				<a class="nav-link link-light p-3 active" href="logout.php"><img style="width:25px;" src="aset/logout.png"/>| Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
        
        
       <center><div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel" style="position:relative; top:60px;">
  		<div class="carousel-inner ">
    		<div class="carousel-item active">
      		<img src="aset/slide-1.jpg" class="d-block shadow p-3 mb-5 bg-body rounded img-thumbnail" alt="1" width="95%">
    		</div>
    		<div class="carousel-item">
      		<img src="aset/slide-2.jpg" class="d-block shadow p-3 mb-5 bg-body rounded img-thumbnail" alt="2" width="95%">
    		</div>
    		<div class="carousel-item">
      		<img src="aset/slide-3.jpg" class="d-block shadow p-3 mb-5 bg-body rounded img-thumbnail" alt="3" width="95%">
    		</div>
  		</div>
  	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Previous</span>
  	</button>
  	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Next</span>
  	</button>
	</div></center>


		<div class="jumbotron">
  		<br>
  		<br>
  		<svg xmlns="" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,122.7C384,96,480,128,576,154.7C672,181,768,203,864,224C960,245,1056,267,1152,256C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
		</div>
	</div>
	
	<!--PHP-->
	

		<main>
        	<div class="container">
            	<div class="row justify-content-center">
            		<div class="col-lg-7">
            			<div class="card shadow-lg border-0 rounded-lg mt-5">
                        	<div class="card-header bg-primary"><h3 class="text-center font-weight-light my-4 text-white">Jadwal Keberatan</h3></div>
                        
  						  	<div class="card-body">

									<table id="example" class="table table-striped display nowrap" style="width:100%">
        								<thead>
            								<tr>
                								<th>No</th>
                								<th>Tujuan</th>
                								<th>Keberatan</th>
                								<th>Status</th>
            								</tr>
        								</thead>
        
        								<tbody>
        	
        									
            								<tr>
                								<td>$no</td>
                								<td>Semarang</td>
                								<td>12.00</td>
                								<td></td>
            								</tr>
        								</tbody>
        
        								<tfoot>
            								<tr>
                								<th>No</th>
                								<th>Tujuan</th>
                								<th>Keberatan</th>
                								<th>Status</th>
            								</tr>
        								</tfoot>
    								</table>
    
    				<!--script-->
	<script>
		$(document).ready(function () {
    		$('#example').DataTable({
        		scrollY: 200,
        		scrollX: true,
    		});
		});
		
	</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		
		<section style="position:relative; top:150px; background-color:#e2edff;" id="foot" class="jumbotron ">
  		  <svg xmlns="aset/wave2.svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,192L48,208C96,224,192,256,288,234.7C384,213,480,139,576,96C672,53,768,43,864,85.3C960,128,1056,224,1152,240C1248,256,1344,192,1392,160L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  			<p class="text-center">Copyright &copy; Faisal Wardiansyah 2023</p>
		</section>
		
	</body>
</html>
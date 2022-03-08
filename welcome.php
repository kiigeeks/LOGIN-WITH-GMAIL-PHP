<?php
  session_start(); // Start session nya

  // Kita cek apakah user sudah login atau belum
  // Cek nya dengan cara cek apakah terdapat session email_DVD atau tidak
  if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
    header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">    
		<meta name="description" content="KiiGeeks">
    <meta name="author" content="KiiGeeks">
    <meta name="keyword" content="KiiGeeks">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fvicon-bec.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SIGN GOOGLE</title>
  </head>

  <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">SIGN GOOGLE</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<!-- <li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li> -->
						<!-- <li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container mt-4">
			<div class="text-center" style="margin-top: 10px;margin-bottom: 10px;">
        SELAMAT DATANG : <?php echo $_SESSION['namalengkap'].', EMAIL: '.$_SESSION['username']; ?> <br>
        <a href="logout.php">Logout</a>
      </div>
		</div>

	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
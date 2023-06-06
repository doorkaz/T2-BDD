<!DOCTYPE html>
<?php
	session_start();
	include "db_conn.php";
	include "quantityOnCart.php";
	if(!ISSET($_SESSION['Correo'])){
		header('location:login.php');
	}
?>	
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>PrestigeTravels</title>

	<!-- CSS -->
	<link rel = "stylesheet" type = "text/css" href = "../css/index.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/navbar.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/table.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/general.css">
	<!--Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- FONTAWESOME -->
	<script src="https://kit.fontawesome.com/c7128d3718.js" crossorigin="anonymous"></script>
	<!-- BOOTSTRAP -->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- BOOTSTRAP FONT ICON -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #1b3039">
		<div class="container-fluid">
			<a class="navbar-brand fs-4 txt-shadow" style="color: white" href="index.php">PrestigeTravels</a>
			<button class="navbar-toggler btn btn-light" style="background-color: #e8eaeb" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active fs-6" style="color: white" href="paquetes.php">Paquetes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active fs-6" style="color: white" href="hoteles.php">Hoteles</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active fs-6" style="color: white" href="cart.php">Carrito 
							<span class="rounded-circle ps-1 pe-1 text-center" style="background-color: #629fa5; color: #182c2e">
								<?php quantityOnCart($_SESSION['id_usuario'])?>
							</span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle fs-6" style="color: white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Cuenta
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="cuenta.php">Mi perfil</a></li>
							<li><a class="dropdown-item" href="reviews.php">Reseñas</a></li>
							<li><a class="dropdown-item" href="mywishlist.php">Mi wishlist</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
						</ul>
					</li>
				</ul>
				<span class="navbar-text me-2" style="color: white">
					<i class="bi bi-person-circle"></i> Cuenta activa en <?=$_SESSION['Nombre']?>
				</span>	
				
			</div>
		</div>
	</nav>
	
    <div class="container"> 
    
        <h2 class='text-center text-white'>Cart</h2>

        <table class="table table-bordered bg-white">
            <tr>
                <th>Paquete/Hotel</th>
                <th>Precio</th>
                <th>Total</th>
                
                
            </tr>
            <?php include "show-cart.php"; ?>
        
            
        </table>

    </div>
	
    
    
    <footer class="footer row">
    </footer>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

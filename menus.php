<nav class="navbar navbar-dark bg-info bg-dark navbar-expand-lg navbar-expand-md my-3">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="nav navbar-nav menus">	
				<?php
                      if($_SESSION['type']=="admin"){
                          echo ' 
						  <li class="nav-item"><a class="nav-link" href="index.php" id="index_menu">Inicio</a></li>
						  <li class="nav-item"><a class="nav-link" href="customer.php" id="customer_menu">Clientes</a></li>
						  <li class="nav-item"><a class="nav-link" href="category.php" id="category_menu">Categorías</a></li>
						  <li class="nav-item"><a class="nav-link" href="brand.php" id="brand_menu">Marcas</a></li>
						  <li class="nav-item"><a class="nav-link" href="supplier.php" id="supplier_menu">Proveedores</a></li>
						  <li class="nav-item"><a class="nav-link" href="product.php" id="product_menu">Productos</a></li>
						  <li class="nav-item"><a class="nav-link" href="purchase.php" id="purchase_menu">Compras</a></li>
						  <li class="nav-item"><a class="nav-link" href="order.php" id="order_menu">Ventas</a></li>
                           ';
                      }else if($_SESSION['type']=="member"){
						echo ' 
						<li class="nav-item"><a class="nav-link" href="customer.php" id="customer_menu">Clientes</a></li>
						<li class="nav-item"><a class="nav-link" href="supplier.php" id="supplier_menu">Proveedores</a></li>
						<li class="nav-item"><a class="nav-link" href="product.php" id="product_menu">Productos</a></li>
						<li class="nav-item"><a class="nav-link" href="purchase.php" id="purchase_menu">Compras</a></li>
						<li class="nav-item"><a class="nav-link" href="order.php" id="order_menu">Ventas</a></li>
						 ';
					}
                  ?>
			</ul>
		</div>
		<ul class="nav navbar-nav">
			<li class="dropdown position-relative">
				<button type="button" class=" border px-3 text-dark  dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
					<span class="badge badge-pill bg-danger count"></span>
					<?php echo $_SESSION['name']; ?>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li><a class="dropdown-item" href="action.php?action=logout">Cerrar Sesión</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>




	<nav class="container navbar navbar-expand-lg navbar-light bg-warning navbarbox p-3 mt-4">
	    <a class="navbar-brand" href="index.php">Market Projesi</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavDropdown">
	        <ul class="navbar-nav">
	            <li class="nav-item active">
	                <a class="nav-link" href="index.php">Anasayfa <span class="sr-only">(current)</span></a>
	            </li>

	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    Kategoriler
	                </a>
	                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <ul>
	                        <li><a href="categories.php">Kategorileri Görüntüle</a></li>
	                        <li><a href="addcategory.php">Kategori Ekle</a></li>
	                    </ul>
	                </div>
	            </li>

	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    Ürünler
	                </a>
	                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <ul>
	                        <li><a href="products.php">Ürünleri Görüntüle</a></li>
	                        <li><a href="addproduct.php">Ürün Ekle</a></li>
	                    </ul>
	                </div>
	            </li>

	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    Siparişler
	                </a>
	                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <ul>
	                        <li><a href="orders.php">Siparişleri Görüntüle</a></li>
	                    </ul>
	                </div>
	            </li>

	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    Müşteriler
	                </a>
	                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <ul>
	                        <li><a href="customers.php">Müşterileri Görüntüle</a></li>
	                        <li><a href="reviews.php">Yorumları Görüntüle</a></li>
	                    </ul>
	                </div>
	            </li>

	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    Hesabım
	                </a>
	                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <ul>
	                        <li><a href="">Profili Güncelle</a></li>
	                        <li><a href="logout.php">Çıkış</a></li>
	                    </ul>
	                </div>
	            </li>





	            <li class="nav-item">
	                <a class="nav-link" href="#">Merhaba <?php  echo $cr['firstname'];  ?></a>
	            </li>




	        </ul>
	    </div>


	</nav>

<?php
	session_start();
	require_once '../config/connect.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}

	if(isset($_POST) & !empty($_POST)){
		$prodname = mysqli_real_escape_string($connection, $_POST['productname']);
		$description = mysqli_real_escape_string($connection, $_POST['productdescription']);
		$category = mysqli_real_escape_string($connection, $_POST['productcategory']);
		$price = mysqli_real_escape_string($connection, $_POST['productprice']);


		if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['productimage']['name'];
			$size = $_FILES['productimage']['size'];
			$type = $_FILES['productimage']['type'];
			$tmp_name = $_FILES['productimage']['tmp_name'];

			$max_size = 10000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) && !empty($name)){
				if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
					$location = "uploads/";
					if(move_uploaded_file($tmp_name, $location.$name)){
						//$smsg = "Uploaded Successfully";
						$sql = "INSERT INTO products (name, description, catid, price, thumb) VALUES ('$prodname', '$description', '$category', '$price', '$location$name')";
						$res = mysqli_query($connection, $sql);
						if($res){
							//echo "Product Created";
							header('location: products.php');
						}else{
							$fmsg = "Failed to Create Product";
						}
					}else{
						$fmsg = "Failed to Upload File";
					}
				}else{
					$fmsg = "Only JPG files are allowed and should be less that 1MB";
				}
			}else{
				$fmsg = "Please Select a File";
			}
		}else{

			$sql = "INSERT INTO products (name, description, catid, price) VALUES ('$prodname', '$description', '$category', '$price')";
			$res = mysqli_query($connection, $sql);
			if($res){
				header('location: products.php');
			}else{
				$fmsg =  "Failed to Create Product";
			}
		}
	}
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>



<section id="content">
  
        <div class="container admincat mt-5">
            <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Productname">Ürün Adı</label>
                    <input type="text" class="form-control" name="productname" id="Productname" placeholder="Ürün adını girin">
                </div>
                <div class="form-group">
                    <label for="productdescription">Ürün Tanımı</label>
                    <textarea class="form-control" name="productdescription" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="productcategory">Ürün Kategori</label>
                    <select class="form-control" id="productcategory" name="productcategory">
                        <option value="">Ürün hangi kategoriye ait ?</option>
                        <?php 	
					$sql = "SELECT * FROM category";
					$res = mysqli_query($connection, $sql); 
					while ($r = mysqli_fetch_assoc($res)) {
				?>
                        <option value="<?php echo $r['id']; ?>"><?php echo $r['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>


                <div class="form-group">
                    <label for="productprice">Ürün Fiyatı</label>
                    <input type="text" class="form-control" name="productprice" id="productprice" placeholder="Fiyat tanımla (Örnek; 12.90)">
                </div>
                <div class="form-group">
                    <label for="productimage">Ürün Resim</label><br>
                    <input type="file" name="productimage" id="productimage">
                    <p class="text-muted small">Sadece jpg/png dosyaları girebilirsin.</p>
                </div>

                <button type="submit" class="mt-5 btn btn-secondary btn-block">Kaydet</button>
            </form>

        </div>
  

</section>
<?php include 'inc/footer.php' ?>

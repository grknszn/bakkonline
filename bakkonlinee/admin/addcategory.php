<?php
	session_start();
	require_once '../config/connect.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}

	if(isset($_POST) & !empty($_POST)){
		$prodname = mysqli_real_escape_string($connection, $_POST['catrname']);
		


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
						$sql = "INSERT INTO category (name, thumb) VALUES ('$prodname',  '$location$name')";
						$res = mysqli_query($connection, $sql);
						if($res){
							//echo "Product Created";
							header('location: categories.php');
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

			$sql = "INSERT INTO category (name) VALUES ('$prodname', )";
			$res = mysqli_query($connection, $sql);
			if($res){
				header('location: categories.php');
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
                    <label for="Categoryname">Kategori Adı</label>
                    <input type="text" class="form-control" name="catrname" id="Categoryname" placeholder="Kategori adı belirle">
                </div>
              

               


               
                <div class="form-group mt-5">
                    <label for="productimage">Ürün Resim</label><br>
                    <input type="file" name="productimage" id="productimage">
                    <p class="small text-muted">Sadece jpg/png dosyaları yükleyebilirsin.</p>
                </div>

                <button type="submit" class="mt-5 btn btn-secondary btn-block">KAYDET</button>
            </form>

        </div>


</section>
<?php include 'inc/footer.php' ?>

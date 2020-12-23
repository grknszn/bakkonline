<?php
	ob_start();
	session_start();
	require_once 'config/connect.php';
	if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){
		header('location: login.php');
	}
include 'inc/header.php'; 
include 'inc/nav.php'; 
$uid = $_SESSION['customerid'];
$cart = $_SESSION['cart'];



$sql = "SELECT * FROM usersmeta WHERE uid=$uid";
$res = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($res);
?>

<form method="post" class="needs-validation " novalidate>

    <div class="container text-center adres ">
        <h3 class="mt-5 ">Adres Bilgilerim</h3>
       <a href="edit-address"> <p class="text-muted small animate__animated animate__bounceIn animate__slow"><img src="admin/uploads/write.png" width="15px;" alt=""> Bilgilerimi düzenle</p></a>
        
        <div class="form-row">
            <div class="col-md-6 col-sm-6">
                <label for="validationCustomUsername"></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">İl</span>
                    </div>
                   <input type="text" class="form-control" name="il" value="<?php if(!empty($r['il'])){ echo $r['il']; } elseif(isset($il)){ echo $il; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>



            <div class="col-md-6 col-sm-6">
                <label for="validationCustomUsername"></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">İlçe</span>
                    </div>
                   <input type="text" class="form-control" name="ilce" value="<?php if(!empty($r['ilce'])){ echo $r['ilce']; } elseif(isset($ilce)){ echo $ilce; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
        </div>
        <div class="">
            <label for="validationCustomUsername"></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">Mahalle</span>
                </div>
                <input type="text" class="form-control" name="mahalle" value="<?php if(!empty($r['mahalle'])){ echo $r['mahalle']; } elseif(isset($mahalle)){ echo $mahalle; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 col-sm-6">
                <label for="validationCustomUsername"></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Ad</span>
                    </div>
                    <input type="text" class="form-control" name="fname" value="<?php if(!empty($r['firstname'])){ echo $r['firstname']; } elseif(isset($fname)){ echo $fname; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Adınızı yazın
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-sm-6">
                <label for="validationCustomUsername"></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Soyad</span>
                    </div>
                    <input type="text" class="form-control" name="lname" value="<?php if(!empty($r['lastname'])){ echo $r['lastname']; }elseif(isset($lname)){ echo $lname; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Soyadınızı yazın
                    </div>
                </div>
            </div>
        </div>
        
        <div class="">
            <label for="validationCustomUsername"></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">Telefon</span>
                </div>
                <input type="text" class="form-control" name="mobile" value="<?php if(!empty($r['mobile'])){ echo $r['mobile']; }elseif(isset($phone)){ echo $phone; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Telefon numaranızı yazın
                </div>
            </div>
        </div>
        
       

        <div class="">
            <label for="validationCustomUsername"></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">Cadde/Sokak</span>
                </div>
                <input type="text" class="form-control" name="cadde" value="<?php if(!empty($r['cadde'])){ echo $r['cadde']; }elseif(isset($cadde)){ echo $cadde; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Cadde ya da sokak bilginizi girin
                </div>
            </div>
        </div>



        <div class="mb-3">
            <label for="validationCustomUsername"></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">Apartman Adı</span>
                </div>
                <input type="text" class="form-control" name="apartman" value="<?php if(!empty($r['apartman'])){ echo $r['apartman']; }elseif(isset($apartman)){ echo $apartman; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Apartman, site adınızı yazın
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="col-md-6 col-sm-6">
                <label for="validationCustomUsername"></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Daire No</span>
                    </div>
                    <input type="text" class="form-control" name="daire" value="<?php if(!empty($r['daire'])){ echo $r['daire']; }elseif(isset($daire)){ echo $daire; } ?>"  id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Daire numaranızı yazın
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-sm-6">
                <label for="validationCustomUsername"></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Kat</span>
                    </div>
                    <input type="text" class="form-control" name="kat" value="<?php if(!empty($r['kat'])){ echo $r['kat']; }elseif(isset($kat)){ echo $kat; } ?>" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Kat numaranızı yazın
                    </div>
                </div>
            </div>
        </div>
      

    </div>
</form>





<?php include 'inc/footer.php' ?>

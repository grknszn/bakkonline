<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; ?>

<section class="container font12" >
   
    <div class="row mt-5">
        

        <form class="container col-md-5" method="post" action="registerprocess.php">
            <h3>Üye Ol</h3>
            <p class="text-muted font14"> Zaten üye misin ? <a href="login"><span class="m-2 p-2 badge badge-success animate__animated animate__tada"> Giriş Yap</span></a></p>
            <div class="clearfix space40"></div>
            <?php if(isset($_GET['message'])){ 
								if($_GET['message'] == 2){
							?>
            <div class="alert alert-danger" role="alert"> <?php echo "Failed to Register"; ?> </div>

            <?php } } ?>
            <?php if(isset($_GET['message'])){ 
								if($_GET['message'] == 3){
							?>
            <div class="alert alert-danger" role="alert"> <?php echo "Şifreler uyuşmuyor. Tekrar dene"; ?> </div>

            <?php } } ?>
            <div class="form-group row mt-3">
                <label for="inputEmail3" class="col-md-4 col-form-label">Email</label>
                <div class="col-md-8">
                    <input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-md-4 col-form-label">Şifre</label>
                <div class="col-md-8">
                    <input type="password" required name="password" class="form-control" id="inputPassword3" placeholder="Şifre">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-md-4 col-form-label">Şifre tekrar</label>
                <div class="col-md-8">
                    <input type="password" required name="passwordagain" class="form-control" id="inputPassword3" placeholder="Şifre tekrar">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
                </div>
            </div>
        </form>
        
        
    </div>
</section>






<?php include 'inc/footer.php' ?>

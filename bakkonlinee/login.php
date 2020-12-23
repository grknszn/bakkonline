<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; ?>

<section class="container font12 mt-5">
 
  <div class="row">
        <form class="container col-md-5" method="post" action="loginprocess.php">
            <h3>Üye Giriş</h3>
            <p class="text-muted font14">Üye değil misin ? <a href="register"><span class="m-2 p-2 badge badge-primary">Üye Ol</span></a></p>
            <?php if(isset($_GET['message'])){
								if($_GET['message'] == 1){
						 ?><div class="alert alert-danger" role="alert"> <?php echo "Hatalı giriş. Tekrar dene"; ?> </div>

            <?php } }?>
            <div class="form-group row">
                <label for="inputEmail3" class="col-md-4 col-form-label">Email</label>
                <div class="col-md-8">
                    <input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" value="" required class="col-md-4 col-form-label">Şifre</label>
                <div class="col-md-8">
                    <input type="password" required name="password" class="form-control" id="inputPassword3" placeholder="Şifre">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-block ">Giriş Yap</button>
                </div>
            </div>
        </form>

 </div>
</section>






<?php include 'inc/footer.php' ?>

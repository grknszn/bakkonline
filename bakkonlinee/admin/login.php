<?php 
session_start();
require_once '../config/connect.php'; 
if(isset($_POST) & !empty($_POST)){
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = $_POST['password'];
	$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	if($count == 1){
		//echo "User exits, create session";
		$_SESSION['email'] = $email;
		header("location: index.php");
	}else{
		$fmsg = "Invalid Login Credentials";
	}
}

?>
<?php error_reporting(E_ALL ^ E_NOTICE);  ?>


<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Home Page - PHP Ecommerce</title>

    <!-- Required meta tags -->
    <script src="https://kit.fontawesome.com/3d4aa4e647.js"></script>
    <meta charset="utf-8">


    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


    <!-- Google Font CSS -->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">

    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Caveat:wght@600&family=Nanum+Pen+Script&family=Pacifico&family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3d4aa4e647.js"></script>


    <!-- giriş teması için -->
    <link rel="stylesheet" href="/assets/style-theme.css">

    <link rel="stylesheet" href="   https://blackrockdigital.github.io/startbootstrap-agency/css/agency.min.css">




</head>

<body class="multi-page">

    <div id="wrapper" class="wrapper">
        <!-- HEADER -->
        <header id="header2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-5 col-md-offset-4 logo">
                        <a href="http://[::1]/cishop/admin"><img src="http://[::1]/cishop/assets/images/logo.png" class="img-responsive" alt="" /></a>
                    </div>
                </div>
            </div>
        </header>

        <!-- SHOP CONTENT -->
        <section id="content">
            <div class="content-blog">
                <div class="container">
                    <div class="row">
                        <div class="page_header text-center">
                            <h2>Giriş Yap</h2>
                            <p>Admin Giriş</p>
                        </div>
                        <div class="col-md-12">
                            <div class="row shop-login">
                                <div class="col-md-6 col-md-offset-3">
                                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                                    <div class="box-content">
                                        <!-- <h3 class="heading text-center">I'm a Returning Customer</h3> -->
                                        <div class="clearfix space40"></div>
                                        <form class="logregform" method="post">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>E-mail Adresin</label>
                                                        <input type="email" name="email" value="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix space20"></div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" href="#">(Şifremi unuttum)</a>
                                                        <label>Şifre</label>
                                                        <input type="password" name="password" value="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix space20"></div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="remember-box checkbox">
                                                        <label for="rememberme">
                                                            <input type="checkbox" id="rememberme" name="rememberme"> Beni Hatırla
                                                        </label>
                                                    </span>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="button btn-md pull-right">Giriş Yap</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix space70"></div>
        <!-- FOOTER -->
        <footer id="footer2">

            <div class="footer-bottom container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Gar Market Yönetim Paneli</p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER -->
    </div>






    <!-- Javascript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/dialogFx.js"></script>
    <script src="../js/dialog-js.js"></script>
    <script src="../js/navigation/jquery.easing.js"></script>
    <script src="../js/flexslider/jquery.flexslider.js"></script>
    <script src="../js/navigation/scroll.js"></script>
    <script src="../js/navigation/jquery.sticky.js"></script>
    <script src="../js/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/isotope/isotope.pkgd.js"></script>
    <script src="../js/superfish/js/hoverIntent.js"></script>
    <script src="../js/superfish/js/superfish.js"></script>
    <script src="../js/tweecool.js"></script>
    <script src="../js/jquery.bpopup.js"></script>
    <script src="../js/pikaday/pikaday.js"></script>
    <script src="../js/classie.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../js/jquery.prettyphoto.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/booking.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="../js/gmap.js"></script>
    <script src="../js/gmap2.js"></script>


</body>

</html>

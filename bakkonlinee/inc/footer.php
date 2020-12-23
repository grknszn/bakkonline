	<div class="clearfix"></div>

	<!-- Footer -->
	<footer class="page-footer font-small blue-grey lighten-5">

	    <div class="bg-danger text-white mt-5">
	        <div class="container">

	            <!-- Grid row-->
	            <div class="row py-4 d-flex align-items-center">

	                <!-- Grid column -->
	                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
	                    <h6 class="mb-0">Bizi takip edin, indirimli ürünleri kaçırmayın!</h6>
	                </div>
	                <!-- Grid column -->

	                <!-- Grid column -->
	                <div class="col-md-6 col-lg-7 text-center text-md-right">

	                    <!-- Facebook -->
	                    <a href="https://www.facebook.com/bakkonline" target="_blank" class="fb-ic">
	                        <i class="fab fa-facebook-f white-text mr-4"> </i>
	                    </a>
	                    <!-- Twitter -->
	                    <a href="https://twitter.com/bakkonline" target="_blank" class="tw-ic">
	                        <i class="fab fa-twitter white-text mr-4"> </i>
	                    </a>


	                    <!--Instagram-->
	                    <a href="https://www.instagram.com/bakkonline22/" target="_blank" class="ins-ic">
	                        <i class="fab fa-instagram white-text"> </i>
	                    </a>

	                </div>
	                <!-- Grid column -->

	            </div>
	            <!-- Grid row-->

	        </div>
	    </div>

	    <!-- Footer Links -->
	    <div class="container text-center text-md-left mt-5 font12">

	        <!-- Grid row -->
	        <div class="row mt-3 dark-grey-text">

	            <!-- Grid column -->
	            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

	                <!-- Content -->
	                <h6 class="" style="font-family: 'Russo One', sans-serif; font-size:20px;">bakkonline.com</h6>
	                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	                <p> Evinizin ihtiyacı olan temel ürünleri ve Trakya'nın yerel lezzetlerini sizler için bakkonline.com'da biraraya getirdik.  </p>

	            </div>
	            <!-- Grid column -->

	            <!-- Grid column -->
	            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

	                <!-- Links -->
	                <h6 class="text-uppercase font-weight-bold">Kampanyalar</h6>
	                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

	                <p>
	                    <a class="dark-grey-text" href="#!">Ayın İndirimleri</a>
	                </p>


	            </div>
	            <!-- Grid column -->

	            <!-- Grid column -->
	            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

	                <!-- Links -->
	                <h6 class="text-uppercase font-weight-bold">Avantajlarımız</h6>
	                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	                <p>
	                    <a class="dark-grey-text" href="#!">Sağlıklı, kaliteli ürünler</a>
	                </p>
	                <p>
	                    <a class="dark-grey-text" href="#!">Hızlı teslimat</a>
	                </p>




	            </div>
	            <!-- Grid column -->

	            <!-- Grid column -->
	            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

	                <!-- Links -->
	                <h6 class="text-uppercase font-weight-bold">İletişim</h6>
	                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	                <p>
	                    <i class="fas fa-home mr-3"></i> Şükrüpaşa Mahallesi, Edirne</p>


	                <p>
	                   <a href="https://wa.me/+9005445767012" target="_blank"> <i class="fab fa-whatsapp mr-3"></i> 544 576 70 12</p></a>

	            </div>
	            <!-- Grid column -->

	        </div>
	        <!-- Grid row -->

	    </div>
	    <!-- Footer Links -->

	    <!-- Copyright -->
	    <div class="text-center font12 mb-3">© 2020 <span style="font-family: 'Russo One', sans-serif;">bakkonline.com</span> | Tüm hakları saklıdır.
	        <a class="dark-grey-text" href="bakkonline.com"> </a>
	    </div>
	    <!-- Copyright -->

	</footer>
	<!-- Footer -->





	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



	<script>
	    // Example starter JavaScript for disabling form submissions if there are invalid fields
	    (function() {
	        'use strict';
	        window.addEventListener('load', function() {
	            // Fetch all the forms we want to apply custom Bootstrap validation styles to
	            var forms = document.getElementsByClassName('needs-validation');
	            // Loop over them and prevent submission
	            var validation = Array.prototype.filter.call(forms, function(form) {
	                form.addEventListener('submit', function(event) {
	                    if (form.checkValidity() === false) {
	                        event.preventDefault();
	                        event.stopPropagation();
	                    }
	                    form.classList.add('was-validated');
	                }, false);
	            });
	        }, false);
	    })();

	</script>
	<script>
	    function openNav() {
	        document.getElementById("YanMenu").style.width = "250px";
	    }

	    function closeNav() {
	        document.getElementById("YanMenu").style.width = "0";
	    }

	    // SHOPPING CART PLUS OR MINUS
	    $('a.qty-minus').on('click', function(e) {
	        e.preventDefault();
	        var $this = $(this);
	        var $input = $this.closest('div').find('input');
	        var value = parseInt($input.val());

	        if (value > 1) {
	            value = value - 1;
	        } else {
	            value = 0;
	        }

	        $input.val(value);

	    });

	    $('a.qty-plus').on('click', function(e) {
	        e.preventDefault();
	        var $this = $(this);
	        var $input = $this.closest('div').find('input');
	        var value = parseInt($input.val());

	        if (value < 100) {
	            value = value + 1;
	        } else {
	            value = 100;
	        }

	        $input.val(value);
	    });

	</script>









	</body>

	</html>

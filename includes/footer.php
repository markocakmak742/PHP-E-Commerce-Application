<?php 
    
$popular_products = Product::popular_products(1);    
    
?>

<!-- FOOTER -->
<footer class="bg-dark footer1 footer2 padding-top-60">
    
<div class="container">
<div class="row margin-bottom-10">
    
<div class="col-md-4 margin-bottom-30 footer-info padding-left-30">
<h5>About Us</h5>
<p>Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
<div class="span-align">
<span><i class="fa fa-envelope"></i> <a href="mailto:markocakmak55@gmail.com">www.markocakmak.de</a></span>
<span><i class="fa fa-phone"></i>  +49 1520 8773507</span>
</div>
</div>
    


<div class="col-md-4 margin-bottom-30 footer-follow">
<h5>Follow</h5>
<div class="footer-newsletter footer-newsletter2">
<form action="php/subscribe.php" id="invite" method="POST">
<i class="fa fa-envelope"></i>
<input type="email" placeholder="Email address" class="e-mail" name="email" id="address" data-validate="validate(required, email)">
<button type="submit">Subscribe</button>
</form>
<span>Don't worry we hate spam as much as you do</span>
<div id="result"></div>
</div>
<div class="footer-social">
<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
<a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a>
<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
<a href="https://www.instagram.com/"><i class="fa fa-youtube-play"></i></a>
</div>
</div>
    
    
<div class="col-md-4 margin-bottom-30 footer-tags">
<h5>Tags</h5>
<ul class="tags">

<li><a href="#">E Shop</a></li>
<li><a href="#">Jakcets</a></li>
<li><a href="#">Shoes</a></li>
<li><a href="#">Bags</a></li>
<li><a href="#">Womens Collection</a></li>
<li><a href="#">Mens Pants</a></li>
<li><a href="#">Watches</a></li>
<li><a href="#">Jewerly</a></li>

</ul>
</div>    
    
    
</div>

<div class="footer-bottom">
<div class="row">
<div class="col-md-4">
<p>&copy; Copyright 2016 Watcher.com. All rights reserved.</p>
</div>
<div class="col-md-8">
<ul class="footer-links">
<li><a href="#">About Us</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Terms of Use</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Advertising</a></li>
<li><a href="#">Subscribe</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>

</div>










<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/slick/slick.min.js"></script>
<script src="js/socialShare.min.js"></script>
<script src="js/jquery.simpleWeather.min.js"></script>
<script src="js/lity/lity.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/main.js"></script>

<!-- Mailchimp Js -->
<script src="js/mc/jquery.ketchup.all.min.js"></script>
<script src="js/mc/main.js"></script>


</body>
</html>
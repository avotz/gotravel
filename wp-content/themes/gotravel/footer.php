<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gotravel
 */

?>

	 <footer class="footer">
        <div class="inner">
            <div class="copyright">
               <a href="http://www.avotz.com" class="avotz" target="_blank"><i class="icon-avotz"></i></a> &copy; 2017 gotravel
            </div>
            
            <div class="redes">

					<div id="TA_rated388" class="TA_rated">
<ul id="nN3IcOiZ1nt" class="TA_links o8uBqiN73TT">
<li id="RYa4Anx84Te" class="7lNfvTKX7AhO">
<a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a>
</li>
</ul>
</div>
<script src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=388&amp;locationId=12635600&amp;lang=en_US&amp;display_version=2"></script>
                <a href="https://www.facebook.com/Go-Travel-Costa-Rica-1877673582476260/" class="facebook" target="_blank"><i class="icon icon-facebook"></i></a>
                <a href="https://www.instagram.com/gotravelcr/" target="_blank" class="instagram"><i class="icon icon-instagram"></i></a>
                <a href="https://www.tripadvisor.com/Attraction_Review-g309240-d12635600-Reviews-Go_Travel_Costa_Rica-Liberia_Province_of_Guanacaste.html" target="_blank" class="tripadvisor"><i class="icon icon-tripadvisor"></i></a>
            </div>
            
        </div>

    </footer>
 <div id="book-tour-popup" class="request-popup white-popup mfp-hide mfp-with-anim">               
    <h3>Reservation Tours</h3>
    <?php echo do_shortcode('[contact-form-7 id="47" title="Reservation Tour Form"]') ?>
    
</div> 
<div id="book-shuttle-popup" class="request-popup white-popup mfp-hide mfp-with-anim">               
    <h3>Reservation Shuttle</h3>
   
    <?php echo do_shortcode('[contact-form-7 id="65" title="Reservation Shuttle Form"]') ?>
    
</div> 

<div id="request-popup" class="request-popup white-popup mfp-hide mfp-with-anim">               
    <h3>Request for Tour or Shuttle</h3>
    <p>Do not see the destination you are looking for, you can customize your shuttle or tour</p>
    <?php echo do_shortcode('[contact-form-7 id="53" title="Request Shuttle or Tour"]') ?>
    
</div>



<?php wp_footer(); ?>

</body>
</html>

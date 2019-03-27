<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

    <?php echo do_shortcode('[block id="footer"]'); ?>
	<?php //do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<!--hotline-->

<div class='hotline'>
    <div id='phonering-alo-phoneIcon' class='phonering-alo-phone phonering-alo-green phonering-alo-show'>
        <div class='phonering-alo-ph-circle'></div>
        <div class='phonering-alo-ph-circle-fill'></div>
        <div class='phonering-alo-ph-img-circle'>
            <a class='pps-btn-img' title='Liên hệ' href='tel:0905 893 680'>
                <img src='http://cuanhuahanquocdn.com/wp-content/uploads/2019/03/icons8-phone-80.png' alt='Liên hệ' width='50' class='img-responsive'/>
            </a>
        </div>
    </div>
</div>

<!--end hotline-->



<?php wp_footer(); ?>

</body>
</html>

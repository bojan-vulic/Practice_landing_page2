 <footer>
        <article class="container py">
        
         <?php if(is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>

            <?php if(is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
            <?php endif; ?>

            <?php if(is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
            <?php endif; ?>

            <?php if(is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
            <?php endif; ?>

            <?php if(is_active_sidebar('footer-5')) : ?>
            <?php dynamic_sidebar('footer-5'); ?>
            <?php endif; ?>

        </article>
    </footer>

    <!-- owl-carousel-js - move before closed body tags -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
    <?php wp_footer(); ?>
</body>

</html>
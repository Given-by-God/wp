
</body>



<footer class="footer">
    <div class="footerMainBlock">

        <?php wp_nav_menu(array(
            'theme_location' => 'footerMenu',
            'menu_class'      => '',
            'container' => false,
//        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        )); ?>

    </div>


</footer>

<?php wp_footer();?>

</html>
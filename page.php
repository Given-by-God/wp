<?php
get_header();
?>


<div class="commonBlock newsSpecialPage">

    <!--<div class="titleCommon">-->
    <!--<span>Главная</span>-->
    <!--</div>-->

    <div class="mainBlock mainContent">




        <?php

         GetLastPostId();

        $args = array(
            'posts_per_page'      => 2,
            'orderby'          => 'post_date',
            'order'            => 'DESC',
            'post_type'        => 'post',
            'post_status'      => 'publish'
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ($query->have_posts()) {
                $query->the_post();
         echo get_the_ID();
//         echo GetLastPostId();


         if(get_the_ID() == GetLastPostId() ){
             echo "совпадает";
         }


            }
            wp_reset_postdata();
        } ?>



        <div class="grid">
            <div class="gridItem blGrid1">
                <a href="#">
                    <div class="gridImg">

                        <img src="style/img/testNews.jpg" alt="">

                        <div class="gridText">

                            <a href="#">Lorem ipsum dolor.</a>
                        </div>



                    </div>
                </a>
            </div>
            <div class="gridItem blGrid2">
                <div class="gridImg"><a href="#"><img src="style/img/testNews.jpg" alt=""></a></div>
                <div class="gridText">
                    <div class="dataAndTagMain">
                        <div class="data">data</div>
                        <div class="tag">tag</div>
                    </div>
                    <a href="#">Delectus, laboriosam porro.</a></div>
            </div>
            <div class="gridItem blGrid3">
                <div class="gridImg"><a href="#"><img src="style/img/testNews.jpg" alt=""></a></div>
                <div class="gridText">
                    <div class="dataAndTagMain">
                        <div class="data">data</div>
                        <div class="tag">tag</div>
                    </div>
                    <a href="#">Atque, quaerat, quisquam!</a></div>
            </div>
            <div class="gridItem blGrid4">
                <div class="gridImg"><a href="#"><img src="style/img/testNews.jpg" alt=""></a></div>
                <div class="gridText">
                    <div class="dataAndTagMain">
                        <div class="data">data</div>
                        <div class="tag">tag</div>
                    </div>
                    <a href="#">Aperiam, molestias quaerat.</a></div>
            </div>
            <div class="gridItem blGrid5">
                <div class="gridImg"><a href="#"><img src="style/img/testNews.jpg" alt=""></a></div>
                <div class="gridText">
                    <div class="dataAndTagMain">
                        <div class="data">data</div>
                        <div class="tag">tag</div>
                    </div>
                    <a href="#">Accusantium, consequatur, temporibus!</a></div>
            </div>
            <!--<div class="gridItem blGrid6">-->
            <!--<div class="gridImg"><a href="#"><img src="style/img/testNews.jpg" alt=""></a></div>-->
            <!--<div class="gridText">-->
            <!--<div class="dataAndTagMain">-->
            <!--<div class="data">data</div>-->
            <!--<div class="tag">tag</div>-->
            <!--</div>-->
            <!--<a href="#">Ad perferendis, unde.</a></div>-->
            <!--</div>-->
            <div class="gridItem blGrid7">
                <div class="gridImg"><a href="#"><img src="style/img/testNews.jpg" alt=""></a></div>
                <div class="gridText">

                    <a href="#">Laboriosam, maiores neque.</a></div>
            </div>
            <div class="gridItem blGrid8">
                <div class="gridImg"><a href="#"><img src="style/img/testNews.jpg" alt=""></a></div>
                <div class="gridText">

                    <a href="#">Libero, quis, rerum!</a></div>
            </div>
        </div>

        <div class=""></div>

        <main>


            <div class="filter">

                <div class="nameOfFilter">
                    Фильтр
                </div>

                <div class="filterFlex">
                    <div class="insideFilterBlock">Все подряд</div>
                    <div class="insideFilterBlock">бокс</div>
                    <div class="insideFilterBlock">mma
                        <!--<select class="form-control">-->
                        <!--<option>-->
                        <!--ufc-->
                        <!--</option>-->
                        <!--<option>-->
                        <!--bellator-->
                        <!--</option>-->
                        <!--<option>-->
                        <!--acb-->
                        <!--</option>-->
                        <!--<option>-->
                        <!--m1 global-->
                        <!--</option>-->
                        <!--</select>-->
                    </div>
                    <div class="insideFilterBlock">Анонсы боев</div>
                    <!--<div class="insideFilterBlock">Календарь</div>-->
                </div>

            </div>


            <div class="widget">
                <form>
                    <input  type="search" class="search form-control" placeholder="What are you looking for?"/>
                </form>
            </div>


            <div class="bottomArticle">







                <article>

                    <?php
                    $args = array(
                        'posts_per_page'      => 7,
                        'orderby'          => 'post_date',
                        'order'            => 'DESC',
                        'post_type'        => 'post',
                        'post_status'      => 'publish'
                    );

                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post(); ?>
                            ...
                        <?php }
                        wp_reset_postdata();
                    } ?>


                </article>
                <article>
                    <div class="articleOnMain">
                        <div class="imageOnMainArticle">
                            <a href="#">
                                <img src="style/img/khabibMiddle.jpg"
                                     alt="">
                            </a>
                        </div>
                        <div class="textOnMainArticle">
                            <div class="dataAndTagMain">
                                <div class="data">data</div>
                                <div class="tag">tag</div>
                            </div>
                            <h2>
                                <a href="#">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta,
                                </a>
                            </h2>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="articleOnMain">
                        <div class="imageOnMainArticle">
                            <a href="#">
                                <img src="style/img/khabibMiddle.jpg"
                                     alt="">
                            </a>
                        </div>
                        <div class="textOnMainArticle">
                            <div class="dataAndTagMain">
                                <div class="data">data</div>
                                <div class="tag">tag</div>
                            </div>
                            <h2>
                                <a href="#">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta,
                                </a>
                            </h2>
                        </div>
                    </div>
                </article>

            </div>

            <div class="clr"></div>

        </main>

        <aside>

            <div class="rightMenu">
                <div>Календарь</div>
                <div>Бойцы</div>
            </div>



            <article class="bestOfTheWeek">
                <div class="coutOfArticle">
                    <a href=""><img src="style/img/littleTony.png" alt="">
                    </a>
                </div>
                <div class="textOfTopArticles">
                <span>
                    <a href="#">Yfpdfybt rfrfr fr fr</a>

                </span>

                </div>
                <div class="clr"></div>

            </article>

            <article class="calendar">
                <div class="calendarData">

                    <ul>
                        <li class="month">Апрель</li>
                        <li class="numberOfMonth">5</li>
                        <li class="year">2018</li>
                    </ul>

                </div>
                <div class="nameOfCalendar">
                    <h2><a href="">МакГрегор Хабиб</a></h2>
                </div>

            </article>

            <article class="calendar">
                <div class="calendarData">

                    <ul>
                        <li class="month">Апрель</li>
                        <li class="numberOfMonth">5</li>
                        <li class="year">2018</li>
                    </ul>

                </div>
                <div class="nameOfCalendar">
                    <h2><a href="">МакГрегор Хабиб</a></h2>
                </div>

            </article>

            <article class="calendar">
                <div class="calendarData">

                    <ul>
                        <li class="month">Апрель</li>
                        <li class="numberOfMonth">5</li>
                        <li class="year">2018</li>
                    </ul>

                </div>
                <div class="nameOfCalendar">
                    <h2><a href="">МакГрегор Хабиб</a></h2>
                </div>

            </article>




        </aside>


        <aside class="onlyNewsRightMenu">


            <div class="nameOfAsideRight">
                <!--<div>Календарь</div>-->
                <!--<div>Бойцы</div>-->
                популярное
            </div>
            <div class="centerBlock">

                <div class="scrollRightMenu ">

                    <article>
                        <div class="video">
                            <div class="videoImg">
                                <a href="">
                                    <img src="style/img/khabibMiddle.jpg" alt="">
                                </a>
                            </div>
                            <div class="nameOfVideo">

                                <h2>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum,
                                        impedit.
                                    </a>
                                </h2>


                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="video">
                            <div class="videoImg">
                                <a href="">
                                    <img src="style/img/khabibMiddle.jpg" alt="">
                                </a>
                            </div>
                            <div class="nameOfVideo">


                                <h2>
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum,
                                        impedit.
                                    </a>
                                </h2>


                            </div>
                        </div>
                    </article>



                </div>
            </div>
        </aside>



        <div class="clr"> </div>

    </div>

</div>


<!---->
<!--		--><?php
//		if ( have_posts() ) :
//
//			if ( is_home() && ! is_front_page() ) :
//				?>
<!---->
<!--				--><?php
//			endif;
//
//			/* Start the Loop */
//			while ( have_posts() ) :
//				the_post();
//
//				/*
//				 * Include the Post-Type-specific template for the content.
//				 * If you want to override this in a child theme, then include a file
//				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
//				 */
//				get_template_part( 'template-parts/content', get_post_type() );
//
//			endwhile;
//
//			the_posts_navigation();
//
//		else :
//
//			get_template_part( 'template-parts/content', 'none' );
//
//		endif;
//		?>
<!---->

<?php
get_footer();?>

<?php get_header();?>



 <section class="hero-carousel">
        <div class="container-xl">
            <div class="post-carousel-lg">
                <!-- post -->
                <div class="post featured-post-xl">
                    <div class="details clearfix">
                        <h4 class="post-title"><a href="#">Yenilikçi Ve Fonksiyonel Website Yaratımları</a></h4>
                    </div>
                    <a href="#">
                        <div class="thumb rounded">
                            <div class="inner data-bg-image" data-bg-image="images/bom-banner.jpg"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="hero-carousel mt-5">
        <div class="container-xl">
            <div class="row gy-4">
                <div class="section-header">
                    <h3 class="section-title">Başlıca Kategoriler</h3>
                    <img src="images/title_alt_2.svg" class="wave" alt="wave">
                </div>
                <div class="row post-carousel-featured post-carousel">
                    
                
                <!-- post -->
                <?php 
                    $categories = get_categories();
                    foreach ($categories as $cat) {
                    $category_link = get_category_link($cat->cat_ID);
                    
                ?>
                    <div class="post featured-post-md">
                        <div class="details clearfix">
                            <h4 class="post-title"><a href="<?php echo esc_url($category_link);?>"><?php echo $cat->name; ?></a></h4>
                        </div>
                        <a href="<?php echo esc_url($category_link);?>">
                            <div class="thumb rounded">
                                <div class="inner data-bg-image" data-bg-image="images/category-webTasarim.jpg"></div>
                            </div>
                        </a>
                    </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </section>
    <!-- section main content -->
    <section class="main-content">
        <div class="container-xl">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="row gy-4">
                        <div class="section-header">
                            <h3 class="section-title">Popüler Yazılar</h3>
                        </div>
                        <?php 
                            // The Query
                            $the_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => -1 ) );

                            // The Loop
                            
                            if ( $the_query->have_posts() ) {
                                
                                while ( $the_query->have_posts() ) {
                                       $the_query->the_post();
                                       $categories = get_the_category( $post->ID );
                                        $categories[0]->name;
                        ?>
                        <div class="col-sm-6 col-md-4">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="#">
                                        <div class="inner">
                                            <img src="images/posts/post-md-1.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) )?>"><?php echo $categories[0]->name;?></a></li>
                                        <li class="list-inline-item">29 Mart 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-1 mt-2"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h5>
                                    <p class="excerpt mb-0"><?php echo $post->post_content; ?></p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="#"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php     }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
<?php get_header(); ?>
<section class="hero-carousel">
            <div class="container-xl">
               <div class="row gy-4">
                  <div class="col-lg-8">
                     <!-- post single -->
                     <div class="post post-single">
                        <!-- post header -->
                        <div class="post-header">
                           <h1 class="title mt-0 mb-3"><h1><?=the_title();?></h1></h1>
                           <ul class="meta list-inline mb-0">
                              <li class="list-inline-item"><a href="#">Wordpress</a></li>
                              <li class="list-inline-item">29 Mart 2021</li>
                           </ul>
                        </div>
                        <!-- featured image -->
                        <div class="featured-image">
                           <img src="images/single-blog-1.png" alt="post-title" />
                        </div>
                        <!-- post content -->
                        <div class="post-content clearfix">
                        </div>
                        <!-- post bottom section -->
                        <div class="post-bottom">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-6 col-12 text-center text-md-start">
                              <?php if(have_posts()) : while (have_posts()) : the_post() ?>
                                        <?=the_content();?>
                                    <?php endwhile; endif; ?>
                                 <!-- tags -->
                                 <a href="#" class="tag">#Wordpress</a>
                              </div>
                              <div class="col-md-6 col-12">
                                 <!-- social icons -->
                                 <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="spacer" data-height="50"></div>
                     <div class="about-author padding-30 rounded">
                        <div class="thumb">
                           <img src="images/bomajans-square-2.jpg" alt="logo" style="max-width:100px;" />
                        </div>
                        <div class="details">
                           <h4 class="name"><a href="#">Bom Ajans</a></h4>
                           <p>Özgün ve kaliteli işler üreten, yeni nesil bir dijital ajans.</p>
                           <!-- social icons -->
                           <ul class="social-icons list-unstyled list-inline mb-0">
                              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="spacer" data-height="50"></div>
                     <!-- section header -->
                  </div>
                  <div class="col-lg-4">
                     <!-- sidebar -->
                     <div class="sidebar">
                        <!-- widget post carousel -->
                        <div class="widget rounded">
                           <div class="widget-header text-center">
                              <h3 class="widget-title">Kategorinin Diğer Postları</h3>
                           </div>
                           <div class="widget-content">
                              <div class="post-carousel-widget">
                                 <!-- post -->
                                 <div class="post post-carousel">
                                    <div class="thumb rounded">
                                       <a href="blog-single.html">
                                          <div class="inner">
                                             <img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
                                          </div>
                                       </a>
                                    </div>
                                    <h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
                                    <ul class="meta list-inline mt-2 mb-0">
                                       <li class="list-inline-item"><a href="#">Wordpress</a></li>
                                       <li class="list-inline-item">29 Mart 2021</li>
                                    </ul>
                                 </div>
                                 <!-- post -->
                                 <div class="post post-carousel">
                                    <div class="thumb rounded">
                                       <a href="blog-single.html">
                                          <div class="inner">
                                             <img src="images/widgets/widget-carousel-2.jpg" alt="post-title" />
                                          </div>
                                       </a>
                                    </div>
                                    <h5 class="post-title mb-0 mt-4"><a href="blog-single.html">Master The Art Of Nature With These 7 Tips</a></h5>
                                    <ul class="meta list-inline mt-2 mb-0">
                                       <li class="list-inline-item"><a href="#">Wordpress</a></li>
                                       <li class="list-inline-item">29 Mart 2021</li>
                                    </ul>
                                 </div>
                                 <!-- post -->
                                 <div class="post post-carousel">
                                    <div class="thumb rounded">
                                       <a href="blog-single.html">
                                          <div class="inner">
                                             <img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
                                          </div>
                                       </a>
                                    </div>
                                    <h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
                                    <ul class="meta list-inline mt-2 mb-0">
                                       <li class="list-inline-item"><a href="#">Wordpress</a></li>
                                       <li class="list-inline-item">29 Mart 2021</li>
                                    </ul>
                                 </div>
                              </div>
                              <!-- carousel arrows -->
                              <div class="slick-arrows-bot">
                                 <button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                 <button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
                              </div>
                           </div>
                        </div>
                        <!-- widget tags -->
                        <div class="widget rounded">
                           <div class="widget-header text-center">
                              <h3 class="widget-title">Diğer Kategoriler</h3>
                           </div>
                           <div class="widget-content">
                              <a href="#" class="tag">#Web Tasarım</a>
                              <a href="#" class="tag">#E-Ticaret</a>
                              <a href="#" class="tag">#Wordpress</a>
                              <a href="#" class="tag">#PHP</a>
                              <a href="#" class="tag">#Codeigniter</a>
                              <a href="#" class="tag">#Seo</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
    
<?php get_footer(); ?>

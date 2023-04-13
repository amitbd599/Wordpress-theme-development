<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>



<main>

        <!-- Bread Crumb Start -->
        <section class="bread-crumb" data-background="<?php  bloginfo("template_directory") ;?>./assets/img/bg-overlay/bg-overlay-7.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <h2>Blog</h2>
                            <p><a href="/index-1.html">Home</a> / <span>Blog</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Bread Crumb End -->

        <!-- Blog Group version one start -->
        <section class="blog-group-version-one bg-white pt-80 pb-140">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-side">
                            <div class="wrapper">
                                <?php

                                while(have_posts()) {
                                    the_post();
                                    $imgSrc = wp_get_attachment_url( get_post_thumbnail_id(), 'large' );

                                ?>
                                <div class="blog-items">
                                    <div class="main-img">
                                        <img class="img-fluid" src="<?php  echo $imgSrc ;?>" alt="">
                                    </div>
                                    <div class="admin-intro">
                                        <div class="name">
                                            <span><i class="fa-solid fa-user"></i></span>
                                            <span>Alex Johan</span>
                                        </div>
                                        <div class="date">
                                            <span><i class="fa-solid fa-timer"></i></span>
                                            <span><?php echo get_the_date();?></span>
                                        </div>
                                        <div class="comment">
                                            <span><i class="fa-solid fa-comment"></i></span>
                                            <span>0 Comments </span>
                                        </div>
                                    </div>
                                    <div class="main-heading">
                                        <h2> <?php the_title(); ?></h2>
                                    </div>
                                    <div class="inner-section">
                                        <p><?php  the_excerpt()?></p>
                                    </div>
                                    <div class="main-btn">
                                        <a href="<?php the_permalink();?>">
                                            <span class="btn-shape-normal-outline">
                                                <span>Read More</span>
                                            </span></a>
                                    </div>
                                </div>

                                <?php  }?>

                            </div>
                            <div class="pagination">

                            <?php wp_pagenavi(); ?>

                                <div class="item">
                                    <span>
                                        <i class="fa-light fa-angles-left"></i>
                                    </span>
                                </div>
                                <div class="item active">
                                    <span>
                                        1
                                    </span>
                                </div>
                                <div class="item">
                                    <span>
                                        2
                                    </span>
                                </div>
                                <div class="item">
                                    <span>
                                        3
                                    </span>
                                </div>
                                <div class="item">
                                    <span>
                                        4
                                    </span>
                                </div>
                                <div class="item">
                                    <span>
                                        5
                                    </span>
                                </div>

                                <div class="item">
                                    <span>
                                        <i class="fa-light fa-angles-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Widget Section -->
                        <div class="widget">

                       <?php get_sidebar();?>
                            <!-- Widget seven -->
                            <div class="widget-seven">
                                <div class="wrapper">
                                    <div class="input-inner">
                                        <div class="input">
                                            <span><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                                            <input type="text" placeholder="Search Insider . . . ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget six -->
                            <div class="widget-six">
                                <div class="wrapper">
                                    <h3>Recent Posts</h3>
                                    <div class="blog-inner-items">
                                        <div class="item">
                                            <div class="img-file">
                                                <img class="img-fluid" src="./assets/img/blog/blog-1.png" alt="">
                                            </div>
                                            <div class="text-file">
                                                <a href="blog-details.html">
                                                    <h3>Basic Steps in Starting a Building</h3>
                                                </a>
                                                <div class="footer-text">
                                                    <span>Alex Jhon</span>
                                                    <span>|</span>
                                                    <span>Nov 21, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="img-file">
                                                <img class="img-fluid" src="./assets/img/blog/blog-2.png" alt="">
                                            </div>
                                            <div class="text-file">
                                                <a href="blog-details.html">
                                                    <h3>Human shelters were at first very simple</h3>
                                                </a>
                                                <div class="footer-text">
                                                    <span>Amit Biswas</span>
                                                    <span>|</span>
                                                    <span>Nov 26, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="img-file">
                                                <img class="img-fluid" src="./assets/img/blog/blog-3.png" alt="">
                                            </div>
                                            <div class="text-file">
                                                <a href="blog-details.html">
                                                    <h3>The history of building is marked by</h3>
                                                </a>
                                                <div class="footer-text">
                                                    <span>Maria Dayna</span>
                                                    <span>|</span>
                                                    <span>Nov 28, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="img-file">
                                                <img class="img-fluid" src="./assets/img/blog/blog-4.png" alt="">
                                            </div>
                                            <div class="text-file">
                                                <a href="blog-details.html">
                                                    <h3>Construction today is a significant part</h3>
                                                </a>
                                                <div class="footer-text">
                                                    <span>Maria Dayna</span>
                                                    <span>|</span>
                                                    <span>Oct 05, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="img-file">
                                                <img class="img-fluid" src="./assets/img/blog/blog-5.png" alt="">
                                            </div>
                                            <div class="text-file">
                                                <a href="blog-details.html">
                                                    <h3>A tent illustrates the basic environmental</h3>
                                                </a>
                                                <div class="footer-text">
                                                    <span>Suzanne Jage</span>
                                                    <span>|</span>
                                                    <span>Oct 01, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget Eight -->
                            <div class="widget-eight mt-40">
                                <div class="wrapper">
                                    <h3>Category</h3>
                                    <div class="inner-list">
                                        <ul>
                                            <li>
                                                <a href="#"><span><i class="fa-light fa-chevrons-right"></i></span>
                                                    <span>construction (8)</span></a>

                                            </li>
                                            <li>
                                                <a href="#"><span><i class="fa-light fa-chevrons-right"></i></span>
                                                    <span>Superstructure (5)</span></a>

                                            </li>
                                            <li>
                                                <a href="#"><span><i class="fa-light fa-chevrons-right"></i></span>
                                                    <span>Finance (5)</span></a>

                                            </li>
                                            <li><a href="#"><span><i class="fa-light fa-chevrons-right"></i></span>
                                                    <span>Excavations (5)</span></a>

                                            </li>
                                            <li><a href="#"><span><i class="fa-light fa-chevrons-right"></i></span>
                                                    <span>Superstructure (5)</span></a>

                                            </li>
                                            <li><a href="#"><span><i class="fa-light fa-chevrons-right"></i></span>
                                                    <span>Manufacturers (5)</span></a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget Nine -->
                            <div class="widget-nine mt-40">
                                <div class="wrapper">
                                    <h3>Tags</h3>
                                    <div class="inner-list">
                                        <div class="tag">
                                            <a href="#">Contractor</a>
                                            <a href="#">Appliances</a>
                                            <a href="#">Power</a>
                                            <a href="#">Electrical</a>
                                            <a href="#">Parties</a>
                                            <a href="#">Facilities</a>
                                            <a href="#">Foundations </a>
                                            <a href="#">Structures</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget Two -->
                            <div class="widget-two mt-40">
                                <div class="wrapper">
                                    <h3>Watch Demo</h3>
                                    <div class="img-file">
                                        <div class="pop-img">
                                            <div class="inner">
                                                <img src="./assets/img/widgets/img-1.png" alt="">
                                                <div class="vide-button">
                                                    <a href="https://www.youtube.com/watch?v=o4GuSJYSzrY"
                                                        class="popup-video"><i class="fa-solid fa-play"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Team Section version three End -->



<?php
get_footer();

?>


<?php

get_header();
the_post();

?>

<main>

        <!-- Bread Crumb Start -->
        <section class="bread-crumb" data-background="<?php bloginfo("template_directory");?>./assets/img/bg-overlay/bg-overlay-7.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <h2>Blog Details</h2>
                            <p><a href="/index-1.html">Home</a> / <span>Blog Details</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Bread Crumb End -->

        <!-- Blog Details version one start -->
        <section class="blog-details-version-one bg-white pt-80 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-side">
                            <div class="wrapper">
                                <div class="main-heading">
                                    <h2><?php the_title();?>
                                    </h2>
                                </div>
                                <div class="admin-intro">
                                    <div class="name">
                                        <span><i class="fa-solid fa-user"></i></span>
                                        <span><?php  the_author();?></span>
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
                                <div class="main-img">
                                    <img class="img-fluid" src="<?php echo $imgSrc = wp_get_attachment_url( get_post_thumbnail_id(), 'large' ); ?>" alt="">
                                </div>
                                <div class="inner-section mt-40">
                                    <?php the_content(); ?>
                                </div>



                                <div class="tags">
                                    <h4>POST TAGS :</h4>
                                    <div class="tag-inner">
                                        <a href="#">Contractor</a>
                                        <a href="#">Appliances</a>
                                        <a href="#">Power</a>
                                        <a href="#">Electrical</a>
                                    </div>
                                </div>
                                <div class="comments">
                                    <h4>COMMENTS :</h4>
                                    <?php comments_template();?>
                                    <div class="inner-comment-section">
                                        <div class="root-comment">
                                            <div class="img-file">
                                                <img src="./assets/img/client/profile-1.png" alt="">
                                            </div>
                                            <div class="text-file">
                                                <div class="intro">
                                                    <h3>Donald D. Soto</h3>
                                                    <p>Wednesday, February 8, 2023</p>
                                                </div>
                                                <div class="text-have">
                                                    <p>From here, the actual construction process starts. Based on the
                                                        site and building plan, necessary excavations, leveling, and
                                                        filling can be undergone to prepare the site. The necessary
                                                        excavation for utilities, power, water and sanitation lines,
                                                        temporary storage facilities are prepared.</p>

                                                </div>
                                                <div class="reply">
                                                    <a href="#">
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="child-comment">
                                            <div class="img-file">
                                                <img src="./assets/img/client/profile-2.png" alt="">
                                            </div>
                                            <div class="text-file">
                                                <div class="intro">
                                                    <h3>Admin</h3>
                                                    <p>Wednesday, February 8, 2023</p>
                                                </div>
                                                <div class="text-have">
                                                    <p>From here, the actual construction process starts. Based on the
                                                        site and building plan, necessary excavations, leveling, and
                                                        filling can be undergone to prepare the site.</p>

                                                </div>
                                                <div class="reply">
                                                    <a href="#">
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="root-comment">
                                            <div class="img-file">
                                                <img src="./assets/img/client/profile-3.png" alt="">
                                            </div>
                                            <div class="text-file">
                                                <div class="intro">
                                                    <h3>Alex Johan</h3>
                                                    <p>Wednesday, February 1, 2023</p>
                                                </div>
                                                <div class="text-have">
                                                    <p>From here, the actual construction process starts. Based on the
                                                        site and building plan, necessary excavations, leveling, and
                                                        filling can be undergone to prepare the site. The necessary
                                                        excavation for utilities, power, water and sanitation lines,
                                                        temporary storage facilities are prepared.</p>

                                                </div>
                                                <div class="reply">
                                                    <a href="#">
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="leave-comment">
                                    <div class="wrapper">
                                        <div>
                                            <h4>Leave a Comment :</h4>
                                            <p>Your email address will not be published.</p>
                                        </div>
                                        <div class="input-inner">
                                            <div class="d-md-flex gap-3 access">
                                                <input type="text" placeholder="Your Name : ">
                                                <input type="email" placeholder="Email ID :  ">
                                            </div>
                                            <div class="d-md-flex gap-3 access mt-15">
                                                <input type="text" placeholder="Country : ">
                                                <input type="text" placeholder="Phone No :  ">
                                            </div>
                                            <div class=" mt-15">
                                                <input type="text" placeholder="Website Link : ">
                                            </div>
                                            <div class="mt-15">
                                                <textarea id="test" rows="4" cols="50"
                                                    placeholder="Write Your Comment..."></textarea>
                                            </div>
                                            <div class="main-btn">
                                                <button class="btn-shape-normal-outline">
                                                    <span>Submit Comment</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Widget Section -->
                        <div class="widget">
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
        <!-- Blog Details version one End -->


<?php get_footer();?>
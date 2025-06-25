<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GalopanteClinicPro
 */

get_header();

?>

  <!-- >>>>>>>>>>> breadcrumb banner part Start>>>>>>>>>>> -->
  <section id="breadcrumb_banner">
    <div class="container-fluid page-header py-5 mb-5">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 fw-bold animated slideInDown">Single Blog</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white" href="blog_detail.html#">Home</a></li>
            <li class="breadcrumb-item"><a class="text-white" href="blog_detail.html#">Blog</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Single Blog</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!-- >>>>>>>>>>> breadcrumb banner part end>>>>>>>>>>> -->
  <!-- >>>>>>>>>>> Blog Area Start >>>>>>>>>>>>>>>>>>>>> -->
  <section class="blog_area single-post-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          <div class="single-post">
            <div class="feature-img">
              <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/img/single_blog_5.jpg" alt="">
            </div>
            <div class="blog_details">

				<main id="primary" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'galopanteclinicpro' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'galopanteclinicpro' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

            </div>
          </div>
          <div class="navigation-top">
            <div class="d-sm-flex justify-content-between text-center">
              <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                people like this</p>
              <div class="col-sm-4 text-center my-2 my-sm-0">
                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
              </div>
              <div class="social-share">
                <div class="section-tittle">
                  <h3 class="mr-20">Share:</h3>
                  <ul class="d-flex justify-content-around">
                    <li><a href="blog_detail.html#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-ins.png" alt=""></a></li>
                    <li><a href="blog_detail.html#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-fb.png" alt=""></a></li>
                    <li><a href="blog_detail.html#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-tw.png" alt=""></a></li>
                    <li><a href="blog_detail.html#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-yo.png" alt=""></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="blog_right_sidebar">
            <aside class="single_sidebar_widget search_widget">
              <h4 class="widget_title">Search</h4>
              <form action="blog_detail.html#">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword'>
                    <div class="input-group-append">
                      <button class="btns" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                  </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                  type="submit">Search</button>
              </form>
            </aside>
            <aside class="single_sidebar_widget post_category_widget">
              <h4 class="widget_title">Category</h4>
              <ul class="list cat-list">
                <li>
                  <a href="blog_detail.html#" class="d-flex">
                    <i class="fa-solid fa-ribbon"></i>
                    <p>Breast Cancer</p>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#" class="d-flex">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                    <p>Tips and Tricks</p>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#" class="d-flex">
                    <i class="fa-solid fa-briefcase-medical"></i>
                    <p>Surgery</p>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#" class="d-flex">
                    <i class="fa-solid fa-stethoscope"></i>
                    <p>Treatment</p>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#" class="d-flex">
                    <i class="fa-solid fa-house-chimney-medical"></i>
                    <p>Best Hospitals</p>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#" class="d-flex">
                    <i class="fa-solid fa-venus"></i>
                    <p>Women Health</p>
                  </a>
                </li>
              </ul>
            </aside>
            <aside class="single_sidebar_widget popular_post_widget">
              <h3 class="widget_title">Recent Post</h3>
              <div class="media post_item d-flex">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_1.jpg" alt="post">
                <div class="media-body">
                  <a href="blog_detail.html">
                    <h3>HRT Won't Raise Recurrence Rate for Breast Cancer Survivors</h3>
                  </a>
                  <p>January 12, 2023</p>
                </div>
              </div>
              <div class="media post_item d-flex">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_2.jpg" alt="post">
                <div class="media-body">
                  <a href="blog_detail.html">
                    <h3>Breast Cancer Pathology Report: What It Means</h3>
                  </a>
                  <p>January 12, 2023</p>
                </div>
              </div>
              <div class="media post_item d-flex">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_3.jpg" alt="post">
                <div class="media-body">
                  <a href="blog_detail.html">
                    <h3>Breast Cancer Mammography vs. Thermography</h3>
                  </a>
                  <p>January 12, 2023</p>
                </div>
              </div>
              <div class="media post_item d-flex">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_4.jpg" alt="post">
                <div class="media-body">
                  <a href="blog_detail.html">
                    <h3>Metastatic Breast Cancer: Raise Your Voice</h3>
                  </a>
                  <p>January 12, 2023</p>
                </div>
              </div>
            </aside>
            <aside class="single_sidebar_widget tag_cloud_widget">
              <h4 class="widget_title">Tag Clouds</h4>
              <ul class="list">
                <li>
                  <a href="blog_detail.html#">Breast Cancer</a>
                </li>
                <li>
                  <a href="blog_detail.html#">Treatment</a>
                </li>
                <li>
                  <a href="blog_detail.html#">Surgery</a>
                </li>
                <li>
                  <a href="blog_detail.html#">Women Health</a>
                </li>
                <li>
                  <a href="blog_detail.html#">Sexual Health</a>
                </li>
                <li>
                  <a href="blog_detail.html#">Diabetes</a>
                </li>
                <li>
                  <a href="blog_detail.html#">Osteoporosis</a>
                </li>
                <li>
                  <a href="blog_detail.html#">Menstrual</a>
                </li>
              </ul>
            </aside>
            <aside class="single_sidebar_widget instagram_feeds">
              <h4 class="widget_title">Twitter Feeds</h4>
              <ul class="instagram_row flex-wrap">
                <li>
                  <a href="blog_detail.html#">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_5.jpg" alt="">
                  </a>
                  <a href="blog_detail.html#">
                    <div class="instagram_overlay text-center align-items-center">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_6.jpg" alt="">
                  </a>
                  <a href="blog_detail.html#">
                    <div class="instagram_overlay text-center align-items-center">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_7.jpg" alt="">
                  </a>
                  <a href="blog_detail.html#">
                    <div class="instagram_overlay text-center align-items-center">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_8.jpg" alt="">
                  </a>
                  <a href="blog_detail.html#">
                    <div class="instagram_overlay text-center align-items-center">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_9.jpg" alt="">
                  </a>
                  <a href="blog_detail.html#">
                    <div class="instagram_overlay text-center align-items-center">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="blog_detail.html#">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/post_10.jpg" alt="">
                  </a>
                  <a href="blog_detail.html#">
                    <div class="instagram_overlay text-center align-items-center">
                      <i class="fa-solid fa-plus"></i>
                    </div>
                  </a>
                </li>
              </ul>
            </aside>
            <aside class="single_sidebar_widget newsletter_widget">
              <h4 class="widget_title">Newsletter</h4>

              <form action="blog_detail.html#">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder='Enter email' required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                  type="submit">Subscribe</button>
              </form>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- >>>>>>>>>>> Blog Area end >>>>>>>>>>>>>>>>>>>>> -->	
<?php
//get_sidebar();
get_footer();

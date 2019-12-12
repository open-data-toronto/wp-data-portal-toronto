<?php /* Template Name: Blog Page Template */ ?>
<?php get_header(); ?>

  <section class="content-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Breadcrumbs -->
          <nav class="breadcrumb" aria-label="breadcrumbs">
            <a class="breadcrumb-item" href="<?php echo site_url(); ?>">Open Data Portal Home</a>
            <a class="breadcrumb-item"><?php the_title(); ?></a>
          </nav>
          <!-- End breadcrumbs -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 hide-full-length">
          <!-- Sidebar Content -->
          <div class="blog-sidebar" role="complementary">
            <h2 class="sr-only">Explore Open Data Blog</h2>

            <h3>Knowledge Centre</h3>
            <p>Whether you're a seasoned data scientist, or a beginner - Toronto Open Data has you covered! We publish new content biweekly.</p>
            <br/>

            <div class="hidden-sm-down">
            <h3>Latest Posts</h3>
            <ul class="post-list">
              <?php
              $query2 = new WP_Query( array( 'posts_per_page' => 10 ) );
              while ( $query2->have_posts() ) :
                $query2->the_post(); ?>
                <li>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
              <?php
              endwhile;

              wp_reset_postdata(); ?>
            </ul>
            <br/>

            <h3>Category</h3>
            <ul class="post-list">
              <?php
              wp_list_categories([
                'orderby'    => 'name',
                'show_count' => true,
                'title_li'   => '',
                'exclude_slugs' => [ 'feature-1', 'feature-2', 'feature-3', 'featured-data-story', 'uncategorized']
              ]);
              ?>
            </ul>
            <br/>

            <h3>Civic Issues</h3>
            <ul class="post-list">
              <?php
              $tags = get_tags();
              $html = '';
              foreach ( $tags as $tag ) :
                $tag_link = get_tag_link( $tag->term_id );

                $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                $html .= "{$tag->name}</a></li>";
              endforeach;

              $html .= '';
              echo $html;
              ?>
            </ul>
            <br/>

            <h3>Author</h3>
            <ul class="post-list">
              <!-- List authors -->
              <?php wp_list_authors(); ?>
            </ul>
          </div>
        </div>
      </div>

        <!-- Main Post Listing -->
        <div class="col-md-9">
          <section class="main-post-listing"  aria-label="Blog Posts" id="content">
         
             <h1 class="sr-only"><?php the_title(); ?></h1>


            <!-- News&Updates -->
            <div class="row">
              <div class="col-md-12" aria-label="Blog Posts">

                <div class="row">
                <div class="col-md-10">
                    <h2><i class="fa fa-calendar"></i> News &amp; Events</h2>
                  </div>
                  <div class="col-md-2">
                    <a href="/category/news/" class="btn btn-primary btn-sm pull-right">View more <span class="sr-only">News and Events</span></a>
                  </div>
                </div>

                <div class="row" style="padding: 10px 0 0 0">

                <?php global $post; 
          $args = array('category_name' => 'news', 'numberposts' => 2);
          $custom_posts = get_posts($args);
          foreach($custom_posts as $post) : setup_postdata($post);
          ?>
                   <div class="col-md-6" style="margin: 0 0 20px 0">
                 
                  <div class="row showcase-item">
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>"><div class="showcase-thumbnail" style="background-image:url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $url ?>)"></div></a>
                    </div>
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ;?></h3>
                      </a>
                      
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                  </div>
                <?php
        endforeach;
          ?>
              </div>

              <hr/> 

              <div class="row">
                <div class="col-md-10">
                    <h2><i class="fa fa-book"></i> Data Stories</h2>
                  </div>
                  <div class="col-md-2">
                    <a href="/category/data-stories" class="btn btn-primary btn-sm pull-right">View more <span class="sr-only">data stories</span></a>
                  </div>
                </div>

               <div class="row" style="padding: 10px 0 0 0">

                <?php global $post; 
          $args = array('category_name' => 'data-stories', 'numberposts' => 2);
          $custom_posts = get_posts($args);
          foreach($custom_posts as $post) : setup_postdata($post);
          ?>
                   <div class="col-md-6" style="margin: 0 0 20px 0">
                 
                  <div class="row showcase-item">
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>"><div class="showcase-thumbnail" style="background-image:url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $url ?>)"></div></a>
                    </div>
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ;?></h3>
                      </a>
                      
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                  </div>
                <?php
        endforeach;
          ?>
              </div>

              <hr/> 


            <div class="row">
                <div class="col-md-10">
                    <h2><i class="fa fa-mortar-board"></i> Tools &amp; Training</h2>
                  </div>
                  <div class="col-md-2">
                    <a href="/category/training" class="btn btn-primary btn-sm pull-right">View more <span class="sr-only">tools and training</span></a>
                  </div>
                </div>

               <div class="row" style="padding: 10px 0 0 0">

                <?php global $post; 
          $args = array('category_name' => 'training', 'numberposts' => 2);
          $custom_posts = get_posts($args);
          foreach($custom_posts as $post) : setup_postdata($post);
          ?>
                   <div class="col-md-6" style="margin: 0 0 20px 0">
                 
                  <div class="row showcase-item">
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>"><div class="showcase-thumbnail" style="background-image:url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $url ?>)"></div></a>
                    </div>
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ;?></h3>
                      </a>
                      
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                  </div>
                <?php
        endforeach;
          ?>
              </div>
<hr/> 
             <div class="row">
                <div class="col-md-10">
                    <h2><i class="fa fa-video-camera"></i> Video &amp; Multimedia</h2>
                  </div>
                  <div class="col-md-2">
                    <a href="/category/multimedia" class="btn btn-primary btn-sm pull-right">View more <span class="sr-only">videos and multimedia</span></a>
                  </div>
                </div>

               <div class="row" style="padding: 10px 0 0 0">

                <?php global $post; 
          $args = array('category_name' => 'multimedia', 'numberposts' => 2);
          $custom_posts = get_posts($args);
          foreach($custom_posts as $post) : setup_postdata($post);
          ?>
                   <div class="col-md-6" style="margin: 0 0 20px 0">
                 
                  <div class="row showcase-item">
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>"><div class="showcase-thumbnail" style="background-image:url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $url ?>)"></div></a>
                    </div>
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ;?></h3>
                      </a>
                      
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                  </div>
                <?php
        endforeach;
          ?>
              </div>
<hr/> 
<div class="row">
                <div class="col-md-10">
                    <h2><i class="fa fa-tree"></i> Civic Issues</h2>
                  </div>
                  <div class="col-md-2">
                    <a href="/category/civic-issues" class="btn btn-primary btn-sm pull-right">View More <span class="sr-only">Civic issues</span></a>
                  </div>
                </div>

               <div class="row" style="padding: 10px 0 0 0">

                 <?php global $post; 
          $args = array('category_name' => 'civic-issues', 'numberposts' => 2);
          $custom_posts = get_posts($args);
          foreach($custom_posts as $post) : setup_postdata($post);
          ?>
                   <div class="col-md-6" style="margin: 0 0 20px 0">
                 
                  <div class="row showcase-item">
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>"><div class="showcase-thumbnail" style="background-image:url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $url ?>)"></div></a>
                    </div>
                    <div class="col-md-12">
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ;?></h3>
                      </a>
                      
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                  </div>
                <?php
        endforeach;
          ?>
              </div>

            </div></div>

            
              </div>
            </div>

          </section>
        </div>
      </div>
    </div>
  </section>
</div>
</div>

<?php get_footer(); ?>

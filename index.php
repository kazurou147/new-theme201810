<?php get_header(); ?>

<main role="main" class="blog-area">

  <!-- ループ開始 -->
  <div class="container blog-wrap">
    <div class="row">

      <div class="col-12 col-lg-9 blog-posts-wrap">

        <h1 class="">記事一覧</h1>

        <?php if(have_posts()):while(have_posts()):the_post(); ?>

        <article <?php post_class(); ?>>

          <div class="row">
            <div class="col-12 col-sm-4 mb-3">

              <!-- アイキャッチ画像 -->
              <a href="<?php echo get_permalink(); ?>">
                <div class="thumbnail">
                  <?php if( has_post_thumbnail() ): ?>

                  <?php the_post_thumbnail(array(333,208)); ?>

                  <?php else: ?>

                  <?php preg_match( '/wp-image-(\d+)/s', $post ->post_content, $thumb ); ?>

                  <?php if ( $thumb ): ?>
                  <?php echo wp_get_attachment_image( $thumb[1], array(333,333) ); ?>

                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/image/image01.png" alt="">

                  <?php endif; ?>

                  <?php endif; ?>
                </div>
              </a>
            </div>


            <div class="col-12 col-sm-8 mb-3">

              <a class="" href="<?php echo get_permalink(); ?>">
                <h2 class="">
                  <?php the_title(); ?>
                </h2>
              </a>
              <div class="post-info">
                <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<time datetime="<?php echo get_the_date('c'); ?>"></time>
                <?php echo get_the_date(); ?>&nbsp;&nbsp;<i class="fa fa-folder-o" aria-hidden="true"></i>&nbsp;
                <?php the_category(' , '); ?>
              </div>

              <?php the_excerpt(); ?>

            </div>
          </div>

        </article>


        <?php endwhile; ?>
        <?php endif; ?>


        <div class="navlink">

          <span class="navlink-next">
						<?php if (get_next_posts_link()): ?>

							<?php next_posts_link('<i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i>&nbsp;古い記事'); ?>
						<?php endif; ?>
					</span>

          <span class="navlink-prev">
						<?php if (get_previous_posts_link()): ?>
							<?php previous_posts_link('新しい記事&nbsp;<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>'); ?>
						<?php endif; ?>
					</span>

        </div>

      </div>


      <div class="col-12 col-lg-3 sidebar-wrap">
        <?php get_sidebar(); ?>
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container blog-wrap -->
</main>

<?php get_footer(); ?>

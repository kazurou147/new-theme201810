<?php get_header(); ?>

<main role="main" class="page-area">

  <!-- ループ開始 -->
  <div class="container">

    <div class="row">

      <div class="col-12 col-lg-9">

        <?php if(have_posts()):while(have_posts()):the_post(); ?>

        <article <?php post_class(); ?>>

          <h1 class="">
            <?php the_title(); ?>
          </h1>


          <div class="blog-content">
            <?php the_content(); ?>
          </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
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

<?php get_header(); ?>

<main role="main" class="blog-area">

    <!-- ループ開始 -->
    <div class="container blog-wrap">

        <div class="row">

            <div class="col-12 col-lg-9">

                <div class="row">

                    <?php if(have_posts()):while(have_posts()):the_post(); ?>

                    <div class="col-12">

                        <article <?php post_class(); ?>>
                            
                            <h2 class="">
                                <?php the_title(); ?>
                            </h2>
                            
                            <!-- もしアイキャッチ画像があれば出力 -->
                            <?php if( has_post_thumbnail() ): ?>

                            <?php the_post_thumbnail(); ?>

                            <?php endif; ?>

                            <!-- 日付とカテゴリ -->
                            <div class="post-info">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<time datetime="<?php echo get_the_date('c'); ?>"></time>
                                <?php echo get_the_date(); ?>&nbsp;&nbsp;
                                <i class="fa fa-folder-o" aria-hidden="true"></i>&nbsp;
                                <?php the_category(' , '); ?>
                            </div>

                            <div class="single-content">
                                <?php the_content(); ?>
                            </div>

                        </article>
                    </div>

                    <!-- 個別ページに古い記事、新しい記事を表示 -->
                    <div class="col-12">
                        <div class="navlink">
                            <span class="navlink-next"><?php previous_post_link('%link','<i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i>&nbsp;古い記事'); ?></span>

                            <span class="navlink-prev"><?php next_post_link('%link','新しい記事&nbsp;<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>'); ?></span>
                        </div>
                    </div>
                    <!-- /個別ページに古い記事、新しい記事を表示 -->


                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="navlink">

                    <span class="navlink-next">
						<?php if (get_next_posts_link()): ?>
							<i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i>
							<?php next_posts_link('古い記事'); ?>
						<?php endif; ?>
					</span>

                    <span class="navlink-prev">
						<?php if (get_previous_posts_link()): ?>
							<?php previous_posts_link('新しい記事'); ?>
							<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
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

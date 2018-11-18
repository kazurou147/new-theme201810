<footer class="">
  <div class="footer1-outer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2><?php bloginfo( 'name' );  ?></h2>
          <p>description</p>
        </div>

        <div class="col-md-3">
          <ul class="footer-navi"><?php dynamic_sidebar('フッター1'); ?></ul>
        </div>
        
        <div class="col-md-3">
          <ul class="footer-navi"><?php dynamic_sidebar('フッター2'); ?></ul>
        </div>
      </div>
    </div>
  </div>

  <div class="footer2-outer">
    <div class="container text-center">
      <small class="">© All Right Reserved</small>
    </div>
  </div>
</footer>


</div>
<!-- cover-container -->

</div>
<!-- site-wrapper-inner -->

</div>
<!-- site-wrapper -->
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script>
  jQuery(window).on('load', function() {
    jQuery('#haeder-nav-switchBtn').on('click', function() {
      if (jQuery(this).hasClass('btnclose')) {
        jQuery(this).removeClass('btnclose');
        jQuery('#header-nav-pc').stop().animate({
          right: -250 + 'px'
        });
        jQuery('#nav-overlay').css({
          display: 'none'
        }).stop().animate({
          opacity: 0
        }, 300);
      } else {
        jQuery(this).addClass('btnclose');
        jQuery('#header-nav-pc').stop().animate({
          right: 0
        });
        jQuery('#nav-overlay').css({
          display: 'block'
        }).stop().animate({
          opacity: 0.5
        }, 300);
      }
    });

    jQuery('#nav-overlay').on('click', function() {
      jQuery('#haeder-nav-switchBtn').removeClass('btnclose');
      jQuery('#header-nav-pc').stop().animate({
        right: -250 + 'px'
      });
      jQuery('#nav-overlay').css({
        display: 'none'
      });
    });
  });

</script>

</body>

</html>

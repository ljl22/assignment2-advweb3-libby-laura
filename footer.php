  <footer>
    <div class="row">

      <div class="col-md-4 d-flex align-items-center">
          <nav>
              <?php
                if(has_nav_menu('footer-left')){
                wp_nav_menu(array('theme_location' => 'footer-left', 'container_class' => 'footer-left-class'));
              }else{
                echo "Please select a footer left via the dashboard for best results";
              }
              ?>
          </nav>
        </div>

        <div class="col-md-4 d-flex align-items-center">
          <nav>
              <?php
                if(has_nav_menu('footer-middle')){
                wp_nav_menu(array('theme_location' => 'footer-middle', 'container_class' => 'footer-middle-class'));
              }else{
                echo "Please select a footer middle menu via the dashboard for best results";
              }
              ?>
          </nav>
        </div>

        <div class="col-md-4 d-flex align-items-center">
          <nav>
              <?php
                if(has_nav_menu('footer-right')){
                wp_nav_menu(array('theme_location' => 'footer-right', 'container_class' => 'footer-right-class'));
              }else{
                echo "Please select a footer right via the dashboard for best results";
              }
              ?>
          </nav>
        </div>

    </div>
    <div class="col-md-12">
        <?php dynamic_sidebar('bottom-left-widget-title'); ?>
    </div>

    <div class="col-md-12">
        <?php dynamic_sidebar('bottom-middle-widget-title'); ?>
    </div>

    <div class="col-md-12">
        <?php dynamic_sidebar('bottom-right-widget-title'); ?>
    </div>

    <div class="navbar fixed-bottom" id="paddingtp" style="background-color: #2a7886; color: #ffffff;">
      <h4 class="whitefont">
        Created by: Laura for Advanced Web 3
      </h4>
    </div>
  </footer>




    <?php wp_footer(); ?>
  </body>
</html>

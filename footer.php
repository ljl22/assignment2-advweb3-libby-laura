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
</footer>

  <?php wp_footer(); ?>
    <!--<div class="navbar fixed-bottom" style="background-color: #2a7886; color: #ffffff;">
      <h4 class="whitefont">
        Created by: Laura L. for Advanced Web 3
      </h4>
    </div>-->
  </body>
</html>

<nav class="main-navigation">
  <!-- off-screen menu = start -->
  <div class="container clearfix">

      <div class="exit-button">
        <svg class="close" viewBox="0 0 350 350"><path d="M191.1 170.8L268.3 78h-31.8L175 152.1 113.5 78H81.3l77.6 92.8L73.8 272H106l69-82.6 68.6 82.6h32.6"/><path d="M294.8 346.6H55.2c-28.6 0-51.8-23.2-51.8-51.8V55.2c0-28.6 23.2-51.8 51.8-51.8h239.6c28.6 0 51.8 23.2 51.8 51.8v239.6c0 28.5-23.2 51.8-51.8 51.8zM55.2 29.3c-14.3 0-25.9 11.6-25.9 25.9v239.6c0 14.3 11.6 25.9 25.9 25.9h239.6c14.3 0 25.9-11.6 25.9-25.9V55.2c0-14.3-11.6-25.9-25.9-25.9H55.2z"/></svg>
      </div> <!-- /.exit-button -->
    
    <div class="menu-items">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>
    </div><!-- /.menu-items -->
  </div> <!-- .menu-container .clearfix -->
  <!-- off-screen menu = end -->
</nav> <!-- .main-navigation -->
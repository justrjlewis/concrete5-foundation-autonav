<div class="contain-to-grid"> <!-- use this if you want the menu centered otherwise just use the enclosed nav -->
  <nav role="navigation" class="top-bar">
    <ul class="title-area name">
      <!-- comment out if you don't want to use the site name -->
      <?php 
          $a = new GlobalArea('Site Name'); 
          $a->setBlockLimit(1);
          $a->display(); 
      ?>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
    <section class="top-bar-section">
        <?php 
          $a = new GlobalArea('Header Nav'); 
          $a->setBlockLimit(1);
          $a->display(); 
        ?> 
    </section>
  </nav>
</div>
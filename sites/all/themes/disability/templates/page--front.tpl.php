<div class="container-fluid">
	
  <section class="row logo-wrapper">
    
    <div id="logo">
      <?php if (!empty($page['logo'])): ?>
      <?php print render($page['logo']); ?> 
      <?php endif; ?> 
    </div> <!-- end #logo -->
    
    <div id="about-menu" class="hidden-xs">
      <nav class="navbar" role="navigation" aria-labelledby="about-menu">
        <?php if (!empty($secondary_nav)): ?>
        <?php print render($secondary_nav); ?>
        <?php endif; ?>
      </nav>
    </div> <!-- end #about-menu -->
  </section> <!-- end.row logo-wrapper-->

  <section class="row navbar-wrapper">
    <header id="navbar-front" role="banner" class="navbar">

      <div id="sitename">
        <?php if (!empty($site_name)): ?>
          <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
        <?php endif; ?>
      </div> <!-- end #sitename-->

      <div id="search-browse">
        <!-- nav-mobile -->
        <?php if (!empty($primary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php endif; ?>
        <!-- nav-desktop -->
        <?php if (!empty($primary_nav) || !empty($page['navigation'])): ?>
          <div class="navbar-collapse collapse">
            <nav id="main-menu" role="navigation" aria-labelledby="main-menu">
              <?php if (!empty($secondary_nav)): ?>
              <div class="visible-xs">
                <?php print render($secondary_nav); ?>
              </div>
              <?php endif; ?>
              <?php if (!empty($primary_nav)): ?>
              <div>
                <?php print render($primary_nav); ?>
              </div>
              <?php endif; ?>
              
              <?php if (!empty($page['navigation'])): ?>
              <div>
                <?php print render($page['navigation']); ?>
              </div>
              <?php endif; ?>
            </nav>
          </div>
        <?php endif; ?>
      </div> <!-- end #search-browse -->
    </header> <!-- end.navbar -->
  </section> <!-- end.navbar-wrapper" -->

  <section id="highlighted">
    <p>
      <?php /*this code pulls a random numbered image (1.jpg, 2.jpg, etc.) from the "home" folder */ ?>
      <img src="sites/default/files/styles/homepage/<?php $random = rand(1,5); echo $random; ?>.jpg" alt="image from the archive" id="hero" />
    </p>
    <p id="herocaption">Showcasing Texas’ central role in the disability rights movement, especially adapted sports and access to higher education.<br />
      <a href="about">More about this collection</a>
    </p>
  </section>
  <?php if (!empty($page['news'])): ?>
  <section id="news-events"role="complementary">
    <div class="row">
      <div class="col-md-1 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <h3>NEWS&nbsp;&amp; EVENTS</h3>
      </div>
      <div class="col-md-9 col-md-offset-0 col-sm-10 col-sm-offset-1">        
      <?php print render($page['news']); ?> 
      </div>
    </div>
  </section>
  <?php endif; ?> 
</div> <!-- end.container-fluid" -->


<div class="main-container container" role="main">
  <section<?php print $content_column_class; ?>>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php if (!empty($page['help'])): ?>
      <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  </section>
</div> <!-- end.main-container container" -->


<?php if (!empty($page['footer'])): ?>
  <footer class="footer container-fluid">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>

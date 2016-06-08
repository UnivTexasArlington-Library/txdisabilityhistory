<?php if (!empty($page['highlighted'])): ?>
  <div class="highlighted">
    <?php /*print render($page['highlighted']);  
	instead of rendering highlighted page, use the code below (ending with </section> )*/?>
	<div class="region region-highlighted">

	
	
	<div class="row logo-wrapper">
      <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4" id="logo">
        <div class="hidden-print">
          <a href="http://www.uta.edu/uta/">
            <img alt="University of Texas at Arlington"  id="uta_logo" src="/sites/default/files/default_images/UTALogo-130px.png" />
          </a> 
          <a href="/">
            <img alt="UTA Libraries" id="lib_logo" src="/sites/default/files/default_images/UTA-Libraries-350px.png"  />
          </a>
        </div>
        <!--<?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="http://library.uta.edu" title="University of Texas at Arlington Libraries">
          <img src="<?php print $logo; ?>" alt="University of Texas at Arlington: UTA Libraries" />
        </a>
        <?php endif; ?> -->
      </div>
      <div class="col-xs-12 col-sm-5 col-md-6 col-lg-7" id="green-menu">
        <nav class="navbar navbar-right">
          <?php if (!empty($secondary_nav)): ?>
                <?php print render($secondary_nav); ?>
              <?php endif; ?>
        </nav>
      </div>
      </div>
      <div class="row navbar-wrapper">
    <header id="navbar-front" role="banner" class="<?php print $navbar_classes; ?>">
      <div class="<?php print $container_class; ?>">
        <div class="navbar-header">
          <?php if (!empty($site_name)): ?>
            <h1><a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
          <?php endif; ?>

          <?php if (!empty($primary_nav) || !empty($page['navigation'])): ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <?php endif; ?>
        </div>

        <?php if (!empty($primary_nav) || !empty($page['navigation'])): ?>
          <div class="navbar-collapse collapse">
            <nav role="navigation">
              <?php if (!empty($primary_nav)): ?>
              <div>
                <?php print render($primary_nav); ?>
              </div>
              <?php endif; ?>
              
              <?php if (!empty($page['navigation'])): ?>
              <div class="pull-right">
                <?php print render($page['navigation']); ?>
              </div>
              <?php endif; ?>
            </nav>
          </div>
        <?php endif; ?>
      </div>
    </header>



    </div> <!-- end.navbar-wrapper" -->
        <section id="block-block-5" class="block block-block clearfix">
      <p>
      <?php /*this code pulls a random numbered image (1.jpg, 2.jpg, etc.) from the "home" folder */ ?>
        <img src="sites/default/files/styles/homepage/<?php $random = rand(1,5); echo $random; ?>.jpg" alt="image from the archive" id="hero" /></p>
    <p id="herocaption">
      Showcasing Texas’s central role in the disability rights movement, especially adapted sports and access to higher education.<br /><a href="about">More about this collection</a>
    </p>
    </section>
  </div> <?php endif; ?>

<div class="main-container <?php print $container_class; ?>" role="main">
  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?> 

    <section<?php print $content_column_class; ?>>
      
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <!-- <h2 class="page-header"><?php print $title; ?></h2> -->
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>

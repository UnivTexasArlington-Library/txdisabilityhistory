<div class="container-fluid">
  
  <section class="row logo-wrapper-inside">
    
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

  <section class="row navbar-wrapper-inside">
    <header role="banner" class="navbar">

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
  <section role="banner" area-labelledby="breadcrumbs">
    <?php print render($page['header']); ?> 
  </section> <!-- /#page-header -->
</div> <!-- end.container-fluid" -->

<div class="main-container fluid-container" role="main">
  
  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section <?php print $content_column_class; ?>>
      
      <!--<?php if (!empty($breadcrumb)): print $breadcrumb; endif;?> -->
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

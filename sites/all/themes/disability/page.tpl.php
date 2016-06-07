<a class="sr-only sr-only-focusable" href="#main-content">Skip to main content</a>
<div class="row logo-wrapper-inside">
  <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4" id="logo">
    <div class="hidden-print"> 
      <a href="http://www.uta.edu/uta/">
        <img alt="University of Texas at Arlington"  id="uta_logo" src="/txdisabilityhistory/sites/default/files/UTA-LOGO_GREEN.png" />
      </a> 
      <a href="/">
        <img alt="UTA Libraries" id="lib_logo" src="/txdisabilityhistory/sites/default/files/UTA-Libraries_green.png"  />
      </a>
    </div>
  </div>
  <div class="col-xs-12 col-sm-5 col-md-6 col-lg-7" id="green-menu">
    <nav class="navbar navbar-right">
      <?php if (!empty($secondary_nav)):?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
    </nav>
  </div>
</div>
<div class="row navbar-wrapper-inside">
  <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
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
</div> 


<div class="main-container <?php print $container_class; ?>" role="main">

  <div role="banner" id="page-header">
    <?php print render($page['header']); ?> 
  </div> <!-- /#page-header -->

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

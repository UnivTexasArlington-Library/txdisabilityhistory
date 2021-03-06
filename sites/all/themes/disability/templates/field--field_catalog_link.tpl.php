<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="row">
  <?php if (!$label_hidden): ?>
    
      <div class="field-label col-xs-12 col-sm-4 col-md-3"<?php print $title_attributes; ?>><strong>UT Arlington Catalog:</strong></div>
    
  <?php endif; ?>
  
  <div class="field-items col-xs-12 col-sm-7 col-md-8"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>>
        <a href="http://pulse.uta.edu/vwebv/holdingsInfo?bibId=<?php print render($item); ?>"><?php print render($item); ?></a>
      </div>
    <?php endforeach; ?>

  </div>
</div>
</div>
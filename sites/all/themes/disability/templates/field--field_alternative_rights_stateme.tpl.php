<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="row row-field">
  <?php if (!$label_hidden): ?>

    	<div class="field-label col-xs-12 col-sm-4"<?php print $title_attributes; ?>><strong>Rights:</strong></div>

  <?php endif; ?>
  
  <div class="field-items col-xs-12 col-sm-8"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
    <?php endforeach; ?>
  </div>
</div>
</div>


<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="row">
  <?php if (!$label_hidden): ?>

    	<div class="field-label"<?php print $title_attributes; ?>><strong><?php print $label ?>:</strong></div>

  <?php endif; ?>
  
  <div class="field-items col-sm-12"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
    <?php endforeach; ?>
  </div>
</div>
</div>


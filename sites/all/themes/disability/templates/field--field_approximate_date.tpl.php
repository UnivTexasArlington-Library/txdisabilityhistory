<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="row">
    
  <div <?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item col-sm-12 <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
    <?php endforeach; ?>

  </div>
</div>
</div>
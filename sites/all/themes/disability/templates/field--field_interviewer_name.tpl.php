<div class="pane-content <?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label col-xs-12 col-sm-4"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
  

  <div class="field-items col-xs-12 col-sm-8"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>>
      	<?php print render($item); ?>
      </div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
    <?php if ($label_hidden): ?>
    

  <div class="field-items col-sm-12"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>>
      	<?php print render($item); ?>
      </div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
</div>



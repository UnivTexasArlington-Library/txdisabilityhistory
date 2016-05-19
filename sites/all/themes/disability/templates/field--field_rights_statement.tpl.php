<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label col-xs-12 col-sm-4"<?php print $title_attributes; ?>>Rights:&nbsp;</div>
  <?php endif; ?> 
  <div class="field-items col-xs-12 col-sm-8"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><p>Any use of content downloaded or printed from this site is limited to non-commercial personal or educational use, including fair use as directed by U.S. copyright laws. For more information, high resolution reproduction requests, or for commercial use please contact Special Collections at The University of Texas at Arlington Libraries.</p></div>
    <?php endforeach; ?>
  </div>
</div>
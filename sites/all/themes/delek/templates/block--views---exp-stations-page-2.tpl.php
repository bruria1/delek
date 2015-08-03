<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><div claas="line1">תחנות</div><div class="line2">ברחבי הארץ</div></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php print $content; ?>

</div>

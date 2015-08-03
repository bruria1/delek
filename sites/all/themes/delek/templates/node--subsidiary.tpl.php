<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
  ?>
<div class="right">
 <h2 id="page-title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
<div class="mobile">
  <?php print render($content['field_image']); ?>
  </div>
  <?php print render($content['body']); ?>
</div>

<div class="left">
<div class="image">
  <a href="<?php print $node->field_link_company['und'][0]['url'] ?>" target="_blank"><?php print render($content['field_image']); ?></a>
  </div>

  <?php print render($content['field_link_company']); ?>
    <div class="title">ליצירת קשר</div>
  <?php print render($content['field_contact_company']); ?>
    <div class="title">הנהלת החברה</div>
  <?php print render($content['field_mifrat']); ?>
</div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>

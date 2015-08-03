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

  <?php print render($content['field_job_number']); ?>
  <?php print render($content['field_sherut_leumi']); ?>
  <?php if (!empty($content['field_description_job'])){ ?>
    <div class="field-label">תיאור התפקיד:</div><?php print render($content['field_description_job']); ?>
  <?php } ?>
  <?php if (!empty($content['field_requirements_job'])){ ?>
    <div class="field-label">דרישות התפקיד:</div><?php print render($content['field_requirements_job']); ?>
  <?php } ?>
  <?php if (!empty($content['field_place_job'])){ ?>
    <div class="field-label">מיקום:</div><?php print render($content['field_place_job']); ?>
  <?php } ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>

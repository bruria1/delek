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


מחיר לצרכן ש"ח/ליטר כולל מע"מ
<table>
  <thead>
    <tr>
      <td></td>
      <td colspan=2 class="center">תאריך עדכון</td>
    </tr>
    <tr>
      <td>מוצר</td>
      <td class="center"><?php print render($content['field_date_update']); ?></td>
      <td class="center"><?php print render($content['field_date_update_2']); ?></td>
    </tr>
  </thead>
  <tbody>
    <tr class="odd">
      <td>בנזין 95 בשירות מלא - מחיר מרבי</td>
      <td class="center"><?php print render($content['field_95']); ?></td>
      <td class="center"><?php print render($content['field_95_2']); ?></td>
    </tr>
    <tr class="even">
      <td>בנזין 98</td>
      <td class="center"><?php print render($content['field_98']); ?></td>
      <td class="center"><?php print render($content['field_98_2']); ?></td>
    </tr>
    <tr class="odd">
      <td>נפט</td>
      <td class="center"><?php print render($content['field_neft']); ?></td>
      <td class="center"><?php print render($content['field_neft_2']); ?></td>
    </tr>
    <tr class="even">
      <td>סולר לתחבורה - מחיר מרבי</td>
      <td class="center"><?php print render($content['field_solr']); ?></td>
      <td class="center"><?php print render($content['field_solr_2']); ?></td>
    </tr>
    <tr class="odd">
      <td>דל גרין (אוראה)</td>
      <td class="center"><?php print render($content['field_delgreen']); ?></td>
      <td class="center"><?php print render($content['field_delgreen_2']); ?></td>
    </tr>
    <tr class="even">
      <td>גפ"מ אוטומטיבי</td>
      <td class="center"><?php print render($content['field_gapam']); ?></td>
      <td class="center"><?php print render($content['field_gapam_2']); ?></td>
    </tr>
  </tbody>
</table>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>

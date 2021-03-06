<?php

/**
 * @file
 * PROJECT_C responsive theme implementation to display a listing people profile node.
 *
 * Available variables:
 * See node.tpl.php
 *
 * Additional variables:
 * - $people_conditional_title - A title value that uses the alternate title if
 *   it has a value or the work title by default.
 *
 * @ingroup themeable
 */

// Hide the work title content item since we'll use the $people_conditional_title
// added in the preprocess function.
hide($content['field_people_work_title']);
?>
<article class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="people-profile__main">
    <div class="people-profile__header">
      <?php /* The wrapper for this image is set in project_c_base_responsive_field__field_people_profile_image__project_c_people_profile() */ ?>
      <?php print render($content['field_people_profile_image']); ?>
      <div class="people-profile__header-body">
        <div class="people-profile__basics">
          <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
          <div class="people-profile__work-title"><?php print $people_conditional_title; ?></div>
          <div class="people-profile__email">
            <?php print render($content['field_people_email']); ?>
          </div>
        </div>
        <div class="people-profile__summary">
          <?php print render($content['field_people_summary']); ?>
        </div>
      </div>
    </div>
  </div>

  <?php print render($title_suffix); ?>

  <?php if ($unpublished): ?>
    <mark class="watermark watermark--unpublished"><?php print t('Unpublished'); ?></mark>
  <?php elseif ($preview): ?>
    <mark class="watermark watermark--preview"><?php print t('Preview'); ?></mark>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later (maybe).
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>
</article>

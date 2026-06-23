<?php
if (class_exists('HTMLPurifier_Config')) {
    $config = HTMLPurifier_Config::createDefault();
    $config->set('HTML.Allowed', 'br,strong,span'); 
    $purifier = new HTMLPurifier($config);
}
?>

<section class="faq-container">    
<?php foreach ($content['categories'] as $category) : ?>
  <div class="faq-category">
    <h2 class="label-md faq-category-title">
      <?php echo htmlspecialchars($category['heading']); ?>
    </h2>

    <?php foreach ($category['items'] as $faq) : ?>
      <details class="faq-item">
        <summary class="headline-md">
          <?php echo htmlspecialchars($faq['summary']); ?>
          <span class="material-symbols-outlined plus-icon">add</span>
        </summary>
        
        <?php 
          $has_image = !empty($faq['image_url']);
          $content_class = $has_image ? 'faq-content faq-image-grid' : 'faq-content';
        ?>

        <div class="<?php echo $content_class; ?>">
          <?php foreach ($faq['description'] as $paragraph) : ?>
            <p class="body-lg">
              <?php 
                // Fallback to strip_tags if HTMLPurifier wasn't loaded properly
                if (isset($purifier)) {
                    echo $purifier->purify($paragraph);
                } else {
                    echo html_entity_decode(strip_tags($paragraph, ['<br>', '<strong>', '<span>']));
                }
              ?>
            </p>
          <?php endforeach; ?>

          <?php if ($has_image) : ?>
            <div
              class="faq-image"
              style="background-image: url('<?php echo htmlspecialchars($faq['image_url']); ?>');"
              aria-label="<?php echo htmlspecialchars($faq['image_alt'] ?? 'FAQ Image'); ?>"
            ></div>
          <?php endif; ?>
        </div>

        <?php if (!empty($faq['inquire_url'])) : ?>
          <a href="<?php echo htmlspecialchars($faq['inquire_url']); ?>" class="label-md btn btn-primary" style="margin-top: 0; margin-bottom: 1em">
            <?php echo htmlspecialchars($faq['inquire_text']); ?>
          </a>
        <?php endif; ?>
      </details>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>
</section>
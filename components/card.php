    <!-- Dynamic Component Matrix Structure -->
    <section class="portfolio-section">
      <div class="section-intro">
        <h2><?php echo htmlspecialchars($content['portfolio_section']['heading']); ?></h2>
        <p><?php echo htmlspecialchars($content['portfolio_section']['subheading']); ?></p>
      </div>

      <div class="card-grid">
        <?php foreach ($content['cards'] as $card): ?>
          <article class="card-item">
            <div class="card-image-wrap">
              <img src="<?php echo htmlspecialchars($card['image_url']); ?>" alt="<?php echo htmlspecialchars($card['image_alt']); ?>" loading="lazy">
            </div>
            <div class="card-body">
              <h3 class="card-title"><?php echo htmlspecialchars($card['title']); ?></h3>
              <p class="card-text"><?php echo htmlspecialchars($card['description']); ?></p>
              <a href="<?php echo htmlspecialchars($card['cta_url']); ?>" class="card-cta"><?php echo htmlspecialchars($card['cta_text']); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>



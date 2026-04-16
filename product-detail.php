<?php
$pageTitle = "Product Detail | Lazzaro Laurels";
$pageDescription = "Explore detailed fragrance notes, size options, pricing, and product information for Lazzaro Laurels perfumes.";
$navContext = "inner";
$navActive = "products";
$footerContext = "inner";
require __DIR__ . '/includes/head.php';
?>
<header class="catalog-hero detail-hero" id="top">
<?php require __DIR__ . '/includes/header.php'; ?>

<div class="shell catalog-hero-grid">
        <div class="catalog-hero-copy">
          <h1>Product</h1>
        </div>
      </div>

</header>

<main class="detail-page shell">
      <section class="detail-layout">
        <div class="detail-gallery">
          <img src="./assets/product-ocean.png" alt="Skinn By Titan Nude perfume bottle" />
          <div class="detail-gallery-controls">
            <button class="slider-control slider-prev" type="button" aria-label="Previous image"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 6 8 12l6 6" /></svg></button>
            <button class="slider-control slider-next" type="button" aria-label="Next image"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m10 6 6 6-6 6" /></svg></button>
          </div>
        </div>

        <div class="detail-summary">
          <h1>Skinn By Titan Nude</h1>
          <div class="detail-price-row">
            <strong>₹260</strong>
            <span class="detail-strike">₹300</span>
            <span class="detail-discount">-40%</span>
          </div>
          <p class="detail-description">Elevate your daily routine with a fragrance that stands out. This perfume offers a refreshing and long-lasting scent that keeps you feeling fresh, confident, and ready for any moment.</p>

          <div class="detail-divider"></div>

          <section class="detail-size-block">
            <h2>Choose Size</h2>
            <div class="detail-size-options">
              <button class="size-chip" type="button">50 ML</button>
              <button class="size-chip" type="button">100 ML</button>
              <button class="size-chip is-active" type="button">150 ML</button>
            </div>
          </section>

          <div class="detail-divider"></div>

          <div class="detail-cart-row">
            <div class="quantity-pill">
              <button class="qty-btn" type="button" data-qty="decrease">-</button>
              <span class="qty-value">1</span>
              <button class="qty-btn" type="button" data-qty="increase">+</button>
            </div>
            <a class="detail-primary checkout-link" href="./cart.php">Add To Cart <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 7h13l-1.3 7.6a2 2 0 0 1-2 1.7H9a2 2 0 0 1-2-1.7L5.2 4.8A1 1 0 0 0 4.2 4H3" /><path d="M9 20a1 1 0 1 0 0 .01M16 20a1 1 0 1 0 0 .01" /></svg></a>
          </div>

          <a class="detail-secondary checkout-link" href="./checkout.php">Buy Now <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8" /></svg></a>
        </div>
      </section>

      <section class="detail-tabs">
        <div class="detail-tab-buttons">
          <button class="detail-tab is-active" type="button" data-tab-target="details">Product Details</button>
          <button class="detail-tab" type="button" data-tab-target="faqs">FAQs</button>
        </div>

        <div class="detail-tab-panel is-active" data-tab-panel="details">
          <p>Elevate your daily style with a fragrance that speaks sophistication. Signature Essence Perfume is crafted with carefully selected aromatic notes to create a balanced scent that feels fresh, elegant, and memorable.</p>
          <p>Whether you're heading to work, attending a special event, or enjoying a casual outing, this perfume enhances your presence with every spray.</p>

          <div class="detail-note-row">
            <h3>Top Notes</h3>
            <p>Fresh citrus and light floral notes that provide an energizing opening.</p>
          </div>
          <div class="detail-note-row">
            <h3>Heart Notes</h3>
            <p>Soft floral and aromatic tones that create elegance and warmth.</p>
          </div>
          <div class="detail-note-row">
            <h3>Premium Fragrance Composition</h3>
            <p>Made with high-quality aromatic ingredients for a refined scent.</p>
          </div>
          <div class="detail-note-row">
            <h3>Long-Lasting Performance</h3>
            <p>Designed to stay fresh and noticeable for hours.</p>
          </div>
        </div>

        <div class="detail-tab-panel" data-tab-panel="faqs">
          <div class="detail-note-row"><h3>How long does it last?</h3><p>Up to 6 hours depending on weather, skin type, and application.</p></div>
          <div class="detail-note-row"><h3>Is it suitable for gifting?</h3><p>Yes. The packaging and scent profile are designed to feel premium and gift-ready.</p></div>
          <div class="detail-note-row"><h3>Can I use it daily?</h3><p>Yes. It is built as a versatile scent for both everyday wear and evenings.</p></div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/foot.php'; ?>

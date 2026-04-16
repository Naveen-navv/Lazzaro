<?php
$pageTitle = "Lazzaro Laurels";
$pageDescription = "Lazzaro Laurels perfume landing page featuring premium fragrances, collections, and best-selling scents.";
$bodyClass = "home-page";
$navContext = "home";
$navActive = "home";
$footerContext = "home";
require __DIR__ . '/includes/head.php';
?>
<header class="hero" id="home">
<?php require __DIR__ . '/includes/header.php'; ?>

<div class="hero-slider">
      <article class="hero-slide hero-slide-product is-active" data-accent="dark">
        <div class="shell hero-grid hero-grid-single">
          <div class="hero-copy">
            <h1>Product Luxurious</h1>
            <p class="hero-text">
              An extraordinary concentration of aromas that combines the freshness
              of spices with the warmth of wood.
            </p>
            <div class="scent-tags">
              <span>Jasmine</span>
              <span>Rose</span>
              <span>Vanilla</span>
              <button class="arrow-chip" type="button" aria-label="Explore fragrances">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M7 17 17 7M9 7h8v8" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </article>

      <article class="hero-slide hero-slide-sofia" data-accent="light">
        <div class="shell hero-grid hero-grid-single hero-grid-right">
          <div class="hero-copy hero-copy-light">
            <p class="eyebrow">Curated Blend</p>
            <h1>Sofia Belle</h1>
            <p class="hero-text hero-text-light">
              A floral composition shaped for luminous evenings, powdery petals,
              and a refined golden dry-down.
            </p>
            <div class="scent-tags">
              <span>Peony</span>
              <span>Laurel</span>
              <span>Amber</span>
              <button class="arrow-chip" type="button" aria-label="Explore Sofia Belle">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M7 17 17 7M9 7h8v8" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </article>

    </div>

</header>

<main>
    <section class="collections shell">
      <div class="section-heading">
        <h2>Elanor <span>Collections</span></h2>
      </div>
      <div class="collection-grid">
        <article class="collection-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/collection-her.png" alt="For Her perfume collection" />
          <div class="collection-body">
            <h3>For Her</h3>
            <hr>
            <p>Everyday Elegance And Perfect For Your Body</p>
            <span>EDT | FRESH | 6HRS</span>
            <a class="button-dark" href="./products.php">Explore Now</a>
          </div>
        </article>

        <article class="collection-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/collection-him.png" alt="For Him perfume collection" />
          <div class="collection-body">
            <h3>For Him</h3>
            <hr>
            <p>Everyday Elegance And Perfect For Your Body</p>
            <span>EDT | FRESH | 6HRS</span>
            <a class="button-dark" href="./products.php">Explore Now</a>
          </div>
        </article>

        <article class="collection-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/collection-unisex.png" alt="Unisex perfume collection" />
          <div class="collection-body">
            <h3>Unisex Perfume</h3>
            <hr>
            <p>Everyday Elegance And Perfect For Your Body</p>
            <span>EDT | FRESH | 6HRS</span>
            <a class="button-dark" href="./products.php">Explore Now</a>
          </div>
        </article>
      </div>
    </section>

    <section class="products" id="top-sellers">
      <div class="shell">
      <div class="section-heading">
        <h2>Top <span>Sellers</span></h2>
      </div>
      <div class="product-grid">
        <article class="product-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/product-rose.png" alt="Top seller perfume in rose petals" />
          <p class="product-name">Tobacco Vanille EAU De perfum</p>
          <div class="product-meta">
            <p>Patchouli, Vanilla, Tonka Bean.</p>
            <strong class="product-price-row"><span class="product-price-current">₹2799</span><span class="product-price-was">₹3499</span><span class="discount-badge">(20% Off)</span></strong>
          </div>
          <div class="product-actions">
            <button class="button-light" type="button">
              Add to Cart
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 7h13l-1.3 7.6a2 2 0 0 1-2 1.7H9a2 2 0 0 1-2-1.7L5.2 4.8A1 1 0 0 0 4.2 4H3" />
                <path d="M9 20a1 1 0 1 0 0 .01M16 20a1 1 0 1 0 0 .01" />
              </svg>
            </button>
            <a class="button-dark product-link" href="./product-detail.php">View Details</a>
          </div>
        </article>

        <article class="product-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/product-ocean.png" alt="Top seller blue perfume bottle" />
          <p class="product-name">Tobacco Vanille EAU De perfum</p>
          <div class="product-meta">
            <p>Patchouli, Vanilla, Tonka Bean.</p>
            <strong class="product-price-row"><span class="product-price-current">₹2799</span><span class="product-price-was">₹3499</span><span class="discount-badge">(20% Off)</span></strong>
          </div>
          <div class="product-actions">
            <button class="button-light" type="button">
              Add to Cart
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 7h13l-1.3 7.6a2 2 0 0 1-2 1.7H9a2 2 0 0 1-2-1.7L5.2 4.8A1 1 0 0 0 4.2 4H3" />
                <path d="M9 20a1 1 0 1 0 0 .01M16 20a1 1 0 1 0 0 .01" />
              </svg>
            </button>
            <a class="button-dark product-link" href="./product-detail.php">View Details</a>
          </div>
        </article>

        <article class="product-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/product-amber.png" alt="Top seller amber perfume bottle" />
          <p class="product-name">Tobacco Vanille EAU De perfum</p>
          <div class="product-meta">
            <p>Patchouli, Vanilla, Tonka Bean.</p>
            <strong class="product-price-row"><span class="product-price-current">₹2799</span><span class="product-price-was">₹3499</span><span class="discount-badge">(20% Off)</span></strong>
          </div>
          <div class="product-actions">
            <button class="button-light" type="button">
              Add to Cart
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 7h13l-1.3 7.6a2 2 0 0 1-2 1.7H9a2 2 0 0 1-2-1.7L5.2 4.8A1 1 0 0 0 4.2 4H3" />
                <path d="M9 20a1 1 0 1 0 0 .01M16 20a1 1 0 1 0 0 .01" />
              </svg>
            </button>
            <a class="button-dark product-link" href="./product-detail.php">View Details</a>
          </div>
        </article>
      </div>
      </div>
    </section>

    <section class="feature-section shell scroll-reveal" id="about">
      <div class="feature-intro">
        <div class="mini-gallery">
          <article class="mini-card">
            <img src="./assets/thumb-ocean.png" alt="Ocean-inspired perfume bottle" />
          </article>
          <article class="mini-card warm">
            <img src="./assets/thumb-amber.png" alt="Amber perfume bottle on wood" />
          </article>
        </div>
        <h2>All Scents</h2>
        <p>Explore our nature-inspired perfume collection.</p>
      </div>

      <div class="feature-main">
        <h2 class="display-title">
          Luxury, <span>No</span><br />
          <span>Compromise.</span>
        </h2>

        <div class="feature-cards">
          <article
            class="feature-card active"
            data-feature-heading="High Quality, Fair Price"
            data-feature-summary="We source ingredients from the same houses luxury brands special for you."
          >
            <img src="./assets/product-rose.png" alt="Fresh Roses perfume arrangement" />
            <span>Fresh Roses</span>
          </article>
          <article
            class="feature-card"
            data-feature-heading="Pure Botanical Craft"
            data-feature-summary="Layered botanical extracts are distilled with care so each note opens cleanly on the skin."
          >
            <img src="./assets/product-amber.png" alt="Natural extract perfume bottle" />
            <span>Natural Extract</span>
          </article>
          <article
            class="feature-card"
            data-feature-heading="Build Your Lineup"
            data-feature-summary="Mix airy florals, warm ambers, and crisp citruses—a wardrobe of moods for every season."
          >
            <img src="./assets/product-ocean.png" alt="Various scents perfume bottle" />
            <span>Various Scents</span>
          </article>
        </div>
      </div>
      <div class="feature-summary">
        <p class="summary-index">(01)</p>
        <h3>High Quality, Fair Price</h3>
        <div class="summary-copy">
          <p class="summary-text">
            <span class="summary-text-body"
              >We source ingredients from the same houses luxury brands special for you.</span
            >
            <a href="#products" class="inline-action">
              materials
            </a>
            <span>
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7 17 17 7M9 7h8v8" />
              </svg>
            </span>
          </p>
        </div>
        <button class="leaf-button" type="button" aria-label="Nature inspired">
          <img src="./assets/leaf.png" alt="" width="28" height="28" decoding="async" />
        </button>
      </div>
      <div class="feature-nav" aria-label="Feature navigation">
        <button class="slider-control feature-nav-prev" type="button" aria-label="Previous feature">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M14 6 8 12l6 6" />
          </svg>
        </button>
        <button class="slider-control feature-nav-next" type="button" aria-label="Next feature">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="m10 6 6 6-6 6" />
          </svg>
        </button>
      </div>

    </section>

      <section class="showcase-wrapper scroll-reveal" id="showcase-wrapper">
        <div class="showcase-slider" id="showcase-slider">
          <div class="showcase-slide" data-showcase-index="1">
            <img src="./assets/hero-slider-2.png" alt="Lazzaro Elanor Ember perfume" />
            <div class="showcase-bottom-band">
              <div class="showcase-side showcase-side-left">
                <h2>Elanor x</h2>
              </div>
              <div class="showcase-side showcase-side-right">
                <h2><span>Sofia Belle</span></h2>
              </div>
            </div>
          </div>
          <div class="showcase-slide" data-showcase-index="2">
            <img src="./assets/hero-sofia-clean.png" alt="Lazzaro Sofia Belle perfume bottle" />
            <div class="showcase-bottom-band">
              <div class="showcase-side showcase-side-left">
                <h2>Elanor</h2>
              </div>
              <div class="showcase-side showcase-side-right">
                <h2><span>Ember</span></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="showcase-center-controls">
          <div class="showcase-nav">
          <button class="slider-control showcase-prev" type="button" aria-label="Previous slide">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M14 6 8 12l6 6" />
            </svg>
          </button>
          <button class="slider-control showcase-next" type="button" aria-label="Next slide">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="m10 6 6 6-6 6" />
            </svg>
          </button>
          </div>
        </div>
      </section>

    <section class="products" id="products">
      <div class="shell">
      <div class="section-heading">
        <h2>Trending <span>Products</span></h2>
      </div>
      <div class="product-grid">
        <article class="product-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/product-rose.png" alt="Elanor Ember perfume in pink roses" />
          <p class="product-name">Tobacco Vanille EAU De perfum</p>
          <div class="product-meta">
            <p>Patchouli, Vanilla, Tonka Bean.</p>
            <strong class="product-price-row"><span class="product-price-current">₹2799</span><span class="product-price-was">₹3499</span><span class="discount-badge">(20% Off)</span></strong>
          </div>
          <div class="product-actions">
            <button class="button-light" type="button">
              Add to Cart
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 7h13l-1.3 7.6a2 2 0 0 1-2 1.7H9a2 2 0 0 1-2-1.7L5.2 4.8A1 1 0 0 0 4.2 4H3" />
                <path d="M9 20a1 1 0 1 0 0 .01M16 20a1 1 0 1 0 0 .01" />
              </svg>
            </button>
            <a class="button-dark product-link" href="./product-detail.php">View Details</a>
          </div>
        </article>

        <article class="product-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/product-ocean.png" alt="Blue perfume bottle in a smoky scene" />
          <p class="product-name">Tobacco Vanille EAU De perfum</p>
          <div class="product-meta">
            <p>Patchouli, Vanilla, Tonka Bean.</p>
            <strong class="product-price-row"><span class="product-price-current">₹2799</span><span class="product-price-was">₹3499</span><span class="discount-badge">(20% Off)</span></strong>
          </div>
          <div class="product-actions">
            <button class="button-light" type="button">
              Add to Cart
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 7h13l-1.3 7.6a2 2 0 0 1-2 1.7H9a2 2 0 0 1-2-1.7L5.2 4.8A1 1 0 0 0 4.2 4H3" />
                <path d="M9 20a1 1 0 1 0 0 .01M16 20a1 1 0 1 0 0 .01" />
              </svg>
            </button>
            <a class="button-dark product-link" href="./product-detail.php">View Details</a>
          </div>
        </article>

        <article class="product-card scroll-reveal scroll-reveal--stagger">
          <img src="./assets/product-amber.png" alt="Golden perfume bottle in nature" />
          <p class="product-name">Tobacco Vanille EAU De perfum</p>
          <div class="product-meta">
            <p>Patchouli, Vanilla, Tonka Bean.</p>
            <strong class="product-price-row"><span class="product-price-current">₹2799</span><span class="product-price-was">₹3499</span><span class="discount-badge">(20% Off)</span></strong>
          </div>
          <div class="product-actions">
            <button class="button-light" type="button">
              Add to Cart
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 7h13l-1.3 7.6a2 2 0 0 1-2 1.7H9a2 2 0 0 1-2-1.7L5.2 4.8A1 1 0 0 0 4.2 4H3" />
                <path d="M9 20a1 1 0 1 0 0 .01M16 20a1 1 0 1 0 0 .01" />
              </svg>
            </button>
            <a class="button-dark product-link" href="./product-detail.php">View Details</a>
          </div>
        </article>
      </div>
      </div>
    </section>

    <section class="stats shell scroll-reveal">
      <div class="stats-copy">
        <h2>
          Successfully served over<br />
          1200 customers <span>worldwide.</span>
        </h2>

        <div class="stats-grid">
          <article>
            <strong>56%</strong>
            <p>In Local People Country</p>
          </article>
          <article>
            <strong>44%</strong>
            <p>In International People</p>
          </article>
        </div>
      </div>

      <aside class="testimonial">
        <div class="quote-mark">
          <img src="./assets/quote-mark.png" alt="" />
        </div>
        <p>
          “This perfume feels like luxury in a bottle. I get compliments every time
          I wear it. The scent is elegant, soft, and powerful all at once.”
        </p>
        <div class="testimonial-author">
          <img src="./assets/customer-avatar.png" alt="Alexander Sofyan" />
          <div>
            <strong>Alexander Sofyan</strong>
            <span>Loyal Customer</span>
          </div>
        </div>
      </aside>
    </section>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/foot.php'; ?>

<?php
$pageTitle = "Cart | Lazzaro Laurels";
$pageDescription = "Review items in your Lazzaro Laurels cart and continue to secure checkout.";
$navContext = "inner";
$navActive = "";
$footerContext = "inner";
require __DIR__ . '/includes/head.php';
?>
<header class="commerce-hero" id="top">
<?php require __DIR__ . '/includes/header.php'; ?>

<div class="shell commerce-hero-grid cart-hero-grid">
        <h1 class="cart-hero-title">Cart</h1>
      </div>

</header>

<main class="cart-page shell">
      <h2>Your Cart</h2>
      <section class="cart-layout">
        <div class="cart-list-card">
          <article class="cart-item">
            <img src="./assets/product-ocean.png" alt="Skinn By Titan Nude" />
            <div class="cart-item-info">
              <h3>Skinn By Titan Nude</h3>
              <p>Size: 100ML</p>
              <strong>₹145</strong>
            </div>
            <button class="cart-remove" type="button" aria-label="Remove item">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 6h18" /><path d="M8 6V4h8v2" /><path d="M19 6l-1 14H6L5 6" /><path d="M10 11v6M14 11v6" /></svg>
            </button>
            <div class="quantity-pill cart-qty">
              <button class="qty-btn" type="button" data-qty="decrease">-</button>
              <span class="qty-value">1</span>
              <button class="qty-btn" type="button" data-qty="increase">+</button>
            </div>
          </article>

          <article class="cart-item">
            <img src="./assets/product-amber.png" alt="Skinn By Titan Nude For Men" />
            <div class="cart-item-info">
              <h3>Skinn By Titan Nude For Men</h3>
              <p>Size: 50ML</p>
              <strong>₹180</strong>
            </div>
            <button class="cart-remove" type="button" aria-label="Remove item">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 6h18" /><path d="M8 6V4h8v2" /><path d="M19 6l-1 14H6L5 6" /><path d="M10 11v6M14 11v6" /></svg>
            </button>
            <div class="quantity-pill cart-qty">
              <button class="qty-btn" type="button" data-qty="decrease">-</button>
              <span class="qty-value">1</span>
              <button class="qty-btn" type="button" data-qty="increase">+</button>
            </div>
          </article>

          <article class="cart-item">
            <img src="./assets/product-rose.png" alt="Skinn By Titan Nude Floral" />
            <div class="cart-item-info">
              <h3>Skinn By Titan Nude</h3>
              <p>Size: Large</p>
              <p>Color: Blue</p>
              <strong>₹240</strong>
            </div>
            <button class="cart-remove" type="button" aria-label="Remove item">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 6h18" /><path d="M8 6V4h8v2" /><path d="M19 6l-1 14H6L5 6" /><path d="M10 11v6M14 11v6" /></svg>
            </button>
            <div class="quantity-pill cart-qty">
              <button class="qty-btn" type="button" data-qty="decrease">-</button>
              <span class="qty-value">1</span>
              <button class="qty-btn" type="button" data-qty="increase">+</button>
            </div>
          </article>
        </div>

        <aside class="order-summary-card">
          <h3>Order Summary</h3>
          <div class="summary-row"><span>Subtotal</span><strong>₹565</strong></div>
          <div class="summary-row summary-row-discount"><span>Discount (-20%)</span><strong>-₹113</strong></div>
          <div class="summary-divider"></div>
          <div class="summary-row summary-total"><span>Total</span><strong>₹467</strong></div>
          <a class="detail-secondary checkout-link" href="./checkout.php">Go To Checkout <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8" /></svg></a>
        </aside>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/foot.php'; ?>

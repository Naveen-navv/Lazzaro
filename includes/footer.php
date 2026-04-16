<?php
$footerContext = $footerContext ?? 'inner';
$footerHome = $footerContext === 'home' ? '#home' : './index.php';
$footerAbout = $footerContext === 'home' ? '#about' : './about.php';
?>
<footer class="footer">
  <div class="shell footer-top">
    <a class="brand brand-footer" href="<?= htmlspecialchars($footerHome, ENT_QUOTES, 'UTF-8') ?>" aria-label="Lazzaro home">
      <span class="brand-main">LAZZARO</span>
      <span class="brand-sub">LAURELS</span>
    </a>

    <div class="social-links" aria-label="Social links">
      <a href="#" aria-label="Facebook"><img src="./assets/fb.png" alt="" width="24" height="24" decoding="async" /></a>
      <a href="#" aria-label="Instagram"><img src="./assets/insta.png" alt="" width="24" height="24" decoding="async" /></a>
      <a href="#" aria-label="Twitter"><img src="./assets/twitter.png" alt="" width="24" height="24" decoding="async" /></a>
    </div>
  </div>

  <div class="shell footer-grid">
    <div>
      <h3>Shop</h3>
      <a href="#">Women's Collection</a>
      <a href="#">Men's Collection</a>
      <a href="#">Unisex Collection</a>
    </div>
    <div>
      <h3>Quicklink</h3>
      <a href="<?= htmlspecialchars($footerHome, ENT_QUOTES, 'UTF-8') ?>">Home</a>
      <a href="<?= htmlspecialchars($footerAbout, ENT_QUOTES, 'UTF-8') ?>">About US</a>
      <a href="./cart.php">Cart</a>
    </div>
    <div>
      <h3>Contact</h3>
      <a href="tel:+1234567890">+123-456-7890</a>
      <a href="mailto:Info@Example.Com">Info@Example.Com</a>
      <p>12 Anywhere St., Any City,<br />ST 12345</p>
    </div>
    <div class="footer-info">
      <h3>Information</h3>
      <p>
        Discover fragrances that express who you are. From timeless classics
        to modern blends, explore a curated collection of perfumes crafted to
        leave a lasting impression.
      </p>
    </div>
  </div>

  <div class="shell footer-bottom">
    <a href="#">Shipping &amp; Refund Policy</a>
    <a href="#">Terms &amp; Conditions</a>
    <a href="./privacy-policy.php">Privacy &amp; Policy</a>
  </div>
</footer>

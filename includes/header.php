<?php
$navContext = $navContext ?? 'inner';
$navActive = $navActive ?? '';
$accountAuthModal = (bool) ($accountAuthModal ?? true);
?>
<nav class="nav shell">
  <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-menu" aria-label="Toggle navigation">
    <span></span>
    <span></span>
  </button>

  <?php if ($navContext === 'home'): ?>
  <a class="brand" href="#home" aria-label="Lazzaro home">
    <span class="brand-main">LAZZARO</span>
    <span class="brand-sub">LAURELS</span>
  </a>
  <?php else: ?>
  <a class="brand" href="./index.php" aria-label="Lazzaro home">
    <span class="brand-main">LAZZARO</span>
    <span class="brand-sub">LAURELS</span>
  </a>
  <?php endif; ?>

  <div class="nav-menu" id="nav-menu">
    <div class="nav-links">
      <?php if ($navContext === 'home'): ?>
      <a class="nav-link is-active" href="#home">HOME</a>
      <a class="nav-link" href="./about.php">ABOUT US</a>
      <div class="nav-item has-dropdown">
        <a class="nav-link nav-link-dropdown" href="./products.php">
          PRODUCT
          <span class="nav-caret" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="m7 10 5 5 5-5" />
            </svg>
          </span>
        </a>
        <div class="nav-dropdown">
          <a href="./products.php?category=him">FOR HIM</a>
          <a href="./products.php?category=her">FOR HER</a>
          <a href="./products.php?category=unisex">UNISEX</a>
        </div>
      </div>
      <?php else: ?>
      <a class="nav-link<?= $navActive === 'home' ? ' is-active' : '' ?>" href="./index.php">Home</a>
      <a class="nav-link<?= $navActive === 'about' ? ' is-active' : '' ?>" href="./about.php">About Us</a>
      <div class="nav-item has-dropdown">
        <a class="nav-link nav-link-dropdown<?= $navActive === 'products' ? ' is-active' : '' ?>" href="./products.php">
          Product
          <span class="nav-caret" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="m7 10 5 5 5-5" />
            </svg>
          </span>
        </a>
        <div class="nav-dropdown">
          <a href="./products.php?category=him">For Him</a>
          <a href="./products.php?category=her">For Her</a>
          <a href="./products.php?category=unisex">Unisex</a>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <div class="nav-icons" aria-label="Shopping and account">
      <a href="./cart.php" class="icon-button" aria-label="Cart">
        <span class="badge" data-count="0"></span>
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M6 7h13l-1.3 7.6a2 2 0 0 1-2 1.7H9a2 2 0 0 1-2-1.7L5.2 4.8A1 1 0 0 0 4.2 4H3" />
          <path d="M9 20a1 1 0 1 0 0 .01M16 20a1 1 0 1 0 0 .01" />
        </svg>
      </a>
      <?php if ($accountAuthModal): ?>
      <a href="./account.php" class="icon-button" aria-label="Account" data-open-auth>
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Z" />
          <path d="M5 20a7 7 0 0 1 14 0" />
        </svg>
      </a>
      <?php else: ?>
      <a href="./account.php" class="icon-button" aria-label="Account">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Z" />
          <path d="M5 20a7 7 0 0 1 14 0" />
        </svg>
      </a>
      <?php endif; ?>
    </div>
  </div>
</nav>

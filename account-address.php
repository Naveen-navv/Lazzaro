<?php
$pageTitle = "My Address | Lazzaro Laurels";
$pageDescription = "Add a new Lazzaro Laurels address on a separate account page.";
$bodyClass = "account-page-body";
$navContext = "inner";
$navActive = "";
$footerContext = "inner";
$accountAuthModal = false;
require __DIR__ . '/includes/head.php';
?>
<header class="account-hero" id="top">
<?php require __DIR__ . '/includes/header.php'; ?>

<div class="shell account-hero-grid"><div class="account-hero-copy"><h1>My Account</h1></div><div class="account-hero-visual"></div></div>

</header>

<main class="account-page shell" data-account-shell-tab="address">
      <section class="account-layout">
        <aside class="account-sidebar">
          <a class="account-nav-btn" href="./account.php">Account Details</a>
          <a class="account-nav-btn" href="./account.php">Orders</a>
          <a class="account-nav-btn is-active" href="./account.php">My Address</a>
        </aside>

        <div class="account-content">
          <section class="account-panel is-active">
            <h2>My Address</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="address-form-wrap address-form-page">
              <div class="account-form-grid two-col">
                <label><input type="text" placeholder="Your Name" aria-label="Name (required)" /></label>
                <label><input type="text" placeholder="Your Mobile Number" aria-label="Mobile Number (required)" autocomplete="tel" /></label>
                <label><input type="text" placeholder="Your Address Line 2" aria-label="Address Line 2" /></label>
                <label><input type="text" placeholder="Your Address Line 1" aria-label="Address Line 1" /></label>
              </div>
              <div class="account-form-grid three-col">
                <label><input type="text" placeholder="Your City" aria-label="City" /></label>
                <label><input type="text" placeholder="Your Postal Code" aria-label="Postal Code" /></label>
                <label>
                  <select id="addr-state" name="state" aria-label="State">
                    <option value="Tamil Nadu" selected>Tamil Nadu</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                  </select>
                </label>
              </div>
            </div>
            <a class="detail-secondary add-address-btn" href="./account.php">Save Address <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8" /></svg></a>
          </section>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/foot.php'; ?>

<?php
$pageTitle = "My Account | Lazzaro Laurels";
$pageDescription = "Manage your Lazzaro Laurels account details, orders, and saved addresses.";
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

<main class="account-page shell" data-account-shell-tab="details">
      <section class="account-layout">
        <aside class="account-sidebar">
          <button class="account-nav-btn is-active" type="button" data-account-tab="details">Account Details</button>
          <button class="account-nav-btn" type="button" data-account-tab="orders">Orders</button>
          <button class="account-nav-btn" type="button" data-account-tab="address">My Address</button>
        </aside>

        <div class="account-content">
          <section class="account-panel is-active" data-account-panel="details">
            <h2>Account Details</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="account-form-grid two-col">
              <label><input type="text" placeholder="Your First Name" aria-label="Name (required)" /></label>
              <label><input type="text" placeholder="Your Last Name" aria-label="Last Name" /></label>
              <label><input type="email" placeholder="Your Email" aria-label="Email (required)" autocomplete="email" /></label>
              <label><input type="text" placeholder="Your Phone" aria-label="Phone number (required)" autocomplete="tel" /></label>
            </div>
          </section>

          <section class="account-panel" data-account-panel="orders">
            <h2>Orders</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="account-table-wrap">
              <table class="account-orders-table">
                <thead>
                  <tr><th>Order ID</th><th>Qty</th><th>Price</th><th>Date</th><th>Status</th></tr>
                </thead>
                <tbody>
                  <tr><td>Lazzaro8943</td><td>2</td><td>₹5,172</td><td>Oct 10 2024</td><td>Delivered</td></tr>
                  <tr><td>Lazzaro9574</td><td>1</td><td>₹772</td><td>Oct 10 2024</td><td>Dispatched</td></tr>
                  <tr><td>Lazzaro10075</td><td>1</td><td>₹3,522</td><td>Oct 14 2024</td><td>Confirmed</td></tr>
                </tbody>
              </table>
            </div>
          </section>

          <section class="account-panel" data-account-panel="address">
            <h2>My Address</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="address-card-list">
              <article class="address-card">
                <div>
                  <h3>Ajay CJ</h3>
                  <p>Dummy address 1, Dummy address 2, Chennai - 600001</p>
                  <p>India.</p>
                  <p>+(173) 518-7XXXX</p>
                </div>
                <a href="./account-address.php">Edit</a>
              </article>
              <article class="address-card">
                <div>
                  <h3>Ajay CJ</h3>
                  <p>Dummy address 1, Dummy address 2, Chennai - 600001</p>
                  <p>India.</p>
                  <p>+(173) 518-7XXXX</p>
                </div>
                <a href="./account-address.php">Edit</a>
              </article>
            </div>
            <a class="detail-secondary add-address-btn" href="./account-address.php">Add New Address <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8" /></svg></a>

            <div class="address-form-wrap" id="address-form" style="display:none;">
              <h3 class="address-form-title">Add New Address</h3>
              <div class="account-form-grid two-col">
                <label><span>Full Name*</span><input type="text" placeholder="Full Name" id="addr-name" /></label>
                <label><span>Phone*</span><input type="text" placeholder="Phone Number" id="addr-phone" /></label>
                <label class="full-width"><span>Address Line 1*</span><input type="text" placeholder="Street address, P.O. Box" id="addr-line1" /></label>
                <label class="full-width"><span>Address Line 2</span><input type="text" placeholder="Apartment, suite, unit, etc." id="addr-line2" /></label>
              </div>
              <div class="account-form-grid three-col">
                <label><span>City*</span><input type="text" placeholder="City" id="addr-city" /></label>
                <label><span>Pincode*</span><input type="text" placeholder="Pincode" id="addr-pincode" /></label>
                <label><span>State*</span>
                  <select id="addr-state" name="state" required aria-label="State">
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
              <div class="account-form-grid">
                <label class="full-width"><span>Country*</span><input type="text" placeholder="Country" value="India" id="addr-country" /></label>
              </div>
              <div class="address-form-actions">
                <button class="button-dark" type="button" id="addr-save">Save Address</button>
                <button class="button-light" type="button" id="addr-cancel">Cancel</button>
              </div>
            </div>
          </section>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/foot.php'; ?>

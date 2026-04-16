<?php
$pageTitle = "Checkout | Lazzaro Laurels";
$pageDescription = "Complete your Lazzaro Laurels purchase with shipping details and order summary.";
$navContext = "inner";
$navActive = "";
$footerContext = "inner";
require __DIR__ . '/includes/head.php';
?>
<header class="commerce-hero checkout-hero" id="top">
<?php require __DIR__ . '/includes/header.php'; ?>

<div class="shell commerce-hero-grid"><h1>Checkout</h1></div>

</header>

<main class="checkout-page shell">
      <h2>Checkout</h2>
      <section class="checkout-layout">
        <div class="checkout-main-column">
          <form class="checkout-card shipping-card" id="checkout-shipping-form">
            <div class="checkout-card-head">
              <h3>Shipping Address</h3>
              <a href="#">Change the Address</a>
            </div>
            <div class="checkout-form-grid two-col">
              <label><span>Name*</span><input type="text" name="shipping_name" placeholder="Your Name" autocomplete="name" /></label>
              <label><span>Mobile Number*</span><input type="text" name="shipping_phone" placeholder="Your Mobile Number" autocomplete="tel" /></label>
              <label><span>Address Line 2</span><input type="text" name="shipping_line2" placeholder="Your Address Line 2" autocomplete="address-line2" /></label>
              <label><span>Address Line 1</span><input type="text" name="shipping_line1" placeholder="Your Address Line 1" autocomplete="address-line1" /></label>
            </div>
            <div class="checkout-form-grid three-col">
              <label><span>City</span><input type="text" name="shipping_city" placeholder="Your City" autocomplete="address-level2" /></label>
              <label><span>Postal Code</span><input type="text" name="shipping_postal" placeholder="Your Postal Code" autocomplete="postal-code" /></label>
              <label><span>State</span>
                <select id="checkout-state" name="shipping_state" aria-label="Shipping state">
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
            <div class="summary-divider"></div>
            <div class="billing-block">
              <h3 id="checkout-billing-heading">Billing Address</h3>
              <fieldset class="checkout-billing-options" aria-labelledby="checkout-billing-heading">
                <legend class="checkout-billing-legend-sr">How should we use your billing address?</legend>
                <label class="checkout-billing-option">
                  <input type="radio" name="billing_address_mode" value="same" checked aria-controls="checkout-billing-form" />
                  <span>Same as shipping address</span>
                </label>
                <label class="checkout-billing-option">
                  <input type="radio" name="billing_address_mode" value="different" aria-controls="checkout-billing-form" />
                  <span>Use a different billing address</span>
                </label>
              </fieldset>
            </div>
          </form>

          <form class="checkout-card billing-card" id="checkout-billing-form" hidden aria-hidden="true">
            <div class="checkout-card-head">
              <h3>Billing Address</h3>
              <a href="#">Change the Address</a>
            </div>
            <div class="checkout-form-grid two-col">
              <label><span>Name*</span><input type="text" name="billing_name" placeholder="Your Name" autocomplete="name" /></label>
              <label><span>Mobile Number*</span><input type="text" name="billing_phone" placeholder="Your Mobile Number" autocomplete="tel" /></label>
              <label><span>Address Line 2</span><input type="text" name="billing_line2" placeholder="Your Address Line 2" autocomplete="address-line2" /></label>
              <label><span>Address Line 1</span><input type="text" name="billing_line1" placeholder="Your Address Line 1" autocomplete="address-line1" /></label>
            </div>
            <div class="checkout-form-grid three-col">
              <label><span>City</span><input type="text" name="billing_city" placeholder="Your City" autocomplete="address-level2" /></label>
              <label><span>Postal Code</span><input type="text" name="billing_postal" placeholder="Your Postal Code" autocomplete="postal-code" /></label>
              <label><span>State</span>
                <select id="checkout-billing-state" name="billing_state" aria-label="Billing state">
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
          </form>
        </div>

        <aside class="checkout-card summary-card-large">
          <a class="detail-secondary place-order-btn" href="#">Place The Order <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8" /></svg></a>
          <p class="checkout-terms">By placing your order, you agree to our company Privacy policy and Conditions of use.</p>
          <div class="summary-divider"></div>
          <h3 class="checkout-order-summary-heading">Order Summary</h3>
          <div class="summary-row"><span>Items (3)</span><strong>₹565</strong></div>
          <div class="summary-row summary-row-discount"><span>Discount (-20%)</span><strong>-₹113</strong></div>
          <div class="summary-divider"></div>
          <div class="summary-row summary-total"><span>Total</span><strong>₹467</strong></div>
        </aside>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/foot.php'; ?>

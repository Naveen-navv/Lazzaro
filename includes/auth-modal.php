<div class="auth-modal" id="auth-modal" aria-hidden="true">
  <div class="auth-backdrop" data-close-auth="true"></div>
  <div class="auth-dialog" role="dialog" aria-modal="true" aria-labelledby="auth-title">
    <button class="auth-close" type="button" aria-label="Close authentication modal" data-close-auth="true">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M6 6 18 18" />
        <path d="M18 6 6 18" />
      </svg>
    </button>
    <div class="auth-visual">
      <img src="./assets/auth-img.png" alt="Lazzaro authentication" />
    </div>
    <div class="auth-panel">
      <section class="auth-view is-active" data-auth-view="signin">
        <h2 id="auth-title">Welcome Back</h2>
        <p>Sign in to your account to continue.</p>
        <form class="auth-form">
          <label><input type="email" placeholder="Email-ID" aria-label="Email-ID" autocomplete="email" /></label>
          <label><span class="auth-input-wrap"><input type="password" placeholder="Password" aria-label="Password" autocomplete="current-password" /><button class="password-toggle" type="button" aria-label="Show password"><svg class="icon-eye" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6-10-6-10-6Z" /><circle cx="12" cy="12" r="3" /></svg><svg class="icon-eye-off" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 3 21 21" /><path d="M10.6 10.7A3 3 0 0 0 13.3 13.4" /><path d="M9.9 5.1A12.5 12.5 0 0 1 12 5c6.5 0 10 7 10 7a17.6 17.6 0 0 1-4.2 4.8" /><path d="M6.7 6.7A17.1 17.1 0 0 0 2 12s3.5 7 10 7a11.9 11.9 0 0 0 4-.7" /></svg></button></span></label>
          <a href="#" class="auth-inline-link auth-align-right" data-auth-switch="forgot">Forgot Password?</a>
          <button class="auth-submit" type="button">Sign In <span>&rarr;</span></button>
        </form>
        <p class="auth-footer-copy"><span class="auth-footer-lead">Don't have an account? </span><a href="#" data-auth-switch="signup">Sign up</a></p>
      </section>

      <section class="auth-view" data-auth-view="signup">
        <h2>Create Your Account</h2>
        <form class="auth-form auth-form-signup">
          <div class="auth-grid-two">
            <label><input type="text" placeholder="First Name" aria-label="First Name (required)" autocomplete="given-name" /></label>
            <label><input type="text" placeholder="Last Name" aria-label="Last Name" autocomplete="family-name" /></label>
          </div>
          <label><input type="email" placeholder="Email-ID" aria-label="Email-ID (required)" autocomplete="email" /></label>
          <label><input type="text" placeholder="Mobile Number" aria-label="Mobile Number (required)" autocomplete="tel" /></label>
          <label><span class="auth-input-wrap"><input type="password" placeholder="Password" aria-label="Password (required)" autocomplete="new-password" /><button class="password-toggle" type="button" aria-label="Show password"><svg class="icon-eye" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6-10-6-10-6Z" /><circle cx="12" cy="12" r="3" /></svg><svg class="icon-eye-off" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 3 21 21" /><path d="M10.6 10.7A3 3 0 0 0 13.3 13.4" /><path d="M9.9 5.1A12.5 12.5 0 0 1 12 5c6.5 0 10 7 10 7a17.6 17.6 0 0 1-4.2 4.8" /><path d="M6.7 6.7A17.1 17.1 0 0 0 2 12s3.5 7 10 7a11.9 11.9 0 0 0 4-.7" /></svg></button></span></label>
          <label><span class="auth-input-wrap"><input type="password" placeholder="Confirm Password" aria-label="Confirm Password (required)" autocomplete="new-password" /><button class="password-toggle" type="button" aria-label="Show password"><svg class="icon-eye" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6-10-6-10-6Z" /><circle cx="12" cy="12" r="3" /></svg><svg class="icon-eye-off" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 3 21 21" /><path d="M10.6 10.7A3 3 0 0 0 13.3 13.4" /><path d="M9.9 5.1A12.5 12.5 0 0 1 12 5c6.5 0 10 7 10 7a17.6 17.6 0 0 1-4.2 4.8" /><path d="M6.7 6.7A17.1 17.1 0 0 0 2 12s3.5 7 10 7a11.9 11.9 0 0 0 4-.7" /></svg></button></span></label>
          <button class="auth-submit" type="button">Sign Up <span>&rarr;</span></button>
        </form>
        <p class="auth-footer-copy"><span class="auth-footer-lead">Already have an account? </span><a href="#" data-auth-switch="signin">Sign in</a></p>
      </section>

      <section class="auth-view" data-auth-view="forgot">
        <h2>Forgot Your Password?</h2>
        <p>No worries! Enter your email address and we'll send you a link to reset your password.</p>
        <form class="auth-form">
          <label><input type="email" placeholder="Email-ID" aria-label="Email-ID" autocomplete="email" /></label>
          <button class="auth-submit" type="button">Send Reset Link <span>&rarr;</span></button>
        </form>
        <p class="auth-footer-copy auth-footer-copy--back">
          <a href="#" class="auth-back-to-signin" data-auth-switch="signin"><span class="auth-back-prefix">Back to </span><span class="auth-back-em">sign in</span></a>
        </p>
      </section>
    </div>
  </div>
</div>

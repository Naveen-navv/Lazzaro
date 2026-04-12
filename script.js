const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');

if (navToggle && navMenu) {
  navToggle.addEventListener('click', () => {
    const isOpen = navMenu.classList.toggle('is-open');
    navToggle.setAttribute('aria-expanded', String(isOpen));
  });

  navMenu.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('is-open');
      navToggle.setAttribute('aria-expanded', 'false');
    });
  });
}

const heroSlides = Array.from(document.querySelectorAll('.hero-slide'));
let heroIndex = 0;
let heroTimer;

function renderHeroSlide(index) {
  heroSlides.forEach((slide, i) => {
    slide.classList.toggle('is-active', i === index);
  });
}

function goHeroSlide(direction) {
  heroIndex = (heroIndex + direction + heroSlides.length) % heroSlides.length;
  renderHeroSlide(heroIndex);
}

function restartHeroSlider() {
  window.clearInterval(heroTimer);
  heroTimer = window.setInterval(() => goHeroSlide(1), 6500);
}

if (heroSlides.length) {
  renderHeroSlide(heroIndex);
  restartHeroSlider();
}

const showcaseWrapper = document.querySelector('#showcase-wrapper');
const showcaseSlider = document.querySelector('#showcase-slider');
if (showcaseSlider && showcaseWrapper) {
  const showcaseSlides = Array.from(showcaseSlider.querySelectorAll('.showcase-slide'));
  let showcaseIndex = 0;
  let showcaseTimer;

  function renderShowcase() {
    showcaseSlider.style.transform = 'translateX(-' + (showcaseIndex * 100) + '%)';
  }

  function goShowcase(direction) {
    showcaseIndex = (showcaseIndex + direction + showcaseSlides.length) % showcaseSlides.length;
    renderShowcase();
  }

  function restartShowcase() {
    window.clearInterval(showcaseTimer);
    showcaseTimer = window.setInterval(() => goShowcase(1), 5000);
  }

  showcaseWrapper.addEventListener('click', (e) => {
    const btn = e.target.closest('.showcase-prev, .showcase-next');
    if (!btn) return;
    goShowcase(btn.classList.contains('showcase-prev') ? -1 : 1);
    restartShowcase();
  });

  renderShowcase();
  restartShowcase();
}

const heroWrapper = document.querySelector('.hero-slider');
if (heroWrapper) {
  heroWrapper.addEventListener('click', (e) => {
    const btn = e.target.closest('.slider-prev, .slider-next');
    if (!btn) return;
    goHeroSlide(btn.classList.contains('slider-prev') ? -1 : 1);
    restartHeroSlider();
  });
}

const faqItems = Array.from(document.querySelectorAll('.faq-item'));
faqItems.forEach((item) => {
  const trigger = item.querySelector('.faq-trigger');
  const symbol = item.querySelector('.faq-symbol');
  if (!trigger || !symbol) {
    return;
  }

  trigger.addEventListener('click', () => {
    const isOpen = item.classList.contains('is-open');
    faqItems.forEach((faqItem) => {
      faqItem.classList.remove('is-open');
      const faqTrigger = faqItem.querySelector('.faq-trigger');
      const faqSymbol = faqItem.querySelector('.faq-symbol');
      if (faqTrigger) {
        faqTrigger.setAttribute('aria-expanded', 'false');
      }
      if (faqSymbol) {
        faqSymbol.textContent = '+';
      }
    });

    if (!isOpen) {
      item.classList.add('is-open');
      trigger.setAttribute('aria-expanded', 'true');
      symbol.textContent = '-';
    }
  });
});


document.querySelectorAll('.qty-btn').forEach((button) => {
  button.addEventListener('click', () => {
    const pill = button.closest('.quantity-pill');
    if (!pill) return;
    const val = pill.querySelector('.qty-value');
    if (!val) return;
    const current = Number(val.textContent || '1');
    const next = button.dataset.qty === 'increase' ? current + 1 : Math.max(1, current - 1);
    val.textContent = String(next);
  });
});

const sizeChips = Array.from(document.querySelectorAll('.size-chip'));
sizeChips.forEach((chip) => {
  chip.addEventListener('click', () => {
    sizeChips.forEach((item) => item.classList.remove('is-active'));
    chip.classList.add('is-active');
  });
});

const detailTabs = Array.from(document.querySelectorAll('.detail-tab'));
const detailPanels = Array.from(document.querySelectorAll('.detail-tab-panel'));
detailTabs.forEach((tab) => {
  tab.addEventListener('click', () => {
    const target = tab.dataset.tabTarget;
    detailTabs.forEach((item) => item.classList.remove('is-active'));
    detailPanels.forEach((panel) => {
      panel.classList.toggle('is-active', panel.dataset.tabPanel === target);
    });
    tab.classList.add('is-active');
  });
});

const checkoutBillingForm = document.querySelector('#checkout-billing-form');
const checkoutBillingModeRadios = Array.from(document.querySelectorAll('input[name="billing_address_mode"]'));
if (checkoutBillingForm && checkoutBillingModeRadios.length) {
  function syncCheckoutBilling() {
    const selected = checkoutBillingModeRadios.find((r) => r.checked);
    const same = !selected || selected.value === 'same';
    checkoutBillingForm.hidden = same;
    checkoutBillingForm.setAttribute('aria-hidden', same ? 'true' : 'false');
    checkoutBillingForm.querySelectorAll('input, select, textarea, button').forEach((el) => {
      el.disabled = same;
    });
  }
  checkoutBillingModeRadios.forEach((radio) => {
    radio.addEventListener('change', syncCheckoutBilling);
  });
  syncCheckoutBilling();
}

const aboutAccordionLayout = document.querySelector('.about-overview-layout');
if (aboutAccordionLayout) {
  const aboutMain = aboutAccordionLayout.querySelector(':scope > .about-feature-main');
  const aboutSide2 = aboutAccordionLayout.querySelector(':scope > article:nth-child(2)');
  const aboutSide3 = aboutAccordionLayout.querySelector(':scope > article:nth-child(3)');
  const CLS_2 = 'is-accordion-side-2';
  const CLS_3 = 'is-accordion-side-3';
  const leaveDelayMs = 260;
  let leaveTimer;

  function cancelAccordionLeave() {
    window.clearTimeout(leaveTimer);
    leaveTimer = undefined;
  }

  function clearAccordionHover() {
    aboutAccordionLayout.classList.remove(CLS_2, CLS_3);
  }

  function scheduleAccordionLeave() {
    cancelAccordionLeave();
    leaveTimer = window.setTimeout(() => {
      clearAccordionHover();
      leaveTimer = undefined;
    }, leaveDelayMs);
  }

  function accordionLeaveIfOutside(e) {
    const next = e.relatedTarget;
    if (next && aboutAccordionLayout.contains(next)) return;
    scheduleAccordionLeave();
  }

  if (aboutMain) {
    aboutMain.addEventListener('mouseenter', () => {
      cancelAccordionLeave();
      clearAccordionHover();
    });
    aboutMain.addEventListener('mouseleave', accordionLeaveIfOutside);
  }
  if (aboutSide2) {
    aboutSide2.addEventListener('mouseenter', () => {
      cancelAccordionLeave();
      aboutAccordionLayout.classList.remove(CLS_3);
      aboutAccordionLayout.classList.add(CLS_2);
    });
    aboutSide2.addEventListener('mouseleave', accordionLeaveIfOutside);
  }
  if (aboutSide3) {
    aboutSide3.addEventListener('mouseenter', () => {
      cancelAccordionLeave();
      aboutAccordionLayout.classList.remove(CLS_2);
      aboutAccordionLayout.classList.add(CLS_3);
    });
    aboutSide3.addEventListener('mouseleave', accordionLeaveIfOutside);
  }

  aboutAccordionLayout.addEventListener('focusin', (e) => {
    const t = e.target;
    if (!aboutAccordionLayout.contains(t)) return;
    if (aboutMain && (t === aboutMain || aboutMain.contains(t))) {
      cancelAccordionLeave();
      clearAccordionHover();
      return;
    }
    if (aboutSide2 && (t === aboutSide2 || aboutSide2.contains(t))) {
      cancelAccordionLeave();
      aboutAccordionLayout.classList.remove(CLS_3);
      aboutAccordionLayout.classList.add(CLS_2);
      return;
    }
    if (aboutSide3 && (t === aboutSide3 || aboutSide3.contains(t))) {
      cancelAccordionLeave();
      aboutAccordionLayout.classList.remove(CLS_2);
      aboutAccordionLayout.classList.add(CLS_3);
    }
  });

  aboutAccordionLayout.addEventListener('focusout', (e) => {
    const next = e.relatedTarget;
    if (next && aboutAccordionLayout.contains(next)) return;
    cancelAccordionLeave();
    clearAccordionHover();
  });
}

const accountNavButtons = Array.from(document.querySelectorAll('.account-nav-btn'));
const accountPanels = Array.from(document.querySelectorAll('.account-panel'));
accountNavButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const target = button.dataset.accountTab;
    accountNavButtons.forEach((item) => item.classList.remove('is-active'));
    accountPanels.forEach((panel) => {
      panel.classList.toggle('is-active', panel.dataset.accountPanel === target);
    });
    button.classList.add('is-active');
  });
});


const addressForm = document.querySelector('#address-form');
const addressFormTitle = addressForm ? addressForm.querySelector('.address-form-title') : null;
const addAddressBtn = document.querySelector('[data-address-action="add"]');
const addrCancel = document.querySelector('#addr-cancel');
const addrSave = document.querySelector('#addr-save');
let editingCard = null;

function showAddressForm(title) {
  if (!addressForm) return;
  addressFormTitle.textContent = title;
  addressForm.style.display = '';
  addressForm.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function hideAddressForm() {
  if (!addressForm) return;
  addressForm.style.display = 'none';
  editingCard = null;
  addressForm.querySelectorAll('input').forEach((input) => {
    if (input.id === 'addr-country') { input.value = 'India'; return; }
    input.value = '';
  });
  const stateSelect = addressForm.querySelector('#addr-state');
  if (stateSelect && stateSelect.tagName === 'SELECT') {
    stateSelect.value = 'Tamil Nadu';
  }
}

if (addAddressBtn) {
  addAddressBtn.addEventListener('click', () => {
    editingCard = null;
    hideAddressForm();
    showAddressForm('Add New Address');
  });
}

document.querySelectorAll('.address-card button').forEach((btn) => {
  btn.addEventListener('click', () => {
    editingCard = btn.closest('.address-card');
    const card = editingCard;
    const name = card.querySelector('h3') ? card.querySelector('h3').textContent : '';
    const paragraphs = Array.from(card.querySelectorAll('p'));
    const addrText = paragraphs[0] ? paragraphs[0].textContent : '';
    const country = paragraphs[1] ? paragraphs[1].textContent.replace('.', '').trim() : '';
    const phone = paragraphs[2] ? paragraphs[2].textContent.trim() : '';

    const nameInput = document.querySelector('#addr-name');
    const phoneInput = document.querySelector('#addr-phone');
    const line1Input = document.querySelector('#addr-line1');
    const countryInput = document.querySelector('#addr-country');

    if (nameInput) nameInput.value = name;
    if (phoneInput) phoneInput.value = phone;
    if (line1Input) line1Input.value = addrText;
    if (countryInput) countryInput.value = country;

    showAddressForm('Edit Address');
  });
});

document.querySelectorAll('.password-toggle').forEach((toggle) => {
  toggle.addEventListener('click', () => {
    const wrap = toggle.closest('.auth-input-wrap');
    const input = wrap ? wrap.querySelector('input') : null;
    if (!input) return;

    const makeVisible = input.type === 'password';
    input.type = makeVisible ? 'text' : 'password';
    toggle.classList.toggle('is-visible', makeVisible);
    toggle.setAttribute('aria-label', makeVisible ? 'Hide password' : 'Show password');
  });
});

if (addrCancel) {
  addrCancel.addEventListener('click', hideAddressForm);
}

if (addrSave) {
  addrSave.addEventListener('click', () => {
    const name = (document.querySelector('#addr-name') || {}).value || '';
    const phone = (document.querySelector('#addr-phone') || {}).value || '';
    const line1 = (document.querySelector('#addr-line1') || {}).value || '';
    const line2 = (document.querySelector('#addr-line2') || {}).value || '';
    const city = (document.querySelector('#addr-city') || {}).value || '';
    const pincode = (document.querySelector('#addr-pincode') || {}).value || '';
    const state = (document.querySelector('#addr-state') || {}).value || '';
    const country = (document.querySelector('#addr-country') || {}).value || 'India';

    if (!name || !phone || !line1 || !city || !pincode || !state) {
      alert('Please fill all required fields.');
      return;
    }

    const fullAddr = [line1, line2, city + ' - ' + pincode].filter(Boolean).join(', ');

    if (editingCard) {
      editingCard.querySelector('h3').textContent = name;
      const ps = editingCard.querySelectorAll('p');
      if (ps[0]) ps[0].textContent = fullAddr;
      if (ps[1]) ps[1].textContent = state + ', ' + country + '.';
      if (ps[2]) ps[2].textContent = phone;
    } else {
      const list = document.querySelector('.address-card-list');
      if (list) {
        const card = document.createElement('article');
        card.className = 'address-card';
        card.innerHTML = '<div><h3>' + name + '</h3><p>' + fullAddr + '</p><p>' + state + ', ' + country + '.</p><p>' + phone + '</p></div><button type="button">Edit</button>';
        list.appendChild(card);
        card.querySelector('button').addEventListener('click', function () {
          editingCard = card;
          const n = card.querySelector('h3').textContent;
          const paragraphs = Array.from(card.querySelectorAll('p'));
          if (document.querySelector('#addr-name')) document.querySelector('#addr-name').value = n;
          if (document.querySelector('#addr-phone')) document.querySelector('#addr-phone').value = paragraphs[2] ? paragraphs[2].textContent.trim() : '';
          if (document.querySelector('#addr-line1')) document.querySelector('#addr-line1').value = paragraphs[0] ? paragraphs[0].textContent : '';
          if (document.querySelector('#addr-country')) document.querySelector('#addr-country').value = paragraphs[1] ? paragraphs[1].textContent.replace('.', '').split(',').pop().trim() : 'India';
          showAddressForm('Edit Address');
        });
      }
    }

    hideAddressForm();
  });
}

const loadMoreBtn = document.querySelector('.catalog-loadmore');
if (loadMoreBtn) {
  const catalogGrid = document.querySelector('.catalog-grid');
  const allCards = catalogGrid ? Array.from(catalogGrid.querySelectorAll('.product-card')) : [];
  const perPage = 6;
  let shown = perPage;

  allCards.forEach((card, i) => {
    if (i >= perPage) card.style.display = 'none';
  });

  if (allCards.length <= perPage) {
    loadMoreBtn.style.display = 'none';
  }

  loadMoreBtn.addEventListener('click', () => {
    const next = Math.min(shown + perPage, allCards.length);
    for (let i = shown; i < next; i++) {
      allCards[i].style.display = '';
    }
    shown = next;
    if (shown >= allCards.length) {
      loadMoreBtn.style.display = 'none';
    }
  });
}

const authModal = document.querySelector('#auth-modal');
const authViews = Array.from(document.querySelectorAll('.auth-view'));
const authSwitchLinks = Array.from(document.querySelectorAll('[data-auth-switch]'));
const authOpenTriggers = Array.from(document.querySelectorAll('[data-open-auth]'));
const authCloseTriggers = Array.from(document.querySelectorAll('[data-close-auth]'));

function setAuthView(viewName) {
  authViews.forEach((view) => {
    view.classList.toggle('is-active', view.dataset.authView === viewName);
  });
}

function openAuthModal(viewName = 'signin') {
  if (!authModal) return;
  setAuthView(viewName);
  authModal.classList.add('is-open');
  authModal.setAttribute('aria-hidden', 'false');
  document.body.classList.add('auth-open');
}

function closeAuthModal() {
  if (!authModal) return;
  authModal.classList.remove('is-open');
  authModal.setAttribute('aria-hidden', 'true');
  document.body.classList.remove('auth-open');
}

if (authModal) {
  if (window.location.pathname.endsWith('index.html') || window.location.pathname === '/' || window.location.pathname === '') {
    openAuthModal('signin');
  }

  authOpenTriggers.forEach((trigger) => {
    trigger.addEventListener('click', (event) => {
      event.preventDefault();
      openAuthModal('signin');
    });
  });

  authCloseTriggers.forEach((trigger) => {
    trigger.addEventListener('click', (event) => {
      event.preventDefault();
      closeAuthModal();
    });
  });

  authModal.addEventListener('click', (event) => {
    const target = event.target;
    if (!(target instanceof Element)) return;
    if (target.closest('[data-close-auth]')) {
      event.preventDefault();
      closeAuthModal();
    }
  });

  authSwitchLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
      event.preventDefault();
      setAuthView(link.dataset.authSwitch || 'signin');
    });
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeAuthModal();
    }
  });
}

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

const featureSection = document.querySelector('.feature-section');
if (featureSection) {
  const featureCards = Array.from(featureSection.querySelectorAll('.feature-card'));
  const featurePrev = featureSection.querySelector('.feature-nav-prev');
  const featureNext = featureSection.querySelector('.feature-nav-next');
  const summaryIndexEl = featureSection.querySelector('.summary-index');
  const summaryHeadingEl = featureSection.querySelector('.feature-summary h3');
  const summaryBodyEl = featureSection.querySelector('.summary-text-body');

  function formatFeatureIndex(i) {
    return '(' + String(i + 1).padStart(2, '0') + ')';
  }

  let featureSlideIndex = Math.max(
    0,
    featureCards.findIndex((card) => card.classList.contains('active'))
  );

  function syncFeatureNavButtons() {
    const last = featureCards.length - 1;
    if (featurePrev) {
      featurePrev.disabled = last < 1 || featureSlideIndex === 0;
    }
    if (featureNext) {
      featureNext.disabled = last < 1 || featureSlideIndex === last;
    }
  }

  function setFeatureSlide(index) {
    if (!featureCards.length) return;
    const last = featureCards.length - 1;
    featureSlideIndex = Math.max(0, Math.min(last, index));
    const active = featureCards[featureSlideIndex];
    featureCards.forEach((card, i) => {
      card.classList.toggle('active', i === featureSlideIndex);
    });
    if (summaryIndexEl) summaryIndexEl.textContent = formatFeatureIndex(featureSlideIndex);
    if (summaryHeadingEl) summaryHeadingEl.textContent = active.dataset.featureHeading || '';
    if (summaryBodyEl) summaryBodyEl.textContent = active.dataset.featureSummary || '';
    syncFeatureNavButtons();
  }

  featurePrev?.addEventListener('click', () => {
    setFeatureSlide(featureSlideIndex - 1);
  });
  featureNext?.addEventListener('click', () => {
    setFeatureSlide(featureSlideIndex + 1);
  });

  featureCards.forEach((card, i) => {
    card.addEventListener('click', () => {
      setFeatureSlide(i);
    });
  });

  setFeatureSlide(featureSlideIndex);
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
  const aboutSideCards = Array.from(aboutAccordionLayout.querySelectorAll(':scope > .about-side-card'));
  const aboutSide2 = aboutSideCards[0];
  const aboutSide3 = aboutSideCards[1];
  const CLS_2 = 'is-accordion-side-2';
  const CLS_3 = 'is-accordion-side-3';
  const leaveDelayMs = 260;
  let leaveTimer;
  let hoverCol = null;

  function cancelAccordionLeave() {
    window.clearTimeout(leaveTimer);
    leaveTimer = undefined;
  }

  function clearAccordionHover() {
    aboutAccordionLayout.classList.remove(CLS_2, CLS_3);
    hoverCol = null;
  }

  function scheduleAccordionLeave() {
    cancelAccordionLeave();
    leaveTimer = window.setTimeout(() => {
      clearAccordionHover();
      leaveTimer = undefined;
    }, leaveDelayMs);
  }

  function panelHitByPoint(clientX, clientY) {
    const stack = document.elementsFromPoint(clientX, clientY);
    let hitMain = false;
    let hit2 = false;
    let hit3 = false;
    for (let i = 0; i < stack.length; i++) {
      const el = stack[i];
      if (!(el instanceof Element)) continue;
      if (aboutMain && (el === aboutMain || aboutMain.contains(el))) hitMain = true;
      if (aboutSide2 && (el === aboutSide2 || aboutSide2.contains(el))) hit2 = true;
      if (aboutSide3 && (el === aboutSide3 || aboutSide3.contains(el))) hit3 = true;
    }
    if (hitMain) return 'main';
    /* When columns overlap during flex transitions, prefer the left strip (2) over (3). */
    if (hit2 && hit3) return '2';
    if (hit2) return '2';
    if (hit3) return '3';
    return null;
  }

  function applyAccordionHoverCol(col) {
    cancelAccordionLeave();
    if (col == null) {
      scheduleAccordionLeave();
      return;
    }
    if (col === hoverCol) return;

    hoverCol = col;
    if (col === 'main') {
      aboutAccordionLayout.classList.remove(CLS_2, CLS_3);
      return;
    }
    if (col === '2') {
      aboutAccordionLayout.classList.remove(CLS_3);
      aboutAccordionLayout.classList.add(CLS_2);
      return;
    }
    if (col === '3') {
      aboutAccordionLayout.classList.remove(CLS_2);
      aboutAccordionLayout.classList.add(CLS_3);
    }
  }

  aboutAccordionLayout.addEventListener(
    'pointermove',
    (e) => {
      if (e.pointerType !== 'mouse') return;
      applyAccordionHoverCol(panelHitByPoint(e.clientX, e.clientY));
    },
    { passive: true }
  );

  aboutAccordionLayout.addEventListener('pointerleave', (e) => {
    if (e.pointerType !== 'mouse') return;
    const next = e.relatedTarget;
    if (next instanceof Node && aboutAccordionLayout.contains(next)) return;
    scheduleAccordionLeave();
  });

  aboutAccordionLayout.addEventListener('focusin', (e) => {
    const t = e.target;
    if (!aboutAccordionLayout.contains(t)) return;
    if (aboutMain && (t === aboutMain || aboutMain.contains(t))) {
      cancelAccordionLeave();
      aboutAccordionLayout.classList.remove(CLS_2, CLS_3);
      hoverCol = 'main';
      return;
    }
    if (aboutSide2 && (t === aboutSide2 || aboutSide2.contains(t))) {
      cancelAccordionLeave();
      aboutAccordionLayout.classList.remove(CLS_3);
      aboutAccordionLayout.classList.add(CLS_2);
      hoverCol = '2';
      return;
    }
    if (aboutSide3 && (t === aboutSide3 || aboutSide3.contains(t))) {
      cancelAccordionLeave();
      aboutAccordionLayout.classList.remove(CLS_2);
      aboutAccordionLayout.classList.add(CLS_3);
      hoverCol = '3';
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
const accountPageMain = document.querySelector('main.account-page.shell');

function syncAccountShellTabFromNav() {
  if (!accountPageMain) return;
  const active = accountNavButtons.find((b) => b.classList.contains('is-active') && b.dataset.accountTab);
  if (active) accountPageMain.dataset.accountShellTab = active.dataset.accountTab;
}

accountNavButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const target = button.dataset.accountTab;
    if (!target) return;
    accountNavButtons.forEach((item) => item.classList.remove('is-active'));
    accountPanels.forEach((panel) => {
      panel.classList.toggle('is-active', panel.dataset.accountPanel === target);
    });
    button.classList.add('is-active');
    if (accountPageMain) accountPageMain.dataset.accountShellTab = target;
  });
});

syncAccountShellTabFromNav();


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

(function initScrollReveal() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  document.querySelectorAll('.product-grid, .collection-grid, .catalog-grid').forEach((grid) => {
    const cards = [...grid.children].filter((c) => c.classList.contains('scroll-reveal--stagger'));
    cards.forEach((card, i) => {
      card.style.setProperty('--reveal-i', String(i));
    });
  });

  const nodes = document.querySelectorAll('.scroll-reveal');
  if (!nodes.length) return;

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-revealed');
        io.unobserve(entry.target);
      });
    },
    { root: null, rootMargin: '0px 0px -10% 0px', threshold: 0.06 }
  );

  nodes.forEach((el) => io.observe(el));
})();

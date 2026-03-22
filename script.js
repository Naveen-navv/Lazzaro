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

const slides = Array.from(document.querySelectorAll('.hero-slide'));
const prevButtons = Array.from(document.querySelectorAll('.slider-prev'));
const nextButtons = Array.from(document.querySelectorAll('.slider-next'));
let currentSlide = 0;
let sliderTimer;

function renderSlide(index) {
  slides.forEach((slide, slideIndex) => {
    slide.classList.toggle('is-active', slideIndex === index);
  });
}

function goToSlide(direction) {
  currentSlide = (currentSlide + direction + slides.length) % slides.length;
  renderSlide(currentSlide);
}

function restartSlider() {
  window.clearInterval(sliderTimer);
  sliderTimer = window.setInterval(() => {
    goToSlide(1);
  }, 6500);
}

if (slides.length) {
  renderSlide(currentSlide);

  if (prevButtons.length && nextButtons.length) {
    prevButtons.forEach((button) => {
      button.addEventListener('click', () => {
        goToSlide(-1);
        restartSlider();
      });
    });

    nextButtons.forEach((button) => {
      button.addEventListener('click', () => {
        goToSlide(1);
        restartSlider();
      });
    });
  }

  restartSlider();
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


const qtyValue = document.querySelector('.qty-value');
document.querySelectorAll('.qty-btn').forEach((button) => {
  button.addEventListener('click', () => {
    if (!qtyValue) return;
    const current = Number(qtyValue.textContent || '1');
    const next = button.dataset.qty === 'increase' ? current + 1 : Math.max(1, current - 1);
    qtyValue.textContent = String(next);
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

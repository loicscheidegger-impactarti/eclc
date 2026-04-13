const toggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('.nav');

if (toggle && nav) {
  toggle.addEventListener('click', () => {
    const open = nav.style.display === 'flex';
    nav.style.display = open ? 'none' : 'flex';
    nav.style.flexDirection = 'column';
    nav.style.gap = '14px';
    toggle.setAttribute('aria-expanded', String(!open));
  });
}

document.addEventListener('DOMContentLoaded', () => {

  const openButtons = document.querySelectorAll('[data-modal]');
  const modals = document.querySelectorAll('.modal');

  openButtons.forEach(button => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-modal');
      const modal = document.getElementById(id);
      if (modal) modal.classList.add('is-active');
    });
  });

  modals.forEach(modal => {
    modal.addEventListener('click', e => {
      if (
        e.target.classList.contains('modal__overlay') ||
        e.target.classList.contains('modal__close')
      ) {
        modal.classList.remove('is-active');
      }
    });
  });

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      modals.forEach(modal => modal.classList.remove('is-active'));
    }
  });

});

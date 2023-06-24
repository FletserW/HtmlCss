function menuShow() {
  let menuMobile = document.querySelector('.mobile-menu');
  let icon = document.querySelector('.icon');

  if (menuMobile.classList.contains('open')) {
    menuMobile.classList.remove('open');
    icon.src = "..\img\menu-toggle-icon.png";
  } else {
    menuMobile.classList.add('open');
    icon.src = "\img\Cross-Icon.png";
  }
}

function instagram() {
  window.alert('Me desculpe, link quebrado no momento');
}


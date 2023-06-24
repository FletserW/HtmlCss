function menuShow() {
  let menuMobile = document.querySelector('.mobile-menu');
  let icon = document.querySelector('.icon');

  if (menuMobile.classList.contains('open')) {
    menuMobile.classList.remove('open');
    icon.src = "assents/img/menu-toggle-icon.png";
  } else {
    menuMobile.classList.add('open');
    icon.src = "assents/img/Cross-Icon.png";
  }
}

window.addEventListener('load', function() { //Execulta a função ao iniciar o site
  var overlay = document.getElementById('overlay'); //Seleciona os itens por meio do id
  var popup = document.getElementById('popup');
  var closeBtn = document.getElementById('close-btn');
  //Torna os itens visiveis
  overlay.style.display = 'block'; //Mudando o estilo da overlay, alternado o tipo de display
  popup.style.display = 'block';
  //Desativa a visualização do itens
  closeBtn.addEventListener('click', function() {
      overlay.style.display = 'none';
      popup.style.display = 'none';
  });
});


function instagram() {
  window.alert('Me desculpe, link quebrado no momento');
}


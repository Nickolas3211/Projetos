$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    dots: true
  });

  $('.galeria').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    dots: false
  });

  $('.promocao').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 7000,
    dots: true
  });

  anime.timeline({loop: true})

  .add({
    targets: '.line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.bolosTitulo',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 2000
  });

var x = document.querySelectorAll('.seg');
var novaImg = '';

for (var i = 0; i < x.length; i++) {
    novoX = x[i];
    novoX.addEventListener('mouseover', function(event){
    });
}
  new WOW().init();

  document.querySelector(".abrir-menu").onclick = function(){
    document.documentElement.classList.add("menu-ativo");
  }

  document.querySelector(".fechar-menu").onclick = function(){
    document.documentElement.classList.remove("menu-ativo");
  }

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


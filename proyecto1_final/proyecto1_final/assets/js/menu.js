
// menu.js - toggle simple para el menú hamburguesa
document.addEventListener('DOMContentLoaded', function(){
  const btns = document.querySelectorAll('.hamburger');
  btns.forEach(btn=>{
    btn.addEventListener('click', function(e){
      const nav = this.closest('.site-nav');
      if(!nav) return;
      const menu = nav.querySelector('.menu');
      if(menu) menu.classList.toggle('show');
    });
  });
  // Cerrar menú al hacer click fuera
  document.addEventListener('click', function(e){
    const openMenus = document.querySelectorAll('.site-nav .menu.show');
    openMenus.forEach(m=>{
      const nav = m.closest('.site-nav');
      if(!nav.contains(e.target)) m.classList.remove('show');
    });
  });
});

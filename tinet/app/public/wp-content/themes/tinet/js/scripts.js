// slider principal
jQuery(document).ready(function(){
    jQuery('.carrusel').bxSlider({
        auto: true,
        speed:1000,
    });
  });

// slider cultura viva
  jQuery(document).ready(function(){
    jQuery('.carrusel-2').bxSlider({
        auto: true,
        speed:3000,
    });
  });


// tabs
var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})


smoothScroll.init({
  selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
  selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
  speed: 1000, // Integer. How fast to complete the scroll in milliseconds
  easing: 'easeInOutCubic', // Easing pattern to use
  offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
  callback: function ( anchor, toggle ) {} // Function to run after scrolling
});



window.addEventListener('DOMContentLoaded', (event) => {
        
  jQuery('.btn-modal').on('click', function(el){

      const id = jQuery(this).data('id');
      console.log(id)

  });

});

//modal
// const openModal = document.querySelector('.hero__cta');
// const modal = document.querySelector('.modal-jobl');
// const closeModal = document.querySelector('.modal__close');

// openModal.addEventListener('click', (e)=>{
//     e.preventDefault();
//     modal.classList.add('modal--show');
// });

// closeModal.addEventListener('click', (e)=>{
//     e.preventDefault();
//     modal.classList.remove('modal--show');
// });       
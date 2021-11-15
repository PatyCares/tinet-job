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

          
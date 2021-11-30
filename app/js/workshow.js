// Shows more or less pictures of works

$(document).ready(function () {
   $('.work-show .onework:lt(8)').show();
   $('.less').hide();
   var items =  24;
   var shown =  8;
   $('.more').click(function () {
      $('.less').show();
      shown = $('.work-show .onework:visible').length+8;
      if(shown < items) {
         $('.work-show .onework:lt('+shown+')').show(300);
      } else {
         $('.work-show .onework:lt('+items+')').show(300);
         $('.more').hide();
      }
   });
   $('.less').click(function () {
      $('.work-show .onework').not(':lt(8)').hide(300);
      $('.more').show();
      $('.less').hide();
   });
});
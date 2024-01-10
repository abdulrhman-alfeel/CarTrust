
const images=[
   {
      id:2,
      Img:"./images/2A4A1724.jpg",
   },
   {
      id:3,
      Img:"./images/2A4A1624~1.jpg",
   },
   {
      id:4,
      Img:"./images/2A4A1245.jpg",
   },
       
   {
      id:5,
      Img:"./images/2A4A1211.jpg",
   }, 
   {
      id:6,
      Img:"./images/khlind.jpg",
   },
       
   {
      id:7,
      Img:"./images/img-9.jpg",
   },
       
   {
      id:8,
      Img:"./images/h7.jpg",
   },
       
   
       
 ]
 
 
 {/* <div class="owl-carousel-info">
 <h4 class="mb-2">
     Candice
     <img src="images/verified.png" class="owl-carousel-verified-image img-fluid" alt="">
 </h4>
 
 <span class="badge">Storytelling</span>
 
 <span class="badge">Business</span>
 </div>
 
 <div class="social-share">
 <ul class="social-icon">
     <li class="social-icon-item">
         <a href="#" class="social-icon-link bi-twitter"></a>
     </li>
 
     <li class="social-icon-item">
         <a href="#" class="social-icon-link bi-facebook"></a>
     </li>
 </ul>
 </div> */}
 
 const scrol =document.querySelector('#owscrol');
 
 images.forEach(pic=>{
   let html = `<div  class="owl-carousel-info-wrap item">
   <img src=${pic.Img}  >
 
  
 </div> `
 scrol.insertAdjacentHTML('afterbegin', html);
   
  
 });
 
 
 
 (function ($) {
   
   "use strict";
 
     // MENU
     $('.navbar-collapse a').on('click',function(){
       $(".navbar-collapse").collapse('hide');
     });
     
     // CUSTOM LINK
     $('.smoothscroll').click(function(){
       var el = $(this).attr('href');
       var elWrapped = $(el);
       var header_height = $('.navbar').height();
   
       scrollToDiv(elWrapped,header_height);
       return false;
   
       function scrollToDiv(element,navheight){
         var offset = element.offset();
         var offsetTop = offset.top;
         var totalScroll = offsetTop-0;
   
         $('body,html').animate({
         scrollTop: totalScroll
         }, 300);
       }
     });
 
     $('.owl-carousel').owlCarousel({
         center: true,
         loop: true,
         margin: 30,
         autoplay: true,
         responsiveClass: true,
         responsive:{
             0:{
                 items: 2,
             },
             767:{
                 items: 3,
             },
             1200:{
                 items: 4,
             }
         }
     });
   
   })(window.jQuery);
 
 
 
 
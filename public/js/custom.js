
const images=[
   {
      id:2,
      Img:"./images/s1.png",
   },
   {
      id:3,
      Img:"./images/s2.png",
   },
   {
      id:4,
      Img:"./images/s3.png",
   },
       
   {
      id:5,
      Img:"./images/s4.png",
   }, 
   {
      id:6,
      Img:"./images/s5.png",
   },
       
   {
      id:7,
      Img:"./images/s6.png",
   },
       
   
   
       
 ]
 
 

 
 const scrol =document.querySelector('#owscrol');
 
 images.forEach(pic=>{
   let html = `
   <div  class="owl-carousel-info-wrap item" style="width:80%;">
   <img src=${pic.Img} width="100%">
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
         center: false,
         loop: false,
         margin: 10,
         autoplay: true,
         responsiveClass: false,
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
 
 
 
 


   const images_posts=[
      {
         id:2,
         titel:` هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة، 
         لقد تم توليد هذا النص من مولد النص العربي 
         حيث يمكنك ان تولد مثل هذا النص او العديد من النصوص الاخرى`,
         Img:"./images/prosonle.png",
         name:'عبدالعزيز محمد السديس',
         reting:5.0
      },
      {
         id:3,
         titel:` هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة، 
         لقد تم توليد هذا النص من مولد النص العربي 
         حيث يمكنك ان تولد مثل هذا النص او العديد من النصوص الاخرى`,
         Img:"./images/prosonle.png",
         name:'ناصر فهد الشهري',
         reting:5.0
      },
      {
         id:4,
         titel:` هذا النص هو مثال لنص يمكن ان يستبدل في نفس المساحة، 
         لقد تم توليد هذا النص من مولد النص العربي 
         حيث يمكنك ان تولد مثل هذا النص او العديد من النصوص الاخرى`,
         Img:"./images/prosonle.png",
         name:'يوسف مصطفى الحسيني',
         reting:5.0
      },
   
      
          
    ]
    
      
   const slider_post = document.querySelector('.slider_posts');
   
   images_posts.forEach(item=>{
      let html_modlue = `
   <a href="#" >
   <div 
      class="post_style slide_one"  >
         <div  class="continer_post">
         <div 
         class="image_post">
         <img src=${item.Img} style="width: 100%; object-fit:cover;">
         </div>
         <div style="flex-direction: column;">
         <h6 class="ml-2 text-right title_posts">${item.name}</h6>
         <div class="continer_star">
      <img src="images/star.png" style="width: 10%;height: 10%;">
      <img src="images/star.png" style="width: 10%;height: 10%;">
      <img src="images/star.png" style="width: 10%;height: 10%;">
      <img src="images/star.png" style="width: 10%;height: 10%;">
      <p style="margin: 5px;">5.0</p>
      </div>
   </div>
         </div>
         <div>
            <p class="text_post">
           ${item.titel}
            </p>
         </div>
      </div>
      </a>
      `
      slider_post.insertAdjacentHTML('afterbegin', html_modlue);
      
   });
   
   
   let currentSlide = 0;
   const slides_tow = document.querySelectorAll('.slide_one');
   function changeSlide() {
    slides_tow[currentSlide].style.opacity = 0;
    currentSlide = (currentSlide + 3) % slides_tow.length;
    slides_tow[currentSlide].style.opacity = 1;
   }
   
   setInterval(changeSlide, 3000); // Change slide every 3 seconds



   
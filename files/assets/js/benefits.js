
let tmp_txt = "";

 $(document).ready(function() {



     $(".benefits-box").click(function() {

         $(".icon_primary").removeClass("icon_primary");

         tmp_txt = ($(this).find('.detail').html());

         $(this).find('img').addClass("icon_primary");


         /*alert($(this).find('.detail').html());*/

         $('#benfits-text').html(tmp_txt).fadeIn(1000);
         /*console.log('TEST' + tmp_txt);*/
     });

     $(".benefits").find(".benefits-box:first-child").ready(function () {
         $(this).click();
         console.log('this')
     })


 });


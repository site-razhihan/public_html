jQuery(document).ready(function () {
  var $img = jQuery('.wplss-logo-slide img');      
  // ждем загрузки картинки браузером
  $img.ready(function(){
      // удаляем атрибуты width и height
      jQuery(this).removeAttr("width")
             .removeAttr("height")
             .css({ width: "", height: "" });
   
      // получаем заветные цифры
      var width  = jQuery(this).width();
      var height = jQuery(this).height();

      var razn = (120-height)/2;
      jQuery(this).css('padding-top', razn+'px');
  });
  jQuery('#menu-we_do li').click(
    function(){
      //jQuery(".sub-menu").css("display", "none");
      jQuery('#menu-we_do li').not(this).removeClass("line_open");
      if(jQuery(this).find(".sub-menu").html() != undefined){
        jQuery(this).toggleClass("line_open");
      }else{
        $links = jQuery(this).find("a").attr('href');
        window.location.href = $links;
      }

      var width_w = jQuery( window ).width();
      var width_menu = jQuery('#menu-we_do').width();
      var width_gr = (width_w-width_menu)/2;
      var pos_el = jQuery(this).offset();
      var width_right = (width_w-pos_el.left);
      var width_all = (width_w-width_right)-width_gr-74;
      //если строка не раскрыта
      if(jQuery(this).hasClass("line_open")){
        jQuery(this).find(".sub-menu").css( "left", -width_all+"px" ); 
        jQuery(this).find("ul li:nth-child(1):before").css( "left", pos_el.left+"px" ); 
      }
    }
  );


});

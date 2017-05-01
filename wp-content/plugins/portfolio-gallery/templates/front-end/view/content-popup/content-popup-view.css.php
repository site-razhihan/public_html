<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<style>
section#huge_it_portfolio_content_<?php echo $portfolioID; ?> {
    position:relative;
    display:block;
}

.portelement_<?php echo $portfolioID; ?> .play-icon.youtube-icon,
.play-icon.youtube-icon {
    background: url(<?php echo  PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/play.youtube.png';?>) center center no-repeat;
    background-size: 30% 30%;
}
.portelement_<?php echo $portfolioID; ?> .play-icon.vimeo-icon,
.play-icon.vimeo-icon {
    background: url(<?php echo  PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/play.vimeo.png';?>) center center no-repeat;
    background-size: 30% 30%;
}

.portelement_<?php echo $portfolioID; ?> .play-icon,.play-icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.portelement_<?php echo $portfolioID; ?> {
    max-width:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_width']+2*$portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_border_width']; ?>px !important;
    width:100%;
    margin:0 0 10px 0;
    background:#<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_background_color']; ?>;
    border:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_border_width']; ?>px solid #<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_border_color']; ?>;
    outline:none;
    box-sizing: border-box;
}

.portelement_<?php echo $portfolioID; ?> .image-block_<?php echo $portfolioID; ?> {
<?php if($portfolio_gallery_get_options['portfolio_gallery_port_natural_size_contentpopup']=='resize'){?>
    position:relative;
    width:100%;
<?php }elseif($portfolio_gallery_get_options['portfolio_gallery_port_natural_size_contentpopup']=='natural'){?>
    position:relative;
    width:100%;
    overflow: hidden;
<?php }?>
    height:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_height']; ?>px !important;
}

.portelement_<?php echo $portfolioID; ?> .image-block_<?php echo $portfolioID; ?> img {
<?php if($portfolio_gallery_get_options['portfolio_gallery_port_natural_size_contentpopup']=='resize'){?>
    margin:0 !important;
    padding:0 !important;
    width:100% !important;
    height:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_height']; ?>px !important;
    display:block;
    border-radius: 0 !important;
    box-shadow: 0 0 0 rgba(0, 0, 0, 0) !important;
<?php }elseif($portfolio_gallery_get_options['portfolio_gallery_port_natural_size_contentpopup']=='natural'){?>
    display:block;
    max-width: none !important;
    border-radius: 0 !important;
    box-shadow: 0 0 0 rgba(0, 0, 0, 0) !important;
<?php }?>
}

.portelement_<?php echo $portfolioID; ?> .image-block_<?php echo $portfolioID; ?> .image-overlay {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: <?php
			list($r,$g,$b) = array_map('hexdec',str_split($portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_overlay_color'],2));
				$titleopacity=$portfolio_gallery_get_options["portfolio_gallery_ht_view2_element_overlay_transparency"]/100;
				echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')  !important';
	?>;
    display:none;
}

.portelement_<?php echo $portfolioID; ?>:hover .image-block_<?php echo $portfolioID; ?>  .image-overlay {
    display:block;
}

.portelement_<?php echo $portfolioID; ?> .image-block_<?php echo $portfolioID; ?> .image-overlay a {
    border:none;
    position:absolute;
    top:0;
    left:0;
    display:block;
    width:100%;
    height:100%;
    background:url('<?php echo  PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/zoom.'.$portfolio_gallery_get_options["portfolio_gallery_ht_view2_zoombutton_style"].'.png'; ?>') center center no-repeat;
}

.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> {
    position:relative;
    height: <?php echo 24+$portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_title_font_size']; ?>px;
    margin: 0;
    border-top:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_border_width']; ?>px solid #<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_border_color']; ?>;
    box-sizing: content-box;
}

.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> h3 {
    position:relative;
    margin:0 !important;
    padding:0 1% 0 1% !important;
    width:90%;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space:nowrap;
    font-weight:normal;
    top: 50%;
    transform: translateY(-50%);
    font-size: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_element_title_font_size"];?>px !important;
    line-height: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_element_title_font_size"]+4;?>px !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_element_title_font_color"];?>;
}

.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> .button-block {
    position:absolute;
    right:0;
    top:0;
    display:none;
    vertical-align:middle;
    height:30px;
    padding:10px 10px 4px 10px;
}
.portelement_<?php echo $portfolioID; ?>:hover .title-block_<?php echo $portfolioID; ?> .button-block {display:block;}

.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> a,.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> a:link,.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> a:visited,
.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> a:hover,.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> a:focus,.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> a:active {
    position:relative;
    display:block;
    vertical-align:middle;
    padding: 3px 10px 3px 10px;
    border-radius:3px;
    font-size:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_element_linkbutton_font_size"];?>px;
    background:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_element_linkbutton_background_color"];?>;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_element_linkbutton_color"];?>;
    text-decoration:none;
    border: none;
    box-shadow: none;
}

/*#####POPUP#####*/

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> {
    position:fixed;
    display:table;
    width:80%;
    top:7%;
    left:7%;
    margin:0 !important;
    list-style:none;
    z-index:999999;
    display:none;
    height:90%;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?>.active {display:table;}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> li.pupup-element {
    position:relative;
    display:none;
    width:100%;
    padding:40px 0 20px 0;
    min-height:100%;
    position:relative;
    background:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_background_color"];?>;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> li.pupup-element.active {
    display:block;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> {
    position:absolute;
    width:100%;
    height:40px;
    top:0;
    left:0;
    z-index:2001;
    background:url('<?php echo  PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/divider.line.png'; ?>') center bottom repeat-x;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .close,#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .close:link, #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .close:visited {
    position:relative;
    float:right;
    width:40px;
    height:40px;
    display:block;
    background:url('<?php echo  PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/close.popup.'.$portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_closebutton_style"].'.png'; ?>') center center no-repeat;
    border-left:1px solid #ccc;
    opacity:.65;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .close:hover, #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .close:focus, #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .close:active {opacity:1;}


#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> li.pupup-element .popup-wrapper_<?php echo $portfolioID; ?> {
    position:relative;
    width:98%;
    height:98%;
    padding:2% 0% 0% 2%;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .image-block_<?php echo $portfolioID; ?> {
    width:55%;
<?php if($portfolio_gallery_get_options['portfolio_gallery_ht_view2_popup_full_width'] == 'off') { echo "height:100%;"; } else {echo "height:100%;";} ?>
    position:relative;
    float:left;
    margin-right:2%;
    border-right:1px solid #ccc;
    min-width:200px;
    min-height:100%;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .image-block_<?php echo $portfolioID; ?> img {
<?php
    if($portfolio_gallery_get_options['portfolio_gallery_ht_view2_popup_full_width'] == 'off') { echo "max-width:100% !important; max-height:100% !important; margin: 0 auto !important; position:relative;"; }
    else { echo "width:100% !important;"; }
?>
    display:block;
    padding:0 !important;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block {
    width:42.8%;
    height: 100%;
    position:relative;
    float:left;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> li.pupup-element .popup-wrapper_<?php echo $portfolioID; ?> .right-block > div {
    padding-top:10px;
    padding-right: 4%;
    margin-bottom:10px;
<?php if($portfolio_gallery_get_options['portfolio_gallery_ht_view2_show_separator_lines']=="on") {?>
    background:url('<?php echo  PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/divider.line.png'; ?>') center top repeat-x;
<?php } ?>
}
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> li.pupup-element .popup-wrapper_<?php echo $portfolioID; ?> .right-block > div:last-child {background:none;}


#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .title {
    position:relative;
    display:block;
    margin:0 0 10px 0 !important;
    font-size:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_title_font_size"];?>px !important;
    line-height:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_title_font_size"]+4;?>px !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_title_font_color"];?>;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description {
    clear:both;
    position:relative;
    text-align:justify;
    font-size:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_description_font_size"];?>px !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_description_color"];?>;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description h1,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description h2,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description h3,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description h4,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description h5,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description h6,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description p,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description strong,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description span {
    padding:2px !important;
    margin:0 !important;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description ul,
#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block .description li {
    padding:2px 0 2px 5px;
    margin:0 0 0 8px;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block ul.thumbs-list_<?php echo $portfolioID; ?> {
    list-style:none;
    display:table;
    position:relative;
    clear:both;
    width:100%;
    margin:0 auto;
    padding:0;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block ul.thumbs-list_<?php echo $portfolioID; ?> li {
    display:block;
    float:left;
    width:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_thumbs_width"];?>px;
    height:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_thumbs_height"];?>px;
    margin:0 2% 5px 1% !important;
    opacity:0.45;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block ul.thumbs-list_<?php echo $portfolioID; ?> li.active,#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block ul.thumbs-list_<?php echo $portfolioID; ?> li:hover {
    opacity:1;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block ul.thumbs-list_<?php echo $portfolioID; ?> li a {
    border:none;
    display:block;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block ul.thumbs-list_<?php echo $portfolioID; ?> li img {
    margin:0 !important;
    padding:0 !important;
    width:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_thumbs_width"];?>px !important;
    height:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_thumbs_height"];?>px !important;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .image-block_<?php echo $portfolioID; ?> iframe  {
    width:100% !important;
    height:95%;
    display:block;


}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .left-change, #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .right-change{
    width: 40px;
    height: 39px;
    font-size: 25px;
    display: inline-block;
    text-align: center;
    border: 1px solid #eee;
    border-bottom: none;
    border-top: none;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .right-change{
    position: relative;
    margin-left: -6px;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .right-change:hover, #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .left-change:hover{
    background: #ddd;
    border-color: #ccc;
    color: #000 !important;
    cursor: pointer;
}

#huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .right-change a, #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .heading-navigation_<?php echo $portfolioID; ?> .left-change a{
    position: absolute;
    transform: translate(-50%, -50%) !important;
    color: #777;
    text-decoration: none;
    width: 12px;
    height: 100%;
    display: inline-block;
    line-height: normal;
    top: 50%;
}


/**/
.pupup-element .button-block {
    position:relative;
}

.pupup-element .button-block a,.pupup-element .button-block a:link,.pupup-element .button-block a:visited{
    position:relative;
    display:inline-block;
    padding:6px 12px;
    background:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_linkbutton_background_color"];?>;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_linkbutton_color"];?>;
    font-size:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_linkbutton_font_size"];?>px;
    text-decoration:none;
}

.pupup-element .button-block a:hover,.pupup-element .button-block a:focus,.pupup-element .button-block a:active {
    background:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_linkbutton_background_hover_color"];?>;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_linkbutton_font_hover_color"];?>;
}


#huge-popup-overlay-portfolio {
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:199;
    background: <?php
			list($r,$g,$b) = array_map('hexdec',str_split($portfolio_gallery_get_options['portfolio_gallery_ht_view2_popup_overlay_color'],2));
				$titleopacity=$portfolio_gallery_get_options["portfolio_gallery_ht_view2_popup_overlay_transparency_color"]/100;
				echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')  !important';
	?>
}


@media only screen and (max-width: 767px) {

    #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> {
        position:absolute;
        left:0;
        top:0;
        width:100%;
        height:auto !important;
        left:0;
    }

    #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> li.pupup-element {
        margin:0;
        height:auto !important;
        position:absolute;
        left:0;
        top:0;
    }

    #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> li.pupup-element .popup-wrapper_<?php echo $portfolioID; ?> {
        height:auto !important;
        overflow-y:auto;
    }


    #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .image-block_<?php echo $portfolioID; ?> {
        width:100%;
        float:none;
        clear:both;
        margin-right:0;
        border-right:0;
    }

    #huge_it_portfolio_popup_list_<?php echo $portfolioID; ?> .popup-wrapper_<?php echo $portfolioID; ?> .right-block {
        width:100%;
        float:none;
        clear:both;
        margin-right:0;
        border-right:0;
    }

    #huge-popup-overlay-portfolio_<?php echo $portfolioID; ?> {
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        z-index:199;
    }

}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> {
    position: relative;
    overflow: hidden;
<?php   if($sortingFloatPopup != 'top'){
            echo 'float:'.$sortingFloatPopup.';';
            echo  "max-width:180px;width:20%;display:inline-block;";
            if($filteringFloatPopup == 'top') echo 'margin-top:40px;';
            if($sortingFloatPopup == 'left') echo 'margin-right: 1%;';
            else echo 'margin-left:1%;';
        }
        else {
            if($portfolioposition == 'on' && ($filteringFloatPopup == 'top' || $filteringFloatPopup == '')) echo 'left:50%; transform:translateX(-50%);';
            if($filteringFloatPopup == 'left') echo 'margin-left:calc( 185px + 1%);';
            echo 'width: auto; margin-bottom: 5px;display:table;';
        }
        if(($sortingFloatPopup == 'left' && $filteringFloatPopup == 'left') || ($sortingFloatPopup == 'right' && $filteringFloatPopup == 'right')){
            echo 'width: 100%;';
        }
?>

<?php
    if($portfolioShowLoading == 'on') echo 'opacity: 0;';
?>
    margin-bottom: 10px;
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul {
    margin: 0 !important;
    padding: 0 !important;
    list-style: none;
<?php if($sortingFloatPopup == 'top') {
      echo "float:left;margin-left:1%;";
      } ?>
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul {
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden;
<?php if($filteringFloatPopup == 'top') {
    echo "float:left;margin-left:1%;";
    } ?>
    width: 100%;
}

<?php if($sortingFloatPopup == 'top') { ?>
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul {
    float: left;
}
<?php } ?>


#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li {
    border-radius: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_sortbutton_border_radius"];?>px;
    list-style-type: none;
    margin: 0 !important;
    padding: 0;
<?php
    if($sortingFloatPopup == "top")
    { echo "float:left !important;margin: 0 8px 4px 0 !important;"; }
    if($sortingFloatPopup == "left" || $sortingFloatPopup == "right")
    { echo 'border-bottom: 1px solid #ccc;'; }
    else
    { echo 'border: 1px solid #ccc;'; }
?>
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li a {
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_sortbutton_background_color"];?> !important;
    font-size:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_sortbutton_font_size"];?>px !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_sortbutton_font_color"];?> !important;
    text-decoration: none;
    cursor: pointer;
    margin: 0 !important;
    display: block;
    padding:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_sortbutton_border_padding"];?>px;
    border-radius: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_sortbutton_border_radius"];?>px;
}

/*#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li:hover {

}*/

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li a:hover {
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_sortbutton_hover_background_color"];?> !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_sortbutton_hover_font_color"];?> !important;
    cursor: pointer;
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> {
    position: relative;
    overflow: hidden;
<?php   if($filteringFloatPopup != 'top'){
            echo 'float:'.$filteringFloatPopup.';';
            echo  "max-width:180px;width:20%;display:inline-block;";
            if($filteringFloatPopup == 'left') echo 'margin-right: 1%;';
            else echo 'margin-left:1%;';
        }
        else {
            if($portfolioposition == 'on' && ($sortingFloatPopup == 'top' || $sortingFloatPopup == '')) echo 'left:50%; transform:translateX(-50%);';
            echo 'width: auto; margin-bottom: 5px;display:table;';
        }
        if(($sortingFloatPopup == 'left' && $filteringFloatPopup == 'left') || ($sortingFloatPopup == 'right' && $filteringFloatPopup == 'right')){
            echo 'width: 100%;';
        }
?>

<?php
    if($portfolioShowLoading == 'on') echo 'opacity: 0;';
?>
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li {
    list-style-type: none;
    border-radius: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_border_radius"];?>px;
<?php
    if($filteringFloatPopup == "top") { echo "float:left !important;margin: 0 8px 4px 0 !important;"; }
    if($filteringFloatPopup == "left" || $filteringFloatPopup == "right")
    { echo 'border-bottom: 1px solid #ccc;'; }
    else echo "border: 1px solid #ccc;";
?>
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a {
    font-size:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_font_size"];?>px !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_font_color"];?> !important;
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_background_color"];?> !important;
    border-radius: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_border_radius"];?>px;
    padding:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_border_padding"];?>px;
    display: block;
    text-decoration: none;
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?>  ul li a:hover {
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_hover_font_color"];?> !important;
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_hover_background_color"];?> !important;
    cursor: pointer
}
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li.active a,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li.active a:link,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li.active a:visited,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?>  ul li.active a:hover,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?>  ul li.active a:focus,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?>  ul li.active a:active {
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_hover_font_color"];?> !important;
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view2_filterbutton_hover_background_color"];?> !important;
    cursor: pointer;
}
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_container_<?php echo $portfolioID; ?> {
    width: 79%;
    max-width: 100% !important;
<?php if(($sortingFloatPopup == "left" && $filteringFloatPopup == "right") || ($sortingFloatPopup == "right" && $filteringFloatPopup == "left"))
    {echo "margin: 0 auto;width:58%;"; }
    if(($filteringFloatPopup == "left" || $filteringFloatPopup == "right" && $sortingFloatPopup == "top") || ($sortingFloatPopup == "left" || $sortingFloatPopup == "right" && $filteringFloatPopup == "top"))
    {echo 'float:left;';}
    if(($portfolioShowSorting == 'off' && $portfolioShowFiltering == 'off') || ($sortingFloatPopup == 'top' && $filteringFloatPopup == 'top') ||
        ($sortingFloatPopup == 'top' && $filteringFloatPopup == '') || ($sortingFloatPopup == '' && $filteringFloatPopup == 'top'))
    {echo 'width:100%;';}
    if($portfolioShowLoading == 'on') echo 'opacity: 0;';
?>
}
@media screen and (max-width: 768px) {

    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a,
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a:link,
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a:visited {
        font-size: 2vw !important;
    }
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li a {
        font-size:2vw !important;
    }

}
@media screen and (max-width: 480px) {
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> {
        float: left;
    }
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> #sort-by{
        float: left;
        width: 100% !important;
    }
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> #port-sort-direction{
        float: left;
        width: 100% !important;
        position: relative;
        padding-left: 31% !important;
        right: 31%;
    }
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a,
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a:link,
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a:visited {
        font-size: 3vw !important;
    }
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li a {
        line-height: 3vw;
        font-size:3vw !important;
    }
}
@media screen and (max-width: 420px) {

    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a,
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a:link,
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a:visited {
        font-size: 4vw !important;
    }
    #huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li a {
        font-size:4vw !important;
    }
}
@media screen and (max-width: <?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view0_block_width']+2*$portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_border_width']+40; ?>px) {
    .portelement_<?php echo $portfolioID; ?>  {
        width:98%;
        margin: 1% !important;
        float: left;
        overflow: hidden;
        outline:none;
        border:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view2_element_border_width']; ?>px solid #<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view0_element_border_color']; ?>;
    }
    .wd-portfolio-panel_<?php echo $portfolioID; ?> {
        width: 100% !important;
    }
}
#huge-it-container-loading-overlay_<?php echo $portfolioID; ?> {
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 1;
    background:  url(<?php echo PORTFOLIO_GALLERY_IMAGES_URL.'/loading/loading-'.$portfolioLoadingIconype.'.svg'; ?>) center top ;
    background-repeat: no-repeat;
    background-size: 60px auto;
<?php if($portfolioShowLoading != 'on') echo 'display:none'; ?>
}
#huge_it_portfolio_options_and_filters_<?php echo $portfolioID; ?>{
    position: relative;
    float: left;
    width: 20%;
    max-width: 180px;
    float:<?php echo $sortingFloatPopup; ?>;
<?php if($sortingFloatPopup == 'left') echo 'margin-right: 1%;';
    else echo 'margin-left:1%;';
?>
}
</style>
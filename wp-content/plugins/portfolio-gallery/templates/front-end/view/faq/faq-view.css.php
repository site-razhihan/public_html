<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<style>
.portelement_<?php echo $portfolioID; ?> {
    background:#<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_element_background_color']?>;
    width:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_block_width']+2*$portfolio_gallery_get_options['portfolio_gallery_ht_view4_element_border_width']; ?>px;
    max-width: calc(100% - 10px);
    height: <?php echo 2*$portfolio_gallery_get_options['portfolio_gallery_ht_view4_element_border_width']+45; ?>px;
    margin: 5px;
    float: left;
    overflow: hidden;
    position: relative;
    outline:none;
    border:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_element_border_width']; ?>px solid #<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_element_border_color']; ?>;
}

.portelement_<?php echo $portfolioID; ?>.large,
.variable-sizes .portelement_<?php echo $portfolioID; ?>.large,
.variable-sizes .portelement_<?php echo $portfolioID; ?>.large.width2.height2 {
    z-index: 10;
}


.title-block_<?php echo $portfolioID; ?> {
    position:relative;
    display:block;
    height:45px;
    padding:10px 0px 0px 0px;
    width: 100%;
}

.title-block_<?php echo $portfolioID; ?> h3 {
    position:relative;
    margin:0px !important;
    padding:0px 5px 0px 5px;
    width:calc(100% - 40px);
    text-overflow: ellipsis;
    overflow: hidden;
    white-space:nowrap;
    font-weight:normal;
    color:#<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_title_font_color']; ?>;
    font-size:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_title_font_size']; ?>px;
    line-height: <?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_title_font_size'] + 4; ?>px !important;
}

.portelement_<?php echo $portfolioID; ?> .title-block_<?php echo $portfolioID; ?> .open-close-button {
    width:20px;
    height:20px;
    position:absolute;
    top:13px;
    right:5px;
    background:url('<?php echo  PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/open-close.'.$portfolio_gallery_get_options['portfolio_gallery_ht_view4_togglebutton_style'].'.png'; ?>') left top no-repeat;
    z-index:5;
    cursor:pointer;
    opacity:0.33;
}

.portelement_<?php echo $portfolioID; ?>:hover .title-block_<?php echo $portfolioID; ?> .open-close-button {opacity:1;}

.portelement_<?php echo $portfolioID; ?>.large .open-close-button {
    background:url('<?php echo  PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/open-close.'.$portfolio_gallery_get_options['portfolio_gallery_ht_view4_togglebutton_style'].'.png'; ?>') left bottom no-repeat;
}

.wd-portfolio-panel_<?php echo $portfolioID; ?> {
    position:relative;
    clear:both;
    display:block;
    width:calc(100% - 10px);
    margin:0px 5px 0px 5px !important;
    padding:0px;
    text-align:left;
    z-index:6;
}

.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> p,.portelement_<?php echo $portfolioID; ?> div.right-block .description-block_<?php echo $portfolioID; ?> * {
    text-align:justify;
    font-size:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_description_font_size']; ?>px;
    color:#<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_description_color']; ?>;
    margin:0px;
    padding:0px;
}

.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> h1,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> h2,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> h3,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> h4,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> h5,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> h6,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> p,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> strong,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> span {
    padding:2px !important;
    margin:0px !important;
}

.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> ul,
.wd-portfolio-panel_<?php echo $portfolioID; ?> .description-block_<?php echo $portfolioID; ?> li {
    padding:2px 0px 2px 5px;
    margin:0px 0px 0px 8px;
}

.wd-portfolio-panel_<?php echo $portfolioID; ?> > div {
    padding-top:10px;
    margin-bottom:10px;
<?php if($portfolio_gallery_get_options['portfolio_gallery_ht_view4_show_separator_lines']=="on") {?>
    background:url('<?php echo PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/divider.line.png'; ?>') center top repeat-x;
<?php } ?>
}

.wd-portfolio-panel_<?php echo $portfolioID; ?> .button-block {
    padding:10px 0px 10px 0px;
}

.wd-portfolio-panel_<?php echo $portfolioID; ?> .button-block a, .wd-portfolio-panel_<?php echo $portfolioID; ?> .button-block a:link, .wd-portfolio-panel_<?php echo $portfolioID; ?> .button-block a:visited {
    padding:6px 12px;
    display:inline-block;
    font-size:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_linkbutton_font_size']; ?>px;
    background:#<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_linkbutton_background_color']; ?>;
    color:#<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_linkbutton_color']; ?>;
    text-decoration:none;
}

.wd-portfolio-panel_<?php echo $portfolioID; ?> .button-block a:hover, .wd-portfolio-panel_<?php echo $portfolioID; ?> .button-block a:focus, .wd-portfolio-panel_<?php echo $portfolioID; ?> .button-block a:active {
    background:#<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_linkbutton_background_hover_color']; ?>;
    color:#<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_linkbutton_font_hover_color']; ?>;
    text-decoration:none;
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> {
    position: relative;
    overflow: hidden;
<?php   if($sortingFloatFaq != 'top'){
                echo 'float:'.$sortingFloatFaq.';margin-top:5px;';
                echo  "max-width:180px;width:20%;display:inline-block;";
                if($filteringFloatFaq == 'top') echo 'margin-top:45px;';
                if($sortingFloatFaq == 'left') echo 'margin-right: 1%;';
                else echo 'margin-left:1%;';
            }
            else {
                if($portfolioposition == 'on' && ($filteringFloatFaq == 'top' || $filteringFloatFaq == '')) echo 'left:50%; transform:translateX(-50%);';
                if($filteringFloatFaq == 'left') echo 'margin-left:calc( 185px + 1%);';else echo 'margin-left:5px;';
                echo 'width: auto; margin-bottom: 5px;display:table;';
            }
            if(($sortingFloatFaq == 'left' && $filteringFloatFaq == 'left') || ($sortingFloatFaq == 'right' && $filteringFloatFaq == 'right')){
                echo 'width: 100%;';
            }
    ?>

<?php
    if($portfolioShowLoading == 'on') echo 'opacity: 0;';
?>
    margin-bottom: 10px;
}
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul {
    margin: 0px !important;
    padding: 0px !important;
    list-style: none;
<?php if($sortingFloatFaq == 'top') {
      echo "float:left;margin-left:1%;";
      } ?>
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul {
    margin: 0px !important;
    padding: 0px !important;
    overflow: hidden;
<?php if($sortingFloatFaq == 'top') {
    echo "float:left;margin-left:1%;";
    } ?>
    width: 100%;
}

<?php if($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_float"] == 'none') { ?>
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul {
    float: left;
}
<?php } ?>

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li {
    border-radius: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_sortbutton_border_radius"];?>px;
    list-style-type: none;
    margin: 0px !important;
    padding: 0;
<?php
    if($sortingFloatFaq == "top")
    { echo "float:left !important;margin: 0px 8px 4px 0px !important;"; }
    if($sortingFloatFaq == "left" || $sortingFloatFaq == "right")
    { echo 'border-bottom: 1px solid #ccc;'; }
    else
    { echo 'border: 1px solid #ccc;'; }
?>
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li a {
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_sortbutton_background_color"];?> !important;
    font-size:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_sortbutton_font_size"];?>px !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_sortbutton_font_color"];?> !important;
    text-decoration: none;
    cursor: pointer;
    margin: 0px !important;
    display: block;
    border-radius: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_sortbutton_border_radius"];?>px;
    padding: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_sortbutton_border_padding"];?>px;
}

/*#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li:hover {

}*/

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_options_<?php echo $portfolioID; ?> ul li a:hover {
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_sortbutton_hover_background_color"];?> !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_sortbutton_hover_font_color"];?> !important;
    cursor: pointer;
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> {
    margin-top: 5px;
    position: relative;
<?php   if($filteringFloatFaq != 'top'){
            echo 'float:'.$filteringFloatFaq.';margin-top:5px;';
            echo  "max-width:180px;width:20%;display:inline-block;";
            if($filteringFloatFaq == 'left') echo 'margin-right: 1%;';
            else echo 'margin-left:1%;';
        }
        else {
            if($portfolioposition == 'on' && ($sortingFloatFaq == 'top' || $sortingFloatFaq == '')) echo 'left:50%; transform:translateX(-50%);';
            if($sortingFloatFaq == 'left') echo 'margin-left:calc( 185px + 1%);';else echo 'margin-left:5px;';
            echo 'width: auto; margin-bottom: 5px;display:table;';
        }
        if(($sortingFloatFaq == 'left' && $filteringFloatFaq == 'left') || ($sortingFloatFaq == 'right' && $filteringFloatFaq == 'right')){
            echo 'width: 100%;';
        }
?>
<?php
    if($portfolioShowLoading == 'on') echo 'opacity: 0;';
?>
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li {
    list-style-type: none;
    border-radius: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_border_radius"];?>px;
<?php
    if($filteringFloatFaq == "top") { echo "float:left !important;margin: 0px 8px 4px 0px !important;"; }
    if($filteringFloatFaq == "left" || $filteringFloatFaq == "right")
    { echo 'border-bottom: 1px solid #ccc;'; }
    else echo "border: 1px solid #ccc;";
?>
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li a {
    font-size:<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_font_size"];?>px !important;
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_font_color"];?> !important;
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_background_color"];?> !important;
    border-radius: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_border_radius"];?>px;
    padding: <?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_border_padding"];?>px;
    display: block;
    text-decoration: none;
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?>  ul li a:hover {
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_hover_font_color"];?> !important;
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_hover_background_color"];?> !important;
    cursor: pointer
}
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li.active a,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li.active a:link,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?> ul li.active a:visited,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?>  ul li.active a:hover,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?>  ul li.active a:focus,
#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_filters_<?php echo $portfolioID; ?>  ul li.active a:active {
    color:#<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_hover_font_color"];?> !important;
    background-color: #<?php echo $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filterbutton_hover_background_color"];?> !important;
    cursor: pointer;
}
#huge_it_portfolio_content_<?php echo $portfolioID; ?> section {
    position:relative;
    display:block;
}

#huge_it_portfolio_content_<?php echo $portfolioID; ?> #huge_it_portfolio_container_<?php echo $portfolioID; ?> {
    width: 79%;
    max-width: 100% !important;
<?php if(($sortingFloatFaq == "left" && $filteringFloatFaq == "right") ||
     ($sortingFloatFaq == "right" && $filteringFloatFaq == "left"))
   { echo "margin: 0px auto;width:58%;"; }
   if(($filteringFloatFaq == "left" || $filteringFloatFaq == "right" && $sortingFloatFaq == "top") || ($sortingFloatFaq == "left" || $sortingFloatFaq == "right" && $filteringFloatFaq == "top"))
   {echo 'float:left;';}
   if(($portfolioShowSorting == 'off' && $portfolioShowFiltering == 'off') || ($sortingFloatFaq == 'top' && $filteringFloatFaq == 'top') ||
        ($sortingFloatFaq == 'top' && $filteringFloatFaq == '') || ($sortingFloatFaq == '' && $filteringFloatFaq == 'top'))
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
@media screen and (max-width: <?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view0_block_width']+2*$portfolio_gallery_get_options['portfolio_gallery_ht_view4_element_border_width']+40; ?>px) {
    .portelement_<?php echo $portfolioID; ?>  {
        width:98%;
        margin: 1% !important;
        float: left;
        overflow: hidden;
        outline:none;
        border:<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view4_element_border_width']; ?>px solid #<?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view0_element_border_color']; ?>;
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
    float:<?php echo $sortingFloatFaq; ?>;
<?php if($sortingFloatFaq == 'left') echo 'margin-right: 1%;';
    else echo 'margin-left:1%;';
?>
}
</style>
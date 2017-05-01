<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<section id="huge_it_portfolio_content_<?php echo esc_attr($portfolioID); ?>" class="<?php if ($portfolioShowSorting == 'on') {
    echo 'sortingActive ';
}
if ($portfolioShowFiltering == 'on') {
    echo 'filteringActive';
} ?>">
    <div id="huge-it-container-loading-overlay_<?php echo esc_attr($portfolioID); ?>"></div>
    <?php if (($sortingFloatFaq == 'left' && $filteringFloatFaq == 'left') || ($sortingFloatFaq == 'right' && $filteringFloatFaq == 'right')) { ?>
    <div id="huge_it_portfolio_options_and_filters_<?php echo esc_attr($portfolioID); ?>">
        <?php } ?>
        <?php if ($portfolioShowSorting == "on") { ?>
            <div id="huge_it_portfolio_options_<?php echo esc_attr($portfolioID); ?>"
                 data-sorting-position="<?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_float"]); ?>">
                    <ul id="sort-by" class="option-set clearfix" data-option-key="sortBy">
                            <?php if($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_default"] != ''):?>
                            <li><a href="#sortBy=original-order" data-option-value="original-order" class="selected"
                                   data><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_default"]); ?></a></li>
                            <?php endif;?>
                            <?php if($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_id"] != ''):?>
                            <li><a href="#sortBy=id"
                                   data-option-value="id"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_id"]); ?></a>
                            </li>
                            <?php endif;?>
                            <?php if($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_name"] != ''):?>
                            <li><a href="#sortBy=symbol"
                                   data-option-value="symbol"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_name"]); ?></a>
                            </li>
                            <?php endif;?>
                            <?php if($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_random"] != ''):?>
                            <li id="shuffle"><a
                                            href='#shuffle'><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_random"]); ?></a>
                            </li>
                            <?php endif;?>
                    </ul>
                    <ul id="port-sort-direction" class="option-set clearfix" data-option-key="sortAscending">
                            <?php if($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_asc"] != ''):?>
                            <li><a href="#sortAscending=true" data-option-value="true"
                                   class="selected"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_asc"]); ?></a>
                            </li>
                            <?php endif;?>
                            <?php if($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_desc"] != ''):?>
                            <li><a href="#sortAscending=false"
                                   data-option-value="false"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_name_by_desc"]); ?></a>
                            </li>
                            <?php endif;?>
                    </ul>
            </div>
        <?php }
        if ($portfolioShowFiltering == "on") { ?>
            <div id="huge_it_portfolio_filters_<?php echo $portfolioID; ?>"
                 data-filtering-position="<?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_filtering_float"]); ?>">
                <ul>
                    <li rel="*"><a><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view4_cat_all"]); ?></a></li>
                    <?php
                    $portfolioCats = explode(",", $portfolioCats);
                    foreach ($portfolioCats as $portfolioCatsValue) {
                        if (!empty($portfolioCatsValue)) {
                            ?>
                            <li rel=".<?php echo str_replace(" ", "_", $portfolioCatsValue); ?>">
                                <a><?php echo str_replace("_", " ", $portfolioCatsValue); ?></a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        <?php } ?>
        <?php if (($sortingFloatFaq == 'left' && $filteringFloatFaq == 'left') || ($sortingFloatFaq == 'right' && $filteringFloatFaq == 'right')) { ?>
    </div>
<?php } ?>
    <div id="huge_it_portfolio_container_<?php echo esc_attr($portfolioID); ?>"
         class="huge_it_portfolio_container super-list variable-sizes clearfix view-<?php echo esc_attr($view_slug); ?>"
         data-show-loading="<?php echo $portfolioShowLoading; ?>"
         data-show-center="<?php echo $portfolioposition; ?>" <?php if ($portfolio_gallery_get_options["portfolio_gallery_ht_view4_sorting_float"] == "top" && $portfolio_gallery_get_options["portfolio_gallery_ht_view4_filtering_float"] == "top") {
        echo "style='clear: both;'";
    } ?>>
        <?php

        foreach ($images as $key => $row) {
            $link = $row->sl_url;
            $descnohtml = strip_tags($row->description);
            $result = substr($descnohtml, 0, 50);
            $catForFilter = explode(",", $row->category);
            ?>
            <div
                class="portelement portelement_<?php echo esc_attr($portfolioID); ?>  <?php foreach ($catForFilter as $catForFilterValue) {
                    echo str_replace(" ", "_", $catForFilterValue) . " ";
                } ?> " data-symbol="<?php echo esc_attr($row->name); ?>" data-category="alkaline-earth">
                <div class="title-block title-block_<?php echo esc_attr($portfolioID); ?>">
                    <h3 title="<?php echo $row->name; ?>"
                        class="title"><?php echo $row->name; ?></h3>
                    <div class="open-close-button"></div>
                </div>

                <div class="wd-portfolio-panel wd-portfolio-panel_<?php echo esc_attr($portfolioID); ?>" id="panel<?php echo esc_attr($key); ?>">
                    <?php
                    if ($portfolio_gallery_get_options['portfolio_gallery_ht_view4_show_description'] == 'on' && $row->description != '') {
                        ?>
                        <div class="description-block_<?php echo esc_attr($portfolioID); ?>">
                            <p><?php echo $row->description; ?></p>
                        </div>
                    <?php }
                    if (isset($portfolio_gallery_get_options['portfolio_gallery_ht_view4_show_thumbs']) && $portfolio_gallery_get_options['portfolio_gallery_ht_view4_show_thumbs'] == 'on' and $portfolio_gallery_get_options['portfolio_gallery_ht_view4_thumbs_position'] == "after") {
                        ?>
                        <div>
                            <ul class="thumbs-list_<?php echo esc_attr($portfolioID); ?>">
                                <?php
                                $imgurl = explode(";", $row->image_url);
                                array_pop($imgurl);
                                foreach ($imgurl as $key => $img) {
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url($img); ?>" class="group1"
                                           title="<?php esc_attr(huge_it_title_img_display($img, $title)); ?>"><img
                                                src="<?php echo esc_attr($img); ?>"></a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    <?php }
                    if ($portfolio_gallery_get_options['portfolio_gallery_ht_view4_show_linkbutton'] == 'on' && $link != '') {
                        ?>
                        <div class="button-block">
                            <a href="<?php echo esc_url($link); ?>" <?php if ($row->link_target == "on") {
                                echo 'target="_blank"';
                            } ?>><?php echo esc_attr($portfolio_gallery_get_options['portfolio_gallery_ht_view4_linkbutton_text']);?></a>
                        </div>
                    <?php } ?>
                    <div style="clear:both"></div>
                </div>
            </div>

            <?php
        }
        ?>

    </div>
</section>
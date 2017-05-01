jQuery(document).ready(function(){
            var ht_show_sorting;
            var ht_show_filtering;
            var auto_slide_on;

            jQuery('#ht_show_sorting').change(function () {
                if (jQuery('#ht_show_sorting').prop('checked') == false) {
                    jQuery('#ht_show_sorting').val('off');
                }
                else if (jQuery('#ht_show_sorting').prop('checked') == true) {
                    jQuery('#ht_show_sorting').val('on');
                }
            });

            jQuery('#ht_show_filtering').change(function () {
                if (jQuery('#ht_show_filtering').prop('checked') == false) {
                    jQuery('#ht_show_filtering').val('off');
                }
                else if (jQuery('#ht_show_filtering').prop('checked') == true) {
                    jQuery('#ht_show_filtering').val('on');
                }
            });

            jQuery('#auto_slide_on').change(function () {
                alert(5);
                if (jQuery('#auto_slide_on').prop('checked') == false) {
                    jQuery('#auto_slide_on').val('off');
                }
                else if (jQuery('#auto_slide_on').prop('checked') == true) {
                    jQuery('#auto_slide_on').val('on');
                }
            });

            jQuery('#hugeitportfolioinsert').on('click', function () {
                ht_show_sorting = jQuery('#ht_show_sorting').val();
                ht_show_filtering = jQuery('#ht_show_filtering').val();
                auto_slide_on = jQuery('#auto_slide_on').val();
                var id = jQuery('#huge_it_portfolio-select option:selected').val();
                var portfolio_effects_list = jQuery('#portfolio_effects_list').val();
                var sl_pausetime = jQuery('#sl_pausetime').val();
                var sl_changespeed = jQuery('#sl_changespeed').val();
                var err = 0;
                var data = {
                    action: 'portfolio_gallery_action',
                    post: 'portfolioSaveOptions',
                    htportfolio_id: id,
                    portfolio_effects_list: portfolio_effects_list,
                    ht_show_sorting: ht_show_sorting,
                    ht_show_filtering: ht_show_filtering,
                    sl_pausetime: sl_pausetime,
                    sl_changespeed: sl_changespeed,
                    pause_on_hover: auto_slide_on
                };

                if (!jQuery.isNumeric(sl_pausetime) || sl_pausetime < 0) {
                    err = err + 1;
                } else {
                    sl_pausetime = Math.round(sl_pausetime);
                }

                if (!jQuery.isNumeric(sl_changespeed) || sl_changespeed < 0) {
                    err = err + 1;
                } else {
                    sl_changespeed = Math.round(sl_changespeed);
                }

                if (err > 0) {
                    alert('Fill the fields correctly.');
                    return false;
                }


                jQuery.post(ajax_object_shortecode, data, function (response) {

                });
                window.send_to_editor('[huge_it_portfolio id="' + id + '"]');
                tb_remove();

            });
            jQuery('#portfolio_effects_list').on('change', function () {
                var sel = jQuery(this).val();

                if (sel == 5) {
                    jQuery('.for-content-slider').css('display', 'block')
                }
                else {
                    jQuery('.for-content-slider').css('display', 'none')
                }
            });
            jQuery('#portfolio_effects_list').change();

            //////////////////portfolio change options/////////////////////
            jQuery('#huge_it_portfolio-select').change(function () {
                var shoertecodeChangeViewNonce = jQuery(this).attr('change-view-nonce');
                var sel = jQuery(this).val(),
                    data = {
                        action: 'portfolio_gallery_action',
                        post: 'portfolioChangeOptions',
                        id: sel,
                        nonce: shoertecodeChangeViewNonce
                    };

                jQuery.post(ajax_object_shortecode, data, function (response) {
                    response = JSON.parse(response);

                    var list_effect = response.portfolio_list_effects_s;
                    jQuery('#portfolio_effects_list').val(response.portfolio_effects_list);
                    jQuery('#portfolio_effects_list option[value=list_effect]').attr('selected');
                    jQuery('#ht_show_sorting').val(response.ht_show_sorting);

                    if (jQuery('#ht_show_sorting').val() == 'on') {
                        jQuery('#ht_show_sorting').attr('checked', 'checked');
                    } else {
                        jQuery('#ht_show_sorting').removeAttr('checked');
                    }

                    jQuery('#ht_show_filtering').val(response.ht_show_filtering);

                    if (jQuery('#ht_show_filtering').val() == 'on') {
                        jQuery('#ht_show_filtering').attr('checked', 'checked');
                    } else {
                        jQuery('#ht_show_filtering').removeAttr('checked');
                    }

                    jQuery('#sl_pausetime').val(response.sl_pausetime);
                    jQuery('#sl_changespeed').val(response.sl_changespeed);
                    jQuery('#auto_slide_on').val(response.pause_on_hover);

                    if (jQuery('#auto_slide_on').val() == 'on') {
                        jQuery('#auto_slide_on').attr('checked', 'checked');
                    } else {
                        jQuery('#auto_slide_on').removeAttr('checked');
                    }
                    if (response) {
                        var sel1 = jQuery('#portfolio_effects_list').val();
                        if (sel1 == 5) {
                            jQuery('.for-content-slider').css('display', 'block')
                        } else {
                            jQuery('.for-content-slider').css('display', 'none')
                        }
                    }
                });
            });
});
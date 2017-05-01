"use strict";
jQuery.each(param_obj, function (index, value) {
    if (!isNaN(value)) {
        param_obj[index] = parseInt(value);
    }
});
function Portfolio_Gallery_Content_Popup(id) {
    var _this = this;
    _this.body = jQuery('body');
    _this.container = jQuery('#' + id + '.view-content-popup');
    _this.hasLoading = _this.container.data("show-loading") == "on";
    _this.optionsBlock = _this.container.parent().find('div[id^="huge_it_portfolio_options_"]');
    _this.filtersBlock = _this.container.parent().find('div[id^="huge_it_portfolio_filters_"]');
    _this.content = _this.container.parent();
    _this.element = _this.container.find('.portelement');
    _this.defaultBlockHeight = param_obj.portfolio_gallery_ht_view2_element_height;
    _this.defaultBlockWidth = param_obj.portfolio_gallery_ht_view2_element_width;
    _this.optionSets = _this.optionsBlock.find('.option-set'),
    _this.optionLinks = _this.optionSets.find('a');
    _this.sortBy = _this.optionsBlock.find('#sort-by');
    _this.filterButton = _this.filtersBlock.find('ul li');
    _this.imageOverlay = _this.element.find('.image-overlay a');
    _this.popupList = _this.content.next();
    _this.popupCloseButton = _this.popupList.find('a.close');
    _this.thumbsImage = _this.popupList.find('.popup-wrapper .right-block ul.thumbs-list li a.img-thumb');
    _this.leftButton = _this.popupList.find('.heading-navigation .left-change');
    _this.rightButton = _this.popupList.find('.heading-navigation .right-change');
    _this.playIcon = _this.popupList.find('.video-thumb .play-icon');
    _this.imageBehaiour = _this.content.data('image-behaviour');
    if (_this.container.data('show-center') == 'on' && ( ( !_this.content.hasClass('sortingActive') && !_this.content.hasClass('filteringActive') )
        || ( _this.optionsBlock.data('sorting-position') == 'top' && _this.filtersBlock.data('filtering-position') == 'top' ) ||
        ( _this.optionsBlock.data('sorting-position') == 'top' && !_this.content.hasClass('filteringActive') ) || ( !_this.content.hasClass('sortingActive') && _this.filtersBlock.data('filtering-position') == 'top' ) )) {
        _this.isCentered = _this.container.data("show-center");
    }
    _this.documentReady = function () {
        var options = {
            itemSelector: _this.element,
            masonry: {
                columnWidth: _this.defaultBlockWidth + 15 + param_obj.portfolio_gallery_ht_view2_element_border_width * 2,
            },
            masonryHorizontal: {
                rowHeight: 300 + 15
            },
            cellsByRow: {
                columnWidth: 300 + 15,
                rowHeight: 240
            },
            cellsByColumn: {
                columnWidth: 300 + 15,
                rowHeight: 240
            },
            getSortData: {
                symbol: function ($elem) {
                    return $elem.attr('data-symbol');
                },
                category: function ($elem) {
                    return $elem.attr('data-category');
                },
                number: function ($elem) {
                    return parseInt($elem.find('.number').text(), 10);
                },
                weight: function ($elem) {
                    return parseFloat($elem.find('.weight').text().replace(/[\(\)]/g, ''));
                },
                id: function ($elem) {
                    return $elem.find('.id').text();
                }
            }
        };
        portfolioGalleryIsotope(_this.container);
        portfolioGalleryIsotope(_this.container,options);
        _this.container.find('img').on('load', function () {
            portfolioGalleryIsotope(_this.container,'layout');
        });
    };

    _this.manageLoading = function () {
        if (_this.hasLoading) {
            _this.container.css({'opacity': 1});
            _this.optionsBlock.css({'opacity': 1});
            _this.filtersBlock.css({'opacity': 1});
            _this.content.find('div[id^="huge-it-container-loading-overlay_"]').css('display', 'none');
        }
    };

    _this.showCenter = function () {
        if (_this.isCentered) {
            var count = _this.element.length;
            var elementwidth = _this.defaultBlockWidth + 15 + param_obj.portfolio_gallery_ht_view2_element_border_width * 2;
            var enterycontent = _this.content.width();
            var whole = Math.floor(enterycontent / elementwidth);
            if (whole > count) whole = count;
            if (whole == 0) {
                return false;
            }
            else {
                var sectionwidth = whole * elementwidth ;
            }
            _this.container.width(sectionwidth).css({
                "margin": "0px auto",
                "overflow": "hidden"
            });
        }
    };


    _this.addEventListeners = function () {
        _this.optionLinks.on('click', _this.optionsClick);
        _this.optionsBlock.find('#shuffle a').on('click',_this.randomClick);
        _this.filterButton.on('click', _this.filtersClick);
        _this.imageOverlay.on('click', _this.overlayClick);
        _this.popupCloseButton.on('click', _this.closePopup);
        _this.body.on('click', '#huge-popup-overlay-portfolio', _this.closePopup);
        _this.thumbsImage.on('click', _this.thumbsClick);
        _this.playIcon.on('click', _this.playVideo);
        _this.leftButton.on('click', _this.leftChange);
        _this.rightButton.on('click', _this.rightChange);
        _this.body.keydown(_this.changeRightAndLeft);
        jQuery(window).resize(_this.resizeEvent);


    };

    _this.overlayClick = function(){
        var strid = jQuery(this).attr('href').replace('#', '');
        jQuery(this).parents('body').append('<div id="huge-popup-overlay-portfolio"></div>');
        _this.popupList.insertBefore('#huge-popup-overlay-portfolio');
        var height = jQuery(window).height();
        var width = jQuery(window).width();
        if (width <= 767) {
            jQuery(window).scrollTop(0);
            jQuery(window).scrollTop(0);
            _this.popupList.find('.popup-wrapper .image-block iframe').height(jQuery('body').width() * 0.5);
        } else {
            _this.popupList.find('.popup-wrapper .image-block iframe').height(jQuery('body').width() * 0.23);
        }
        jQuery('#huge_it_portfolio_pupup_element_' + strid).addClass('active').css({height: height * 0.7});
        _this.popupList.addClass('active');

        jQuery('#huge_it_portfolio_pupup_element_' + strid + ' ul.thumbs-list li:first-child').addClass('active');

        if (jQuery('.pupup-element.active .description').height() + jQuery('.right-block h3').height() + 200 > jQuery('.pupup-element.active .right-block').height()) {
            if (jQuery('.pupup-element.active img').height() > jQuery('.pupup-element.active .image-block').height()) {
                jQuery('.pupup-element.active .right-block').css('overflow-y', '');
                jQuery('.pupup-element.active .popup-wrapper').css('overflow-y', 'auto');
            } else {
                jQuery('.pupup-element.active .right-block').css('overflow-y', 'auto');
            }
        } else {
            if (jQuery('.pupup-element.active img').height() > jQuery('.pupup-element.active .image-block').height()) {
                jQuery('.pupup-element.active .popup-wrapper').css('overflow-y', 'auto');
            }
        }
    };
    _this.leftChange = function(){
        var height = jQuery(window).height();
        var num = jQuery(this).find("a").attr("href").replace('#', '');
        if(_this.popupList.find('.pupup-element.active .image-block iframe').length) {
            var videoSrc = _this.popupList.find('.pupup-element.active .image-block iframe').attr('src');
            videoSrc = videoSrc.replace('autoplay=1', 'autoplay=0');
            _this.popupList.find('.pupup-element.active .image-block iframe').attr('src', videoSrc);
        }
        if (_this.filtersBlock.find("li[rel!='*'].active").attr("rel"))
            var active_rel = _this.filtersBlock.find("li[rel!='*'].active").attr("rel");
        else
            var active_rel = "";
        if (jQuery(this).closest(".pupup-element").prevAll(".pupup-element" + active_rel).length) {
            var strid = jQuery(this).closest(".pupup-element").prevAll(".pupup-element" + active_rel + ":first").find('a').data('popupid').replace('#', '');
            jQuery('#huge_it_portfolio_pupup_element_' + strid).css({height: height * 0.7});
            jQuery(this).closest(".pupup-element").removeClass("active");
            jQuery(this).closest(".pupup-element").prevAll(".pupup-element" + active_rel + ":first").addClass("active");
        } else {
            var strid = _this.popupList.find(".pupup-element" + active_rel + ":last").find('a').data('popupid').replace('#', '');
            jQuery('#huge_it_portfolio_pupup_element_' + strid).css({height: height * 0.7});
            jQuery(this).closest(".pupup-element").removeClass("active");
            _this.popupList.find(".pupup-element" + active_rel + ":last").addClass("active");
        }

        if (jQuery('.pupup-element.active .description').height() + jQuery('.right-block h3').height() + 200 > jQuery('.pupup-element.active .right-block').height()) {
            if (jQuery('.pupup-element.active img').height() > jQuery('.pupup-element.active .image-block').height()) {
                jQuery('.pupup-element.active .right-block').css('overflow-y', '');
                jQuery('.pupup-element.active .popup-wrapper').css('overflow-y', 'auto');
            } else {
                jQuery('.pupup-element.active .right-block').css('overflow-y', 'auto');
            }
        } else {
            if (jQuery('.pupup-element.active img').height() > jQuery('.pupup-element.active .image-block').height()) {
                jQuery('.pupup-element.active .popup-wrapper').css('overflow-y', 'auto');
            }
        }
    };
    _this.rightChange = function(){
        var height = jQuery(window).height();
        var num = jQuery(this).find("a").attr("href").replace('#', '');
        if(_this.popupList.find('.pupup-element.active .image-block iframe').length) {
            var videoSrc = _this.popupList.find('.pupup-element.active .image-block iframe').attr('src');
            videoSrc = videoSrc.replace('autoplay=1', 'autoplay=0');
            _this.popupList.find('.pupup-element.active .image-block iframe').attr('src', videoSrc);
        }
        if (_this.filtersBlock.find("li[rel!='*'].active").attr("rel"))
            var active_rel = _this.filtersBlock.find("li[rel!='*'].active").attr("rel");
        else
            var active_rel = "";
        var cnt = 0;
        _this.popupList.find(".pupup-element" + active_rel).each(function () {
            cnt++;
        });
        if (jQuery(this).closest(".pupup-element").nextAll(".pupup-element" + active_rel).length) {
            var strid = jQuery(this).closest(".pupup-element").nextAll(".pupup-element" + active_rel + ":first").find('a').data('popupid').replace('#', '');
            jQuery('#huge_it_portfolio_pupup_element_' + strid).css({height: height * 0.7});
            jQuery(this).closest(".pupup-element").removeClass("active");
            jQuery(this).closest(".pupup-element").nextAll(".pupup-element" + active_rel + ":first").addClass("active");
        } else {
            var strid = _this.popupList.find(".pupup-element" + active_rel + ":first a").data('popupid').replace('#', '');
            jQuery('#huge_it_portfolio_pupup_element_' + strid).css({height: height * 0.7});
            jQuery(this).closest(".pupup-element").removeClass("active");
            _this.popupList.find(".pupup-element" + active_rel + ":first").addClass("active");
        }


        if (jQuery('.pupup-element.active .description').height() + jQuery('.right-block h3').height() + 200 > jQuery('.pupup-element.active .right-block').height()) {
            if (jQuery('.pupup-element.active img').height() > jQuery('.pupup-element.active .image-block').height()) {
                jQuery('.pupup-element.active .right-block').css('overflow-y', '');
                jQuery('.pupup-element.active .popup-wrapper').css('overflow-y', 'auto');
            } else {
                jQuery('.pupup-element.active .right-block').css('overflow-y', 'auto');
            }
        } else {
            if (jQuery('.pupup-element.active img').height() > jQuery('.pupup-element.active .image-block').height()) {
                jQuery('.pupup-element.active .popup-wrapper').css('overflow-y', 'auto');
            }
        }
    };
    _this.closePopup = function(){
        var scrollingTo = _this.popupList.find('.pupup-element.active').attr('id');
        jQuery(window).scrollTop(jQuery("#" + scrollingTo + "_child").offset().top - 100);
        var end_video_src = _this.popupList.find('li.active iframe').attr('src');
        var end_video = '&enablejsapi=1';
        _this.popupList.find('li.active iframe').attr('src', end_video_src + end_video);
        jQuery('#huge-popup-overlay-portfolio').remove();
        _this.popupList.find('li').removeClass('active');
        _this.popupList.removeClass('active');
    };
    _this.changeRightAndLeft = function (e) {
        if (e.keyCode == 37) {
            _this.popupList.find('li.active .heading-navigation .left-change').click();
        }
        if (e.keyCode == 39) {
            _this.popupList.find('li.active .heading-navigation .right-change').click();
        }
        if (e.keyCode == 27) {
            _this.closePopup();
        }
    };
    _this.thumbsClick = function(){
        var width = jQuery(window).width();
        var strsrc = jQuery(this).attr('href');
        if (width <= 767) {
            jQuery(window).scrollTop(0);
        }
        jQuery(this).parent().parent().find('li.active').removeClass('active');
        jQuery(this).parent().addClass('active');
        var left_block = jQuery(this).parents('.right-block').prev();
        if (left_block.find('img').length != 0)
            left_block.find('img').attr('src', strsrc);
        else {
            left_block.html('<img src="' + strsrc + '" />');
        }

        if (jQuery('.pupup-element.active .description').height() + jQuery('.right-block h3').height() + 200 > jQuery('.pupup-element.active .right-block').height()) {
            if (jQuery('.pupup-element.active img').height() > jQuery('.pupup-element.active .image-block').height()) {
                jQuery('.pupup-element.active .right-block').css('overflow-y', '');
                jQuery('.pupup-element.active .popup-wrapper').css('overflow-y', 'auto');
            } else {
                jQuery('.pupup-element.active .right-block').css('overflow-y', 'auto');
            }
        } else {
            setTimeout(function () {
                if (jQuery('.pupup-element.active .image-block img').height() > jQuery('.pupup-element.active .image-block').height()) {
                    jQuery('.pupup-element.active .popup-wrapper').css('overflow-y', 'auto');
                }
            },10);

        }

        return false;
    };
    _this.playVideo = function(){
        new_video_id = jQuery(this).attr("title");
        var showcontrols, prefix, add_src;
        var showcontrols, new_video_id, prefix;
        if (!new_video_id)
            return;
        if (new_video_id.length == 11) {
            showcontrols = "?modestbranding=1&showinfo=0&controls=1";
            prefix = "//www.youtube.com/embed/";
        } else {
            showcontrols = "?title=0&amp;byline=0&amp;portrait=0";
            prefix = "//player.vimeo.com/video/";

        }
        jQuery(this).parent().parent().parent().find('li.active').removeClass('active');
        jQuery(this).parent().parent().addClass('active');
        add_src = prefix + new_video_id + showcontrols;
        var left_block = jQuery(this).parents('.right-block').prev();
        if (left_block.find('iframe').length != 0)
            left_block.find('iframe').attr('src', add_src);
        else
            left_block.html('<iframe src="' + add_src + '" frameborder allowfullscreen></iframe> ');
        _this.popupList.find('.popup-wrapper .image-block iframe').css('opacity',0);
        _this.popupList.find('.popup-wrapper .image-block iframe').load(function () {


            _this.popupList.find('.popup-wrapper .image-block iframe').height( _this.popupList.find('.popup-wrapper .image-block ').width() * 9/16);
            _this.popupList.find('.popup-wrapper .image-block iframe').css('opacity',1);

        })

        return false;
    };
    _this.resizeEvent = function(){
        _this.showCenter();
        _this.popupList.find('.popup-wrapper .image-block iframe').height( _this.popupList.find('.popup-wrapper .image-block ').width() * 9/16);

        var loadInterval = setInterval(function(){
            portfolioGalleryIsotope(_this.container,'layout');
        },100);
        setTimeout(function(){clearInterval(loadInterval);},5000);
    };
    _this.optionsClick = function () {
        var $this = jQuery(this);

        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');


        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');

        value = value === 'false' ? false : value;
        options[key] = value;
        if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {

            changeLayoutMode($this, options)
        } else {

            portfolioGalleryIsotope(_this.container,options);
        }

        return false;
    };
    _this.randomClick = function () {
        portfolioGalleryIsotope(_this.container,'shuffle');
        _this.sortBy.find('.selected').removeClass('selected');
        _this.sortBy.find('[data-option-value="random"]').addClass('selected');
        return false;
    };
    _this.filtersClick = function () {
        _this.filterButton.each(function () {
            jQuery(this).removeClass('active');
        });
        jQuery(this).addClass('active');
        var filterValue = jQuery(this).attr('rel');
        portfolioGalleryIsotope(_this.container,{filter: filterValue});
    };
    _this.imagesBehavior = function (){
        _this.container.find('.portelement .image-block img').each(function(i, img) {
                var naturalRatio = jQuery(this).prop('naturalWidth')/jQuery(this).prop('naturalHeight');
                var defaultRatio = _this.defaultBlockWidth/_this.defaultBlockHeight;
                if(naturalRatio<=defaultRatio){
                        jQuery(img).css({
                            position: "relative",
                            width: '100%', 
                            top: '50%',
                            transform: 'translateY(-50%)'
                        });
                    }else {
                        jQuery(img).css({
                            position: "relative",
                            height:'100%',
                            left: '50%',
                            transform: 'translateX(-50%)'
                        });
                    }
	});
    }

    _this.init = function () {
        _this.showCenter();
        jQuery(window).load(_this.manageLoading);
        _this.documentReady();
        _this.addEventListeners();
        if( _this.imageBehaiour == 'natural'){
            _this.imagesBehavior();
        }
    };

    this.init();
}
var portfolios = [];
jQuery(document).ready(function () {
    jQuery(".huge_it_portfolio_container.view-content-popup").each(function (i) {
        var id = jQuery(this).attr('id');
        portfolios[i] = new Portfolio_Gallery_Content_Popup(id);
    });
});

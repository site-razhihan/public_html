"use strict";
jQuery.each(param_obj, function (index, value) {
    if (!isNaN(value)) {
        param_obj[index] = parseInt(value);
    }
});

function Portfolio_Gallery_Full_Height(id) {
    var _this = this;
    _this.container = jQuery('#' + id + '.view-full-height');
    _this.hasLoading = _this.container.data("show-loading") == "on";
    _this.optionsBlock = _this.container.parent().find('div[id^="huge_it_portfolio_options_"]');
    _this.filtersBlock = _this.container.parent().find('div[id^="huge_it_portfolio_filters_"]');
    _this.content = _this.container.parent();
    _this.element = _this.container.find('.portelement');
    _this.defaultBlockHeight = param_obj.portfolio_gallery_ht_view1_block_height;
    _this.defaultBlockWidth = param_obj.portfolio_gallery_ht_view1_block_width;
    _this.optionSets = _this.optionsBlock.find('.option-set');
    _this.optionLinks = _this.optionSets.find('a');
    _this.sortBy = _this.optionsBlock.find('#sort-by');
    _this.filterButton = _this.filtersBlock.find('ul li');
    if (_this.container.data('show-center') == 'on' && ( ( !_this.content.hasClass('sortingActive') && !_this.content.hasClass('filteringActive') )
        || ( _this.optionsBlock.data('sorting-position') == 'top' && _this.filtersBlock.data('filtering-position') == 'top' ) ||
        ( _this.optionsBlock.data('sorting-position') == 'top' && _this.filtersBlock.data('filtering-position') == '' ) || ( _this.optionsBlock.data('sorting-position') == '' && _this.filtersBlock.data('filtering-position') == 'top' ) )) {
        _this.isCentered = _this.container.data("show-center") == "on";
    }
    _this.documentReady = function () {
        var options = {
            itemSelector: _this.element,
            masonry: {
                columnWidth: _this.defaultBlockWidth + 15 + param_obj.portfolio_gallery_ht_view1_element_border_width * 2
            },
            masonryHorizontal: {
                rowHeight: 300 + 20
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
            var elementwidth = _this.defaultBlockWidth + 15 + param_obj.portfolio_gallery_ht_view1_element_border_width * 2;
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
        jQuery(window).resize(_this.resizeEvent);


    };
    _this.resizeEvent = function(){
        _this.showCenter();
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
        // get filter value from option value
        var filterValue = jQuery(this).attr('rel');
        // use filterFn if matches value
        portfolioGalleryIsotope(_this.container,{filter: filterValue});
    };

    _this.init = function () {
        _this.showCenter();
        jQuery(window).load(function () {
            portfolioGalleryIsotope(_this.container);
            _this.manageLoading();
        });
        _this.documentReady();
        _this.addEventListeners();
    };

    this.init();
}
var portfolios = [];
jQuery(document).ready(function () {
    jQuery(".huge_it_portfolio_container.view-full-height").each(function (i) {
        var id = jQuery(this).attr('id');
        portfolios[i] = new Portfolio_Gallery_Full_Height(id);
    });
});
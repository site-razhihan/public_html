=== WP Logo Showcase Responsive Slider ===
Contributors: wponlinesupport, anoopranawat 
Tags: wponlinesupport, wponlinesupport logo slider, logo slider, widget , client logo carousel, client logo slider, client, customer,  image carousel, carousel, logo showcase, Responsive logo slider, Responsive logo carousel, WordPress logo slider, WordPress logo carousel, slick carousel, Best logo showcase, easy logo slider, logo carousel wordpress, logo slider wordpress, sponsors, sponsors slider, sponsors carousel
Requires at least: 3.1
Tested up to: 4.7
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A quick, easy way to add and display Multiple reponsive logo slideshow carousel to your site quickly and easily.

== Description ==
Many CMS site needs to display logo slideshow responsive slider/carousel on their website. WP Logo Showcase Responsive Slider help to display partners, 
clients or sponsor's Logo in your WordPress site quickly and easily. Using WP Logo Showcase Responsive slider/carousel plugin creating a carousel 
slider of logos like client logo slider, partners logo slider, sponsor logo slider is super easy. 

View [DEMO](http://wponlinesupport.com/wp-plugin/wp-logo-showcase-responsive-slider/) for additional information.

View [PRO DEMO and Features](http://wponlinesupport.com/wp-plugin/wp-logo-showcase-responsive-slider/) for additional information.

= Here is the shortcode example =
<code>[logoshowcase]</code>

= If you want to display Logos by category then use this short code =
<code>[logoshowcase limit ="-1" cat_id="category_ID"]</code>

= Complete shortcode with all parameters =
<code>[logoshowcase limit="-1" cat_id="15" cat_name="Support"
dots="true" arrows="true" slides_column="3" slides_scroll="2" autoplay="true"
autoplay_interval="300" speed="2000" loop="true" center_mode="true"
link_target="blank" show_title="false" image_size="original"
order="DESC" orderby="post_date" start_slide="2"]</code>


= Use Following parameters with shortcode =
<code>[logoshowcase]</code>
* **limit:**
[logoshowcase limit="5"] ( ie Display 5 Logo on your website )
* **Display by category**
[logoshowcase  cat_id="category_ID"] ( ie Display Logos by their category ID )
* **Display category name:**
[logoshowcase cat_name="category name"] ( Display category name)
* **Slide columns for Logo slider:**
[logoshowcase slides_column="2"] (Display no of columns in Logos slider )
* **Number of Logos slides at a time:**
[logoshowcase slides_scroll="2"] (Controls number of Logos slide at a time)
* **Pagination and arrows:**
[logoshowcase dots="false" arrows="false"]
* **Autoplay and Autoplay Interval:**
[logoshowcase autoplay="true" autoplay_interval="100"]
* **Logo Showcase Slide Speed:**
[logoshowcase speed="3000"]
* **Loop:**
[logoshowcase loop="true"] ( Display slider in Loop OR not : You can use "true" OR "false")
* **Initialize Slide:**
[logoshowcase start_slide="2"] (Initialize slider with particular slide.)
* **Center Mode:**
[logoshowcase center_mode="false"] ( Display slider in Center Mode OR not : You can use "true" OR "false")
* **link_target:**
[logoshowcase link_target="blank"] (Open link on the same Tab OR other Tab. Values are "blank" and "self") 
* **show_title:**
[logoshowcase show_title="false"] (ie show logo title or not. By default value is "false" Values are "true" and "false") 
* **image_size:**
[logoshowcase image_size="original"] (ie set image size of logo. By default value is "original" Values are "original, large, medium, thumbnail") 
* **order:**
[logoshowcase order="original"] (Designates the ascending or descending order of the 'orderby' parameter. Defaults to 'DESC'. Values are "DESC" and "ASC") 
* **orderby :**
[logoshowcase orderby="post_date"] (Sort retrieved posts by parameter. Defaults to 'date (post_date)'. One or more options can be passed. 'none',ID','author','title','name',rand',date') 


= Features include: =
* Added two new shortcode parameters "order and orderby"
* Display Client logoshowcase in slider view.
* Display Unlimited Client logoshowcase categories wise.
* Add Link for image.
* Target "blank" OR "self" when user click on link (Specify target to load the Links)
* Set image size with image_size="original" parameter (Logo image size control).
* Display Logo including / excluding Title (Show or hide logo title)
* Multiple sliders can be shown from different Logo categories.
* Slider sliding speed, autoplay Intervel, navigation, pagination, Slide columns for Logo slider, Number of Logos slides at a time.
* Created with Slick Slider.
* Enable center mode (Shown in Demo)
* Display slider in Loop OR not

= Template code is =
<code><?php echo do_shortcode('[logoshowcase]'); ?></code>

= PRO Features : =
> <strong>Premium Version</strong><br>
>
> * Added 3 shortcodes with various parameters.
> * [logoshowcase] – Slider Shortcode
> * [logo_grid] – Logo Grid Shortcode
> * [logo_filter] – Logo Filter Shortcode
> * 15+ predefined template for logo showcase.
> * Display logo showcase in a grid view.
> * Display logo with filtration.
> * Display logo showcase in slider view.
> * Created with versatile Slick Slider with various parameters.
> * Slider RTL support.
> * Display logo showcase categories wise.
> * Visual Composer support.
> * Drag & Drop features to display logo in your desired order.
> * Logo Showcase with tool-tip with 5 tool-tip theme and various parameters.
> * Add your custom css via plugin setting page.
> * 100% Multilanguage.
> * Template code : 
> * <code><?php echo do_shortcode('[logoshowcase]'); ?> </code> 
> * <code> <?php echo do_shortcode('[logo_grid]'); ?> </code>
> * <code> <?php echo do_shortcode('[logo_filter]'); ?> </code>  
>
> View [PRO DEMO and Features](http://wponlinesupport.com/wp-plugin/wp-logo-showcase-responsive-slider/) for additional information.
>

== Installation ==

1. Upload the 'WP Logo Showcase Responsive Slider' folder to the '/wp-content/plugins/' directory.
2. Activate the "WP Logo Showcase Responsive Slider" list plugin through the 'Plugins' menu in WordPress.
3. Add a new page and add this short code 
<code>[logoshowcase]</code>
4. Template code is 
<code><?php echo do_shortcode('[logoshowcase]'); ?></code>


== Screenshots ==

1. Logo Showcase in slider view and Center Mode.
2. Logo Showcase with category.
3. Category with shortcode.
4. Add a Logo


== Changelog ==

= 1.2.6 =
* Fixed Arrow position and pointer effect.
* [+] Added new class wplss-logo-slide for slider
* Fixed center display issue on mobile device

= 1.2.5 =
* [+] Added "How it work" tab.
* [+] Added text domain for translation.
* [-] Removed Pro design tab.

= 1.2.4 =
* Added PRO plugin design page.
* Updated some plugin post type parameters.

= 1.2.3 =
* Updated slider js to latest version.
* Added new shortcode parameter "start_slide" to initialize particular slide.
* Resolved other language url issue.

= 1.2.2 =
* Added two new shortcode parameters "order and orderby"

= 1.2.1 =
* Fixed some css issues.
* Resolved multiple slider jquery conflict issue.

= 1.2 =
* Fixed some bugs
* Added 2 new shortcode parameters ie show_title="false" image_size="original"

= 1.1 =
* Fixed some bugs
* Add link for logo
* Added new shortcode parameter "link_target"

= 1.0 =
* Initial release
* Adds custom post type


== Upgrade Notice ==

= 1.2.6 =
* Fixed Arrow position and pointer effect.
* [+] Added new class wplss-logo-slide for slider
* Fixed center display issue on mobile device


= 1.2.5 =
* [+] Added "How it work" tab.
* [+] Added text domain for translation.
* [-] Removed Pro design tab.

= 1.2.4 =
* Added PRO plugin design page.
* Updated some plugin post type parameters.

= 1.2.3 =
* Updated slider js to latest version.
* Added new shortcode parameter "start_slide" to initialize particular slide.
* Resolved other language url issue.

= 1.2.2 =
* Added two new shortcode parameters "order and orderby"

= 1.2.1 =
* Fixed some css issues.
* Resolved multiple slider jquery conflict issue.

= 1.2 =
* Fixed some bugs.
* Added 2 new shortcode parameters ie show_title="false" image_size="original"

= 1.1 =
* Fixed some bugs
* Add link for logo
* Added new shortcode parameter "link_target"

= 1.0 =
* Initial release.
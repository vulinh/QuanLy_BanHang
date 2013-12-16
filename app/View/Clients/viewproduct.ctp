 <script type="text/javascript">
        function similar_initCallback(carousel)
        {
            // Disable autoscrolling if the user clicks the prev or next button.
            carousel.buttonNext.bind('click', function() {
                carousel.startAuto(0);
            });
            
            carousel.buttonPrev.bind('click', function() {
                carousel.startAuto(0);
            });
            
            // Pause autoscrolling if the user moves with the cursor over the clip.
            carousel.clip.hover(function() {
                carousel.stopAuto();
            }, function() {
                carousel.startAuto();
            });
        };
        // initialise plugins
        jQuery(document).ready(function($) {
            $("ul.sf-menu").supersubs({
                minWidth:    10,   // minimum width of sub-menus in em units
                maxWidth:    15,   // maximum width of sub-menus in em units
                extraWidth:  1     // extra width can ensure lines don't sometimes turn over
            }).superfish({autoArrows: false,
                disableHI: false,
                dropShadows: false,
                onShow: function(){
                    $('ul.sf-menu ul ul').show().css({'visibility':'visible', width: '100%'});
                },
                onHide: function(){
                    $('ul.sf-menu ul ul').show().css({'visibility':'visible', width: '100%'});
                }
            });
            
            var basketTimeout;
            
            $('.basket .basket-button, .basket .basket-text').click(function(){
                var b = $('.basket-dropdown');
                
                if(basketTimeout) 
                    window.clearTimeout(basketTimeout);
                    
                if(b.is(":visible")) {
                    b.fadeOut();
                    return;
                }
                
                b.fadeIn().show();
                basketTimeout = window.setTimeout(function(){
                    b.fadeOut();
                }, 2000);
            });
            
            $('.basket-dropdown').mouseenter(function(){
                if(basketTimeout) 
                    window.clearTimeout(basketTimeout);
            }).mouseleave(function(){
                var $this = $(this);
                basketTimeout = window.setTimeout(function(){
                    $this.fadeOut();
                }, 1000);
            });
            
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur();
            
            $('select').uniform();
            
            $('.thumbnails .slides').jcarousel({
                vertical: true,
                scroll: 3,
            });
            
            var zoom_config = {zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,
                tint:true,
                tintColour:'#ebebeb',
                tintOpacity:0.5,
                borderSize: 0,
                zoomWindowWidth:300,
                zoomWindowHeight:390,
                lensBorderSize: 3,
                lensBorderColour: '#66bdc2', };
                
            $('.thumbnails-show img').elevateZoom(zoom_config);
                
            $('.thumbnails a').click(function(){
                var img = $('img', $(this)).clone();
                img.attr('data-zoom-image', $(this).attr('href'));
                
                img.elevateZoom(zoom_config);
                
                $('.thumbnails-show').html(img);
                return false;
            });
            
            $('.items-similar .slides').jcarousel({
                scroll: 1,
                initCallback: similar_initCallback,
                wrap: 'last',
                auto: 2,
            });
            
            $('.tabbed-box').upttabs();
            
            $('.captcha-refresh').on('click', function(e) {
                var $f = $(this).closest('form'), $img = $('.captcha-field img', $f);
                $img.attr('src', 'php/captchac170.jpg?w=80&amp;h=38&amp;rnd=' + Math.random());
                e.preventDefault();
            });
            // The Ajax Contact form
            $('#button-contact').on('click', function(e) {
                $.post('php/contact.html', $(this).closest('form').serialize(), function(res) {
                    alert(res);
                });
                e.preventDefault();
            });
            
        });
    </script>
<div id="content" class="grid_12">
                <!-- #main Starts -->
        <section class="single-product">
    
        
            

<div itemscope="" itemtype="http://schema.org/Product" id="product-1288" class="post-1288 product type-product status-publish hentry instock">

    <div class="images">

            <div class="thumbnails grid_2 alpha"><div class=" jcarousel-skin-thumb"><div class="jcarousel-container jcarousel-container-vertical" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-vertical" style="position: relative;"><ul class="slides jcarousel-list jcarousel-list-vertical" style="overflow: hidden; position: relative; top: -390px; margin: 0px; padding: 0px; left: 0px; height: 880px;"><li class="jcarousel-item jcarousel-item-vertical jcarousel-item-1 jcarousel-item-1-vertical" style="float: left; list-style: none;" jcarouselindex="1"><a href="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp11-800x678.jpg" title="foscarini-rock-pendent-lamp1"><img width="460" height="390" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp11-460x390.jpg" class="attachment-thumb_medium" alt="foscarini-rock-pendent-lamp1"></a></li><li class="jcarousel-item jcarousel-item-vertical jcarousel-item-2 jcarousel-item-2-vertical" style="float: left; list-style: none;" jcarouselindex="2"><a href="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp61-800x678.jpg" title="foscarini-rock-pendent-lamp6"><img width="460" height="390" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp61-460x390.jpg" class="attachment-thumb_medium" alt="foscarini-rock-pendent-lamp6"></a></li><li class="jcarousel-item jcarousel-item-vertical jcarousel-item-3 jcarousel-item-3-vertical" style="float: left; list-style: none;" jcarouselindex="3"><a href="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp51-800x678.jpg" title="foscarini-rock-pendent-lamp5"><img width="460" height="390" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp51-460x390.jpg" class="attachment-thumb_medium" alt="foscarini-rock-pendent-lamp5"></a></li><li class="jcarousel-item jcarousel-item-vertical jcarousel-item-4 jcarousel-item-4-vertical" style="float: left; list-style: none;" jcarouselindex="4"><a href="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp41-800x678.jpg" title="foscarini-rock-pendent-lamp4"><img width="460" height="390" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp41-460x390.jpg" class="attachment-thumb_medium" alt="foscarini-rock-pendent-lamp4"></a></li><li class="jcarousel-item jcarousel-item-vertical jcarousel-item-5 jcarousel-item-5-vertical" style="float: left; list-style: none;" jcarouselindex="5"><a href="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp31-800x678.jpg" title="foscarini-rock-pendent-lamp3"><img width="460" height="390" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp31-460x390.jpg" class="attachment-thumb_medium" alt="foscarini-rock-pendent-lamp3"></a></li><li class="jcarousel-item jcarousel-item-vertical jcarousel-item-6 jcarousel-item-6-vertical" style="float: left; list-style: none;" jcarouselindex="6"><a href="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp21-800x678.jpg" title="foscarini-rock-pendent-lamp2"><img width="460" height="390" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp21-460x390.jpg" class="attachment-thumb_medium" alt="foscarini-rock-pendent-lamp2"></a></li></ul></div><div class="jcarousel-prev jcarousel-prev-vertical" style="display: block;"></div><div class="jcarousel-next jcarousel-next-vertical jcarousel-next-disabled jcarousel-next-disabled-vertical" style="display: block;" disabled="disabled"></div></div></div></div>
        <a href="http://uptake.browsepress.com/wp-content/uploads/2012/12/dark-apollo-pendent-lamp21-800x678.jpg" itemprop="image" class="woocommerce-main-image zoom"><img width="460" height="390" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp41-460x390.jpg" class="attachment-thumb_medium" alt="foscarini-rock-pendent-lamp4" data-zoom-image="http://uptake.browsepress.com/wp-content/uploads/2012/12/foscarini-rock-pendent-lamp41-800x678.jpg"></a>
    
</div>

    <div class="summary entry-summary">

        <h1 itemprop="name" class="product_title entry-title">Foscarini Rock pendent lamp</h1><div itemprop="description">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</div>


    
    <form class="cart" method="post" enctype="multipart/form-data">

         <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

    <p itemprop="price" class="price"><span class="amount">£85</span></p>

    <meta itemprop="priceCurrency" content="GBP">
    <link itemprop="availability" href="http://schema.org/InStock">

</div>
         <div class="quantity buttons_added"><input type="button" value="-" class="minus"><input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text"><input type="button" value="+" class="plus"></div>

         <input type="hidden" name="add-to-cart" value="1288">

         <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>

         
    </form>

    
<div class="product_meta">

    
            <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">W018</span>.</span>
    
    <span class="posted_in">Categories: <a href="http://uptake.browsepress.com/product-category/floor-lamps/" rel="tag">Floor Lamps</a>, <a href="http://uptake.browsepress.com/product-category/storage/shelving/" rel="tag">Shelving</a>, <a href="http://uptake.browsepress.com/product-category/sofas/" rel="tag">Sofas</a>, <a href="http://uptake.browsepress.com/product-category/storage/" rel="tag">Storage</a>.</span>
    
    
</div>
    <div class="item-row item-social">
        <ul class="share-link clearfix">
                        <li class="email">
                <a href="mailto:support@browsepress.com" class="email">&nbsp;</a>
            </li>
                        <li>
                <div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="http://uptake.browsepress.com/product/foscarini-rock-pendent-lamp/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" fb-xfbml-state="rendered"><span style="height: 20px; width: 78px;"><iframe id="f1debd401c" name="f1bda96b08" scrolling="no" style="border: none; overflow: hidden; height: 20px; width: 78px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Dfaa1c6e5c%26domain%3Duptake.browsepress.com%26origin%3Dhttp%253A%252F%252Fuptake.browsepress.com%252Ff184c4201c%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=http%3A%2F%2Fuptake.browsepress.com%2Fproduct%2Ffoscarini-rock-pendent-lamp%2F&amp;layout=button_count&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=450"></iframe></span></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            </li>
            <li>
                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1386967771.html#_=1386988530172&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fuptake.browsepress.com%2Fproduct%2Ffoscarini-rock-pendent-lamp%2F&amp;size=m&amp;text=Foscarini%20Rock%20pendent%20lamp%20%7C%20My%20Site%2FBlog&amp;url=http%3A%2F%2Fuptake.browsepress.com%2Fproduct%2Ffoscarini-rock-pendent-lamp%2F" class="twitter-share-button twitter-tweet-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 110px; height: 20px;"></iframe>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </li>
            <li>
                <script type="text/javascript" src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script>
                <div style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 96px; height: 20px; background-position: initial initial; background-repeat: initial initial;" id="___plus_0"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 96px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1386988530204" name="I0_1386988530204" src="https://apis.google.com/u/0/_/+1/sharebutton?plusShare=true&amp;usegapi=1&amp;bsv=o&amp;action=share&amp;annotation=bubble&amp;origin=http%3A%2F%2Fuptake.browsepress.com&amp;url=http%3A%2F%2Fuptake.browsepress.com%2Fproduct%2Ffoscarini-rock-pendent-lamp%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.7LR_B2qgAYA.O%2Fm%3D__features__%2Fam%3DYQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTMMf3mDVfG6h7pbYGlAnYHNQeDQng#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1386988530204&amp;parent=http%3A%2F%2Fuptake.browsepress.com&amp;pfname=&amp;rpctoken=25236952" data-gapiattached="true" title="+Chia sẻ"></iframe></div>
            </li>
        </ul>
    </div>

    </div><!-- .summary -->

    
    <div class="woocommerce-tabs">
        <ul class="tabs">
            
                <li class="description_tab active">
                    <a href="#tab-description">Description</a>
                </li>

            
                <li class="reviews_tab">
                    <a href="#tab-reviews">Reviews (0)</a>
                </li>

                    </ul>
        
            <div class="panel entry-content" id="tab-description" style="display: block;">
                
<h2>Product Description</h2>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            </div>

        
            <div class="panel entry-content" id="tab-reviews" style="display: none;">
                <div id="reviews"><div id="comments"><h2>Reviews</h2><p class="noreviews">There are no reviews yet, would you like to <a href="#review_form" class="inline show_review_form">submit yours</a>?</p></div><div id="review_form_wrapper" style="display: none;"><div id="review_form">                                <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">Be the first to review “Foscarini Rock pendent lamp” <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/foscarini-rock-pendent-lamp/#respond" style="display:none;">Cancel reply</a></small></h3>
                                    <p class="must-log-in">You must be <a href="http://uptake.browsepress.com/wp-login.php?redirect_to=http%3A%2F%2Fuptake.browsepress.com%2Fproduct%2Ffoscarini-rock-pendent-lamp%2F">logged in</a> to post a comment.</p>                                                </div><!-- #respond -->
            </div></div><div class="clear"></div></div>
            </div>

            </div>

<h3 class="more-product-header">Related Products</h3>
<div id="related-products" class="pull overlay overflow-products">
    <div class="related products">
        <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;"><ul class="products jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 1040px;">
            
                <li class="post-1284 product type-product status-publish hentry first instock jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: none;" jcarouselindex="1">

        <span name="cats" class="floor-lamps lounge-chairs" style="display: none;"></span>
    <input type="hidden" name="total_sales" value="5">
    <input type="hidden" name="post_date" value="1355150076">

    <a href="http://uptake.browsepress.com/product/vondom-vases/">

            <div class="post-media">
        <img width="220" height="220" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/vondom-vases61-220x220.jpg" class="attachment-thumb_normal wp-post-image" alt="vondom-vases6">    </div>
    <div class="post-content"><i></i>

        <h3>Vondom Vases</h3>

        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    <div class="post-meta">
            <span class="post-author"><span class="title">Author:</span> Dorothy Draper, Maarten Baas</span><br>


    <span class="price"><span class="from">From: </span><span class="amount">£6</span></span>
    </div>
</div><!-- .post-content -->
<div class="clearfix"></div>

    </a>

        <i class="basket-corner"></i>


    <a href="http://uptake.browsepress.com/product/vondom-vases/" rel="nofollow" data-product_id="1284" data-product_sku="W022" class=" button product_type_variable">Select options</a>

</li>
            
                <li class="post-1286 product type-product status-publish hentry instock jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" style="float: left; list-style: none;" jcarouselindex="2">

        <span name="cats" class="benches lounge-chairs ottomans rugs sofas" style="display: none;"></span>
    <input type="hidden" name="total_sales" value="6">
    <input type="hidden" name="post_date" value="1355150182">

    <a href="http://uptake.browsepress.com/product/eames-plastic-armchair/">

            <div class="post-media">
        <img width="220" height="220" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/eames-plastic-armchair9-220x220.jpg" class="attachment-thumb_normal wp-post-image" alt="eames-plastic-armchair">    </div>
    <div class="post-content"><i></i>

        <h3>Eames Plastic Armchair</h3>

        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    <div class="post-meta">
            <span class="post-author"><span class="title">Author:</span> Syrie Maugham</span><br>


    <span class="price"><span class="amount">£39</span></span>
    </div>
</div><!-- .post-content -->
<div class="clearfix"></div>

    </a>

        <i class="basket-corner"></i>


    <a href="/product/foscarini-rock-pendent-lamp/?add-to-cart=1286" rel="nofollow" data-product_id="1286" data-product_sku="W020" class="add_to_cart_button button product_type_simple">Add to cart</a>

</li>
            
                <li class="post-1285 product type-product status-publish hentry featured instock jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" style="float: left; list-style: none;" jcarouselindex="3">

        <span name="cats" class="floor-lamps" style="display: none;"></span>
    <input type="hidden" name="total_sales" value="1">
    <input type="hidden" name="post_date" value="1355150090">

    <a href="http://uptake.browsepress.com/product/wall-lamp/">

            <div class="post-media">
        <img width="220" height="220" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/wall-lamp1-220x220.jpg" class="attachment-thumb_normal wp-post-image" alt="wall-lamp">    </div>
    <div class="post-content"><i></i>

        <h3>Wall Lamp</h3>

        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    <div class="post-meta">
            <span class="post-author"><span class="title">Author:</span> Maarten Baas</span><br>


    <span class="price"><span class="amount">£1,140</span></span>
    </div>
</div><!-- .post-content -->
<div class="clearfix"></div>

    </a>

        <i class="basket-corner"></i>


    <a href="/product/foscarini-rock-pendent-lamp/?add-to-cart=1285" rel="nofollow" data-product_id="1285" data-product_sku="W021" class="add_to_cart_button button product_type_simple">Add to cart</a>

</li>
            
                <li class="post-1300 product type-product status-publish hentry last instock jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" style="float: left; list-style: none;" jcarouselindex="4">

        <span name="cats" class="sofas" style="display: none;"></span>
    <input type="hidden" name="total_sales" value="2">
    <input type="hidden" name="post_date" value="1355151266">

    <a href="http://uptake.browsepress.com/product/eames-plastic-side-chair/">

            <div class="post-media">
        <img width="220" height="220" src="http://uptake.browsepress.com/wp-content/uploads/2012/12/eames-plastic-side-chair7-220x220.jpg" class="attachment-thumb_normal wp-post-image" alt="eames-plastic-side-chair">    </div>
    <div class="post-content"><i></i>

        <h3>Eames Plastic Side Chair</h3>

        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    <div class="post-meta">
            <span class="post-author"><span class="title">Author:</span> Davis Allen</span><br>


    <span class="price"><span class="amount">£29</span></span>
    </div>
</div><!-- .post-content -->
<div class="clearfix"></div>

    </a>

        <i class="basket-corner"></i>


    <a href="/product/foscarini-rock-pendent-lamp/?add-to-cart=1300" rel="nofollow" data-product_id="1300" data-product_sku="W007" class="add_to_cart_button button product_type_simple">Add to cart</a>

</li>
            
        </ul></div><div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" style="display: block;" disabled="disabled"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div></div>
    </div>
</div>

</div><!-- #product-1288 -->


        
                    <div class="clearfix"></div></section><!-- /#main -->
    </div>
<div id="pdfex-wrap" class="wrap">

	

    <div class="icon32" id="icon-tools"><br></div>	

	<h2><?php _e('Add Templates'); ?></h2>

        

    <?php if( isset($message) && $message!='' ) echo $message; ?>



    <p class="desc-text"><?php _e( 'Post PDF Export plugin allows you to create pdf template. You can create multiple template and be able to choose which one you prefer during the download. <br /> Click <a target="_blank" href="http://cmdino.com/post-pdf-export/">here</a> to see more info about the template.' ); ?></p>

		

    <div id="form-wrap">    

        

		<form method="post">

            

        	<div class="actions-wrap">

            

               	<input type="submit" id="pdfex-save" name="pdfex_save" class="button-primary" value="<?php _e('Save Template');?>">

                

            </div>

            

            <div class="clr"></div>

            

            <input type="hidden" id="templateid" name="templateid" value="<?php echo ( isset( $on_edit )?$on_edit->template_id:'' );?>">

            

            <div class="field-wrap">

                <div class="field">

                        <label><?php echo _e( "Template Name" ); ?> </label>

                        <input type="text" id="templatename" name="templatename" value="<?php echo ( isset( $on_edit )?$on_edit->template_name:'' );?>" />

                </div>

                <div class="note">

                        <span>( <?php _e("Provide template title."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap">

                <div class="field">

                        <label><?php _e('Template Description');?></label>

                        <textarea class="ta_standard" name="description"><?php echo ( isset( $on_edit )?$on_edit->template_description:'' );?></textarea>

                </div>

                <div class="note">

                        <span>( <?php _e("Provide a short description of this template."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap">

                <div class="field">

                        <label><?php _e('Template Loop');?></label>

                        <div class="clr"></div>

                        <div class="inner">

                            <div class="wd500 fl">

                                <?php

                                    $args = array( "textarea_name" => "looptemplate" );

                                    wp_editor( ( isset( $on_edit )?$on_edit->template_loop:'' ) , "looptemplate", $args );

                                ?>

                                <div class="clr"></div>

                            </div>



                            <div class="code-list wd300 fl">



                                <ul>

                                    <li><a class="code" rel="title">Title</a></li>

                                    <li><a class="code" rel="excerpt">Excerpt</a></li>

                                    <li><a class="code" rel="content">Content</a></li>

                                    <li><a class="code" rel="permalink">Permalink</a></li>

                                    <li><a class="code" rel="date">Date</a></li>

                                    <li><a class="code" rel="author">Author</a></li>

                                    <li><a class="code" rel="author_photo">Author Photo</a></li>

                                    <li><a class="code" rel="author_description">Author Description</a></li>

                                    <li><a class="code" rel="status">Status</a></li>

                                    <li><a class="code" rel="featured_image">Featured Image</a></li>

                                    <li><a class="code" rel="category">Category</a></li>

                                    <li><a class="code" rel="tags">Tags</a></li>

                                    <li><a class="code" rel="comments_count">Comments Count</a></li>

                                </ul>



                                <div class="clr"></div>



								<p class="desc-text"><?php _e( 'In case you are user the html editor, here is the shortcode reference: 

                                <br /><br /><span class="code">[title],[excerpt],[content],[permalink],[date],[author],[author_photo],[author_description],[status],[featured_image],[category],[tags],[comments_count]</span>

                                <br /><br />Click <a target="_blank" href="http://cmdino.com/post-pdf-export/">here</a> to see full details about this shortcodes.' ); ?></p>



                            </div>

                            <div class="clr"></div>

                        </div>

                </div>

                <div class="clr"></div>

                <div class="note">

                        <span>( <?php _e("Custruct this template's loop part. Click <a target='_blank' href='http://cmdino.com/post-pdf-export/'>here</a> to see more info about the template loop part."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap nomar">

                <div class="field">

                        <label><?php _e('Template Body');?></label>

                        <div class="clr"></div>

                        <div class="inner">

                            <div class="wd500 fl">

                                <?php

                                    $args = array( "textarea_name" => "bodytemplate" );

                                    wp_editor( ( isset( $on_edit )?$on_edit->template_body:'' ) , "bodytemplate", $args );

                                ?>

                                <div class="clr"></div>

                            </div>



                            <div class="code-list wd300 fl">



                                <ul>

                                    <li><a class="code" rel="loop">Loop</a></li>

                                    <li><a class="code" rel="site_title">Site Title</a></li>

                                    <li><a class="code" rel="site_tagline">Site Tagline</a></li>

                                    <li><a class="code" rel="site_url">Site URL</a></li>

                                    <li><a class="code" rel="date_today">Date Today</a></li>

                                    <li><a class="code" rel="from_date">Date(From)</a></li>

                                    <li><a class="code" rel="to_date">Date(To)</a></li>

                                    <li><a class="code" rel="categories">Categories</a></li>

                                    <li><a class="code" rel="post_count">Post Count</a></li>

                                </ul>



                                <div class="clr"></div>



								<p class="desc-text"><?php _e( 'In case you are user the html editor, here is the shortcode reference: 

                                <br /><br /><span class="code">[loop],[site_title],[site_tagline],[site_url],[date_today],[from_date],[to_date],[categories],[post_count]</span>

                                <br /><br /> Click <a target="_blank" href="http://cmdino.com/post-pdf-export/">here</a> to see full details about this shortcodes.' ); ?></p>



                            </div>

                            <div class="clr"></div>

                    </div>

                </div>

                <div class="clr"></div>

                <div class="note">

                        <span>( <?php _e("Custruct this template's body part. Click <a target='_blank' href='http://cmdino.com/post-pdf-export/'>here</a> to see more info about the template body part."); ?> )</span>

                </div>

            </div>

            

            <div class="clr"></div>

            

            <div class="actions-wrap">

            

                	<input type="submit" id="pdfex-save" name="pdfex_save" class="button-primary" value="<?php _e('Save Template');?>">

                

            </div>

            

       </form>

       

       </div>

       

</div>



<div id="pdfex-donate-wrap">



	<h3>If you find this pluin helpfull, you can donate using button below.</h3>

    

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

    <input type="hidden" name="cmd" value="_donations">

    <input type="hidden" name="business" value="cmdino88@yahoo.com">

    <input type="hidden" name="lc" value="US">

    <input type="hidden" name="item_name" value="Post PDF Export">

    <input type="hidden" name="no_note" value="0">

    <input type="hidden" name="currency_code" value="USD">

    <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">

    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

    </form>

    

    <p>Your donation will help the developer to continue improving this plugin.</p>

    <a href="https://managewp.com/?utm_source=A&utm_medium=Banner&utm_content=mwp_banner_4_125x125&utm_campaign=A&utm_mrl=636"><img src="https://managewp.com/banners/affiliate/mwp_banner_4_125x125.jpg" /></a>
    <a href='http://www.magicaffiliateplugin.com?affid=438' target='_blank'><img src='http://www.magicaffiliateplugin.com/img/mga-125x125.gif' alt='Magic Affiliate Plugin' height='125' width='125' border='0'></a>
    <a href="http://www.tipsandtricks-hq.com/wordpress-estore-plugin-complete-solution-to-sell-digital-products-from-your-wordpress-blog-securely-1059?ap_id=cmdino88" target="_blank"><img src="https://s3.amazonaws.com/product_banners/eStore_banner_125_125.gif" alt="WP Shopping Cart" border="0" /></a>
    <a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=19074_0_1_3" target="_blank"><img border="0" src="http://www.elegantthemes.com/affiliates/banners/125x125-2.gif" width="125" height="125" alt=""></a>

	

</div>
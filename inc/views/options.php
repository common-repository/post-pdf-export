<div id="pdfex-wrap" class="wrap">



    <div class="icon32" id="icon-options-general"><br></div>

    <h2><?php echo PDFEXPORT_NAME.' '.__('Options'); ?></h2>



    <?php if( isset($message) && $message!='' ) echo $message; ?>

    

    <div id="form-wrap">  



		<form id="pdfex_form" method="post">



            <div class="field-wrap">

                <div class="field">

                    <label><?php echo _e( "User theme's CSS?" ); ?> </label>

                    <input type="checkbox" name="enablecss" id="enablecss" <?php echo ( ( isset( $options['enablecss'] ) && $options['enablecss'] == 'on' ) ? 'checked="checked"' : '' );?> >

                </div>

                <div class="note">

                    <span>( <?php _e("Tick this checkbox if you want to enable your theme's main CSS in the PDF."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap">

                <div class="field">

                    <label><?php _e( "Export PDF Title" ); ?> </label>

                    <input type="text" name="title" id="title" value="<?php echo ( ( isset( $options['title'] ) ) ? $options['title'] : '' );?>">

                </div>

                <div class="note">

                    <span>( <?php _e("Put % plus date format(dd,mm,yyyy) to display export date. Ex: Report %dd-%mm-%yyyy.Put keyword '%template' to display the template name. EX: Repost %template."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap">

                <div class="field">

                    <label><?php _e( "Enable single post download"); ?> </label>

                    <input type="checkbox" name="postdl" id="postdl" <?php echo ( ( isset( $options['postdl'] ) && $options['postdl'] == 'on' ) ? 'checked="checked"' : '' );?> >

                </div>

                <div class="note">

                    <span>( <?php _e("Tick this checkbox if you want to enable PDF download on each post."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap">

                <div class="field">

                    <label><?php _e( "Post download template" ); ?> </label>

                    <select name="dltemplate">



                            <option <?php echo ( ( $options['dltemplate']=='def' )?'selected="selected"':'' );?> value="def"><?php _e('Default');?></option>



                            <?php if( count( $templates ) ) : ?>



                                    <?php foreach( $templates as $template ) :?>

                                            

                                            <option <?php echo ( ( $template->template_id == $options['dltemplate'] )?'selected="selected"':'' );?> value="<?php echo $template->template_id;?>"><?php echo $template->template_name;?></option>

                                           

                                    <?php endforeach; ?>

                                            

                            <?php endif; ?>

                    </select>

                </div>

                <div class="note">

                    <span>( <?php _e("Select template for single post download. The download will only take the loop part from the selected template."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap">

                <div class="field">

                    <label><?php _e( "Custom style" ); ?> </label>

                    <textarea name="customcss" id="customcss"><?php echo ( ( isset( $options['customcss'] ) ) ? $options['customcss'] : '' );?></textarea>

                </div>

                <div class="note">

                    <span>( <?php _e("Apply your custom styles here. Do not include style tag( &lt;style&gt; , &lt;/style&gt; )."); ?> )</span>

                </div>

            </div>

        

            <p class="submit">

                    <input type="submit" name="pdfex_save_option" class="button-primary" value="Save Changes">

            </p>

        

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
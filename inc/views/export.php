<div id="pdfex-wrap" class="wrap">



    <div class="icon32" id="icon-tools"><br></div>

    <h2><?php echo PDFEXPORT_NAME; ?></h2>

        

    <?php if( isset($message) && $message!='' ) echo $message; ?>



    <p class="desc-text"><?php _e( "Post PDF Export plugin allows you to instantly download post from your site. Use this form to set parameters for the download. You can also use the shortcode '<span class='code'>[pdfex]</span>' <br /> for frontend implementation. This shortcode display a download link. You can also add 

    parameters on it EX: '<span class='code'>[pdfex text='Download' cat='1' template='1']</span>'. <br /> Click <a target='_blank' href='http://cmdino.com/post-pdf-export/'>here</a> to see more info about the shortcode." );?></p>



    <div id="form-wrap">

        

        <form id="pdfex_form" method="post" action="<?php echo $option_url;?>">



            <div class="field-wrap">

                <div class="field">

                        <label><?php echo _e( "Span" ); ?> </label>

                        <span class="sept-mar"><?php echo _e( 'From' ); ?></span><input type="text" class="datepicker" id="from" name="from" value="" >

                        <span class="sept-mar"><?php echo _e( 'To' ); ?></span><input type="text" class="datepicker" id="to" name="to" value="" >

                </div>

            </div>



            <div class="field-wrap">



                <div class="field">



                    <div class="wd200 fl">

                        <label><?php _e( "Category" ); ?></label>

                        <?php echo $select_cats; ?>

                        <input class="all-btn sept-mar" type="button" value="Select All">

                    </div>



                    <div class="wd200 fl">

                        <label><?php _e( "Author" ); ?></label>

                        <?php echo $select_author; ?>

                        <input class="all-btn sept-mar" type="button" value="Select All">

                    </div>



                    <div class="wd200 fl">



                        <label class="marb5"><?php _e( "Status" ); ?></label>

                        <select id="status" name="status[]" multiple="multiple">

                            <option selected="selected" value="any"><?php _e( 'Any' );?></option>

                            <option value="publish"><?php _e( 'Publish' );?></option>

                            <option value="pending"><?php _e( 'Pending Review' );?></option>

                            <option value="draft"><?php _e( 'Draft' );?></option>

                            <option value="future"><?php _e( 'Future' );?></option>

                            <option value="private"><?php _e( 'Private' );?></option>

                        </select>



                    </div>



                    <div class="clr"></div>



                </div>



                <div class="clr"></div>



                <div class="note">

                        <span>( <?php _e("Select parameters to download. Will download all if each set to blank."); ?> )</span>

                </div>



            </div>



            <div class="field-wrap">

                <div class="field">

                        <label><?php _e( "Paper size" ); ?> </label>

                        <select id="papersize" name="papersize">

                                    

                            <?php foreach( $select_sizes as $select_size ) : ?>

                                        

                                    <option value="<?php echo $select_size; ?>"><?php echo $select_size; ?></option>

                                        

                            <?php endforeach; ?>

                                        

                        </select>

                </div>

                <div class="note">

                        <span>( <?php _e("Select paper size."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap">

                <div class="field">

                        <label><?php _e( "Orientation" ); ?> </label>

                        <select id="orientation" name="orientation">

                                    

                            <?php foreach( $select_ors as $select_or ) : ?>

                                        

                                    <option value="<?php echo $select_or; ?>"><?php echo $select_or; ?></option>

                                        

                            <?php endforeach; ?>

                                        

                        </select>

                </div>

                <div class="note">

                        <span>( <?php _e("Select paper orientation."); ?> )</span>

                </div>

            </div>



            <div class="field-wrap">

                <div class="field">

                        <label><?php _e( "Template" ); ?> </label>

                        <select name="template">

                                <option value="def">Default</option>



                                <?php if( count( $templates ) ) : ?>

                                            

                                        <?php foreach( $templates as $template ) :?>

                                                

                                                <option value="<?php echo $template->template_id;?>"><?php echo $template->template_name;?></option>

                                                    

                                        <?php endforeach; ?>

                                                

                                <?php endif; ?>

                        </select>

                </div>

                <div class="note">

                        <span>( <?php _e("Select paper orientation."); ?> )</span>

                </div>

            </div>

            

            <p class="submit">

            		<input type="submit" id="pdfex-export" name="pdfex_export" class="button-primary" value="<?php echo _e('Download'); ?>">

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


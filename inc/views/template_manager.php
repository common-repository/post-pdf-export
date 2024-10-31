

<div id="pdfex-wrap" class="wrap">

		

		<div class="icon32" id="icon-tools"><br></div>

		<h2><?php _e('Manage Templates'); ?><a class="add-new-h2" href="<?php menu_page_url( 'pdfex-add-template' , true );?>"><?php _e( 'Add New' );?></a></h2>



        <?php if( isset($message) && $message!='' ) echo $message; ?>



		<p class="desc-text"><?php _e( 'Post PDF Export plugin allows you to create pdf template. You can create multiple template and be able to choose which one you prefer during the download. <br /> Click <a target="_blank" href="http://cmdino.com/post-pdf-export/">here</a> to see more info about the template.' ); ?></p>



        <form method="post">

          	<?php echo $table;?>

        </form>

		        

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

	<a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=19074_0_1_7" target="_blank"><img border="0" src="http://www.elegantthemes.com/affiliates/banners/468x60.gif" width="468" height="60" alt=""></a>

</div>
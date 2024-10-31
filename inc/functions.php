<?php

/*
 * Returns download button link
*/
function pdfex_post_download(){
	
	$post_type = get_post_type( get_the_ID() );
	$link = '';
	if( $post_type=='post' ) {
		$url = add_query_arg( 'pdfex_dl' , get_the_ID() );
		$link = '<a href="' . $url . '"><img src="' . PDFEXPORT_PLUGIN_URL . 'images/download-icon.png"></a>';
	}
	
	return $link;
	
}

/*
 * Display download button
*/
function apply_posts_download( $atts = array() ){

		$link = '';
		$text = ( isset( $atts['text'] ) )? $atts['text'] : 'Download';
		$atts['pdfex_post_dl'] = 'true';
		
		if( count( $atts ) > 0 ) {
			foreach( $atts as $key => $att ) {
				$atts[$key] = urlencode($att );
			}
		}

		if( isset( $atts['text'] ) ) { unset( $atts['text'] ); }
		$dllink  = add_query_arg( $atts );
		$link = sprintf( '<a href="%1$s">%2$s</a>' , $dllink , $text );

		return $link;

}

?>
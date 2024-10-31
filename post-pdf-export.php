<?php

/*

Plugin Name: Post PDF Export

Plugin URI: http://cmdino.com/

Description: PDF plugin that gives instant post download( PDF format ) functionality.

Version: 1.0.1

Author: Cristopgher M. Diño

Author URI: http://cmdino.com/about-me/

License: GPL v2



Copyright (C) 2012  Cristopher M. Diño



This program is free software; you can redistribute it and/or

modify it under the terms of the GNU General Public License

as published by the Free Software Foundation; either version 2

of the License, or (at your option) any later version.



This program is distributed in the hope that it will be useful,

but WITHOUT ANY WARRANTY; without even the implied warranty of

MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

GNU General Public License for more details.



You should have received a copy of the GNU General Public License

along with this program; if not, write to the Free Software

Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.



*/



set_time_limit(300);

ini_set('memory_limit', '-1');


define( 'PDFEXPORT_NAME'        , 'Post PDF Export' );

define( 'PDFEXPORT_BASE_NAME'   , 'post-pdf-export' );

define( 'PDFEXPORT_VERSION'     , '1.0.1' );

define( 'PDFEXPORT_PLUGIN_URL'  , plugin_dir_url(  __FILE__  ) );

define( 'PDFEXPORT_PLUGIN_PATH' , plugin_dir_path(  __FILE__  ) );

define( 'PDFEXPORT_STYLE'       , PDFEXPORT_PLUGIN_PATH . '/css/style.css' );

define( 'PDF_STYLE'       		, PDFEXPORT_PLUGIN_URL . 'css/pdf_style.css' );



// Include dompdf

include( PDFEXPORT_PLUGIN_PATH.'/dompdf/dompdf_config.inc.php' );

// Instantiate dompdf library

$dompdf = new DOMPDF();



// Include shortcode class

include( PDFEXPORT_PLUGIN_PATH.'/inc/shortcode_class.php' );

$shortcode = new shortcode();



// Include core

include( PDFEXPORT_PLUGIN_PATH.'/inc/core_class.php' );

// Instantiate core class

$pdfex_core = new pdfex_core();



// Include functions

include( PDFEXPORT_PLUGIN_PATH.'/inc/functions.php' );



// Set option values

function pdfex_initializer(){

	

	// Instantiate core class

	$pdfex_core = new pdfex_core();

	// Call plugin initializer

	$pdfex_core->install_init();

	

}

register_activation_hook( __FILE__ , 'pdfex_initializer' );



// Unset option values

function pdfex_remove(){

	

	// Delete plugin options

	delete_option( 'pdfex_options' );



}

register_deactivation_hook( __FILE__ , 'pdfex_remove' );



?>
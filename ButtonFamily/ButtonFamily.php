<?php
/***************************************************************
# Author:	Michael McCouman jr.
# Revision: 09-Apr-2006 / 22:25	
# Release: 17.x-18.0
#
# Copyright (c) 2010 Wikiunity - http://www.wikiunity.com 
#
****************************************************************/

if( !defined( 'MEDIAWIKI' ) ) {
  die( "This file is part of MediaWiki and is not a valid entry point\n" );
}

	//load images
	$buttonpath 		= "extensions/ButtonFamily/iconset"; 
	$ButtongtocPng 		= "$buttonpath/buttong_toc.png";
	$ButtongbrPng 		= "$buttonpath/buttong_br.png";
	$ButtongprePng 		= "$buttonpath/buttong_pre.png";
	$ButtongcodePng 	= "$buttonpath/buttong_code.png";
	$ButtongstrikePng 	= "$buttonpath/buttong_strike.png";
	$ButtongsmallPng 	= "$buttonpath/buttong_text_klein.png";
	$ButtongbigPng 		= "$buttonpath/buttong_text_gross.png";
	$ButtongredirectPng = "$buttonpath/buttong_redirect.png";
	$ButtongcategoryPng = "$buttonpath/buttong_kategorie.png";
	$ButtonggalleryPng 	= "$buttonpath/buttong_gallery.png";
	$ButtongtablePng 	= "$buttonpath/buttong_table.png";

	//start hooks
	$wgHooks['EditPage::showEditForm:initial'][] = 'ButtonFamily';
	
	//regist spezial page
	$wgExtensionCredits['other'][]= array(
  		'name'           => 'ButtonFamily', 
  		'version'        => '1.2', 
  		'author'         => 'Michael [[User:McCouman|<span style="color:#000;">McCouman</span>]] jr.', 
 		'url'            => 'http://www.wikiunity.com', 
  		'descriptionmsg'    => 'buttons-desc',
  	);

	//load
	$dir = dirname(__FILE__) . '/'; 
	//i8n
	$wgExtensionMessagesFiles['ButtonFamily'] = $dir . 'ButtonFamily.i18n.php';


function ButtonFamily ($editPage) { 
  
  wfLoadExtensionMessages( 'ButtonFamilys' );
  global $wgOut, $wgScriptPath, $ButtongtocPng, $ButtongbrPng, 
  	
  	//regist				//longs					//langs					//more
  	$ButtongprePng, 		$ButtongcodePng,   		$ButtongstrikePng, 		$ButtongsmallPng, 
  	$ButtongbigPng, 		$ButtongredirectPng, 	$ButtongcategoryPng, 	$ButtonggalleryPng, 
  	$ButtongtablePng,		$ButtonLangtoc, 		$ButtonLangbr, 
  	$ButtonLangpre,			$ButtonLangpre2, 		$ButtonLangcode,
  	$ButtonLangcode2,		$ButtonLangstrike, 		$ButtonLangstrike2,
  	$ButtonLangsmall,		$ButtonLangsmall2, 		$ButtonLangbig,
  	$ButtonLangbig2,		$ButtonLangredirect, 	$ButtonLangredirect2,
  	$ButtonLangcategory,	$ButtonLangcategory2, 	$ButtonLanggallery,
  	$ButtonLanggallery2,	$ButtonLangtable, 		$ButtonLangtable2;
 	
 	//regist msg
  	$ButtonLangtoc 			= wfMsg( 'buttons-toc' ); 
  	$ButtonLangbr 			= wfMsg( 'buttons-br' );
  	$ButtonLangpre 			= wfMsg( 'buttons-pre' );
  	$ButtonLangpre2 		= wfMsg( 'buttons-pre2' );
  	$ButtonLangcode 		= wfMsg( 'buttons-code' );
  	$ButtonsLangcode2 		= wfMsg( 'buttons-code2' );
  	$ButtonLangstrike 		= wfMsg( 'buttons-strike' );
  	$ButtonLangstrike2 		= wfMsg( 'buttons-strike2' );
  	$ButtonLangsmall 		= wfMsg( 'buttons-small' );
  	$ButtonLangsmall2 		= wfMsg( 'buttons-small2' );
  	$ButtonLangbig 			= wfMsg( 'buttons-big' );
  	$ButtonLangbig2 		= wfMsg( 'buttons-big2' );
  	$ButtonLangredirect 	= wfMsg( 'buttons-redirect' );
  	$ButtonLangredirect2 	= wfMsg( 'buttons-redirect2' );
  	$ButtonLangcategory 	= wfMsg( 'buttons-category' );
  	$ButtonLangcategory2 	= wfMsg( 'buttons-category2' );
  	$ButtonLanggallery 		= wfMsg( 'buttons-gallery' );
  	$ButtonsLanggallery2 	= wfMsg( 'buttons-gallery2' );
  	$ButtonLangtable 		= wfMsg( 'buttons-table' );
  	$ButtonLangtable2 		= wfMsg( 'buttons-table2' );

	//js returns
  	$wgOut->addScript("<script type=\"text/javascript\">\n".
	   
	   "function buttongtoc(){\n".
       "  addButton('$ButtongtocPng','$ButtonLangtoc','__TOC__','','');".
       "}\n".
       
       "addOnloadHook(buttongtoc);\n".
	   "function buttongbr(){\n".
       "  addButton('$ButtongbrPng','$ButtonsLangbr','<br />','','');".
       "}\n".
       
       "addOnloadHook(buttongbr);\n".
	   "function buttongpre(){\n".
       "  addButton('$ButtongprePng','$ButtonLangpre','<pre>','</pre>','$ButtonLangpre2');".
       "}\n".
       
       "addOnloadHook(buttongpre);\n".
	   "function buttongcode(){\n".
       "  addButton('$ButtongcodePng','$ButtonLangcode','<code>','</code>','$ButtonLangcode2');".
       "}\n".
       
       "addOnloadHook(buttongcode);\n".
	   "function buttongstrike(){\n".
       "  addButton('$ButtongstrikePng','$ButtonLangstrike','<strike>','</strike>','$ButtonLangstrike2');".
       "}\n".
       
       "addOnloadHook(buttongstrike);\n".
	   "function buttongsmall(){\n".
       "  addButton('$ButtongsmallPng','$ButtonLangsmall','<small>','</small>','$ButtonLangsmall2');".
       "}\n".
       
       "addOnloadHook(buttongsmall);\n".
	   "function buttongbig(){\n".
       "  addButton('$ButtongbigPng','$ButtonLangbig','<big>','</big>','$ButtonLangbig2');".
       "}\n".
       
       "addOnloadHook(buttongbig);\n".
	   "function buttongredirect(){\n".
       "  addButton('$ButtongredirectPng','$ButtonLangredirect','#REDIRECT [[',']]','$ButtonLangredirect2');".
       "}\n".
       
       "addOnloadHook(buttongredirect);\n".
	   "function buttongcategory(){\n".
       "  addButton('$ButtongcategoryPng','$ButtonLangcategory','[[$ButtonLangcategory:',']]','$ButtonLangcategory2');".
       "}\n".
       
       "addOnloadHook(buttongcategory);\n".
	   "function buttonggallery(){\n".
       "  addButton('$ButtonggalleryPng','$ButtonLanggallery','<gallery>\\n','</gallery>','$ButtonLanggallery2');".
       "}\n".
       "addOnloadHook(buttonggallery);\n".
	   
	   "function buttongtable(){\n".
       "  addButton('$ButtongtablePng','$ButtonLangtable','{| class=\"wikitable\" border=\"1\"\\n|-\\n','\\n|}','$ButtonLangtable2');".
       " }\n".
       
       "addOnloadHook(buttongtable);\n".
       "</script>");
       
    return true;
}
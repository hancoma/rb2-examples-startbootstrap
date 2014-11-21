<?php
if(!defined('__KIMS__')) exit;

//***********************************************************************************
// 설정배열
//***********************************************************************************

$d['layout']['dom'] = array(

	/** 설정 종류(영문소문자) **/
	'nav' => array(
		'Navigation', /** 탭 명칭(한글/영문) **/
		'', /** 탭 메세지(생략시 공백) **/
		array(
			array('brand','input','Brand',''),
		),
	),
  
	'intro' => array(
		'Introduction',
		'',
		array(
			array('heading','input','Heading',''), /** input="text" 입력상자 **/ 
			array('subheading','input','Sub Heading',''), /** input="text" 입력상자 **/ 
		),
	),

 	'comment' => array(
		'Comment',
		'Add <a href="http://disqus.com" target="_blank">Disqus</a> Code',
		array(
			array('disqus','radio','Disqus comments','Enabled=Y,Disabled=N'), /** 라디오박스 **/
		),
	),

 	'footer' => array(
		'Footer',
		'Please organize the Footer.',
		array(
			array('copyright','textarea','Copyright',''), /** input="text" 입력상자 **/ 
			array('sns01','input','twitter',''), /** input="text" 입력상자 **/ 
			array('sns02','input','facebook',''), /** input="text" 입력상자 **/ 
			array('sns03','input','Linkedin',''), /** input="text" 입력상자 **/ 
		),
	),

	/* 도움말 */
	'help' => array(
		'<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Help',
		'이 레이아웃은 킴스큐 2.0 에서 제공하는 기본 레이아웃입니다.',
		array(

		),
	),
);

//***********************************************************************************
?>
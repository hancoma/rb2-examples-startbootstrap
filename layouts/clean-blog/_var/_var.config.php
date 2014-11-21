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
		'<span class="glyphicon glyphicon glyphicon-question-sign" aria-hidden="true"></span> Guide',
		'<h4>Start Bootstrap Clean Blog</h4>
		Clean Blog is a stylish, responsive blog theme for Bootstrap created by Start Bootstrap. This theme features a blog homepage, about page, contact page, and an example post page along with a working PHP contact form.
		<hr>
		<h5>Source code</h5>
		<ul>
			<li><a href="https://github.com/IronSummitMedia/startbootstrap-clean-blog" target="_blank">Design template</a></li>
		 	<li><a href="https://github.com/kimsQ/rb2-examples-startbootstrap/tree/master/layouts/clean-blog" target="_blank">Rb2 layout</a></li>
		 </ul>

		<h5>Demo</h5>
		<ul>
			<li><a href="http://ironsummitmedia.github.io/startbootstrap-clean-blog/" target="_blank">Design template</a></li>
		 	<li><a href="http://demo.kimsq.com/rb2/clean-blog/" target="_blank">Rb2 site</a></li>
		 </ul>

		<h5>Docs</h5>
		<ul>
		 	<li><a href="http://docs.kimsq.com/rb2/docs/c/examples/start-bootstrap/clean-blog" target="_blank">Setting Guide</a></li>
		 </ul>',
		array(),
	),
);

//***********************************************************************************
?>
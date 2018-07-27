<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

//
// Section options
//

$section_options = new FieldsBuilder('options');
$section_options
	->addTab('Options')
	->addRadio('layout',
		['instructions' => 'Determines the width of the content.'])
		->addChoice('','Default')
		->addChoice('normal','Normal')
		->addChoice('wide','Wide')
		->addChoice('full','Full')
		->addChoice('narrow','Narrow')
	->addText('classes',
		['placeholder' => 'section--featured']);

//
// Sections, ordered alphabetically
//

// Hero
$hero = new FieldsBuilder('hero');
$hero
	->addText('title')
	->addImage('background_image')
	->addFields($wysiwyg)
	->addLink('cta', ['label'=>'Call to Action']);

$image = new FieldsBuilder('image');
$image
	->addImage('image');

// Post Grid
$postGrid = new FieldsBuilder('post_grid');
$postGrid
	->addRepeater('title')
	->addPageLink('page_link');

// Title
$title = new FieldsBuilder('title');
$title
	->addText('page_title')
	->addText('subtitle');

// WYSIWYG
$wysiwyg = new FieldsBuilder('wysiwyg');
$wysiwyg
	->addWysiwyg('content');

//
// Build out sections
//

$sections = new FieldsBuilder('sections');
$sections
	->addFlexibleContent('sections')
		->addLayout('hero')
			->addTab('Content')
			->addFields($hero)
			->addFields($section_options)
		->addLayout('image')
			->addTab('Content')
			->addFields($image)
			->addFields($section_options)
		->addLayout('post_grid')
			->addFields($section_options)
		->addLayout('copy_image')
			->addTab('Content')
			->addWysiwyg('copy')
			->addImage('image')
			->addText('image_caption')
			->addRadio('image_position', ['choices'=>['left'=>'Left','right'=>'Right']])
			->addFields($section_options)
		->addLayout('title')
			->addTab('Content')
			->addFields($title)
			->addFields($section_options)
		->addLayout('wysiwyg', ['label'=>'WYSIWYG'])
			->addTab('Content')
			->addFields($wysiwyg)
			->addFields($section_options);

$page_options = new FieldsBuilder('page_options');
$page_options
	->addTrueFalse('include_post_grid', ['default_value'=>1, 'ui'=>1])
	->addWysiwyg('teaser',[
		'instructions' => 'Appears in lists.',
		'media_upload' => 0
	]);

//
// Page content
//

$page = new FieldsBuilder('page');
$page
	->addTab('Page Content')
	->addFields($sections)
	->addTab('Page Options')
	->addFields($page_options)
	->setLocation('post_type', '==', 'page')
		->or('post_type', '==', 'post');

add_action('acf/init', function() use ($page) {
	acf_add_local_field_group($page->build());
});


//
// Options Page
//
$work = new StoutLogic\AcfBuilder\FieldsBuilder('work');
$work
		->addFields($postGrid)
		->setLocation('options_page', '==', 'acf-options-theme-settings');

add_action('acf/init', function() use ($work) {
   acf_add_local_field_group($work->build());
});

$options = new StoutLogic\AcfBuilder\FieldsBuilder('options');
$options
		->addImage('wordpress_icon', ['wrapper'=>['width'=>50]])
    ->addImage('react_icon', ['wrapper'=>['width'=>50]])
		->addRepeater('footer_links')
			->addText('link_url', ['wrapper'=>['width'=>50]])
			->addText('link_label', ['wrapper'=>['width'=>50]])
    ->setLocation('options_page', '==', 'acf-options-theme-settings');

add_action('acf/init', function() use ($options) {
   acf_add_local_field_group($options->build());
});

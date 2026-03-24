<?php
// This file is generated. Do not modify it manually.
return array(
	'custom-block-richtext' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/custom-block-richtext',
		'version' => '0.1.0',
		'title' => 'Custom Block Richtext',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'text' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'textdomain' => 'custom-block-richtext',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);

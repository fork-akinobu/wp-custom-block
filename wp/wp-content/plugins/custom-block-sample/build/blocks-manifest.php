<?php
// This file is generated. Do not modify it manually.
return array(
	'custom-block-sample' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'fk-create-block/custom-block-sample',
		'version' => '0.1.0',
		'title' => 'Custom Block Sample',
		'category' => 'design',
		'description' => 'サンプルカスタムブロックです',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'color' => array(
				'text' => true,
				'background' => true,
				'link' => true
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true
			),
			'spacing' => array(
				'padding' => true,
				'margin' => true
			)
		),
		'attributes' => array(
			'imageUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageAlt' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageAlign' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'textdomain' => 'custom-block-sample',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);

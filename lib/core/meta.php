<?php
function MyIMDB_API_Add_Meta_Box(){
	add_meta_box(
		"MyIMDB-API",
		__("MyIMDB API", "imdb"),
		"MyIMDB_API_Meta_Box",
		"post",
		"normal",
		"default"
	);
}

function imdb_meta_box( $meta_boxes ) {
	$prefix = 'imdb-';

	$meta_boxes[] = array(
		'id' => 'imdb-metabox',
		'title' => esc_html__( 'Movie / TV Info', 'imdb' ),
		'post_types' => array( 'post' ),
		'context' => 'advanced',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => 'poster_image',
				'type' => 'heading',
				'name' => esc_html__( 'Poster Image', 'imdb' ),
			),
			array(
				'id' => $prefix . 'image',
				'type' => 'url',
				'name' => esc_html__( 'Poster', 'imdb' ),
			),
			array(
				'id' => 'alternative_title',
				'type' => 'heading',
				'name' => esc_html__( 'Alternative Titles & Tagline', 'imdb' ),
			),
			array(
				"id" => $prefix . "aka",
				"type" => "text",
				"name" => esc_html__( "Aka", "imdb" ),
			),
			array(
				"id" => $prefix . "tagline",
				"type" => "text",
				"name" => esc_html__( "Tagline", "imdb" ),
			),
			array(
				"id" => "information",
				"type" => "heading",
				"name" => esc_html__( "General Informations", "imdb" ),
			),
			array(
				"id" => $prefix . "imdb",
				"type" => "text",
				"name" => esc_html__( "ID", "imdb" ),
			),
			array(
				"id" => $prefix . "url",
				"type" => "text",
				"name" => esc_html__( "Url", "imdb" ),
			),
			array(
				"id" => $prefix . "runtime",
				"type" => "text",
				"name" => esc_html__( "Runtime", "imdb" ),
			),
			array(
				"id" => $prefix . "releasedate",
				"type" => "text",
				"name" => esc_html__( "Release Date", "imdb" ),
			),
			array(
				"id" => $prefix . "description",
				"type" => "text",
				"name" => esc_html__( "Description", "imdb" ),
			),
			array(
				"id" => $prefix . "trailer",
				"type" => "text",
				"name" => esc_html__( "Trailer", "imdb" ),
			),
			array(
				"id" => $prefix . "awards",
				"type" => "text",
				"name" => esc_html__( "Awards", "imdb" ),
			),
			array(
				"id" => $prefix . "character",
				"type" => "text",
				"name" => esc_html__( "Characters", "imdb" ),
			),
			array(
				"id" => $prefix . "certification",
				"type" => "text",
				"name" => esc_html__( "Certification", "imdb" ),
			),
			array(
				"id" => $prefix . "mpaa",
				"type" => "text",
				"name" => esc_html__( "Mpaa", "imdb" ),
			),
			array(
				"id" => "technical",
				"type" => "heading",
				"name" => esc_html__( "Technical Informations", "imdb" ),
			),
			array(
				"id" => $prefix . "aspectratio",
				"type" => "text",
				"name" => esc_html__( "Aspect Ratio", "imdb" ),
			),
			array(
				"id" => $prefix . "color",
				"type" => "text",
				"name" => esc_html__( "Color", "imdb" ),
			),
			array(
				"id" => $prefix . "sound",
				"type" => "text",
				"name" => esc_html__( "Sound Mix", "imdb" ),
			),
			array(
				"id" => "statistics",
				"type" => "heading",
				"name" => esc_html__( "Statistics", "imdb" ),
			),
			array(
				"id" => $prefix . "rating",
				"type" => "text",
				"name" => esc_html__( "Rating", "imdb" ),
			),
			array(
				"id" => $prefix . "votes",
				"type" => "text",
				"name" => esc_html__( "Votes", "imdb" ),
			),
			array(
				"id" => $prefix . "userreview",
				"type" => "text",
				"name" => esc_html__( "Reviews", "imdb" ),
			),
			array(
				"id" => $prefix . "budget",
				"type" => "text",
				"name" => esc_html__( "Budget", "imdb" ),
			),
			array(
				"id" => $prefix . "gross",
				"type" => "text",
				"name" => esc_html__( "Gross", "imdb" ),
			),
		),
	);

	return $meta_boxes;
}
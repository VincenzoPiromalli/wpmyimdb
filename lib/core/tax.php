<?php
register_taxonomy('genre', 'post', array(
'hierarchical' => false,  'label' => 'Genres',
'query_var' => true, 'rewrite' => true));
register_taxonomy('actors', 'post', array(
'hierarchical' => false,  'label' => 'Actors',
'query_var' => true, 'rewrite' => true));
register_taxonomy('year', 'post', array(
'hierarchical' => false,  'label' => 'Years',
'query_var' => true, 'rewrite' => true));
register_taxonomy('country', 'post', array(
'hierarchical' => false,  'label' => 'Countries',
'query_var' => true, 'rewrite' => true));
register_taxonomy('language', 'post', array(
'hierarchical' => false,  'label' => 'Languages',
'query_var' => true, 'rewrite' => true));
register_taxonomy('company', 'post', array(
'hierarchical' => false,  'label' => 'Companies',
'query_var' => true, 'rewrite' => true));
register_taxonomy('director', 'post', array(
'hierarchical' => false,  'label' => 'Directors',
'query_var' => true, 'rewrite' => true));
register_taxonomy('writer', 'post', array(
'hierarchical' => false,  'label' => 'Writers',
'query_var' => true, 'rewrite' => true));
register_taxonomy('creator', 'post', array(
'hierarchical' => false,  'label' => 'Creators',
'query_var' => true, 'rewrite' => true));
register_taxonomy('location', 'post', array(
'hierarchical' => false,  'label' => 'Locations',
'query_var' => true, 'rewrite' => true));
<?php 

/***************************************************************************/
/*
/* 	----------------------------------------------------------------------
/* 						DO NOT EDIT THIS FILE
/*	----------------------------------------------------------------------
/* 
/*		Themify Framework v.1.1.0
/*		http://themify.me
/*		
/*		Copyright 2011, Darcy Clarke
/*		Dual licensed under the MIT or GPL Version 2 licenses.
/*		http://themify.me/license.txt
/*
/***************************************************************************/

/* 	Include Necessary Framework Files
/***************************************************************************/

require_once(get_template_directory() . '/themify/themify-database.php');

require_once(get_template_directory() . '/themify/themify-utilities.php');

require_once(get_template_directory() . '/themify/themify-templates.php');

require_once(get_template_directory() . '/themify/themify-hooks.php');

require_once(get_template_directory() . '/themify/themify-config.php');

require_once(get_template_directory() . '/themify/themify-ajax.php');

require_once(get_template_directory() . '/themify/themify-widgets.php');

if(is_file(get_template_directory() . '/theme-modules.php')){
	require_once(get_template_directory() . '/theme-modules.php');
}

if(is_file(get_template_directory() . '/theme-functions.php')){
	require_once(get_template_directory() . '/theme-functions.php');
}

if(is_file(get_template_directory() . '/custom-modules.php')){
	require_once(get_template_directory() . '/custom-modules.php');
}

if(is_file(get_template_directory() . '/custom-functions.php')){
	require_once(get_template_directory() . '/custom-functions.php');
}

if(is_file(get_template_directory() . '/custom-widgets.php')){
	require_once(get_template_directory() . '/custom-widgets.php');
}

?>
<?php
/*
Add the following three configurations to your config.php in your template base folder.
*/


/**
 * prependTemplateFile: PHP file in /site/templates/ that will be loaded before each page's template file
 *
 * Example: _init.php
 *
 */
$config->prependTemplateFile = '_init.php';

/**
 * appendTemplateFile: PHP file in /site/templates/ that will be loaded after each page's template file
 *
 * Example: _main.php
 *
 */
$config->appendTemplateFile = '_main.php';
/**
 * Prefix to use in page URLs for page numbers, i.e. a prefix of 'page' would use 'page1', 'page2', etc. 
 *
 */
$config->pageNumUrlPrefix = 'page';


<?php

$tpl = new TemplateFile($config->paths->templates . 'templates/home.php');
$tpl->set('page', $page);
$_content = $tpl->render();
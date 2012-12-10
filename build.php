#!/usr/bin/php
<?php

define('BUILD_DIR', 'build');
define('ASSETS_DIR', 'assets');
define('STATICS_DIR', 'statics');
define('TEMPLATES_DIR', 'templates');

require_once('config.php');

/*************************
 * Render a "template"
 */
function render($PAGE, $template) {
  global $SITE;

  $filepath = sprintf('%s/%s.tpl', TEMPLATES_DIR, $template);
  if (!file_exists($filepath))
    return render($PAGE, 'default');

  ob_start();
  require($filepath);
  $content = ob_get_clean();
  ob_end_clean();
  return $content;
}

/*************************
 * Append site base_path
 */
function url($path) {
  global $SITE;
  return sprintf('%s%s', $SITE['base_path'], $path);
}

/*************************
 * Real code for real men
 */
printf("--> removing '%s'\n", BUILD_DIR);
echo system(sprintf('rm -rf "%s"', BUILD_DIR));
printf("--> copying statics '%s' to '%s'\n", STATICS_DIR, BUILD_DIR);
echo system(sprintf('cp -R "%s" "%s"', STATICS_DIR, BUILD_DIR));
printf("--> copying assets '%s' to '%s/'\n", ASSETS_DIR, BUILD_DIR);
echo system(sprintf('cp -R "%s" "%s/"', ASSETS_DIR, BUILD_DIR));

foreach ($SITE['menu'] as $page_name => $page_data) {
  printf("--> rendering '%s' \n", $page_name);
  $_dstpath = '%s/%s.html';
  $dstpath = sprintf($_dstpath, BUILD_DIR, $page_name);

  $page = array(
    'page'  => $page_name,
    'title' => $page_data['title'],
    'file' => sprintf('%s.tpl', $page_name));
  $page['content'] = render($page, $page_name);
  file_put_contents($dstpath, render($page, 'layout'));
}




<?php
$page = $PAGE['page'];
foreach ($SITE['menu'][$page]['sections'] as $section => $title) {
  $tpl_file = sprintf('%s/%s.tpl', ASSETS_DIR, $section);
  $tpl_content = file_exists($tpl_file) ? file_get_contents($tpl_file) : '';
  $source_file = sprintf('%s/%s.hh', ASSETS_DIR, $section);
  $source_content = file_exists($source_file) ? file_get_contents($source_file) : '';
  $image_file  = sprintf('%s/%s.png', ASSETS_DIR, $section);
  $image_url  = sprintf('%s/%s/%s.png', $SITE['base_url'], ASSETS_DIR, $section);
  $image_url  = file_exists($image_file) ? $image_url : '';
?>
<section id="<?=$section ?>" class="page">
  <div class="section-header">
    <h2><?=$title ?></h2>
  </div>
  <div class="assets">
<?php if ($image_url) { ?>
    <div><img src="<?=$image_file ?>"></div>
<?php } ?>
<?php if ($source_content) { ?>
    <pre><code class="C++"><?=$source_content ?></code></pre>
<?php } ?>
  </div>
<?=$tpl_content ?>
</section>
<?php
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?=url('css/bootstrap-2.2.1.min.css')?>">
    <link rel="stylesheet" title="Default" href="<?=url('css/highlight-7.3-github.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('css/main.css')?>">
    <script type="text/javascript" src="<?=url('js/jquery-1.8.3.min.js')?>"></script>
    <script type="text/javascript" src="<?=url('js/bootstrap-2.2.1.js')?>"></script>
    <script type="text/javascript" src="<?=url('js/highlight-7.3.min.js')?>"></script>
    <script type="text/javascript" src="<?=url('js/main.js')?>"></script>
  </head>
  <body>
    <div id="top"></div>
    <div id="header">
      <img id="logo" src="<?=url('img/header-logo.png')?>">
      <span id="title">Documentation</spam>
    </div>
    <div id="wraper">
      <div id="left-menubar">
        <ul class="nav nav-list">
<?php foreach ($SITE['menu'] as $url => $page) { ?>
          <li class="nav-header"><?=$page['title']?></li>
<?php   foreach ($page['sections'] as $tag => $title) { ?>
          <li><a data-target="#<?=$tag?>" href="<?=url($url)?>.html#<?=$tag?>"><?=$title?></a></li>
<?php   } ?>
<?php } ?>
        </ul>
        <div id="left-menubar-toggle">
        </div>
      </div>
      <div id="contents">
        <?=$PAGE['content']?>
        <section id="padding">
        </section>
      </div>
    </div>
  </body>
</html>

<?php
//home.ctp
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>
    <?= $this->Html->meta('icon') ?>
 
    <?= $this->Html->css('calender.css') ?>
 
    <?= $this->Html->script('calender.js') ?>

</head>
<body>
  <div id="title">
    <h1>便利サイト</h1>
  </div>
  <div id="tab">
    <div id="tab1"><a class="rel" href="../">ホーム</a></div>
    <div id="tab2"><a class=""href="javascript:void(0)" onclick="window.location.reload()">日付計算</a></div>
  </div>
  
  <?= $this->fetch('content') ?>
 
</body>
</html>
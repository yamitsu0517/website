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
    <div id="tab1"><?= $this->Html->link(__('ホーム'), ['controller' => 'home','action' => 'index']) ?></div>
    <div id="tab2"><?= $this->Html->link(__('日付計算'), ['controller' => 'calender','action' => 'index']) ?></div>
    <div id="tab3"><?= $this->Html->link(__('memo/Todo'), ['controller' => 'memos','action' => 'index']) ?></div>
  </div>
  
  <?= $this->fetch('content') ?>
 
</body>
</html>
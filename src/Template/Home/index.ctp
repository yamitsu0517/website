<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>便利サイト</title>
    </head>
    <body>
        <div id="contents">
            <div id="title">
                <h1>便利サイト</h1>
            </div>
            <div id="main">
                <div id="main_word">
                    <h3>気になるコンテントを見てね</h3>
                </div>
                <div id ="content1">
                    <?= $this->Html->link(__('ログイン'), ['controller' => 'users','action' => 'index']) ?> 
                </div>
                <div id ="content2">
                    <?= $this->Html->link(__('ホーム'), ['action' => 'index']) ?>
                </div> 
                <div id="content3">
                    <?= $this->Html->link(__('日付計算'), ['controller' => 'calender','action' => 'index']) ?> 
                </div>
                <div id="content4">
                    <?= $this->Html->link(__('メモ'), ['controller' => 'memos','action' => 'index']) ?> 
                </div>
            </div>
        </div>
</html>

<!-- 
<div>
    <h1>Helo Wrold!</h1>
    <p class="text"><?= $test ?></p>
</div> -->
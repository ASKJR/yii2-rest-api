<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
        <h1> Feed de Posts via REST API </h1>
        <?php foreach($data as $row): ?>
        	<p> <b>ID:</b><?= $row['id'] ?> </p>
        	<p> <b>Author:</b> <?= $row['author'] ?> </p>
        	<p> <b>Title:</b> <?= $row['title'] ?> </p>
        	<p> <b>Body:</b> <?= $row['body'] ?> </p>
        	<hr><br>
        <?php endforeach; ?>
    </div>
</div>

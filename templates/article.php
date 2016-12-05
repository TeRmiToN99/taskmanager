<?php foreach($data as $value): ?>
    <h4> Заголовок: <?php echo $value['title']?></h4>
    <p>
        <?php echo $value['text'];?>
    </p>
    <p>автор: <?= $value['author'];?> </p>
<?php endforeach;?>

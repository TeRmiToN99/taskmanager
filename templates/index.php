
    <?php foreach($data as $value): ?>
        <h4> Заголовок: <a href="article.php?id=<?=$value['id']?>"><?php echo $value['title']?></a></h4>
        <p>
            <?php echo $value['text'];?>
        </p>
        <p>автор: <?= $value['author'];?> </p>
    <?php endforeach;?>

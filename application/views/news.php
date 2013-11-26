<?php
/**
 * Created by PhpStorm.
 * User: drnutjuang
 * Date: 26/11/2556
 * Time: 10:39 น.
 */
?>
    <?php foreach ($news as $news_item): ?>
    <div class="col-md-8 col-md-offset-2 well">
        <h2><?php echo $news_item['title']?></h2>
        <?php echo $news_item['content'] ?>
    </div>
    <?php endforeach ?>
<?
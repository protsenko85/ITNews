<div class="col-md-8">
    <?php use yii\helpers\Url;

    foreach ($articles as $article): ?>
        <article class = "post"...>
    <?php endforeach;
    echo \yii\widgets\LinkPager::widget([
            "pagination" => $pagination,
    ])
    ?>
</div>

    <article class="post">

        <div class="post-thumb">

            <a href=""><img class="img-index" src="<?= $article->getImage() ?> " alt="Image"></a>

        </div>

        <div class="post-content">

            <header class="entry-header text-center text-uppercase">

                <a href=""> <?= $article->topic->name; ?></a>

                <a href=""> <?= $article->title; ?> </a>

            </header>

            <div class="entry-content">

                <p> <?= mb_strimwidth($article->description,0, 360, "..."); ?> </p>

                <div class="btn-continue-reading text-center text-uppercase">

                    <a href="<?= Url::toRoute(['/view', 'id'=>$article->id]) ?>" class="more-link">Continue Reading</a>

                </div>

            </div>

            <div class="social-share">

                <span class="social-share-title pull-left text-capitalize">By <?= $article->user->name;?> On <?= $article->getDate();?></span>

                <ul class="text-center pull-right">

                    <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li>

                    <?= (int)$article->viewed; ?>

                </ul>

            </div>

        </div>

    </article>

    <ul class="pagination">

        <li class="active"><a href="#">1</a></li>

        <li><a href="#">2</a></li>

        <li><a href="#">3</a></li>

    </ul>

</div>

<?= Url::toRoute(['/topic', 'id' => $article->topic->id]) ?>
<?php echo \Yii::$app->view->renderFile('@app/views/site/right.php', compact('popular','recent','topics'));?>
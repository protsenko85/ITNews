<?php

use yii\helpers\Html;
use app\models\Topic;
use app\models\User;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = 'Create Article';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'topics' => ArrayHelper::map(Topic::find()->all(),'id','name'),
        'users' => ArrayHelper::map(User::find()->all(),'id','name'),
    ]) ?>

</div>

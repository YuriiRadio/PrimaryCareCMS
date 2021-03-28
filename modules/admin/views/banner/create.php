<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Banner */

$this->title = Yii::t('lang', 'Create Banner');
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Banners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'i18nMessages' => $i18nMessages,
    ]) ?>

</div>

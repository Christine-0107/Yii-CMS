<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-03-23 15:47
 */
use yii\helpers\Url;

/**
 * @var $model common\models\Article
 * @var $contentModel common\models\Article
 * @var $categories []string
 */
$this->params['breadcrumbs'] = [
    ['label' => Yii::t('app', 'Articles'), 'url' => Url::to(['index'])],
    ['label' => Yii::t('app', 'Create') . Yii::t('app', 'Articles')],
];
?>
<?= $this->render('_form', [
    'model' => $model,
    'contentModel' => $contentModel,
    'categories' => $categories,
]);

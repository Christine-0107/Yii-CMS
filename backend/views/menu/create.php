<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2016-03-21 14:32
 */

use yii\helpers\Url;

$this->params['breadcrumbs'] = [
    ['label' => Yii::t('app', 'Backend Menus'), 'url' => Url::to(['index'])],
    ['label' => Yii::t('app', 'Create') . Yii::t('app', 'Backend Menus')],
];
/**
 * @var $model common\models\Menu
 * @var $parentMenuDisabledOptions []
 * @var $menusNameWithPrefixLevelCharacters []
 */
?>
<?= $this->render('_form', [
    'model' => $model,
    'menusNameWithPrefixLevelCharacters' => $menusNameWithPrefixLevelCharacters,
    'parentMenuDisabledOptions' => $parentMenuDisabledOptions,
]) ?>
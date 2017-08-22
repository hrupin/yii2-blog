<?php
/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 06.08.17
 * Time: 14:16
 */

use yii\helpers\Url;
use yii\bootstrap\Nav;

?>

<?= Nav::widget([
    'items' => [
        [
            'label' => 'Blog',
            'url' => Url::toRoute('/blog/admin/index'),
        ],
        [
            'label' => 'Category',
            'items' => [
                ['label' => 'Views category', 'url' => Url::toRoute('/blog/admin/index')],
                ['label' => 'Add category', 'url' => Url::toRoute('/blog/admin/add-category')]
            ],
        ],
    ],
    'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
]);
?>
<hr>
<br>
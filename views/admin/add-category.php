<?php
/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 06.08.17
 * Time: 13:52
 */

use yii\helpers\Html;
use yii\bootstrap\Tabs;
use yii\widgets\ActiveForm;

?>
<?= $this->render('_menu'); ?>
<div class="views-_form">
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
    <?php
        $dataTabs = [];
        $firstKey = array_keys($lang)[0];
        foreach ($lang as $key => $value) {
            $dataTabs[] = [
                'label' => $value,
                'content' => $this->render('_formCategory', [
                    'category' => $categories[$key],
                    'key' => $key,
                    'form' => $form
                ])
            ];
        }
    $dataTabs[] = [
        'label' => 'SYSTEM',
        'content' => $this->render('_formCategorySystem', [
            'categories' => $categories,
            'firstKey' => $firstKey,
            'form' => $form,
            'lang' =>$lang
        ])
    ];
    ?>
    <?= Tabs::widget(['items' => $dataTabs]); ?>
    <hr>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('blog', 'Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div><!-- views-_form -->







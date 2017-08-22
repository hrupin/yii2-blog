<?php
/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 06.08.17
 * Time: 15:18
 */

use mihaildev\ckeditor\CKEditor;

?>
<br>
    <?= $form->field($category, '['.$key.']title') ?>
    <?= $form->field($category, '['.$key.']description')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
            'height' => 150,
        ],
    ]); ?>
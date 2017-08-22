<?php
/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 08.08.17
 * Time: 1:23
 */
?>
<?php
foreach ($lang as $key => $value){
    if($firstKey == $key){
        echo '<br>';
        echo $form->field($categories[$key], '['.$key.']sort');
        echo $form->field($categories[$key], '['.$key.']img');
        echo $form->field($categories[$key], '['.$key.']id_seo');
        echo $form->field($categories[$key], '['.$key.']id_parent');
    }
    else{
        echo $form->field($categories[$key], '['.$key.']sort')->hiddenInput()->label(false);
        echo $form->field($categories[$key], '['.$key.']img')->hiddenInput()->label(false);
        echo $form->field($categories[$key], '['.$key.']id_seo')->hiddenInput()->label(false);
        echo $form->field($categories[$key], '['.$key.']id_parent')->hiddenInput()->label(false);
    }
}
$jsonLang = json_encode($lang);
$script = <<< JS
    document.getElementsByName('BlogCategory[$firstKey][id_seo]')[0].oninput = setDataInHidden;
    document.getElementsByName('BlogCategory[$firstKey][sort]')[0].oninput = setDataInHidden;
    document.getElementsByName('BlogCategory[$firstKey][id_parent]')[0].oninput = setDataInHidden;
    function setDataInHidden() {
        for(var e in $jsonLang){
            if(e != '$firstKey'){
                document.getElementsByName('BlogCategory['+e+'][id_seo]')[0].value = document.getElementsByName('BlogCategory[$firstKey][id_seo]')[0].value;
                document.getElementsByName('BlogCategory['+e+'][sort]')[0].value = document.getElementsByName('BlogCategory[$firstKey][sort]')[0].value;
                document.getElementsByName('BlogCategory['+e+'][id_parent]')[0].value = document.getElementsByName('BlogCategory[$firstKey][id_parent]')[0].value;
            }
        }
    };
JS;
$this->registerJs($script);
?>

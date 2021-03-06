<?php

namespace hrupin\blog\filters;

use yii\web\NotFoundHttpException;
use yii\base\ActionFilter;

class BackendFilter extends ActionFilter
{
    
    public $controllers = ['category', 'post'];
  
    public function beforeAction($action)
    {
        if (in_array($action->controller->id, $this->controllers)) {
            throw new NotFoundHttpException('Not found');
        }
        return true;
    }
}

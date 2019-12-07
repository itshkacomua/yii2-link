<?php

namespace itshkacomua\link;

/**
 * link module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'itshkacomua\link\controllers';
    public $defaultRoute = 'link';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }
}

<?php

namespace vova07\themes\admin;

use Yii;

/**
 * Class Theme
 * @package vova07\themes\admin
 */
class Theme extends \yii\base\Theme
{
    /**
     * @inheritdoc
     */
    public $pathMap = [
        '@backend/views' => '@vova07/themes/admin/views',
        '@backend/modules' => '@vova07/themes/admin/modules'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
            'sourcePath' => '@vova07/themes/admin',
            'css' => [
                'css/bootstrap.min.css'
            ]
        ];
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'sourcePath' => '@vova07/themes/admin',
            'js' => [
                'js/bootstrap.min.js'
            ]
        ];
    }
}

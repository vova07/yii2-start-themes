<?php

namespace vova07\themes\site\assets;

use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vova07/themes/site';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/font-awesome.min.css',
        'css/main.css',
        'css/custom.css'
    ];

    public $js = [];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}

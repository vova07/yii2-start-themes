<?php

namespace vova07\themes\admin;

use yii\web\AssetBundle;

/**
 * Theme data tables asset bundle.
 */
class DataTablesAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vova07/themes/admin/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/datatables/dataTables.bootstrap.css'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'vova07\themes\admin\ThemeAsset'
    ];
}

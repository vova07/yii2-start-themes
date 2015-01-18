<?php

namespace vova07\themes;

use yii\base\BootstrapInterface;

/**
 * Themes bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add themes I18N category.
        if (!isset($app->i18n->translations['vova07/themes/admin*']) && !isset($app->i18n->translations['vova07/themes/*']) && !isset($app->i18n->translations['vova07/*'])) {
            $app->i18n->translations['vova07/themes/admin*'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@vova07/themes/admin/messages',
                'forceTranslation' => false,
                'fileMap' => [
                    'admin' => 'admin.php',
                    'widgets/box' => 'box.php'
                ]
            ];
        }
        if (!isset($app->i18n->translations['vova07/themes/site*']) && !isset($app->i18n->translations['vova07/themes/*']) && !isset($app->i18n->translations['vova07/*'])) {
            $app->i18n->translations['vova07/themes/site*'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@vova07/themes/site/messages',
                'forceTranslation' => false,
                'fileMap' => [
                    'site' => 'site.php',
                ]
            ];
        }
    }
}

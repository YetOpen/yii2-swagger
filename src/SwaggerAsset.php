<?php

namespace yetopen\swagger;

use yii\web\AssetBundle;

/**
 * Class SwaggerAsset
 *
 * @package yetopen\swagger
 */
class SwaggerAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle
     */
    public $sourcePath = '@npm/swagger-ui-dist';

    /**
     * @var array list of JavaScript files that this bundle contains
     */
    public $js = [
        'swagger-ui-bundle.js',
        'swagger-ui-standalone-preset.js',
    ];

    /**
     * @var array list of CSS files that this bundle contains
     */
    public $css = [
        'swagger-ui.css',
    ];
}

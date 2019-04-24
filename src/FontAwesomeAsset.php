<?php
namespace paw\assets\fontawesome;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/font-awesome';

    public $css = [
        'css/all.css',
    ];

    public $publishOptions = [
        'only' => [
            'webfonts/*',
            'css/*',
        ],
    ];
}

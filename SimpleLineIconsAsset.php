<?php
/**
 * @link https://github.com/borodulin/yii2-simplelineicons
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-simplelineicons/blob/master/LICENSE
 */
namespace conquer\simplelineicons;

class SimpleLineIconsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/simple-line-icons';

    public $css = [
        'css/simple-line-icons.css',
    ];

    public $publishOptions = [
        'only' => ['css/*', 'fonts/*'],
    ];
}

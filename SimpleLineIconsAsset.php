<?php
/**
 * @link https://github.com/borodulin/yii2-simplelineicons
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-simplelineicons/blob/master/LICENSE
 */
namespace conquer\simplelineicons;

class SimpleLineIconsAsset extends \yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/simple-line-icons-webfont';
	public $css = [
			'simple-line-icons.css',
	];
	
	public $js = [
			'icons-lte-ie7.js',
	];
	
	public $jsOptions = [
			'condition'=>'lte IE 7',
	];
}
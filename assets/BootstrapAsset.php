<?php
namespace app\assets;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
public $basePath = '@webroot';
public $baseUrl = '@web';
public $css = [
'vendor/bootstrap/css/bootstrap.css'
];
public $js = [
'vendor/bootstrap/js/bootstrap.js',
'vendor/popper.js/umd/popper.js'
];
}
<?php
namespace kilyakus\fonts;

class FontAwesomeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}

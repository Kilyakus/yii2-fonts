<?php
namespace bin\admin\assets;

class FontsAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
    public $css = [
        'css/fonts.css',
    ];
    public $js = [
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}

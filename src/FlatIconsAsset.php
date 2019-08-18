<?php
namespace kilyakus\fonts;

class FlatIconsAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/vendors/flaticons';
    }
    public $css = [
        'flaticon/flaticon.css',
        'flaticon2/flaticon.css',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}

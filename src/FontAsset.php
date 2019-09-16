<?php
namespace kilyakus\fonts;

class FontAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
    public $css = [
        'css/fonts.css',
    ];
    public $depends = [
        'kilyakus\fontawesome\FontAwesomeAsset',
        'kilyakus\lineawesome\LineAwesomeAsset',
        'kilyakus\flaticons\FlatIconsAsset'
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}

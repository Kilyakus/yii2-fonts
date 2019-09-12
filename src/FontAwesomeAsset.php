<?php
namespace kilyakus\fonts;

class FontAwesomeAsset extends \yii\web\AssetBundle
{
    // public $sourcePath = '@bower/font-awesome';
    public function init()
    {
        $this->sourcePath = __DIR__ . '/vendors/font-awesome';
    }
    public $css = [
        'css/font-awesome.css',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}

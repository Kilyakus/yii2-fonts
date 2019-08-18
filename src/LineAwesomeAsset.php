<?php
namespace kilyakus\fonts;

class LineAwesomeAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/vendors/line-awesome';
    }
    public $css = [
        'css/line-awesome.css',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}

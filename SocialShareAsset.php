<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.01.2018
 * Time: 11:14
 */

namespace gosha\socialshare;


use yii\web\AssetBundle;

class SocialShareAsset extends AssetBundle
{

    public $js = [
        'js/social.js',

    ];
    public $css = [
        'css/bootstrap-social.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__;
        parent::init();
    }


}
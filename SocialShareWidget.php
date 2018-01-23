<?php


namespace gosha\socialshare;


use yii\base\Widget;
use yii\bootstrap\Html;
class SocialShareWidget extends Widget
{
    public $url;
    public $title;
    public $description;
    public $containerclass='share-btn';
    public $socials=[
        'vk',
        'fb',
        'tw',
        'gp',
        'ok'
    ];
    public $socialmap=[
        'vk'=>'vk',
        'fb'=>'facebook',
        'tw'=>'twitter',
        'gp'=>'google',
        'ok'=>'odnoklassniki'
    ];



    public function run()
    {

        SocialShareAsset::register($this->view);

        if ($this->url=='')
            $this->url=\Yii::$app->request->getAbsoluteUrl();
        return $this->renderItems();
    }

    private function renderItems()
    {
        $html=Html::beginTag('div',['class'=>$this->containerclass,'data-title'=>$this->title,'data-url'=>$this->url,'data-desc'=>$this->description]);
        foreach ($this->socials as $social)
        {
            $class=$this->socialmap[$social];
            $html.=Html::beginTag('a',['href'=>'#','class'=>'btn btn-social-icon btn-sm btn-'.$class,'data-id'=>$social]);
            $html.=Html::tag('i','',['class'=>'fa fa-'.$class]);
            $html.=Html::endTag('a');
        }
        $html.=Html::endTag('div');
        return $html;
    }


}
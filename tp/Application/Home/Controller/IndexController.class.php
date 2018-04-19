<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $a = D('Student');
        /*$b = array('id' => 2,
                   'name' => 'littleRabbit',
                   'sex' => 'woman',
                   'mark' => 70
                 );
       $a->add($b);
       echo "Update successfully!";*/
       /*$index = $a->find(1);
       foreach ($index as $key => $value) {
         echo $key.':'.$value.'<br />';
       }
       var_dump($a->field('name','mark')->Where('id in ("1","2")')->select());*/
       /*$a->find(3);

       $a->id = 3;
       $a->save();
       echo 'successfully!';*/
       $this->assign('a','瑞谱佳科技');
       $littleHorse = $a->find(1);
       //var_dump($littleHorse);
       //echo $littleHorse=>name;
       $this->assign('horse', $littleHorse['name']);
       $this->display('index');


    }
}

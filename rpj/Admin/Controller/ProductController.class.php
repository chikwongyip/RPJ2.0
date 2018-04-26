<?php
namespace Admin\Controller;
use Think\Controller;

class ProductController extends Controller
{

  function productadd()
  {
    if (IS_POST) {
      //echo APP_PATH;exit;
      $product = M('product');

      $upload = new \Think\Upload();
      $upload->maxSize = 103145728;
      $upload->exts = array('jpg','gif','png','jpeg','pdf','doc','docx','ppt','pptx');
      $upload->rootPath = './Public/Upload/';
      $upload->savePath = '';
      $retInfo = $upload->upload();
      //var_dump($retInfo);
      if (!$retInfo) {
        $this->error($upload->getError());
      }else {
        //var_dump($retInfo);
        $_POST['productpicture'] = './Public/Upload'.$retInfo['productpicture']['savepath'].$retInfo['productpicture']['savename'];
        $_POST['attachement'] = './Public/Upload'.$retInfo['attachement']['savepath'].$retInfo['attachement']['savename'];
        //$this->success('上传成功');
        //var_dump($_POST);exit;
      }
      $product->add($_POST);



    }else {

      $this->display();
    }

  }
  function productlist()
  {
    $this->display();
  }
}

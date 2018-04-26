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
        if (isset($retInfo['productPicture'])) {
          $_POST['productPicture'] = './Public/Upload'.$retInfo['productPicture']['savepath'].$retInfo['productPicture']['savename'];
        }
        if (isset($retInfo['Attachment'])) {
          $_POST['Attachment'] = './Public/Upload'.$retInfo['Attachment']['savepath'].$retInfo['Attachment']['savename'];
        }
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

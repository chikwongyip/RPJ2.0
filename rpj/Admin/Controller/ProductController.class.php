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
      $upload->exts = array('jpg','gif','png','jpeg','pdf','doc','docx','ppt','pptx','chm');
      $upload->rootPath = './Public/Upload/';
      $upload->savePath = '';
      $retInfo = $upload->upload();
      //var_dump($retInfo);
      if (!$retInfo) {
        $this->error($upload->getError());
      }else {
        if (isset($retInfo['productPicture'])) {
          $_POST['productPicture'] = './Public/Upload/'.$retInfo['productPicture']['savepath'].$retInfo['productPicture']['savename'];
          //echo $_POST['productPicture'] ;exit;
          $img = new \Think\Image();
          $img->open($_POST['productPicture']);
          $_POST['productIcon'] = './Public/Thumb/'.$retInfo['productPicture']['savename'];

          $img->thumb(192,60)->save($_POST['productIcon']);

        }
        if (isset($retInfo['Attachment'])) {
          $_POST['Attachment'] = './Public/Upload/'.$retInfo['Attachment']['savepath'].$retInfo['Attachment']['savename'];
        }else {
          echo "保存附件失败";
          var_dump($retInfo);
        }
      }
      $product->add($_POST);
      echo '保存成功';


    }
      $this->display();
  }

  function productlist()
  {
    $this->display();
  }

}

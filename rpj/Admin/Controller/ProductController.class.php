<?php
namespace Admin\Controller;
use Think\Controller;

class ProductController extends Controller
{

  function productadd()
  {
    if (IS_POST) {
      $product = M('product');
      $product->add($_POST);

    }else {
      $upload = new upload();
      var_dump($upload);
      $this->display();
    }

  }
  function productlist()
  {
    $this->display();
  }
}

/**
 * Upload Class
 */
class upload
{
  public $savePath;

  public function upload()
  {
    $upload = new \Think\Upload();
    $upload->maxSize = 3145728;
    $upload->exts = array('jpg','gif','png','jpeg');
    $upload->rootPath = APP_PATH;
    $upload->savePath = $this->savePath;
    $retInfo = $upload->upload();
    if (!$retInfo) {
      $this->error($upload->getError());
    }else {
      $this->success('上传成功');
    }
  }
}

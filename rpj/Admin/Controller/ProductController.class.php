<?php
namespace Admin\Controller;
use Think\Controller;

class ProductController extends Controller
{

  function productadd()
  {
    if (IS_POST) {
      //echo APP_PATH;exit;
      //var_dump($_POST);exit;
      $product = M('product');

      $upload = new \Think\Upload();
      $upload->maxSize = 553145728;
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
    if(IS_GET){
      $product = M('product');
      $product->find($_GET);
    }
    $this->display();
  }

  function productedit(){

    if (IS_GET) {
      $productId = $_GET['productId'];
      $product = M('product');
      //$product = $product->where("productId = $productId")->select();
      $product = $product->find($productId);
      $this->assign('productInfo',$product);
      //var_dump($product);
    }

    if (IS_POST) {
      //var_dump($_POST);
      $product = M('product');
      //$product->find($_POST['productId']);
      $id = $_POST['productid'];
      $product = $product->where('productId = 11')->select();
      var_dump($product);exit;
      if (isset($_POST['productname'])) {
        $product->productName = $_POST['productname'];
      }

      if (isset($_POST['groupid'])) {
        $product->groupID = $_POST['groupid'];
      }
      if (isset($_POST['parentid'])) {
        $product->parenID = $_POST['parentid'];
      }

      if (isset($_POST['ishot'])) {
        $product->isHot = $_POST['ishot'];
      }
      if (isset($_POST['producttypeid'])) {
        $product->producttypeid = $_POST['producttypeid'];
      }
      if (isset($_POST['productsn'])) {
        $product->productSn = $_POST['productsn'];
      }
      if (isset($_POST['productdesc'])) {
        $product->productDesc = $_POST['productdesc'];
      }
      //var_dump($product);
      //var_dump($_POST);
      //exit;
      echo $product->productSn;exit;
      var_dump($product->save());
    }
    $this->display();
  }

}

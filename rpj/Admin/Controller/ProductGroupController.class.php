<?php
namespace Admin\Controller;
use Think\Controller;
class ProductGroupController extends Controller
{

  function productGroupAdd()
  {
    if (IS_POST) {
      //var_dump($_POST);
      $productGroup = M('productgroup');
      $productGroup->add($_POST);
      echo '添加成功！';
    }
    $this->display();
  }

  function productGroupEdit()
  {
    $this->display();
  }

  function productgrouplist()
  {
    $productGroup = M('productgroup');
    $productGroupList = $productGroup->select();
    var_dump($productGroupList);
    //exit;
    $this->assign('productgrouplist',$productGrouplist);
    $this->display();
  }

  function productKindAdd()
  {
    $this->display();
  }

  function productKindEdit()
  {
    $this->display();
  }


  function productkindlist()
  {
    $this->display();
  }
}

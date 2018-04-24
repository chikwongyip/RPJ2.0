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
      $this->display();
    }

  }
  function productlist()
  {
    $this->display();
  }
}

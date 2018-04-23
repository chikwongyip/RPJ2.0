<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller
{

  function productadd()
  {
    if (IS_POST) {
      var_dump($_POST);
    }else {
      $this->display();
    }

  }
  function productlist()
  {
    $this->display();
  }
}

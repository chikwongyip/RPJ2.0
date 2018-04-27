<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $company = M('Company');
        $company = $company->find(1);
        if (isset($company)) {
          $this->assign('companyInfo', $company);
          var_dump($company);
          $this->display();
        }

    }
}

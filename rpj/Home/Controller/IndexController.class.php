<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo U('Home/About/About');
        exit;
        $company = M('Company');
        $company = $company->find(1);
        if (isset($company)) {
          $this->assign('companyInfo', $company);
          $this->display();
        }

    }
}

<?php
/**
 * GridSwooleFramework
 * Page.php Created by usher.yue.
 * User: usher.yue
 * Date: 16/7/11
 * Time: 下午12:58
 * 心怀教育梦－烟台网格软件技术有限公司
 */
namespace App\Controller ;
class Page extends  BaseController{

     function  index(){
        echo $this->Get('b');
         echo $this->Get('id');

     }


}
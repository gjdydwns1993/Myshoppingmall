<?php
require_once "ParentView.php";
abstract class OthersView extends ParentView{

  public function __construct(){
    parent::__construct();
  }
  public function bodyView(){

  }
  /*============================================
  //function name : loadView()
  //explanation : body부분을 보여주는 함수
  ==============================================*/
  public function loadView(){
    $this->htmlView();
    if(isset($_SESSION['id'])){
      if($_SESSION['id']=='admin') $this->adminHeaderView();
      else $this->logoutHeaderView();
    }
    else $this->loginHeaderView();
    $this->headerView1();
    $this->bodyView();
    $this->othersView();
  }
}
 ?>

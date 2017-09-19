<?php
require_once "ParentView.php";
class MainView extends ParentView{
  /*====================================================
  //$headerImgPath : header 부분 image경로
  ======================================================*/
  private $headerImgPath1;
  private $headerImgPath2;
  /*================================================================
  //function name : __construct()
  //explanation : 객체가 생성될떄 parent의 constructor호출,멤버초기화
  =================================================================*/
  public function __construct(){
    parent::__construct();
    $this->headerImgPath1 = "../image/c.jpg";
    $this->headerImgPath2 = "../image/k.png";
  }
  public function htmlView(){
    echo<<<HTML
      <html>
      <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="../css/mainView.css">
        <script src='../js/jquery-3.1.1.min.js'></script>
      </head>
      <body>
HTML;
  }
  /*================================================================
  //function name : headerView2()
  //explanation : main화면에서 header 이미지 출력해주는 메서드
  =================================================================*/
  public function headerView2(){
    echo<<<HTML
      <div id='header3'>
        <img src="$this->headerImgPath1">
        <img src="$this->headerImgPath2">
      </div>
HTML;
  }
  /*==================================
  //function name : bodyView()
  //explanation : body부분을 보여주는 함수
  ====================================*/
  public function bodyView(){
    echo<<<HTML
     <section><div id='ajax'></div></section>
     <script src='../js/realTimeRanking.js'></script>
HTML;
  }
  /*========================================
  //function name : loadView()
  //explanation : MainView를 load하는 메서드
  =========================================*/
  public function loadView(){
    $this->htmlView();
    if(isset($_SESSION['id'])){
      if($_SESSION['id']=='admin') $this->adminHeaderView();
      else $this->logoutHeaderView();
    }
    else $this->loginHeaderView();
    $this->headerView1();
    $this->headerView2();
    $this->bodyView();
    $this->othersView();
  }
}
?>

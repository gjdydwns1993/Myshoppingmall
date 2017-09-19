<?php
require_once "OthersView.php";
class GoodsView extends OthersView{

  private $path;

  public function __construct(){
    parent::__construct();
    $this->path ="../control/index.php?page=goodsContends&goods_no=";
  }
  public function htmlView(){
    echo<<<HTML
      <html>
      <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="../css/mainView.css">
        <link rel="stylesheet" href="../css/goodsView.css">
      </head>
      <body>
HTML;
  }
  /*================================================================
  //function name : bodyView()
  //explanation : 상품들을 보여주는 메서드
  =================================================================*/
  public function bodyView($pPagingArray,$pResult){
    echo "<section>";
        foreach($pResult as $key){
          echo "<a href='{$this->path}{$key['b_no']}'>";
          echo "<div id='goodsDiv'>";
          echo "<div id='goodsImg'><img src='{$key['mainPhoto']}' width='300' height='200'></div><div id='goodsName'>{$key['b_no']}</div><div id='goodsPrice'>{$key['goodsName']}</div>";
          echo "<div id='goodsPrice'>{$key['goodsPrice']}</div>";
          echo "</div>";
          echo "</a>";
        }
        echo "<div id='pageNumber'>";
        for($i=0;$i<count($pPagingArray);$i++){
          echo "<a href='../control/index.php?page=goods&kind={$pResult[0]['mainGroup']}&num={$pPagingArray[$i]}'>{$pPagingArray[$i]}</a>";
        }
        echo "</div>";
    echo "</section>";
  }
  /*============================================
  //function name : loadView()
  //explanation : body부분을 보여주는 함수
  //parameter : 배열(GoodsModel에서 받은 결과 값)
  ==============================================*/
  public function loadView($pPagingArray,$pResult){
    $this->htmlView();
    if(isset($_SESSION['id'])){
      if($_SESSION['id']=='admin') $this->adminHeaderView();
      else $this->logoutHeaderView();
    }
    else $this->loginHeaderView();
    $this->headerView1();
    $this->bodyView($pPagingArray,$pResult);
    $this->othersView();
  }

}
 ?>

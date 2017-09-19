<?php
require_once "OthersView.php";
class BuyListView extends OthersView{
  public function __construct(){
    parent::__construct();
  }
  public function htmlView(){
    echo<<<HTML
      <html>
      <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="../css/mainView.css">
        <link rel="stylesheet" href="../css/goodsView.css">
        <link rel="stylesheet" href="../css/history.css">
      </head>
      <body>
HTML;
  }
  /*================================================================
  //function name : bodyView()
  //explanation :
  =================================================================*/
  public function bodyView($pPagingArray,$pResult){
    echo "<section>";
    echo "<hr>";
    echo "<table>";
    echo "<tr class='tr'><td>구매자</td><td>구매목록</td><td>가격</td><td>구매날짜</td></tr>";
    if($pResult!=""){
      foreach($pResult as $key){
        echo "<tr><td>{$key['b_id']}</td><td>{$key['goodsName']}</td><td>{$key['goodsPrice']}</td><td>{$key['buy_regist_day']}</td></tr>";
      }
    }
    echo "</table>";
    echo "<hr>";
    echo "<div id='pageNumber'>";
    if($pPagingArray!=""){
      for($i=0;$i<count($pPagingArray);$i++){
        echo "<a href='../control/index.php?page=buyList&num={$pPagingArray[$i]}'>{$pPagingArray[$i]}</a>";
      }
    }
    echo "</div>";
    echo "</section>";
  }
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

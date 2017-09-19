<?php
require_once "OthersView.php";
class GoodsContendsView extends OthersView{
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
        <link rel="stylesheet" href="../css/goodsContentsView.css">
      </head>
      <body>
HTML;
  }
  /*================================================================
  //function name : bodyView()
  //explanation : 상품들을 보여주는 메서드
  =================================================================*/
  public function bodyView($pResult,$pSubImgPath){
    echo "<section>";
     echo "<div id='goodsImg'><img src='{$pResult[0]['mainPhoto']}' width='300' height='300'></div>";
      echo "<table border='1'>";
        echo "<tr><td>상품조회수</td><td>{$pResult[0]['visitNumber']}</td></tr>";
        echo "<tr><td>상품명</td><td>{$pResult[0]['goodsName']}</td></tr>";
        echo "<tr><td>원산지</td><td>{$pResult[0]['goodsOrigin']}</td></tr>";
        echo "<tr><td>판매가</td><td>{$pResult[0]['goodsPrice']}</td></tr>";
        echo "<tr><td>수량</td><td>{$pResult[0]['goodsNumber']}</td></tr>";
        echo "<tr><td>배송방법</td><td>택배</td></tr>";
        echo "<tr><td>배송비</td><td></td></tr>";
        echo "<tr><td>택배비</td><td>2500원</td></tr>";
        echo "<tr><td>결제수단</td><td>무통장 입금,카드 결제,적립금,실시간 계좌이체</td></tr>";
        echo "<tr>
          <td>
            <form action='../control/index.php?page=goodsContends&goods_no={$pResult[0]['b_no']}' method='post'>
              <input type='hidden' name='b_goodsName' value='{$pResult[0]['goodsName']}'>
              <input type='hidden' name='b_goodsPrice' value='{$pResult[0]['goodsPrice']}'>
              <input type='submit' value='구매하기' id='button'>
            </form>
            <form action='../control/index.php?page=goodsContends&goods_no={$pResult[0]['b_no']}'method='post' id='delete_form'>
             <input type='hidden' name='mode' value='delete'>
             <input type='hidden' name='b_no' value='{$pResult[0]['b_no']}'>
            </form>
          </td>
        </tr>";
      echo "</table>";

      echo "<ul>";
      echo "<li><a href='../control/index.php?page=goodsContends&goods_no={$pResult[0]['b_no']}&m=detail'>상품상세정보</a></li>";
      echo "<li><a href='../control/index.php?page=goodsContends&goods_no={$pResult[0]['b_no']}&m=annae'>교환/환불안내</a></li>";
      echo "</ul>";
      $this->innerBodyView($pSubImgPath);
      echo "<script src='../js/goodsContents.js'></script>";
    echo "</section>";
  }
  public function innerBodyView($pSubImgPath){
    if(isset($_GET['m'])){
      if($_GET['m']=="annae") echo "<div id='annae'>교환없어요</div>";
      else {
        foreach($pSubImgPath as $value) echo"<img src='{$value}' width='400' height='400' id='detail'>";
      }
    }else{
      foreach($pSubImgPath as $value) echo"<img src='{$value}' width='400' height='400' id='detail'>";
    }
  }
  /*============================================
  //function name : loadView()
  //explanation : body부분을 보여주는 함수
  //parameter : 배열(GoodsModel에서 받은 결과 값)
  ==============================================*/
  public function loadView($pResult,$pSubImgPath){
    $this->htmlView();
    if(isset($_SESSION['id'])){
      if($_SESSION['id']=='admin') $this->adminHeaderView();
      else $this->logoutHeaderView();
    }
    else $this->loginHeaderView();
    $this->headerView1();
    $this->bodyView($pResult,$pSubImgPath);
    $this->othersView();
  }

}
 ?>

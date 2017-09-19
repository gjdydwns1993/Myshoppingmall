<?php
require_once "OthersView.php";
class CommunityView extends OthersView{
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
        <link rel="stylesheet" href="../css/community.css">
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
    echo "<div id='writeDiv'><a href='../control/index.php?page=communityWrite'>글쓰기</a></div>";
    echo "<div>";
    echo "<hr>";
    echo "<table>";
    echo "<tr>
            <td>글번호</td>
            <td>글제목</td>
            <td>등록일</td>
            <td>조회수</td>
          </tr>";
          if($pResult!=""){
            foreach($pResult as $key){
              echo "<tr>
                      <td>{$key['b_no']}</td>
                      <td><a href='../control/index.php?page=communiyContents&community_no={$key['b_no']}'>{$key['b_title']}</td>
                      <td>{$key['b_regist_day']}</td>
                      <td>{$key['visitNumber']}</td>
                    </tr>";
            }
          }
    echo "</table>";
    echo "<hr>";
    echo "</div>";
    echo "<div id='pageNumber'>";
    if($pPagingArray!=""){
      for($i=0;$i<count($pPagingArray);$i++){
        echo "<a href='../control/index.php?page=community&num={$pPagingArray[$i]}'>{$pPagingArray[$i]}</a>";
      }
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

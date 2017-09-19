<?php
require_once "OthersView.php";
class CommunityContentsView extends OthersView{
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
        <link rel="stylesheet" href="../css/communityContentsView.css">
      </head>
      <body>
HTML;
  }
  /*================================================================
  //function name : bodyView()
  //explanation : 상품들을 보여주는 메서드
  =================================================================*/
  public function bodyView($pResult){
    echo "<section>";
    echo "<table border='1'>";
      echo "<tr><td>제목</td><td>{$pResult[0]['b_title']}</td></tr>";
      echo "<tr><td>글쓴이</td><td>{$pResult[0]['b_id']}</td></tr>";
      echo "<tr><td>파일다운로드</td><td><a href='../control/fileDownload.php?b_no={$pResult[0]['b_no']}'>{$pResult[0]['b_fileName']}</a></td></tr>";
      echo "<tr><td colspan='2'>글내용</td></tr>";
      echo "<tr><td colspan='2'>{$pResult[0]['b_content']}</td></tr>";
    echo "</table>";
    echo "<div id='div'>";
    echo "<button onclick='check_input()'>삭제</button>";
    echo "</div>";
    echo "<form action='../control/index.php?page=communiyContents&community_no={$pResult[0]['b_no']}' method='post' name='passwd_form'>";
    echo "<input type='hidden' name='mode' value='delete'>";
    echo "</form>";
    echo "<script src='../js/communityContents.js'></script>";
    echo "</section>";

  }
  /*============================================
  //function name : loadView()
  //explanation : body부분을 보여주는 함수
  //parameter : 배열(GoodsModel에서 받은 결과 값)
  ==============================================*/
  public function loadView($pResult){
    $this->htmlView();
    if(isset($_SESSION['id'])){
      if($_SESSION['id']=='admin') $this->adminHeaderView();
      else $this->logoutHeaderView();
    }
    else $this->loginHeaderView();
    $this->headerView1();
    $this->bodyView($pResult);
    $this->othersView();
  }
}
 ?>

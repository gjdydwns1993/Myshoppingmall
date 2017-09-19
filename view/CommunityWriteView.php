<?php
require_once "OthersView.php";
class CommunityWriteView extends OthersView{
  public function __construct(){
    parent::__construct();
  }
  /*================================================================
  //function name : bodyView()
  //explanation : 상품들을 보여주는 메서드
  =================================================================*/
  public function bodyView(){
    echo<<<HTML
    <section>
        <form name="community_form" action="../control/index.php?page=communityWrite" method="post" enctype="multipart/form-data">
          <input type="hidden" name="mode" value="write">
          <table border="1">
            <tr>
              <td >글제목</td>
              <td><input type="text" name="title" value=""></td>
            </tr>
            <tr>
              <td >글비번</td>
              <td><input type="password" name="passwd" value=""></td>
            </tr>
            <tr>
              <td>파일업로드</td>
              <td>
                <input type="file" name="upfile[]"  value="" multiple="multiple">
              </td>
            </tr>
            <tr>
              <td>글내용</td>
              <td colspan="3"><textarea name="content" value=""></textarea></td>
            </tr>
          </table>
        </form>
        <table>
          <tr>
            <td colspan="2">
              <button onclick="check_input()">글작성</button>
              <a href='../control/index.php?page=community'><input type="button" value="뒤로가기" ></a>
            </td>
        </tr>
      </table>
    </section>
    <script src='../js/communityWrite.js'></script>
HTML;

  }
  /*============================================
  //function name : loadView()
  //explanation : body부분을 보여주는 함수
  //parameter : 배열(GoodsModel에서 받은 결과 값)
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

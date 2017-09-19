<?php
require_once "OthersView.php";
class LoginView extends OthersView{
  /*================================================================
  //function name : __construct()
  //explanation : 객체가 생성될떄 parent의 constructor호출,멤버초기화
  =================================================================*/
  public function __construct(){
    parent::__construct();
  }
  /*=========================================
  //function name : bodyView()
  //explanation : login form을 나타내는 메서드
  ==========================================*/
  public function bodyView(){
    echo<<<HTML
    <section>
      <fieldset id='fieldset'>
        <legend>로그인</legend>
          <form action="../control/index.php?page=login" method="POST">
            <input type="hidden" name="mode" value="login">
            <table>
                <tr>
                  <td>아이디</td>
                  <td><input type="text" name='id'></td>
                  <td rowspan="2">
                    <input type="submit" value="로그인" >
                  </td>
                </tr>
                <tr>
                  <td>비밀번호</td>
                  <td><input type="password" name="passwd"></td>
                </tr>
            </table>
          </form>
      </fieldset>
    </section>
HTML;
  }
}

 ?>

<?php
require_once "OthersView.php";
class GoodsRegistrationView extends OthersView{
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
    <legend>상품등록</legend>
      <form name="regist_form"action="../control/index.php?page=goodsRegistration" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="mode" value="registration">
        <table>
            <tr>
              <td>상품명</td>
              <td><input type="text" name='goodsName'></td>
            </tr>
            <tr>
              <td>원산지</td>
              <td><input type="text" name='goodsOrigin'></td>
            </tr>
            <tr>
              <td>상품소속1</td>
              <td>
                  <select name="mainGroup">
                    <option value="nike">나이키농구화</option>
                    <option value="adidas">아디다스농구화</option>
                    <option value="others">그외 농구화</option>
                  </select>
              </td>
            </tr>
            <tr>
              <td>상품소속2</td>
              <td>
                  <select name="subGroup">
                    <option value="nike/jordan">나이키-조던</option>
                    <option value="nike/kobe">나이키-코비</option>
                    <option value="nike/lebron">나이키-르브론</option>
                    <option value="nike/kd">나이키-KD</option>
                    <option value="nike/others">나이키-그외</option>
                    <option value="adidas">아디다스</option>
                    <option value="others/rebook">그외-리복</option>
                    <option value="others/andwon">그외-앤드원</option>
                  </select>
              </td>
            </tr>
            <tr>
              <td>메인사진</td>
              <td>
                <input type="file" name="mainfile"  value=""></input>
              </td>
            </tr>
            <tr>
              <td>서브사진</td>
              <td>
                <input type="file" name="subfile[]"  value="" multiple="multiple"></input>
              </td>
            </tr>
            <tr>
              <td>가격</td>
              <td><input type="text" name='goodsPrice'></td>
            </tr>
            <tr>
              <td>수량</td>
              <td><input type="text" name='goodsNumber'></td>
            </tr>
        </table>
      </form>
      <table>
        <tr>
          <td align="center">
            <input type="submit" value="등록" onclick="check_input()">
            <input type="reset" value="초기화">
          </td>
        </tr>
      </table>
      <script src='../js/goodsRegistration.js'></script>
    </section>
HTML;
  }
}
 ?>

<?php
require_once "../config/MyPDO.php";
class MembershipModel{

  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  /*==============================================================
  function name : Membership()
  explanation   : 회원가입을 누르면 컨트롤러에 들어온 값을
                    받아서 결과값을 다시 보내는 역활
  variable :
  $pId      = control/index.php 에서 메게 변수로 받아온 id(아이디)값
  $pPasswd  = control/index.php 에서 메게 변수로 받아온 passwd(패스워드)값
  $pName    = control/index.php 에서 메게 변수로 받아온 name(이름)값
  $pNick    = control/index.php 에서 메게 변수로 받아온 nick(닉네임)값
  $pSex     = control/index.php 에서 메게 변수로 받아온 sex(성별)값
  $pPhone   = control/index.php 에서 메게 변수로 받아온 phone(휴대폰번호)값
  $pRegist  = control/index.php 에서 메게 변수로 받아온 regist(가입일자)값
  $pAddress = control/index.php 에서 메게 변수로 받아온 address(주소)값
  ================================================================*/
  public function membership($pArrayInfo){
    try {
      $dbo = new MyPDO();
      $query = "insert into member values('',:id,:passwd,:name,:nick,:sex,:phone,:regist_day,:address)";
      $stmt = $dbo->prepare($query,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
      $stmt -> execute(
        array(":id"=>$pArrayInfo['id'],
              ":passwd"=>$pArrayInfo['passwd'],
              ":name"=>$pArrayInfo['name'],
              ":nick"=>$pArrayInfo['nick'],
              ":sex"=>$pArrayInfo['sex'],
              ":phone"=>$pArrayInfo['phone'],
              ":regist_day"=>$pArrayInfo['regist_day'],
              ":address"=>$pArrayInfo['address'])
        );
      $dbo = null;
    } catch (Exception $e) {
        exit("에러 발생:{$e->getMessage()}");
    }

  }

}
 ?>

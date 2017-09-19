<?php
require_once "../config/MyPDO.php";
require_once "../library/Library.php";

class LoginModel{
  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  /*====================================
  //function name : loginCheck()
  //explanation   : /view/loginView 에서 입력된 id,passwd 값으로 해당하는 id를 찾고
                    비밀번호 검사
  ====================================*/
  public function loginCheck($pId,$pPasswd){
    try {
      $dbo = new MyPDO();
      $query = "select * from member where b_id=:id";
      $stmt = $dbo->prepare($query,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
      $stmt -> execute(
        array(":id"=>$pId)
      );
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($row != FALSE){//해당하는 아이디 값이 있으면
        if($pPasswd == $row['b_passwd']){//해당하는 아이디에 비밀번호 입력값이 맞으면
          $_SESSION['id'] = $row['b_id'];
          return "true";
        }else{//해당하는 아이디에 비밀번호 입력값이 틀리면
          return "passwd";
        }//end else
      }else{//해당하는 아이디가 없으면
        return "id";
      }//end else
      $dbo=null;
    }catch(Exception $e){
      exit("에러발생:{$e->getMessage()}");
    }
  }
}
 ?>

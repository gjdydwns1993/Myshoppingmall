<?php
require_once "../config/MyPDO.php";

class BuyListModel{

  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  //구매 메서드
  public function buy(){
    try {
      $dbo = new MyPDO();
      $query = "insert into history values('',:id,:goodsName,:goodsPrice,:buy_regist_day)";
      $stmt = $dbo->prepare($query,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
      $stmt->execute(
        array(
          ":id"=>$_SESSION['id'],                       //로그인 사용자
          ":goodsName"=>$_POST['b_goodsName'],          //상품명
          ":goodsPrice"=>$_POST['b_goodsPrice'],        //상품 가격
          ":buy_regist_day"=>date('Y년m월d일H시',time()) //일자
        )
      );
      $dbo = null;
    } catch (Exception $e) {
      exit("에러발생:{$e->getMessage}");
    }
  }
  //구매 페이지
  public function buyListLoad(){
    try {
      $dbo = new MyPDO();
      if($_SESSION['id']=="admin") $query = "select * from history";
      else $query = "select * from history where b_id='{$_SESSION['id']}'";
      $stmt=$dbo->prepare($query);
      $stmt->execute();
      if($stmt->rowCount()==0){
        $dbo = null;
        return "";
      }else{
        if(isset($_GET['num'])){ //num이 없을떄
          $offsetNum = ($_GET['num']-1)*8;
          //관리자일떄
          if($_SESSION['id']=="admin") $query = "select * from history limit 8 offset ".$offsetNum;
          else $query = "select * from history where b_id='{$_SESSION['id']}' limit 8 offset ".$offsetNum;
        }//end if(isset($_GET['num']))
        else {
          //관리자 일때
          if($_SESSION['id']=="admin") $query = "select * from history limit 8 offset 0";
          else $query = "select * from history where b_id='{$_SESSION['id']}' limit 8 offset 0";
        }//end else
        $stmt = $dbo->prepare($query,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          $result[] = $row;
        }
        $dbo = null;
        return $result;
      }//end else
    } catch (Exception $e) {
      exit("에러발생:{$e->getMessage}");
    }
  }
}
 ?>

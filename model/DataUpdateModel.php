<?php
require_once "../config/MyPDO.php";

class DataUpdateModel{

  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  /*===================================================================
  //function name : productGoodsNumberUpdate
  //explanation   : 상품 갯수 업데이트
  =====================================================================*/
  public function productGoodsNumberUpdate(){
    try {
      $dbo = new MyPDO();
      $query = "select * from product where b_no='{$_GET['goods_no']}'";
      $stmt = $dbo->prepare($query);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $goodsNumber = $result['goodsNumber']-1;
      $query = "update product set goodsNumber='{$goodsNumber}' where b_no='{$_GET['goods_no']}'";
      $stmt  = $dbo->prepare($query);
      $stmt->execute();
    } catch (Exception $e) {
        exit("에러발생:{$e->getMessage()}");
    }
  }
  /*===================================================================
  //function name : productVisitNumberUpdate
  //explanation   : 상품 조회수 업데이트
  =====================================================================*/
  public function productVisitNumberUpdate(){
    try {
      $dbo = new MyPDO();
      $query = "select * from product where b_no='{$_GET['goods_no']}'";
      $stmt = $dbo->prepare($query);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $visitNumber = $result['visitNumber']+1;
      $query = "update product set visitNumber='{$visitNumber}' where b_no='{$_GET['goods_no']}'";
      $stmt  = $dbo->prepare($query);
      $stmt->execute();
    } catch (Exception $e) {
        exit("에러발생:{$e->getMessage()}");
    }
  }
  /*===================================================================
  //function name : communityVisitNumberUpdate
  //explanation   : 게시판 방문자 수 업데이트
  =====================================================================*/
  public function communityVisitNumberUpdate(){
    try {
      $dbo = new MyPDO();
      $query = "select * from community where b_no='{$_GET['community_no']}'";
      $stmt = $dbo->prepare($query);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $visitNumber = $result['visitNumber']+1;
      $query = "update community set visitNumber='{$visitNumber}' where b_no='{$_GET['community_no']}'";
      $stmt  = $dbo->prepare($query);
      $stmt->execute();
    } catch (Exception $e) {
        exit("에러발생:{$e->getMessage()}");
    }
  }
}
?>
ㄴ

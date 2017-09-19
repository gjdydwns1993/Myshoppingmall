<?php
require_once "../config/MyPDO.php";
class GoodsModel{

  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  private $rowCount;
  /*===================================================================
  //function name : goodsLoad()
  //explanation   : get으로 넘겨받은 상품 종류에 따라 결과값을 view로 return
  //parameter     : get으로 넘겨받는 상품의 종류 ($_GET['kind'])
  =====================================================================*/
  public function goodsLoad(){
    try{
      $dbo = new MyPDO();
      $query = "select * from product";
      $stmt = $dbo->prepare($query);
      $stmt->execute();
      if($stmt->rowCount()==0){
        return "";
      }else{
        if(isset($_GET['kind'])){

          if(isset($_GET['num'])) {
            $offsetNum = ($_GET['num']-1)*8;
            $query = "select * from product where mainGroup=:condition order by b_no desc limit 8 offset ".$offsetNum;
          }
          else $query = "select * from product where mainGroup=:condition order by b_no desc limit 8 offset 0";

          $stmt = $dbo->prepare($query,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
          $stmt->execute(
            array(
                  ":condition"=>$_GET['kind']
                 )
          );
        }//end if($_GET['kind'])
        else {
          $query = "select * from product where b_no={$_GET['goods_no']}";
          $stmt = $dbo->prepare($query,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
          $stmt->execute();
        }

        while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
          $row[] = $result;
        }
        $dbo = null;
        return $row;
      }//end else

    }catch (PDOException $e){
       exit("에러발생:{$e->getMessage()}");
    }
  }
  /*===================================================================
  //function name : productGoodsNumberUpdate
  //explanation   : 상품 갯수 수정
  //parameter     : $pB_no 상품 번호
  =====================================================================*/
  public function goodsDelete($pB_no){
    try {
      $dbo = new MyPDO();
      $query = "delete from product where b_no='{$pB_no}'";
      $stmt = $dbo->prepare($query);
      $stmt->execute();
    } catch (PDOException $e) {
      exit("에러발생:{$e->getMessage()}");
    }

  }
}
 ?>

<?php
require_once "../config/MyPDO.php";

class PageNumberModel{

  private $rowCount; //pagination number
  /*======================================================================
  //function name :pageMake()
  //parameter :$pTableName(테이블명),$goodsGroup(상품그룹)
  //explanation :해당페이지의불러올떄 8개의 게시글당 1나의 번호 링크를 만들어주는
                 메서드
  //return type : 배열
  =====================================================================*/
  public function getRowCount(){
    return $this->rowCount;
  }
  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  public function pageMake($pTableName,$pGoodsGroup){
    $dbo = new MyPDO();
    switch($pTableName){
      case "product":
        $query = "select * from ".$pTableName." where mainGroup='{$pGoodsGroup}'";
        break;
      case "community":
        $query = "select * from ".$pTableName;
        break;
      case "history":
        if($_SESSION['id']=="admin") $query = "select * from ".$pTableName;
        else $query = "select * from ".$pTableName." where b_id='{$_SESSION['id']}'";
        break;
    }
    
    $stmt = $dbo->prepare($query);
    $stmt->execute();
    $this->rowCount = $stmt->rowCount();
    $row = $this->rowCount;

    if($row==0){ //게시글이 없을때
      return "";
    }else{
      if($row%8==0){
        for($i=0;$i<$row/8;$i++){
          $array[] = $i+1;
        }//end for
        return $array;
      }else{
        if($row<8){
           $array[] = 1;
          return $array;
        }else{
          for($i=0;$i<floor($row/8)+1;$i++){
            $array[] = $i+1;
          }
          return $array;
        }//end else
      }//end else
    }//end else
  }//end function pageMake

}
 ?>

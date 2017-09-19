<?php
require_once "../config/MyPDO.php";

if(isset($_GET['p'])){
  $dbo = new MyPDO();
  $query = "select * from product order by visitNumber desc limit 5";
  $stmt = $dbo->prepare($query);
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $result[] = $row;
  }
  for($i=0;$i<count($result);$i++){
    if($i==$_GET['p']){
      echo "<div id='d'><a href='../control/index.php?page=goodsContends&goods_no={$result[0]['b_no']}'>상품이름:"
            .$result[$i]['goodsName']."</a>"."조회수:".$result[$i]['visitNumber']."</div>";
    }
  }
}else{
  echo "오류다";
}
?>

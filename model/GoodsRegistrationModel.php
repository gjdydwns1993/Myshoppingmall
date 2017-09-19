<?php
require_once "../config/MyPDO.php";
require_once "../library/Library.php";

class GoodsRegistrationModel{

  private $mainFile_path; //라이브러리에 저장된 파일업로드 함수에 전달할 메인 이미지가 올라갈 경로(절대경로)
  private $mainImage_dr;  //라이브러리에 저장된 파일업로드 함수에 전달할 메인 이미지가 저장된 경로(상대경로)
  private $subFile_path;  //라이브러리에 저장된 파일업로드 함수에 전달할 서브 이미지가 올라갈 경로(절대경로)
  private $subImage_dr;   //라이브러리에 저장된 파일업로드 함수에 전달할 서브 이미지가 저장된 경로(상대경로)
  /*==================================
  //function name : __construct()
  //explanation : 멤버를 초기화하는 역활
  ====================================*/
  public function __construct(){
    $this->mainFile_path = "../goodsImage/mainPhoto";
    $this->mainImage_dr = "../goodsImage/mainPhoto/";
    $this->subFile_path = "../goodsImage/subPhoto";
    $this->subImage_dr = "../goodsImage/subPhoto/";
  }

  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  /*===================================================================
  //function name : registrate()
  //explanation   : /view/GoodsRegistrationView에서 서버로 전달된 값을 받아
                    DB에 넣어주는 메서드
  =====================================================================*/
  public function registrate(){
    try {
      if($_FILES['mainfile']['size']==0){  $mainImagePath = ""; }
      else $mainImagePath = Library::fileUpload("mainfile",$this->mainFile_path,$this->mainImage_dr);
      if($_FILES['subfile']['size'][0]==0){  $subImagePath = ""; }
      else $subImagePath = Library::filesUpload("subfile",$this->subFile_path,$this->subImage_dr);

      $dbo = new MyPDO();
      $query = "insert into product values";
      $query .= "('',:goodsName,:goodsOrigin,:mainGroup,:subGroup,:mainPhoto,:subPhoto,:goodsPrice,:goodsNumber,:goods_regist_day,:visitNumber)";
      $stmt = $dbo->prepare($query,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
      $stmt->execute(
                array(
                  ":goodsName"=>$_POST['goodsName'],
                  ":goodsOrigin"=>$_POST['goodsOrigin'],
                  ":mainGroup"=>$_POST['mainGroup'],
                  ":subGroup"=>$_POST['subGroup'],
                  ":mainPhoto"=> $mainImagePath,
                  ":subPhoto"=> $subImagePath,
                  ":goodsPrice"=>$_POST['goodsPrice'],
                  ":goodsNumber"=>$_POST['goodsNumber'],
                  ":goods_regist_day"=>date('Y년m월d일H시i분s초',time()),
                  ":visitNumber"=>0
              )
      );
    }catch (Exception $e){
      exit("에러발생:{$e->getMessage()}");
    }

  }
}
?>

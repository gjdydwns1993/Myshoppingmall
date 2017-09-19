<?php
require_once "../config/MyPDO.php";
require_once "../library/Library.php";
class CommunityModel{
  private $filePath;  //파일경로
  private $fileDr;    //파일 디렉토리

  public function __construct(){
    $this->filePath = "../upfile";
    $this->fileDr ="../upfile/";
  }
  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  /*===================================================================
  //function name : boardWrite()
  //explanation : CommunityWriteView에서 받은 데이터를 db에 저장
  //variable :
  //:id == 현재 로그인된 사용자
  //:b_passwd == 글쓸떄 저장한 게시글 비밀번호
  //:b_title == 게시글 제목
  //:b_content == 게시글 내용
  //:b_filePath == 올라간 파일 경로
  //:b_fileName == 올라간 실제 파일 이름
  //:b_regist_day == 글 저장한 날짜
  //:visitNumber == 방문횟수
  =====================================================================*/
  public function boardWrite(){
    if($_FILES['upfile']['size'][0]==0){  $filePath = ""; }
    else $filePath = Library::filesUpload("upfile",$this->filePath,$this->fileDr);
    $dbo = new MyPDO();
    $query = "insert into community values('',:id,:b_passwd,:b_title,:b_content,:b_filePath,:b_fileName,:b_regist_day,:visitNumber)";
    $stmt = $dbo->prepare($query,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $stmt->execute(
              array(
                ":id"=>$_SESSION['id'],
                ":b_passwd"=>$_POST['passwd'],
                ":b_title"=>$_POST['title'],
                ":b_content"=>$_POST['content'],
                ":b_filePath"=>$filePath,
                ":b_fileName"=>substr($filePath,10),
                ":b_regist_day"=>date('Y년m월d일H시',time()),
                ":visitNumber"=>0
              )
    );
  }
  /*===================================================================
  //function name : boardLoad('parameter1','parameter2','parameter3')
  //explanation : 게시판정보를db에서 가지고와서 CommunityView클래스에 전단
  //parameter : $pB_no(해당게시글번호),$pResult,$pRowCount(게시글전체갯수)
  =====================================================================*/
  public function boardLoad(){
    try{
      $dbo = new MyPDO();
      $query = "select * from community";
      $stmt=$dbo->prepare($query);
      $stmt->execute();
      if($stmt->rowCount()==0){
        return "";
      }else{
        if($_GET['page']=="community"){
          if(isset($_GET['num'])){
            $offsetNum = ($_GET['num']-1)*8;
            $query = "select * from community order by b_no desc limit 8 offset ".$offsetNum;
          }
          else $query = "select * from community order by b_no desc limit 8 offset 0";
        }//end if($_GET['community'])
        else $query = "select * from community where b_no={$_GET['community_no']}";
        $stmt = $dbo->prepare($query);
        $stmt->execute();
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
  //게시글 삭제
  public function boardDelete($pB_no){
    try{
      $dbo = new MyPDO();
      $query = "delete from community where b_no='{$pB_no}'";
      $stmt = $dbo->prepare($query);
      $stmt->execute();
    }catch (PDOException $e){
       exit("에러발생:{$e->getMessage()}");
    }
  }
}
 ?>

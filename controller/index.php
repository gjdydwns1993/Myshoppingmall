<?php
require_once "../view/MainView.php";
require_once "../view/LoginView.php";
require_once "../view/GoodsRegistrationView.php";
require_once "../view/MembershipView.php";
require_once "../view/GoodsView.php";
require_once "../view/GoodsContendsView.php";
require_once "../view/CommunityView.php";
require_once "../view/CommunityWriteView.php";
require_once "../view/CommunityContentsView.php";
require_once "../view/BuyListView.php";
require_once "../model/MembershipModel.php";
require_once "../model/LoginModel.php";
require_once "../model/GoodsRegistrationModel.php";
require_once "../model/GoodsModel.php";
require_once "../model/CommunityModel.php";
require_once "../model/PageNumberMOdel.php";
require_once "../model/BuyListModel.php";
require_once "../model/DataUpdateModel.php";
require_once "User.php";

session_start();
if(isset($_GET['page'])){
  $page = $_GET['page'];
  switch($page){
    //로그인화면
    case "login":
      $obj = new LoginView();
      $obj ->loadView();
      //로그인 버튼을 눌렀을떄
      if(isset($_POST['mode'])){
        $id = $_POST['id'];
        $passwd = $_POST['passwd'];
        $obj = new LoginModel();
        $result=$obj -> loginCheck($id,$passwd);
        if($result=="id") echo "<script>alert('가입되지 않은 아이디입니다.')</script>";
        else if($result=="passwd")  echo "<script>alert('비밀번호가 틀렸습니다.')</script>";
        else {
          echo "<script>
                  alert('로그인 성공')
                  document.location.href='index.php'
                </script>";
        }
      }
      break;
    //회원가입화면
    case "membership":
      $obj = new MembershipView();
      $obj ->loadView();
      //회원가입 버튼을 눌렀을떄
      if(isset($_POST['mode'])){
        $obj = new User();
        $obj ->setMemberUserInfo();
        $arrayInfo = $obj->getMemberUserInfo();
        $obj = new MembershipModel();
        $obj-> membership($arrayInfo);
        echo "<script>document.location.href='index.php'</script>";
      }
      break;
    //구매목록확인화면
    case "buyList":
      $obj = new BuyListModel();
      $result = $obj->buyListLoad();
      $obj = new PageNumberModel();
      $pagingArray=$obj->pageMake("history","");
      $obj = new BuyListView();
      //구매목록이 있을때 없을때
      if($result=="")$obj->loadView($pagingArray,$result);
      else $obj->loadView($pagingArray,$result);
      break;
    //상품등록화면
    case "goodsRegistration":
      $obj = new GoodsRegistrationView();
      $obj -> loadView();
      //상품등록 버튼이 눌러졌을때
      if(isset($_POST['mode'])){
        $obj = new GoodsRegistrationModel();
        $obj -> registrate();
      }
      break;
    //상품화면
    case "goods":
      if(isset($_GET['kind'])){
        $obj = new PageNumberModel();
        $pagingArray = $obj->pageMake("product",$_GET['kind']);
        $obj = new GoodsModel();
        $result = $obj ->goodsLoad();
        $obj = new GoodsView();
        $obj -> loadView($pagingArray,$result);
      }
      break;
    //상품컨탠츠화면
    case "goodsContends":
      if(isset($_GET['goods_no'])){
        $obj = new DataUpdateModel();
        $obj->productVisitNumberUpdate();
        $obj = new GoodsModel();
        $result = $obj -> goodsLoad();
        $subImgPath = explode("*",$result[0]['subPhoto']);
        $obj = new GoodsContendsView();
        $obj -> loadView($result,$subImgPath);
        //구입버튼눌렀을떄
        if(isset($_POST['b_goodsName'])){
          $obj = new BuyListModel();
          $obj -> buy();
          $obj = new DataUpdateModel();
          $obj ->productGoodsNumberUpdate();
          echo "<script>alert('해당 상품을 구입하였습니다.')</script>";
        }else if(isset($_POST['mode'])){//상품삭제 버튼 눌렀을떄
          $obj=new GoodsModel();
          $obj->goodsDelete($result[0]['b_no']);
          echo "<script>alert('삭제되었습니다.')</script>";
          echo "<script>history.go(-2)</script>";
        }
      }
      break;
    //커뮤니티(게시판) 화면
    case "community":
      $obj = new PageNumberModel();
      $pagingArray = $obj->pageMake("community","");
      $obj = new CommunityModel();
      $result = $obj->boardLoad();
      $obj = new CommunityView();
      $obj->loadView($pagingArray,$result);
      break;
    //게시글 화면
    case "communiyContents":
      if(isset($_GET['community_no'])){
        $obj = new DataUpdateModel();
        $obj->communityVisitNumberUpdate();
        $obj = new CommunityModel();
        $result = $obj->boardLoad();
        $obj = new CommunityContentsView();
        $obj ->loadView($result);
        //게시글 삭제시 비밀번호 입력
        if(isset($_POST['mode'])){
          if($result[0]['b_passwd']==$_POST['b_passwd']){
            $obj = new CommunityModel();
            $obj->boardDelete($result[0]['b_no']);
            echo "<script>document.location.href='index.php?page=community'</script>";
          }else{
            echo "<script>alert('비밀번호가 틀렸습니다')</script>";
          }
        }
      }
      break;
    //게시글 작성 화면
    case "communityWrite":
      if(isset($_SESSION['id'])){
        $obj = new CommunityWriteView();
        $obj->loadView();
        //작성 버튼 눌렀을때
        if(isset($_POST['mode'])){
          $obj = new CommunityModel();
          $obj->boardWrite();
          echo "<script>document.location.href='index.php?page=community'</script>";
        }
      }else{
        echo "<script>alert('로그인이 필요한 서비스 입니다.')</script>";
        echo "<script>document.location.href='index.php?page=community'</script>";
      }
      break;
    case "logout":
      session_destroy();
      echo "<script>
              alert('로그아웃 성공!!')
              document.location.href='index.php'
            </script>";
      break;
  }
}
else{//메인화면
  $obj = new MainView();
  $obj ->loadView();
}
 ?>

<?php
abstract class ParentView{
  /*=======================================
  //$mainViewCssPath : 메인화면 css파일 경로
  //$menuImgPath : nav태그부분 img 파일 경로
  ========================================*/
  private $mainViewPath;
  private $mainViewCssPath;
  private $menuImgPath1;
  private $menuImgPath2;
  private $menuImgPath3;
  private $menuImgPath4;

  /*=======================================
  //function name : __construct()
  //explanation : 멤버변수 초기화를 위해 사용
  ========================================*/
  public function __construct(){
    $this->mainViewPath = "../control/index.php";
    $this->mainViewCssPath = "../css/mainView.css";
    $this->menuImgPath1 = "../image/menu1.jpg";
    $this->menuImgPath2 = "../image/menu2.jpg";
    $this->menuImgPath3 = "../image/menu3.jpg";
    $this->menuImgPath4 = "../image/menu4.jpg";
  }
  public function __destruct(){
    echo "<script>console.log('객체삭제')</script>";
  }
  /*=================================================
  //function name : htmlView()
  //explanation : view에서 html태그와 head 태그를 나타냄
  ===================================================*/
  public function htmlView(){
    echo<<<HTML
      <html>
      <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="$this->mainViewCssPath">
      </head>
      <body>
HTML;
  }
  /*=================================================
  //function name : loginHeaderView()
  //explanation : view에서 login부분을 나타냄
  ===================================================*/
  public function loginHeaderView(){
    echo<<<HTML
      <div id='header1'>
        <a href='../control/index.php?page=login' id='login'>로그인||</a>
        <a href='../control/index.php?page=membership' id='membership'>회원가입</a>
      </div>
HTML;
  }
  /*=================================================
  //function name : loginHeaderView()
  //explanation : view에서 logout부분을 나타냄
  ===================================================*/
  public function logoutHeaderView(){
    echo<<<HTML
      <div id='header1'>
        <div id='loginId'>{$_SESSION['id']}</div>님 환영합니다.
        <a href='../control/index.php?page=buyList' id='login'>구매목록||</a>
        <a href='../control/index.php?page=logout' id='membership'>로그아웃</a>
      </div>
HTML;
  }
  /*=================================================================
  //function name : adminHeaderView()
  //explanation : 관리자가 로그인 했을때 view 에서 logout부분을 나타냄
  =================================================================*/
  public function adminHeaderView(){
    echo<<<HTML
      <div id='header1'>
        <div id='loginId'>{$_SESSION['id']}</div>님 환영합니다.
        <a href='../control/index.php?page=buyList' id='login'>구매목록||</a>
        <a href='../control/index.php?page=goodsRegistration' id='login'>상품등록||</a>
        <a href='../control/index.php?page=logout' id='membership'>로그아웃</a>
      </div>
HTML;
  }
  /*======================================================
  //function name : headerView()
  //explanation : view에서 쇼핑몰 로고 부분을 나타내는 함수
  =======================================================*/
  public function headerView1(){
    echo<<<HTML
    <div id="header2">
      <a href="$this->mainViewPath"><img src="../image/headerr.png" alt=""></a>
    </div>
      <nav>
        <ul id='ul1'>
          <li class='oli'><a href="../control/index.php?page=goods&kind=nike"><img src="$this->menuImgPath1" alt=""></a></li>
          <li class='oli'><a href="../control/index.php?page=goods&kind=adidas"><img src="$this->menuImgPath2" alt=""></a></li>
          <li class='oli'><a href="../control/index.php?page=goods&kind=others"><img src="$this->menuImgPath3" alt=""></a></li>
          <li class='oli'><a href="../control/index.php?page=community"><img src="$this->menuImgPath4" alt=""></a></li>
        </ul>
        <ul id='ul2'>

        </ul>
      </nav>
HTML;
  }
  /*===================================================================
  //function name : othersView()
  //explanation : view에서 header와 body부분을 제외한 부분을 나타내는 함수
  =====================================================================*/
  public function othersView(){
    echo<<<HTML
        <footer>(주)NBAShopping</footer>
      </body>
    </html>
HTML;
  }
}
?>

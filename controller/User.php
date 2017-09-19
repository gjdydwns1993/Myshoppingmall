<?php
require_once "../library/Library.php";
class User{

  private $id;         //view/MembershiptView 에서 받아온 id(아이디)값을 저장
  private $passwd;     //view/MembershiptView 에서 받아온 passwd(패스워드)값을 저장
  private $name;       //view/MembershiptView 에서 받아온 name(이름)값을 저장
  private $nick;       //view/MembershiptView 에서 받아온 nick(닉네임)값을 저장
  private $sex;        //view/MembershiptView 에서 받아온 sex(성별)값을 저장
  private $phone;      //view/MembershiptView 에서 받아온 phone(휴대폰번호)값을 저장
  private $regist_day; //가입일자를 저장
  private $address;    //view/MembershiptView 에서 받아온 address(주소)값을 저장

  /*============================================================
  //function name : getMemberUserInfo()
  //explanation : 회원가입시 입력한 정보를 model에 전달
  ==============================================================*/
  public function getMemberUserInfo(){
    $arrayInfo = array("id"=>$this->id,
                       "passwd"=>$this->passwd,
                       "name"=>$this->name,
                       "nick"=>$this->nick,
                       "sex"=>$this->sex,
                       "phone"=>$this->phone,
                       "regist_day"=>$this->regist_day,
                       "address"=>$this->address);
    return $arrayInfo;
  }
  /*==============================================================================
  //function name : setMemberUserInfo()
  //explanation : 회원가입시 입력한 정보를 User Class의 property에 저장
  ================================================================================*/
  public function setMemberUserInfo(){
    $this->id = $_POST['id'];
    $this->passwd = $_POST['passwd'];
    $this->name = $_POST['name'];
    $this->nick = $_POST['nick'];
    $this->sex = $_POST['sex'];
    $this->phone = $_POST['phone1']."-".$_POST['phone2']."-".$_POST['phone3'];
    $this->regist_day = date('Y년m월d일H시i분s초',time());
    $this->address = $_POST['address'];
  }
}
 ?>

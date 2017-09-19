<?php
class MyPDO extends PDO
{
    public function __construct($file = 'my_setting.ini')//생성자의 매개변수로ini파일 받아옴
    {
        //파일이 없으면 예외를 던진다.
        //arary parse_ini_file(String $filename,boolean)
        //ini파일을 구문 배열로 반환
        if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');

        $dns = $settings['database']['driver'] .':host=' . $settings['database']['host'] .
        //port가 비어있지 않으면 ini파일의 포트번호 비어있으면 ''
        ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
        ';dbname=' . $settings['database']['schema'];
         //옵션: 문자코드를 utf-8로 설정하여 접속
         array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
         //부모 PDO 객체의 생성자에
         //($dns(mysql:host=localhost;port=3306;dbname=heo),데이터베이스유저네임,데이터베이스패스워드)
         parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }
}
 ?>

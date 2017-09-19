<?php
/*===================================================================
//pageName : fileDownload.php
//explanation : 자유게시판에서 첨부파일다운드를 눌렀을때
//variable:
//$b_no : 해당 게시글 번호
//$file_dir : 해당 파일 경로
//$fileName : 해당 파일 이름
=====================================================================*/
require_once "../config/MyPDO.php";
$b_no = $_GET['b_no'];
$dbo = new MyPDO();
$query = "select b_filePath from community where b_no='{$b_no}'";
$stmt = $dbo->prepare($query);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$result = $row['b_filePath'];
//file경로
$file_dir = substr($result,0,10);
//file이름
$fileName = substr($result,10);
$reail_filename = urldecode($fileName);

header("Content-Type:application/x-octetstream");
header("Content-Length".filesize($file_dir.$fileName));
header("Content-Disposition:attachment;filename=".$reail_filename);
header("Content-Transfer-Encoding:binary");
$fp = fopen($file_dir.$fileName,"r");
fpassthru($fp);
fclose($fp);

?>

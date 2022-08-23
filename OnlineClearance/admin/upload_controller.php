<?php include "head.php" 

?>

</*?php include 'head.php';
$student_id=$_POST['student_id'];
$cDateTimestamp=strtotime("now").".jpg";
$target_dir="../upload/";
$target_file=$target_dir.$cDateTimestamp;
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (isset($_POST['submit'])) {
	$check=getimagesize($_FILES["fileupload"]["tmp_name"]);
	if($check !== false){
		echo "File is an image - ".$check["mime"].".";
		$uploadOk=1;
	}else{
		echo "File is not an image.";
		$uploadOk=0;
	}

}
if ($imageFileType !="jpg"&& $imageFileType !="png"&& $imageFileType !="jpeg" && $imageFileType !="gif") {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. "
	$uploadOk=0;
}
if ($uploadOk==0) {
	echo "Sorry your file was not uploaded";
}else{
	if (move_uploaded_file($_FILES['fileToUpload']["tmp_name"], $target_file)) {
		
	} else{
		echo "Sorry, there was an error uploading your file."
	}
}
$sql= "INSERT INTO voucher (student_id,voucher) VALUES ('$student_id','$cDateTimestamp')";
if ($connect->query($sql)===TRUE) {
	echo "voucher Successfully uploaded";
}else{
	echo "Error: ".$sql. "".$connect->error;
}

 ?*/>

<?php
//저장 경로
$target_dir = "../up/";
//$_FLIES 전역변수
/*
  $_FILES['input 태그 file name']['name'] : 업로드된 파일 명
  $_FILES['input 태그 file name']['type'] : 브라우저가 제공한다면 MIME 형식
  $_FILES['input 태그 file name']['size'] : 업로드된 파일의 크기
  $_FILES['input 태그 file name']['tmp_name'] : 업로드된 파일을 서버측에서 임시로 저장해둔 파일 이름
  $_FILES['input 태그 file name']['error'] : 파일 업로드와 관련된 에러코드

변수를 통해서 업로드된 파일에 대한 대한 정보과 임시로 저장된 서버내의 파일명을 알아낼 수 있음
임시로 서버에 저장된 상태의 파일을 저장해 두고 싶은 디렉토리로 옮기는 작업이 파일업로드의 작업
  */
// basename(); 경로 + 접미사
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// 파일 타입 추출
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// isset 변수 선언되어있는지 확인해서 선언되어 있으면 true return
if(isset($_POST["submit"])) {
    //["tmp_name"] 임시 디렉토리에 저장된 이름을 알아냄.
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
// file_exists 파일이 존재하는지 확인 있으면 1 return
// 파일 중복 확인
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
// 파일 사이즈 확인
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
// 파일 타입 체크
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    //move_uploaded_file();  업로드할 파일(form에서 받은 파일), 옮겨질 위치 지정
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
<?php

$folder_path = 'uploads';
$file_path = $folder_path.$_FILES['upload_file']['name'];
$flag_ok = true;

if(file_exists($file_path)){
    echo 'File đã tồn tại!';
    $flag_ok = false;
}

if($_FILES['upload_file']['size']>5000000){
    echo 'Dung lượng file quá lớn!';
    $flag_ok = false;
}
if($flag_ok){
    move_uploaded_file($_FILES['upload_file']['tmp_name'], $file_path);
    echo 'File đã được tải lên!';
}
else{
    echo 'Tải lên không thành công!';
}

?>
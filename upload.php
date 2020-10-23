<?php
define("PATH_UPLOAD","fileup/");
if(isset($_POST['btnUpload'])){
   if(isset($_FILES['file'])){
       $name = $_FILES['file']['name'];
       $tmp_name =
        $_FILES['file']['tmp_name'];
        $error =
        $_FILES['file']['error'];
        if($error == 0 && !empty($tmp_name)){
            //tien hanh upload
            $upload = move_uploaded_file($tmp_name,PATH_UPLOAD.$name);
            //hien thi anh ra view 
            if($upload){
                header("Location:index.php?state=success&img={$name}");
            } 
            else {
                //quay ve trang upload form thong bao loi
                header("Location:index.php?state=fail");
            }
        }
        else{
            header("Location:index.php?state=error");
        }
   }
}
?>
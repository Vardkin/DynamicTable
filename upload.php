<?php
$ds = DIRECTORY_SEPARATOR;  //1 Store directory separator (DIRECTORY_SEPARATOR) to a simple variable. This is just a personal preference as we hate to type long variable name.
 
$storeFolder = 'uploads';   //2 Declare a variable for destination folder.

if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3 If file is sent to the page, store the file object to a temporary variable.            
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4 Create the absolute path of the destination folder.
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5 Create the absolute path of the uploaded file destination.
 
    move_uploaded_file($tempFile,$targetFile); //6 Move uploaded file to destination.
}
?>

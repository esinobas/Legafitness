<?php
/**
 * Function that returns the files that are in a directory
 *
 * @param theDirectory: The directory that is scanned
 * @return: An array with the files that are contained in a directory.
 */
function getDirectoryFiles($theDirectory){
   
   $files = scandir($theDirectory);
      
   $arrayFiles =  array();
   $idx = 0;   
   
   foreach($files as $file){
     	$filePath = $theDirectory."/".$file;
   	  if (is_file($filePath)){
         $arrayFiles[$idx] = $filePath;
         $idx ++;
      }
   }
   return $arrayFiles;
   
}
?>
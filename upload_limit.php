<?php

    if(!function_exists('uploadFilesLimit')){

        function uploadFilesLimit(){
            $filetypes = array('.jpg','.JPG','.jpeg','.JPEG');
            $filesize = $_FILES['filename']['type'];
            
            if(!in_array($filesize, $filetypes)){
                echo "<p>Данный формат " . $filesize . " - не поддерживается!</p>";
                die();
            } elseif ($_FILES['filename']['size'] > 3*1024*1024){
                echo "<p>Размер более трех мегабайт - не поддерживается!</p>";
                die();
            } else{
                if(move_uploaded_file($_FILES['filename']['tmp_name'], 'img/'.$_FILES['filename']['name'])) {
                    echo 'Файл успешно загружен! <br/>';
                }
            }
        }
        $upFilesLimit = uploadFilesLimit();
    }
?>
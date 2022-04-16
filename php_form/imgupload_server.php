<?php
    $tempfile = $_FILES['imgfile']['tmp_name'];

    $filetypeextension = explode("/", $_FILES['imgfile']['type']);

    $filetype = $filetypeextension[0];
    $extension = $filetypeextension[1];

    $isextgood = false;

    switch($extension){
        case 'jpeg':
        case 'bmp':
        case 'gif':
        case 'png':
        $isextgood = true;
        break;
        default :
            echo "허용하는 확장자 jpg, bmp, gif, png 입니다.";
            exit;
        break;
    }

    if($filetype == 'image'){
        if($isextgood){
            $myfile = "./test.{$extension}";

            $imguploaded = move_uploaded_file($tempfile, $myfile);

            if($imguploaded == true){
                echo "파일이 정상적으로 업로드 되었습니다.<br>";
                echo "<img src='{$myfile}' width='100'/>";
            }else{
                echo "파일 업로드 실패";
            }
        }else{
            echo "허용하는 확장자는 jpg, bmp, gif, png입니다.";
            exit;
        }
    }else{
        echo "이미지 파일이 아님";
        exit;
    }
?>
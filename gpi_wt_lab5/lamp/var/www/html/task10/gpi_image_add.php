<?php
    include "gpi_connect.php";

    if( isset($_POST['upload']) )
    {
        $img_type = substr($_FILES['img_upload']['type'], 0, 5);
        $img_size = 2 * 1024 * 1024;
        if( !empty($_FILES['img_upload']['tmp_name'])
            and $img_type === 'image'
            and $_FILES['img_upload']['size'] <= $img_size
            )
        { 
            $gpi_image_src = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
            $gpi_image_name = $_FILES['img_upload']['name'];
            $gpi_image_size = $_FILES['img_upload']['size'];	
            $gpi_connection->query("
                INSERT INTO `gpi_images` (`gpi_image_src`, `gpi_image_name`, `gpi_image_size`)
                VALUES ('$gpi_image_src', '$gpi_image_name', '$gpi_image_size');");
            header('Location: index.php');
        }
    }

    echo "err";

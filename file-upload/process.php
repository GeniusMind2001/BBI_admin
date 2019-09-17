<?php
try {
    if(sizeof($_POST) > 0) {
       // if(in_array($image_type, array(IMAGETYPE_JPEG, IMAGETYPE_PNG))) {
            if(sizeof($_FILES) > 0) {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                './img/' . $_FILES["file"]["name"]);
                // do databasie stuff
            } else {
                throw new RuntimeException('Failed to upload file.');
            }
            print_r($_FILES);
            // print_r($_POST);
        }  else {
            throw new RuntimeException('Failed to upload file.');
        }
  //  }
} catch(RuntimeException $opps) {
    echo("opps: invailid file type");
}
?>

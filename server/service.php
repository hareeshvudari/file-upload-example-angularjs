<?php
//Demo Service file
if (count($_FILES) > 0) {
    echo var_dump($_FILES.name)."<br>";
    echo var_dump($_FILES)."<br>";
//    echo $_FILES[name];
} else {
    echo 'File uploading fail.';
}
?>
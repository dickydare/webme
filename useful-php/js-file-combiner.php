<?php
  header("Content-type: text/javascript");
  header("Cache-Control: public, max-age=600");

  //locate file in one directory
  $fls = glob('js/*.js');
  $js = $fls;

  $js_content = '';

  //looping content
  foreach ($js as $ajs) {
    $js_content[] = file_get_contents($ajs);
  }

  //print file content
  print implode('', $js_content);

 //note : you can write to script src with this "js-file.php"
 //but for more efficient use rewrite in server config
 //in apache/nginx, i.e rewrite main.js$ js-file.php
 //so, you can write src script using main.js (virtual file)

?>

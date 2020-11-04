  <?php
  function bidai() {
    //mysql connection
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "library";

    $db = mysqli_connect($server, $user, $password, $dbname);

    //select last row on table
    $mybid = mysqli_query($db,"SELECT book_id FROM booklist ORDER BY book_id DESC LIMIT 0,1");
    $row = mysqli_fetch_array($mybid);
      if ($mybid == ''){
        $bidm = "B0001";
      }
      else {
        //use substring to get int only
        $amo = substr($row['book_id'],1,4);
        $add = ++$amo;
        $four = str_pad($add,4,"0",STR_PAD_LEFT);
        $bidm = "B" . $four;
      }
    return $bidm;
  }
?>
<?php
  require_once"config.eu.php";

    $first_name_popup = $_POST["first_name_popup"];
    $last_name_popup = $_POST["last_name_popup"];
    $email_popup = $_POST["email_popup"];
    $prof_popup = $_POST["prof_popup"];
    $message_popup = $_POST["message_popup"];
    $recallphoto = $_FILES['somename']['name'];
    $uploadfile = "recallfiles/".$_FILES['somename']['name'];
      move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile);

  $sql = "INSERT INTO `recall_tbl`(`firstname`, `lastname`, `yemail`, `yprof`, `ymessages`, `recallphoto`) VALUES ('".$first_name_popup."', '".$last_name_popup."', '".$email_popup."', '".$prof_popup."', '".$message_popup."', '".$recallphoto."')";
  if (mysqli_query($link, $sql)) {
       header("Location: index.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  ?>
  <script>
  window.location.href = 'index.php';
  </script>

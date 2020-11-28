<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Input</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
     a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Create Data</h1>
      <center><a href="index.php">+ &nbsp; View Image Blog </a></center><br>
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
         <div>
          <label>Title</label>
         <input type="text" name="title" required=""/>
        </div>
        <div>
          <label>Content</label>
         <input type="text" name="content" required="" />
        </div>
        <div>
          <label>Image</label>
         <input type="file" name="image" required="" />
        </div>
        <div>
          <label>User Id</label>
         <input type="text" name="userid" required="" />
        </div>
        <div>
         <button type="submit" name="kirim" value="Upload">Upload</button>
        </div>
        </section>
      </form>

      <?php if (isset($_POST['kirim'])) {
          $title_image      = $_POST['title'];
          $content_image    = $_POST['content'];
          $name_files       = $_FILES['image']['name'];
          $userId_image     = $_POST['userid'];
          $source           = $_FILES['image']['tmp_name'];
          $folder           = './upload/';
          

          move_uploaded_file($source, $folder.$name_files);
          $insert = mysqli_query($conn, "INSERT INTO tbl_image_blog VALUES
          (NULL,
          '$title_image',
          '$content_image',
          '$name_files',
          '$userId_image')");

          if ($insert) {
          echo "<script type='text/javascript'>
                    alert('Berhasil Create Data');
                </script>";
          }else{
            echo "Gagal Upload";
          }
      } 
      ?>
  </body>
</html>
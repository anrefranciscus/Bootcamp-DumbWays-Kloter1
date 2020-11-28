<?php
  include 'koneksi.php'; 
  $data = mysqli_query($conn, "SELECT * from tbl_image_blog where id='".$_GET['id']."'");
  $r = mysqli_fetch_array($data);

  $title_image = $r['title'];
  $content_image = $r['content'];
  $name_files = $r['file_image'];
  $userId_image = $r['user_id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Update</title>
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
           <input type="text" name="title" required="" value="<?php echo $title_image ?>" />
        </div>
        <div>
          <label>Content</label>
          <input type="text" name="content" required="" value="<?php echo $content_image ?>"/>
        </div>
        <div>
          <label>Image</label>
         <input type="hidden" name="image" value="<?php echo $title_image ?>">
         <input type="file" name="image">
        </div>
        <div>
          <label>User Id</label>
         <input type="text" name="userid" required="" value="<?php echo $userId_image ?>"/>
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

          if ($name_files != 0) {
            move_uploaded_file($source, $folder.$name_files);
            $update = mysqli_query($conn, "UPDATE tbl_image_blog SET
              title     = '".$title_image."',
              content   = '".$content_image."',
              image     = '".$name_files."',
              userid    = '".$userId_image."'
              where id = '".$_GET['id']."'
            ");
            if ($update) {
              echo "Berhasil Update";
            }else{
              echo "Gagal Update";
            }
          }else{
            $update = mysqli_query($conn, "UPDATE tbl_image_blog SET
              title     = '".$title_image."',
              content   = '".$content_image."'
              where id = '".$_GET['id']."'
              ");
               if ($update) {
              echo "Berhasil Update";
            }else{
              echo "Gagal Update";
            }
          }
        }
      ?>
  </body>
</html>
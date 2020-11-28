<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Blog</title>
</head>
<style>
	*{
		font-family: "Trebuchet MS";	
	}
	h1{
		text-transform: uppercase;
		color: salmon;
	}
	table {
		border:solid 1px #DDEEEE;
		border-collapse: collapse;
		border-spacing: 0;
		width: 70%;
		margin: 10px auto 10px auto;
	}
	table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
</style>
<body>
	<center><h1>Image Blog</h1></center>
	<center><a href="create.php">+ &nbsp; Add Image Blog </a></center>
	<br>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Content</th>
				<th>Image</th>
				<th>User Id</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php  
			$query = mysqli_query($conn, "SELECT * FROM tbl_image_blog");
			while ($row= mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $row['id'] ?> </td>
				<td><?php echo $row['title'] ?> </td>
				<td><?php echo $row['content'] ?> </td>
				<td><img src="upload/<?php echo $row['file_image'] ?>" width="50px" height="50px"> </td>
				<td><?php echo $row['user_id'] ?> </td>
				<td>
					<a href="update.php?id=<?php echo $row['id']?>">Update</a>
					<a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
				</td>
			</tr>
		</tbody>
	<?php  }?>
	</table>
</body>
</html>
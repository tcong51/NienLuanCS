<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
    <title>Thêm cây</title>
    <meta charset="utf8">
    <link href="css/add_trees.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	if(isset($_SESSION['tendangnhap'])){
			$tendangnhap = $_SESSION['tendangnhap'];
		}
	else{
		header("location:loginadmin.html");
    }
	?>
    <div class="btn">
        <button onclick="window.location.href='ds_trees.php'">Danh sách cây</button>
	</div>
    <form action="input_addtrees.php" method="POST" enctype="multipart/form-data">
        <h1 align="center"  >Thêm cây </h1>
		<table width="400" cellspacing="0" cellpadding="1" border="0" align="center">
			
			<tr>
				<th style="width: 200px;" align="left"><td> Tên cây</td> </th>
				<td></td>
				<td><input type = "text" name="Tencay" style="width: 700px;" class="input"><br>
			</td></tr>
			<tr>
				<th align="left"> <td>Đặc điểm </td></th>
				<td></td>
				<!-- <td><input type="text" name="Dacdiem" style="width: 300px;"><br> -->
				<td><textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" class="input" name="Dacdiem" style="width: 700px;height: 200px;"></textarea><br>
            </td></tr>
			<tr>
			<th><td> Loại cây </td></th>
			<td></td>
			<td>
				<select name="Loaicay" class="input"> 
					<option name="cayanqua"> Ăn quả </option>
					<option name="caykieng"> Kiểng </option>
					<option name="caydayleo"> Dây leo </option>
					<option name="caythaoduoc"> Thảo dược 	</option>
					<option name="caythango"> Thân gỗ 	</option>
					<option name="Khac"> Khác 	</option>
				</select>
			</td>	
 			</tr>
            <tr>
				 <th align="left"><td> Cách chăm sóc </td> </th>
				 <td></td>
				<!-- <td><input type="text" name="Cachchamsoc" style="width: 300px;"><br> -->
				<td><textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" class="input" name="Cachchamsoc" style="width: 700px;height: 200px;"></textarea><br>
            </td></tr>
			<tr>
				<th align="left"><td> Hình ảnh </td></th>
				<td></td>
				<td><input type="file" name="Hinh" style="width: 700px;"><br>
            </td></tr>
            <tr>
				<th style="width: 200px;" align="left"><td> Mô tả cây</td> </th>
				<td></td>
				<td><textarea rows="5" cols="20" placeholder="Đây là vùng nhập text" class="input" name="Motacay" style="width: 700px;height: 200px;"></textarea><br>
			</td>
			</tr>

			<tr >
				<td>
				</td>
				
				<td>
				<input  type="submit" class="input" value="Thêm" style="width: 150px;">
				</td>
				<td><input  type="reset" class="input" value="Reset" style="width: 150px;">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>
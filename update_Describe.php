<!DOCTYPE html>
<?php
	session_start();
?>
<?php 
	if(isset($_SESSION['tendangnhap'])){
			$tendangnhap = $_SESSION['tendangnhap'];
		}
	else{
		header("location:loginadmin.html");
    }
?>
<html>
    <head>
        <title>Sửa sản phẩm</title>
        <meta charset="utf8">
        <link href="css/update_trees.css" rel="stylesheet" type="text/css" />
    </head>

    <script>



function signup_Describe(){
    var key= document.getElementById("search_Describe").value;
    var ok=true;
    if (key ==""  ){
        alert("Vui lòng điền từ khóa !");
    ok=false;
	    }else if(key == null){
            alert("Vui lòng điền từ khóa !");
             ok=false; 
                           }
	return ok;
}

 
       function notices_Describe(value){
	  var result = confirm("Are you sure?")
      ok=true;
		if(result)  {
		
            

		alert("You have updated! ");
        ok=true;
		} else {
            alert("You not updated! "); 
		     ok=false;    
                let action = document.getElementById("form_mt");
                    action.setAttribute("action", `update_Describe.php`);
                   
                  window.location.reload(`update_Describe.php?id=${value}`)
			   }
              
              
     return ok;
                   
   	}
  

    </script>
    <body>
    <div class="btn">
    <input type="button" value="Back" onclick="history.go(-1);" style="width: 120px;height: 50px;">
        <br>
    <button class="input1" onclick="window.location.href='ds_trees.php'" style="width:120px;height:50px;position: absolute;">Danh sách cây</button>
        </div>

    <div class="header">
		<div class="header-main">
               <h1>ADMIN PAGE </h1>
        </div>
    </div>
        <div id="notices"></div>

    
    <?php
    if(isset($_SESSION['tendangnhap'])){
        $tendangnhap = $_SESSION['tendangnhap'];
    }
    else{
        header("location:loginadmin.html");
    }
    $Code = $_GET['Code'];
    include "connect.php";

    $data = $con->query("SELECT * FROM db_trees WHERE Code = '$Code'");
    $data = $data->fetch_assoc();

    echo '<hr>';
    echo '<hr>';
    echo '<h1>Mô tả</h1>';
    echo '<form action=input_update_Describe.php method="GET" onsubmit="return signup_Describe()" id=form_mt>';
    echo '<table width="1280px" cellspacing="0" cellpadding="1" border="2" align="center" style="background: azure;">' ;
    echo '<input type="hidden" name="Code" value='.$data['Code'].'>';
    echo "<tr>
        <td><h2 style='width: 200px;' >Nội dung hiện tại</h2></td>
        <td id='location' style='width: 1300px;'>".$data['Describe']."</td>;
        
    </tr>";
    echo "<tr>
        <td><h2>Điền nội dung cần sửa</h2></td>
        <td><textarea rows='5' cols='0' id='search_Describe' placeholder='Đây là vùng nhập text' name='Describe' style='width: 1070px;height: 200px;'></textarea></td>

    </tr>";
    echo "<tr>
        <td colspan='2' ><center><input type='submit' value=' Xác nhận ' onclick=notices_Describe(".$data['Code'].") style='width:200px;height: 30px;' ></center></td>
    </tr>";
   
    echo '</table>';
    echo '</form>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '<hr>';
    echo '<hr>';
    echo'</div>';
    $con->close();
?>

<div class="copyright">
	<p>© 2020 Admin.</p>
</div>
    </body>

</html>

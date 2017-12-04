<?php

require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');

if(isset($_GET['stuId'])){
		$stuId=$_GET['stuId'];
		
	
$sql="select * from fp_student  where studentId='$stuId'";
$temp=$conn->query($sql);
$re=$conn->affected_rows;

if($re>0){
	while($row=$temp->fetch_assoc()){
		$name=$row['name'];
		$gender=$row['gender'];
		$s_class=$row['class'];	
	}

	//echo $name."+==+".$gender."===".$s_class;
	
	$sql1="select * from fp_score  where s_stuId='$stuId'";
    $temp1=$conn->query($sql1);//查找成绩表
    $re1=$conn->affected_rows;

	if($re1>0){ //证明该学号有成绩
			?>
		<div style="width:15%;float:left;">
			<table class="table table-striped table-bordered table-hover text-center">
					<h2 style="color:green;">个人信息:</h2>
					<tr>
						<td>学号：</td><td><?php echo $stuId;?></td>
					</tr>

					<tr>	
					<td>姓名：</td><td><?php echo $name;?></td>
					</tr>

					<tr>
						<td>性别：</td><td><?php echo $gender;?></td>
					</tr>

					<tr>
						<td>班级：</td><td><?php echo $s_class;?></td>
					</tr>
					
				</table>
			</div>
				
    		<?php

		if($_GET['km_name']==''){
			//$sql2="select * from fp_score  where s_stuId='$stuId' ";
    		//$temp2=$conn->query($sql2);//查找科目表
    		//$re2=$conn->affected_rows;
    		//echo $re2;
    		?>
		<div style="margin-left:20px;width:20%;float:left;">
			<table class="table table-striped table-bordered table-hover text-center"
				 style="border:1px solid red;">
					<h2 style="color:green;">个人全部成绩:</h2>
			<tr>	
				<td>科目</td><td>成绩</td>
			</tr>
    		<?php
				
    		while ($row1=$temp1->fetch_assoc()) { ?>
    			
				
					<tr class="kmclass1">
						<td><?php echo $row1['s_kmname'];?></td>
						<td><?php echo $row1['s_cj'];?></td>
					</tr>

					
			<?php }?>
					
				</table>
				<br/>

			</div>
<?php
    		
    		
			//	$cj[]=$row1['s_cj'];
    			
    			

		}else{
			$km=$_GET['km_name'];
			$sql3="select * from fp_score  where s_stuId='$stuId' and s_kmname='$km' ";
    		$temp3=$conn->query($sql3);//查找科目表
    		$re3=$conn->affected_rows;
    		if($re3>0){  ?>

		<div style="margin-left:20px;width:20%;float:left;">
			<table class="table table-striped table-bordered table-hover text-center"
				 style="border:1px solid red;">
					<h2 style="color:green;">个人单科成绩:</h2>
			<tr>	
				<td>科目</td><td>成绩</td>
			</tr>
    		<?php
				
    		while ($row3=$temp3->fetch_assoc()) { ?>
    			
				
					<tr class='kmclass1'>
						<td><?php echo $row3['s_kmname'];?></td>
						<td><?php echo $row3['s_cj'];?></td>
					</tr>

					
			<?php }?>
					
				</table>
				<br/>

			</div>
			<?php
    		}else{
    			//echo "<span>该学生没有该成绩</span>";
    			echo "<h2 style='color:red;'>该学生没有该成绩</h2>";
    		}
		}
		

	}else{
		echo "<h2 style='color:red;'>该学号没有成绩</h2>";
		//echo "<span>该学号没有成绩</span>";
	
	}


}else{
	//echo "<span>没有该学号</span>";
	echo "<h2 style='color:red;'>没有该学号</h2>";
	
	}

}

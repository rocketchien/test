<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
<table width="250" bgcolor="black" border="1">

<tr bgcolor="white">
   <td><font color="darkblue">英文</font></td>
   <td><font color="darkblue">中文</td>
</tr>

<tr bgcolor="white">

   <td><?php echo $_POST['score']?><br> </font></td>
   
   <td>
     <?php
     $wordA = 'apple';
     $wordB = 'orange';
	 $wordC = 'watermelon';
	 $wordD = 'strawberry';
	 $wordE = 'pineapple';
	 $chineseA = '蘋果';
	 $chineseB = '柳橙';
	 $chineseC = '西瓜';
	 $chineseD = '草莓';
     $chineseE = '鳳梨';
	 
	 if($_POST['score'] == $wordA)
	 {
		 echo $chineseA;
	 }	
     elseif	($_POST['score'] == $wordB)
	 {
		 echo $chineseB;
	 }
	 elseif	($_POST['score'] == $wordC)
	 {
		 echo $chineseC; 
	 }
	 elseif	($_POST['score'] == $wordD)
	 {
		 echo $chineseD;
	 }
	 elseif	($_POST['score'] == $wordE)
	 {
		 echo $chineseE;
	 }
	 else
    {
        echo '錯誤';
    }
	 
	 ?>
	 
   </td>
</tr>

</table>

</body>
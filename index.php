<?php 
function file_download($download)
{
	if(file_exists($download))
				{
					header("Content-Description: File Transfer"); 
					
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					header('Accept-Ranges: bytes');
					header('Content-Disposition: attachment; filename="'.basename($download).'"'); 
					header('Content-Length: ' . filesize($download));
					header('Content-Type: application/octet-stream'); 
					ob_clean();
					flush();
					readfile ($download);
				}
				else
				{
				echo "<script>alert('file not found');</script>";	
				}
	
}

$conn = mysqli_connect("127.0.0.1","dsqli","icadsqli","dsqli");

if(isset($_POST['image_download']))
{

$news="select * from download where id=".$_POST['image'];
if($result = mysqli_query($conn, $news)){
        while($row = mysqli_fetch_assoc($result)) 
			{
				$file=$row['location'];
			file_download($file);

			}
        }


else {
	echo "something went wrong";
	}
}

include('head.php');





		echo '<div id="left"><div class="main"><table align=center  cellspacing="0" cellpadding="0" style="border-collapse: collapse;border:0px;">
		<tr>
		<form method=post action="index.php">
		<td align=right style="padding:0px; border:0px; margin:0px;">
				<input type=submit name=home value="Home" class="side-pan">
		</td>
		<td  align=right style="padding:0px; border:0px; margin:0px;" >
				<input type=submit name=downloads value="Downloads" class="side-pan">
		</td>
		
		<td  align=left style="padding:0px; border-width:0px; margin:0px;">
				<input type=submit name=us value="Who we are" class="side-pan">
		</td>
				</form></tr></table></div></div>
				<div id="right"></div><div align=center>';	

if(isset($_POST['home']))
{
	
	echo 'Home page';
	
}

if(isset($_POST['downloads']))
{
	
	echo '
   <table width="40%" cellspacing="0" cellpadding="0" class="tb1" style="opacity: 0.6;">
   <tr><td width="20%" align=center style="padding: 10px;" >Serial Number</td><td width="30%" align=center style="padding: 10px;">Image name</td><td width="30%" align=center style="padding: 10px;">Image Link</td><td width="30%" align=center style="padding: 10px;">Download</td></tr></table>
   <table width="40%" cellspacing="0" cellpadding="0" class="tb1" style="margin:10px 2px 10px;opacity: 0.6;" >
   ';
    $run='select * from download';
    $result = mysqli_query($conn, $run);
	
        if (mysqli_num_rows($result) > 0) 
		{
			
                while($row = mysqli_fetch_assoc($result)) 
					{
                       echo '<tr><td width="20%" align=center style="padding: 10px;" >'.$row['id'].'</td><td width="40%" align=center style="padding: 10px;">'.$row['image_name'].'</td><td width="40%" align=center style="padding: 10px;"><a href="'.$row['location'].'" target="_blank">Open Image</a></td><td width="30%" align=center style="padding: 10px;"><form method=post STYLE="margin: 0px; padding: 0px;"><input type=hidden name=image value="'.$row['id'].'"><input  type=submit class=download name=image_download value="Download"></form></td></tr>';
					}
        }
		echo '</table>';
   
	
}


				
if(isset($_POST['us']))
	{
		echo '
<table width="100%" cellspacing="0" cellpadding="0" class="tb1" style=" border:0px;background-color: #191919; opacity: 0.6;" >
			
       <tr><td 
        align="center"><img src="images/who.jpg"></td><td 
         align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"><br><font color=white >
        --==[[Greetz to]]==--</font><br> <font color=#ff9933>Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>Reborn India,L0rd Crus4d3r,cool toad,Hackuin,Alicks,Gujjar PCP,Bikash,Dinelson Amine,Th3 D3str0yer,SKSking,rad paul,Godzila,mike waals,zoo zoo,cyber warrior,shafoon, Rehan manzoor<br>cyber gladiator,7he Cre4t0r,Cyber Ace, Golden boy INDIA,Ketan Singh,Yash,Aneesh Dogra,AR AR,saad abbasi,hero,Minhal Mehdi ,Raj bhai ji , Hacking queen ,lovetherisk and rest of TEAM INDISHELL<br>
<font color=white>--==[[Love to]]==--</font><br># My Father ,my Ex Teacher,cold fire hacker,Mannu, ViKi ,Ashu bhai ji,Soldier Of God, Bhuppi,Gujjar PCP,
Mohit,Ffe,Ashish,Shardhanand,Budhaoo,Jagriti,Salty, Hacker fantastic, Jennifer Arcuri and Don(Deepika kaushik)<br><br>

       
						
           </table>
       </table> 
'; 

	}	
								
				

?>


<html>
<head>
    <title>
    </title>
    <style>
        .profilepic{
            height: 200px;
            width: 200px;
            border-radius: 100px 100px 100px 100px;
            background: linear-gradient(#5ed6e6,#e5e5e5);
        }
        
        .card{
            
        background: linear-gradient(#e65e88,#d8d8d8);
            height: 250px;
            width: 1000px;
            border-radius: 25px 25px 25px 25px;
        }
        
        .cardbutton1{
            background: linear-gradient(#68e65e,#f3fa48);
            height: 200px;
            width: 300px;
            border-radius: 25px 25px 25px 25px;
            display: inline-block;
        }
        .cardbutton2{
            background: linear-gradient(#5ebce6,#119f63);
            height: 200px;
            width: 300px;
            border-radius: 25px 25px 25px 25px;
            display: inline-block;
        }
        .cardbutton3{
            background: linear-gradient(#eb5198,#2b9cc6);
            height: 200px;
            width: 300px;
            border-radius: 25px 25px 25px 25px;
            display: inline-block;
        }
        .inbtn{
            border-radius: 50px 50px 50px 50px;
            background:#ebe9e9;
            width: 200px;
            height: 50px;
            transition: all 0.2s ease;

        }
        .inbtn:hover{
             box-shadow: 0px 0px 50px 0px white;

        }
    
    </style>
    
    </head>
    
   <?php   

$con = mysqli_connect("localhost","root","","reboot");
if(!$con){
   echo "Sorry! Please Try Again Later"; 
} 
$username =  $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM profiledata WHERE user= '$username' & password= '$password' ";
$result = mysqli_query($con,$sql);
$dat = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);
if($row==1){
?>
    
    
<body background=back.png>
    <center>
        <font face="caviar dreams" size="6" color="silver">Reb</font><font face="caviar dreams" size="7" color="sky blue">oo</font><font face="caviar dreams" size="6" color="silver">t</font>
        <br><br><br><br><br><br>
    <div class="profilepic"><br><img src=user.png height="70px" width="70px"><br><br><br><font face="caviar dreams" size="6" color="#464646"><?php echo $dat['user']; ?></font></div>
        <br><br><font face="caviar dreams" size="7" color="#ed3737"><?php echo $dat['name'];?></font>&nbsp;&nbsp;<img src="tick.png"><br><br><br>
        <div class="card"><br><br><b>
            <font face="century gothic" size="4" color="#535252" align="left">Working at <?php echo $dat['school']; ?></font><br>
            <font face="century gothic" size="4" color="#535252" align="left"><?php echo $dat['experienceyr']; ?> Years of experience</font><br>
            <font face="century gothic" size="4" color="#535252" align="left">Teaches <?php echo $dat['subject']; ?></font><br><br><br></b>
            <font face="century gothic" size="4" color="#535252" align="center">
            <?php echo $dat['bio']; ?>
            </font>
            
        </div><br><br>
        
        <div class="cardbutton1"><br> <font face="century gothic" size="6" color="#535252">NOTES</font><br><br><br>
        <a href="note.html"> <div class="inbtn"><font face="century gothic" size="4" color="#535252" style="text-decoration:none"><br>Download</font></div></a>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="cardbutton2"><br> <font face="century gothic" size="6" color="#535252">QWESTION PAPERS</font><br><br><br><div class="inbtn"><font face="century gothic" size="4" color="#535252"><br>Download</font></div></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="cardbutton3"><br> <font face="century gothic" size="6" color="#535252" >TIPS & TRICKS</font><br><br><br><div class="inbtn"><font face="century gothic" size="4" color="#535252"><br>Download</font></div></div>
        
        
    
    </center>

   
   
<?php
} else {
     header('Refresh:0; url=query.html');
      echo "<html><head><script>alert('No record Found');</script></head></html>";
}



?>







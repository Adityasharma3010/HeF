<?php
include "SACNRMonitor.php";
$server = new SACNRMonitor();
$info = $server->get_players_by_ip('185.143.240.161', '7777');
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<link rel="shortcut icon" href="favicon.ico">
<head>
<script type='text/javascript' src='http://seegaming.com/web/api/461/'></script>
	<meta charset="utf-8">
	<title>Havoc Evolution Freeroam</title>
	<meta name="description" content="Havoc">
	<meta name="author" content="raajgaming">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/style.css">



<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<br>
<br>
<br>
<center><img src="images/bgg.png"></center>
<div id="container"> 
      <div class="top">
	    <div class="logo"></div>
          <div class="menu">

 <ul id="mainmenu">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="http://www.havocsamp.tk/forum/">Forum</a></li>
              <li><a href="server.html">Server</a></li>
              

                       <li><a href="irc.html">IRC</a></li>
              <li><a href="donation.html">Donation</a></li>
            </ul>
          </div>
     </div>
   <div class="header">
     <h2>Havoc Evolution Freeroam Players Lists</h2>
	<p class="header-bot">Have some fun!</p>
   </div>
   <div class="header-bottom">
    <div class="col-md-1">
	 <ul class="index">
	  <li><b>IP : 185.143.240.161:7777 </b> </li>
         <li><b>Players:</b>  <script type='text/javascript'>document.write(api.players +' / '+ api.maxplayers);</script><br/></li>
	  
<li><b>IRC:</b> HeF.chatz</li>
	  </ul>
	</div>
   </div>
  <div class="wrapper">


<br>
<br>
<center>
<h2 size="100" style="text-align: center;"><span style="color: #33cccc;">Players List</span></h1></center>

<div class="table-responsive">
       					<table class="table">
                   <thread>             
                                    <tr>
						<th><font color="#FF0000">PLAYER ID</font></th>
							<th><font color="#0000FF">NICKNAME</font></th>
							<th><font color="#008000">SCORE</font></th>
							<th><font color="#FF4500">PING</font></th>
                                   </tr>
		</thead>
                 <tbody>
 <tr>				
<?php
 						foreach($info as $number)
						{
							echo "<tr><td>".$number['PlayerID']."</td>";
							echo "<td>".$number['Nickname']."</td>";
							echo "<td>".$number['Score']."</td>";
							echo "<td>".$number['Ping']."</td></tr>";
						}
						?>
</tbody>		
			</table>
        </div>

        <!-- /Directions -->
    
	<script type='text/javascript' src='//seegaming.com/web/api/461/'></script>

                        <center>
	<h5><a><b>Players Online:</b>  <script type='text/javascript'>document.write(api.players +' / '+ api.maxplayers);</script> players<br/></a></center></h5>
             
 


	<div class="clear"></div>

</div>	

<div class="footer">
 <div class="footer-wrapper">
  <div class="footer-wrapper-left">
   <div class="footer-logo"></div>
    <p><b>Havoc Evolution Freeroam</b></p>
    <p>Hello Community members,Welcome to HEF.What u are waiting for just register in our forum and play hard in our server!</p>
   </div>
     <div class="footer-wrapper-right">
      <div class="footer-nav-top">
	   <h2>Owners</h2>
       <ul>
	   	<li>XooMer</li>
	   	<li>Aditiya_adi</li>
	   	<li>RAAJGAMING</li>
	   	<li>Dragonite</li>
	   	<li>Stuart</li>
	   </ul>
      </div>
	  <div class="footer-nav-richest">
	   <h2>Contact Us</h2>
       <ul>
	   	<li>Email : hefserverdev@gmail.com</li>
	   	<li>Web : <a href="http://havocsamp.tk/">http://havocsamp.tk/</a></li>
	   		   </ul>
      </div>
	  <div class="footer-nav-links">
	   <h2>Links</h2>
       <ul>
	   	<li><a href="index.html">Home</a></li>
	   	<li><a href="http://www.havocsamp.tk/forum/">Forum</a></li>
	   	<li><a href="irc.html">IRC</a></li>
	   	<li><a href="donation.html">Donation</a></li>
	   	</ul>
      </div>
     </div>
   </div>
  </div>
 <div class="footer-bottom">
   <p>&copy;HeF Community 2017</p>
   <p class="right">Designer<a href="http://www.havocsamp.tk/forum/index.php?/profile/2-raajgaming/">RAAJGAMING</a></p>
 </div>
</div>
</body>
</html>




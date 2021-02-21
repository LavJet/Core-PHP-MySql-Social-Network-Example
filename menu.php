<?php
$myid=$_GET['myid'];
echo("<body bgcolor=\"lightblue\">");
echo("<style type=\"text/css\">");
echo("{");
    echo("display: inline;");
    echo("position: inherit !important;"); 
    echo("float: left;");
    echo("min-height: 1px;");
echo("}");

echo("centernav {");
  echo("width: 50%;");
  echo("margin-left: auto ;");
  echo("margin-right: auto ;");
echo("}");
echo("#dropnav"); 
echo("{height:4%; background:lightblue;}");

echo("#dropnav ul");
echo("{margin:10px; padding:0px;}");

echo("#dropnav ul li");
echo("{display:inline; float:left; list-style:none; margin-left:10px; position:relative; height:30px; width: 150px;}");

echo("#dropnav li a");
echo("{color:black; text-decoration:none;}");

echo("#dropnav li a:hover");
echo("{color:rgb(47,220,16); text-decoration:none; font-weight: bold; font-size: 18;}");

echo("#dropnav li ul");
echo("{margin:0px; padding:0px; display:none; position:absolute; left:0px; z-index: 99; top:25px; background-color:rgb(209,251,202);}");

echo("#dropnav li:hover ul");
echo("{display:block; width:150px;}");

echo("#dropnav li li");
echo("{list-style:none; display:list-item;}");

echo("#dropnav li li a");
echo("{color:black; text-decoration:none;}");

echo("#dropnav li li a:hover");
echo("{color:pink; text-decoration:none;}");

echo("li#main  {padding-top: 2px;}");

echo("</style>");
echo("<frameset 25%,75%>");
	echo("<frame src=\"Adds.html\"></frame>");
	
	
echo("</frameset>");
echo("<div id=\"centernav\">");
    echo("<div id=\"dropnav\">");
        echo("<ul>");
            echo("<li id=\"main\">");
            echo("<a href=\"#\"><img src=\"pic/menu.png\">Menu</a>");
                echo("<ul id=\"subnav\">");
                      echo("<li><a href=\"AllPosts.php?myid=$myid\" target=display><img src=\"pic/wall.png\" width=25 height=25>Wall</a></li>");
                      echo("<li><a href=\"myprofile.php?myid=$myid\" target=display><img src=\"pic/profile.png\" width=25 height=25>Profile</a></li>");
					  echo("<li><a href=ListBirthDays.php target=display><img src=\"pic/birthday.png\" width=25 height=25>View Birthdays</a></li>");
				echo("</ul>");            
            echo("</li>");

            echo("<li id=\"main\">");
            echo("<a href=\"#\"><img src=\"pic/settings.png\">Setting</a>");
                echo("<ul id=\"subnav\">");
                      echo("<li><a href=changePassword.php?myid=$myid target=display>Change Password</a></li>");
                      echo("<li><a href=\"ChangeBasicInfo.php?myid=$myid\" target=display>Change Basic Info</a></li>");
                echo("</ul>");            
            echo("</li>");
			echo("<li id=\"main\">");
				echo("<a href=\"AboutUs.html\" target=display>About Us</a>");
			echo("</li>");
			echo("<li id=\"main\">");
				echo("<a href=\"logout.php\" target=_TOP>Logout</a>");
            echo("</li>");						
			
        echo("</ul>");    
    echo("</div>");
echo("</div>");
echo("</body>");	
?>



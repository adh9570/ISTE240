<?php
//console.log("here");
$yay = false;
include "240dbConn.php";
//var_dump($conn);

if ($conn){
    //var_dump($_GET['name']);
    //var_dump($_GET['comment']);
    //var_dump($_GET['email']);
    
	if(!empty($_GET['name']) && !empty($_GET['comment']) && !empty($_GET['email'])){
        
        //echo"here";
		$stmt = $conn->prepare("insert into questions (name,email,comment) values (?,?,?)");
		$stmt->bind_param("sss",$_GET['name'],$_GET['email'],$_GET['comment']);

		$stmt->execute();
        
        $stmt->close();
        
        $yay = true;
	}else{
        //echo"<h1>Something has gone wrong contact your System Admin.</h1>";
    }

    

}else{
    echo"<h1>Something has gone wrong contact your System Admin.</h1>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Linux Q&A</title>
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
    <script src='./assets/js/code.js'></script>
</head>
<body id="contain">
    <div id="pagewrap">
        <header>
                <img id='tux' src="./assets/media/tux.png" alt="Picture of Tux">
                <h1>Pragmatic Penguin</h1>
        </header>
        <nav>
                <div class='back' onclick='toggle()'>
                        <div class="square">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    <div>
                    <div id='menu' class='hide'>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Why Linux</a>
                                <ul>
                                    <li><a href="files.html">File System</a></li>
                                    <li><a href="bash.html">How to Bash Shell</a></li>
                                </ul>
                            </li>
                            <li><a href="mint.html">Linux Mint</a></li>
                            <li><a href="#">Linux Features</a>
                                <ul>
                                    <li><a href="customization.html">Customization</a></li>
                                    <li><a href="add-ons.html">Add-Ons</a></li>
                                </ul>
                            </li>
                            <li style="float: right"><a href="#">About Linux</a>
                                <ul>
                                    <li><a href="history.html">History</a></li>
                                    <li><a href="q&a.php">Q & A</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
        </nav>
        <main>
        <?php
                if($yay){
                    echo"<h2>Thank you for your Question.</h2>";
                }
            ?>
            body id="contain">
    <div id="pagewrap">
        <header>
                <div class='mascot'>
                <img class='tux' src="./assets/media/tux.png" alt="Picture of Tux">
                <h1>Pragmatic Penguin</h1>
                </div>
        </header>
        <nav class="fix">
            <div class='back' onclick='toggle()'>
                <div class="square">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            <div>
            <div id='menu' class='hide'>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Why Linux</a>
                        <ul>
                            <li><a href="files.html">File System</a></li>
                            <li><a href="bash.html">How to Bash Shell</a></li>
                        </ul>
                    </li>
                    <li><a href="mint.html">Linux Mint</a></li>
                    <li><a href="#">Linux Features</a>
                        <ul>
                            <li><a href="customization.html">Customization</a></li>
                            <li><a href="add-ons.html">Add-Ons</a></li>
                        </ul>
                    </li>
                    <li style="float: right"><a href="#">About Linux</a>
                        <ul>
                            <li><a href="history.html">History</a></li>
                            <li class="active"><a href="q&a.html">Q & A</a></li>
                            <li><a href="joinUs.php">Join Us!</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="qa">
                <div class="space"> 
                        <br>
                        <h2>Questions?</h2>
                        <hr>
                        <br>                                                
            <p>
                Getting to learn and use a new operating system can be difficult and frustrating at times. It's no easy task for most people! Below you will
                find a list of linux blogs, and websites that you can visit to help further your knowledge beyond the scope of this site, and also
                if you encounter a problem along the way chances are someone else has to, and they published how to fix it. Enjuy your linux adventure!!
            </p>
            <br><br>
            <ol>
                <div class="service">
                <a href= "https://www.tecmint.com/" target="_blank">
                    <img id="leftIMG" src="assets/media/techmint.png" height="200" width="250" alt="TecMint Logo">
                </a>

                <li id="tecMint"> <a href="https://www.tecmint.com/" target="_blank">TecMint: Linux How To and Tutorials</a>
                
                    <p>Tecmint is a great resource to learn about new linux distros, read articles, learn cool tips and learn more about Shell
                    scripting and bashing.
                    </p>

                </li>
            </div>
                <div class="service">
                <a href= "https://www.opendesktop.org/" target="_blank">
                    <img id="rightIMG" src="assets/media/opendesktop.png" height="200" width="250" alt="OpenDesktop Logo">
                </a>
                <br><br>
                <li> <a href="https://www.opendesktop.org/" target="_blank">OpenDesktop</a>
                
                    <p>OpenDesktop is a great place to go if you are looking for themes, fonts, icons, and all the newest stuff to customize 
                        your linux expirience. 
                    </p>

                </li>
            </div>
                <div class="service">
                <a href= "https://www.linux.org/forums/" target="_blank">
                    <img id="leftIMG" src="assets/media/linuxForum.png" height="200" width="250" alt="LinuxForum Logo">
                </a>

                <li> <a href="https://www.linux.org/forums/" target="_blank">LinuxForum</a>
                
                    <p>If you are having a hard time completing the install, trying to update, or just a general question, post it to this
                        forum and the linux community will be out to help you in no time.
                    </p>

                </li>
                <br><br><br>
            </div>
                <div class="service">
                <a href= "https://forums.linuxmint.com/" target="_blank">
                    <img id="rightIMG" src="assets/media/mintLogo.jpg" height="200" width="250" alt="Linux Mint Forum Logo">
                </a>
                <br><br>
                <li> <a href="https://forums.linuxmint.com/" target="_blank">Linux Mint Forum</a>
                
                    <p>If you are having trouble with linux mint, or just need some advicegive this forum a try. It is all about linux mint only!
                    </p>

                </li>
            </div>
            </ol>
            <form action="q&a.php" method="get">
                Name:<input type="text" id ="name" name="name"><br>
                Email:<input type="text" id ="email" name="email"><br>
                <textarea rows="5" cols="50" id = "comment" name="comment">Enter the Question here</textarea><br>
                <input type="submit" value="submit"/>
            </form>
        </main>
        <footer>

        </footer>
    </div>
</body>

</html>
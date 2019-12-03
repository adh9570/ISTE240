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
                                    <li class="active"><a href="q&a.html">Q & A</a></li>
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
            <h1>Questions and Answers</h1>
            <p>Here is a place where you can see some of the most frequently asked questions about Linux and there answers.
                Some of the things nmight be outside the scope of this site therfore we have provided some handy links to external resources.

            </p>
            <ul>
                <li><h2>How can I run EXEs of linux</h2><p>Wine is a program that can be used to run certian .exe files. Other wise linux read alternatives exist. </p></li>
                <li><h2>Cna I run windows and linux at the same time?</h2><p>Yes you can dual boot a system to alow for wWIndows and linux to exist on the same PC.</p></li>
            </ul>
            <h2>Links to external sources</h2>
            <ul>
                <li>www.google.com</li>
                <li>www.google.com</li>
            </ul>
            
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
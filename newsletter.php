<?php
	if(!empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && passMatch()){
		include "../../../240dbConn.php";
		//var_dump($conn);
		$stmt = $conn->prepare("insert into 240login (uname,pass) VALUES (?,?)");

		//var_dump($stmt);
		//var_dump($_POST);
		//var_dump(password_hash($_POST['pass'],PASSWORD_DEFAULT));
		$pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
		$una = $_POST['uname'];
		$stmt->bind_param("ss", $_POST['uname'],$pass );
		
		$stmt -> execute();
		$stmt -> close();
		
		header('location: index.php');

	}else if(!empty($_POST['uname']) && !empty($_POST['pass'])&& empty($_POST['pass2'])&& !passMatch()) {
		echo "<h1>Something wrong</h1>";
	}else{
		echo "<h1>Error </h1>";
	}

	function passMatch(){
		if(strcmp($_POST['pass'],$_POST['pass2'])==0){
			return true;
		}else{
			return false;
		}
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
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
                                    <li><a href="q&a.html">Q & A</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
        </nav>
        <main>
            <h2>Sign up for our FREE montly newsletter!</h2>
            <hr>
            <p>Get monthly updates on up and coming Linux events, along with new technologies.</p>

            <form>
                Name:<input type="text" name="fname" title="Name"><br>
                Email:<input type="text" name="email" title="Email"> <br>
                Create Password:<input type="text" name="pass" title="pass"> <br>
                Re-Enter Password:<input type="text" name="pass2" title="pass2"> <br>
                <br>
                Select any subjects you'd be interested in receiving news of:<br>
                <input type="checkbox" name="subscription" value="events">Linux Events<br>
                <input type="checkbox" name="subscription" value="sysad">System Administration<br>
                <input type="checkbox" name="subscription" value="data">Data Storage<br>
                <input type="checkbox" name="subscription" value="ui">User Interfaces<br>
                <input type="checkbox" name="subscription" value="hardware">Hardware<br>
                <input type="checkbox" name="subscription" value="distros">Distros<br>
                <input type="checkbox" name="subscription" value="programming">Programming<br>
                <input type="checkbox" name="subscription" value="security">Security<br>
                <input type="checkbox" name="subscription" value="shells">Shells and Scripting<br>
                
                <br>
                <button type="button" name="submit">Submit</button>
            </form>
        </main>
</body>

</html>
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
                            <li><a href="q&a.html">Q & A</a></li>
                            <li class="active"><a href="joinUs.php">Join Us!</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            <div class="space">
                <br>
            <h2>Sign up for our FREE montly newsletter!</h2>
            <hr>
            <br>
            <p>Get monthly updates on up and coming Linux events, along with new technologies.</p>
            <form action="./submittedNewsletter.php" method="POST">
                Name:<input type="text" name="fname" title="Name"><br>
                Email:<input type="text" name="email" title="Email"> <br>
                Create Password:<input type="text" name="email" title="Email"> <br>
                Re-Enter Password:<input type="text" name="email" title="Email"> <br>
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
                <input type="submit" name="submit"></input>
            </form>
            </div>
        </main>
        <footer>
        </footer>
    </div>
</body>
</html>
<?php
	$path = './';
	$page = 'Bash';
	include $path.'assets/php/header.php';
?>	
            <main>
                <h2>Shape your Linux 101</h2> <!--Title for the page, needs to standout, did not think a div was needed but feel free to add-->
                <hr>

                <div id="intro"><!--This div will contain a breif description of linux cutomization-->
                    <p>
                        One of the main reasons so many people migrate to a Linux OS(Operating System) is because of the customization 
                        features offered. Don't be antimidated at first! The level of customization for your OS is completley up to you!
                        The rule of thumb is to start of small and work your way up to bigger things! For now we will outline three main areas
                        that you need to know to customze your linux expirecnce. 
                    </p>
                </div><!--Close intro div-->

                <div id="theMeat"><!--This div conatins the actual info for the page-->
                    <ul>
                        <li>Tweak your desktop abilities:</li>
                        <br>
                        <ol>
                            <li>File Manager: You can have a different look for all your files and processes in Linux. Probably, 
                                the most well known look is GNOME. You can always download and install new file looks such as 
                                Midnight commander, or Konqueror. You can even personalize files by using the KDE 
                                Dolphin tool. 
                            </li>
                            <br>
                            <li>
                                Window Manager: Another customization option in Linux is being able to change the placement 
                                and appearance of the windows. You can do this using a window manager such as Compiz, 
                                Metacity, Kwin, and Mutter. 
                            </li>
                            <br>
                            <li>
                                The Dock: You can also change the appearance of your dock if you would like to. You can download 
                                almost any type of dock depending on your needs. You can even get a dock modeled after macOS if 
                                you pleased. 
                            </li>
                            <br>
                            <br>
                        </ol><!--Close the ol in tweak desktop abilities-->

                        <li>Change your Desktop theme:</li>
                        <br>
                        <ol>
                            <li>
                                One of the built in customization options in  Linux is to be able to change the theme of your 
                                desktop. This means that you can change your desktop background and wallpaper. You can change the
                                way the entire desktop looks and feels with many themes available to download and install for free. 
                            </li>
                            <br>
                            <br>
                        </ol><!--Close the ol in change desktop theme-->

                        <li>Install New Icons and Fonts:</li>
                        <br>
                        <ol>
                            <li>
                                There are endless icon packs available for Linux to use. You can choose almost any style icon 
                                you want, from macOS to android style icons. Chances are that the pre-installed icons on your 
                                Linux desktop don’t match up with your selected theme. With this option you can install the 
                                perfect icon theme for you. With the right combination of a new theme, icon style, and fonts, 
                                you can have a new stunning Linux look. 
                            </li>
                        </ol><!--Close the ol in new icons and fonts-->
                    </ul><!--Close the ul containing everything-->
                </div><!--Close the Meat div-->
            </main>
            <?php
            include $path.'assets/php/footer.php';
            ?>
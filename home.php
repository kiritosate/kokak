<?php 
    $s_name = "sql6.freemysqlhosting.net";
    $username = "sql6473242";
    $password = "2GQBJqmYGT";
    $db_nam = "sql6473242";

    $conn = new mysqli($s_name, $username, $password, $db_nam);

    $sql = 'SELECT * FROM member';

    $data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="kokak.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>alpha kokak</title>
</head>
<body>
    
    <img src="kok.png" alt="alpha kokak" id="kokak">
    <iframe src="10.mp3" allow="autoplay" style="display:none" id="iframeAudio">
    </iframe> 
    <audio loop id="aud">
        <source src="kokak1.mp3" type="audio/mpeg">
        <source src="kokak1.ogg" type="audio/ogg">
      Your browser does not support the audio element.
    </audio>
    <div id="menu-list">
        <h3>Kokak Nation<hr></h3>
        <li id="a">
            be a member?
        </li>
        <li id="b">
            terms & policies
        </li>
        <li id="c">
            about
        </li>
    </div>
    
    <button id="menu"><img id="men" src="https://img.icons8.com/material-outlined/48/000000/menu--v1.png"/></button>
    
    <div id="body">
        <h1>
        </h1>
        <strong><h3>Official Members</h3></strong>
        <hr>
        <div class="members">
            <?php 
                while($row = mysqli_fetch_array($data)){
                    echo "<li>
                        <a href='{$row[2]}'>{$row[1]}</a>
                    </li>";
                }
            ?>
    </div>
    
    <i>@2021-2022</i>
    </div>
    
    <img src="1b.gif" id="kokak1" class="dancer">
    <form action="reg.php" method="post" id="register" class="center">
        <span id="closeform">x</span>
        <h3>Join Kokak Nation!</h3>
        <h6>fill in the fields below....</h6><br><br>
        <input type="text" name="username" placeholder="username">
        <input type="text" name="link" placeholder="your profile link">

        <?php
            require_once "reg.php";
            if($result){
                echo "<p>register successful..<br>close this form and refresh the page...<3</p>";
            }
        ?>

        <button type="submit">Join!</button>
    </form>
    <div class="terms center" style="display:none">
        <span id="closeform2">x</span>
        <h3><strong>Terms & Services</strong></h3>
        <p>
        General Terms
        By accessing and placing an order with Alpha kokak, you confirm that you are in agreement with and bound by the terms of service outlined below. These terms apply to the entire website and any email or other type of communication between you and F8 and you are certified pogi/maganda.
        License
        Termify grants you a revocable, non-exclusive, non-transferable, limited license to download, install and use the website strictly in accordance with the terms of this Agreement.

        Definitions and key terms
        To help explain things as clearly as possible in this Terms of Service, every time any of these terms are referenced, are strictly defined as:

        Cookie: small amount of data generated by a website and saved by your web browser. It is used to identify your browser, provide analytics, remember information about you such as your language preference or login information. 
        <strong><br><br>F8: basta mga gwapo/maganda sila
        <br>kokak: tunog ng palaka
        <br>Alpha: leader ng pack
            </strong>
    </p>
    </div>
</body>
    <script src="scripts.js">
    </script>
</html>

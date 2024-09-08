<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<?php
    // Declare an array of programming languages
    $bahasa_pemrograman = ["C++", "Python", "PHP", "C"];
    
    // Set page title
    $page_title = "Home";
    
    include "header.php";

    // Define the function to create the Home section
    function displayHomeSection($name, $bahasa_pemrograman) {
        echo '
        <!-- Home Section (start) -->
        <table id="home" border="1" width="100%" cellpadding="335" cellspacing="0" bgcolor="#4CAF50">
            <tr>
                <td>
                    <table border="0" cellpadding="15" cellspacing="0" width="90%" align="center">
                        <tr>
                            <td align="center" valign="middle">
                                <h4>
                                    <font face="Times New Roman" size="6" color="black">
                                        Hi, I’m ' . $name . ', a dedicated Robotic Engineer with extensive experience in ';
    
        // Loop through the programming languages array and display each language
        foreach ($bahasa_pemrograman as $bahasa) {
            echo $bahasa . ', ';
        }
    
        echo 'vision programming, ROS, and robotic systems. I specialize in programming, developing, and implementing cutting-edge robotic solutions that push the boundaries of technology and innovation.
                                    </font>
                                </h4>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- Home Section (end) -->';
    }
    
    // Call the function to display the Home section
    displayHomeSection('Masdika Aliman', $bahasa_pemrograman);
?>
    

</body>
</html>
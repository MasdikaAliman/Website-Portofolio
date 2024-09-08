<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    



<?php
include "header.php";
// Define variables
$name = $email = $number = $message = "";
$nameErr = $emailErr = $numberErr = $messageErr = "";
$contactList = ["LinkedIn" => "https://id.linkedin.com/", "GitHub" => "https://github.com/MasdikaAliman", "Email" => "https://mail.google.com/mail/"];
$submittedData = ""; // To store the submitted data for display
// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $number = test_input($_POST["number"]);
    $message = test_input($_POST["message"]);

    // Simple validation (checking if fields are not empty)
    if (empty($name)) {
        $nameErr = "Name is required";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Valid email is required";
    }
    if (empty($number)) {
        $numberErr = "Number is required";
    }
    if (empty($message)) {
        $messageErr = "Message is required";
    }

    // After validation, process the form (e.g., save to a database or send an email)
    if (empty($nameErr) && empty($emailErr) && empty($numberErr) && empty($messageErr)) {
        // Code for form processing (e.g., save data, send email, etc.)
        $submittedData = "
                <h3>Form Submitted Successfully</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Number:</strong> $number</p>
                <p><strong>Message:</strong> $message</p>
        ";
    }
}

// Function to sanitize input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- Contact Section (start) -->
<table id="contact" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c2c0c3">
    <tr>
        <td>
            <table border="0" cellpadding="15" cellspacing="0" width="80%" align="center">
                <tr>
                    <td height="180" align="center" valign="middle" colspan="2">
                        <font face="Verdana" size="7" color="black">
                            Contact
                        </font>
                        <hr color="black" width="90">
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <table border="0" width="50%" cellpadding="15" cellspacing="0" align="center" bgcolor="black">
                                <tr>
                                    <td width="30%">
                                        <font face="Verdana" size="4" color="#ffffff">Name</font>
                                    </td>
                                    <td width="70%">
                                        <input type="text" name="name" size="40" value="<?php echo $name; ?>">
                                        <span style="color:red;"><?php echo $nameErr; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <font face="Verdana" size="4" color="#ffffff">Email</font>
                                    </td>
                                    <td width="70%">
                                        <input type="email" name="email" size="40" value="<?php echo $email; ?>">
                                        <span style="color:red;"><?php echo $emailErr; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <font face="Verdana" size="4" color="#ffffff">Number</font>
                                    </td>
                                    <td width="70%">
                                        <input type="number" name="number" size="12" value="<?php echo $number; ?>">
                                        <span style="color:red;"><?php echo $numberErr; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <font face="Verdana" size="4" color="#ffffff">Message</font>
                                    </td>
                                    <td width="70%">
                                        <textarea name="message" rows="5" cols="37"><?php echo $message; ?></textarea>
                                        <span style="color:red;"><?php echo $messageErr; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">&nbsp;</td>
                                    <td width="70%">
                                        <button type="submit">
                                            <font face="Verdana" size="4" color="black"><b>Submit</b></font>
                                        </button>
                                        <hr color="black">
                                        <hr color="black">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;&nbsp;</td>
                </tr>
              
                <tr>
                    <td align = "center">
                    <?php
                    if (!empty($submittedData)) {
                    echo $submittedData;
                    }
                    ?>
                    </td>
                </tr>
          </table>
        </td>
    </tr>
</table>
<!-- Contact Section (end) -->





<!-- Footer Section (start) -->
<table id="footer" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#4CAF50">
    <tr>
        <td>
            <table border="0" cellpadding="15" cellspacing="0" width="90%" align="center">
                <tr>
                    <?php
                    // Loop through $contactList to generate footer links
                    foreach ($contactList as $platform => $link) {
                        echo '<td width="auto" align="center" valign="top">';
                        echo '<b>' . $platform . '</b>';
                        echo '<a href="' . $link . '" style="text-decoration:none"> ➲ </a>';
                        echo '</td>';
                    }
                    ?>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- Footer Section (end) -->


</body>
</html>
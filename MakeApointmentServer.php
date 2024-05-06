<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
    <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
    <div id="all">
        <div id="banner">
            <img src="banner.JPG" alt="Banner Image">
        </div>
        <div id="header">
            <?php include("openpage.php"); ?>
        </div>
        <div id="main_container">
            <div id="left_content">
                <?php
                session_start();
                include("Db_Cconnection.php");

                // Fetching form data
                $phr = $_POST["pickup_hr"];
                $pmn = $_POST["pickup_min"];
                $pMonth = $_POST["PMonth"];
                $pDate = $_POST["PDay"];
                $pYear = $_POST["PYear"];
                $rhr = $_POST["return_hr"];
                $rmn = $_POST["return_min"];
                $reMonth = $_POST["ReMonth"];
                $reDate = $_POST["ReDay"];
                $reYear = $_POST["ReYear"];
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $country = $_POST["country"];

                // Validating form fields
                if (empty($name) || empty($phone) || empty($email) || $country == "SelectCountry" ||
                    $pMonth == "SelectMonth" || $pDate == "SelectDate" || $pYear == "SelectYear" ||
                    $reMonth == "SelectMonth" || $reDate == "SelectDate" || $reYear == "SelectYear") {
                    header("Location: reservation.php?emptyy");
                    exit; // Terminate script after redirection
                }

                $name = trim(preg_replace('/\s+/', ' ', $name));

                if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
                    header("Location: reservation.php?name");
                    exit;
                }

                if (!preg_match("/^[+]{1}[0-9]{3}-[0-9]{3}-[0-9]{6}$/", $phone)) {
                    header("Location: reservation.php?phone");
                    exit;
                }

                $pickup = "$pYear-$pMonth-$pDate $phr:$pmn:00";
                $returndate = "$reYear-$reMonth-$reDate $rhr:$rmn:00";
                $reservationid = "R/$pYear/$name";

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: reservation.php?email");
                    exit;
                }

                if ($pickup > $returndate) {
                    header("Location: reservation.php?unbalanceddate");
                    exit;
                }

                $current = date("Y-m-d");
                if (strtotime($pickup) < strtotime($current)) {
                    header("Location: reservation.php?no");
                    exit;
                }

                mysqli_select_db( $con,"brc");
                $platenumber = $_SESSION['plate_number'];
                $insert = "INSERT INTO reservation (ReservationID, fullname, phone, email, country, pickupdate, returndate, platenumber)
                           VALUES ('$reservationid', '$name', '$phone', '$email', '$country', '$pickup', '$returndate', '$platenumber')";

                $changeStatus = "UPDATE vehicle SET status = 'inactive' WHERE platenumber = '$platenumber'";

                if (!mysqli_query($insert, $con) || !mysqli_query($changeStatus, $con)) {
                    die('Error: ' .  mysqli_error($con));
                } else {
                    $_SESSION['name'] = null;
                    $_SESSION['phone'] = null;
                    $_SESSION['email'] = null;

                    $gatewayURL = 'http://localhost:9333/ozeki?';
                    $request = 'login=admin';
                    $request .= '&password=abc123';
                    $request .= '&action=sendMessage';
                    $request .= '&messageType=SMS:text';
                    $request .= '&recepient=' . urlencode($phone);
                    $request .= '&messageData=' . urlencode("Your reservation id is $reservationid from BRC Car Rental");
                    $url = $gatewayURL . $request;

                    // Open the URL to send the message
                    file($url);

                    echo "<fieldset class=\"loginField\">
                            <table>
                                <tr><td>You are successfully reserved! Your Reservation id is <font color=\"red\">$reservationid</font></td></tr>
                                <tr><td><font color=\"red\">Attention:</font> Do not forget your <font color=\"red\">reservation id</font>. It is necessary during rent, for update reservation and cancel reservation unless we cannot serve you!</td></tr>
                                <tr><td>For more information, you can get this reservation id or confirmation number on your email or mobile.</td></tr>
                            </table>
                        </fieldset>";
                }
                ?>
            </div>
            <div id="right_content">
                <fieldset class="loginField">
                    <table>
                        <tr><td><a href="cancelreservation.php">Cancel Reservation</a></td></tr>
                    </table>
                </fieldset>
                <fieldset class="loginField">
                    <table>
                        <tr><td><a href="updatereservation.php">Update Reservation</a></td></tr>
                    </table>
                </fieldset>
            </div> 
        </div>
        <div id="footer">
            <center><font color="white">CopyRight@BRC Car Rental and Online Reservation</font></center>
        </div>
    </div>
</body>
</html>

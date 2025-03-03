<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $event_title = htmlspecialchars($_POST['product_name']);
//     $event_venue = htmlspecialchars($_POST['event_venue']);
//     $full_address = htmlspecialchars($_POST['full_address']);
//     $city = htmlspecialchars($_POST['city']);
//     $state = htmlspecialchars($_POST['state']);
//     $zip_code = htmlspecialchars($_POST['zip_code']);
//     $country = htmlspecialchars($_POST['country']);

//     echo "<h2>Form Submitted Successfully!</h2>";
//     echo "<p><strong>Event Title:</strong> $event_title</p>";
//     echo "<p><strong>Venue Name:</strong> $event_venue</p>";
//     echo "<p><strong>Address:</strong> $full_address</p>";
//     echo "<p><strong>City:</strong> $city</p>";
//     echo "<p><strong>State:</strong> $state</p>";
//     echo "<p><strong>ZIP Code:</strong> $zip_code</p>";
//     echo "<p><strong>Country:</strong> $country</p>";
// } else {
//     echo "<h2>No Data Submitted</h2>";
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Form Submitted Successfully!</h2>";
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "<h2>No Data Submitted</h2>";
}




?>

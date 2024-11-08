<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = ""; // Use your actual database password
$dbname = "your_database_name"; // Replace with your actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Calculate the date for two days from now
$date = date('Y-m-d', strtotime('+2 days'));
echo "Checking appointments for date: " . $date . "<br>";

// Fetch appointments scheduled for the specified date
$sql = "SELECT name, phone, vaccine_name, date FROM appointments WHERE date = '$date'";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error in SQL query: " . $conn->error . "<br>";
    exit;
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (empty($row['phone'])) {
            echo "No phone number found for " . $row['name'] . "<br>";
            continue;
        }

        // Prepare the SMS message
        $message = "Hello " . $row['name'] . ", this is a reminder for your " . $row['vaccine_name'] . " appointment on " . $row['date'] . ".";

        // Prepare SMS data
        $url = "https://textbelt.com/text";
        $data = [
            'phone' => $row['phone'],  // Phone number from the database
            'message' => $message,      // SMS message
            'key' => 'dce1ab1210a4d2e6c8f55909d38d8ce8344fe69d0eOVFMVtwt6gdeRUkXn2v4S0X'    // Replace with your paid API key
        ];

        // Prepare the HTTP request
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        // Create context for the request
        $context  = stream_context_create($options);
        $smsResponse = file_get_contents($url, false, $context);

        if ($smsResponse === false) {
            echo "Error fetching data from TextBelt API.<br>";
            continue;
        }

        $response = json_decode($smsResponse, true); // Decode the JSON response

        // Check response
        if ($response['success']) {
            echo "SMS sent to " . $row['phone'] . " successfully!<br>";
        } else {
            echo "Failed to send SMS to " . $row['phone'] . ": " . $response['error'] . "<br>";
        }
    }
} else {
    echo "No appointments scheduled for two days from now.<br>";
}

// Close the connection
$conn->close();
?>

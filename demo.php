<!-- <?php
// Step 1: Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "case_study";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Fetch data from the database
$sql = "SELECT * FROM contact_us";
$result = $conn->query($sql);

// Step 3: Write fetched data to a text file
$filename = "data.txt"; // Name of the text file to be created

$file = fopen($filename, "w") or die("Unable to open file!");

// Write column headers
$header = "ID\tName\tEmail\tPhone\tSubject\tMessage\n";
fwrite($file, $header);

// Write data rows
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rowData = $row["id"] . "\t" . $row["name"] . "\t" . $row["email"] . "\t" . $row["phone"] ."\t" . $row["subject"] . "\t" . $row["message"] ."\n";
        fwrite($file, $rowData);
    }
}

fclose($file);

// Step 4: Provide a download link to the user
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
readfile($filename);

// // Delete the file after download (optional)
// unlink($filename);

$conn->close();
?> -->



<?php
// Step 1: Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "case_study";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Fetch data from the database
$sql = "SELECT * FROM contact_us";
$result = $conn->query($sql);

// Create a temporary directory to store files
$tempDir = "temp/";
if (!file_exists($tempDir)) {
    mkdir($tempDir, 0777, true);
}

// Loop through fetched data and create text files
$filenames = array(); // Array to store filenames
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $filename = $tempDir . "data_" . $row['id'] . ".txt";
        $file = fopen($filename, "w");
        fwrite($file, "ID: " . $row['id'] . "\n");
        fwrite($file, "Name: " . $row['name'] . "\n");
        fwrite($file, "Email: " . $row['message'] . "\n");
        fclose($file);
        $filenames[] = $filename; // Add filename to array
    }
}

// Step 3: Create a ZIP archive
$zipFilename = "data.zip";
$zip = new ZipArchive();
if ($zip->open($zipFilename, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    foreach ($filenames as $file) {
        $zip->addFile($file, basename($file));
    }
    $zip->close();
}

// Step 4: Provide a download link to the ZIP file
if (file_exists($zipFilename)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . $zipFilename . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($zipFilename));
    readfile($zipFilename);
}

// Step 5: Cleanup - delete temporary files and directory
foreach ($filenames as $file) {
    unlink($file);
}
rmdir($tempDir);

$conn->close();
?>

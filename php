<?php
$conn = new mysqli("localhost","root","","ghana_data_hub");

$paystack_secret_key = "sk_live_68c04b87895bd851e0d415188daec7e845844ce9";
$sms_api_key = "UkN0SWZIVUZwbGtFeldUd09QWWc";

if($conn->connect_error){
    die("Database Error");
}
?>
<?php
include 'dbConnect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$phone_number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$subject = $_POST['subject'];
$product = $_POST['product'];
$comment = $_POST['comment'];

$msg = '';
if ($fname == '' || $fname == null){
  $msg .= 'firstname';
}
if ($lname == '' || $lname == null){
  if ($msg == '') $msg .= 'lastname';
  else $msg .= ', lastname';
}
if ($dob == '' || $dob == null){
  if ($msg == '') $msg .= 'dob';
  else $msg .= ', dob';
}
if ($phone_number == '' || $phone_number == null){
  if ($msg == '') $msg .= 'phone number';
  else $msg .= ', phone number';
}
if ($email == '' || $email == null){
  if ($msg == '') $msg .= 'email';
  else $msg .= ', email';
}
if ($address == '' || $address == null){
  if ($msg == '') $msg .= 'street address';
  else $msg .= ', street address';
}
if ($city == '' || $city == null){
  if ($msg == '') $msg .= 'city';
  else $msg .= ', city';
}
if ($state == '' || $state == null){
  if ($msg == '') $msg .= 'state';
  else $msg .= ', state';
}
if ($postcode == '' || $postcode == null){
  if ($msg == '') $msg .= 'postcode';
  else $msg .= ', postcode';
}
if ($subject == '' || $subject == null){
  if ($msg == '') $msg .= 'subject';
  else $msg .= ', subject';
}
if ($product == '' || $product == null){
  if ($msg == '') $msg .= 'product';
  else $msg .= ', product';
}
if ($comment == '' || $comment == null){
  if ($msg == '') $msg .= 'comment';
  else $msg .= ', comment';
}

$result = array();
if($msg != ''){
  $result = array(
    'success' => false,
    'message' => $msg . ' must be filled'
  );
}
else{
  $sql = 
    "INSERT INTO enquiry(
        fname, lname, dob, phone_number, email, address, city, state, postcode, subject, product, comment)
    VALUES ('$fname', '$lname', '$dob', '$phone_number', '$email', '$address', '$city', '$state', '$postcode', '$subject', '$product', '$comment')";
  if ($conn->query($sql) === TRUE) {
    $result = array(
      'success' => true,
      'message' => 'Enquiry added successfully'
    );
  } else {
    $result = array(
      'success' => false,
      'message' => 'Enquiry not added'
    );
  }
}
echo json_encode($result);

$conn->close();


?>
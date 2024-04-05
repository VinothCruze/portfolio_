
<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'raaviakash03@gmail.com';

  //if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //  include( $php_email_form );
  //} else {
  //  die( 'Unable to load the "PHP Email Form" Library!');
  //}

  //$contact = new PHP_Email_Form;
  //$contact->ajax = true;
  
  //$contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
  //$contact->from_email = $_POST['email'];
  //$contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  /*$contact->smtp = array(
    'host' => 'raaviakash03@gmail.com',
    'username' => 'raviakash',
    'password' => 'Chinnahulk03@',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'raaviakash03@gmail.com';

  if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
      include($php_email_form);
  } else {
      die('Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  $contact->message = $_POST['message']; // Add message field

  // You can also add additional fields as needed
  // $contact->add_message($_POST['field_name'], 'Field Name: ');

  // Send the email
  if (!$contact->send()) {
      // If the email failed to send
      echo 'Error: ' . $contact->error();
  } else {
      // If the email was sent successfully
      echo 'Your message has been sent successfully.';
  }
?>
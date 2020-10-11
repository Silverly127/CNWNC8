<?php
//set default values
$name = '';
$email = '';
$phone = '';
$message = 'Enter some data and click on the Submit button.';

//process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');

        $name = trim($name);
        $email = trim($email);
        $phone = trim($phone);

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        if (empty($name)) {
            $message = 'Name must be enter.';
            break;
        }
        // 2. display the name with only the first letter capitalized
        $name = strtolower($name);
        $name = ucwords($name);


        $i = strpos($name, ' ');
        if ($i==false) {
            $first_name = $name;
        }
        else {
            $first_name = substr($name, 0 , $i);
        }

        
        

        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        if (empty($email)) {
            $message = 'Email must be enter.';
            break;
        }
        // 2. make sure the email address has at least one @ sign and one dot character
        if (strpos($email, '@') == false || strpos($email, '.') == false) {
            $message = 'Invalid email.';
            break;
        }
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        $phone = str_replace('-', '', $phone);
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace(' ', '', $phone);

        if (strlen($phone) > 7 ) {
            $message = 'The phone must be at least seven digits.';
            break;
        }

        // 2. format the phone number like this 123-4567 or this 123-456-7890
        if ($phone != 7) {
            $phone = substr($phone, 0,3) . '-' . substr($phone, 3);
        }
        else{
            $phone = substr($phone, 0,3) . '-' . substr($phone, 3,3) . '-' . substr($phone, 6);
        }

        /*************************************************
         * Display the validation message
         ************************************************/
        $message = "Hello $first_name,\n\n 
                    Thank you for entering this data:\n\n
                    Name: $name\n
                    Email: $email\n
                    Phone: $phone";

        break;
}
include 'string_tester.php';
?>
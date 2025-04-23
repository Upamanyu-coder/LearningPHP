<!-- 
    <?php
    //echo "Hello, World!";
    // $name = "Yubraj Dhakal Upamanyu";
    // echo "My name is $name .";

    // $firstName = "Yubraj";
    // $lastName = "Dhakal";

    // // Concatenation
    // $fullName = $firstName . " " . $lastName;
    //  echo "My name is $fullName .";
    //  echo "first name is $firstName .";
    //     echo "last name is $lastName .";
    //     echo "full name = $fullName .";

    // function demo() {
    //     static $count = 0;
    //     $count++;
    //     return $count;
        
    // }
    // echo demo() . "<br>";
    // echo demo() . "<br>";
    // echo demo() . "<br>";

    // Program to read and display name and roll number
    
    // Reading values from the form using POST method
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = $_POST['name'];
    //     $roll = $_POST['roll'];
    
    //     // Displaying the entered values
    //     echo "<h3>Your Name: $name</h3>";
    //     echo "<h3>Your Roll Number: $roll</h3>";
    // }
   
    // $text="Hello, World!";

    // echo "Length of string :" .strlen($text). "<br>" ;
    // echo "Uppercase: " .strtoupper($text). "<br>" ;
    // echo "lowercase: " .strtolower($text) ;
    
    ?> -->

<!-- <?php
// Define the numbers
// $a = 10;
// $b = 5;

// Perform calculations
// $sum = $a + $b;
// $difference = $a - $b;
// $product = $a * $b;
// $quotient = $b != 0 ? $a / $b : "Undefined (division by zero)";

// Display the results

// echo "Sum= $sum<br>";
// echo "Difference = $difference<br>";
// echo "Product = $product<br>";
// echo "Quotient = $quotient<br>";
// ?> -->

<!-- <?php
// Program to check if a number is even or odd
// Get the number from the user

// $number = 7;

// if ($number % 2 == 0)
//  {
//     echo "$number is even";
// } 
// else 
// {
//     echo "$number is odd";
// }
// // Program to check if a number is even or odd
?> -->

<!-- <?php
// echo "current date :" . date("Y-m-d") . "<br>" ;
// echo "current time :" . date("h:i:sa") ;
?> -->

<!-- <?php
// $furits = ["Apple", "Banana", "Orange"];
// foreach ($furits as $fruit) {
//     echo $fruit . "<br>";
// }
 ?> -->

 <!-- <?php
    // for ($i = 1; $i <= 10; $i++) 
    // {
    //     echo $i ."<br>";
    // }
 ?> -->

 <!-- <?php
    // function calcutateArea($length, $width)
    //     {
    //         return $length * $width;
    //     }  
    // echo calcutateArea(5,10);
 ?> -->

<!-- <?php
// $filename = "example.txt";
// $content = "This is a sample text file.";

// $file = fopen(filename:$filename, mode:"w");

// if ($file) 
// {
//     fwrite(stream:$file, data:$content);
//     fclose(stream:$file);

//     echo "File created and written successfully.";
// } else {
//     echo "File created and written successfully.";
// }
?> -->

<!-- <?php
// date_default_timezone_set(timezoneId:"Asia/Kathmandu");
// echo date(format:"Y-m-d   h:i:sa");
?> -->

<!-- <?php
//  $student = array(
//     "name" => "Yubraj Dhakal",
//     "age" => 20,
//     "grade" => "Bachelor Fifth Semester"
//  );

//     echo "Name: " . $student["name"] . "<br>";
//     echo "Age: " . $student["age"] . "<br>";
//     echo "Grade: " . $student["grade"] . "<br>";
?> -->

<!-- <?php
// if (isset ($_GET['name']))
// {
//    $name= $_GET['name'];
//    echo "Hello," .$name . "!Welcome to my website.";
// }

// else
// {
//    echo "Hello! Please provide your name in the URL as a query parameter (eg., ?name=john).";
// }

?> -->

<!-- <?php
//    $text = "I have an apple, and she has an apple too.";
//    $text = str_replace("apple", "orange", "$text");
// echo $text;
?> -->

<!-- <?php
// $number = [5,2,9,1,7,0];
// sort($number);
// echo "sorted array : ";
// print_r($number);
?> -->

<!-- <?php
// This part handles form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name  = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']);

//     echo "<h2>Form Submitted Successfully!</h2>";
//     echo "<p><strong>Name:</strong> $name</p>";
//     echo "<p><strong>Email:</strong> $email</p>";
//     echo "<hr>";
// }
// ?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <h2>Submit Your Information</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html> -->


<!-- <?php
// $data= ["name"=> "John", "age"=> 30, "city"=> "London"];
// $jsonstring= json_encode($data);
// echo "JSON string: " . $jsonstring . "<br>";

// $decodedata= json_decode($jsonstring, true);
// echo "Decoded data: <br>";
// print_r($decodedata);
?> -->

<!-- <?php
// $file="example.txt";
// if (file_exists($file))
// {
//     $content= file_get_contents($file);
//     echo "File content: <br>";
//     echo nl2br($content);
// }
// else
// {
//     echo "File does not exist.";
// } 
?>-->

<!-- <?php
   // $cookie_name = "theme";
   // $cookie_value = "dark";
   // $expiry_time = time() + (7*24*60*60); // 1 week

   // setcookie($cookie_name, $cookie_value, $expiry_time, "/"); // "/" means the cookie is available across the entire domain

   // if(isset($_COOKIE[$cookie_name])) {
   //     echo "Cookie '" . $cookie_name . "' is set!<br>";
   //     echo "Value: " . $_COOKIE[$cookie_name];
   // } else {
   //     echo "Cookie '" . $cookie_name . "' is not set or has expired.";
   // }
   ?> -->

   <!-- <?php
   // session_start();
   // $_SESSION['logged-in'] = true;
   // if (isset($_SESSION['logged-in']) && $_SESSION['logged-in'] === true) {
   //     echo "You are logged in!";
   // } else {
   //     echo "You are not logged in.";
   // }
   ?> -->

   <!-- <?php
   // $data1 = "2023-01-01";
   // $data2 = "2023-12-31";

   // $d1 = new DateTime($data1);
   // $d2 = new DateTime($data2);

   // $interval = $d1->diff($d2);
   // echo "The number of days between $data1 and $data2 is " . $interval-> days." days.";

   ?> -->

   <?php
   $text= "apple, banana, orange";
   $array= explode(", ", $text);
   $newstring= implode(" ", $array);
   echo $newstring;
   ?>
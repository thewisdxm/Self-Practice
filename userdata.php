<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
</head>
<body>
    <h2>Account Details</h2>
    <?php
        $name = $_POST['name'];
        $user = $_POST['username'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sex = $_POST['gender'];
        $country = $_POST['country'];

        echo "Name: " , $name , "<br>";
        echo "Username: " , $user , "<br>";
        echo "Date of Birth: " , $dob , "<br>";
        echo "Email: " , $email , "<br>";
        echo "Phone Number: " , $phone , "<br>";
        echo "Gender: " , $sex , "<br>";
        echo "Country: " , $country , "<br>";
           
        $data = array(
            'Name' => $name,
            'Username' => $user,
            'Date of Birth' => $dob,
            'Email Address' => $email,
            'Phone Number' => $phone,
            'Gender' => $sex,
            'Country' => $country,
                    );
        
        // echo implode("<br>" , $data);
        
        $filename = "./userdata.csv";
        $handle = fopen($filename, "a");
            fputcsv ($handle, $data);
        
        fclose ($handle);
    ?>
    
    <form action="Thank you.php" method="get">
        <br><button type="submit">Proceed</button>
    </form>
</body>
</html>
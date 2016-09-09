<?php

DEFINE ('DB_USER','root')
DEFINE ('DB_PSWD','Nesredna22')
DEFINE ('DB_HOST', ':/cloudsql/elbera-handlelisten:guestbook')
DEFINE ('DB_NAME','guestbook')

    echo 'Hello world!';
    
    
    
    
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);



DEFINE
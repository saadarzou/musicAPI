<?php  

// 1. Connection string
// Copy the connection details for your database.
// Details:
// If your database password contains special characters, percent-encode them in the connection string.
// Connection parameters
// host:db.ooevflegxkyjfozbhzql.supabase.co
// port:5432
// database:postgres
// user:postgres
// Code:
// File: Code
// ```
// postgresql://postgres:[YOUR-PASSWORD]@db.ooevflegxkyjfozbhzql.supabase.co:5432/postgres
// ```

// 2. Install Agent Skills (optional)
// Agent Skills give AI coding tools ready-made instructions, scripts, and resources for working with Supabase more accurately and efficiently.
// Code:
// File: Code
// ```
// npx skills add supabase/agent-skills
// ```


$db_server = "db.ooevflegxkyjfozbhzql.supabase.co";
$db_user = "postgres";
$db_pass= "slm!a22H2008";
$db_name = "postgres";
$conn = "";

$conn = mysqli_connect($db_server,$db_user, $db_pass,$db_name);

if($conn){
    echo "si";
} else {
   echo "no";
}



?>
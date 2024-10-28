<?php
session_start();





$con = new mysqli("localhost", "root", "Algo@123", "for_office");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// $response = [];
// Insert operation
if (isset($_REQUEST['department_name'])) {
    $created_by = 'admin';
    $created_date = date('Y-m-d');
    $updated_by = 'rg1';
    $updated_date = date('Y-m-d H:i:s'); // Use Y-m-d H:i:s format

    // Prepare the SQL statement
    $sql = "INSERT INTO for_office.requisition_department_tbl (department_name, created_by, created_date, updated_by, updated_date) 
            VALUES (?, ?, ?, ?,?)";

    // Prepare the statement
    $stmt = $con->prepare($sql);

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param(
            'sssss',
            $_REQUEST['department_name'],
            $created_by,
            $created_date,
            $updated_by,
            $updated_date
        );

        // Execute the statement
        if ($stmt->execute()) {
            $response["success"] = true;
            $response["message"] = 'Entry created successfully';
            $response['inserted_id'] = $stmt->insert_id;
        } else {
            $response['success'] = false;
            $response['message'] = 'Something went wrong, please try again';
            $response['sql_error'] = $stmt->error;
        }

        $stmt->close();
    } else {
        $response['success'] = false;
        $response['message'] = 'Statement preparation failed: ' . $conn->error;
    }
}
echo json_encode($response);


?>
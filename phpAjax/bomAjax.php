<?php
session_start();


// function uploadFile($file)
// {
//     // Specify the target directory for uploads
//     $targetDir = "uploads/";

//     // Create the directory if it doesn't exist
//     if (!is_dir($targetDir)) {
//         mkdir($targetDir, 0755, true);
//     }

//     // Get the file name and target file path
//     $fileName = basename($file['name']);
//     $targetFilePath = $targetDir . $fileName;

//     // Check if the file is an image
//     $check = getimagesize($file['tmp_name']);
//     if ($check === false) {
//         return ["success" => false, "message" => "File is not an image."];
//     }

//     // Check for file size (limit to 5MB in this example)
//     if ($file['size'] > 5000000) {
//         return ["success" => false, "message" => "File is too large. Maximum size is 5MB."];
//     }

//     // Allow certain file formats
//     $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
//     $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
//     if (!in_array($fileType, $allowedTypes)) {
//         return ["success" => false, "message" => "Only JPG, JPEG, PNG, and GIF files are allowed."];
//     }

//     // Attempt to move the uploaded file to the target directory
//     if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
//         return ["success" => true, "message" => "The file has been uploaded.", "fileName" => $fileName];
//     } else {
//         return ["success" => false, "message" => "Sorry, there was an error uploading your file."];
//     }
// }





$con = new mysqli("localhost", "root", "Algo@123", "for_office");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {





if (isset($_POST['createBomHead'])) {


    $created_by = 'admin';
    $created_date = date('Y-m-d');
    $updated_by = 'rg1';
    $updated_date = date('Y-m-d ');
    // $record_no = $_POST['header_id'];
    $department_name = $_POST['department_name'];
   

    $sql = "INSERT INTO for_office.requisition_header_level (`department_name`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES (?, ?, ?, ?, ?)";
               
    $stmt = $con->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssss", $department_name, $created_by, $created_date, $updated_by, $updated_date);

    if ($stmt->execute()) {

        $response['success'] = true;
        $response['message'] = 'Header Data inserted Successfully ';
        $response['requested_data'] = $_POST;
        $response['Record_no'] = $stmt->insert_id;
    } else {
        $response['success'] = false;
        $response['message'] = 'Header Data not inserted';
    }







    $stmt->close();



    echo json_encode($response);

}

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {



if (isset($_POST['bom_creation_form'])) {


    // include('../db.php');
    // include('../dbconnection/db.php');

    $inputs_data = $_POST['inputsData'];
    $requisition_id = $_POST['requisition_id'];




    foreach ($inputs_data as $key => $value) {


        // $user = $_SESSION['username'];
        $user = 'admin';
        $datetime = date('Y-m-d');
        $requisition_type = $value['requisition_type'];
        $so_number = $value['so_number'];
        $item_name = $value['item_name'];
        $item_code = $value['item_code'];
        $quantity = $value['quantity'];
        $user_remarks = $value['user_remarks'];
        $price = $value['price'];
        $date_hand_hover = $value['date_hand_hover'];
        $handover_over_by = $value['handover_over_by'];
        $status = $value['status'];
        $final_remarks = $value['final_remarks'];
       







        $stmt = "INSERT INTO for_office.requisition_line_level (`requisition_id`, `requisition_type`, `so_number`, `item_name`, `item_code`, `quantity` , `user_remarks` , `price`,`created_by`,`created_date`,`date_hand_hover`,`handover_over_by`,`status`,`final_remarks`)VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";


        $stmt = $con->prepare($stmt);

        $stmt->bind_param("ssssssssssssss", $requisition_id, $requisition_type, $so_number, $item_name, $item_code, $quantity, $user_remarks, $price, $datetime,$user,$date_hand_hover,$handover_over_by,$status,$final_remarks);




        if ($stmt->execute()) {


            $response['success'] = true;
        } else {
            $response['success'] = false;
        }







    }







    $response['data'] = $_POST;











    $con->close();





    echo json_encode($response);
}











// }

















?>
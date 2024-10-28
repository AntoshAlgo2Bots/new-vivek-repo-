<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Requisition Department Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css"> -->
</head>

<body>

    <div id="create_section" class="mt-5 bg-gray-100 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold">Create Requisition Department Form</h1>
        <form method="POST" class="w-full border border-gray-500 p-3 rounded-md" id="frmstore"
            enctype="multipart/form-data">
            <div class="flex">
                <div class="flex flex-wrap m-2 gap-10 ">
                    <div>
                        <label for="email"
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">So.No
                            
                        </label>
                        <input id="header_id" type="text" name="header_id" value="" placeholder="Head id" 
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />


                    </div>
                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Department
                            Name :
                        </label>
                        <input type="text" name="department_name" required
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>

                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                            By :
                        </label>
                        <input type="text" name="created_by" onchange="setBomImage()" id="created_by"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                            Date : </label>
                        <input type="text" name="created_date"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>

                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Updated
                            By : </label>
                        <input type="text" name="updated_by"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>


                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Updated
                            Date : </label>
                        <input type="text" name="updated_date"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>
                    

                    <button type="submit"
                        class="w-20  h-10 bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 whitespace-nowrap font-medium text-white  rounded-md  py-2 text-center me-2 mb-2 mt-4  dark:border-blue-500 dark:text-blue-500 hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">
                        Submit</button>
                </div>




                <!-- <div class="flex border-2 flex-wrap m-2 gap-20">

                    <img src="" name="bomMainImg" id="bomMainImg" alt="please uplaod" width="300px">

                </div> -->

            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script>
    $(document).ready(function () {
            $('#frmstore').submit(function (e) {
                e.preventDefault();
                var frmData = $(this).serialize();
                
                $.post("./phpAjax/departmentAjax.php", frmData, function (response) {
                    console.log("This is from success block");
                    console.log(response);
                    
                    
                    if (response.message) {
                        // let s_no = response.inserted_id;

                        // $("#s_no").val(s_no)

                        // console.log(s_no)
                        // alert("Form submitted successfully! Your Record No is " + s_no);
                    } else {
                        alert("Error: " + response.message);
                    }
                },"JSON").fail(function (error) {
                    console.log("This is the error block");
                    console.log(error);
                });
                $('#frmstore')[0].reset(); // Reset form on success
            });
        });

     
</script>
</body>

</html>
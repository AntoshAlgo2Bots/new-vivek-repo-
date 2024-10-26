<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Item Master Form</title>
</head>

<body class="">
    <div id="create_section" class="mt-3 mx-5">
        <h1 class="text-center underline uppercase text-3xl mb-3 font-bold">Item Master</h1>
        <div class=" border border-gray-500 p-5 rounded-md">

            <div class="border border-gray-500 p-5 rounded-md mb-3">
                <div class="flex flex-wrap justify-between">
                    <div>
                        <div>
                            <label
                                class="w-20 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Code :
                            </label>
                            <input type="text" name="item_code"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label
                                class="w-20 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Name :
                            </label>
                            <input type="text" name="item_name"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label
                                class="w-20 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Desc :
                            </label>
                            <input type="text" name="item_description"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label
                                class="w-20 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Organization
                                :
                            </label>
                            <input type="text" name="organization"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div>
                        <div>
                            <label
                                class="w-36 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Category :
                            </label>
                            <input type="text" name="item_category"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label
                                class="w-36 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                sub Category :
                            </label>
                            <input type="text" name="item_sub_category"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div>
                            <label
                                class="w-36 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                sub sub Category :
                            </label>
                            <input type="text" name="item_sub_sub_category"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label
                                class="w-36 inline-block font-bold text-xs font-medium text-gray-900 dark:text-white">Finish
                                / Raw Meterial :
                            </label>
                            <select id="countries" name="finish_raw_material"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-md focus:ring-blue-500 w-44 focus:border-blue-500 pl-3 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose One</option>
                                <option value="Finish Goods">Finish Goods</option>
                                <option value="Raw Material">Raw Material</option>
                            </select>
                        </div>
                    </div>

                    <div class="">
                        <div>
                            <label
                                class="w-28 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Starting Date :
                            </label>
                            <input type="date" name="item_starting_date"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label
                                class="w-28 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Ending Date :
                            </label>
                            <input type="date" name="item_ending_date"
                                class="w-44 rounded-md border text-xs border-gray-500 bg-white py-1 pl-2 text-[#6B7280] h-6 outline-none mb-3 focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="w-28 inline-block font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Status :
                            </label>
                            <select id="countries" name="item_status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-md focus:ring-blue-500 w-44 focus:border-blue-500 pl-3 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 mb-3 dark:focus:border-blue-500">
                                <option selected disabled>Choose One</option>
                                <option value="Finish Goods">Active</option>
                                <option value="Raw Material">Un-Active</option>
                            </select>
                        </div>
                        <div class="flex">
                            <label
                                class="w-28 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Upload
                                Image :
                            </label>
                            <label for="dropzone-file"
                                class="flex flex-col items-center w-44 justify-center h-7 p-2 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 ml-1 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <p class=" text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span>
                                </div>
                                <input id="dropzone-file" type="file" name="image_preview" class="hidden" />
                            </label>
                        </div>
                    </div>

                    <div class="border border-gray-600 w-40 h-36 rounded-md ">
                        <img class="w-40 h-36 rounded-md" src="" alt="image preview">
                    </div>
                </div>
            </div>


            <div class="border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap text-sm font-medium text-center" id="default-styled-tab"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-gray-600 hover:text-gray-600 dark:text-gray-500 dark:hover:text-gray-500 border-gray-600 dark:border-gray-500"
                    data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                    role="tablist">
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-1 px-7 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Purchase Requisition</button>
                    </li>
                    <li class="me-4" role="presentation">
                        <button
                            class="inline-block py-1 px-7 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">Store Issuer</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-1 px-7 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">PO</button>
                    </li>
                </ul>
            </div>



            <div class="hidden p-4 border-x border-b border-gray-600 rounded-b-lg bg-gray-50 dark:bg-gray-800"
                id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                <form class="w-full border border-gray-500 p-3 rounded-md" id="frmstore">
                    <div class="flex flex-wrap m-2 gap-x-20 ">
                        <div>
                            <label for="text"
                                class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Record
                                Number : </label>
                            <input name="record_number" type="text" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />


                        </div>

                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                By : </label>
                            <input type="text" name="created_by" required value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                Date : </label>
                            <input type="date" name="created_date" required value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Department
                                Name : </label>
                            <input type="text" name="department_name" required value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Requisition
                                Type :
                            </label>
                            <input type="text" required name="requisition_type"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />


                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">So.
                                Number : </label>
                            <input type="text" required value="" name="so_number"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="flex flex-wrap m-2 gap-x-20 mt-5">
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Name :
                            </label>
                            <input type="txt" name="item_name" required value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] mb-5 h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Code:
                            </label>
                            <input type="txt" name="item_code" required value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity
                                :
                            </label>
                            <input type="number" name="quantity"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                                Remarks
                                : </label>
                            <input type="txt" name="user_remarks" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Price
                                : </label>
                            <input type="txt" name="price" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Date
                                Hand Hover : </label>
                            <input type="date" name="date_hand_hover" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Handover
                                Over By : </label>
                            <input type="txt" name="handover_over_by" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Status
                                : </label>
                            <input type="txt" name="status" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Final
                                Remarks : </label>
                            <input type="txt" name="final_remarks" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                    </div>
                    <button type="submit" id="result"
                        class="w-24 mt-2 ml-2  bg-blue-500 hover:bg-blue-800 text-xs focus:ring-4 focus:outline-none focus:ring-blue-300 whitespace-nowrap font-medium text-white  rounded-md  py-2 text-center me-2 mb-3  dark:border-blue-500 dark:text-blue-500 hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit
                        Now
                    </button>
                </form>
            </div>

            <div id="default-styled-tab-content">
                <div class="hidden p-4 border-x border-b border-gray-600 rounded-b-lg bg-gray-50 dark:bg-gray-800"
                    id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

                    <form class="w-full border border-gray-500 p-3 rounded-md" id="frmdata">
                        <div class="flex flex-wrap m-2 gap-x-20 ">
                            <div>
                                <label for="text"
                                    class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Record
                                    Number : </label>
                                <input name="record_number" type="text" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />


                            </div>

                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                    By : </label>
                                <input type="text" name="created_by" required value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                    Date : </label>
                                <input type="date" name="created_date" required value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Department
                                    Name : </label>
                                <input type="text" name="department_name" required value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Requisition
                                    Type :
                                </label>
                                <input type="text" required name="requisition_type"
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />


                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Project
                                    Id : </label>
                                <input type="text" required value="" name="project_id"
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="flex flex-wrap m-2 gap-x-20 mt-5">
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                    Name :
                                </label>
                                <input type="txt" name="item_name" required value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] mb-5 h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                    Code:
                                </label>
                                <input type="txt" name="item_code" required value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity
                                    :
                                </label>
                                <input type="number" name="quantity"
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                                    Remarks
                                    : </label>
                                <input type="txt" name="user_remarks" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Price
                                    : </label>
                                <input type="txt" name="price" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Date
                                    Hand Hover : </label>
                                <input type="date" name="date_hand_hover" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Handover
                                    Over By : </label>
                                <input type="txt" name="handover_over_by" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                    Req Status : </label>
                                <input type="txt" name="req_status" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Final
                                    Remarks : </label>
                                <input type="txt" name="final_remarks" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>


                            <!-- <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Po
                                    Status : </label>
                                <input type="txt" name="po_status" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>



                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Po
                                    Number : </label>
                                <input type="number" name="po_number" value=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div> -->

                        </div>
                        <button type="submit" id="res"
                            class="w-24 mt-2 ml-2  bg-blue-500 hover:bg-blue-800 text-xs focus:ring-4 focus:outline-none focus:ring-blue-300 whitespace-nowrap font-medium text-white  rounded-md  py-2 text-center me-2 mb-3  dark:border-blue-500 dark:text-blue-500 hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit
                            Now
                        </button>
                    </form>

                </div>
            </div>





            <div class="hidden p-4 border-x border-b border-gray-600 rounded-b-lg bg-gray-50 dark:bg-gray-800"
                id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

                <form class="w-full border border-gray-500 p-3 rounded-md" id="frmdata">
                    <div class="flex flex-wrap m-2 gap-x-20 mt-5">
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Po
                                Status : </label>
                            <input type="txt" name="po_status" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>



                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Po
                                Number : </label>
                            <input type="number" name="po_number" value=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                    </div>
                    <button type="submit" id="res"
                        class="w-24 mt-2 ml-2  bg-blue-500 hover:bg-blue-800 text-xs focus:ring-4 focus:outline-none focus:ring-blue-300 whitespace-nowrap font-medium text-white  rounded-md  py-2 text-center me-2 mb-3  dark:border-blue-500 dark:text-blue-500 hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit
                        Now
                    </button>
                </form>

            </div>
        </div>
    </div>
    </div>




    <script src="script.js"></script>
</body>

</html>
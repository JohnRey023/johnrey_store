<?php

include 'conn.php';

$fetch = "SELECT * FROM customer";
$sqlfetch = $conn->query($fetch);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer's List</title>
    <link rel="stylesheet" href="css/index.css"/>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
</head>
<body>

 
<div class="header">
    <h1>Customer's List</h1>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg" id="customer_table">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Firstname
                </th>
                <th scope="col" class="px-6 py-3">
                    Lastname
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_array($sqlfetch)){?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $row['customer_id'];?>
                </th>
                <td class="px-6 py-4 text-gray-900">
                    <?php echo $row['email'];?>
                </td>
                <td class="px-6 py-4 text-gray-900">
                    <?php echo $row['firstname'];?>
                </td>
                <td class="px-6 py-4 text-gray-900">
                    <?php echo $row['lastname'];?>
                </td>
                <td class="px-6 py-4 text-gray-900">
                    <?php echo $row['address'];?>
                </td>
                <td class="px-6 py-4 text-gray-900">
                    <?php echo $row['phone'];?>
                </td>
                <td class="px-6 py-4">
                    <a href="update.php?customer_id=<?php echo $row['customer_id']; ?>"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 
                    focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-1.5
                    text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button></a>
                    <a href="delete.php?customer_id=<?php echo $row['customer_id']; ?>"><button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium 
                    rounded-full text-sm px-4 py-1.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button></a>
                </td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
</div>


    

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>
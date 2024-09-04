
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD APPLICATION</title>
     <!--Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 min-h-screen">
<!--Header-->
  <div class="text-4xl text-center font-bold text-gray-700 mt-6 ">PHP Complete CRUD Application</div>
  <!--Table Users-->
  <div class="container mx-auto px-4 py-8">
  <a href="add.php" class="rounded bg-black hover:bg-gray-800 text-white font-bold py-2 px-4">Add User</a>
  <table class="w-full table-auto divide-y divide-gray-200 mt-7">
    <thead>
      <tr>
        <th class="px-6 py-3 bg-gray-70 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">ID</th>
        <th class="px-6 py-3 bg-gray-70 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">FirstName</th>
        <th class="px-6 py-3 bg-gray-70 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">LastName</th>
        <th class="px-6 py-3 bg-gray-70 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Email</th>
        <th class="px-6 py-3 bg-gray-70 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Gender</th>
        <th class="px-6 py-3 bg-gray-70 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Action</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
    <?php
    include "db_conn.php";
    $sql = "SELECT * FROM crud";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Check if there are any rows
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo htmlspecialchars($row['ID']); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo htmlspecialchars($row['FirstName']); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo htmlspecialchars($row['LastName']); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo htmlspecialchars($row['Email']); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo htmlspecialchars($row['Gender']); ?></td>
                    <td>
                    <a href="edit.php?ID=<?php echo $row['ID']; ?>" class="text-sm font-medium text-blue-500 hover:text-blue-600">Edit</a>
                    <a href="deleted.php?ID=<?php echo $row['ID']; ?>" class="text-sm font-medium text-red-500 hover:text-red-600 ml-3" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                    </td>
                </tr>
    <?php
            }
        } else {
    ?>
            <tr>
                <td colspan="6" class="px-6 py-3 text-center text-gray-500">No records available</td>
            </tr>
    <?php
        }
    } else {
        // Query failed
    ?>
        <tr>
            <td colspan="6" class="px-6 py-3 text-center text-red-500">Error fetching data</td>
        </tr>
    <?php
    }
    ?>
</tbody>


  </table>
</div>
</body>
</html>
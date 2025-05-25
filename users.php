<?php

include 'connection/database.php';

// Fetch users from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Users Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            montserrat: ['Montserrat', 'sans-serif'],
          }
        }
      }
    }

    
  </script>
</head>



<body class="bg-gray-100 font-montserrat min-h-screen py-10 px-4">

  <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Assign Points</h1>

    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold text-gray-600">#</th>
            <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold text-gray-600">User ID</th>
            <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold text-gray-600">User Name</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php if (mysqli_num_rows($result) > 0): ?>
            <?php $count = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
              <tr class="hover:bg-blue-50 transition cursor-pointer" onclick="openModal('<?= $row['userName'] ?>', '<?= $row['userId'] ?>')">
                <td class="px-4 py-2 text-xs sm:text-sm text-gray-700"><?= $count ?></td>
                <td class="px-4 py-2 text-xs sm:text-sm text-gray-700"><?= $row['userId'] ?></td>
                <td class="px-4 py-2 text-xs sm:text-sm text-gray-700"><?= $row['userName'] ?></td>
              </tr>
              <?php $count++; ?>
            <?php endwhile; ?>
          <?php else: ?>
            <tr>
              <td colspan="3" class="text-center text-gray-500 py-4">No users found</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <a href="Scoreboard.php" target="_blank" class="inline-block mt-4 text-blue-600 hover:underline">Score Board</a>
  </div>
  <?php include 'modal/assignPoints.php'; ?>
  <script src="scripts/script.js"></script>
</body>
</html>

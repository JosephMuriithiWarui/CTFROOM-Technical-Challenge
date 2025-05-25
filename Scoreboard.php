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
  <title>Scoreboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
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

  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">🏆 Live Scoreboard</h1>
    
     <div class="overflow-x-auto">
      <table class="min-w-full table-auto border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold text-gray-600">#</th>
            <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold text-gray-600">User ID</th>
            <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold text-gray-600">User Name</th>
            <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold text-gray-600">Total Points</th>
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
                <td class="px-4 py-2 text-xs sm:text-sm text-blue-700"><?= $row['Score'] ?></td>
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

    <p class="text-center text-xs text-gray-400 mt-4" id="refreshNote">Auto-refreshing every 30 seconds...</p>
  </div>
<script>
  // Refresh after 30 minutes (30 * 1000 = 30,000 milliseconds)
  setTimeout(() => {
    location.reload();
  }, 30000);
</script>
  

</body>
</html>

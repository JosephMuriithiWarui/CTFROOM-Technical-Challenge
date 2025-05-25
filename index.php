<?php
include 'connection/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judging Systems</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- font -->
  <!-- Montserrat font from Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

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
<body class="h-screen bg-gray-100 font-montserrat">

 <form action="functions/function.php" method="POST">

  <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md mt-6 p-6 flex flex-col  justify-start items-center space-y-4">
    <h1 class="text-3xl font-semibold text-blue-700 text-center mb-6">Judging System</h1>

         
      <div class="flex flex-col items-center space-y-4 border w-3/4 py-12 px-6 mt-12 rounded-xl shadow-md">

      <p class="sm:text-2xl text-lg">Add New Judge</p>

      <?php
      // Fetch the number of existing judges
        $result = $conn->query("SELECT COUNT(*) AS total FROM judges");
        $row = $result->fetch_assoc();
        $count = $row['total'] + 1;

        // Format the ID (e.g., Judge001, Judge002)
        $judgeId = "Jdge" . str_pad($count, 3, '0', STR_PAD_LEFT);
        ?>

     
        <div class="flex flex-col w-full max-w-sm">
          <label for="id" class="mb-1 text-gray-700 text-sm">Judge ID:</label>
          <input type="text" class="w-full border rounded text-xs px-3 py-3" name="id"  value="<?php echo $judgeId; ?>" readonly>
        </div>

        <div class="flex flex-col w-full max-w-sm">
          <label for="username" class="mb-1 text-gray-700">Username:</label>
          <input type="text" name="username" class="border rounded px-3 py-2">
        </div>

        <div class="flex flex-col w-full max-w-sm">
          <label for="password" class="mb-1 text-gray-700">Password:</label>
          <input type="password" name="password" class="border rounded px-3 py-2">
        </div>

        <div class="flex flex-col w-full max-w-sm">        
          <input type="submit" name="submit_judge" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-3 rounded text-sm">
        </div>
     
    </div>
  
    <a href="users.php" target="_blank" class="inline-block mt-4 text-blue-600 hover:underline">Users</a>

  </div>
   </form>
</body>

</html>
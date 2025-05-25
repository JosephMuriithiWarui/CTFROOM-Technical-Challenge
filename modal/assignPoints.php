
  <div id="scoreModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
    <div class="bg-white rounded-lg p-6 w-80">
      <h2 class="text-lg font-bold text-center mb-4">Assign Points</h2>
      <form action="functions/function.php" method="post">
      <!-- Display name -->
      <p id="participantName" class="text-center text-gray-700 mb-2"></p>

      <!-- Hidden input to carry userId or username -->
      <input type="hidden" name="userId" id="userIdInput" />

      <!-- Score input -->
      <input type="number" name="score" min="1" max="100" placeholder="Enter score (1-100)" class="w-full border rounded px-3 py-2 mb-4" id="scoreInput">
      
      <div class="flex justify-end space-x-2">
        <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</button>
        <input type="submit" name="submit_scores" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700" value="Submit">
      </div>
      </form>
    </div>
  </div>


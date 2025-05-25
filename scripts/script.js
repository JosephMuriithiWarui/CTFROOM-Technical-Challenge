
function openModal(userName, userId) {
  document.getElementById('participantName').innerText = "Assigning Score To: " + userName;
  document.getElementById('userIdInput').value = userId;
  document.getElementById('scoreModal').classList.remove('hidden');
  document.getElementById('scoreModal').classList.add('flex');
}


    function closeModal() {
      document.getElementById('scoreModal').classList.add('hidden');
}


   
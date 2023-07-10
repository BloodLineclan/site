document.querySelector('.join-button').addEventListener('click', function() {
  window.location.href = 'https://example.com'; // Замените ссылку на вашу реальную ссылку
});

document.querySelector('.application-button').addEventListener('click', function() {
  document.getElementById('application-form-container').classList.remove('hidden');
});

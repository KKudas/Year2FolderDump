var modal = document.getElementById('simpleModal');
var modalBtn = document.getElementById('modalBtn');

var updateBtn = document.getElementById('updateBtn');
var simpleUpdateModal = document.getElementById('simpleUpdateModal');
var closeBtn = document.getElementById('sub');

updateBtn.addEventListener('click', openUpModal);
modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);

function openUpModal(){
  const contactID = this.getAttribute('updateID');
  document.querySelector('#simpleUpdateModal form').action = `methodPHP/update.php?id=${contactID}`;
  simpleUpdateModal.style.display = 'block';
}

function closeUpModal(){
  simpleUpdateModal.style.display = 'none';
}

function openModal(){
  modal.style.display = 'block';
}

function closeModal() {
  modal.style.display = "none";
}

window.addEventListener("click", function (event) {
  if (event.target === modal) {
      closeModal();
  } else if (event.target === simpleUpdateModal) {
    closeUpModal();
  }
});

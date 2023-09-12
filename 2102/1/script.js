var modal = document.getElementById('simpleModal');
var modalBtn = document.getElementById('modalBtn');
var updateModal = document.getElementById('simpleUpdateModal');

var simpleUpdateModal = document.getElementById('simpleUpdateModal');

modalBtn.addEventListener('click', openModal);

function openUpModal(){
  simpleUpdateModal.style.display = 'block';
}

function openModal(){
  modal.style.display = 'block';
}

window.addEventListener("click", function (event) {
  if (event.target === modal || event.target === updateModal) {
    modal.style.display = "none";
    updateModal.style.display = "none";
  }
});

function updateID(samp){
  updateModal.style.display = "block";
  document.cookie = `updateID?=${samp}`;
  // window.location.href = `update.php?id=${samp}`;
}

function deleteID(samp){
  alert(samp);
}

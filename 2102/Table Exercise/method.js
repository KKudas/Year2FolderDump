// function notify(){
//             alert("working??");
// }

// let samp = document.querySelector('button');
// samp.addEventListener('click', notify);

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  let userList = [];

  let user = {
      firstName : document.getElementByID('fName'),
      lastName: document.getElementById('lName'),
      email: document.getElementById('email'),
      contact: document.getElementById('contactNum')
  };
  
  //Insert input to object
  userList.push(user);

function closeForm() {
    event.preventDefault();
    const input = document.querySelectorAll('#fName, #lName, #email, #contactNum');
    
    // Resets input field
    input.forEach(input => {
        input.value = '';
    });

    document.getElementById("myForm").style.display = "none";
} 



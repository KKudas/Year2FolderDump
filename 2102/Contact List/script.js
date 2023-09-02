var selectedRow = null;

function onFormSubmit() {
    var formData = readFormData();
    if(selectedRow == null){
        insertNewRecord(formData);
    } else {
        updateRecord(formData);
    }
    
    resetForm();
}

function readFormData() {
    var formData = {};
    formData["lname"] = document.getElementById("lname").value;
    formData["fname"] = document.getElementById("fname").value;
    formData["email"] = document.getElementById("email").value;
    formData["contact"] = document.getElementById("contact").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById('contactList').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    cell1 = newRow.insertCell(0); 
    cell1.innerHTML = data.lname;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.fname;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.email;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.contact;
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = `<button  onclick="onEdit(this)">Edit</button>
    <button  onclick="onDelete(this)">Delete</button>`;
}

function resetForm(){
    document.getElementById('lname').value = '';
    document.getElementById('fname').value = '';
    document.getElementById('email').value = '';
    document.getElementById('contact').value = '';
}

function onEdit(td){
    selectedRow = td.parentElement.parentElement;
    document.getElementById('lname').value = selectedRow.cells[0].innerHTML;
    document.getElementById('fname').value = selectedRow.cells[1].innerHTML;
    document.getElementById('email').value = selectedRow.cells[2].innerHTML;
    document.getElementById('contact').value = selectedRow.cells[3].innerHTML;
}

function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.lname;
    selectedRow.cells[1].innerHTML = formData.fname;
    selectedRow.cells[2].innerHTML = formData.email;
    selectedRow.cells[3].innerHTML = formData.contact;
}

function onDelete(td){
    row = td.parentElement.parentElement;
    document.getElementById('contactList').deleteRow(row.rowIndex);
    resetForm();
}
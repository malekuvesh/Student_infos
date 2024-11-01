function update(cardId) {
    document.getElementById("schol").innerText = document.getElementById("filed").value;
    document.getElementById("name").innerText = document.getElementById("student").value;
    document.getElementById("entry").innerText = document.getElementById("Date").value;
    document.getElementById("uvesh").innerText = document.getElementById("seat").value;
    document.getElementById("num").innerText = document.getElementById("roll").value;
    document.getElementById("phone").innerText = document.getElementById("Contact").value;
    document.getElementById("Add").innerText = document.getElementById("Address").value;
    document.getElementById('card2').style.display = 'inline-block';
    document.getElementById('card1').style.display = 'none';

}
function printpages() {
    // alert();
    window.print();
}
function magic(){
    alert("Your Data is Saved Successfully!");
}

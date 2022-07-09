function increase_value(){

document.getElementById("quantity").value++;

}
    
function decrease_value(){

if(document.getElementById("quantity").value > 1) {
    
document.getElementById("quantity").value--;

}
}
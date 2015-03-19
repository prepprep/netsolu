/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function email() {
    var diag = new Dialog();
    diag.URL = "emailForm.html";
    diag.show();
}

function fsubmit(obj) {
    //alert("coming in");
    var contn = document.getElementById("contname");
//    var btn = document.getElementById("btn");
//    var content = document.getElementById("content")
//            alert(contn.value);
    if (contn.value.length === 0) {
        alert("Please enter a name !");

    } else {
        document.getElementById("txtform").submit();
    }
}
window.onload = function () {

}
function filterFunction() {
    var input, filter, tbody, tr, td, a;
    input = document.getElementById("filtro");
    filter = input.value.toUpperCase();
    div = document.getElementById("Tablela_de_funcionarios");
    tr = div.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        if (tr[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}


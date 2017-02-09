

function CalculateOrder() {

    var rows = document.querySelectorAll('tr[class=tableRows]');
    var quantitysOrdered = document.querySelectorAll('input[class=quantityOrdered]');
    var total = 0;
    var str = "<table> <tr> <th>ID</th><th>Item</th><th>Cost per item</th><th>Quantity ordered</th>";

    for (var r = 1; r < rows.length; r++) {
        if(quantitysOrdered[r - 1].value != 0) {
            str = str + "<tr><td>" + rows[r].childNodes[1].textContent + "</td>" +
                            "<td>" + rows[r].childNodes[3].textContent + "</td>" +
                            "<td>" + rows[r].childNodes[5].textContent + "</td>" +
                            "<td>" + quantitysOrdered[r - 1].value         + "</td>" + "</tr>";
            total += quantitysOrdered[r - 1].value * rows[r].childNodes[5].textContent;
        }
    }

    str = str + "</table><p>Total Cost is <strong>$" + total + "</strong></p>";
    document.body.innerHTML = str;
}

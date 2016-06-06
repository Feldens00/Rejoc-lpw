

window.onload = function(){

   /*Declaração das variaveis reponsaveis pelas informações adicionais*/
    var father = document.getElementById("add_product");
    var button_add_cell = document.getElementById("add_product_create");


    var row = create_table_product();
    father.appendChild(row);

    button_add_cell.onclick = function(){

        var row = create_table_product();

        father.appendChild(row);

    }

};

function create_table_product(){

    var row = document.createElement("tr");

    var first_cell  = document.createElement("td");
    var second_cell = document.createElement("td");
    var third_cell  = document.createElement("td");

    var input_name        = document.createElement("input");
    var input_quantity    = document.createElement("input");

    var label_name        = document.createElement("label");
    var label_quantity    = document.createElement("label");

    var link = document.createElement("a");
    var span = document.createElement("span");


    /*Create first cell*/
    input_name.setAttribute("type", "text");
    input_name.setAttribute("name", "name_product[]");
    input_name.setAttribute("class", "form-control");
    input_name.setAttribute("placeholder", "Nome do produto");

    label_name.appendChild(input_name);
    first_cell.appendChild(label_name);
    row.appendChild(first_cell);


    /*Create second cell */
    input_quantity.setAttribute("type", "number");
    input_quantity.setAttribute("name", "quantify[]");
    input_quantity.setAttribute("class", "form-control");
    input_quantity.setAttribute("placeholder", "Quantidade");

    label_quantity.appendChild(input_quantity);
    second_cell.appendChild(label_quantity);
    row.appendChild(second_cell);



    /*Create third cell*/
    link.setAttribute("class","btn btn-primary alinhamento");
    link.setAttribute("style", "float:right;");
    span.setAttribute("class","glyphicon glyphicon-trash");

    link.appendChild(span);
    third_cell.appendChild(link);
    row.appendChild(third_cell);


    link.onclick = function(){
        row.removeChild(first_cell);
        row.removeChild(second_cell);
        row.removeChild(third_cell);
    };


    return row;

}
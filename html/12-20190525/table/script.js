function create(nameOfElement) {
    return document.createElement(nameOfElement);
}
$(document).ready(function () {
    $('#btn').click(function () {
        $.get("https://namcoi.com/projects/users-crud-laravel/public/api/users",
            function (data, textStatus) {
                console.log(data);
                var table = create("table");

                var thead = create("thead");
                table.appendChild(thead);
                var tr = create("tr");
                thead.appendChild(tr);

                var array = ["ID", "Name", "Email"];
                for (var i = 0; i < array.length; i++) {
                    var th = create("th");
                    var id = document.createTextNode(array[i]);
                    th.appendChild(id);
                    tr.appendChild(th);
                }

                var tbody = create("tbody");
                table.appendChild(tbody);

                document.body.appendChild(table);
                for (var i = 0; i < data.users.length; i++) {
                    var tr = create("tr");
                    tbody.appendChild(tr);
                    var array = [
                        data.users[i].id,
                        data.users[i].name,
                        data.users[i].email
                    ];
                    for (var j = 0; j < array.length; j++) {
                        var td = create("td");
                        var textNode = document.createTextNode(array[j]);
                        td.appendChild(textNode);
                        tr.appendChild(td);
                    }
                }
            }

        );
    });
});
function create(nameOfElement) {
  return document.createElement(nameOfElement);
}

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

var data = {
  users: [{
      id: 10,
      name: "Ethyl Medhurst",
      email: "noah.hand@example.org",
      password: "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
      created_at: "2019-03-26 04:55:04",
      updated_at: "2019-03-26 04:55:04"
    },
    {
      id: 9,
      name: "Eula Lebsack PhD",
      email: "schroeder.sylvan@example.org",
      password: "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
      created_at: "2019-03-26 04:55:03",
      updated_at: "2019-03-26 04:55:03"
    },
    {
      id: 8,
      name: "Mrs. Kathlyn Parisian DDS",
      email: "ggrimes@example.net",
      password: "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
      created_at: "2019-03-26 04:55:03",
      updated_at: "2019-03-26 04:55:03"
    }
  ]
};

var str = data.users;
for (var i = 0; i < str.length; i++) {
  var tr = create("tr");
  tbody.appendChild(tr);
  var array = [str[i].id, str[i].name, str[i].email];
  for (var j = 0; j < array.length; j++) {
    var td = create("td");
    var textNode = document.createTextNode(array[j]);
    td.appendChild(textNode);
    tr.appendChild(td);
  }
}
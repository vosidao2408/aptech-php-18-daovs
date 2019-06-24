var data;

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      data = JSON.parse(this.responseText);

      //Bắt đầu từ đây là tạo bảng như bài tập table hôm trước
      function clickme() {
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
      clickme();
    }
  };

  // xhttp.open("GET", "data.json", true);
  xhttp.open(
    "GET",
    "https://namcoi.com/projects/users-crud-laravel/public/api/users",
    true
  );
  xhttp.send();

  //Đoạn này mình clear body rồi tạo 1 button mới để khi click không bị nhân bảng cái tablle lên
  document.body.innerHTML = "";
  var btn = document.createElement("button");
  btn.innerHTML = "Click Me";
  document.body.appendChild(btn);
  btn.addEventListener("click", function() {
    loadDoc();
  });
}

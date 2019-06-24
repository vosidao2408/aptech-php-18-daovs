var doituongNam = {
    name: 'Nam',
    age: 27,
    married: false,
    "name-of-dogs": [
        'phoc', 'cun'
    ],
    tiengKeu: function () {
        return {
            name: 'Heo'
        }
    }
}

var arrayNameofdogs = doituongNam['name-of-dogs'];
for (var i = 0; i < arrayNameofdogs.length; i++) {
    var heading = document.createElement('h1');
    var att = document.createAttribute('style');
    att.value = "color:red";
    heading.setAttributeNode(att);
    var contentOfHeading = document.createTextNode(arrayNameofdogs[i]);
    heading.appendChild(contentOfHeading);
    document.getElementById('noname').appendChild(heading);

}
// var ten = "Vo Si Dao";
// var lop = "Aptech PHP 18";
// var cach = " ";
// var thongbao = ten + cach + lop;
// console.log(thongbao);

//Hoisting
// hienthiKetQua();
// console.log('aaa');

function hienthiKetQua() {
    var a = 5;
    var b = 7;
    console.log(a + b);
}

function showDay() {
    var time = Date();
    console.log(time);
}

function showAll() {
    document.getElementById('demo').innerHTML = "Nothing Here";
    document.getElementById('lop').innerHTML = "PHP 18";
}
function chuyenSlide() {
    if (document.getElementById('img-1').style.display == 'block') {
        document.getElementById('img-1').style.display = 'none';
        document.getElementById('img-2').style.display = 'block';
        //   document.getElementById('img-3').style.display = 'none';
    } else if (
        document.getElementById('img-2').style.display == 'block') {
        //  document.getElementById('img-1').style.display = 'none';
        document.getElementById('img-2').style.display = 'none';
        document.getElementById('img-3').style.display = 'block';
    } else {
        document.getElementById('img-1').style.display = 'block';
        //  document.getElementById('img-2').style.display = 'none';
        document.getElementById('img-3').style.display = 'none';
    }
    setTimeout(chuyenSlide, 2000);
}
setTimeout(chuyenSlide, 2000);
//setInterval(chuyenSlide, 2000);
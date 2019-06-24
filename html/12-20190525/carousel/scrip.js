$('#second').hide();
$('#third').hide();
// $(document).ready(function () {
//     $("#first").click(function (e) {
//         $("#first").hide();
//         $("#second").show();
//     });
//     $("#second").click(function (e) {
//         $("#second").hide();
//         $("#third").show();
//     });
//     $("#third").click(function (e) {
//         $("#third").hide();
//         $("#first").show();
//     });
// });

$(document).ready(function () {
    function slide(id1, id2) {
        $(id1).click(function (e) {
            $(id1).hide();
            $(id2).show("slow");
        });
    }
    slide('#first', '#second');
    slide('#second', '#third');
    slide('#third', '#first');
});
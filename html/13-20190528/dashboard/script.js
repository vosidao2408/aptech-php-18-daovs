var c = document.getElementById("myChart");
var ctx = c.getContext("2d");



var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thurday', 'Friday', 'Saturday'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: '',
            borderColor: 'blue',
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034]
        }]
    },

    // Configuration options go here
    options: {
        elements: {
            line: {
                tension: 0
            }
        }
    }
});
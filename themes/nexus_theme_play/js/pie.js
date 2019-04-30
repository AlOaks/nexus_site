(function($) {

    var nationalities = pie_vars.nationalities_array;

    function getFieldsNum(array, field) {
        var output = [];
        
        for(var i = 0; i < array.length; i++) {
            output.push(parseInt(array[i][field]));
        }
        return output;
    }

    function getFields(array, field) {
        var output = [];
        
        for(var i = 0; i < array.length; i++) {
            output.push(array[i][field]);
        }
        return output;
    }

    var nationsNum = getFieldsNum(nationalities, "nation_percent");
    var nations = getFields(nationalities, "nationality");

    console.log(nationsNum);
    console.log(nations);

    data = {
        labels: nations,
        datasets: [{
            data: nationsNum,
            backgroundColor: [
                'rgba(21, 64, 90, 1)',
                'rgba(221, 51, 51, 1)',
                'rgba(255, 188, 74, 1)',
                'rgba(255, 138, 43, 1)',
                'rgba(221, 51, 51, 10)'
            ],
            borderColor: [
                'rgb(255, 255, 255)'
            ],
            borderWidth: 1,
        }]
    }


    var ctx = $('#chart')[0].getContext('2d');  

    var pieChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {}
    });

    
})( jQuery );
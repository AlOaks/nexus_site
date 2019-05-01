(function($) {


    // FUNCTIONS

    function getFieldsNum(array, field) {
        var output = [];
        
        for(var i = 0; i < array.length; i++) {
            output.push(parseInt(array[i][field]));
        }
        return output;
    }

    function getFields(obj, field) {
        var output = [];
        
        for(var i = 0; i < obj.length; i++) {
            output.push(obj[i][field]);
        }
        return output;
    }


    // NATIONALITIES PIE CHART
    var nationalities = pie_vars.nationalities_array;


    
    if(nationalities) {

        var nationsNum = getFieldsNum(nationalities, "nation_percent");
        var nations = getFields(nationalities, "nationality");

        console.log(nationalities);

        data = {
            labels: nations,
            datasets: [{
                data: nationsNum,
                backgroundColor: [
                    'rgba(21, 64, 90, 1)',
                    'rgba(221, 51, 51, 1)',
                    'rgba(255, 188, 74, 1)',
                    'rgba(255, 138, 43, 1)',
                    'rgba(0, 157, 220, 1)',
                    'rgba(34, 116, 165)'
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
    }


    // SALARIES CHARTS

    var salaries = pie_vars.salary_array;

    function createArray(obj, prop) {
        var output = [];
        
        for(var prop in obj) {
            output.push(obj[prop])
            // var newObj = obj[prop]
        }

        return output;
    }

    var areasNames = getFields(createArray(salaries, "area_name"), "area_name");
    var areasSalaries = getFieldsNum(createArray(salaries, "area_avg_salary"), "area_avg_salary");

    console.log(areasNames);

    var dataSalary = {
        labels: areasNames,
        datasets: [{
            data: areasSalaries,
            backgroundColor: [
                'rgba(21, 64, 90, 1)',
                'rgba(221, 51, 51, 1)',
                'rgba(255, 188, 74, 1)',
                'rgba(255, 138, 43, 1)'
            ],
            borderColor: [
                'rgb(255, 255, 255)'
            ],
            borderWidth: 0,
            label: 'Avg Salary Canada'
        }]
    };

    cty = $('#salary-chart')[0].getContext('2d');

    var salaryChart = new Chart(cty, {
        type: 'horizontalBar',
        data: dataSalary,
        options: {
        }
    });

    

    
})( jQuery );
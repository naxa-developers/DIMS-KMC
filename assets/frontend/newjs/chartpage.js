Highcharts.chart('gbarchart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Household'
    },

    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of Houses'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['ward-1', 24.2],
            ['ward-2', 20.8],
            ['ward-3', 14.9],
            ['ward-4', 13.7],
            ['ward-5', 13.1],
            ['ward-6', 12.7],
            ['ward-7', 12.4],
            ['ward-8', 12.2],
            ['ward-9', 12.0],
            ['ward-10', 11.7],
            ['ward-11', 11.5],
            ['ward-12', 11.2],
            ['ward-13', 11.1],
            ['ward-14', 10.6],
            ['ward-15', 10.6],
            ['ward-16', 10.6],
            ['ward-17', 10.3],
            ['ward-18', 9.8],
            ['ward-19', 9.3],
            ['ward-20', 9.3]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});


Highcharts.chart('stackchart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Type of Housing'
    },
    xAxis: {
        categories: ['ward1', 'ward2', 'ward3', 'ward4', 'ward6', 'ward7', 'ward8', 'ward9', 'ward10',
            'ward11'
        ]
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Houses'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    series: [{
        name: 'Concrete',
        data: [5, 3, 4, 7, 2, 1, 4, 3, 2, 8]
    }, {
        name: 'Traditional',
        data: [2, 2, 3, 2, 1, 2, 3, 6, 7, 8]
    }, {
        name: 'Tent',
        data: [3, 4, 4, 2, 5, 2, 1, 4, 1, 2]
    }]
});


Highcharts.chart('malefemale', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Population by Gender'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['ward1', 'ward2', 'ward3', 'ward4', 'ward5', 'ward6', 'ward7', 'ward8', 'ward9', 'ward10', 'ward11', 'ward12', 'ward13', 'ward14', 'ward15'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Male',
        data: [107, 31, 635, 203, 2, 100, 12, 12, 54, 5, 10, 25, 30, 4, 10]
    }, {
        name: 'female',
        data: [133, 156, 947, 408, 6, 107, 31, 635, 203, 2, 100, 12, 12, 54, 5]
    }]
});



// Make monochrome colors
var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[0],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
    }
    return colors;
}());

// Build the chart
Highcharts.chart('pichart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Land for agriculture'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Share',
        data: [{
                name: 'ward 7',
                y: 61.41
            },
            {
                name: 'ward 8',
                y: 11.84
            },
            {
                name: 'ward 9',
                y: 10.85
            },
            {
                name: 'ward10',
                y: 4.67
            },
            {
                name: 'ward11',
                y: 4.18
            },
            {
                name: 'ward 12',
                y: 7.05
            }
        ]
    }]
});
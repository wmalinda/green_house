"use strict";
$(document).ready(function() {
    //donut
    var datax = [{
        label: "Town 1",
        data: 150,
        color: '#00c0ef'
    }, {
        label: "Town 2 ",
        data: 130,
        color: '#668cff'
    }, {
        label: "Town 3 ",
        data: 190,
        color: '#0fb0c0'
    }, {
        label: "Town 4",
        data: 180,
        color: '#ff8080'
    }, {
        label: "Town 5",
        data: 120,
        color: '#ffb300'
    }];
    $.plot($("#donut"), datax, {
        series: {
            pie: {
                innerRadius: 0.5,
                show: true
            }
        },
        legend: {
            show: false
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s"
        }
    });


    var d1, d2, data, Options;

    d1 = [
        [1262304000000, 100], [1264982400000,560], [1267401600000, 1605], [1270080000000, 1129],
        [1272672000000, 2163], [1275350400000, 1905], [1277942400000, 2002], [1280620800000, 2917],
        [1283299200000, 2700], [1285891200000, 2700], [1288569600000, 2100], [1291161600000, 2700]
    ];

    d2 = [
        [1262304000000, 434], [1264982400000,232], [1267401600000, 875], [1270080000000, 553],
        [1272672000000, 975], [1275350400000, 1379], [1277942400000, 789], [1280620800000, 1026],
        [1283299200000, 1240], [1285891200000, 1892], [1288569600000, 1147], [1291161600000, 2256]
    ];

    data = [{
        label: "Total visitors",
        data: d1,
        color: "#0fb0c0"
    }, {
        label: "Total Sales",
        data: d2,
        color: "#ffb300"
    }];

    Options = {
        xaxis: {
            min: (new Date(2009, 12, 1)).getTime(),
            max: (new Date(2010, 11, 2)).getTime(),
            mode: "time",
            tickSize: [1, "month"],
            monthNames: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
            tickLength: 0
        },
        yaxis: {

        },
        series: {
            lines: {
                show: true,
                fill: false,
                lineWidth: 2
            },
            points: {
                show: true,
                radius: 4.5,
                fill: true,
                fillColor: "#ffffff",
                lineWidth: 2
            }
        },
        grid: {
            hoverable: true,
            clickable: false,
            borderWidth: 0
        },
        legend: {
            container: '#basicFlotLegend',
            show: true
        },

        tooltip: true,
        tooltipOpts: {
            content: '%s: %y'
        }

    };


    var holder = $('#line-chart');

    if (holder.length) {
        $.plot(holder, data, Options );
    }
});


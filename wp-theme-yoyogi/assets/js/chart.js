setInterval(() => {
    if ($(".main").hasClass("p-menu") && $("#chart-container").attr("data-highcharts-chart") == undefined) {

        $(function() {
            Highcharts.setOptions({
                colors: ['#a68b62'],
                chart: {
                    style: {
                        fontFamily: 'sans-serif',
                        color: '#fff'
                    }
                }
            });
            $('#chart-container').highcharts({
                chart: {
                    type: 'column',
                    backgroundColor: 'transparent'
                },
                title: {
                    text: '',
                    style: {
                        color: '#fff'
                    }
                },
                xAxis: {
                    tickWidth: 0,
                    labels: {
                        style: {
                            color: '#fff',
                        }
                    },
                    categories: ['鼻下', 'あご', 'あご下', 'ほほ', '額', 'うなじ']
                },
                yAxis: {
                    gridLineWidth: .5,
                    gridLineDashStyle: 'dash',
                    gridLineColor: 'black',
                    title: {
                        text: '',
                        style: {
                            color: '#a68b62'
                        }
                    },
                    labels: {
                        formatter: function() {
                            return '¥' + Highcharts.numberFormat(this.value, 0, '', ',');
                        },
                        style: {
                            color: '#fff',
                        }
                    }
                },
                legend: {
                    enabled: false,
                },
                credits: {
                    enabled: false
                },
                tooltip: {
                    valuePrefix: '¥'
                },
                plotOptions: {
                    column: {
                        borderRadius: 2,
                        pointPadding: 0,
                        groupPadding: 0.1
                    }
                },
                series: [{
                    name: 'Price',
                    data: [3300, 6270, 8910, 11800, 14850, 17820]
                }]
            });
        });
    } else {
        console.log("cancel")
    }
}, 1000);
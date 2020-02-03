<div class="container">
    <div class="row my-4">
        <div class="col-lg-6 pt-2" style="text-align:center">
            <h4>Gini Rasio September</h4>
        </div>
        <div class="col-lg-6" style="text-align:center">
            <button class="btn btn-theme-1 btn-sm my-2 w-75"><i class="fas fa-download"></i> Download Data</button>
        </div>
        <div class="col-lg-12">
        <div id="chart_div"  style="width: 100%; height: 500px;"></div>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawVisualization);

            function drawVisualization() {
                // Some raw data (not necessarily accurate)
                var data = google.visualization.arrayToDataTable([
                ['Tahun', '2014', '2015', '2016', '2017', '2018'],
                ['Sulut',  165,938,522,998,450],
                ['Sulteng',  165,938,522,998,450],
                ['Sulsel',  165,938,522,998,450],
                ['Sultra',  165,938,522,998,450],
                ['Gorontalo',  165,938,522,998,450],
                ['Sulbar',  165,938,522,998,450],
                ['Maluku',  165,938,522,998,450],
                ['Malut',  165,938,522,998,450],
                ['Papua Barat',  165,938,522,998,450],
                ['Papua',  165,938,522,998,450],
                ['Kalsel',  165,938,522,998,450],
                ['Kalbar',  165,938,522,998,450],
                ['Kalteng',  165,938,522,998,450],
                ['Kaltim',  165,938,522,998,450],
                ['Kaltara',  165,938,522,998,450],
                ]);

                var options = {
                seriesType: 'bars',
                series: {5: {type: 'line'}},
                hAxis: {
                    textStyle: {
                        color: "#000",
                        fontName: "sans-serif",
                        fontSize: 9,
                        bold: true,
                        italic: false
                        }
                    },
                };
                var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
            </script>
        </div>
    </div>
</div>
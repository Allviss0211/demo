<div class="row">

    <div class="col-md-12">

        <div class="box">

            <div class="box-header">

                <h3 class="box-title">

                    Xin chào <?php echo $_SESSION['lgFullname'] ?? "<strong style='color:red'> NotLogin </strong>" ?> <br><br>

                    Chúc một ngày tốt lành

                </h3>

            </div>

            <div id="piechart"></div>

        </div>

    </div>

</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['aloalo', 10],
            ['Eat', 2],
            ['TV', 4],
            ['Gym', 2],
            ['Sleep', 8]
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'My Average Day',
            'width': 550,
            'height': 400
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
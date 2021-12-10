
<!DOCTYPE html>
<html>
<head>
<title>Membuat Grafik Data Dinamis menggunakan PHP dan Chart.js</title>
<style type="text/css">
body {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min"></script>
<script type="text/javascript" src="assets/js/plugins/Chart.min.js"></script>
</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>
    <script>
        $(document).ready(function () {
            showGraph();
        });

        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var nama = [];
                    var remarks = [];

                    for (var i in data) {
                        nama.push(data[i].jenis_perkara);
                        remarks.push(data[i].remarks);
                    }

                    var chartdata = {
                        labels: nama,
                        datasets: [
                            {
                                label: 'Keterangan Siswa',
                                backgroundColor: '#f049ff',
                                borderColor: '#eb46f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: remarks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");
                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
</body>
</html>
<link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">

        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous">
        </script>
<x-app-layout>
    

    <x-slot name="header">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 bg-white border-b border-gray-200 container">
                <div class="d-flex justify-content-evenly">
                    <div class="row ">
                        <div class="col-6">
                                <script type="text/javascript">
                                google.charts.load("current", {packages:["corechart"]});
                                google.charts.setOnLoadCallback(drawChart);
                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['Work',     11],
                                    ['Eat',      2],
                                    ['Commute',  2],
                                    ['Watch TV', 2],
                                    ['Sleep',    7]
                                    ]);

                                    var options = {
                                    title: 'My Daily Activities',
                                    is3D: true,
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                    chart.draw(data, options);
                                }
                                </script>
                                <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                        </div>
                        <div class="col-6">
                            <script type="text/javascript">
                                google.charts.load("current", {packages:["corechart"]});
                                google.charts.setOnLoadCallback(drawChart);
                                function drawChart() {
                                  var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['Work',     11],
                                    ['Eat',      2],
                                    ['Commute',  2],
                                    ['Watch TV', 2],
                                    ['Sleep',    7]
                                  ]);
                          
                                  var options = {
                                    title: 'My Daily Activities',
                                    pieHole: 0.4,
                                  };
                          
                                  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                  chart.draw(data, options);
                                }
                              </script>
                            
                              <div id="donutchart" style="width: 900px; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>

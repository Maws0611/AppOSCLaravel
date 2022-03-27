@extends('layouts.app')

@section('content')

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
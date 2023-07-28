<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOCK STATISTICS</title>
    <style>
        /* Add your existing styles here (styles for .inventoryGraph, .apexcharts, etc.) */

        /* New styles for the container, box, title, and button */
        body {
            background-image: url("{{ asset('image/inventory.jpg') }}");
            background-size: cover; 
            background-position: center center; 
        }

        .inventory-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-size: cover;
            min-height: 100vh;

        }

        .inventory-graph-box {
            background-color: #fff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            padding: 20px;
            margin-bottom: 20px;
            max-width: 600px;
            width: 100%;
        }

        .inventory-title {
            text-align: center;
            margin-bottom: 10px;
        }

        .go-back-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .go-back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="inventory-container">
        <div class="inventory-graph-box">
            <h2 class="inventory-title">STOCK STATISTICS</h2>
            <div id="inventoryGraph"></div>
        </div>
        <button class="go-back-btn" onclick="goBack()">Go Back</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>
    <script src="{{ asset('js/inventoryGraph.js') }}"></script>
    <script>
        var options = {
            chart: {
                type: 'bar',
                height: 350,
            },
            series: [
                {
                    name: 'Entry Quantity',
                    data: [{{ $data->entry_quantity }}],
                },
                {
                    name: 'Output Quantity',
                    data: [{{ $data->output_quantity }}],
                },
            ],
            xaxis: {
                categories: ['Inventory'],
            },
        };

        var chart = new ApexCharts(document.querySelector('#inventoryGraph'), options);
        chart.render();
        // Function to go back (replace it with the appropriate goBack() implementation)
        function goBack() {
            window.history.back();
        }
    </script>
    @endsection
</body>

</html>

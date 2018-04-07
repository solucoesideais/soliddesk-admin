@extends('layout') @section('content')
<!-- home cards -->
<div class="row">
  <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-primary">
      <div class="card-body pb-0">
        <div class="btn-group float-right">
        </div>
        <h4 class="mb-0">40 Empresas</h4>
        <p>xx Empresas bloquedas</p>
      </div>
      <div class="chart-wrapper px-3" style="height:70px;">
        <canvas id="card-chart1" class="chart chartjs-render-monitor" height="87" style="display: block; height: 70px; width: 141px;"
          width="176"></canvas>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-info">
      <div class="card-body pb-0">
        <h4 class="mb-0">200</h4>
        <p>Usuários</p>
      </div>
      <div class="chart-wrapper px-3" style="height:70px;">
        <canvas id="card-chart2" class="chart chartjs-render-monitor" height="87" style="display: block; height: 70px; width: 141px;"
          width="176"></canvas>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-warning">
      <div class="card-body pb-0">
        <div class="btn-group float-right">
        </div>
        <h4 class="mb-0">xx</h4>
        <p>Chamados abertos</p>
      </div>
      <div class="chart-wrapper" style="height:70px;">
        <canvas id="card-chart3" class="chart chartjs-render-monitor" height="87" style="display: block; height: 70px; width: 173px;"
          width="216"></canvas>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-danger">
      <div class="card-body pb-0">
        <div class="btn-group float-right">
        </div>
        <h4 class="mb-0">xx</h4>
        <p>Chamados sem técnico</p>
      </div>
      <div class="chart-wrapper px-3" style="height:70px;">
        <canvas id="card-chart4" class="chart chartjs-render-monitor" height="87" style="display: block; height: 70px; width: 141px;"
          width="176"></canvas>
      </div>
    </div>
  </div>
</div>

<!-- google chart -->
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
      ['Company', 'Tickets', {
        role: 'style'
      }],
      ['JovemPan', 18, '#63c2de'],
      ['Box', 10, '#20a8d8'], // RGB value
      ['Cup', 7, '#6610f2'], // English color name
      ['JovemPan', 18, '#6f42c1'],
      ['Chair', 13, '#e83e8c'], // CSS-style declaration
      ['Box', 10, '#f86c6b'],
      ['Cup', 7, '#f8cb00'],
      ['JovemPan', 18, '#ffc107'],
      ['Box', 10, '#4dbd74'],
      ['Cup', 7, '#20c997'],
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {
      'title': 'Chamados dos últimos 30 dias',
      'height': 460,
      'legend': {
        position: 'none'
      },
      chartArea: {
        left: 80,
        top: 70,
        right: 70,
        bottom: 70
      }
    };

    // Display the chart inside the <div> element with id="columnchart"
    var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
    chart.draw(data, options);
  }
</script>

<!-- home column chart -->
    <div class="card">
      <div class="card-body">
        <div id="columnchart">

        </div>
      </div>
    </div>
@endsection
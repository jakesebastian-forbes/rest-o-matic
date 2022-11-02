<html>
<head>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <style type="text/css">

    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  
</style>
</head>
<body>
  
  <div id="container"></div>
  

  <script>

    anychart.onDocumentReady(function () {
      // variable to help us define screen proportions
      var screenRatio;

      // data for the charts
      var drinksData = anychart.data.set([
        ['Cosmopolitan', 51, 45, 6, 10, 100],
        ['Martini', 67, 39, 28, 9, 55],
        ['Mojito', 19, 11, 8, 8, 250],
        ['Margarita', 47, 33, 14, 9, 110],
        ['Mai Tai', 32, 20, 12, 10, 210],
        ['Beer', 70, 20, 50, 5, 300]
      ]);

      var previousYearsData = anychart.data.set([
        ['2010', 60, 176, 35, 25],
        ['2011', 51, 136, 25, 26],
        ['2012', 73, 196, 35, 38],
        ['2013', 84, 315, 43, 41],
        ['2014', 79, 203, 36, 33],
        ['2015', 89, 286, 41, 48]
      ]);

      // set default using the theme
      var dashboardTheme = {
        chart: {
          margin: 0,
          padding: [15, 30, 15, 15],
          title: {
            enabled: true,
            fontColor: '#212121',
            fontSize: 13,
            padding: [0, 0, 10, 0]
          },
          defaultXAxisSettings: {
            title: {
              enabled: false,
              fontSize: 12,
              margin: 0,
              padding: [3, 0, 0, 0]
            },
            labels: { fontSize: 11, padding: [0, 0, 0, 0] }
          },
          defaultYAxisSettings: {
            title: {
              enabled: true,
              fontSize: 12,
              margin: 0,
              padding: [0, 0, 3, 0]
            },
            labels: { fontSize: 11, padding: [0, 0, 0, 0] }
          }
        }
      };
      // apply the theme
      anychart.theme(dashboardTheme);

      // create stage for all charts
      var stage = acgraph.create('container');

      var title = anychart.standalones.title();
      title.text('New Year Parties at ACME corp.');
      title.container(stage).draw();

      var pieChart = anychart.pie(drinksData);
      pieChart.title('Drinks');
      pieChart.legend().enabled(false);
      pieChart.labels().position('outside').fontSize(10).format('{%x}');
      pieChart.tooltip().format('{%Value} orders');
      pieChart.container(stage).draw();

      var barChart = anychart.bar();
      barChart.title('Drinks by Gender');
      barChart.bar(drinksData.mapAs({ value: 3, x: 0 })).name('Male');
      barChart.bar(drinksData.mapAs({ value: 2, x: 0 })).name('Female');
      barChart.yAxis().title('Drinks ordered');
      barChart.container(stage).draw();

      var scatterChart = anychart.bubble();
      scatterChart.title('Drinks Volumne/Price Ratio');
      scatterChart.bubble(
        drinksData.mapAs({
          value: 4,
          x: 5,
          size: 1,
          name: 0
        })
      );
      scatterChart.tooltip().titleFormat('{%Name}');
      scatterChart
        .tooltip()
        .format('Price: ${%value}\nVolume: {%x} ml.\nOrders: {%size}');
      scatterChart.yScale().minimum(0).maximum(15);
      scatterChart.yAxis().title('Volume (ml)');
      scatterChart.xAxis().title('Price, $');
      scatterChart.container(stage).draw();

      var lineChart = anychart.line(
        previousYearsData.mapAs({ value: 1, x: 0 })
      );
      lineChart.title('Number of drinks by year');
      lineChart.tooltip().format('{%value} drinks');
      lineChart.yAxis().title('Drinks ordered');
      lineChart.container(stage).draw();

      var areaChart = anychart.area(
        previousYearsData.mapAs({ value: 2, x: 0 })
      );
      areaChart.title('Parties Turnout');
      areaChart.tooltip().format('{%value} patrons');
      areaChart.yAxis().title('Turnout');
      areaChart.container(stage).draw();

      var columnChart = anychart.column();
      columnChart.title('Turnout by Gender');
      columnChart.yAxis().title('Turnout');
      columnChart
        .column(previousYearsData.mapAs({ value: 3, x: 0 }))
        .name('Male');
      columnChart
        .column(previousYearsData.mapAs({ value: 4, x: 0 }))
        .name('Female');
      columnChart.yAxis().title('Turnout');
      columnChart.container(stage).draw();

      // chart placement
      function configureChartsSize() {
        if (window.innerWidth > 768) {
          screenRatio = 'wide';
          pieChart.bounds(0, 30, '33.3%', '47%');
          barChart.bounds('33.3%', 30, '33.3%', '47%');
          scatterChart.bounds('66.6%', 30, '33.3%', '47%');
          lineChart.bounds(0, '52%', '33.3%', '47%');
          areaChart.bounds('33.3%', '52%', '33.3%', '47%');
          columnChart.bounds('66.6%', '52%', '33.3%', '47%');
        } else {
          screenRatio = 'slim';
          pieChart.bounds(0, 30, '50%', '33.3%');
          barChart.bounds('50%', 30, '50%', '33.3%');
          scatterChart.bounds(0, '33.3%', '50%', '33.3%');
          lineChart.bounds('50%', '33.3%', '50%', '33.3%');
          areaChart.bounds(0, '66.6%', '50%', '33.3%');
          columnChart.bounds('50%', '66.6%', '50%', '33.3%');
        }
      }

      configureChartsSize();

      // On resize change layout to mobile version or otherwise
      window.onresize = function () {
        if (screenRatio === 'slim' && window.innerWidth > 767) {
          configureChartsSize('wide');
        } else if (window.innerWidth <= 767) {
          configureChartsSize('slim');
        }
        title.parentBounds(0, 0, stage.width(), 130).draw();
      };
    });
  
</script>
</body>
</html>
                
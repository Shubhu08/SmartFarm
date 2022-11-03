 google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var jsonData = $.ajax({
          url: "getData.php?opt=2",
          dataType: "json",
          async: false
          }).responseText;
  
        var data = new google.visualization.DataTable(jsonData);
        
        var options = {
		  colors:['yellow','green','blue','red'],
		  height: 300,
		  legend: {position: 'top', textStyle: {color: 'blue', fontSize: 16}},
		  hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.LineChart(document.getElementById('mixed-chart-smh'));
        chart.draw(data, options);

        var jsonData = $.ajax({
          url: "getData.php?opt=3",
          dataType: "json",
          async: false
          }).responseText;
  
        var data = new google.visualization.DataTable(jsonData);
        
        var options = {
      colors:['blue','red'],
      height: 300,
      legend: {position: 'top', textStyle: {color: 'blue', fontSize: 16}},
      hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.LineChart(document.getElementById('mixed-chart-t'));
        chart.draw(data, options);

        var jsonData = $.ajax({
          url: "getData.php?opt=4",
          dataType: "json",
          async: false
          }).responseText;
  
        var data = new google.visualization.DataTable(jsonData);
        
        var options = {
      colors:['red'],
      height: 300,
      legend: {position: 'top', textStyle: {color: 'blue', fontSize: 16}},
      hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.LineChart(document.getElementById('mixed-chart-s'));
        chart.draw(data, options);
      
      }
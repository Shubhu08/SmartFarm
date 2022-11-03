google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
       var jsonData = $.ajax({
          url: "getData.php?opt=1",
          dataType: "json",
          async: false
          }).responseText;
  
        var data = new google.visualization.DataTable(jsonData);
        
        var table = new google.visualization.Table(document.getElementById('mixed-data-table'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
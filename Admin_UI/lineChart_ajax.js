$(document).ready(function(){
  $.ajax({
    url: "http://localhost/rest-o-matic/Admin_UI/updated_admin_home_json.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var player = [];
      var score = [];

      for(var i in data) {
        player.push("Player " + data[i].playerid);
        score.push(data[i].score);
      }

      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'Player Score',
            borderColor: 'rgba(220, 24, 183, 0.37)',
            backgroundColor: 'rgba(215, 133, 183, 0.37)',
            hoverBackgroundColor: 'rgba(220, 0, 183, 0.45)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#multipleLinesChart1");

      var barGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  })

});









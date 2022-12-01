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
              data: score,
              borderColor:[
                "#ffe4e1",
                "#ffb6c1",
                "#ffc0cb",
                "#f28dcd",
                "#ffc1cc",
              ],
              backgroundColor: [
                "rgba(215, 133, 183, 0.37)",
                "rgba(212, 45, 183, 0.45)",
                "rgba(208, 85, 159, 0.45)",
                "rgba(228, 61, 190, 0.59)",
                "rgba(136, 73, 255, 0.53)",
              ],
              borderWidth: 2,
            },
            
          ]
        };
  
        var ctx = $("#donut3");
  
        var donutGraph = new Chart(ctx, {
          type: 'doughnut',
          data: chartdata
        });
      },
      error: function(data) {
        console.log(data);
      }
    })
  
  });
  
  
//  var ctx = $("$multipleLines-chart1");
//     var data = {
//       label : ["MON","TUE","WED","THURS","FRI","SAT","SUN"],
//       datasets : [{
//         label : "Date",
//         backgroundColor : "blue",
//         borderColor : "Lightblue",
//         fill : false,
//         LineTension : 0,
//         pointRadius : 5
//       },{
//         label : "Year",
//         backgroundColor : "blue",
//         borderColor : "Lightblue",
//         fill : false,
//         LineTension : 0,
//         pointRadius : 5
//       }
        

//       ]
//     };

//   var options = {
    
//   };

//   var chart = new Chart(ctx, {
//     type : 'line',
//     data : {},
//     options : {}
//   })


// // MULTIPLE LINES - V2
// // const ctx = document.getElementById('multipleLines-chart').getContext('2d');

// // const chart = new Chart(ctx, {
// //   type: 'line',
// //   data: {
// //     labels: [
// //       moment(new Date(2020, 2, 1)).format('YYYY-MM-DD'),
// //       moment(new Date(2020, 2, 2)).format('YYYY-MM-DD'),
// //       moment(new Date(2020, 2, 3)).format('YYYY-MM-DD')
// //     ],
// //     datasets: [{
// //         label: '# of Red Votes',
// //         data: [12, 18, 22],
// //         borderWidth: 1,
// //         fill: false,
// //         borderColor: 'red'
// //       },
// //       {
// //         label: '# of Green Votes',
// //         data: [12, 2, 13],
// //         borderWidth: 1,
// //         fill: false,
// //         borderColor: 'green'
// //       }
// //     ]
// //   },
// //   options: {
// //     scales: {
// //       yAxes: [{
// //         ticks: {
// //           beginAtZero: true
// //         }
// //       }]
// //     }
// //   }
// // });


// // BAR CHART
// var ctxB = document.getElementById("chBar").getContext('2d');
// var myBarChart = new Chart(ctxB, {
//   type: 'bar',
//   data: {
//     labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
//     datasets: [{
//       label: '# of Votes',
//       data: [12, 19, 3, 5, 2, 3],
//       backgroundColor: [
//         'rgba(255, 99, 132, 0.2)',
//         'rgba(54, 162, 235, 0.2)',
//         'rgba(255, 206, 86, 0.2)',
//         'rgba(75, 192, 192, 0.2)',
//         'rgba(153, 102, 255, 0.2)',
//         'rgba(255, 159, 64, 0.2)'
//       ],
//       borderColor: [
//         'rgba(255,99,132,1)',
//         'rgba(54, 162, 235, 1)',
//         'rgba(255, 206, 86, 1)',
//         'rgba(75, 192, 192, 1)',
//         'rgba(153, 102, 255, 1)',
//         'rgba(255, 159, 64, 1)'
//       ],
//       borderWidth: 1
//     }]
//   },
//   options: {
//     scales: {
//       yAxes: [{
//         ticks: {
//           beginAtZero: true
//         }
//       }]
//     }
//   }
// });

  
//       var salesTopOptions = {
//         responsive: true,
//         maintainAspectRatio: false,
//           scales: {
//               yAxes: [{
//                   gridLines: {
//                       display: true,
//                       drawBorder: false,
//                       color:"#F0F0F0",
//                       zeroLineColor: '#F0F0F0',
//                   },
//                   ticks: {
//                     beginAtZero: false,
//                     autoSkip: true,
//                     maxTicksLimit: 4,
//                     fontSize: 10,
//                     color:"#6B778C"
//                   }
//               }],
//               xAxes: [{
//                 gridLines: {
//                     display: false,
//                     drawBorder: false,
//                 },
//                 ticks: {
//                   beginAtZero: false,
//                   autoSkip: true,
//                   maxTicksLimit: 7,
//                   fontSize: 10,
//                   color:"#6B778C"
//                 }
//             }],
//           },
//           legend:false,
//           legendCallback: function (chart) {
//             var text = [];
//             text.push('<div class="chartjs-legend"><ul>');
//             for (var i = 0; i < chart.data.datasets.length; i++) {
//               console.log(chart.data.datasets[i]); // see what's inside the obj.
//               text.push('<li>');
//               text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
//               text.push(chart.data.datasets[i].label);
//               text.push('</li>');
//             }
//             text.push('</ul></div>');
//             return text.join("");
//           },
          
//           elements: {
//               line: {
//                   tension: 0.4,
//               }
//           },
//           tooltips: {
//               backgroundColor: 'rgba(31, 59, 179, 1)',
//           }
//       }
//       var salesTop = new Chart(graphGradient, {
//           type: 'line',
//           data: salesTopData,
//           options: salesTopOptions
//       });


//LINE CHART


//   var ctx = document.getElementById("myChart1");
//   var myChart = new Chart(ctx, {
//       type: 'bar',
//       data: {
//       labels: ["CS", "IT" , "ECE" , "EE", "ME", "BE"],
//       datasets: [
//           { label: '# of students',
//           data: [105,124,78,91,62,56],
//           backgroundColor :['rgba(255, 99, 132, 0.2)',
//                   'rgba(54, 162, 235, 0.2)',
//                   'rgba(255, 206, 86, 0.2)',
//                   'rgba(75, 192, 192, 0.2)',
//                   'rgba(153, 102, 255, 0.2)',
//                   'rgba(255, 159, 64, 0.2)'
//   ],
      
//   borderColor: [
//                   'rgba(255,99,132,1)',
//                   'rgba(54, 162, 235, 1)',
//                   'rgba(255, 206, 86, 1)',
//                   'rgba(75, 192, 192, 1)',
//                   'rgba(153, 102, 255, 1)',
//                   'rgba(255, 159, 64, 1)'
//               ],
//   borderWidth : 1
//           }
//       ]
//       },
//       options: {
//           scales: {
//               yAxes: [{
//                   ticks: {
//                       beginAtZero:true
//                   }
//               }]
//           }
//       }
//   });
      
// </script>


// MULTIPLE LINES

      var graphGradient = document.getElementById("multipleLines-chart1").getContext('2d');
      var graphGradient2 = document.getElementById("multipleLines-chart1").getContext('2d');
      var saleGradientBg = graphGradient.createLinearGradient(5, 0, 5, 100);
      saleGradientBg.addColorStop(0, 'rgba(26, 115, 232, 0.18)');
      saleGradientBg.addColorStop(1, 'rgba(26, 115, 232, 0.02)');
      var saleGradientBg2 = graphGradient2.createLinearGradient(100, 0, 50, 150);
      saleGradientBg2.addColorStop(0, 'rgba(0, 208, 255, 0.19)');
      saleGradientBg2.addColorStop(1, 'rgba(0, 208, 255, 0.03)');
      var salesTopData = {
          labels: ["SUN","sun", "MON", "mon", "TUE","tue", "WED", "wed", "THU", "thu", "FRI", "fri", "SAT"],
          datasets: [{
              label: 'This week',
              data: [50, 110, 60, 290, 200, 115, 130, 170, 90, 210, 240, 280, 200],
              backgroundColor: saleGradientBg,
              borderColor: [
                  '#1F3BB3',
              ],
              borderWidth: 1.5,
              fill: true, // 3: no fill
              pointBorderWidth: 1,
              pointRadius: [4, 4, 4, 4, 4,4, 4, 4, 4, 4,4, 4, 4],
              pointHoverRadius: [2, 2, 2, 2, 2,2, 2, 2, 2, 2,2, 2, 2],
              pointBackgroundColor: ['#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)'],
              pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
          },{
            label: 'Last week',
            data: [30, 150, 190, 250, 120, 150, 130, 20, 30, 15, 40, 95, 180],
            backgroundColor: saleGradientBg2,
            borderColor: [
                '#52CDFF',
            ],
            borderWidth: 1.5,
            fill: true, // 3: no fill
            pointBorderWidth: 1,
            pointRadius: [0, 0, 0, 4, 0],
            pointHoverRadius: [0, 0, 0, 2, 0],
            pointBackgroundColor: ['#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)'],
              pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
        }]
      };
  
      var salesTopOptions = {
        responsive: true,
        maintainAspectRatio: false,
          scales: {
              yAxes: [{
                  gridLines: {
                      display: true,
                      drawBorder: false,
                      color:"#F0F0F0",
                      zeroLineColor: '#F0F0F0',
                  },
                  ticks: {
                    beginAtZero: false,
                    autoSkip: true,
                    maxTicksLimit: 4,
                    fontSize: 10,
                    color:"#6B778C"
                  }
              }],
              xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                  beginAtZero: false,
                  autoSkip: true,
                  maxTicksLimit: 7,
                  fontSize: 10,
                  color:"#6B778C"
                }
            }],
          },
          legend:false,
          // legendCallback: function (chart) {
          //   var text = [];
          //   text.push('<div class="chartjs-legend"><ul>');
          //   for (var i = 0; i < chart.data.datasets.length; i++) {
          //     console.log(chart.data.datasets[i]); // see what's inside the obj.
          //     text.push('<li>');
          //     text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
          //     text.push(chart.data.datasets[i].label);
          //     text.push('</li>');
          //   }
          //   text.push('</ul></div>');
          //   return text.join("");
          // },
          
          elements: {
              line: {
                  tension: 0.4,
              }
          },
          tooltips: {
              backgroundColor: 'rgba(31, 59, 179, 1)',
          }
      }
      var salesTop = new Chart(graphGradient, {
          type: 'line',
          data: salesTopData,
          options: salesTopOptions
      });
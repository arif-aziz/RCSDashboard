window.onload = function() {
  var arrRaw = [];
  var chartData;
  var ctx = document.getElementById("distributionLevel").getContext("2d");

  $.getJSON('/chart/show/distributionlevel', '', function( raw ) {
    chartData = {
      labels: ['DLA2', 'DLBSE', 'DLPRIME', 'DLL', 'DLMIFI', 'DLSPGSM', 'DLSPNOW', 'DLSPNOWPLUS'],
      datasets: function(){
                  $.each(raw, function (key, value) {
                    arrRaw.push({type: 'bar',
                                 label: 'Periode '+value.rcsmonth+'/'+value.rcsyear,
                                 data: [parseInt(value.dla2), 
                                        parseInt(value.dlbse), 
                                        parseInt(value.dlprime), 
                                        parseInt(value.dll), 
                                        parseInt(value.dlmifi), 
                                        parseInt(value.dlspgsm), 
                                        parseInt(value.dlspnow), 
                                        parseInt(value.dlspnowplus)],
                                 backgroundColor: value.mthcolor,
                                 borderColor: 'white',
                                 borderWidth: 2});
                  });

                  return arrRaw;
                  //console.log(arrRaw);

                }()
    };

    //console.log(chartData);

    window.myMixedChart = new Chart(ctx, {
      type: "bar",
      data: chartData,
      options: {
        responsive: true,
        title: {
          display: true,
          text: "Progress Low BTS Cluster 1"
        },
        tooltips: {
          mode: "index",
          intersect: true
        },
        annotation: {
          events: ["click"],
          annotations: [
            {
              drawTime: "afterDatasetsDraw",
              id: "hline",
              type: "line",
              mode: "horizontal",
              scaleID: "y-axis-0",
              value: 30,
              borderColor: "red",
              borderWidth: 0.5,
              label: {
                backgroundColor: "red",
                content: "Limit Target",
                enabled: true
              },
              onClick: function(e) {
                // The annotation is is bound to the `this` variable
                console.log("Annotation", e.type, this);
              }
            }
          ]
        }
      }
    });
  });
};

/*var arrRaw = [];

$.getJSON('/report/show/distributionlevel', '', function( raw ) {
  $.each(raw, function (key, value) {
    arrRaw.push({type: 'bar',
                 label: 'Periode '+value.date,
                 data: [parseInt(value.dla2), 
                        parseInt(value.dlbse), 
                        parseInt(value.dlprime), 
                        parseInt(value.dll), 
                        parseInt(value.dlmifi), 
                        parseInt(value.dlspgsm), 
                        parseInt(value.dlspnow), 
                        parseInt(value.dlspnowplus)],
                 backgroundColor: window.chartColors.red,
                 borderColor: 'white',
                 borderWidth: 2});
  });
});

console.log(arrRaw);

var chartData = {
  labels: ['DLA2', 'DLBSE', 'DLPRIME', 'DLL', 'DLMIFI', 'DLSPGSM', 'DLSPNOW', 'DLSPNOWPLUS'],
  datasets: arrRaw
};

console.log(chartData);*/

/*var chartData2 = {
  labels: ['DLA2', 'DLBSE', 'DLPRIME', 'DLL', 'DLMIFI', 'DLSPGSM', 'DLSPNOW', 'DLSPNOWPLUS'],
  datasets: [
    {
      type: "bar",
      label: "Periode 1",
      backgroundColor: window.chartColors.red,
      data: [45,56,65,43,22],
      borderColor: "white",
      borderWidth: 2
    },
    {
      type: "bar",
      label: "Periode 2",
      backgroundColor: window.chartColors.green,
      data: [12,67,56,33,90]
    }
  ]
};

console.log(chartData2);*/

/*window.onload = function() {
  var ctx = document.getElementById("distributionLevel").getContext("2d");
  window.myMixedChart = new Chart(ctx, {
    type: "bar",
    data: chartData,
    options: {
      responsive: true,
      title: {
        display: true,
        text: "Progress Low BTS Cluster 1"
      },
      tooltips: {
        mode: "index",
        intersect: true
      },
      annotation: {
        events: ["click"],
        annotations: [
          {
            drawTime: "afterDatasetsDraw",
            id: "hline",
            type: "line",
            mode: "horizontal",
            scaleID: "y-axis-0",
            value: 5,
            borderColor: "red",
            borderWidth: 0.5,
            label: {
              backgroundColor: "red",
              content: "Test Label",
              enabled: true
            },
            onClick: function(e) {
              // The annotation is is bound to the `this` variable
              console.log("Annotation", e.type, this);
            }
          }
        ]
      }
    }
  });
};*/
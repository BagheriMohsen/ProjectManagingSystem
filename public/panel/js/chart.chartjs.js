$(function(){
  'use strict';

  var ctx1 = document.getElementById('chartBar1').getContext('2d');
  new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ['منشور آفتاب 38', 'محتوای بسته محرم', 'رصد کتب اربعین'],
      datasets: [{
        label: 'درصد',
        data: [82, 39, 57],
         backgroundColor: [
          '#29B0D0',
          '#F07124',
          '#2A516E'
        ]
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: true
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 100
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 8
          }
        }]
      }
    }
  });

});

/* global Chart:false */

$(function () {
  'use strict'
  var salesChartCanvas = $('#lampStatusChart').get(0).getContext('2d') //lamp
  var sensorChartCanvas = $('#sensorStatusChart').get(0).getContext('2d') //sensor

  var minutes = [];
  for(var i = 0; i < 60; i++){
    minutes.push(i); 
  }
//lamp
  var lampChartData = {
    labels: minutes,
    datasets: [
      {
        label: 'Lamp Status',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: lampdat
      }
    ]
  }

  var lampChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }
//sensor
  var sensorChartData = {
    labels: minutes,
    datasets: [
      {
        label: 'Lamp Status',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: sensdat
      }
    ]
  }

  var sensorChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, {
    type: 'line',
    data: lampChartData,
    options: lampChartOptions
  })
  var sensorChart = new Chart(sensorChartCanvas, {
    type: 'line',
    data: sensorChartData,
    options: sensorChartOptions
  })
})

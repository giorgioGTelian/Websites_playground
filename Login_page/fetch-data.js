// Set the interval at which to fetch the data (in milliseconds)
var interval = 5000;

// Function to fetch the data for the first graph
function fetchData1() {
  $.ajax({
    url: 'http://example.com/api/data1',
    dataType: 'json',
    success: function(data) {
      // Plot the data on the first graph using a JavaScript library like D3.js or Highcharts
      plotData1(data);
    }
  });
}

// Function to fetch the data for the second graph
function fetchData2() {
  $.ajax({
    url: 'http://example.com/api/data2',
    dataType: 'json',
    success: function(data) {
      // Plot the data on the second graph using a JavaScript library like D3.js or Highcharts
     

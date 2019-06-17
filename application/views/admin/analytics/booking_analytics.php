<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
?>

<!Doctype html>


<html>

    <head>
        <title>BookingAnalytics</title>
        <?php adminhead();?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <style>

          .input-field input:+label{
              color: rgba(224,224,224 ,1);
          }

          .row .input-field input{
              border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
              box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
          }

          .input-field input:focus + label {
              color: rgba(3,169,244 ,1) !important;
          }

          .row .input-field textarea{
              border-bottom: 0.5px solid rgba(224,224,224 ,1) !important;
              box-shadow: 0 0.5px 0 0 rgba(224,224,224 ,1) !important
          }

          .input-field textarea:focus + label {
              color: rgba(3,169,244 ,1) !important;
          }

          .row .input-field textarea:focus {
              border-bottom: 0.5px solid rgba(3,169,244 ,1) !important;
              box-shadow: 0 0.5px 0 0 rgba(3,169,244 ,1) !important
          }

          .row .input-field input:focus {
              border-bottom: 0.5px solid rgba(3,169,244 ,1) !important;
              box-shadow: 0 0.5px 0 0 rgba(3,169,244 ,1) !important
          }

          .bcenter{
              display: flex;
              justify-content: center;
              width: 100%;
          }

          .content-area{
              height: auto!important;
              min-height: 100%;
          }

          .inner-content{
              margin-top: 2em;
              height: auto!important;
              min-height: 100%!important;
          }

          .myCharts{
              padding:1em!important;
          }
          

          .inchart{
            margin-top: 1em!important;
          }

          .carea{
            padding: 1em!important;
          }

          .hd{
              margin-bottom: 1em!important;
          }

          .select-wrapper input.select-dropdown:focus {
                border: 1px solid rgba(3,169,244 ,1)!important;
            }

            .select-wrapper input.select-dropdown{
                border: 1px solid #eeeeee!important;
                border-radius: 10px!important;
                padding:0.5em!important;
                color: #bdbdbd!important;
            }

            .dropdown-content li>a, .dropdown-content li>span {
                color:rgba(3,169,244 ,1)!important;
            }

            .dropdown-content li {
                color: #eceff1!important;
            }
        </style>
    </head>

    <body>
        <?php navigation();?>
        <section class="content-area">

            <div class="inner-content">
                <div class="row">

                <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h5 class="col s7 grey-text lighten-4">Total Bookings</h5>
                                <div class="col s5">
                                
                                    <select>
                                        <option value="1">Last 3 Days</option>
                                        <option value="1">Last 7 Days</option>
                                        <option value="2">Last 30 Days</option>
                                        <option value="2">Last 3 Months</option>
                                        <option value="2">Last Year</option>
                                        <option value="2">Beginning of Time</option>
                                    </select>
                            
                                </div>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart5" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h5 class="col s7 grey-text lighten-4">Bookings Completed</h5>
                                <div class="col s5">
                                
                                    <select>
                                        <option value="1">Last 3 Days</option>
                                        <option value="1">Last 7 Days</option>
                                        <option value="2">Last 30 Days</option>
                                        <option value="2">Last 3 Months</option>
                                        <option value="2">Last Year</option>
                                        <option value="2">Beginning of Time</option>
                                    </select>
                            
                                </div>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                        <div class="col s12 hd">
                                <h5 class="col s7 grey-text lighten-4">Bookings Cancelled</h5>
                                <div class="col s5">
                                
                                    <select>
                                        <option value="1">Last 3 Days</option>
                                        <option value="1">Last 7 Days</option>
                                        <option value="2">Last 30 Days</option>
                                        <option value="2">Last 3 Months</option>
                                        <option value="2">Last Year</option>
                                        <option value="2">Beginning of Time</option>
                                    </select>
                            
                                </div>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart1" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                        <div class="col s12 hd">
                                <h5 class="col s7 grey-text lighten-4">Booked Tours</h5>
                                <div class="col s5">
                                
                                    <select>
                                        <option value="1">Last 3 Days</option>
                                        <option value="1">Last 7 Days</option>
                                        <option value="2">Last 30 Days</option>
                                        <option value="2">Last 3 Months</option>
                                        <option value="2">Last Year</option>
                                        <option value="2">Beginning of Time</option>
                                    </select>
                            
                                </div>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart3" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                        <div class="col s12 hd">
                                <h5 class="col s7 grey-text lighten-4">Tours In Negotiation</h5>
                                <div class="col s5">
                                
                                    <select>
                                        <option value="1">Last 3 Days</option>
                                        <option value="1">Last 7 Days</option>
                                        <option value="2">Last 30 Days</option>
                                        <option value="2">Last 3 Months</option>
                                        <option value="2">Last Year</option>
                                        <option value="2">Beginning of Time</option>
                                    </select>
                            
                                </div>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart4" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>
                
                </div>
            
            </div>

        </section>


    </body>
    <?php adminjs();?>
    <script>

        $(document).ready(()=>{
            $('select').formSelect();

        });

        var ctx5 = document.getElementById('myChart5').getContext('2d');
        var myDoughnutChart = new Chart(ctx5, {
            type: 'doughnut',
           
            data: data = {
                datasets: [{
                    data: [10, 20, 30],
                    backgroundColor: [
                        '#311b92',
                        '#ff1744',
                        '#2979ff'
                    ]
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'April',
                    'May',
                    'June'
                ],
            },
            options: {}
        });


        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    fill: false,
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {
                
                legend: {
    	            display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: "rgba(150,150,150,0.1)"
                        }   
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false
                        }   
                    }]  
                }
            }
        });

        


        var ctx1 = document.getElementById('myChart1').getContext('2d');
        var chart1 = new Chart(ctx1, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    fill: false,
                    borderColor: 'rgb(255, 99, 132)',
                    data: [40, 11, 55, 79, 31, 66, 70]
                }]
            },

            // Configuration options go here
            options: {

                legend: {
    	            display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display:false
                        }   
                    }]  
                }
            }
        });

        var ctx3 = document.getElementById('myChart3').getContext('2d');
        var chart3 = new Chart(ctx3, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    fill: false,
                    borderColor: 'rgb(255, 99, 132)',
                    data: [40, 11, 55, 79, 31, 66, 70]
                }]
            },

            // Configuration options go here
            options: {

                legend: {
    	            display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display:false
                        }   
                    }]  
                }
            }
        });

        var ctx4 = document.getElementById('myChart4').getContext('2d');
        var chart4 = new Chart(ctx4, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    fill: false,
                    borderColor: 'rgb(255, 99, 132)',
                    data: [40, 11, 55, 79, 31, 66, 70]
                }]
            },

            // Configuration options go here
            options: {

                legend: {
    	            display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display:false
                        }   
                    }]  
                }
            }
        });
    </script>

</html>

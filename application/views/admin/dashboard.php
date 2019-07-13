<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');

    $name = "";

    if($this->ses->has_userdata('first_name') && $this->ses->has_userdata('last_name')){
        $name = $this->ses->userdata('first_name')." ".$this->ses->userdata('last_name');
    }
}


?>

<!Doctype html>


<html>

    <head>
        <title>Dashboard</title>
        <?php adminhead();?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <style>
            

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
                
                <h5 class="grey-text text-lighten-1">Welcome, <?php echo $name == "" ? "Guest" : $name;?></h5>

                <div class="main-details row">
                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h6 class="col s12 grey-text lighten-4 center-align">Total Bookings<br/><br/>Today: 33k</h6>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart5" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h6 class="col s12 grey-text lighten-4 center-align">Total Visitors<br/><br/>Today: 1,200</h6>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h6 class="col s12 grey-text lighten-4 center-align">Total Income<br/><br/>Today: $12,000 JMD</h6>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart1" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h6 class="col s12 grey-text lighten-4 center-align">Booking Conversion<br/><br/>Today: N/A</h6>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart2" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>


                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h6 class="col s12 grey-text lighten-4 center-align">Total Blogs<br/><br/>Today: 44</h6>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart3" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h6 class="col s12 grey-text lighten-4 center-align">Total Users<br/><br/>Today: 77</h6>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart4" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <h6 class="grey-text text-lighten-1">Recent Activities</h6>
                <div class="hr"></div>
                <div class="row">
                        <table class="highlight centered ts white z-depth-1">
                            <thead class=" blue accent-4 white-text">
                                <tr>
                                    <th>Activity</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                </tr>
                                <tr>
                                    <td>Alan</td>
                                    <td>Jellybean</td>
                                    <td>$3.76</td>
                                </tr>
                                <tr>
                                    <td>Jonathan</td>
                                    <td>Lollipop</td>
                                    <td>$7.00</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>

        </section>

        
    </body>

    <?php adminjs();?>
    <script>

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

            var ctx1 = document.getElementById('myChart1').getContext('2d');
            var myDoughnutChart1 = new Chart(ctx1, {
                type: 'doughnut',
            
                data: data = {
                    datasets: [{
                        data: [45, 110, 200],
                        backgroundColor: [
                            '#ef5350',
                            '#4fc3f7',
                            '#ffa000'
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

            var ctx3 = document.getElementById('myChart3').getContext('2d');
            var myDoughnutChart3 = new Chart(ctx3, {
                type: 'doughnut',
            
                data: data = {
                    datasets: [{
                        data: [45, 110, 200],
                        backgroundColor: [
                            '#ef5350',
                            '#4fc3f7',
                            '#ffa000'
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
            

            var ctx4 = document.getElementById('myChart4').getContext('2d');
            var gradientStroke = ctx4.createLinearGradient(500, 0, 100, 0);
            gradientStroke.addColorStop(0, "#ea80fc");
            gradientStroke.addColorStop(1, "#aa00ff");
            var myDoughnutChart4 = new Chart(ctx4, {
                type: 'line',
            
                data: data = {
                    
                    datasets: [{
                        data: [45, 110, 200],
                        backgroundColor: gradientStroke
                    }],

                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: [
                        'April',
                        'May',
                        'June'
                    ],
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: "rgba(0,0,0,0.5)",
                                fontStyle: "bold",
                                beginAtZero: true,
                                maxTicksLimit: 5,
                                padding: 20
                            },
                            gridLines: {
                                drawTicks: false,
                                display: false
                            }

                        }],
                        xAxes: [{
                            gridLines: {
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                padding: 20,
                                fontColor: "rgba(0,0,0,0.5)",
                                fontStyle: "bold"
                            }
                        }]
                    }
                }
            });
            
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['April', 'May', 'June',],
                    datasets: [{
                        data: [110000, 44000, 12200],
                        backgroundColor: [
                            '#d500f9',
                            '#ffa000',
                            '#ff4081'
                        ]
                    }]
                },
                options: {
                    legend:{
                        display:false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                            stacked: true
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                            stacked: true
                        }]
                    }
                }
            });

            var ctx2 = document.getElementById('myChart2');
            var myChart2 = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['April', 'May', 'June'],
                    datasets: [{
                        data: [12500,14000,20000],
                        backgroundColor: [
                            '#b2ff59',
                            '#b2ff59',
                            '#b2ff59'
                        ]
                    },
                    {
                        data: [110000, 120000,160000],
                        backgroundColor: [
                            '#ccff90',
                            '#ccff90',
                            '#ccff90'
                        ]
                    }]
                },
                options: {
                    legend:{
                        display:false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                            stacked: true
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                            stacked: true
                        }]
                    }
                }
            });
    
    </script>

</html>
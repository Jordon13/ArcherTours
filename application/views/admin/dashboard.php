<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('script');
?>

<!Doctype html>


<html>

    <head>
        <title>Dashboard</title>
        <?php adminhead();?>
        
        <style>
            .content-area{
                height: auto!important;
            }
            
            .inner-content{
                height: auto!important;
            }
        </style>
    
</head>

    <body>
        <?php navigation();?>
        <section class="content-area">
            
            <div class="inner-content">
                
                <h5 class="grey-text text-lighten-1">Welcome, Jordaine Gayle</h5>

                <div class="main-details row">
                    <div class="col s12 m3">
                        <div class="card-panel z-depth-1 r-card">
                            
                            <span class="card-title grey-text text-lighten-1">Total Users</span>

                            <div class="card-content flow-text center-align">
                                    <h3 class="grey-text text-darken-2">231</h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card-panel z-depth-1 r-card">
                            
                            <span class="card-title grey-text text-lighten-1">Vistors Today</span>

                            <div class="card-content flow-text center-align">
                                    <h3 class="grey-text text-darken-2">4,500</h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card-panel z-depth-1 r-card">
                            
                            <span class="card-title grey-text text-lighten-1">Total Bookings</span>

                            <div class="card-content flow-text center-align">
                                    <h3 class="grey-text text-darken-2">34</h3>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="card-panel z-depth-1 r-card">
                            
                            <span class="card-title grey-text text-lighten-1">Income Year To Date</span>

                            <div class="card-content center-align">
                                    <h3 class="grey-text text-darken-2">$200k</h3>
                            </div>
                            
                        </div>
                    </div>


                    <div class="col s12 m3">
                        <div class="card-panel z-depth-1 r-card">
                            
                            <span class="card-title grey-text text-lighten-1">Booking Conversion %</span>

                            <div class="card-content flow-text center-align">
                                    <h3 class="grey-text text-darken-2">98%</h3>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="card-panel z-depth-1 r-card">
                            
                            <span class="card-title grey-text text-lighten-1">Total Blog Post</span>

                            <div class="card-content flow-text center-align">
                                    <h3 class="grey-text text-darken-2">21</h3>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="card-panel z-depth-1 r-card">
                            
                            <span class="card-title grey-text text-lighten-1">Active Users</span>

                            <div class="card-content flow-text center-align">
                                    <h3 class="grey-text text-darken-2">22</h3>
                            </div>
                            
                        </div>
                    </div>


                    <div class="col s12 m3">
                        <div class="card-panel z-depth-1 r-card">
                            
                            <span class="card-title grey-text text-lighten-1">P&L Percentage Section</span>

                            <div class="card-content flow-text center-align">
                                    <h5 class="grey-text text-darken-2" style="flex-flow: nowrap"><i class="fa fa-caret-up green-text text-accent-4" aria-hidden="true"></i>12.89%</h5> <h5><i class="fa fa-caret-down red-text text-accent-4" aria-hidden="true"></i> 0.7%</h5>
                            </div>
                            
                        </div>
                    </div>

                </div>

                <h6 class="grey-text text-lighten-1">Recent Activities</h6>
                <div class="hr"></div>
                <div class="row">
                        <table class="highlight centered ts">
                            <thead>
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

</html>
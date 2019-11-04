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

            .mod{
                padding: 1em;
            }

            .mod details{
                height: auto;
                padding:1em;
                margin: 0.5em;
                border-radius:10px;
                color: rgba(80,80,80,1);
                transition:height 3s ease-in;
            }

            .mod details summary{
                padding: 0.3em;
                outline: none;
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
                                <h6 class="col s12 grey-text lighten-4 center-align">Total Bookings</h6>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart5" height="150px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m6 s12 myCharts">
                        <div class="col s12 white z-depth-1 carea">
                            <div class="col s12 hd">
                                <h6 class="col s12 grey-text lighten-4 center-align">Total Visitors</h6>
                            </div>

                            <div class="co1 s12 inchart">
                                <canvas id="myChart4" height="150px;"></canvas>
                            </div>
                        </div>
                    </div> 

                    
                </div>

                <h6 class="grey-text text-lighten-1">Recent Activities</h6>
                <div class="hr"></div>
                <div class="row mod">

                <?php foreach($data['weekactivities'] as $act){
                    
                    $link = "#";

                    $item = $act;

                    if($item['type']=='recent'){
                    $link = "http://localhost:84/archertours/admin/editnews/".$item['refid'];
                    }else if($item['type']=='rating'){
                    $link = "http://localhost:84/archertours/admin/testimonials?active=2";
                    }else if($item['type']=='contact'){
                    $link = "http://localhost:84/archertours/admin/customermsgs?active=2";
                    }else if($item['type']=='booking'){
                    $link = "http://localhost:84/archertours/admin/editbooking/".$item['refid'];
                    }else if($item['type']=='subscription'){
                    $link = "http://localhost:84/archertours/admin/vsubs?active=2";
                    }
                    
                ?>


                <details class="white z-depth-1">
                    <summary><em><?php echo $act['title'].' - '.date('l F d, Y',strtotime($act['date_created'])); ?></em></summary>
                    <p><?php echo $act['message']; ?></p>

                    <p> - <a href="<?php echo $link; ?>">Visit</a></p>
                </details>
                <?php }?>
                </div>
            </div>

        </section>

        
    </body>

    <?php adminjs();?>
    <script>

        var weekbookings = JSON.parse('<?php echo json_encode($data['weekbookings']); ?>');

        var weekpageviews = JSON.parse('<?php echo json_encode($data['weekpageviews']); ?>');

        var bklabels = new Array();
        var bkdata = new Array();

        var pglabels = new Array();
        var pgdata = new Array();

        weekbookings.forEach(function(item){
            bklabels.push(item.Day)
            bkdata.push(item.Total);
        });


        weekpageviews.forEach(function(item){
            pglabels.push(item.Day)
            pgdata.push(item.Total);
        });

        //console.log(weeklabels);

        var ctx5 = document.getElementById('myChart5').getContext('2d');
            var myDoughnutChart = new Chart(ctx5, {
                type: 'bar',
            
                data: data = {
                    datasets: [{
                        label: 'data for past week',
                        data: bkdata,
                        backgroundColor: [
                            '#ef5350',
                            '#EC407A',
                            '#AB47BC',
                            '#42A5F5',
                            '#26A69A',
                            '#D4E157',
                            '#FFCA28'
                        ]
                    }],

                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: bklabels,
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
                        data: pgdata,
                        backgroundColor: gradientStroke
                    }],

                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: pglabels,
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
            
            
    
    </script>

</html>
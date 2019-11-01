<?php

defined('BASEPATH') OR exit('No direct script access allowed');
if(!($this->ses->has_userdata("user_ses"))){
    redirect(site_url("Admin/login")."?error=Unauthorized Access: please login to use services");
}else{
    $this->load->helper('script');
}

?>

<!Doctype html>


<html>

    <head>
        <title>Profit & Loss</title>
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

        </style>
    </head>

    <body>
        <?php navigation($_GET['active']);?>
        <section class="content-area">

            <div class="inner-content">
                <div class="row">
                    <div class="col s12  white">
                    <canvas id="myChart"></canvas>
                    </div>
                
                </div>
            
            </div>

        </section>


    </body>
    <?php adminjs();?>
    <script>

          var arry = JSON.parse('<?php echo json_encode($data);?>');

          console.log(arry);


          var months = new Array();

          arry.forEach((itm)=>{
            months.push(itm.Month);
          });

          var completed = new Array();

          arry.forEach((itm)=>{
            completed.push(itm.CompletedPrice);
          });

          var cancelled = new Array();

          arry.forEach((itm)=>{
            cancelled.push(itm.CancelledPrice);
          });

          var total = new Array();

          arry.forEach((itm)=>{
            total.push(Number(itm.CompletedPrice)+Number(itm.CancelledPrice));
          });


        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: months,
                datasets: [{
                    label: 'Completed',
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    fill: false,
                    borderColor: 'rgb(0,255,0)',
                    data: completed
                },
                {
                    label: 'Cancelled',
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    fill: false,
                    borderColor: 'rgb(255, 0,0)',
                    data: cancelled
                },
                {
                    label: 'Total',
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    fill: false,
                    borderColor: 'rgb(0, 0,255)',
                    data: total
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>

</html>

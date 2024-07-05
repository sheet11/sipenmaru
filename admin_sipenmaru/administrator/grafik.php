<html>
	<head>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Tracer Study'
         },
         xAxis: {
            categories: ['Hewan']
         },
         yAxis: {
            title: {
               text: 'Jumlah terjual'
            }
         },
              series:             
            [
            <?php 
        	include"../config/koneksi.php";
                              
                 $sql_jumlah   = "SELECT sum(a1) as juma1 FROM tb_alumni WHERE a1='1'";        
                 $query_jumlah = mysqli_query($kon, $sql_jumlah ) or die(mysqli_error());
                 while( $data = mysqli_fetch_array( $query_jumlah ) ){
                    $juma1 = $data['juma1'];    
                             
                  }             
                  ?>
                  {
                      name: '<?php echo $juma1; ?>',
                      data: [<?php echo $juma1; ?>]
                  },
                  <?php  ?>
            ]
      });
   });	
</script>
	</head>
	<body>
		<div id='container'></div>		
	</body>
</html>
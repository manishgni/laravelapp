<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => []]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        
 <!--<div class="alert alert-icon-danger alert-dismissible mb-0" role="alert">-->
	<!--	   <button type="button" class="close" data-dismiss="alert">&times;</button>-->
	<!--		<div class="alert-icon icon-part-danger">-->
	<!--		 <i class="fa fa-exclamation-triangle"></i>-->
	<!--		</div>-->
	<!--		<div class="alert-message">-->
	<!--		   <span><strong>Update!</strong> <a href='#'>Service will resume around 11 AM  due to Urgent maintenance at bank end.</a></span>-->
	<!--		 </div>-->
 <!-- </div>-->
        
  <!--  <div class="alert alert-icon-success alert-dismissible mb-0" role="alert">-->
		<!--   <button type="button" class="close" data-dismiss="alert">&times;</button>-->
		<!--	<div class="alert-icon icon-part-success">-->
		<!--	 <i class="fa fa-check"></i>-->
		<!--	</div>-->
		<!--	<div class="alert-message">-->
		<!--	   <span><strong>Good news!</strong> <a href='dashboard_newbanks.php'>Balance update is now available 24x7. Check our new bank detail here.</a></span>-->
		<!--	 </div>-->
  <!--</div>-->
  <!--<br/>-->
  <!---->
  <!-- <div class="alert alert-icon-warning alert-dismissible mb-0" role="alert">-->
		<!--   <button type="button" class="close" data-dismiss="alert">&times;</button>-->
		<!--	<div class="alert-icon icon-part-warning">-->
		<!--	 <i class="fa fa-exclamation-triangle"></i>-->
		<!--	</div>-->
		<!--	<div class="alert-message">-->
		<!--	   <span><strong>Alert!</strong>  <a href="https://eaadhaar.uidai.gov.in/#/" target="_blank">Kindly send E-aadhaar PDF of Santosh Kumar Jayswal to care@jolosoft.com with JoloSoft ID. Please download from Govt. website:<br/>-->
		<!--	   https://eaadhaar.uidai.gov.in/#/-->
		<!--	   </a></span>-->
		<!--	 </div>-->
  <!--</div>-->
  <!---->

<!---->
<!-- <div class="alert alert-icon-success alert-dismissible mb-0" role="alert">-->
<!--		   <button type="button" class="close" data-dismiss="alert">&times;</button>-->
<!--			<div class="alert-icon icon-part-success">-->
<!--			 <i class="fa fa-check"></i>-->
<!--			</div>-->
<!--			<div class="alert-message">-->
<!--			   <span><strong>Update!</strong> <a href='dashboard_mybanks.php'>Kindly transfer in our yes bank for instant funding as our ICICI bank gateway is facing technical delays in payment credits.</a></span>-->
<!--			 </div>-->
<!--  </div>-->
<!-- -->
 <br/>
 <!-- <br/>-->
<!--	-->
<!--<div class="alert alert-icon-warning alert-dismissible mb-0" role="alert">-->
<!--		   <button type="button" class="close" data-dismiss="alert">&times;</button>-->
<!--			<div class="alert-icon icon-part-warning">-->
<!--			 <i class="fa fa-exclamation-triangle"></i>-->
<!--			</div>-->
<!--			<div class="alert-message">-->
<!--			   <span><strong>Alert!</strong>  <a href='dashboard_business.php'>Provide your business detail. Click here.</a></span>-->
<!--			 </div>-->
<!--  </div>-->
<!-- -->
 
      <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">36.68 <span class="float-right"><i class="fa fa-inr"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Available Balance</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">0.00* <span class="float-right"><i class="fa fa-inr"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Today's Transfer Amount</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">0 <span class="float-right"><i class="fa fa-exchange"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Today's Transfer Count</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">0.00* <span class="float-right"><i class="fa fa-inr"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Today's Payment Amount</p>
                </div>
            </div>
        </div>
        
<div style="float:right;"><small><i>*excluding Jolo fee & GST &nbsp; January 13 2022 03:33:18 PM (IST) &nbsp;</i></small> </div>


    </div>
 </div>  
	
   <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
<!-- Chart JS -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

  <!-- <script src="data/assets/plugins/Chart.js/Chart.min.js"></script> -->
  <script>
  
(function(window, document, $, undefined) {
	  "use strict";
	$(function() {
        if ($('#barChart').length) {
			var ctx = document.getElementById("barChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['11 Jan 2022','N/A','N/A','N/A','N/A','N/A','N/A','N/A','N/A','N/A'],
					datasets: [{
						label: 'Successful Transaction (Rs.)',
						data: ['255.00','0','0','0','0','0','0','0','0','0'],
						backgroundColor: "#ffffff"
					}]
				},
			options: {
				legend: {
				  display: true,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  enabled:true
				},	
			  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			});
		}

	});

})(window, document, window.jQuery);    
  </script>	
<?php /**PATH /var/www/html/laravelapp/resources/views/index.blade.php ENDPATH**/ ?>
<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2015-2022 "JoloSoft" All Rights Reserved
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  </div><!--End wrapper-->

 	<!-- Bootstrap core JavaScript-->
  <script src="data/assets/js/jquery.min.js"></script>
  <script src="data/assets/js/popper.min.js"></script>
  <script src="data/assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="data/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="data/assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="data/assets/js/jquery.loading-indicator.html"></script>
  <!-- Custom scripts -->
  <script src="data/assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="data/assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Vector map JavaScript -->
  <script src="data/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="data/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Easy Pie Chart JS -->
  <script src="data/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <!-- Sparkline JS -->
  <script src="data/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="data/assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="data/assets/plugins/jquery-knob/jquery.knob.js"></script>
    <!--Sweet Alerts -->
  <script src="data/assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
   
   
    <!--Switchery Js-->
    <script src="data/assets/plugins/switchery/js/switchery.min.js"></script>
    <script>
      var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
      $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
       });
    </script>
   <!--Bootstrap Switch Buttons-->
    <script src="data/assets/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script>
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });
    </script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  


     <script>
$(document).ready(function() {
$('#myModal').on('show.bs.modal', function(event) {
var getId = $(event.relatedTarget).data('id');

 $("#showloading6").show();
 $.ajax({
      url: './index_planinfo.php',
      type: 'POST',
      data: { id : getId },
       success: function(output){
           $("#showloading6").hide();
        $("#siteDetails").html(output); 
      }
      
    });

});
}); 
</script>
 <script>
$(document).ready(function() {
$('#myModalu2').on('show.bs.modal', function(event) {
var getId = $(event.relatedTarget).data('id');

 $("#showloading6u2").show();
 $.ajax({
      url: './index_planinfo2.php',
      type: 'POST',
      data: { id : getId },
       success: function(output){
           $("#showloading6u2").hide();
        $("#siteDetailsu2").html(output); 
      }
      
    });

});
}); 
</script>
<script>
// Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})
</script>
</body>

<!-- Mirrored from jolosoft.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 09:23:23 GMT -->
</html><?php /**PATH /var/www/html/laravelapp/resources/views/footer.blade.php ENDPATH**/ ?>
 	<!--Start footer-->
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
  <script src="data/assets/js/jquery.loading-indicator.js"></script>
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
  


      
</body>
</html>
<script src="{{asset('panel/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('panel/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('panel/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<script src="{{asset('panel/js/persiandatepicker.js')}}"></script>
<script src="{{asset('panel/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('panel/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('panel/lib/moment/min/moment.min.js')}}"></script>
{{-- <script src="{{asset('panel/lib/peity/jquery.peity.min.js')}}"></script> --}}
{{-- <script src="{{asset('panel/lib/rickshaw/vendor/d3.min.js')}}"></script> --}}
{{-- <script src="{{asset('panel/lib/rickshaw/vendor/d3.layout.min.js')}}"></script> --}}
{{-- <script src="{{asset('panel/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script> --}}
{{-- <script src="{{asset('panel/lib/rickshaw/rickshaw.min.js')}}"></script> --}}
{{-- <script src="{{asset('panel/lib/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('panel/lib/jquery.flot/jquery.flot.resize.js')}}"></script> --}}
{{-- <script src="{{asset('panel/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script> --}}
{{-- <script src="{{asset('panel/lib/chart.js/Chart.min.js')}}"></script> --}}
{{-- <script src="{{asset('panel/js/jquery.multifield.js')}}"></script> --}}
<script src="{{asset('panel/js/main.js')}}"></script>
{{-- <script src="{{asset('panel/js/map.shiftworker.js')}}"></script> --}}
{{-- <script src="{{asset('panel/js/ResizeSensor.js')}}"></script> --}}
{{-- <script src="{{asset('panel/js/dashboard.js')}}"></script> --}}
{{-- <script src="{{asset('panel/js/chart.chartjs.js')}}"></script> --}}
<script src="{{asset('panel/js/fontawsome-all.js')}}"></script>
{{-- <script src="{{asset('panel/js/parsley-2.9.2.min.js')}}"></script> --}}
<script src="{{asset('panel/lib/i18n/ar.js')}}"></script>
<script src="{{asset('panel/lib/i18n/fa.js')}}"></script>
<script src="{{asset('panel/js/custom.js')}}"></script>







		<script src="{{asset('panel/lib/tinymce/js/tinymce/tinymce.min.js')}}"></script>
		<script>
			tinymce.init({
			//selector: 'textarea',  // change this value according to your HTML
			//mode : "textareas",
			mode : "specific_textareas",
			editor_selector : "textarea",
			menubar: false,
			statusbar: false
			});
		</script>




	<script src="{{asset('panel/lib/select2/js/select2.full.min.js')}}"></script>
		<script>
			$(".tags").select2({
				tags: true,
				tokenSeparators: [',',]
			})
		</script>



		
	
	<script>
		$('#mrgroupwr').multifield({
			section: '.mr-group',
			btnAdd:'#btnAdd',
			btnRemove:'.btnRemove',
			max: 98
		});
	</script>

	<script>
		function timeincome() {
			$("#block-time-income").hide();
			$("#block-time-outcome").show();
		}	
		function timeoutcome() {
			$("#block-time-outcome").hide();
			$("#block-time-income").show();
		}	
	</script>

	<script>
	  jQuery(function($) {
		  var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
			$(".br-sideleft-menu > li > a").each(function(){
			if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
			$(this).addClass("active");
			// $(this).parent("li").addClass("active");
		  })
	  });
	  jQuery(function($) {
		  var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
			$(".br-sideleft-menu > li > ul > li > a").each(function(){
			if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
			$(this).addClass("active"),
			$(this).parent("li").parent("ul").parent("li").children("a").addClass("active");
		  })
	  });
	</script>
	

	
	<script>
		// Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });
	</script>



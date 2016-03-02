		<footer id="footer">
                <div class="copyright container">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <address>
							  <strong>© <?php echo date('Y'); ?> <?php bloginfo( 'sitename' ); ?></strong><br>
							   <abbr title="Address">Địa chỉ:</abbr> Số 06 Trần Văn Ơn, phường Phú Hòa, Tp Thủ Dầu Một, Bình Dương<br>							  
							  <abbr title="Phone">Điện thoại:</abbr> (0650) 3.834.951<br>
							  <abbr title="Website">Website:</abbr> <a href="http://danguy.tdmu.edu.vn" alt="danguy.tdmu.edu.vn">danguy.tdmu.edu.vn</a>
						</address>
                    </div>
                </div>
        </footer>
</div> <!--end #container -->
 <?php wp_footer(); ?>

<script type="text/javascript">
	$(document).ready(function () {
		   var docHeight = $(window).height();
		   var footerHeight = $('#footer').height();
		   var footerTop = $('#footer').position().top + footerHeight;
		   $('#CatCarousel').carousel();
		   $('#CatCarousel>.carousel-inner>.item:first').addClass("active");
		   if (footerTop < docHeight) {
		    $('#footer').css('margin-top',  (docHeight - footerTop) + 'px');
		   }
		   $(".navbar-nav").wrap("<div class='container'></div>");
		   $(".rpwe_widget").addClass("panel panel-danger panel-du");
		   $(".rpwe_widget>.widgettitle").addClass("panel-heading panel-du-heading");
		   $(".rpwe_widget>.rpwe-block ").addClass("panel-body panel-du-body");
		   $(".widget_text").addClass("btn btn-success btn-block");
		   $(".widget_text:first").removeClass("btn-success").addClass("btn-primary");
		   $(".widget_text:last").removeClass("btn-info").addClass("btn-info");
		   $(".widget_text>h3>a").append("<spand class='badge pull-right'><i class='fa fa-long-arrow-right'></i></spand>");
		   $(".breadcrumbs").addClass("breadcrumb");
		   $("input").addClass("form-control");
		   $("textarea").addClass("form-control");
		   $(".wpcf7-submit").addClass("btn btn-danger");
		   $(".wpcf7-response-output").wrap("<div class='col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12'></div>");
		   $(".wpcf7-mail-sent-ok").removeClass("wpcf7-mail-sent-ok");
		   $(".widget_calendar>.widgettitle").after("<hr/>");
		   $("#visits_counter_widget>.widgettitle").after("<hr/>")
		   $("img").addClass("img-responsive");
		   $("table").addClass("table");
		   $("#s").attr("placeholder", "Tìm kiếm");
		   $("#s").addClass("must-wrap");
		   $("#searchsubmit").replaceWith("<spand class='input-group-btn must-wrap'><button id='searchsubmit' type='submit' class='btn btn-danger'><i class='fa fa-search'></i></button></spand>");
		   $(".must-wrap").wrapAll("<div class='input-group'></div>");
		   $(".screen-reader-text").replaceWith("");
		   if ($("#myFrame").length > 0)
            {
                var resInterval = setInterval(function () {
                    if ($("#myFrame").contents().find("#pdfHeight").val() != "") {
                        var hgt = 0;
                        hgt = $("#myFrame").contents().find("#pdfHeight").val() * 1;
                        $("#myFrame").css({ "height": hgt + "px" }).fadeTo('10');
                    }
                }, 75);
            }
		  });
		function resizeIframe(obj)
        {
            obj.style.height = 1200 + "px";
        }
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61470043-1', 'auto');
  ga('send', 'pageview');

</script>

</body> <!--end body-->
</html> <!--end html -->
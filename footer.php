<footer class="footer">
	<p class="footer-text">&copy; 2017 - <?php echo date("Y");?> Bucho de Bode - Todos os
	direitos reservados</p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {

		$('.header-icon').click(function() {
			$('.header-icon').toggleClass('open');
			$('.header-menu').toggleClass('growup');
		})
	
	});

</script>

<style type="text/css">
	#backtopo {
	    display: scroll;
	    position: fixed;
	    top: 86%;
    	right: 10px;
	}
</style>

	<div id="backtopo">
		<a href="#" title="Voltar ao topo"><i class="fas fa-chevron-circle-up" style="font-size: 3em;z-index: 3"></i></a>
	</div>

	<script>
$(document).ready(function(){
    
    // hide #back-top first
    $('#backtopo').hide();
       
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('#backtopo').fadeIn();
            } else {
                $('#backtopo').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#backtopo').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});
</script>
</body>
</html>
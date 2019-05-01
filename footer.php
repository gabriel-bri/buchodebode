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
</body>
</html>
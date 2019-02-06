			</div>	
		</div>
	</div>

	<script src="<?=base_url();?>/_assets/js/bootstrap.min.js"></script>
	<script>
		// $("#menu-toggle").click(function(e){
		// 	e.preventDefault();
		// 	$(#wrapper).toggleClass("toggled");
		// });
		$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
	</script>

</body>
</html>

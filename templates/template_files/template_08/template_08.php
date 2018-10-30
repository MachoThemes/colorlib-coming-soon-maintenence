<?php

$template = get_theme_mod( 'colorlib_coming_soon_template_selection' );
$styles   = array(
	array(
		'name'     => 'main',
		'location' => 'css/main.css',
		'template' => $template,
	),
	array(
		'name'     => 'util',
		'location' => 'css/util.css',
		'template' => $template,
	)
);

colorlibStyleEnqueue( $styles );

$counter = get_theme_mod( 'colorlib_coming_soon_timer_option' );
$dates   = colorlibCounterDates( $counter );
wp_head();
?>

<div class="bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('images/bg01.jpg');">
	<div class="wsize1">
		<p class="txt-center p-b-23">
			<i class="zmdi zmdi-card-giftcard cl0 fs-60"></i>
		</p>

		<h3 class="l1-txt1 txt-center p-b-22">
			Coming Soon
		</h3>

		<p class="txt-center m2-txt1 p-b-67">
			Our website is under construction, follow us for update now!
		</p>

		<div class="flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
			<div class="flex-col-c-m wsize2 m-b-20">
				<span class="l1-txt2 p-b-4 days">35</span>
				<span class="m2-txt2">Days</span>
			</div>

			<span class="l1-txt2 p-b-22">:</span>

			<div class="flex-col-c-m wsize2 m-b-20">
				<span class="l1-txt2 p-b-4 hours">17</span>
				<span class="m2-txt2">Hours</span>
			</div>

			<span class="l1-txt2 p-b-22 respon2">:</span>

			<div class="flex-col-c-m wsize2 m-b-20">
				<span class="l1-txt2 p-b-4 minutes">50</span>
				<span class="m2-txt2">Minutes</span>
			</div>

			<span class="l1-txt2 p-b-22">:</span>

			<div class="flex-col-c-m wsize2 m-b-20">
				<span class="l1-txt2 p-b-4 seconds">39</span>
				<span class="m2-txt2">Seconds</span>
			</div>
		</div>

		<form class="flex-w flex-c-m contact100-form validate-form p-t-70">
			<div class="wrap-input100 validate-input where1" data-validate = "Email is required: ex@abc.xyz">
				<input class="s1-txt1 placeholder0 input100" type="text" name="email" placeholder="Email Address">
				<span class="focus-input100"></span>
			</div>

			<button class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
				Notify Me
			</button>
		</form>
	</div>
</div>
<?php

$scripts = array(
	array(
		'name'     => 'popper',
		'location' => 'vendor/bootstrap/js/popper.js',
		'template' => 'global',
	),
	array(
		'name'     => 'bootstrap',
		'location' => 'vendor/bootstrap/js/bootstrap.min.js',
		'template' => 'global'
	),
	array(
		'name'     => 'popper',
		'location' => 'vendor/bootstrap/js/popper.js',
		'template' => 'global'
	),
	array(
		'name'     => 'select2',
		'location' => 'vendor/select2/select2.min.js',
		'template' => 'global'
	),
	array(
		'name'     => 'moment',
		'location' => 'vendor/countdowntime/moment.min.js',
		'template' => 'global'
	),
	array(
		'name'     => 'timezone',
		'location' => 'vendor/countdowntime/moment-timezone-with-data.min.js',
		'template' => 'global'
	),
	array(
		'name'     => 'coutdowntime',
		'location' => 'vendor/countdowntime/countdowntime.js',
		'template' => 'global'
	),
	array(
		'name'     => 'tilt',
		'location' => 'vendor/tilt/tilt.jquery.min.js',
		'template' => 'global'
	),
	array(
		'name'     => 'main',
		'location' => 'js/main.js',
		'template' => $template,
	),

);

colorlibScriptEnqueue( $scripts );

wp_footer();

?>

<script>
    jQuery('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: <?php echo $dates['script']['year']; ?>,
        endtimeMonth: <?php echo $dates['script']['month']; ?>,
        endtimeDate: <?php echo $dates['script']['day']; ?>,
        endtimeHours: 23,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: ""
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>

<script>
    jQuery('.js-tilt').tilt({
        scale: 1.1
    })
</script>
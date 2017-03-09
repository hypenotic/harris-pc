<?php 
/**
* This is the base template for Product Pages
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post();global $post;
    $post_slug=$post->post_name;

	$heading         = rwmb_meta( 'rw_p_banner_heading' );
	$subhead         = rwmb_meta( 'rw_p_banner_subheading' );
?>
<section class="product-header" id="skip-to-content">
	<div class="container">
		<h1><?php the_title();?></h1>
		<h2><?php echo $heading;?></h2>
		<h3><?php echo $subhead;?></h3>
		<a href="#" class="btn waves-effect pc-blue no-shadow">Request a demo</a>
		<a href="#" class="underline display-block">Need training courses & user guides?</a>
	</div>
</section>

<section class="product-why why-section">
    <div class="container">
    	<ul class="row">
    		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Chart Faster</li>
    		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Keep your workflow</li>
    		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Capture ALL billing</li>
    		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Sympathetic support</li>
    	</ul>
    </div>
</section>

<section class="product-alliances lblue-bg base-padding">
    <div class="container">
        <h3>Industry Alliances</h3>
        <ul class="row">
            <li class="col s4 m4 l4">
                <svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
                        <polygon id="Fill-1" fill="#297FCA" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
                        <polygon id="Fill-2" fill="#297FCA" points="5.68434189e-14 12.1560626 5.68434189e-14 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
                        <polygon id="Fill-3" fill="#297FCA" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
                        <polygon id="Fill-4" fill="#297FCA" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
                        <polygon id="Fill-5" fill="#297FCA" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
                        <polygon id="Fill-6" fill="#297FCA" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
                        <polygon id="Fill-7" fill="#297FCA" points="5.68434189e-14 30.0132054 5.68434189e-14 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
                    </g>
                </svg>
            </li>
            <li class="col s4 m4 l4">
                <svg width="66px" height="34px" viewBox="153 165 66 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(153.000000, 165.000000)">
                        <path d="M34.5581739,0.464077482 C26.4535652,0.464077482 19.8851304,7.0493753 19.8851304,15.1726489 L19.8851304,31.7164358 L51.062,0.464077482 L34.5581739,0.464077482 Z" id="Fill-1" fill="#297FCA"></path>
                        <path d="M53.920087,21.6371332 C48.1886087,15.8917772 38.8998261,15.8917772 33.1721739,21.6371332 L21.4997391,33.334954 L65.5886957,33.334954 L53.920087,21.6371332 Z" id="Fill-2" fill="#297FCA"></path>
                        <path d="M9.53556522,23.4618015 L17.7664348,31.7126005 L17.7664348,0.538866828 L9.53556522,8.7906247 C5.49617391,12.843632 5.49617391,19.4126295 9.53556522,23.4618015 Z" id="Fill-3" fill="#297FCA"></path>
                        <path d="M0.411304348,25.7572591 C0.411304348,29.888891 3.75147826,33.2333172 7.86930435,33.2333172 L16.2608696,33.2333172 L0.411304348,17.3453753 L0.411304348,25.7572591 Z" id="Fill-4" fill="#297FCA"></path>
                    </g>
                </svg>
            </li>
            <li class="col s4 m4 l4">
                <svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
                        <polygon id="Fill-1" fill="#297FCA" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
                        <polygon id="Fill-2" fill="#297FCA" points="5.68434189e-14 12.1560626 5.68434189e-14 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
                        <polygon id="Fill-3" fill="#297FCA" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
                        <polygon id="Fill-4" fill="#297FCA" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
                        <polygon id="Fill-5" fill="#297FCA" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
                        <polygon id="Fill-6" fill="#297FCA" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
                        <polygon id="Fill-7" fill="#297FCA" points="5.68434189e-14 30.0132054 5.68434189e-14 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
                    </g>
                </svg>
            </li>
        </ul>
    </div>
</section>

<section class="product-overview base-padding">
	<div class="container">
		<h3>Headline overview of major benefits</h3>
		<svg class="neg-left-image" width="464px" height="249px" viewBox="-118 353 464 249" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <defs></defs>
		    <g id="Group-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-117.000000, 354.000000)">
		        <g id="Page-1" stroke="#297FCA" stroke-width="0.5">
		            <g id="Group-4" transform="translate(0.000000, 0.245842)">
		                <path d="M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M459.460929,226.463054 L403.630247,226.463054 L403.630247,12.2553735 C403.630247,5.513 398.134461,0.0261445783 391.383614,0.0261445783 L70.6175357,0.0261445783 C63.8666883,0.0261445783 58.3739123,5.513 58.3739123,12.2553735 L58.3739123,226.463054 L2.27837338,226.463054 C1.62525974,226.463054 1.09253571,226.994235 1.09253571,227.646139 L1.09253571,237.379422 C1.09253571,237.859295 1.38147078,238.287861 1.82691234,238.471964 L1.91118506,238.520253 C8.0962013,243.168084 16.0298766,245.72741 24.252487,245.72741 L437.528951,245.72741 C445.802727,245.72741 453.76951,243.140922 459.969575,238.444801 C460.405987,238.203355 460.643756,237.807988 460.643756,237.379422 L460.643756,227.646139 C460.643756,226.994235 460.114042,226.463054 459.460929,226.463054 Z M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M460.643756,237.379422 C460.643756,237.807988 460.405987,238.203355 459.969575,238.444801 C453.76951,243.140922 445.802727,245.72741 437.528951,245.72741 L24.252487,245.72741 C16.0298766,245.72741 8.0962013,243.168084 1.91118506,238.520253 L1.82691234,238.471964 C1.38147078,238.287861 1.09253571,237.859295 1.09253571,237.379422 L1.09253571,227.646139 C1.09253571,226.994235 1.62525974,226.463054 2.27837338,226.463054 L58.3739123,226.463054 L58.3739123,12.2553735 C58.3739123,5.513 63.8666883,0.0261445783 70.6175357,0.0261445783 L391.383614,0.0261445783 C398.134461,0.0261445783 403.630247,5.513 403.630247,12.2553735 L403.630247,226.463054 L459.460929,226.463054 C460.114042,226.463054 460.643756,226.994235 460.643756,227.646139 L460.643756,237.379422 Z" id="Stroke-1"></path>
		                <path d="M0,237.378516 L461.739302,237.378516" id="Stroke-3"></path>
		            </g>
		            <path d="M48.2741269,226.708896 L423.751263,226.708896" id="Stroke-5"></path>
		        </g>
		        <g id="Page-1" transform="translate(148.000000, 35.000000)" stroke="#297FCA" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round">
		            <path d="M161.169057,145.283811 C161.169057,154.055115 154.055115,161.169057 145.283811,161.169057 L16.2161885,161.169057 C7.44488525,161.169057 0.330942623,154.055115 0.330942623,145.283811 L0.330942623,16.2161885 C0.330942623,7.44488525 7.44488525,0.330942623 16.2161885,0.330942623 L145.283811,0.330942623 C154.055115,0.330942623 161.169057,7.44488525 161.169057,16.2161885 L161.169057,145.283811 Z" id="Stroke-1"></path>
		            <path d="M1.32377049,26.1444672 L160.17623,26.1444672" id="Stroke-2"></path>
		            <path d="M13.2377049,14.2305328 L37.0655738,14.2305328" id="Stroke-3"></path>
		            <path d="M109.915311,14.2305328 C109.915311,20.6825902 100.233254,20.6825902 100.233254,14.2305328 C100.233254,7.77847541 109.915311,7.77847541 109.915311,14.2305328" id="Stroke-4"></path>
		            <path d="M129.771869,14.2305328 C129.771869,20.6825902 120.089811,20.6825902 120.089811,14.2305328 C120.089811,7.77847541 129.771869,7.77847541 129.771869,14.2305328" id="Stroke-5"></path>
		            <path d="M149.628426,14.2305328 C149.628426,20.6825902 139.946369,20.6825902 139.946369,14.2305328 C139.946369,7.77847541 149.628426,7.77847541 149.628426,14.2305328" id="Stroke-6"></path>
		            <path d="M39.7025246,127.960951 L121.797475,127.960951" id="Stroke-7"></path>
		            <polygon id="Stroke-8" points="54.2745902 90.6888689 71.4836066 90.6888689 71.4836066 115.851098 54.2745902 115.851098"></polygon>
		            <polygon id="Stroke-9" points="72.1454918 74.803623 89.3545082 74.803623 89.3545082 115.851098 72.1454918 115.851098"></polygon>
		            <polygon id="Stroke-10" points="90.0163934 58.918377 107.22541 58.918377 107.22541 115.851098 90.0163934 115.851098"></polygon>
		        </g>
		    </g>
		</svg>
	</div>
</section>

<section class="product-features base-padding no-tb-padding">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 single-product-feature">
				<svg class="neg-left-image" width="463px" height="248px" viewBox="-124 122 463 248" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
				    <desc>Created with Sketch.</desc>
				    <defs></defs>
				    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-123.000000, 123.000000)">
				        <g id="Group-4" transform="translate(0.000000, 0.245842)" stroke="#297FCA" stroke-width="0.5">
				            <path d="M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M459.460929,226.463054 L403.630247,226.463054 L403.630247,12.2553735 C403.630247,5.513 398.134461,0.0261445783 391.383614,0.0261445783 L70.6175357,0.0261445783 C63.8666883,0.0261445783 58.3739123,5.513 58.3739123,12.2553735 L58.3739123,226.463054 L2.27837338,226.463054 C1.62525974,226.463054 1.09253571,226.994235 1.09253571,227.646139 L1.09253571,237.379422 C1.09253571,237.859295 1.38147078,238.287861 1.82691234,238.471964 L1.91118506,238.520253 C8.0962013,243.168084 16.0298766,245.72741 24.252487,245.72741 L437.528951,245.72741 C445.802727,245.72741 453.76951,243.140922 459.969575,238.444801 C460.405987,238.203355 460.643756,237.807988 460.643756,237.379422 L460.643756,227.646139 C460.643756,226.994235 460.114042,226.463054 459.460929,226.463054 Z M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M460.643756,237.379422 C460.643756,237.807988 460.405987,238.203355 459.969575,238.444801 C453.76951,243.140922 445.802727,245.72741 437.528951,245.72741 L24.252487,245.72741 C16.0298766,245.72741 8.0962013,243.168084 1.91118506,238.520253 L1.82691234,238.471964 C1.38147078,238.287861 1.09253571,237.859295 1.09253571,237.379422 L1.09253571,227.646139 C1.09253571,226.994235 1.62525974,226.463054 2.27837338,226.463054 L58.3739123,226.463054 L58.3739123,12.2553735 C58.3739123,5.513 63.8666883,0.0261445783 70.6175357,0.0261445783 L391.383614,0.0261445783 C398.134461,0.0261445783 403.630247,5.513 403.630247,12.2553735 L403.630247,226.463054 L459.460929,226.463054 C460.114042,226.463054 460.643756,226.994235 460.643756,227.646139 L460.643756,237.379422 Z" id="Stroke-1"></path>
				            <path d="M0,237.378516 L461.739302,237.378516" id="Stroke-3"></path>
				        </g>
				        <path d="M48.2741269,226.708896 L423.751263,226.708896" id="Stroke-5" stroke="#297FCA" stroke-width="0.5"></path>
				        <g transform="translate(148.000000, 35.500000)" stroke="#297FCA" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round">
				            <path d="M160.171107,144.384221 C160.171107,153.101213 153.101213,160.171107 144.384221,160.171107 L16.1157787,160.171107 C7.39878689,160.171107 0.328893443,153.101213 0.328893443,144.384221 L0.328893443,16.1157787 C0.328893443,7.39878689 7.39878689,0.328893443 16.1157787,0.328893443 L144.384221,0.328893443 C153.101213,0.328893443 160.171107,7.39878689 160.171107,16.1157787 L160.171107,144.384221 Z" id="Stroke-1"></path>
				            <path d="M1.31557377,25.982582 L159.184426,25.982582" id="Stroke-2"></path>
				            <path d="M13.1557377,14.142418 L36.8360656,14.142418" id="Stroke-3"></path>
				            <path d="M109.234721,14.142418 C109.234721,20.5545246 99.6126148,20.5545246 99.6126148,14.142418 C99.6126148,7.73031148 109.234721,7.73031148 109.234721,14.142418" id="Stroke-4"></path>
				            <path d="M128.968328,14.142418 C128.968328,20.5545246 119.346221,20.5545246 119.346221,14.142418 C119.346221,7.73031148 128.968328,7.73031148 128.968328,14.142418" id="Stroke-5"></path>
				            <path d="M148.701934,14.142418 C148.701934,20.5545246 139.079828,20.5545246 139.079828,14.142418 C139.079828,7.73031148 148.701934,7.73031148 148.701934,14.142418" id="Stroke-6"></path>
				            <polygon id="Stroke-7" points="24.0092213 65.4497951 61.5030738 65.4497951 61.5030738 104.917008 24.0092213 104.917008"></polygon>
				            <path d="M24.0092213,65.4497951 L61.5030738,104.917008" id="Stroke-8"></path>
				            <path d="M61.5030738,65.4497951 L24.0092213,104.917008" id="Stroke-9"></path>
				            <path d="M23.022541,126.623975 L135.504098,126.623975" id="Stroke-10"></path>
				            <path d="M86.170082,97.0235656 L135.504098,97.0235656" id="Stroke-11"></path>
				            <path d="M86.170082,67.4231557 L135.504098,67.4231557" id="Stroke-12"></path>
				        </g>
				    </g>
				</svg>
				<h3>Feature X Heading</h3>
				<p>DESCRIPTION here. Multi-disciplinary care. Examples?consectetur adipiscing elit. Mauris cursus tortor sit amet.</p>
				<ul>
					<li><i class="fa fa-check" aria-hidden="true"></i> Automatic drug interaction checking</li>
					<li><i class="fa fa-check" aria-hidden="true"></i> Communication links to other caregivers</li>
				</ul>			
			</div>
			<div class="col s12 m6 single-product-feature">
				<svg class="neg-left-image" width="463px" height="248px" viewBox="-124 122 463 248" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
				    <desc>Created with Sketch.</desc>
				    <defs></defs>
				    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-123.000000, 123.000000)">
				        <g id="Group-4" transform="translate(0.000000, 0.245842)" stroke="#297FCA" stroke-width="0.5">
				            <path d="M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M459.460929,226.463054 L403.630247,226.463054 L403.630247,12.2553735 C403.630247,5.513 398.134461,0.0261445783 391.383614,0.0261445783 L70.6175357,0.0261445783 C63.8666883,0.0261445783 58.3739123,5.513 58.3739123,12.2553735 L58.3739123,226.463054 L2.27837338,226.463054 C1.62525974,226.463054 1.09253571,226.994235 1.09253571,227.646139 L1.09253571,237.379422 C1.09253571,237.859295 1.38147078,238.287861 1.82691234,238.471964 L1.91118506,238.520253 C8.0962013,243.168084 16.0298766,245.72741 24.252487,245.72741 L437.528951,245.72741 C445.802727,245.72741 453.76951,243.140922 459.969575,238.444801 C460.405987,238.203355 460.643756,237.807988 460.643756,237.379422 L460.643756,227.646139 C460.643756,226.994235 460.114042,226.463054 459.460929,226.463054 Z M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M460.643756,237.379422 C460.643756,237.807988 460.405987,238.203355 459.969575,238.444801 C453.76951,243.140922 445.802727,245.72741 437.528951,245.72741 L24.252487,245.72741 C16.0298766,245.72741 8.0962013,243.168084 1.91118506,238.520253 L1.82691234,238.471964 C1.38147078,238.287861 1.09253571,237.859295 1.09253571,237.379422 L1.09253571,227.646139 C1.09253571,226.994235 1.62525974,226.463054 2.27837338,226.463054 L58.3739123,226.463054 L58.3739123,12.2553735 C58.3739123,5.513 63.8666883,0.0261445783 70.6175357,0.0261445783 L391.383614,0.0261445783 C398.134461,0.0261445783 403.630247,5.513 403.630247,12.2553735 L403.630247,226.463054 L459.460929,226.463054 C460.114042,226.463054 460.643756,226.994235 460.643756,227.646139 L460.643756,237.379422 Z" id="Stroke-1"></path>
				            <path d="M0,237.378516 L461.739302,237.378516" id="Stroke-3"></path>
				        </g>
				        <path d="M48.2741269,226.708896 L423.751263,226.708896" id="Stroke-5" stroke="#297FCA" stroke-width="0.5"></path>
				        <g transform="translate(148.000000, 35.500000)" stroke="#297FCA" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round">
				            <path d="M160.171107,144.384221 C160.171107,153.101213 153.101213,160.171107 144.384221,160.171107 L16.1157787,160.171107 C7.39878689,160.171107 0.328893443,153.101213 0.328893443,144.384221 L0.328893443,16.1157787 C0.328893443,7.39878689 7.39878689,0.328893443 16.1157787,0.328893443 L144.384221,0.328893443 C153.101213,0.328893443 160.171107,7.39878689 160.171107,16.1157787 L160.171107,144.384221 Z" id="Stroke-1"></path>
				            <path d="M1.31557377,25.982582 L159.184426,25.982582" id="Stroke-2"></path>
				            <path d="M13.1557377,14.142418 L36.8360656,14.142418" id="Stroke-3"></path>
				            <path d="M109.234721,14.142418 C109.234721,20.5545246 99.6126148,20.5545246 99.6126148,14.142418 C99.6126148,7.73031148 109.234721,7.73031148 109.234721,14.142418" id="Stroke-4"></path>
				            <path d="M128.968328,14.142418 C128.968328,20.5545246 119.346221,20.5545246 119.346221,14.142418 C119.346221,7.73031148 128.968328,7.73031148 128.968328,14.142418" id="Stroke-5"></path>
				            <path d="M148.701934,14.142418 C148.701934,20.5545246 139.079828,20.5545246 139.079828,14.142418 C139.079828,7.73031148 148.701934,7.73031148 148.701934,14.142418" id="Stroke-6"></path>
				            <polygon id="Stroke-7" points="24.0092213 65.4497951 61.5030738 65.4497951 61.5030738 104.917008 24.0092213 104.917008"></polygon>
				            <path d="M24.0092213,65.4497951 L61.5030738,104.917008" id="Stroke-8"></path>
				            <path d="M61.5030738,65.4497951 L24.0092213,104.917008" id="Stroke-9"></path>
				            <path d="M23.022541,126.623975 L135.504098,126.623975" id="Stroke-10"></path>
				            <path d="M86.170082,97.0235656 L135.504098,97.0235656" id="Stroke-11"></path>
				            <path d="M86.170082,67.4231557 L135.504098,67.4231557" id="Stroke-12"></path>
				        </g>
				    </g>
				</svg>
				<h3>Feature X Heading</h3>
				<p>DESCRIPTION here. Multi-disciplinary care. Examples?consectetur adipiscing elit. Mauris cursus tortor sit amet.</p>
				<ul>
					<li><i class="fa fa-check" aria-hidden="true"></i> Automatic drug interaction checking</li>
					<li><i class="fa fa-check" aria-hidden="true"></i> Communication links to other caregivers</li>
				</ul>	
			</div>
		</div>
	</div>
</section>

<section class="product-who why-section">
    <div class="container">
        <h3>Designed by physicians using real workflows.<br/>Ideal for:</h3>
        <div class="">
        	<ul class="row">
        		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Free standing ED</li>
        		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Urgent Care</li>
        		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Canadian Hospitals</li>
        		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Hospital ED</li>
        	</ul>
        </div>

        <div class="carousel carousel-slider center llblue-bg" data-indicators="true">
            <div class="carousel-fixed-item center">
              <a class="btn waves-effect pc-blue no-shadow">Convince your team</a>
            </div>
            <div class="carousel-item" href="#one!">
              <h2>First Panel</h2>
              <p class="">This is your first panel</p>
            </div>
            <div class="carousel-item" href="#two!">
              <h2>Second Panel</h2>
              <p class="">This is your second panel</p>
            </div>
            <div class="carousel-item" href="#three!">
              <h2>Third Panel</h2>
              <p class="">This is your third panel</p>
            </div>
            <div class="carousel-item" href="#four!">
              <h2>Fourth Panel</h2>
              <p class="">This is your fourth panel</p>
            </div>
          </div>
    </div>
</section>

<?php
 // Check if there are any case studies
$args = array(
    'post_type' => 'case-study',
    'tax_query' => array(
		array(
			'taxonomy' => 'products',
			'field'    => 'slug',
			'terms'    => $post_slug,
		),
	),
    'posts_per_page'=> '10',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$loop = new WP_Query( $args );
if ($loop->have_posts()){
?>
<section class="product-case-studies">
    <div class="container">
        <h3>Check out our case studies:</h3>
        <div class="case-study-container row" class="wrapper">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
    	$heading         = rwmb_meta( 'rw_cs_banner_heading' );
    ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="case-study-container__single display-inblock">
        <div class="display-inblock case-study-container__single__icon">
        	<svg viewBox="32 141 14 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        	    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
        	    <desc>Created with Sketch.</desc>
        	    <defs></defs>
        	    <path d="M41.5789474,144.684284 L46,144.684284 L46,156.473758 L32,156.473758 L32,144.684284 L36.4217895,144.684284 L36.4217895,146.157968 L33.4736842,146.157968 L33.4736842,155.000074 L44.5263158,155.000074 L44.5263158,146.157968 L41.5789474,146.157968 L41.5789474,144.684284 Z M39.0005895,153.526316 L36.4083789,150.206842 L36.9890105,149.753684 L38.6321684,151.857368 L38.6321684,141 L39.3682737,141 L39.3682737,151.857368 L41.0114316,149.753684 L41.5928,150.206842 L39.0005895,153.526316 Z" id="Icon" stroke="none" fill="#3FA2F7" fill-rule="evenodd"></path>
        	</svg>
        </div>
        <div class="display-inblock case-study-container__single__content">
        	<h4><?php echo $heading;?></h4>
        	<p><?php the_title(); ?></p>
        </div>
        </a>
    <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php } ?>



<section class="product-request base-padding">
    <div class="container">
        <h3>See how it works</h3>
        <a href="#" class="btn waves-effect pc-blue no-shadow">Request a demo</a>
    </div>
</section>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; wp_reset_postdata(); else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>


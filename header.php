<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<script type="text/javascript" src="//use.typekit.net/piz5jxi.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<header>

		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1000px" height="1000px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
		<g>
			<g>
				<path fill="#4E4E4E" d="M79.951,463.024l105.604,267.644l105.176-267.644h42.755v305.268h-29.073V504.496h-0.855L199.237,768.292
					h-27.363L67.125,504.496H66.27v263.796H37.197V463.024H79.951z"/>
				<path fill="#4E4E4E" d="M386.926,555.374c5.985-19.093,14.964-35.98,26.935-50.664c11.972-14.677,27.002-26.361,45.106-35.059
					c18.097-8.691,39.12-13.041,63.062-13.041c23.943,0,44.893,4.349,62.85,13.041c17.957,8.698,32.921,20.382,44.893,35.059
					c11.971,14.684,20.949,31.571,26.936,50.664c5.985,19.1,8.979,39.194,8.979,60.284c0,21.097-2.993,41.191-8.979,60.284
					c-5.986,19.099-14.965,35.913-26.936,50.45c-11.972,14.536-26.936,26.153-44.893,34.845s-38.906,13.04-62.85,13.04
					c-23.942,0-44.965-4.349-63.062-13.04c-18.104-8.691-33.135-20.309-45.106-34.845c-11.971-14.537-20.95-31.352-26.935-50.45
					c-5.986-19.093-8.979-39.188-8.979-60.284C377.948,594.568,380.94,574.474,386.926,555.374z M413.648,664.612
					c4.416,16.106,11.256,30.503,20.522,43.182c9.259,12.687,21.164,22.874,35.7,30.57c14.537,7.695,31.919,11.543,52.16,11.543
					c20.235,0,37.551-3.848,51.947-11.543c14.39-7.696,26.221-17.884,35.486-30.57c9.259-12.679,16.1-27.075,20.522-43.182
					c4.415-16.1,6.627-32.42,6.627-48.954c0-16.814-2.212-33.202-6.627-49.168c-4.423-15.959-11.264-30.282-20.522-42.969
					c-9.266-12.679-21.097-22.873-35.486-30.569c-14.396-7.696-31.712-11.544-51.947-11.544c-20.241,0-37.624,3.848-52.16,11.544
					s-26.441,17.89-35.7,30.569c-9.266,12.687-16.106,27.01-20.522,42.969c-4.422,15.966-6.627,32.354-6.627,49.168
					C407.021,632.192,409.226,648.513,413.648,664.612z"/>
				<path fill="#4E4E4E" d="M816.608,463.024c46.456,1.142,81.448,14.182,104.963,39.12c23.515,24.945,35.272,62.782,35.272,113.514
					c0,50.737-11.758,88.575-35.272,113.514c-23.515,24.944-58.507,37.984-104.963,39.12H711.005V463.024H816.608z M802.072,743.494
					c21.945,0,40.831-2.352,56.649-7.055c15.819-4.702,28.859-12.185,39.121-22.445c10.261-10.262,17.81-23.516,22.66-39.763
					c4.843-16.246,7.268-35.767,7.268-58.573c0-22.801-2.425-42.327-7.268-58.574c-4.851-16.246-12.399-29.5-22.66-39.762
					c-10.262-10.261-23.302-17.743-39.121-22.446c-15.818-4.703-34.704-7.055-56.649-7.055h-61.994v255.672H802.072z"/>
			</g>
			<g>
				<path fill="#4E4E4E" d="M962.273,800.527c-1.1-0.799-2.506-1.198-4.219-1.198c-0.694,0-1.378,0.069-2.049,0.208
					c-0.672,0.139-1.268,0.371-1.788,0.694c-0.521,0.325-0.938,0.759-1.25,1.303s-0.469,1.221-0.469,2.031
					c0,0.764,0.226,1.383,0.677,1.857s1.053,0.862,1.806,1.163c0.752,0.301,1.603,0.55,2.552,0.747
					c0.949,0.196,1.916,0.411,2.899,0.642c0.984,0.232,1.95,0.504,2.899,0.816s1.8,0.735,2.553,1.268
					c0.752,0.532,1.354,1.204,1.806,2.014c0.451,0.811,0.677,1.829,0.677,3.056c0,1.319-0.295,2.448-0.886,3.386
					c-0.59,0.938-1.349,1.701-2.274,2.291c-0.926,0.591-1.962,1.02-3.107,1.285s-2.286,0.399-3.42,0.399
					c-1.39,0-2.703-0.174-3.941-0.521c-1.238-0.348-2.326-0.874-3.264-1.58s-1.679-1.609-2.223-2.709
					c-0.544-1.099-0.815-2.401-0.815-3.906h3.125c0,1.042,0.202,1.939,0.607,2.691c0.404,0.752,0.938,1.371,1.597,1.857
					c0.66,0.486,1.43,0.846,2.31,1.076c0.88,0.232,1.782,0.348,2.708,0.348c0.741,0,1.487-0.069,2.24-0.208
					c0.752-0.14,1.429-0.376,2.031-0.712c0.602-0.336,1.088-0.793,1.458-1.372c0.37-0.578,0.556-1.319,0.556-2.222
					c0-0.856-0.226-1.551-0.677-2.084c-0.451-0.532-1.054-0.966-1.806-1.302c-0.753-0.335-1.604-0.607-2.553-0.816
					c-0.949-0.208-1.915-0.422-2.899-0.642c-0.983-0.22-1.95-0.475-2.899-0.765c-0.949-0.289-1.8-0.671-2.552-1.146
					s-1.354-1.088-1.806-1.841c-0.451-0.752-0.677-1.695-0.677-2.829c0-1.25,0.254-2.332,0.764-3.247
					c0.509-0.914,1.187-1.667,2.031-2.257c0.845-0.591,1.806-1.03,2.882-1.319c1.077-0.289,2.182-0.435,3.316-0.435
					c1.272,0,2.453,0.151,3.542,0.452c1.088,0.301,2.042,0.775,2.864,1.423c0.821,0.648,1.47,1.465,1.944,2.448
					c0.475,0.984,0.734,2.159,0.781,3.524H964.2C964.015,802.616,963.372,801.325,962.273,800.527z"/>
				<path fill="#4E4E4E" d="M976.943,797.142l7.812,20.834l7.848-20.834h4.514v24.792h-3.125v-20.625h-0.069l-7.743,20.625h-2.812
					l-7.743-20.625h-0.069v20.625h-3.125v-24.792H976.943z"/>
			</g>
			<g>
				<path fill="#4E4E4E" d="M79.473,818.22c-1.244-1.971-2.761-3.624-4.55-4.959c-1.79-1.334-3.762-2.351-5.915-3.049
					c-2.154-0.696-4.413-1.046-6.779-1.046c-4.308,0-8.008,0.818-11.102,2.457c-3.094,1.638-5.628,3.808-7.599,6.506
					c-1.972,2.7-3.428,5.749-4.368,9.146c-0.941,3.398-1.411,6.887-1.411,10.465c0,3.52,0.469,6.993,1.411,10.42
					c0.94,3.428,2.396,6.492,4.368,9.19c1.971,2.7,4.505,4.869,7.599,6.507c3.094,1.638,6.794,2.457,11.102,2.457
					c3.033,0,5.763-0.546,8.19-1.638c2.426-1.092,4.519-2.578,6.279-4.459c1.759-1.88,3.185-4.08,4.277-6.598
					c1.092-2.517,1.789-5.232,2.093-8.145h6.188c-0.425,4.004-1.365,7.614-2.821,10.829c-1.456,3.216-3.337,5.946-5.642,8.189
					c-2.306,2.245-5.021,3.975-8.145,5.188c-3.125,1.213-6.598,1.82-10.419,1.82c-5.096,0-9.571-0.926-13.422-2.776
					c-3.854-1.85-7.053-4.322-9.601-7.416s-4.459-6.673-5.733-10.738c-1.274-4.063-1.911-8.341-1.911-12.831
					c0-4.488,0.637-8.766,1.911-12.831c1.274-4.063,3.185-7.658,5.733-10.783c2.548-3.124,5.747-5.61,9.601-7.462
					c3.852-1.85,8.326-2.775,13.422-2.775c3.094,0,6.111,0.455,9.055,1.365c2.942,0.909,5.61,2.261,8.008,4.049
					c2.396,1.79,4.398,3.99,6.006,6.598c1.607,2.609,2.624,5.612,3.049,9.009h-6.188C81.611,822.422,80.715,820.192,79.473,818.22z"/>
				<path fill="#4E4E4E" d="M139.941,805.253c2.669,0,5.201,0.334,7.599,1.001c2.396,0.668,4.489,1.684,6.279,3.048
					c1.789,1.365,3.215,3.126,4.277,5.278c1.061,2.154,1.593,4.687,1.593,7.599c0,4.126-1.062,7.705-3.185,10.738
					c-2.125,3.034-5.278,4.975-9.464,5.823v0.183c2.123,0.304,3.881,0.864,5.278,1.684c1.395,0.818,2.532,1.865,3.413,3.139
					c0.878,1.274,1.516,2.746,1.911,4.414c0.394,1.669,0.651,3.474,0.774,5.414c0.06,1.093,0.121,2.428,0.182,4.004
					c0.06,1.579,0.182,3.171,0.364,4.778c0.182,1.607,0.469,3.125,0.864,4.55c0.394,1.426,0.924,2.533,1.593,3.321h-6.825
					c-0.364-0.605-0.653-1.35-0.864-2.229c-0.213-0.879-0.364-1.789-0.455-2.73c-0.091-0.939-0.168-1.865-0.228-2.775
					c-0.061-0.909-0.123-1.697-0.182-2.365c-0.122-2.306-0.318-4.596-0.591-6.871c-0.273-2.274-0.851-4.307-1.729-6.097
					c-0.88-1.789-2.154-3.23-3.822-4.322c-1.669-1.093-3.958-1.577-6.871-1.456h-23.478v28.847h-6.188v-64.974H139.941z
					 M139.486,836.102c1.88,0,3.67-0.287,5.369-0.864c1.698-0.576,3.185-1.411,4.459-2.503s2.289-2.411,3.048-3.958
					c0.758-1.547,1.138-3.322,1.138-5.324c0-4.004-1.153-7.157-3.458-9.464c-2.307-2.305-5.824-3.458-10.556-3.458h-23.114v25.571
					H139.486z"/>
				<path fill="#4E4E4E" d="M227.21,805.253v5.277h-38.675v23.479h36.218v5.277h-36.218v25.662h39.13v5.278h-45.318v-64.974H227.21z"
					/>
				<path fill="#4E4E4E" d="M273.709,805.253l25.48,64.974h-6.643l-7.917-20.202h-29.575l-7.826,20.202h-6.552l26.117-64.974H273.709z
					 M282.537,844.746l-12.558-33.306l-13.013,33.306H282.537z"/>
				<path fill="#4E4E4E" d="M361.068,805.253v5.277H338.41v59.696h-6.188V810.53h-22.568v-5.277H361.068z"/>
				<path fill="#4E4E4E" d="M385.275,805.253v64.974h-6.188v-64.974H385.275z"/>
				<path fill="#4E4E4E" d="M409.752,805.253l21.112,58.148h0.182l20.93-58.148h6.552l-24.115,64.974h-7.189l-24.024-64.974H409.752z"
					/>
				<path fill="#4E4E4E" d="M520.59,805.253v5.277h-38.675v23.479h36.218v5.277h-36.218v25.662h39.13v5.278h-45.318v-64.974H520.59z"
					/>
				<path fill="#4E4E4E" d="M582.377,857.214c1.092,2.245,2.594,4.035,4.505,5.369c1.911,1.335,4.17,2.29,6.779,2.866
					c2.607,0.577,5.399,0.864,8.372,0.864c1.697,0,3.549-0.241,5.551-0.728c2.002-0.485,3.868-1.259,5.597-2.321
					c1.729-1.061,3.169-2.426,4.322-4.095c1.152-1.668,1.729-3.686,1.729-6.052c0-1.819-0.41-3.396-1.229-4.731
					c-0.819-1.334-1.881-2.457-3.186-3.367s-2.745-1.652-4.322-2.229c-1.578-0.576-3.125-1.047-4.641-1.41l-14.47-3.55
					c-1.881-0.484-3.717-1.092-5.505-1.819c-1.79-0.729-3.353-1.698-4.687-2.912c-1.335-1.213-2.412-2.699-3.23-4.459
					c-0.819-1.759-1.229-3.913-1.229-6.461c0-1.577,0.303-3.427,0.91-5.551c0.605-2.123,1.743-4.125,3.412-6.007
					c1.668-1.879,3.959-3.472,6.87-4.777c2.912-1.304,6.644-1.956,11.193-1.956c3.215,0,6.279,0.425,9.191,1.273
					c2.912,0.851,5.46,2.125,7.644,3.822c2.185,1.699,3.928,3.808,5.232,6.324c1.304,2.519,1.957,5.446,1.957,8.782h-6.188
					c-0.122-2.487-0.683-4.655-1.684-6.507c-1.001-1.85-2.306-3.396-3.913-4.641c-1.607-1.243-3.458-2.185-5.551-2.821
					s-4.293-0.955-6.598-0.955c-2.124,0-4.172,0.227-6.143,0.682c-1.972,0.455-3.701,1.184-5.187,2.185
					c-1.487,1.001-2.685,2.32-3.595,3.958c-0.91,1.639-1.365,3.672-1.365,6.098c0,1.517,0.258,2.836,0.773,3.958
					c0.516,1.123,1.229,2.079,2.139,2.866c0.91,0.79,1.957,1.427,3.14,1.911c1.183,0.486,2.441,0.881,3.776,1.184l15.834,3.913
					c2.305,0.606,4.474,1.351,6.507,2.229c2.032,0.88,3.822,1.972,5.369,3.275c1.547,1.306,2.76,2.898,3.64,4.777
					c0.879,1.882,1.319,4.156,1.319,6.825c0,0.729-0.076,1.699-0.228,2.912c-0.151,1.215-0.516,2.503-1.092,3.867
					c-0.577,1.365-1.396,2.746-2.457,4.141c-1.062,1.396-2.518,2.655-4.368,3.776c-1.851,1.124-4.141,2.034-6.87,2.73
					c-2.73,0.696-6.006,1.047-9.828,1.047s-7.371-0.441-10.646-1.32c-3.276-0.878-6.067-2.229-8.372-4.049
					c-2.307-1.82-4.081-4.155-5.324-7.007c-1.244-2.852-1.774-6.279-1.592-10.283h6.188
					C580.77,852.179,581.285,854.97,582.377,857.214z"/>
				<path fill="#4E4E4E" d="M691.212,805.253v5.277h-22.659v59.696h-6.188V810.53h-22.568v-5.277H691.212z"/>
				<path fill="#4E4E4E" d="M714.325,805.253v40.222c0,3.763,0.424,6.962,1.274,9.601c0.849,2.639,2.093,4.793,3.731,6.461
					c1.638,1.669,3.64,2.882,6.006,3.64c2.366,0.76,5.034,1.138,8.008,1.138c3.033,0,5.733-0.378,8.099-1.138
					c2.366-0.758,4.368-1.971,6.006-3.64c1.639-1.668,2.881-3.822,3.731-6.461c0.849-2.639,1.274-5.838,1.274-9.601v-40.222h6.188
					v41.587c0,3.337-0.471,6.506-1.41,9.509c-0.941,3.004-2.428,5.628-4.459,7.872c-2.033,2.245-4.642,4.02-7.826,5.323
					c-3.186,1.304-7.053,1.957-11.603,1.957c-4.49,0-8.326-0.653-11.512-1.957c-3.185-1.304-5.794-3.078-7.826-5.323
					c-2.033-2.244-3.519-4.868-4.459-7.872c-0.941-3.003-1.41-6.172-1.41-9.509v-41.587H714.325z"/>
				<path fill="#4E4E4E" d="M805.053,805.253c9.888,0.243,17.335,3.019,22.34,8.326c5.005,5.31,7.508,13.362,7.508,24.16
					c0,10.8-2.503,18.853-7.508,24.161s-12.452,8.084-22.34,8.326h-22.478v-64.974H805.053z M801.958,864.948
					c4.671,0,8.691-0.5,12.058-1.501c3.367-1.001,6.143-2.594,8.327-4.777c2.184-2.185,3.79-5.005,4.822-8.463
					c1.031-3.458,1.548-7.613,1.548-12.468c0-4.853-0.517-9.009-1.548-12.467c-1.032-3.458-2.639-6.279-4.822-8.463
					c-2.185-2.184-4.96-3.776-8.327-4.777c-3.366-1.001-7.387-1.502-12.058-1.502h-13.194v54.418H801.958z"/>
				<path fill="#4E4E4E" d="M863.02,805.253v64.974h-6.188v-64.974H863.02z"/>
				<path fill="#4E4E4E" d="M886.496,824.908c1.274-4.063,3.186-7.658,5.733-10.783c2.548-3.124,5.747-5.61,9.601-7.462
					c3.852-1.85,8.326-2.775,13.422-2.775c5.097,0,9.556,0.926,13.377,2.775c3.822,1.852,7.007,4.338,9.556,7.462
					c2.548,3.125,4.459,6.72,5.732,10.783c1.274,4.065,1.911,8.343,1.911,12.831c0,4.49-0.637,8.768-1.911,12.831
					c-1.273,4.065-3.185,7.645-5.732,10.738c-2.549,3.094-5.733,5.566-9.556,7.416c-3.821,1.851-8.28,2.776-13.377,2.776
					c-5.096,0-9.57-0.926-13.422-2.776c-3.854-1.85-7.053-4.322-9.601-7.416s-4.459-6.673-5.733-10.738
					c-1.273-4.063-1.911-8.341-1.911-12.831C884.585,833.251,885.223,828.974,886.496,824.908z M892.184,848.159
					c0.94,3.428,2.396,6.492,4.368,9.19c1.971,2.7,4.505,4.869,7.599,6.507s6.794,2.457,11.102,2.457
					c4.307,0,7.992-0.819,11.057-2.457c3.062-1.638,5.581-3.807,7.553-6.507c1.971-2.698,3.427-5.763,4.368-9.19
					c0.94-3.427,1.411-6.9,1.411-10.42c0-3.578-0.471-7.066-1.411-10.465c-0.941-3.396-2.397-6.445-4.368-9.146
					c-1.972-2.698-4.49-4.868-7.553-6.506c-3.064-1.639-6.75-2.457-11.057-2.457c-4.308,0-8.008,0.818-11.102,2.457
					c-3.094,1.638-5.628,3.808-7.599,6.506c-1.973,2.7-3.428,5.749-4.368,9.146c-0.941,3.398-1.41,6.887-1.41,10.465
					C890.773,841.259,891.242,844.732,892.184,848.159z"/>
			</g>
			<g>
				<path fill="#4E4E4E" d="M113.793,321.172L51.372,421.645h-9.406l190.686-305.268h8.551l56.436,305.268h-8.551l-18.812-100.473
					H113.793z M235.216,128.349h-0.855l-115.01,184.272h149.641L235.216,128.349z"/>
				<path fill="#4E4E4E" d="M551.597,116.377c8.551,0,17.382,1.002,26.508,2.993c9.118,1.998,17.455,5.631,25.011,10.902
					c7.549,5.277,13.749,12.613,18.599,22.019c4.843,9.406,7.121,21.377,6.841,35.914c-0.287,13.681-2.713,25.866-7.269,36.555
					c-4.562,10.688-10.762,19.814-18.599,27.363c-7.843,7.556-17.102,13.328-27.79,17.315c-10.688,3.995-22.446,6.133-35.272,6.414
					v0.855c15.392,2.285,27.002,8.484,34.845,18.598c7.836,10.121,11.61,25.011,11.33,44.679c-0.287,7.983-0.574,16.106-0.855,24.37
					c-0.287,8.27-0.574,16.674-0.854,25.225c0,5.418,0.28,10.835,0.854,16.247c0.568,5.418,1.711,10.689,3.421,15.819h-8.551
					c-1.998-5.411-3.28-10.755-3.848-16.033c-0.575-5.271-0.855-10.755-0.855-16.46c0.28-8.264,0.567-16.387,0.855-24.37
					c0.28-7.976,0.708-16.247,1.282-24.797c0.28-13.107-1.644-23.655-5.771-31.639c-4.136-7.976-9.406-14.176-15.819-18.598
					c-6.413-4.416-13.401-7.409-20.95-8.979c-7.556-1.563-14.61-2.352-21.163-2.352H408.796l-29.928,143.228h-8.124l63.277-305.268
					H551.597z M513.545,269.866c8.551,0,18.879-0.708,30.997-2.138c12.111-1.423,23.729-4.917,34.845-10.475
					s20.589-13.748,28.432-24.583c7.836-10.829,11.897-25.653,12.186-44.465c0.28-14.25-1.998-25.506-6.841-33.776
					c-4.851-8.264-10.902-14.603-18.171-19.026c-7.269-4.416-15.111-7.268-23.515-8.551c-8.411-1.283-16.033-1.924-22.874-1.924
					H441.717l-30.355,144.938H513.545z"/>
				<path fill="#4E4E4E" d="M696.315,362.857c4.703,12.399,11.824,22.874,21.377,31.425c9.547,8.551,21.164,15.038,34.845,19.453
					c13.682,4.422,28.786,6.627,45.32,6.627c8.551,0,18.599-1.069,30.142-3.207c11.544-2.138,22.446-6.126,32.708-11.971
					c10.261-5.839,18.952-14.036,26.08-24.584c7.121-10.542,10.688-24.223,10.688-41.044c0-11.396-2.498-20.803-7.482-28.218
					c-4.99-7.409-11.477-13.682-19.453-18.812c-7.983-5.131-17.102-9.333-27.363-12.613c-10.261-3.273-20.809-6.48-31.638-9.62
					c-10.836-3.133-21.378-6.554-31.639-10.261c-10.261-3.701-19.387-8.337-27.363-13.896c-7.982-5.558-14.47-12.465-19.453-20.736
					c-4.99-8.264-7.481-18.525-7.481-30.783c0.28-15.104,3.42-28.071,9.405-38.907c5.986-10.829,13.822-19.667,23.516-26.508
					c9.687-6.841,20.803-11.898,33.349-15.178c12.539-3.273,25.365-4.917,38.479-4.917c15.96,0,30.496,1.71,43.61,5.131
					c13.106,3.42,24.296,8.912,33.562,16.46c9.26,7.555,16.247,17.315,20.95,29.287s6.479,26.508,5.345,43.61h-8.552
					c1.136-15.959-0.501-29.354-4.916-40.189c-4.423-10.829-10.902-19.667-19.454-26.508c-8.551-6.841-18.885-11.757-30.997-14.75
					c-12.118-2.993-25.298-4.489-39.548-4.489c-11.69,0-23.234,1.43-34.631,4.276c-11.403,2.853-21.591,7.415-30.569,13.681
					c-8.979,6.273-16.32,14.256-22.019,23.943c-5.705,9.693-8.698,21.377-8.979,35.059c-0.287,11.116,1.99,20.382,6.841,27.791
					c4.843,7.415,11.256,13.615,19.239,18.598c7.977,4.99,17.102,9.192,27.363,12.613c10.261,3.42,20.803,6.7,31.638,9.833
					c10.829,3.14,21.444,6.56,31.853,10.261c10.401,3.708,19.667,8.411,27.79,14.109c8.124,5.705,14.677,12.686,19.667,20.95
					c4.984,8.271,7.482,18.531,7.482,30.783c0,17.676-3.634,32.28-10.902,43.824c-7.269,11.543-16.394,20.669-27.363,27.363
					c-10.976,6.7-22.733,11.33-35.272,13.895c-12.546,2.565-24.089,3.848-34.631,3.848c-17.102,0-32.994-2.138-47.672-6.413
					c-14.683-4.276-27.296-10.903-37.837-19.881c-10.549-8.979-18.458-20.235-23.729-33.776c-5.277-13.535-7.055-29.567-5.344-48.099
					h8.551C690.116,336.283,691.612,350.458,696.315,362.857z"/>
			</g>
		</g>
		<g>
			<path fill="#4E4E4E" d="M51.543,902.366c1.8,0,3.53,0.171,5.19,0.51c1.66,0.341,3.12,0.921,4.38,1.74c1.26,0.82,2.27,1.9,3.03,3.24
				c0.759,1.34,1.14,3.01,1.14,5.01c0,1.12-0.18,2.211-0.54,3.27c-0.36,1.061-0.87,2.021-1.53,2.88c-0.66,0.861-1.44,1.591-2.34,2.19
				s-1.911,1.02-3.03,1.26v0.12c2.76,0.36,4.959,1.491,6.6,3.39c1.64,1.9,2.46,4.251,2.46,7.051c0,0.681-0.06,1.45-0.18,2.31
				c-0.12,0.86-0.36,1.74-0.72,2.64c-0.36,0.9-0.88,1.791-1.56,2.671c-0.681,0.88-1.59,1.649-2.73,2.31c-1.14,0.66-2.541,1.2-4.2,1.62
				c-1.661,0.42-3.651,0.63-5.97,0.63h-18.12v-42.84H51.543z M51.543,921.146c1.64,0,3.06-0.189,4.26-0.57c1.2-0.38,2.199-0.9,3-1.561
				c0.799-0.659,1.399-1.43,1.8-2.31c0.399-0.879,0.6-1.819,0.6-2.82c0-5.359-3.22-8.04-9.66-8.04h-14.04v15.301H51.543z
				 M51.543,941.726c1.52,0,2.96-0.129,4.32-0.39c1.359-0.26,2.56-0.729,3.6-1.41c1.04-0.68,1.86-1.59,2.46-2.729
				c0.6-1.141,0.9-2.57,0.9-4.29c0-2.76-0.971-4.83-2.91-6.21c-1.941-1.38-4.73-2.07-8.37-2.07h-14.04v17.1H51.543z"/>
			<path fill="#4E4E4E" d="M143.522,902.366v3.479h-25.5v15.48h23.88v3.479h-23.88v16.92h25.8v3.48h-29.88v-42.84H143.522z"/>
			<path fill="#4E4E4E" d="M189.662,902.366l13.92,38.34h0.12l13.8-38.34h4.32l-15.9,42.84h-4.74l-15.84-42.84H189.662z"/>
			<path fill="#4E4E4E" d="M295.681,902.366v3.479h-25.5v15.48h23.88v3.479h-23.88v16.92h25.8v3.48h-29.88v-42.84H295.681z"/>
			<path fill="#4E4E4E" d="M361.8,902.366c1.76,0,3.429,0.22,5.01,0.66c1.58,0.44,2.959,1.109,4.14,2.01
				c1.18,0.9,2.12,2.061,2.82,3.479c0.699,1.421,1.05,3.091,1.05,5.011c0,2.721-0.7,5.08-2.1,7.08c-1.4,2-3.48,3.28-6.24,3.84v0.12
				c1.399,0.2,2.559,0.569,3.48,1.109c0.919,0.54,1.669,1.23,2.25,2.07c0.579,0.84,1,1.811,1.26,2.91c0.26,1.101,0.43,2.29,0.51,3.569
				c0.039,0.721,0.08,1.601,0.12,2.641c0.039,1.04,0.12,2.091,0.24,3.149c0.12,1.061,0.31,2.062,0.57,3
				c0.26,0.94,0.609,1.671,1.05,2.19h-4.5c-0.24-0.399-0.43-0.89-0.57-1.47c-0.141-0.58-0.24-1.18-0.3-1.8s-0.111-1.23-0.15-1.83
				c-0.041-0.601-0.081-1.12-0.12-1.561c-0.081-1.52-0.21-3.03-0.39-4.53c-0.18-1.5-0.561-2.839-1.14-4.02
				c-0.581-1.18-1.42-2.13-2.52-2.85c-1.101-0.721-2.61-1.04-4.53-0.96h-15.48v19.02h-4.08v-42.84H361.8z M361.5,922.706
				c1.239,0,2.419-0.189,3.54-0.57c1.119-0.379,2.1-0.93,2.94-1.649c0.84-0.721,1.509-1.59,2.01-2.61c0.5-1.02,0.75-2.189,0.75-3.51
				c0-2.641-0.76-4.72-2.28-6.24c-1.521-1.52-3.84-2.28-6.96-2.28h-15.24v16.86H361.5z"/>
			<path fill="#4E4E4E" d="M426.78,902.366v39.359h24v3.48H422.7v-42.84H426.78z"/>
			<path fill="#4E4E4E" d="M490.559,902.366h4.8l14.1,21.72l14.041-21.72h4.859l-16.92,25.2v17.64h-4.08v-17.64L490.559,902.366z"/>
			<path fill="#4E4E4E" d="M633.84,902.366v18.6h25.439v-18.6h4.08v42.84h-4.08v-20.76H633.84v20.76h-4.08v-42.84H633.84z"/>
			<path fill="#4E4E4E" d="M716.879,902.366v42.84h-4.08v-42.84H716.879z"/>
			<path fill="#4E4E4E" d="M770.398,902.366v39.359h24v3.48h-28.08v-42.84H770.398z"/>
			<path fill="#4E4E4E" d="M843.117,902.366v39.359h24v3.48h-28.08v-42.84H843.117z"/>
			<path fill="#4E4E4E" d="M914.695,936.626c0.721,1.48,1.711,2.661,2.971,3.54c1.26,0.88,2.75,1.511,4.471,1.89
				c1.719,0.381,3.559,0.57,5.52,0.57c1.119,0,2.34-0.159,3.66-0.479s2.549-0.83,3.689-1.53c1.141-0.699,2.09-1.6,2.85-2.7
				c0.76-1.1,1.141-2.43,1.141-3.99c0-1.2-0.27-2.239-0.811-3.12c-0.539-0.879-1.24-1.619-2.1-2.22c-0.861-0.6-1.811-1.089-2.85-1.47
				c-1.041-0.38-2.061-0.69-3.061-0.93l-9.539-2.341c-1.24-0.319-2.451-0.72-3.631-1.199c-1.18-0.48-2.211-1.12-3.09-1.921
				c-0.881-0.799-1.59-1.779-2.131-2.939c-0.539-1.16-0.809-2.58-0.809-4.26c0-1.04,0.199-2.26,0.6-3.66
				c0.398-1.399,1.148-2.72,2.25-3.96c1.1-1.239,2.609-2.29,4.529-3.15c1.92-0.859,4.381-1.29,7.381-1.29
				c2.119,0,4.141,0.28,6.061,0.84c1.92,0.561,3.6,1.401,5.039,2.521c1.439,1.12,2.59,2.511,3.449,4.17
				c0.861,1.66,1.291,3.591,1.291,5.79h-4.08c-0.08-1.64-0.449-3.069-1.109-4.29c-0.66-1.22-1.521-2.239-2.58-3.06
				c-1.061-0.82-2.281-1.44-3.66-1.86c-1.381-0.42-2.83-0.63-4.35-0.63c-1.402,0-2.752,0.149-4.051,0.45
				c-1.301,0.3-2.439,0.779-3.42,1.439s-1.77,1.53-2.371,2.61c-0.6,1.08-0.898,2.42-0.898,4.02c0,1.001,0.17,1.87,0.51,2.61
				s0.811,1.37,1.41,1.89c0.6,0.521,1.289,0.94,2.07,1.26c0.779,0.321,1.609,0.581,2.488,0.78l10.441,2.58
				c1.52,0.4,2.949,0.891,4.289,1.47c1.34,0.581,2.52,1.301,3.541,2.16c1.02,0.861,1.818,1.911,2.398,3.15
				c0.58,1.24,0.871,2.74,0.871,4.5c0,0.479-0.051,1.12-0.15,1.92c-0.1,0.801-0.34,1.65-0.721,2.55c-0.379,0.9-0.92,1.811-1.619,2.73
				c-0.701,0.92-1.66,1.75-2.881,2.489c-1.219,0.741-2.729,1.341-4.529,1.801c-1.799,0.459-3.959,0.689-6.48,0.689
				c-2.52,0-4.859-0.29-7.02-0.87c-2.16-0.579-4-1.47-5.52-2.67c-1.521-1.2-2.691-2.739-3.51-4.62c-0.82-1.879-1.17-4.14-1.051-6.779
				h4.08C913.635,933.307,913.977,935.146,914.695,936.626z"/>
		</g>
		<g>
		</g>
		<g>
		</g>
		<g>
		</g>
		<g>
		</g>
		<g>
		</g>
		<g>
		</g>
		</svg>
	
		<nav>
		
			<ul>
				<li><span class="title">Latest Projects</span></li>
				
				<?php
					global $post;
					$args = array( 'numberposts' => 6, 'category' => 7 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<li><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
				<?php endforeach; ?>

				<li><span class="title">Mock Ups <span>(Or otherwise dead projects)</span></span></li>
				
				<?php
					global $post;
					$args = array( 'numberposts' => 6, 'category' => 8 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<li><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
				<?php endforeach; ?>

				<li><span class="title">Services</span></li>
				<li><span>Design/Development</span></li>
				<li><span>Email Marketing</span></li>
				<li><span>Social Media</span></li>
				<li><span>Graphic Design</span></li>
				<li><span>Hosting</span></li>
			</ul>
		</nav>
	
	</header>
	
	<section>
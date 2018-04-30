<?php

// Add Floodlight tags

function hook_fl_tags()
{

    global $post;

    if ($post->ID == 7990):?>
        <!-- Facebook Pixel Code -->
        <script>

            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ?

                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };

                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';

                n.queue = [];
                t = b.createElement(e);
                t.async = !0;

                t.src = v;
                s = b.getElementsByTagName(e)[0];

                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',

                'https://connect.facebook.net/en_US/fbevents.js');

            fbq('init', '215497545493480');

            fbq('track', 'PageView');

        </script>

        <noscript>
            <img height="1" width="1" src="https://www.facebook.com/tr?id=215497545493480&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

        <!--
            Start of DoubleClick Floodlight Tag: Please do not remove
            Activity name of this tag: IM_Advice-Digital-Resilience-Toolkit
            URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/advice/digital-resilience-toolkit/
            This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
            Creation Date: 04/16/2018
            -->
        <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
            <iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
				
	<?php
    endif;

    // Check if the page is the Interactive Guide - https://www.internetmatters.org/parental-controls/interactive-guide/
    if ($post->ID == 47): ?>

		<!--
		Start of DoubleClick Floodlight Tag: Please do not remove
		Activity name of this tag: IM_Advice-0-5
		URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/advice/0-5/
		This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
		Creation Date: 04/24/2018
		-->
		<script type="text/javascript">
		var axel = Math.random() + "";
		var a = axel * 10000000000000;
		document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad00;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
		</script>
		<noscript>
		<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad00;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
		</noscript>
		<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
	<?php
    endif;

    // Check if the page is the Interactive Guide - https://www.internetmatters.org/parental-controls/interactive-guide/
    if ($post->ID == 49): ?>

		<!--
		Start of DoubleClick Floodlight Tag: Please do not remove
		Activity name of this tag: IM_Advice-6-10
		URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/advice/6-10/
		This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
		Creation Date: 04/24/2018
		-->
		<script type="text/javascript">
		var axel = Math.random() + "";
		var a = axel * 10000000000000;
		document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad002;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
		</script>
		<noscript>
		<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad002;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
		</noscript>
		<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
	<?php
    endif;

    // Check if the page is the Interactive Guide - https://www.internetmatters.org/parental-controls/interactive-guide/
    if ($post->ID == 51): ?>

		<!--
		Start of DoubleClick Floodlight Tag: Please do not remove
		Activity name of this tag: IM_Advice-11-13
		URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/advice/11-13/
		This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
		Creation Date: 04/24/2018
		-->
		<script type="text/javascript">
		var axel = Math.random() + "";
		var a = axel * 10000000000000;
		document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad000;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
		</script>
		<noscript>
		<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad000;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
		</noscript>
		<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
	<?php
    endif;

    // Check if the page is the Interactive Guide - https://www.internetmatters.org/parental-controls/interactive-guide/
    if ($post->ID == 53): ?>
		<!--
		Start of DoubleClick Floodlight Tag: Please do not remove
		Activity name of this tag: IM_Advice-14plus
		URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/advice/14plus/
		This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
		Creation Date: 04/24/2018
		-->
		<script type="text/javascript">
		var axel = Math.random() + "";
		var a = axel * 10000000000000;
		document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad001;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
		</script>
		<noscript>
		<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_ad001;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
		</noscript>
		<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
        <?php
    endif;

    // Check if the page is the Interactive Guide - https://www.internetmatters.org/parental-controls/interactive-guide/
    if ($post->ID == 75): ?>

        <!--
        Start of DoubleClick Floodlight Tag: Please do not remove
        Activity name of this tag: IM_ParentalControls
        URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/parental-controls/interactive-guide/
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 10/10/2017
        -->
        <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_pa0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
            <iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_pa0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
    <?php endif;

    // Check if the page is the Social Media - https://www.internetmatters.org/advice/social-media/
    if ($post->ID == 3650): ?>
        <!--
        Start of DoubleClick Floodlight Tag: Please do not remove
        Activity name of this tag: IM_SocialMedia
        URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/advice/social-media/
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 10/10/2017
        -->
        <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_so0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
            <iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_so0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
    <?php endif;

    // Check if the page is the Cyberbullying - https://www.internetmatters.org/issues/cyberbullying/
    if ($post->ID == 6409): ?>
        <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_cy0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
            <iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_cy0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
    <?php endif;

    // Check if the page is - https://www.internetmatters.org/hub/esafety-news/new-e-safety-app-for-parents-and-children/

    if ($post->ID == 3134): ?>
        <!--
        Start of DoubleClick Floodlight Tag: Please do not remove
        Activity name of this tag: IM_Hub
        URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/hub/esafety-news/new-e-safety-app-for-parents-and-children/
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 10/10/2017
        -->
        <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_hu0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
            <iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_hu0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
    <?php endif;

    // Check if the page is - https://www.internetmatters.org/issues/cyberbullying/stop-speak-support/

    if ($post->ID == 7606): ?>
        <!--
        Start of DoubleClick Floodlight Tag: Please do not remove
        Activity name of this tag: IM_CodeofConduct
        URL of the web page where the tag is expected to be placed: http://www.internetmatters.org/StopSpeakSupport
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 11/10/2017
        -->
        <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_co0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
            <iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_co0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
    <?php endif;

    // Check if the page is - https://www.internetmatters.org/hub/guidance/e-safety-checklist-getting-your-kids-tech-devices-set-up-safe/

    if ($post->ID == 3316): ?>
        <!--
        Start of DoubleClick Floodlight Tag: Please do not remove
        Activity name of this tag: IM_Setupsafe
        URL of the web page where the tag is expected to be placed: https://www.internetmatters.org/hub/guidance/e-safety-checklist-getting-your-kids-tech-devices-set-up-safe/
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 11/10/2017
        -->
        <script type="text/javascript">
            var axel = Math.random() + "";
            var a = axel * 10000000000000;
            document.write('<iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_se0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
            <iframe src="https://6930326.fls.doubleclick.net/activityi;src=6930326;type=im_010;cat=im_se0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of DoubleClick Floodlight Tag: Please do not remove -->
    <?php endif;
}

add_action('wp_head', 'hook_fl_tags');
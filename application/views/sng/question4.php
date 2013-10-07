<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mobile  internet  Survey</title>

    <script type="text/javascript">
        function MM_swapImgRestore() { //v3.0
            var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
        }
        function MM_preloadImages() { //v3.0
            var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
                var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
        }

        function MM_findObj(n, d) { //v4.01
            var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
                d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
            if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
            for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
            if(!x && d.getElementById) x=d.getElementById(n); return x;
        }

        function MM_swapImage() { //v3.0
            var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
                if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/default.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/progressbar.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?> js/html5shiv.js"></script>
    <![endif]-->

</head>

<body  onload="MM_preloadImages('<?php echo base_url();?>css/images/buttonv2.jpg')">
<div id="header">

    <div style="width:272px; margin:0 auto; "> <img src="<?php echo base_url();?>css/images/logo.jpg" width="272" height="61" alt=" " /></div>

    <div style="width:229px; margin:0 auto;">
        <div style="position:absolute; margin-top:21px;"><img src="<?php echo base_url();?>css/images/tit_sin.jpg" width="229" height="15" alt="Mobile  internet  Survey" /></div>
    </div>

</div><!--Content for  id "header" Goes Here-->
<div class="container">

    <div id="content">
    <form action="" method="post" class="form-inline">
        <h4 class="form-signin-heading">ඔබට ඇත්තේ පෙරගෙවුම් සම්බන්ධතාවක්ද? පසුගෙවුම් සම්බන්ධතාවක්ද?</h4>
        <div class="radio">
            <input type="radio" name="internet" value="post">පෙරගෙවුම්
        </div>

        <div class="radio">
            <input type="radio" name="internet" value="pre">පසුගෙවුම්
        </div>
        <div id="error"></div>     <!--next button starts here-->
        <div style=" width:80px; margin-top:15px;">
            <div><a href="#"><img src="<?php echo base_url();?>css/images/next.png" onClick="validate_form()" alt="NEXT" width="80" height="36" border="0" /></a></div>
        </div>
        <div style="clear:both;"> </div>
        <!--next button endshere-->

    </form>

    <br><br>


    <div id="progressBar" class="big-green"><div></div></div>

        <input style="margin-top: 20px" class="btn btn-mini btn-primary" type="button" value="Back" onclick="goBack()">
</div>


<div id="footer">
    <div style="margin:0 auto; text-align:center;">
        <p><strong>Copyrights protected :</strong> All the content on this website is copyright protected and can be reproduced only by giving the due courtesy to 'dailymirror.lk'</p>
        <p>Copyright © 2012 Wijeya Newspapers Ltd.</p>
        <div style="height:20px;"> </div>
    </div>
</div>

</div> <!-- /container -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>js/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-transition.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-alert.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-dropdown.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-scrollspy.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-tab.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-tooltip.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-popover.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-button.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-collapse.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-carousel.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>

<script>
    function validate_form(){
        var value = $("input:checked").val();
        var ans1 = "<?php echo $ans1 ?>";
        var ans2 = "<?php echo $ans2 ?>";
        var ans3 = "<?php echo $ans3 ?>"

        if(value==null){
            $('#error').html("කරුණාකර ඔබේ කැමැත්ත තෝරන්න");
        }else{
            window.location ="<?php echo base_url(); ?>sng/question5/" + ans1 + "/"+ans2+ "/" +ans3 +"/"+value ;
        }
    }

    function goBack()
    {
        window.history.back()
    }

</script>
<script type="text/javascript">
    (function() {
        window._pa = window._pa || {};
        // _pa.orderId = "myCustomer@email.com"; // OPTIONAL: attach user email or order ID to conversions
        // _pa.revenue = "19.99"; // OPTIONAL: attach dynamic purchase values to conversions
        var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
        pa.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + "//tag.perfectaudience.com/serve/519c8cb3dfd6fa3950000007.js";
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pa, s);
    })();
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-41117674-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<script type="text/javascript">
    adroll_adv_id = "OWQMCLPEMNC7DBU6CFDAJL";
    adroll_pix_id = "L2Q3WQWSY5AHBIUXQYWQQ3";
    (function () {
        var oldonload = window.onload;
        window.onload = function(){
            __adroll_loaded=true;
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
            if(oldonload){oldonload()}};
    }());
</script>


<script>
    progressBar(50, $('#progressBar'));
    function progressBar(percent, $element) {
        var progressBarWidth = percent * $element.width() / 100;
        $element.find('div').animate({ width: progressBarWidth }, 500).html(percent + "%&nbsp;");
    }

</script>


</body>
</html>
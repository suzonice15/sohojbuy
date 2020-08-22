


<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div>
                    <div class="module-body">
                        <?= get_option('address') ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div>
                    <div class="module-body">
                        <ul class='list-unstyled'>

                            <li><a href="{{url('/')}}/track-your-order" title="About us">Track Order </a></li>
                            <li><a href="{{url('/')}}/faq" title="faq">FAQ</a></li></ul>
                            <li><a href="{{url('/')}}/terms-and-conditions" title="faq">Terms and Conditions</a></li></ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div>
                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a title="Your Account" href="{{url('/')}}/about-us">About us</a></li>
                            <li><a title="Information" href="{{url('/')}}/customer-service">Customer Service</a></li>
                            <li><a title="Information" href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div>
                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="{{url('/')}}/shopping-guide" title="About us">Shopping Guide</a></li>
                            <li class=" last"><a href="{{url('/')}}/contact-us" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container-fluid">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                    <li class="fb pull-left"><a target="_blank" rel="nofollow" href="<?=get_option('facebook')?>" title="Facebook"></a></li>
                    <li class="tw pull-left"><a target="_blank" rel="nofollow" href="<?=get_option('twitter')?>" title="Twitter"></a></li>
                       <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="<?=get_option('linked')?>" title="Linkedin"></a></li>
                    <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="<?=get_option('youtube')?>" title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <h5 style="color:white">@copyright 2018 - <?=date('Y')?> Devoloped by <a  style="color:white" href="" target="_blank">Developed by Jibonpata IT</a></h5>
            </div>
        </div>
    </div>
</footer>


<div id="myModalPopUp" class="modal fade">
    <div class="modal-dialog modal-lg modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" style="color:red;font-size:25px" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


            </div>
            <div class="modal-body">
                <a href="https://www.village-bd.com/asus-laptop-15-x509ja-10th-gen-intel-core-i3-1005g1-4gb-ddr4-1tb-hdd-15-6-inch-fhd-display-finger-print-sensor-slate-grey-notebook-ej050t">

                    <img src="https://www.village-bd.com/uploads/sdfgxfc.jpg" style="width: 100%;">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/bn_IN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="163752650491625"
     logged_in_greeting="আস সালামু আলাইকুম, আপনাকে কিভাবে সাহায্য করতে পারি?"
     logged_out_greeting="আস সালামু আলাইকুম, আপনাকে কিভাবে সাহায্য করতে পারি?">
</div>

<a id="button_move_to_top"> </a>

<script>

    jQuery(document).ready(function () {

        var btn = jQuery('#button_move_to_top');


        jQuery(window).scroll(function (e) {


            // OR  $(window).scroll(function() {
            var scroll = jQuery(document).scrollTop();


            if (scroll > 30) {

                btn.show();
            } else {


                btn.hide();
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();

            jQuery('html, body').animate({scrollTop: 0}, '300');
        });

    });

</script>

<script src="{{ asset('assets/font_end/')}}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/bootstrap-hover-dropdown.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/echo.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/jquery.easing-1.3.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/bootstrap-slider.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/font_end/')}}/js/lightbox.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/wow.min.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/scripts.js"></script>
<script src="{{ asset('assets/font_end/')}}/js/jquery_cokie.js"></script>

<script   src="{{ asset('assets/font_end/')}}/js/stellarnav.js"></script>


<script type="text/javascript">
    $(document).ready(function($) {
        jQuery('.stellarnav').stellarNav({
            theme: 'dark',
            breakpoint: 960,
            position: 'left',
            phoneBtn: '<?=get_option('phone')?>',
            locationBtn: '<?=get_option('map')?>'
        });
    });
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
 <script>
    $(document).ready(function(){
        //$.cookie("popup_open", "Aurelio");
        // var popub_modal= $.cookie("popup_open");
        //   if(typeof popub_modal === "undefined") {
        //     $("#myModalPopUp").modal('show');
        // } else {
        //
        //
        //     $("#myModalPopUp").modal('hide');
        // }
        //
        // $.cookie('popup_open', 'sujon', { expires: 1, path: '/' });
        $("#myModalPopUp").modal('hide');
        setTimeout(function(){

            $("#myModalPopUp").modal('hide');
        }, 5000);
    });
</script>
<script>
 //   $("#zoom_04").ezPlus();
    $('.main_parent_category').on('click',function () {
        let href= this.href;
       window.open(href,'_self')
    });
    $('body').click(function () {
        $("#search .dropdown-menu").hide();
    })
    </script>



<script>

    $('#searc_query').on('input',function () {
       var search_query=$(this).val();
        if (search_query.length >= 1) {


            jQuery.ajax({
                type:"GET",
                url: "{{ url('search_engine/')}}?search_query="+search_query,
                success:function(data)
                {
                    $("#search .dropdown-menu").show();
                    jQuery("#search .dropdown-menu").html(data.html);
                }
            });
        } else {
            jQuery(".dropdown-menu").html('');

        }
    });
    $(document).on('click','.add-to-wishlist',function () {
        let product_id=  $(this).data("product_id"); // will return the number 123
        $(this).css("background-color", "red");

        $.ajax({
            type:"GET",
            url:"{{url('add-to-wishlist')}}?product_id="+product_id,
            success:function(data)
            {


            }
        })

    })
</script>
<script>
    $(document).on('click','.add_to_cart',function () {
        let product_id=  $(this).data("product_id"); // will return the number 123
        let picture=  $(this).data("picture"); // will return the number 123

        let quntity =$('#quantity_of_sell').val();

        if(typeof quntity ==='undefined'){
            quntity=1;
        } else {
            quntity=quntity;
        }

        $.ajax({
            type:"GET",
            url:"{{url('add-to-cart')}}?product_id="+product_id+"&picture="+picture+"&quntity="+quntity,

            success:function(data)
            {

                 $('body .count').text(data.result.count);
                 $('body .value').text(data.result.total);
            }
        })

    })
</script>
<script>
    $(document).on('click','.buy-now-cart',function () {
        let product_id=  $(this).data("product_id"); // will return the number 123
        let picture=  $(this).data("picture"); // will return the number 123
        let quntity =$('#quantity_of_sell').val();

        if(typeof quntity ==='undefined'){
            quntity=1;
        } else {
            quntity=quntity;
        }
         $.ajax({
            type:"GET",
             url:"{{url('add-to-cart')}}?product_id="+product_id+"&picture="+picture+"&quntity="+quntity,
            success:function(data)
            {
                 window.location.assign("{{ url('/') }}/checkout")
                $('body .count').text(data.result.count);
                $('body .value').text(data.result.total);
            }
        })

    })
</script>

</body>
</html>


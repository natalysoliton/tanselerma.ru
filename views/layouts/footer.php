    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">© 2016 Море икры</p>
                <p class="pull-left"> Телефон
                <p class="pull-right">
                <div class="social-icons pull-right"><ul class="nav navbar-nav">
                    <li><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" target="_blank"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk" target="_blank"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" target="_blank"></i></a></li>
                </ul>
                </div>
                    </p>
                </p>

            </div>
         </div>
    </div>


    </div>



</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>
<footer>

<div class="bg">
    <img src="<?php echo GTDU; ?>./assets/images/footer.png" alt="">
</div>
<div class="container">
    <div class="row">
        <button class="scroll-top"><i class=" icon-left-open-outline"></i></button>
        <div class="footer-column col-md-2 col-sm-12 col-12 footer-menu">
            <?php dynamic_sidebar('footer_quick_menu'); ?>

        </div>
        <div class="footer-column col-md-6 col-sm-12 col-12 about-us">
           <?php dynamic_sidebar('footer_aboutus'); ?>
        </div>
        <div class="footer-column col-md-4 col-sm-12 col-12 footer-contact">
            <div class="footer-title">
                <h6>تماس با ما</h6>

            </div>
            <div class="number"><i class="icon-phone-outline"></i><span><?php echo ot_get_option('phone_number'); ?></span></div>
            <div class="email"><i class="icon-mail"></i><span><?php echo ot_get_option('email_add'); ?></span>
             </div>
             <div class="support">
                <div class="item telegram"><a href="https://t.me/farshadkr18"><span>پشتیبانی  تلگرام</span><i class="fab fa-telegram"></i></a></div>
                <div class="item whatsapp"><a href="https://api.whatsapp.com/send?phone=+989137120436"><span>پشتیبانی واتس اپ</span><i class="fab fa-whatsapp"></i></a></div>
             </div>
        </div>
     
    </div>
    <div class="copy-right">
        <span><?php echo ot_get_option('copyright'); ?></span>
    </div>
</div>
</footer>
<?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {

    Typed.new("#typed", {
        stringsElement: document.getElementById('typed-strings'),
        typeSpeed: 80,
        backDelay: 500,
        loop: true,
        contentType: 'html', // or text
        // defaults to null for infinite loop
        loopCount: null,
        callback: function () { foo(); },
        resetCallback: function () { newTyped(); }
    });

    var resetElement = document.querySelector('.reset');
    if (resetElement) {
        resetElement.addEventListener('click', function () {
            document.getElementById('typed')._typed.reset();
        });
    }

});

function newTyped() { /* A new typed object */ }

function foo() { console.log("Callback"); }

</script>
</body>

</html>
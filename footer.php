<?php if ( ! $pjax) { ?>
    </section>
    <script type="application/javascript" src="js/jquery.min.js"></script>
    <script type="application/javascript" src="js/jquery.pjax.js"></script>
    <script type="application/javascript">
        $(document).ready(function(){

            $('a').click(function(e) {
                e.preventDefault();
                $.pjax({url: this.href, container: '#content'});
            });

        });
    </script>
    </body>
    </html>
<? } ?>
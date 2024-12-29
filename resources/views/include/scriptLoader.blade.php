<!-- ПреЛоадер -->
    <script type="text/javascript">
        window.onload = function() {
            let preloader = document.getElementById('loaderArea');
            preloader.classList.add('hide-preloader');
            setInterval(function() {
                preloader.classList.add('preloader-hidden');
            }, 900);
        }
    </script>
<!-- ПреЛоадер -->
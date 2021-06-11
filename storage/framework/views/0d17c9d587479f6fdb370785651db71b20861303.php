<header class="sticky-header">
    <div class="container py-2">
        <div class="row remove-padding-margin velocity-divide-page">
            <logo-component add-class="navbar-brand"></logo-component>
            <searchbar-component></searchbar-component>
        </div>
    </div>
</header>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        (() => {
            document.addEventListener('scroll', e => {
                scrollPosition = Math.round(window.scrollY);

                if (scrollPosition > 50){
                    document.querySelector('header').classList.add('header-shadow');
                } else {
                    document.querySelector('header').classList.remove('header-shadow');
                }
            });
        })()
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/layouts/header/index.blade.php ENDPATH**/ ?>
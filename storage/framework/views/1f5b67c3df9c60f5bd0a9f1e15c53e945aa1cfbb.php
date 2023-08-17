<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Font Awsome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    JoseDaPizza
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('welcome_dashboards.loginAsUser')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('welcome_dashboards.registerUser')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(Auth::guard('web')->check()): ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::guard('web')->user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="<?php echo e(route('home')); ?>">
                                    <?php echo e(__('welcome_dashboards.homeUser')); ?>

                                    </a>

                                    <a class="dropdown-item" href="<?php echo e(route('user.logout')); ?>"
                                        onclick="event.preventDefault();
                                                    document.getElementById('user-logout-form').submit();">
                                        <?php echo e(__('welcome_dashboards.logout')); ?>

                                    </a>

                                    <form id="user-logout-form" action="<?php echo e(route('user.logout')); ?>" method="POST"
                                            style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if(Auth::guard('admin')->check()): ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::guard('admin')->user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>">
                                    <?php echo e(__('welcome_dashboards.homeAdmin')); ?>

                                    </a>
           
                                    <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"
                                        onclick="event.preventDefault();
                                                    document.getElementById('admin-logout-form').submit();">
                                         <?php echo e(__('welcome_dashboards.logout')); ?>

                                    </a>

                                    <form id="admin-logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST"
                                            style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>

                        
                        <li class="nav-item dropdown">
                            <?php if(Session::get('idioma') == 'pt-br'): ?>
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-BS-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-br"> </span> <?php echo e(__('welcome_dashboards.pt-brLanguage')); ?></a>    
                            <?php else: ?>
                                <?php if((Session::get('idioma') == 'es')): ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-BS-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-es"> </span> <?php echo e(__('welcome_dashboards.esLanguage')); ?></a>    
                                <?php else: ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-BS-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"> </span> <?php echo e(__('welcome_dashboards.enLanguage')); ?></a>    
                                <?php endif; ?>
                            <?php endif; ?>
                            
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item" href="<?php echo e(route('idioma.trocaIdioma', 'pt-br')); ?>"><span class="flag-icon flag-icon-br"> </span> <?php echo e(__('welcome_dashboards.pt-brLanguage')); ?></a>
                                <a class="dropdown-item" href="<?php echo e(route('idioma.trocaIdioma', 'en')); ?>"><span class="flag-icon flag-icon-us"> </span> <?php echo e(__('welcome_dashboards.enLanguage')); ?></a>
                                <a class="dropdown-item" href="<?php echo e(route('idioma.trocaIdioma', 'es')); ?>"><span class="flag-icon flag-icon-es"> </span> <?php echo e(__('welcome_dashboards.esLanguage')); ?></a>
                            </div>
                        </li>   

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/layouts/app.blade.php ENDPATH**/ ?>
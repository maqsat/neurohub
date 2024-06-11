<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo_side')

    <link rel="shortcut icon" href="/assets/img/logo-favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css?ver=2">
    <link rel="stylesheet" href="/assets/css/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/fontawesome/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/plugins/fontawesome/all.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/lightgallery/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/images/loading.gif">
    <link rel="stylesheet" href="/assets/css/plugins/appleple-modal-video/modal-video.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body>
<header class="header">
    <div class="container">
        <a href="/" class="logo">
            <img src="/assets/img/logo.svg" alt="logo">
        </a>
        <nav class="nav">
            <a href="/" class="logo">
                <img src="/assets/img/logo.svg" alt="logo">
            </a>
            <ul>
                <li><a href="#about" class="text">О нас</a></li>
                <li><a href="#diseases" class="text">К нам обращаются</a></li>
                <li><a href="#methods" class="text">Как мы лечим</a></li>
                <li><a href="#doctors" class="text">Наши врачи</a></li>
                <li><a href="#reviews" class="text">Отзывы</a></li>
            </ul>
            <a href="https://wa.me/77085550848?text=Здравствуйте,%20пишу%20из%20сайта%20neurorehab.kz" class="btn btn-primary" target="_blank">Получить консультацию</a>
            <button class="btn btn-close-menu"></button>
        </nav>
        <div class="menu-right">
            <a href="tel:+77085550848" class="tel text-2xl">+7 708 555 08-48</a>
            <div class="social">
                <a href="https://www.instagram.com/neurorehabkz" target="_blank">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="24" fill="#0F85DF"/>
                        <circle cx="24" cy="24" r="24" fill="url(#paint0_radial_1461_3908)"/>
                        <path d="M24.001 11.5556C20.6214 11.5556 20.1971 11.5704 18.8698 11.6307C17.545 11.6914 16.6407 11.9011 15.8495 12.2089C15.0309 12.5267 14.3366 12.9519 13.6449 13.6438C12.9527 14.3356 12.5274 15.0299 12.2086 15.8481C11.9 16.6396 11.6901 17.5443 11.6305 18.8685C11.5711 20.1959 11.5555 20.6202 11.5555 24C11.5555 27.3798 11.5705 27.8026 11.6307 29.1299C11.6917 30.4547 11.9014 31.3591 12.2089 32.1503C12.5269 32.9689 12.9522 33.6631 13.6441 34.3548C14.3356 35.0471 15.0299 35.4733 15.8478 35.7911C16.6397 36.0989 17.5441 36.3086 18.8687 36.3693C20.1961 36.4296 20.62 36.4444 23.9995 36.4444C27.3795 36.4444 27.8023 36.4296 29.1297 36.3693C30.4545 36.3086 31.3598 36.0989 32.1516 35.7911C32.9699 35.4733 33.6631 35.0471 34.3545 34.3548C35.0468 33.6631 35.4719 32.9689 35.7909 32.1507C36.0967 31.3591 36.3068 30.4545 36.369 29.1302C36.4286 27.8029 36.4442 27.3798 36.4442 24C36.4442 20.6202 36.4286 20.1961 36.369 18.8687C36.3068 17.5439 36.0967 16.6397 35.7909 15.8485C35.4719 15.0299 35.0468 14.3356 34.3545 13.6438C33.6624 12.9517 32.9701 12.5265 32.1509 12.209C31.3576 11.9011 30.4527 11.6913 29.1279 11.6307C27.8005 11.5704 27.3779 11.5556 23.9971 11.5556H24.001ZM22.8846 13.7981C23.216 13.7976 23.5857 13.7981 24.001 13.7981C27.3237 13.7981 27.7175 13.8101 29.0296 13.8697C30.2429 13.9252 30.9015 14.1279 31.3401 14.2983C31.9209 14.5238 32.3349 14.7934 32.7702 15.2291C33.2058 15.6647 33.4753 16.0794 33.7015 16.6602C33.8718 17.0983 34.0748 17.7568 34.13 18.9701C34.1896 20.282 34.2026 20.676 34.2026 23.9971C34.2026 27.3183 34.1896 27.7124 34.13 29.0241C34.0745 30.2375 33.8718 30.896 33.7015 31.3342C33.476 31.915 33.2058 32.3285 32.7702 32.7638C32.3347 33.1993 31.9212 33.4689 31.3401 33.6945C30.902 33.8656 30.2429 34.0678 29.0296 34.1233C27.7177 34.1829 27.3237 34.1959 24.001 34.1959C20.6781 34.1959 20.2842 34.1829 18.9725 34.1233C17.7592 34.0673 17.1006 33.8646 16.6616 33.6942C16.0809 33.4686 15.666 33.1991 15.2305 32.7635C14.7949 32.328 14.5254 31.9142 14.2993 31.3332C14.1289 30.895 13.9259 30.2365 13.8707 29.0231C13.8111 27.7113 13.7991 27.3173 13.7991 23.994C13.7991 20.6709 13.8111 20.2789 13.8707 18.967C13.9262 17.7537 14.1289 17.0951 14.2993 16.6565C14.5249 16.0757 14.7949 15.6609 15.2306 15.2254C15.6661 14.7898 16.0809 14.5202 16.6617 14.2942C17.1004 14.1231 17.7592 13.9208 18.9725 13.8651C20.1205 13.8132 20.5654 13.7976 22.8846 13.795V13.7981ZM30.6438 15.8644C29.8193 15.8644 29.1504 16.5327 29.1504 17.3572C29.1504 18.1817 29.8193 18.8505 30.6438 18.8505C31.4682 18.8505 32.1371 18.1817 32.1371 17.3572C32.1371 16.5328 31.4682 15.8639 30.6438 15.8639V15.8644ZM24.001 17.6092C20.4718 17.6092 17.6103 20.4707 17.6103 24C17.6103 27.5293 20.4718 30.3894 24.001 30.3894C27.5303 30.3894 30.3908 27.5293 30.3908 24C30.3908 20.4708 27.5301 17.6092 24.0007 17.6092H24.001ZM24.001 19.8518C26.2919 19.8518 28.1492 21.7089 28.1492 24C28.1492 26.2909 26.2919 28.1482 24.001 28.1482C21.71 28.1482 19.8529 26.2909 19.8529 24C19.8529 21.7089 21.71 19.8518 24.001 19.8518Z" fill="white"/>
                        <defs>
                            <radialGradient id="paint0_radial_1461_3908" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12.75 51.6969) rotate(-90) scale(47.5716 44.2453)">
                                <stop stop-color="#FFDD55"/>
                                <stop offset="0.1" stop-color="#FFDD55"/>
                                <stop offset="0.5" stop-color="#FF543E"/>
                                <stop offset="1" stop-color="#C837AB"/>
                            </radialGradient>
                        </defs>
                    </svg>
                </a>
                <a href="tel:+77085550848">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="24" fill="#18A831"/>
                        <path d="M33.5122 14.475C31.1415 12.1125 27.9805 10.8 24.6439 10.8C17.7073 10.8 12.0878 16.4 12.0878 23.3125C12.0878 25.5 12.7024 27.6875 13.7561 29.525L12 36L18.6732 34.25C20.5171 35.2125 22.5366 35.7375 24.6439 35.7375C31.5805 35.7375 37.2 30.1375 37.2 23.225C37.1122 19.9875 35.8829 16.8375 33.5122 14.475ZM30.7024 27.775C30.439 28.475 29.2098 29.175 28.5951 29.2625C28.0683 29.35 27.3659 29.35 26.6634 29.175C26.2244 29 25.6098 28.825 24.9073 28.475C21.7463 27.1625 19.7268 24.0125 19.5512 23.75C19.3756 23.575 18.2341 22.0875 18.2341 20.5125C18.2341 18.9375 19.0244 18.2375 19.2878 17.8875C19.5512 17.5375 19.9024 17.5375 20.1659 17.5375C20.3415 17.5375 20.6049 17.5375 20.7805 17.5375C20.9561 17.5375 21.2195 17.45 21.4829 18.0625C21.7463 18.675 22.361 20.25 22.4488 20.3375C22.5366 20.5125 22.5366 20.6875 22.4488 20.8625C22.361 21.0375 22.2732 21.2125 22.0976 21.3875C21.9219 21.5625 21.7463 21.825 21.6585 21.9125C21.4829 22.0875 21.3073 22.2625 21.4829 22.525C21.6585 22.875 22.2732 23.8375 23.239 24.7125C24.4683 25.7625 25.4341 26.1125 25.7854 26.2875C26.1366 26.4625 26.3122 26.375 26.4878 26.2C26.6634 26.025 27.278 25.325 27.4537 24.975C27.6293 24.625 27.8927 24.7125 28.1561 24.8C28.4195 24.8875 30 25.675 30.2634 25.85C30.6146 26.025 30.7902 26.1125 30.878 26.2C30.9658 26.4625 30.9659 27.075 30.7024 27.775Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
        <button class="btn btn-menu"></button>
    </div>
</header>

<main>

    @yield('content')

    @if(Route::current()->getName() != 'landing')
        <section class="start" id="start">
        <div class="container">
            <div class="left-block">
                <h2 class="title text-4xl">Начните реабилитацию сейчас</h2>
                <p class="subtitle text-lg">Расскажите, что произошло и в каком состоянии сейчас находится пациент.</p>
                <p class="text text-xs">Мы изучим случай, составим план реабилитации и согласуем с вами дату заезда. Если нужно, организуем транспортировку из другой больницы или города.</p>
            </div>
            <div class="right-block">
                <div class="card">
                    <form action="{{url('order-create')}}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset class="input-form">
                            <legend>Номер телефона</legend>
                            <input type="phone" placeholder="Телефон" id="phone" name="phone">
                        </fieldset>
                        <fieldset class="input-form">
                            <legend>Ваше имя</legend>
                            <input type="phone" placeholder="Введите имя" id="name" name="name">
                        </fieldset>
                        <fieldset class="input-form">
                            <legend>Опишите ситуацию</legend>
                            <input type="text" name="text" placeholder="Как ваше состояние">
                        </fieldset>
                        <div class="input-file-row">
                            <div class="input-file-list"></div>
                        </div>
                        <button class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif
</main>


<footer class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-main">
                <div class="footer-top">
                    <a href="/" class="logo">
                        <img src="/assets/img/logo2.svg" alt="logo">
                    </a>
                    <div class="contact">
                        <a href="tel:+77085550848" class="tel text-2xl">+7 708 555 08-48</a>
                        <div class="social">
                            <a href="https://www.instagram.com/neurorehabkz" target="_blank">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="white"/>
                                    <path d="M24.001 11.5557C20.6214 11.5557 20.1971 11.5705 18.8698 11.6308C17.545 11.6916 16.6407 11.9012 15.8495 12.209C15.0309 12.5268 14.3366 12.952 13.645 13.6439C12.9527 14.3357 12.5275 15.03 12.2086 15.8482C11.9 16.6397 11.6901 17.5444 11.6305 18.8686C11.5711 20.196 11.5556 20.6204 11.5556 24.0001C11.5556 27.3799 11.5705 27.8027 11.6307 29.13C11.6917 30.4549 11.9014 31.3592 12.2089 32.1504C12.527 32.969 12.9522 33.6632 13.6441 34.3549C14.3356 35.0472 15.0299 35.4734 15.8479 35.7912C16.6397 36.099 17.5441 36.3087 18.8687 36.3694C20.1961 36.4297 20.62 36.4446 23.9995 36.4446C27.3795 36.4446 27.8024 36.4297 29.1297 36.3694C30.4545 36.3087 31.3598 36.099 32.1517 35.7912C32.9699 35.4734 33.6631 35.0472 34.3545 34.3549C35.0468 33.6632 35.4719 32.969 35.7909 32.1508C36.0968 31.3592 36.3068 30.4546 36.369 29.1303C36.4286 27.803 36.4442 27.3799 36.4442 24.0001C36.4442 20.6204 36.4286 20.1963 36.369 18.8688C36.3068 17.544 36.0968 16.6398 35.7909 15.8486C35.4719 15.03 35.0468 14.3357 34.3545 13.6439C33.6624 12.9518 32.9701 12.5266 32.1509 12.2091C31.3576 11.9012 30.4528 11.6914 29.1279 11.6308C27.8005 11.5705 27.3779 11.5557 23.9971 11.5557H24.001ZM22.8846 13.7983C23.216 13.7978 23.5857 13.7983 24.001 13.7983C27.3238 13.7983 27.7175 13.8102 29.0296 13.8698C30.2429 13.9253 30.9015 14.128 31.3402 14.2984C31.9209 14.5239 32.335 14.7936 32.7703 15.2292C33.2058 15.6648 33.4754 16.0795 33.7015 16.6603C33.8718 17.0984 34.0748 17.7569 34.1301 18.9702C34.1897 20.2821 34.2026 20.6761 34.2026 23.9972C34.2026 27.3184 34.1897 27.7125 34.1301 29.0243C34.0746 30.2376 33.8718 30.8961 33.7015 31.3343C33.476 31.9151 33.2058 32.3286 32.7703 32.7639C32.3347 33.1994 31.9212 33.469 31.3402 33.6946C30.902 33.8657 30.2429 34.0679 29.0296 34.1234C27.7177 34.183 27.3238 34.196 24.001 34.196C20.6781 34.196 20.2843 34.183 18.9725 34.1234C17.7592 34.0674 17.1006 33.8647 16.6616 33.6944C16.0809 33.4687 15.666 33.1992 15.2305 32.7636C14.7949 32.3281 14.5254 31.9143 14.2993 31.3333C14.1289 30.8951 13.926 30.2366 13.8707 29.0233C13.8111 27.7114 13.7991 27.3174 13.7991 23.9941C13.7991 20.671 13.8111 20.279 13.8707 18.9671C13.9262 17.7538 14.1289 17.0953 14.2993 16.6566C14.5249 16.0758 14.7949 15.661 15.2306 15.2255C15.6662 14.7899 16.0809 14.5203 16.6617 14.2943C17.1004 14.1232 17.7592 13.921 18.9725 13.8652C20.1205 13.8133 20.5654 13.7978 22.8846 13.7951V13.7983ZM30.6438 15.8645C29.8193 15.8645 29.1505 16.5328 29.1505 17.3573C29.1505 18.1818 29.8193 18.8506 30.6438 18.8506C31.4682 18.8506 32.1371 18.1818 32.1371 17.3573C32.1371 16.5329 31.4682 15.864 30.6438 15.864V15.8645ZM24.001 17.6093C20.4718 17.6093 17.6103 20.4708 17.6103 24.0001C17.6103 27.5294 20.4718 30.3895 24.001 30.3895C27.5303 30.3895 30.3908 27.5294 30.3908 24.0001C30.3908 20.4709 27.5301 17.6093 24.0007 17.6093H24.001ZM24.001 19.8519C26.2919 19.8519 28.1492 21.709 28.1492 24.0001C28.1492 26.291 26.2919 28.1483 24.001 28.1483C21.71 28.1483 19.8529 26.291 19.8529 24.0001C19.8529 21.709 21.71 19.8519 24.001 19.8519Z" fill="#556251"/>
                                </svg>
                            </a>
                            <a href="tel:+77085550848">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="white"/>
                                    <path d="M33.5122 14.4748C31.1415 12.1123 27.9805 10.7998 24.6439 10.7998C17.7073 10.7998 12.0878 16.3998 12.0878 23.3123C12.0878 25.4998 12.7024 27.6873 13.7561 29.5248L12 35.9998L18.6732 34.2498C20.5171 35.2123 22.5366 35.7373 24.6439 35.7373C31.5805 35.7373 37.2 30.1373 37.2 23.2248C37.1122 19.9873 35.8829 16.8373 33.5122 14.4748ZM30.7024 27.7748C30.439 28.4748 29.2098 29.1748 28.5951 29.2623C28.0683 29.3498 27.3659 29.3498 26.6634 29.1748C26.2244 28.9998 25.6098 28.8248 24.9073 28.4748C21.7463 27.1623 19.7268 24.0123 19.5512 23.7498C19.3756 23.5748 18.2341 22.0873 18.2341 20.5123C18.2341 18.9373 19.0244 18.2373 19.2878 17.8873C19.5512 17.5373 19.9024 17.5373 20.1659 17.5373C20.3415 17.5373 20.6049 17.5373 20.7805 17.5373C20.9561 17.5373 21.2195 17.4498 21.4829 18.0623C21.7463 18.6748 22.361 20.2498 22.4488 20.3373C22.5366 20.5123 22.5366 20.6873 22.4488 20.8623C22.361 21.0373 22.2732 21.2123 22.0976 21.3873C21.9219 21.5623 21.7463 21.8248 21.6585 21.9123C21.4829 22.0873 21.3073 22.2623 21.4829 22.5248C21.6585 22.8748 22.2732 23.8373 23.239 24.7123C24.4683 25.7623 25.4341 26.1123 25.7854 26.2873C26.1366 26.4623 26.3122 26.3748 26.4878 26.1998C26.6634 26.0248 27.278 25.3248 27.4537 24.9748C27.6293 24.6248 27.8927 24.7123 28.1561 24.7998C28.4195 24.8873 30 25.6748 30.2634 25.8498C30.6146 26.0248 30.7902 26.1123 30.878 26.1998C30.9658 26.4623 30.9659 27.0748 30.7024 27.7748Z" fill="#556251"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="address">
                    <a href="https://wa.me/77085550848?text=Здравствуйте,%20пишу%20из%20сайта%20neurorehab.kz" class="btn btn-primary" target="_blank">Получить консультацию</a>
                    <p class="text text-sm">Проспект Гагарина 46, 5 этаж<br>
                        Алмалинский район, Алматы</p>
                </div>
            </div>
            <div class="footer-menu">
                <div class="menu">
                    <p class="caption text-xs text-uppercase">Меню сайта</p>
                    <nav>
                        <ul>
                            <li><a href="#about" class="text">О нас</a></li>
                            <li><a href="#diseases" class="text">К нам обращаются</a></li>
                            <li><a href="#methods" class="text">Как мы лечим</a></li>
                            <li><a href="#doctors" class="text">Наши врачи</a></li>
                            <li><a href="#reviews" class="text">Отзывы</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="menu">
                    <p class="caption text-xs text-uppercase">Реабилитация</p>
                    <nav>
                        <ul>
                            <li><a href="#courses" class="text">Боли и ограничения движения  в суставах</a></li>
                            <li><a href="#advantages" class="text">Грыжи и протрузии позвоночника</a></li>
                            <li><a href="#gallery" class="text">До и после эндопротезирования</a></li>
                            <li><a href="#free" class="text">Боли и онемения в конечностях</a></li>
                            <li><a href="#faq" class="text">Боли в спине</a></li>
                            <li><a href="#faq" class="text">После инсультов</a></li>
                            <li><a href="#faq" class="text">Последствия травм</a></li>
                            <li><a href="#faq" class="text">Головокружения</a></li>
                            <li><a href="#faq" class="text">Тренировка баланса</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="text copyright">&#169; <span id="currentYear"></span> Все права защищены</p>
            <div class="files">
                <a href="#" class="text text-sm">Правила сервиса</a>
                <a href="#" class="text text-sm">Политика конфиденциальности</a>
            </div>
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-7d74b113-21d0-4c28-b7cd-45b2740bb06d" data-elfsight-app-lazy style="position: absolute"></div>
        </div>
    </div>
</footer>


<script src="/assets/js/plugins/lightgallery/lg-thumbnail.min.js"></script>
<script src="/assets/js/plugins/lightgallery/lg-zoom.min.js"></script>
<script src="/assets/js/plugins/lightgallery/lightgallery.min.js"></script>
<script src="/assets/js/plugins/swiper/swiper-bundle.min.js"></script>
<script src="/assets/js/plugins/bootstrap/bootstrap.min.js"></script>
<script src="/assets/js/plugins/jquery/jquery-3.6.0.min.js"></script>
<script src="/assets/js/plugins/appleple-modal-video/jquery-modal-video.min.js"></script>
<script src="/assets/js/plugins/imask/imask.min.js"></script>
<script src="/assets/js/plugins/notify/notify.min.js"></script>
<script src="/assets/js/main.js"></script>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(97385880, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97385880" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LPMXTK74NH"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LPMXTK74NH');
</script>

</body>
</html>

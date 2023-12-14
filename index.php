<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'html_head.php'; ?>
    <title>瑞齡診所</title>
    <link rel="stylesheet" href="./stylesheets/style.css">
</head>

<body>
    <div id="preload" style="z-index: 69; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #fff;"></div>
    <main>
        <div class="banner-container" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
            <div class="title-area">
                <img src="./images/title-logo.svg" class="show-for-large">
                <img src="./images/title-logo-mobile.svg" class="hide-for-large">
            </div>
            <div class="banner-area">
                <div class="swiper bannerSlider">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <img class="show-for-large" src="./images/banner.jpg">
                            <img class="hide-for-large" src="./images/banner-mobile.jpg">
                        </li>
                        <li class="swiper-slide">
                            <img class="show-for-large" src="./images/banner2.jpg">
                            <img class="hide-for-large" src="./images/banner2-mobile.jpg">
                        </li>
                        <li class="swiper-slide">
                            <img class="show-for-large" src="./images/banner3.jpg">
                            <img class="hide-for-large" src="./images/banner3-mobile.jpg">
                        </li>
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="intro-container flex-container align-middle" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
            <div class="logo"><img src="./images/main-logo.svg"></div>
            <div class="text-area">
                <div class="title">Healthy & <br class="hide-for-large">Reborn</div>
                <div class="sub-title">細胞再生新時代</div>
                <div class="content">
                    相較於傳統的藥物與手術治療以症狀改善、病程延緩或患部切除等破壞後重建的方式，再生醫學更著重於直接應用人體的修復能力，從另一個角度來治療疾病。
                </div>
            </div>
        </div>
        <div class="info-container" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
            <div class="title">再生醫學是什麼？</div>
            <div class="content">
                再生醫學是利用細胞再生的能力，修補受損組織、器官的醫療技術，被認為是全新醫學領域，應用的範圍非常廣泛，結合組織工程學、分子生物學等醫療技術，可望改善並治療過往難以痊癒的疾病，例如癌症、糖尿病及神經疾病等。
            </div>
        </div>
        <div class="application-container">
            <div class="title" data-r='{"opacity": 0, "y": 30}'>再生醫學應用</div>
            <ul class="applicationList flex-container align-justify" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
                <li class="flex-container align-middle">
                    <div class="icon"><img src="./images/appList-icon1.svg"></div>
                    <div class="name">器官修復</div>
                </li>
                <li class="flex-container align-middle">
                    <div class="icon"><img src="./images/appList-icon2.svg"></div>
                    <div class="name">免疫細胞治療</div>
                </li>
                <li class="flex-container align-middle">
                    <div class="icon"><img src="./images/appList-icon3.svg"></div>
                    <div class="name">幹細胞療法</div>
                </li>
            </ul>
        </div>
        <div class="more-article" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
            <div class="top-title">相關文章</div>
            <div class="swiper articleSlider">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic1.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">細胞的發電廠，你所不知道的粒線體。</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic2.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">治療中風新契機 – 細胞療法</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic3.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">再生醫療產業供應鏈最關鍵成員-細胞庫</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic1.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">細胞的發電廠，你所不知道的粒線體。</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic2.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">治療中風新契機 – 細胞療法</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic3.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">再生醫療產業供應鏈最關鍵成員-細胞庫</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic1.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">細胞的發電廠，你所不知道的粒線體。</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic2.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">治療中風新契機 – 細胞療法</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;">
                            <div class="pic"><img src="images/article-pic3.jpg"></div>
                            <div class="date">2022年9月22日</div>
                            <div class="title">再生醫療產業供應鏈最關鍵成員-細胞庫</div>
                            <div class="more">
                                Read more <span class="arrow"><img src="./images/article-arrow.svg"></span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-next"><img src="./images/arrow-next.svg" alt=""></div>
            <div class="swiper-button-prev"><img src="./images/arrow-prev.svg" alt=""></div>

        </div>
        <div class="service-container">
            <div class="title-area" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
                <div class="title">Service</div>
                <div class="sub-title">服務項目</div>
            </div>
            <ul class="service-area show-for-large" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
                <li>
                    <div class="pic-area"><img src="./images/service-1.jpg"></div>
                    <div class="article-area">
                        <div class="title">專業諮詢</div>
                        <div class="content">生長因子是一種細胞間負責傳遞訊號的蛋白質，具有刺激細胞增殖與分化，以及加速新陳代謝、活化並調節新生細胞活動的功能。</div>
                        <div class="number">
                            <div class="bg"><img src="./images/number-bg.svg"></div>
                            <div class="item">
                                01
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pic-area"><img src="./images/service-2.jpg"></div>
                    <div class="article-area">
                        <div class="title">醫師評估</div>
                        <div class="content">目前再生醫學中以細胞再生醫學發展最盛，如何培養細胞來提高人體的免疫系統及修復活性，藉此達到高效在生與治療，是十分重要的研究課題。</div>
                        <div class="number">
                            <div class="bg"><img src="./images/number-bg.svg"></div>
                            <div class="item">
                                02
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pic-area"><img src="./images/service-3.jpg"></div>
                    <div class="article-area">
                        <div class="title">採樣送檢</div>
                        <div class="content">可採集及運用時間寬裕：之前流行的臍帶血儲存，不只須在分娩後立刻收集，並於24小時內儲存，且只能用於體重約20公斤以下的兒童，對成人疾病治療沒有太多效用，但周邊血就無此限制。</div>
                        <div class="number">
                            <div class="bg"><img src="./images/number-bg.svg"></div>
                            <div class="item">
                                03
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pic-area"><img src="./images/service-4.jpg"></div>
                    <div class="article-area">
                        <div class="title">報告說明</div>
                        <div class="content">不過雖說周邊血造血幹細胞的可應用時間長，但若抽取時已經是活性較低的狀態，在應用上也不免受到限制，因此於健康時就將優良的幹細胞儲存下來，便成為十分重要的準備！</div>
                        <div class="number">
                            <div class="bg"><img src="./images/number-bg.svg"></div>
                            <div class="item">
                                04
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="swiper serviceSlider hide-for-large">
                <ul class="swiper-wrapper service-area">
                    <li class="swiper-slide">
                        <div class="pic-area"><img src="./images/service-1.jpg"></div>
                        <div class="article-area">
                            <div class="title">專業諮詢</div>
                            <div class="content">生長因子是一種細胞間負責傳遞訊號的蛋白質，具有刺激細胞增殖與分化，以及加速新陳代謝、活化並調節新生細胞活動的功能。</div>
                            <div class="number">
                                <div class="bg"><img src="./images/number-bg.svg"></div>
                                <div class="item">
                                    01
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="pic-area"><img src="./images/service-2.jpg"></div>
                        <div class="article-area">
                            <div class="title">醫師評估</div>
                            <div class="content">目前再生醫學中以細胞再生醫學發展最盛，如何培養細胞來提高人體的免疫系統及修復活性，藉此達到高效在生與治療，是十分重要的研究課題。</div>
                            <div class="number">
                                <div class="bg"><img src="./images/number-bg.svg"></div>
                                <div class="item">
                                    02
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="pic-area"><img src="./images/service-3.jpg"></div>
                        <div class="article-area">
                            <div class="title">採樣送檢</div>
                            <div class="content">可採集及運用時間寬裕：之前流行的臍帶血儲存，不只須在分娩後立刻收集，並於24小時內儲存，且只能用於體重約20公斤以下的兒童，對成人疾病治療沒有太多效用，但周邊血就無此限制。</div>
                            <div class="number">
                                <div class="bg"><img src="./images/number-bg.svg"></div>
                                <div class="item">
                                    03
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="pic-area"><img src="./images/service-4.jpg"></div>
                        <div class="article-area">
                            <div class="title">報告說明</div>
                            <div class="content">不過雖說周邊血造血幹細胞的可應用時間長，但若抽取時已經是活性較低的狀態，在應用上也不免受到限制，因此於健康時就將優良的幹細胞儲存下來，便成為十分重要的準備！</div>
                            <div class="number">
                                <div class="bg"><img src="./images/number-bg.svg"></div>
                                <div class="item">
                                    04
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-next hide-for-large"><img src="./images/arrow-next.svg" alt=""></div>
            <div class="swiper-button-prev hide-for-large"><img src="./images/arrow-prev.svg" alt=""></div>
        </div>
        <div class="space-container">
            <div class="title-area" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
                <div class="title">Space</div>
                <div class="sub-title">空間環境</div>
                <div class="content">
                    瑞齡診所，打造放鬆身心的舒適環境，給您安心專業的體驗。
                </div>
            </div>
            <div class="index-marqueeWrap">
                <div class="index-marqueeList">
                    <ul class="marquee">
                        <li><img src="./images/space-1.jpg"></li>
                        <li><img src="./images/space-2.jpg"></li>
                        <li><img src="./images/space-3.jpg"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="team-container">
            <div class="title-area" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
                <div class="title">Medical team</div>
                <div class="sub-title">醫師團隊</div>
            </div>
            <div class="doctor-wrap">
                <div class="content-area">
                    <div class="article-area" data-r='{"opacity": 0, "y": 30, "stagger": 0.2}'>
                        <div class="info show-for-large">
                            積極投入幹細胞療法領域開發<br>
                            接軌國外權威細胞技術<br>
                            專業研發團隊
                        </div>
                        <div class="en">
                            Clinical Director
                        </div>
                        <div class="name show-for-large">
                            院長&emsp;<span class="big">高興全</span>
                        </div>
                        <div class="name hide-for-large">
                            院長
                            <div class="big">高興全</div>
                            <img src="./img/sign-mobile.svg" alt="">
                        </div>
                        <div class="sign">
                            <img src="./images/sign.png" alt="">
                        </div>
                        <div class="info hide-for-large">
                            積極投入幹細胞療法領域開發<br>
                            接軌國外權威細胞技術<br>
                            專業研發團隊
                        </div>
                    </div>
                    <div class="pic-area" data-r='{"opacity": 0, "scale": 1.05}'>
                        <img src="./images/doctor.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-area">
            <div class="title-area" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
                <div class="top-title">Contact us</div>
                <div class="sub-title">聯絡我們</div>
            </div>
            <ul class="contact show-for-large" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
                <li>
                    <div class="title">Telephone</div>
                    <div class="content">
                        <a href="tel:+886-4-20880334" target="_blank">0420-880-334</a>
                    </div>
                </li>
                <li>
                    <div class="title">Location</div>
                    <div class="content">台中市南屯區文心南三路586號</div>
                </li>
                <li>
                    <div class="title">Open on</div>
                    <div class="content left">
                        平日 10:00~16:00<br>
                        週六 11:00~16:00<br>
                        週日 定休
                    </div>
                </li>
            </ul>
            <ul class="contact hide-for-large" data-r='{"opacity": 0, "y": 30, "stagger": 0.333}'>
                <li>
                    <div class="title">Location</div>
                    <div class="content">台中市南屯區文心南三路586號</div>
                </li>
                <li>
                    <div class="title">Telephone</div>
                    <div class="content">
                        <a href="tel:+886-4-20880334" target="_blank">0420-880-334</a>
                    </div>
                </li>
                <li>
                    <div class="title">Open on</div>
                    <div class="content">
                        平日 10:00~16:00<br>
                        週六 11:00~16:00<br>
                        週日 定休
                    </div>
                </li>
            </ul>
        </div>
    </main>
    <footer>
        <div class="other-area">
            <div class="icon show-for-large">
                <img src="./images/footer-logo.svg">
            </div>
            <ul class="social">
                <li>
                    <a href="javascript:;" target="_blank">
                        <img src="./images/fb.svg">
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <img src="./images/ig.svg">
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <img src="./images/line.svg">
                    </a>
                </li>
            </ul>
            <div class="copyright-area">
                <div class="copyright">© BLOSSOMS CLINIC ALL RIGHTS RESERVED</div>
                <div class="siteby">SITE BY <a href="https://www.goods-design.com.tw/" target="_blank" rel="noopener noreferrer">很好設計 GOODS DESIGN</a></div>
            </div>
        </div>
    </footer>
    <!-- <div class="reservation-container">
        <a href="https://lin.ee/lKRKWWOF" target="_blank">
            <img class="show-for-large" src="./img/reservation.png" alt="">
            <img class="hide-for-large" src="./img/reservation-mobile.png" alt="">
        </a>
    </div> -->
</body>
<?php include 'script.php'; ?>
<script>
    // $("#preload").delay(1000).fadeOut(600, function() {

    //     $("nav").addClass("is-show")
    // })
    var banner_swiper = new Swiper(".bannerSlider", {
        slidesPerView: 1,
        speed: 1000,
        autoplay: {
            delay: 3000,
        },
        loop: true,
        pagination: {
            el: '.bannerSlider .swiper-pagination',
        },
    });
    if (window.device == 'desktop') {
        var article_swiper = new Swiper(".articleSlider", {
            slidesPerView: 3,
            slidesPerGroup: 3,
            speed: 1000,
            loop: true,
            pagination: {
                el: '.articleSlider .swiper-pagination',
            },
        });
    } else {
        var article_swiper = new Swiper(".articleSlider", {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 10,
            speed: 1000,
            loop: true,
            pagination: {
                el: '.articleSlider .swiper-pagination',
            },
            navigation: {
                nextEl: ".more-article .swiper-button-next",
                prevEl: ".more-article .swiper-button-prev",
            },
        });
        var service_swiper = new Swiper(".serviceSlider", {
            slidesPerView: 1,
            spaceBetween: 10,
            speed: 1000,
            loop: true,
            pagination: {
                el: '.serviceSlider .swiper-pagination',
            },
            navigation: {
                nextEl: ".service-container .swiper-button-next",
                prevEl: ".service-container .swiper-button-prev",
            },
        });
    }
</script>

</html>
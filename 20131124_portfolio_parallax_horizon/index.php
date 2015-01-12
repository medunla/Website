<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Portfolio | Medunla</title>
    <link rel="stylesheet" href="lib/css/style.css" />
    <link href="img/favicon/icon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="lib/magnific-popup/magnific-popup.css">
    <!-- Magnific Popup core JS file -->
    <script src="lib/magnific-popup/jquery.magnific-popup.js"></script>

    <!--
        * Check size screen
        *
        -->
    <script type="text/javascript">
        var w = window,
            d = document,
            e = d.documentElement,
            g = d.getElementsByTagName('body')[0],
            x = w.innerWidth || e.clientWidth || g.clientWidth,
            y = w.innerHeight || e.clientHeight || g.clientHeight;
        function getWidth(){
            return x;
        }
        function getHeight(){
            return y;
        }        
    </script>

    <!--[if lt IE 9]>
        <script src="lib/shiv/html5shiv.js"></script>
        <script src="lib/shiv/respond.min.js"></script>
        <script src="lib/shiv/IE9.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->  
    
</head>

<body>
    <div id="enter-site">
        <div id="enter-site-logo" class="scroll">
            <h1>M</h1>
        </div>
        <!--/ end logo -->

        <div id="enter-site-scrolling" class="scroll">
            <p>Scrolling down</p>
            <div id="enter-site-scrolling-arrow"></div>
        </div>
        <!--/ end scrolling -->

        <div id="enter-site-size" class="scroll">
            <p>Appropriate to the size<br> 1280 x 1024</p>
        </div>
        <!--/ end scrolling -->

        <div id="enter-site-bg" class="scroll">
            <img src="img/bg.jpg">
        </div>
        <!--/ end bg -->

    </div>
    <!--/ end enter-site -->

    <div id="container" class="scroll">
        <section id="work">
            <header class="container-header">
                <h1>
                    RECENT WORKS
                    
                    <!-- Button slide work -->
                    <span id="btn-work-r" class="transition-0-3s" onclick="work_r()">›</span>
                    <span id="btn-work-l" class="transition-0-3s" onclick="work_l()">‹</span>
                    
                </h1>
            </header>

            <div id="wrap-work">
            <div id="wrap-work-wrap" class="transition-0-5s">
                <div class="wrap-img-work">
                    <!-- #1 -->
                    <figure id="img-work-1" class="img-hover">
                        <div id="gallery-1">
                            <a href="http://farm8.staticflickr.com/7297/11497623654_27e8e8b62d_b.jpg">
                                <img src="img/work/1.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Exhibition Taechoe castle</h3>
                                    <p>Taechoe castle is ghost house exhibition. Concept this work as " scare". My team was choose thai ghost theme because most thai peopele fear thai ghost.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm4.staticflickr.com/3771/11497690713_b09a138026_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7358/11497607565_8205094649_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3824/11497622094_96a69269ff_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5488/11497689733_89dd294dda_b.jpg"></a>                            
                            <a href="http://farm6.staticflickr.com/5473/11497643513_ce3122e5f5_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3728/11497559505_9198271762_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2883/11497631596_170533bd36_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3687/11497630986_9cee985b1b_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->               
                        <div class="work-number transition-0-3s">1</div>
                    </figure>

                    <!-- #2 -->
                    <figure id="img-work-2" class="img-hover">
                        <div id="gallery-2">
                            <a href="http://farm4.staticflickr.com/3678/11497605645_ba786a518c_b.jpg">
                                <img src="img/work/2.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Rayongtrips</h3>
                                    <p>Rayongtrips is province website. Most function focus on present trip location and product in provice, Important this web is webboard for share your photo trip.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm4.staticflickr.com/3706/11497579514_de56ae3d1b_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7458/11497578834_b07ec40db4_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2887/11497578164_517b190288_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7405/11497634596_becb8393a5_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">2</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->
                
                <div class="wrap-img-work">
                    <!-- #3 -->
                    <figure id="img-work-3" class="img-hover">
                        <div id="gallery-3">
                            <a href="img/work/3.jpg">
                                <img src="img/work/3.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>UNIQLO</h3>
                                    <p>UNIQLO is website type sales product. This website have back home( admin page ) for edit information and product in store.</p>
                                </figcaption>
                            </a>
                        </div>
                        <!--/ end gallery -->                        
                        <div class="work-number transition-0-3s">3</div>
                    </figure>

                    <!-- #4 -->
                    <figure id="img-work-4" class="img-hover">
                        <div id="gallery-4">
                            <a href="img/work/4.jpg">
                                <img src="img/work/4.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>POLAR BEAR</h3>
                                    <p>Polar bear is geometric art work, create in Adobe illustrator program. This work make enjoy working because this work is new illustrator art style.</p>
                                </figcaption>
                            </a>
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">4</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #5 -->
                    <figure id="img-work-5" class="img-hover">
                        <div id="gallery-5">
                            <a href="http://farm4.staticflickr.com/3708/11497686873_5e5d0ec6d4_b.jpg">
                                <img src="img/work/5.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Find home</h3>
                                    <p>Find home is illustrator design in topic composition element animal, fruit, human and structure type two element.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm8.staticflickr.com/7290/11497618964_3bc52dc4b5_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                        
                        <div class="work-number transition-0-3s">5</div>
                    </figure>

                    <!-- #6 -->
                    <figure id="img-work-6" class="img-hover">
                        <div id="gallery-6">
                            <a href="http://farm8.staticflickr.com/7326/11497729084_63ce6de2e6_b.jpg">
                                <img src="img/work/6.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Photo promote reading</h3>
                                    <p>This photo is picture in collection concept scholar promote reading for knowledge in the future.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm6.staticflickr.com/5502/11497775953_578c6bb6d2_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7314/11497737496_5f010e16e6_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5496/11497717806_8463736e9c_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2805/11497699196_9ef6f27fd2_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">6</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #7 -->
                    <figure id="img-work-7" class="img-hover">
                        <div id="gallery-7">
                            <a href="http://farm3.staticflickr.com/2893/11497618614_ba987010e5_b.jpg">
                                <img src="img/work/7.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Logo Soompi thailand</h3>
                                    <p>Website soompi present about K-POP. I design logo used orange color because orange color mean entertain and modernity. Use regtangle like lotus for thai aura.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm6.staticflickr.com/5520/11497675756_21829abb91_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">7</div>
                    </figure>

                    <!-- #8 -->
                    <figure id="img-work-8" class="img-hover">
                        <div id="gallery-8">
                            <a href="img/work/8.jpg">
                                <img src="img/work/8.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Interactive mapping</h3>
                                    <p>This work is interactive camera for choose theme furniture and mapping on real furniture.</p>
                                </figcaption>
                            </a>
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">8</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #9 -->
                    <figure id="img-work-9" class="img-hover" style="opacity: 0">
                        <div id="gallery-9">
                            <a href="http://farm4.staticflickr.com/3832/11497602285_66daf37968_b.jpg">
                                <img src="img/work/9.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Redesign Toshiba website</h3>
                                    <p>Concept of this redesign is to facilitate the customers. View and purchase much easier. Is designed website can see product, not necessarily many links.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm3.staticflickr.com/2807/11497600695_ac198ddaea_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2818/11497672636_8f7b02e468_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">9</div>
                    </figure>

                    <!-- #10 -->
                    <figure id="img-work-10" class="img-hover" style="opacity: 0">
                        <div id="gallery-10">
                            <a href="http://farm8.staticflickr.com/7431/11497614114_155b32572c_b.jpg">
                                <img src="img/work/10.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Toshiba application design</h3>
                                    <p>This application has concept to facilitate the customers. Main function in application is scan product barcode for sent problem of product and find nearby service center.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm6.staticflickr.com/5535/11497597735_41025aa8bf_o.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7419/11497670876_4f6bbec495_o.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7320/11497613584_7f8f0f7cbf_o.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2878/11497670636_08cfe391b3_o.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3780/11497670456_144dba4e50_o.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5513/11497680163_4104c031dc_o.jpg"></a>
                            <!--/ end hide picture in gallery -->                    
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">10</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #11 -->
                    <figure id="img-work-11" class="img-hover" style="opacity: 0">
                        <div id="gallery-11">
                            <a href="http://farm3.staticflickr.com/2843/11497680003_5159ac5926_b.jpg">
                                <img src="img/work/11.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Toshiba game design</h3>
                                    <p>Toshiba game has concept is play for knew. This game brings the performance of a product to make game. If customers play game they knew product.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm4.staticflickr.com/3698/11497596085_f56990a48d_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5490/11497612014_602912c77c_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3707/11497595985_d8c45d9d00_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5521/11497611694_b6e180d025_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5547/11497668826_ac30e52487_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7399/11497668636_96217af75b_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3692/11497594815_f6ccc84553_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3786/11497667966_489cb49451_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3815/11497610414_68db70f996_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3701/11497593995_e8f0021843_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3739/11497676973_c8cd90690a_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2872/11497667186_5651df764b_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">11</div>
                    </figure>

                    <!-- #12 -->
                    <figure id="img-work-12" class="img-hover" style="opacity: 0">
                        <div id="gallery-12">
                            <a href="http://farm3.staticflickr.com/2850/11497667366_d5d0251376_b.jpg">
                                <img src="img/work/12.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Toshiba gift design</h3>
                                    <p>Toshiba bag is gift for customers. I design by graphic of the Toshiba game. To make it consistent company.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm6.staticflickr.com/5525/11497609214_c4ef205cc1_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7308/11497593035_8d2e8335de_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">12</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #13 -->
                    <figure id="img-work-13" class="img-hover" style="opacity: 0">
                        <div id="gallery-13">
                            <a href="http://farm3.staticflickr.com/2843/11497608714_d8b346a0df_b.jpg">
                                <img src="img/work/13.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>CalGrade application design</h3>
                                    <p>CalGrade application has concept for student see grade easier and alerts status user grade. I design application shows grade in home page and use color for indicate user status.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm6.staticflickr.com/5545/11497673923_359f37fcbd_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery --> 
                        
                        <div class="work-number transition-0-3s">13</div>
                    </figure>

                    <!-- #14 -->
                    <figure id="img-work-14" class="img-hover" style="opacity: 0">
                        <div id="gallery-14">
                            <a href="http://farm4.staticflickr.com/3803/11497625804_1b80b8e2a8_b.jpg">
                                <img src="img/work/14.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s"> 
                                    <h3>Scientist &amp; Robot</h3>
                                    <p>Scientist &amp; Robot is water color catoon. This story present one scientist can build intelligent robot, but in reality is not so! What is truth? Be tracked in.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm8.staticflickr.com/7292/11497662126_132e92359e_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5536/11497670383_160aa53d48_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3674/11497601954_323b2978b0_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7344/11497584355_8ec0a466a3_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5525/11497599204_5ca1e8cd87_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5548/11497581585_31e74d32d2_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3674/11497662713_cfaae899cd_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3723/11497594854_671e279583_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7391/11497650356_66157697d8_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5489/11497591914_389b64c0e4_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3748/11497590194_9ba0523770_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7452/11497656093_36e41f0072_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2820/11497655173_bd6033e56b_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5489/11497586404_88f02fba79_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2823/11497585054_dd00d176d3_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3820/11497641556_001f75ca87_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2830/11497640556_5dd0a17ee8_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5478/11497648653_e229744cc4_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5498/11497649473_078893fbfb_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">14</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #15 -->
                    <figure id="img-work-15" class="img-hover" style="opacity: 0">
                        <div id="gallery-15">
                            <a href="http://farm8.staticflickr.com/7389/11499935866_2b2352d4ee_b.jpg">
                                <img src="img/work/15.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>3D model Pagoda</h3>
                                    <p>Model is Temple mountain proportion as real temple. This model create by 3Ds Max program.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm8.staticflickr.com/7318/11499949123_7e689aa3c4_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5515/11499944703_eabe378d17_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3696/11499878044_095beab416_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5538/11499919116_f2473b553a_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3774/11499932323_396b73b83b_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5523/11499913916_83cf73aa4e_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3808/11499912246_9c0007eb70_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3698/11499910786_64bfbbee81_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7377/11499909486_342c97ee7d_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3781/11499833785_575639146f_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7404/11499924053_a8e5bec68d_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3687/11499922893_43a5660740_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7337/11499905396_ede9fdb316_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">15</div>
                    </figure>

                    <!-- #16 -->
                    <figure id="img-work-16" class="img-hover" style="opacity: 0">
                        <div id="gallery-16">
                            <a href="http://farm6.staticflickr.com/5494/11499904636_97a04f0e53_b.jpg">
                                <img src="img/work/16.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s"> 
                                    <h3>Pixel art Pagoda</h3>
                                    <p>This pixel art is Temple mountain size proportion as real temple. This art work is create by Adobe photoshop program.</p>
                                </figcaption>
                            </a>
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">16</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #17 -->
                    <figure id="img-work-17" class="img-hover" style="opacity: 0">
                        <div id="gallery-17">
                            <a href="http://farm4.staticflickr.com/3750/11499904236_3d1c0f6990_b.jpg">
                                <img src="img/work/17.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>3D Model Home</h3>
                                    <p>Medel is housing estate. Concept is harmony with nature and greenery. I use design house color is brown because brown color has feel livable and safe.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm3.staticflickr.com/2811/11499920213_1844e3e958_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2868/11499857864_1d84115d61_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3753/11499857644_9b2a8e3fe8_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3793/11499902646_c71a82d5d8_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2806/11499856984_d4cae561d8_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">17</div>
                    </figure>

                    <!-- #18 -->
                    <figure id="img-work-18" class="img-hover" style="opacity: 0">
                        <div id="gallery-18">
                            <a href="http://farm4.staticflickr.com/3696/11499827205_d865023f84_b.jpg">
                                <img src="img/work/18.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s"> 
                                    <h3>Structure painting</h3>
                                    <p>Most my stucture painting is house and nature because I like home to live with nature, it make safe and relex feeling to me.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm6.staticflickr.com/5520/11500006453_02b7b69124_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2865/11499847214_1fecc7c2e9_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">18</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #19 -->
                    <figure id="img-work-19" class="img-hover" style="opacity: 0">
                        <div id="gallery-19">
                            <a href="http://farm4.staticflickr.com/3703/11499940144_3a19f17174_b.jpg">
                                <img src="img/work/19.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Drawing material</h3>
                                    <p>I was just seeing what it would be like as a skate store. When I try the Drawing. I was attracted it, Drawing make feel lighter, distal EE pencil like change to the fantasy world.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm8.staticflickr.com/7419/11499995603_85d1c6d207_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7397/11499926814_90dcb02733_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2814/11499919394_5271ee0576_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3777/11499974893_e784cb7e2a_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3798/11499970573_5da12172bf_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7459/11499873685_a38e72c7c4_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">19</div>
                    </figure>

                    <!-- #18 -->
                    <figure id="img-work-20" class="img-hover" style="opacity: 0">
                        <div id="gallery-20">
                            <a href="http://farm3.staticflickr.com/2879/11499908173_b92864944c_b.jpg">
                                <img src="img/work/20.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s"> 
                                    <h3>Digital painting</h3>
                                    <p>Normally, I like digital painting. But after I got to practice on Drawing. I like digital painting more because drawing make I painted more realistic shadows.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm8.staticflickr.com/7429/11499955403_2f117e9c71_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5531/11499816475_c90ee0082a_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7321/11499907163_95cbd5b3d6_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3776/11499906943_eb830ab0d3_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2881/11499889676_cac9021861_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3702/11499889316_bcc2e4901a_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3731/11499888876_6a1ce2bef6_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7373/11499843614_6f9b93218e_o.png"></a>
                            <a href="http://farm8.staticflickr.com/7340/11499843404_f91270bb46_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3736/11499904133_61bc436ec2_o.png"></a>
                            <a href="http://farm3.staticflickr.com/2832/11499954823_7598e44fbe_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7369/11499842914_3063762914_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3763/11499891814_0aa3e3e366_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2843/11499953783_8a95350800_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3725/11499903553_6b3226709e_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7441/11499841054_849d064ecf_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5485/11499901683_1517056e11_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3702/11499884746_0af5a89c93_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">20</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

                <div class="wrap-img-work">
                    <!-- #21 -->
                    <figure id="img-work-21" class="img-hover" style="opacity: 0">
                        <div id="gallery-21">
                            <a href="http://farm3.staticflickr.com/2876/11499810005_69acbd7718_b.jpg">
                                <img src="img/work/21.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s">
                                    <h3>Natureiane's Harmony</h3>
                                    <p>Natureiane's Harmony is 3d rpg game. This game has been inspired from  fairy tale.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm4.staticflickr.com/3762/11499839334_cc51c7c954_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7306/11499839004_c5974152fc_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5481/11499883646_d404c9541c_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5506/11499809305_8b7aa702e5_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3827/11499809345_c834d090ed_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5496/11499808705_d083271219_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2846/11499808605_9932d7489d_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3812/11499808355_747ac806d2_b.jpg"></a>
                            <a href="http://farm6.staticflickr.com/5539/11499882116_056377b755_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->                         
                        <div class="work-number transition-0-3s">21</div>
                    </figure>

                    <!-- #22 -->
                    <figure id="img-work-22" class="img-hover" style="opacity: 0">
                        <div id="gallery-22">
                            <a href="http://farm8.staticflickr.com/7398/11499807725_be301fb2b5_b.jpg">
                                <img src="img/work/22.jpg" class="transition-0-5s">
                                <figcaption class="transition-0-3s"> 
                                    <h3>Chaos dream</h3>
                                    <p>Chaos dream is rpg game. First, my team wanted to create their own game and during that time has competition create program. My team decided to build this game up.</p>
                                </figcaption>
                            </a>
                            <!-- hide picture in gallery -->
                            <a href="http://farm8.staticflickr.com/7297/11499880996_3415c8dfe7_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3805/11499880726_d795904dbe_b.jpg"></a>
                            <a href="http://farm8.staticflickr.com/7304/11499805535_c886a1fd13_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2805/11499936616_a260f08aa9_b.jpg"></a>
                            <a href="http://farm3.staticflickr.com/2855/11499895943_9a6972839d_b.jpg"></a>
                            <a href="http://farm4.staticflickr.com/3738/11499833934_2a973f007b_b.jpg"></a>
                            <!--/ end hide picture in gallery -->
                        </div>
                        <!--/ end gallery -->
                        
                        <div class="work-number transition-0-3s">22</div>
                    </figure>
                </div>
                <!--/ end wrap-img-work -->

            </div>
            <!--/ end wrap-work-wrap -->            
            </div>           
            <!--/ end wrap-work -->

        </section>
        <!--/ end work -->


        <section id="about">
            <header class="container-header">
                <h1>ABOUT</h1>
            </header>

            <figure id="wrap-about">
                <div id="wrap-about-img">
                    <img src="img/mypic2.jpg">
                </div>
                <figcaption>
                    <span class="wing">{</span>
                    <div id="wrap-about-txt">
                        <h3>Hello world! I'm name <span>Medunla</span>.</h3>
                        <p>Medunla is alias name, full name is Panupat Kammahawong. Now I'm studying on web development and interactive media.</p>
                    </div>
                    <span class="wing">}</span>
                </figcaption>
                
            </figure>      
            <!--/ end wrap-about -->

        </section>
        <!--/ end work -->


        <section id="skill">
            <header class="container-header">
                <h1>SKILL</h1>
            </header>

            <div id="wrap-skill">

                <figure class="wrap-skill-wrap">
                    <img src="img/logo/HTML5.svg">
                    <figcaption>
                        <p>HTML5</p>
                    </figcaption> 
                    <div class="bar-skill"><div class="width-90-per"></div></div>
                </figure>      
                <!--/ end wrap-skill-wrap -->

                <figure class="wrap-skill-wrap">
                    <img src="img/logo/CSS3.svg">
                    <figcaption>
                        <p>CSS3</p>
                    </figcaption> 
                    <div class="bar-skill"><div class="width-80-per"></div></div>
                </figure>      
                <!--/ end wrap-skill-wrap -->

                <figure class="wrap-skill-wrap">
                    <img src="img/logo/jQuery.svg">
                    <figcaption>
                        <p>jQuery</p>
                    </figcaption> 
                    <div class="bar-skill"><div class="width-70-per"></div></div>
                </figure>      
                <!--/ end wrap-skill-wrap -->

                <figure class="wrap-skill-wrap">
                    <img src="img/logo/MySQL.svg">
                    <figcaption>
                        <p>PHP / MySQL</p>
                    </figcaption> 
                    <div class="bar-skill"><div class="width-60-per"></div></div>
                </figure>      
                <!--/ end wrap-skill-wrap -->

                <figure class="wrap-skill-wrap">
                    <img src="img/logo/Framework.svg">
                    <figcaption>
                        <p>Framework</p>
                    </figcaption> 
                    <div class="bar-skill"><div class="width-50-per"></div></div>
                </figure>      
                <!--/ end wrap-skill-wrap -->

                <figure class="wrap-skill-wrap">
                    <img src="img/logo/UI.svg">
                    <figcaption>
                        <p>UI / UX</p>
                    </figcaption> 
                    <div class="bar-skill"><div class="width-60-per"></div></div>
                </figure>      
                <!--/ end wrap-skill-wrap -->



            </div>      
            <!--/ end wrap-skill -->

        </section>
        <!--/ end skill -->
        

        <section id="contact">
            <header class="container-header">
                <h1>CONTACT</h1>
            </header>

            <div id="wrap-contact">
                <div id="contact-txt">
                    <div class="wrap-contact-txt">
                        <figure>
                            <div><img src="img/logo/plance.svg"></div>
                            <figcaption>
                                <p>10/37 Choeng Noen,<br>Muang,Rayong 21000</p>
                            </figcaption> 
                        </figure>

                        <figure>
                            <div><img src="img/logo/phone.svg"></div>
                            <figcaption>
                                <p>+668 5839 9063</p>
                            </figcaption> 
                        </figure>

                        <figure>
                            <div><img src="img/logo/email.svg"></div>
                            <figcaption>
                                <p>panupatnew@gmail.com</p>
                            </figcaption> 
                        </figure>                        
                    </div>
                    <!--/ end wrap-contact-txt -->

                    <div class="wrap-contact-txt">
                        <figure>
                            <div><img src="img/logo/facebook.svg"></div>
                            <figcaption>
                                <a href="https://www.facebook.com/medunla" target="blank"><p>facebook.com/medunla</p></a>
                            </figcaption> 
                        </figure>
                        <figure>
                            <div><img src="img/logo/twitter.svg"></div>
                            <figcaption>
                                <a href="https://twitter.com/medunla" target="blank"><p>twitter.com/medunla</p></a>
                            </figcaption> 
                        </figure>
                        <figure>
                            <div><img src="img/logo/flickr.svg"></div>
                            <figcaption>
                                <a href="http://www.flickr.com/photos/medunla/" target="blank"><p>flicker.com/medunla</p></a>
                            </figcaption> 
                        </figure>
                    </div>
                    <!--/ end wrap-contact-txt -->

                </div>
                <!--/ end contact-txt -->

                <div id="contact-form">
                    <form action="sentemail.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="subject" placeholder="Subject">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <textarea name="message" placeholder="Message"></textarea>
                        <input type="submit" value="SENT" class="transition-0-3s">
                    </form>
                </div>
                <!--/ end contact-form -->

            </div>      
            <!--/ end wrap-contact -->

        </section>
        <!--/ end contact -->


    </div>
    <!--/ end container -->

    <script type="text/javascript" src="lib/js/jquery.jInvertScroll.js"></script>

    <!-- *
         * Parallax
         *
         -->
    <script type="text/javascript">
        var x = getWidth();
        var y = getHeight();
        var use = x + ((y-70)*2) + 1000 + 1000 + 1200;

        (function($) {
            $.jInvertScroll(['.scroll'], // an array containing the selector(s) for the elements you want to animate
                {
                    height: use, // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
                    onScroll: function(percent) { //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                        console.log(percent);
                    }
                });
        }(jQuery));
    </script>


    <!--
        * Set width & height
        *
        -->
    <script type="text/javascript">
        var x = getWidth();
        var y = getHeight();

        // ---> Enter site
        $('#enter-site-logo').css("margin-left", ((x / 2) - 130) + "px");
        $('#enter-site-scrolling').css("margin-left", ((x / 2) - 100) + "px");
        $('#enter-site-size').css("margin-left", (x - 230) + "px");
        // ---> Container
        $('#container').css({
            "width": ((y-50)*2) + 1000 + 1000 + 1200 + "px",
            "margin-left": (x * 1.5) + "px"
        });
        // ---> Work
        $('#work').css("width", (y-70)*2 + "px");
        $('#wrap-work, #wrap-work-wrap').css("height", (y-70) + "px");
        $('.img-hover').css("width", (y-70)/2 + "px");
        // ---> About
        $('#wrap-about').css("height", (y-50) + "px");
        // ---> Skill
        $('#wrap-skill').css("height", (y-50) + "px");
        // ---> Content
        $('#wrap-contact').css("height", (y-50) + "px");

    </script>

    <!--
        * Work slide effect
        *
        -->
    <script type="text/javascript">
        var y = getHeight();
        var y = (y-70)/2 + "px";
        var count = 0;
        var img_work = 0;
        var amountWork = 22-8;

        function work_r() {
            if(count>=0 && count<amountWork){
                var l1 = "#img-work-"+(count+1), l2 = "#img-work-"+(count+2);
                var r1 = "#img-work-"+(count+9), r2 = "#img-work-"+(count+10);

                img_work = $(l1);
                img_work.animate({ width: "0", opacity: "0" }, 500);
                img_work = $(l2);
                img_work.animate({ width: "0", opacity: "0" }, 500);

                img_work = $(r1);
                img_work.animate({ width: y, opacity: "1" }, 500);
                img_work = $(r2);
                img_work.animate({ width: y, opacity: "1" }, 500);

                count+=2;

            }
                       
        }
        function work_l() {
            if(count>0){
                var l1 = "#img-work-"+(count-1), l2 = "#img-work-"+(count);
                var r1 = "#img-work-"+(count+7), r2 = "#img-work-"+(count+8);

                img_work = $(l1);
                img_work.animate({ width: y, opacity: "1" }, 500);
                img_work = $(l2);
                img_work.animate({ width: y, opacity: "1" }, 500);

                img_work = $(r1);
                img_work.animate({ width: "0", opacity: "0" }, 500);
                img_work = $(r2);
                img_work.animate({ width: "0", opacity: "0" }, 500);

                count-=2;                

            }
        }
    </script>

    <!--
        * Popup work
        *
        -->
    <script type="text/javascript">
        $(document).ready(function() {
            var gallery;
            var amountWork = 22;
            for(var i=1;i<=amountWork;i++) {
                gallery = "#gallery-"+i;
                $(gallery).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                    }
                });
            }// end for
        });
    </script>

    <!--
        * Effect Logo hidden
        *
        -->
    <script type="text/javascript">
        var body = document.getElementsByTagName('body')[0];
        var x = getWidth();
        $( window ).scroll(function() {
            if(body.scrollTop > x){
                $('#enter-site-logo, #enter-site-scrolling, #enter-site-size').css("opacity","0");
            }
            else{
                $('#enter-site-logo, #enter-site-scrolling, #enter-site-size').css("opacity","1");
            }
        });
    </script>
    

</body>
</html>

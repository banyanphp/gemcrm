body,
html {
    overflow-x: hidden;
}

.main-content,
body {
    background: #f5f5f5;
}

a,
img {
    display: inline-block;
}

.icon-wrap .fa:before,
.icon-wrap-nav i:before {
    -webkit-font-smoothing: antialiased;
    speak: none;
}

body {
    color: #8b8b8b;
    font-family: Raleway, sans-serif;
    font-size: 14px;
    -webkit-backface-visibility: hidden
}

.main-content {
    padding: 10px 0
}





ol,
ul {
    list-style: none;
    margin: 0;
    padding: 0;
    width: 100%;
}

a:focus,
a:hover {
    outline: 0;
    text-decoration: none
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 200;
    margin: 0
}
.mtop { margin-top:40px;}
h2 {
    font-size: 40px
}

h3 {
    font-size: 30px
}

h4 {
    font-size: 20px;
    line-height: 26px
}

.btn,
h5 {
    font-size: 18px
}

img {
    max-width: 100%
}

p {
    line-height: 28px
}

.mb-0 {
    margin-bottom: 0!important
}

.mb-40 {
    margin-bottom: 40px
}

.mb-80 {
    margin-bottom: 80px
}

.mt-40 {
    margin-top: 40px
}

.dn {
    display: none
}

.btn,
.icon-wrap .fa {
    color: #fff;
    display: inline-block;
    position: relative
}

.btn {
    background: #3399ff;
    border-radius: 0;
    border: 1px solid transparent;
    font-weight: 500;
    padding: 10px 15px;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.ovh {
    overflow: hidden
}

:focus {
    outline: 0
}

select:focus {
    outline: transparent solid 1px
}

.icon-wrap {
    text-align: center
}

.icon-wrap .fa {
    font-size: 0;
    z-index: 10;
    transition: background .3s, color .3s, box-shadow .3s
}

.icon-wrap .fa,
.icon-wrap-nav i {
    cursor: pointer;
    overflow: hidden;
    text-align: center;
    -webkit-transition: background .3s, color .3s, box-shadow .3s;
    -moz-transition: background .3s, color .3s, box-shadow .3s
}

.icon-wrap .fa:after {
    display: none;
    position: absolute;
    width: 100%;
    box-sizing: content-box
}

.icon-wrap .fa:after,
.icon-wrap-nav i:after {
    content: '';
    height: 100%;
    pointer-events: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box
}

.icon-wrap .fa:before {
    display: block;
    font-family: fontawesome;
    font-size: 14px;
    line-height: 16px
}

.icon-wrap .fa:hover {
    background: rgba(255, 255, 255, 1);
    color: #702fa8
}

.icon-wrap .fa:hover:before {
    animation: toRightFromLeft .3s forwards
}

.icon-wrap .fa:hover:before,
.icon-wrap-nav i:hover:before {
    -webkit-animation: toRightFromLeft .3s forwards;
    -moz-animation: toRightFromLeft .3s forwards
}

.icon-wrap-nav {
    text-align: center
}

.icon-wrap-nav i {
    color: #fff;
    display: inline-block;
    font-size: 45px;
    line-height: 70px;
    position: relative;
    width: 70px;
    z-index: 15;
    transition: background .3s, color .3s, box-shadow .3s
}

#label label,
.top-social-icon .icon-wrap .fa:before {
    line-height: 50px
}

.icon-wrap-nav i:after {
    display: none;
    position: absolute;
    width: 100%;
    box-sizing: content-box
}

.icon-wrap-nav i:before {
    display: block;
    font-family: trendz
}

.icon-wrap-nav i:hover {
    background: rgba(255, 255, 255, 1);
    color: #000
}

.icon-wrap-nav i:hover:before {
    animation: toRightFromLeft .3s forwards
}

.top-social-icon-area {
    background: #f5f5f5;
    height: 50px;
    position: relative;
    z-index: 15
}

.top-social-icon {
    left: 65px;
    position: absolute
}

#label,
#search {
    position: relative
}

.top-social-icon .icon-wrap a {
    float: left;
    height: 50px;
    width: 50px
}

.top-social-icon .icon-wrap .fa {
    color: #7d7d7d;
    margin: 0
}

#label label,
.top-social-icon .icon-wrap .fa:hover {
    background: #3399ff;
    color: #fff
}

#search {
    height: 40px;
    float: left
}

#label {
    z-index: 20
}

#label label {
    font-size: 11px;
    font-weight: 400;
    height: 50px;
    text-align: center;
    width: 50px;
    cursor: pointer;
    display: block
}

#input,
#input input {
    position: absolute;
    top: 0;
    width: 450px
}

#input {
    height: 50px;
    left: 50px;
    overflow: hidden;
    z-index: 5
}

#input input {
    background-color: #fff;
    border: 1px solid #3399ff;
    display: block;
    height: 100%;
    left: -450px;
    margin: 0;
    padding: 0 10px;
    -webkit-backface-visibility: none;
    -moz-backface-visibility: none;
    -ms-backface-visibility: none;
    backface-visibility: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-transition: left 0;
    -moz-transition: left 0;
    -ms-transition: left 0;
    -o-transition: left 0;
    transition: left 0
}

.lang-currency,
.logo,
.navbar-toggle {
    position: relative
}

#input input:focus {
    outline: 0
}

#input.focus {
    z-index: 30
}

#input.focus input {
    left: 0;
    -webkit-transition: left .8s;
    -moz-transition: left .8s;
    -ms-transition: left .8s;
    -o-transition: left .8s;
    transition: left .8s
}

.lang-currency {
    top: 15px;
    z-index: 10
}

.lang-currency ul li {
    display: inline;
    margin-left: 15px
}

.lang-currency select {
    background: 0 0;
    border: 1px solid transparent;
    color: #7d7d7d;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase
}

.lang-currency select:focus {
    border: 1px solid transparent;
    box-shadow: 0
}

.navbar-toggle {
    background: #3399ff;
    border-color: #fff;
    color: #000;
    margin-bottom: 14px;
    margin-top: 14px;
    right: 15px;
    z-index: 9999
}

.navbar-toggle .icon-bar {
    background: #fff
}

.index-padd {
    padding-bottom: 20px
}

.nav-slider,
.nav-slider .anim-dots,
.nav-slider .anim-slide a {
    background: #3399ff
}

.nav-slider .anim-dots span {
    background: rgba(255, 255, 255, .2)
}

.nav-slider li {
    display: inline-block
}

.profile {
    padding: 0 15px
}

.profile ul li {
    margin-left: 30px
}


.logo {
    width: 100%;
    z-index: 1000
}

.profile ul li a span {
    color: #000
}
    .profile ul li {
        margin: 10px 20px 0
    }
    .profile ul li a {
        padding: 0px;
    }
.logo:before {
    background: #fff;
    content: '';
    height: 206px;
    position: absolute;
    width: 230px;
    -webkit-transform: skew(40deg) translate(5px, -78px);
    -moz-transform: skew(40deg) translate(5px, -78px);
    transform: skew(40deg) translate(5px, -78px)
}

.logo:after {
    content: '';
    height: 33px;
    left: 2px;
    position: absolute;
    top: 0;
    width: 229px;
    z-index: -1;
    -webkit-transform: skew(40deg) translate(-69px, 95px);
    -moz-transform: skew(40deg) translate(-69px, 95px);
    transform: skew(40deg) translate(-69px, 95px)
}

.logo a,
.main-navigation li.menu {
    position: relative
}

.logo a {
    color: #6a6a6a;
    /*height: 31px;*/
    left: 10px;
    top: 0px;
    width: 100%
}

header .page-location {
    background: 0 0;
    margin-left: 60px;
    padding: 2px 0;
    position: relative;
    z-index: 8
}

.mr-1000-top {
    position: relative
}

.mr-1000,
.mr-1000-left {
    height: 100%;
    position: absolute;
    top: 0;
    width: 300%
}

.main-navigation .mr-1000 {
    background: #fff;
    box-shadow: 0 4px 2px -3px #e9e9e9;
    left: 20px;
    z-index: 5
}

.main-navigation .mr-1000-home {
    z-index: 9;
}

.main-slider {
    margin-bottom: 20px
}

.mr-1000 {
    background: #f5f5f5;
    z-index: 5
}

.mr-1000-left {
    background: #fff;
    left: 99%
}

.mr-1000-location {
    background: #2b2b2b;
    background: -moz-linear-gradient(left, #2b2b2b 0, #000 100%);
    background: -webkit-gradient(linear, left top, right top, color-stop(0, #2b2b2b), color-stop(100%, #000));
    background: -webkit-linear-gradient(left, #2b2b2b 0, #000 100%);
    background: -o-linear-gradient(left, #2b2b2b 0, #000 100%);
    background: -ms-linear-gradient(left, #2b2b2b 0, #000 100%);
    background: linear-gradient(to right, #2b2b2b 0, #000 100%);
    filter: "progid: DXImageTransform.Microsoft.gradient( startColorstr='#2b2b2b', endColorstr='#000000', GradientType=1)";
    left: 80px;
    transform: skew(40deg)
}

header .page-location strong {
    color: #3399ff;
    display: inline-block;
    padding-left: 200px
}

header .page-location strong span {
    display: inline-block;
    margin-right: 10px
}

header .page-location p {
    display: inline-block;
    margin: 0;
    text-transform: capitalize
}

header .page-location a {
    color: #fff;
    font-size: 11px;
    margin: 0 5px
}

header .page-location p span {
    color: #fff
}

.single-product {
    background: #fff;
    margin: 40px 0;
    padding: 15px;
    position: relative
}

.single-product img {
    width: 140px
}

.single-product .product-description {
    float: right;
    width: 55%
}

.single-product .product-description h3 {
    color: #3399ff;
    font-size: 29px;
    font-weight: 200;
    margin-bottom: 15px
}

.single-product .product-description p {
    line-height: 24px
}

.single-product span {
    background: #3399ff;
    bottom: 35px;
    color: #fff;
    font-weight: 700;
    left: -35px;
    opacity: 0;
    padding: 10px 20px;
    position: absolute;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    transition: all .5s ease
}

.single-product:hover span {
    bottom: 35px;
    left: 0;
    opacity: 1
}

.top-rated_feature_recent_item .owl-carousel-outer {
    position: relative
}

.top-rated_feature_recent_item .owl-carousel {
    margin-bottom: 40px;
    margin-top: 40px
}

.company .heading,
.faq-area .heading,
.product-category .heading,
.product-review .heading,
.return-policy .heading,
.testimonial .heading,
.top-brand .heading,
.top-rated_feature_recent_item .carousel-heading {
    background: #3399ff;
    height: 70px
}

.company h2,
.faq-area .heading h2,
.product-category .heading h2,
.product-review h2,
.return-policy .heading h2,
.testimonial .heading h2,
.top-brand .heading h2,
.top-rated_feature_recent_item .carousel-heading h2 {
    color: #fff;
    font-weight: 100;
    padding-left: 15px;
    position: relative;
    text-transform: capitalize;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
}

.top-brand a {
    margin-bottom: 30px
}

.top-rated_feature_recent_item .owl-controls {
    position: absolute;
    right: 0;
    top: -110px;
    z-index: 15
}

.top-rated_feature_recent_item .owl-nav {
    margin: 0
}

.top-rated_feature_recent_item .owl-nav [class*=owl-] {
    background: 0 0;
    border-left: 1px solid #fff;
    border-radius: 0;
    font-weight: 100;
    line-height: .6;
    margin: 0;
    padding: 0;
    position: relative
}

.top-rated_feature_recent_item .owl-nav [class*=owl-]:hover {
    background: 0 0
}

.top-rated_feature_recent_item .owl-nav .icon-wrap .fa {
    color: #fff
}

.top-rated_feature_recent_item .owl-nav .icon-wrap .fa:hover {
    background: #fff;
    color: #3399ff
}

.top-rated_feature_recent_item .owl-nav .fa:before {
    font-size: 80px;
    height: 70px;
    line-height: 70px;
    width: 65px;
    -webkit-font-smoothing: antialiased
}

.top-rated_feature_recent_item .item {
    overflow: hidden;
    position: relative;
    top: 0
}

.top-rated_feature_recent_item .item img {
    width: 100%;
    height: auto
}

.top-rated_feature_recent_item .item .product-price {
    background: rgba(51, 51, 51, .95);
    border-bottom: 5px solid #3399ff;
    bottom: 0;
    color: #fff;
    padding: 12px;
    position: absolute;
    width: 100%
}

.cart .table,
.continue-shopping .table input,
.fashion-content h2,
.price-range label,
.product-information .add-cart h3,
.product-information .heading strong,
.single-post .post-date .date h2,
.single-post .post-meta,
.single-product span,
.top-rated_feature_recent_item .item .product-price strong,
.update-checkout .table td,
.widget-calendar .table {
    font-family: Lato, sans-serif
}
.call-to-action{
display:none;
}
.cart-table .table {
    margin-bottom: 0
}

.top-rated_feature_recent_item .item .product-price strong {
    display: block;
    font-size: 18px
}

.top-rated_feature_recent_item .item .product-price sub {
    color: #ce5f5f;
    font-size: 12px;
    font-weight: 400;
    margin-left: 5px
}

.new,
.sale {
    background: #ce5f5f;
    color: #fff;
    line-height: 20px;
    padding: 2px 2px 2px 4px;
    position: absolute;
    top: 20px;
    -webkit-transform: skew(-30deg) translateX(-12px);
    -ms-transform: skew(-30deg) translateX(-12px);
    transform: skew(-30deg) translateX(-12px)
}

.new span,
.sale span {
    display: inline-block;
    font-size: 11px;
    padding-left: 15px;
    padding-right: 10px;
    text-transform: capitalize;
    transform: skew(30deg)
}

.comment-content,
.new span,
.sale span {
    -webkit-transform: skew(30deg);
    -ms-transform: skew(30deg)
}

.new {
    background: #2f9c16
}

.top-rated_feature_recent_item .item div.text-center {
    position: absolute;
    left: 0;
    bottom: -50px;
    width: 100%;
    max-height: 75px;
    background: #3399ff;
    padding: 20px 0;
    -webkit-transition: all .35s;
    transition: all .35s
}

.top-rated_feature_recent_item .item:hover div.text-center {
    bottom: 0;
    width: 100%
}

.top-rated_feature_recent_item .item p.icon-links a {
    color: #fff;
    display: none;
    font-size: 18px;
    line-height: 35px;
    margin: 0 10px;
    -webkit-transition: all .35s;
    transition: all .35s
}

.top-rated_feature_recent_item .item p.icon-links a:focus,
.top-rated_feature_recent_item .item p.icon-links a:hover {
    color: #000
}

.top-rated_feature_recent_item .item:hover p.icon-links a {
    display: inline-block
}

.top-rated_feature_recent_item .item:hover p.icon-links a:first-child,
.top-rated_feature_recent_item .item:hover p.icon-links a:nth-child(2),
.top-rated_feature_recent_item .item:hover p.icon-links a:nth-child(3) {
    -webkit-transition-delay: .1s;
    transition-delay: .1s
}

.ads-item-carousel-area {
    position: relative
}

.ads-item-control {
    position: absolute;
    top: -30px;
    left: 60px;
    font-size: 45px;
    color: #3399ff;
    font-weight: 100;
    opacity: 0;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.ads-item-control:focus {
    color: #3399ff
}

.ads-item-control:hover {
    color: #000
}

.left.ads-item-control {
    left: 20px
}

.ads-item-carousel-area:hover .ads-item-control {
    opacity: 1;
    top: 20px
}

.product-list-area {
    margin-top: 100px
}

.brands,
.categories,
.filter {
    background: #fff
}

.brands h2,
.categories h2,
.filter h2 {
    background: #3399ff;
    color: #fff;
    font-weight: 100;
    padding: 15px;
    text-transform: capitalize
}

.brands ul {
    padding: 15px
}

.categories .panel {
    box-shadow: none;
    border: none
}

.categories .panel-title {
    background: #fff;
    color: #4a4a4a;
    font-size: 14px;
    font-weight: 400;
    line-height: 20px
}

.categories .panel-title>a {
    border-bottom: 1px solid #e1e1e1;
    color: #7e7e7e;
    display: block;
    font-weight: 700;
    padding: 10px 0;
    position: relative;
    text-transform: capitalize
}

.glyphicon {
    background: #00a7dd;
    border-radius: 50%;
    color: #fff;
    float: right;
    font-size: 12px;
    padding: 5px;
    top: -2px
}

.brands ul li a,
.categories .panel-body ul li a {
    display: block;
    text-transform: capitalize;
    color: #7e7e7e
}

.categories .panel-group .panel+.panel {
    margin-top: 0
}

.categories .panel-body {
    background: 0 0;
    margin-left: 25px;
    margin-top: 0;
    padding: 0
}

.categories .panel-body ul li a {
    border-bottom: 1px solid #e1e1e1;
    font-weight: 400;
    line-height: 20px;
    padding: 10px 0;
    position: relative
}

.brands ul li a:after,
.categories .panel-body ul li a:after,
.categories .panel-title>a:after {
    background: #3399ff;
    content: '';
    height: 34px;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 3px;
    width: 5px
}

.brands ul li a:hover,
.categories .panel-body ul li a:hover {
    font-weight: 700
}

.brands ul li a:hover:after,
.categories .panel-body ul li a:hover:after,
.categories .panel-title>a:hover:after {
    opacity: 1
}

.categories .panel-group {
    margin: 0;
    padding: 15px
}

.categories .panel-default>.panel-heading {
    background: #fff;
    margin: 0;
    padding: 0
}

.brands ul li a {
    padding: 10px 0;
    position: relative
}

.brands ul li a .fa {
    margin-right: 5px
}

.filter .filter-form {
    padding: 20px 15px
}

.filter strong {
    display: block;
    margin-bottom: 12px;
    text-transform: capitalize
}

.size input[type=radio],
.size input[type=checkbox] {
    display: none
}

.size input[type=radio]+label,
.size input[type=checkbox]+label {
    background: #fff;
    border: 1px solid #e1e1e1;
    cursor: pointer;
    display: inline-block;
    font-weight: 700;
    height: 35px;
    line-height: 35px;
    margin-bottom: 0;
    margin-right: 8px;
    text-align: center;
    text-transform: uppercase;
    width: 35px
}

.size input[type=radio]:checked+label {
    background: #3399ff;
    border: 1px solid #3399ff;
    color: #fff
}

.size input[type=checkbox]:checked+label {
    border: 1px solid #3399ff
}

.filter .color .red {
    background: #e00000
}

.filter .color .black {
    background: #000
}

.filter .color .green {
    background: #8dc63f
}

.price-range input[type=radio]:not(old) {
    display: none;
    height: 18px;
    width: 18px
}

.price-range input[type=radio]:not(old)+label {
    cursor: pointer;
    display: inline-block;
    line-height: 18px;
    margin-right: 25px;
    width: 110px
}

.price-range input[type=radio]:not(old)+label>span {
    border: 1px solid #e1e1e1;
    display: inline-block;
    height: 18px;
    margin-right: 8px;
    vertical-align: bottom;
    width: 18px
}

.price-range input[type=radio]:not(old):checked+label>span>span {
    background: #3399ff;
    border: 1px solid #3399ff;
    display: block;
    height: 12px;
    margin: 2px;
    width: 12px
}

.filter .custom-price input {
    background: 0 0;
    border: 1px solid #e1e1e1;
    outline: 0;
    padding: 5px 15px;
    width: 43%
}

.filter .custom-price span {
    display: inline-block;
    font-weight: 700;
    text-align: center;
    width: 11%
}

.nav>li>a,
.nav>li>a>img {
    left: 0;
    position: relative;
    display: block
}

.filter .btn {
    background: #000;
    margin-top: 20px;
    text-transform: uppercase;
    width: 100%
}

.nav-tabs>li>a {
    border-radius: 4px 4px 0 0;
    border: 0;
    line-height: 1.42857;
    margin-right: 0
}

.nav>li>a {
    padding: 0
}

.nav>li>a>img {
    height: 150px;
    width: 100px
}

.nav-tabs>li.active>a,
.nav-tabs>li.active>a:focus,
.nav-tabs>li.active>a:hover {
    border-width: 0;
    color: #555;
    cursor: default
}

.product-information {
    border: 1px solid #e1e1e1;
    color: #7d7d7d
}

.product-information a {
    color: #7d7d7d
}

.product-information .add-cart,
.product-information .choice-size,
.product-information .heading,
.product-information .product-feature,
.product-information .share-product {
    border-bottom: 1px solid #e1e1e1;
    padding: 20px 15px
}

.product-information .heading h4 {
    color: #000;
    font-weight: 100
}

.product-information .heading ul {
    margin: 15px 0 30px
}

.product-information .heading li {
    display: inline-block;
    margin-right: 20px
}

.product-information .heading li a,
.product-information .heading li span {
    color: #000;
    font-weight: 700
}

.product-information .heading li a:hover {
    color: #3399ff
}

.product-information .heading strong {
    color: #000;
    font-size: 18px;
    text-transform: uppercase
}

.product-information .heading sub {
    color: #ce5f5f;
    font-size: 12px;
    font-weight: 400;
    margin-left: 5px
}

.post-meta .post-status li span,
.single-post .post-date .date h2 {
    font-weight: 700
}

.product-information .heading strong.stock {
    color: #2ecc71;
    margin-left: 60px
}

.product-information .heading strong.stock .fa {
    background: #2ecc71;
    border-radius: 50%;
    color: #fff;
    font-size: 14px;
    height: 18px;
    line-height: 17px;
    position: relative;
    text-align: center;
    top: -4px;
    width: 18px
}

.product-information .product-feature ul {
    list-style-type: disc;
    padding-left: 15px
}

.product-information .share-product ul.email-print {
    float: left;
    width: 55%
}

.product-information .share-product ul.email-print li {
    margin-right: 25px
}

.product-information .share-product ul li {
    display: inline-block
}

.product-information .share-product ul.fa-tweet li a {
    height: 20px;
    overflow: hidden;
    text-indent: 9999px;
    width: 56px
}

.product-information .share-product ul.fa-tweet li a.pin {
    background: url(../img/social-product.png) 0 center no-repeat;
    width: 45px
}

.product-information .share-product ul.fa-tweet li a.tweet {
    background: url(../img/social-product.png) -55px center no-repeat
}

.product-information .share-product ul.fa-tweet li a.fa {
    background: url(../img/social-product.png) -120px center no-repeat
}

.product-information .share-product ul li .fa {
    margin-right: 8px
}

.product-information .quantity input,
.product-information .quantity span {
    background: #fff;
    color: #000;
    display: inline-block;
    height: 36px;
    line-height: 34px;
    text-align: center;
    width: 36px
}

.product-information .quantity input {
    background: #3399ff;
    border: none;
    color: #fff;
    width: 56px
}

.product-information .add-cart h3 {
    color: #000;
    font-size: 34px;
    font-weight: 700;
    margin: 30px auto
}

.product-information .add-cart .btn {
    color: #fff;
    padding: 12px 40px;
    text-transform: uppercase
}

.product-information .brand {
    border-bottom: 1px solid #e1e1e1
}

.product-information .brand ul li {
    border-right: 1px solid #e1e1e1;
    display: inline-block;
    padding: 20px 0 20px 15px;
    width: 49%
}

.product-information .brand ul li:last-child {
    border-right: none
}

.product-information .tags {
    padding: 20px 0 20px 15px
}

.product-information .product-brand a {
    color: #3399ff;
    margin-left: 3px;
    text-transform: capitalize
}

.product-ads {
    margin: 40px 0
}

.blog-list-area {
    color: #7e7e7e;
    padding: 100px 0 80px;
    position: relative;
    z-index: 15
}

.single-post {
    background: #fff;
    padding-bottom: 30px
}

.single-post .post-date .date {
    background: #3399ff;
    color: #fefefe;
    float: left;
    padding: 5px 0;
    text-align: center;
    width: 75px
}

.single-post .post-date h2.year {
    float: left;
    margin-left: 10px;
    padding-top: 15px
}

.single-post .post-date .date span {
    font-size: 11px;
    line-height: 1;
    text-transform: capitalize
}

.post-meta .post-status {
    font-size: 12px;
    margin-right: 15px;
    margin-top: 30px
}

.post-meta .post-status li {
    display: inline-block
}

.post-meta .post-status li a {
    color: #6f6f6f;
    padding: 0 5px
}

.post-meta .post-status li .fa {
    position: relative;
    right: 3px
}

.blog-carousel-area {
    overflow: hidden;
    position: relative
}

.post-img-carousel-area .item img {
    height: auto;
    width: 100%
}

.blog-carousel-area:hover .blog-carousel-control {
    bottom: 0
}

.blog-carousel-control {
    background: rgba(0, 0, 0, .5);
    bottom: -50px;
    color: #fefefe;
    font-size: 30px;
    font-weight: 100;
    position: absolute;
    right: 0;
    text-align: center;
    width: 50px;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.blog-carousel-control.left {
    left: 0
}

.blog-carousel-control.right {
    right: 0
}

.blog-carousel-control i {
    line-height: 50px
}

.blog-carousel-control:focus,
.blog-carousel-control:hover {
    color: #3399ff
}

.left.blog-carousel-control {
    right: 40px
}

.single-post .post-content {
    padding: 0 15px
}

.single-post .post-content h2 {
    border-bottom: 1px solid #3399ff;
    font-weight: 100;
    padding: 20px 0
}

.single-post .post-content p {
    letter-spacing: .4px;
    line-height: 24px;
    padding: 20px 0
}

.readmore {
    display: block
}

.load-more a {
    text-transform: uppercase
}

.sidebar-widget {
    border: 1px solid #e1e1e1
}

.widget-ads {
    border: 0
}

.sidebar-widget h3 {
    border-bottom: 1px solid #e1e1e1;
    font-weight: 300;
    letter-spacing: 1px;
    padding: 20px 15px;
    text-transform: capitalize
}

.widget-subscribe .subscribe {
    padding: 20px 15px
}

.widget-subscribe input[type=email] {
    border-radius: 0;
    border: 1px solid #e1e1e1;
    font-size: 11px;
    padding: 10px;
    width: 86%
}

.widget-subscribe .subscribe .btn {
    background: #000;
    display: inline-block;
    left: -4px;
    position: relative
}

.widget-calendar .table caption {
    padding: 20px;
    position: relative;
    text-align: center
}

.widget-calendar .table caption a {
    color: #3399ff;
    position: absolute
}

.widget-calendar .table .previous-year {
    left: 20px
}

.widget-calendar .table .next-year {
    right: 20px
}

.widget-calendar .table caption span {
    font-size: 16px;
    text-align: center;
    text-transform: uppercase
}

.widget-calendar.table>tbody>tr>td {
    border-top: 0 solid #ddd;
    text-align: center
}

.widget-calendar .table thead tr th {
    border: none;
    font-size: 13.99px;
    font-weight: 400;
    text-align: center
}

.widget-calendar.table tbody td {
    border: none;
    font-size: 12px;
    font-weight: 700
}

.widget-calendar .table tbody td a {
    background: #3399ff;
    color: #fff;
    display: block;
    padding: 5px
}

.widget-calendar .table>tbody>tr>td,
.widget-calendar .table>thead>tr>th {
    text-align: center
}

.next-previous-pagination {
    height: 40px;
    position: relative
}

.next-previous-pagination .previous-post {
    left: 15px;
    position: absolute
}

.next-previous-pagination .next-post {
    position: absolute;
    right: 15px
}

.comment-content,
.widget-popular-post .popular-item {
    position: relative
}

.comment-area {
    margin-bottom: 60px
}

.comment-area h3 {
    color: #3399ff;
    font-weight: 200;
    margin-bottom: 30px;
    text-transform: capitalize
}

.comment h3,
.comment-box button,
.comment-box label {
    text-transform: uppercase
}

.comment-box {
    margin-bottom: 40px
}

.comment-box label {
    display: block;
    margin-bottom: 10px
}

.comment-box input,
.comment-box textarea {
    background: #f5f5f5;
    border-radius: 0;
    border: 1px solid #d7d7d7;
    color: #7d7d7d;
    margin-bottom: 20px;
    padding: 5px 15px;
    resize: none;
    width: 100%
}

.comment-box textarea {
    height: 200px
}

.comment h3 span {
    margin-left: 2px
}

.comment-body .comment-author {
    float: left
}

.comment-body .comment-author img {
    background: #3399ff;
    padding: 5px
}

.comment-body .comment-author span {
    color: #5a5a5a;
    display: block;
    margin-top: 5px;
    text-indent: 15px;
    text-transform: capitalize
}

.comment-content {
    border: 1px solid #d7d7d7;
    margin-left: 140px;
    padding: 15px;
    right: 20px;
    top: 20px;
    transform: skew(30deg)
}

.comment-content p {
    display: inline-block;
    margin-bottom: 0;
    margin-top: 5px;
    -webkit-transform: skew(-30deg);
    -ms-transform: skew(-30deg);
    transform: skew(-30deg)
}

.comment-content img.rating {
    float: right;
    position: relative;
    right: 20px;
    transform: skew(-30deg)
}

.comment-content img.rating,
.comment-meta {
    -webkit-transform: skew(-30deg);
    -ms-transform: skew(-30deg)
}

.product-review ol.parent-comment {
    margin: 60px 0
}

.comment-meta {
    font-size: 11px;
    transform: skew(-30deg)
}

.comment-meta a {
    color: #3399ff;
    text-indent: 15px
}

.comment-body .btn {
    float: right;
    margin-top: 30px;
    text-transform: uppercase
}

.call-to-action {
    background: url(../img/blog/call-to-action-bg.jpg);
    padding: 40px 0
}

.call-to-action h3 {
    margin-bottom: 30px
}

.call-to-action input {
    border-radius: 0;
    border: 1px solid #e1e1e1;
    font-size: 11px;
    padding: 10px 25px;
    width: 50%
}

.widget-popular-post .item-heading {
    background: rgba(244, 244, 243, .9);
    font-weight: 300;
    height: 0;
    height: 92px;
    opacity: 0;
    padding: 20px 15px;
    position: absolute;
    top: 0;
    -webkit-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    width: 100%
}

.widget-popular-post .item-heading a {
    color: #8b8b8b;
    display: block
}

.widget-popular-post .popular-item:hover .item-heading {
    opacity: 1;
    top: 50px
}

.feature-brands {
    background: #3399ff;
    padding: 35px 0 25px;
    position: absolute;
    width: 100%;
    z-index: 1000
}

.single-brand {
    height: 84px;
    text-align: center
}

.single-brand a {
    top: 50%;
    transform: translateY(-50%)
}

.image-wrap img,
.single-brand a {
    position: relative;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%)
}

.cart .table,
.user-profile,
.wishlist .table {
    color: #7e7e7e
}

.wishlist .table {
    margin-bottom: 0
}

.cart .table span,
.wishlist .table span {
    display: block;
    margin-bottom: 8px;
    text-transform: capitalize
}

.cart .table strong,
.wishlist .table strong {
    color: #000;
    display: inline-block;
    font-weight: 700;
    margin: 20px 0 30px;
    text-transform: uppercase
}

.cart .table td a,
.wishlist .table td a {
    color: #000;
    font-weight: 700
}

.cart .table del,
.wishlist .table del {
    margin-right: 10px
}

.cart .table>tbody>tr>td,
.cart .table>thead>tr>th,
.wishlist .table>tbody>tr>td,
.wishlist .table>thead>tr>th {
    border: 1px solid #e1e1e1;
    padding: 10px
}

.cart .table>thead>tr>th,
.wishlist .table>thead>tr>th {
    background: #3399ff;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase
}

.cart .table tbody td:first-child,
.wishlist .table tbody td:first-child {
    width: 150px
}

.cart .table tbody td img,
.wishlist .table tbody td img {
    height: auto;
    width: 170px
}

.wishlist .table tbody td .fa:before {
    height: 36px;
    line-height: 36px;
    width: 36px
}

.continue-shopping .table {
    border: 1px solid #e1e1e1;
    color: #7e7e7e
}

.continue-shopping .table thead th {
    color: #3399ff;
    font-size: 30px;
    line-height: .8;
    padding: 15px
}

.continue-shopping .table tbody td {
    padding: 10px 15px
}

.continue-shopping .table tbody td label {
    font-weight: 700;
    text-transform: capitalize
}

.continue-shopping .table tbody td span {
    display: inline-block;
    width: 100px
}

.continue-shopping form input[type=text],
.continue-shopping form select {
    background: 0 0;
    border: 0;
    font-weight: 700;
    margin-left: 40px;
    padding: 3px 15px;
    text-transform: capitalize;
    width: 60%
}

.continue-shopping .table>thead>tr>th {
    border-bottom: 0
}

.continue-shopping form option {
    border: 0;
    padding: 3px 15px;
    width: 100%
}

.continue-shopping .btn,
.update-checkout .btn {
    text-transform: uppercase
}

.update-checkout .btn.update {
    background: #000;
    margin-right: 20px
}

.update-checkout .btn.update:hover {
    background: #3399ff;
    border: 1px solid #3399ff;
    color: #fff
}

.update-checkout .table {
    border: 1px solid #e1e1e1
}

.update-checkout .table tr td {
    font-weight: 700;
    padding: 15px;
    text-align: center;
    text-transform: uppercase
}

.update-checkout .table tr td:first-child {
    font-weight: 400;
    text-align: right
}

.update-checkout .table tr td input[type=text] {
    border: 0;
    padding: 5px 15px;
    width: 100%
}

.wishlist {
    margin-top: 30px
}

.wishlist .social-icon {
    margin-bottom: 30px
}

.wishlist .social-icon h2 {
    color: #3399ff;
    display: inline-block;
    font-weight: 100;
    line-height: .9;
    text-transform: capitalize
}

.wishlist .social-icon .icon-wrap {
    display: inline-block;
    float: right;
    margin-bottom: 0
}

.wishlist .social-icon .icon-wrap .fa {
    box-shadow: 0 0 0 1px rgba(225, 225, 225, 1);
    color: #000;
    height: 36px;
    margin: 0 5px;
    width: 36px
}

.wishlist .social-icon .icon-wrap .fa:hover,
.wishlist .table .icon-wrap .fa.fa-shopping-cart {
    background: #3399ff;
    box-shadow: 0 0 0 2px rgba(255, 255, 255, .3);
    color: #fff
}

.wishlist .social-icon .icon-wrap .fa:last-child {
    margin-right: 0
}

.wishlist .social-icon .icon-wrap .fa:before {
    line-height: 36px
}

.wishlist .table .icon-wrap .fa.fa-shopping-cart {
    margin-top: 20px
}

.user-profile {
    background: #fff;
    color: #7d7d7d;
    padding: 20px
}

.user-info {
    border-bottom: 1px solid #e1e1e1;
    padding-bottom: 50px
}

.user-info .namecode {
    left: 10px;
    position: relative;
    top: 10px
}

.user-info h4 {
    font-size: 14px;
    font-weight: 700;
    text-transform: capitalize
}

.user-info div {
    display: inline-block
}

.image-wrap {
    background: #e1e1e1;
    display: inline-block;
    height: 100px;
    width: 100px
}

.image-wrap img {
    border-radius: 50%;
    height: 65px;
    top: 50%;
    transform: translateY(-50%);
    width: 65px
}

.user-profile ul li a {
    border-bottom: 1px solid #e1e1e1;
    color: #7e7e7e;
    display: block;
    font-weight: 700;
    padding: 8px 0;
    position: relative;
    text-transform: uppercase
}

.user-profile ul li a:after {
    background: #3399ff;
    content: '';
    height: 30px;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 3px;
    width: 5px
}

.user-profile ul li a:hover:after {
    opacity: 1
}

.about-company p {
    color: #7e7e7e
}

.return-policy .single-policy a {
    background: #fff;
    color: #919191;
    display: block;
    font-size: 18px;
    padding: 35px 0;
    text-align: center;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.return-policy .single-policy a:hover {
    color: #fff;
    background: #3399ff;
    font-weight: 700
}

.return-policy .single-policy a .fa {
    color: #3399ff;
    font-size: 50px;
    margin-bottom: 20px;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.return-policy .single-policy a:hover .fa {
    color: #fff
}

.return-policy .single-policy a span {
    display: block
}

.return-policy p {
    color: #7e7e7e;
    line-height: 24px;
    margin-bottom: 0
}

.widget-policy {
    color: #7e7e7e
}

.widget-policy ul {
    list-style-type: disc;
    margin-left: 15px;
    padding: 20px 15px
}

.widget-policy ul li {
    margin-bottom: 10px;
    text-transform: capitalize
}

.widget-policy ul li:last-child {
    margin-bottom: 0
}

.single-testimonial {
    border: 1px solid #e1e1e1;
    clear: both;
    -webkit-transition: border .3s ease-in-out;
    transition: border .3s ease-in-out
}

.single-testimonial:hover {
    border: 1px solid #3399ff
}

.single-testimonial .img-wrap {
    border-right: 1px solid #e1e1e1;
    float: left;
    height: 198px;
    width: 198px
}

.single-testimonial.active .img-wrap {
    border-right: 1px solid #3399ff
}

.single-testimonial .content {
    padding: 20px 20px 0 220px
}

.single-testimonial .content p {
    color: #7d7d7d;
    font-size: 15px;
    font-weight: 300;
    line-height: 26px;
    margin-bottom: 10px
}

.single-testimonial .content .client-social-icon p {
    display: inline-block;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 11px
}

.single-testimonial .content .client-social-icon p span {
    color: #3399ff;
    font-weight: 700
}

.client-social-icon ul {
    display: inline-block;
    float: right
}

.client-social-icon ul li {
    display: inline-block;
    margin-left: 10px
}

.client-social-icon ul li a {
    color: #3399ff
}

.billing-details h2 {
    color: #3399ff;
    font-weight: 100
}

.billing-details h4,
.login-form h4 {
    border-bottom: 1px solid #e1e1e1;
    color: #000;
    font-weight: 200;
    margin-bottom: 20px;
    padding-bottom: 10px;
    text-transform: uppercase
}

.billing-details h4 a {
    color: #000;
    font-weight: 700
}

.billing-details h4 a:hover {
    color: #3399ff
}

.login-form label,
.signup-form label {
    color: #7d7d7d;
    display: block;
    font-weight: 700;
    margin-bottom: 10px;
    position: relative;
    text-transform: capitalize
}

.rememberme label,
.signup-form label span {
    color: #7d7d7d;
    font-weight: 400
}

.contact-form input[type=text],
.contact-form input[type=email],
.contact-form textarea,
.login-form input[type=text],
.login-form input[type=password],
.signup-form input[type=text],
.signup-form input[type=email],
.signup-form input[type=number],
.signup-form input[type=password],
.signup-form select {
    background: 0 0;
    border: 1px solid #e1e1e1;
    color: #7d7d7d;
    margin-bottom: 20px;
    padding: 5px 15px;
    resize: none;
    text-transform: capitalize;
    width: 100%
}

.contact-form textarea {
    height: 200px
}

.contact-form .btn {
    width: 100%
}

.comment-box div.focus,
.contact-form div.focus,
.login-form div.focus,
.signup-form div.focus {
    position: relative
}

.comment-box div.focus span,
.contact-form div.focus span,
.login-form div.focus span,
.signup-form div.focus span {
    background: #3399ff;
    content: "";
    display: inline-block;
    height: 25px;
    opacity: 0;
    position: absolute;
    right: 5px;
    text-indent: -9999px;
    top: 4px;
    visibility: hidden;
    width: 5px;
    z-index: 500;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.comment-box div.focus textarea+span,
.contact-form div.focus textarea+span {
    height: 192px
}

.comment-box div.focus input:focus+span,
.comment-box div.focus textarea:focus+span,
.contact-form div.focus input:focus+span,
.contact-form div.focus textarea:focus+span,
.login-form div.focus input:focus+span,
.signup-form div.focus input:focus+span {
    opacity: 1;
    visibility: visible
}

.goto .fa,
.signup-form label.country:after {
    opacity: 0
}

.signup-form select {
    padding: 7px 15px
}

.sidebar .order-detail form option,
.signup-form option {
    padding: 5px 15px
}

.login-form {
    margin-top: 95px
}

.login-form .btn {
    margin: 30px 0;
    padding: 10px 85px;
    text-transform: uppercase
}

.rememberme label {
    cursor: pointer;
    display: inline-block;
    margin-right: 15px;
    padding-left: 25px;
    position: relative
}

.rememberme input[type=checkbox] {
    display: none
}

.rememberme label:before {
    border: 1px solid #000;
    bottom: 1px;
    content: "";
    display: inline-block;
    height: 16px;
    left: 0;
    margin-right: 10px;
    position: absolute;
    width: 16px
}

.rememberme input[type=checkbox]:checked+label:before {
    color: #3399ff;
    content: "\2713";
    font-size: 14px;
    line-height: 15px;
    text-align: center
}

.login-form a {
    color: #00b2e5;
    font-weight: 300
}

.login-form a:hover {
    color: #3399ff
}

.sidebar .order-detail {
    background: #fff;
    color: #7d7d7d;
    padding: 20px 20px 60px
}

.sidebar .order-detail h4 {
    border-bottom: 1px solid #3399ff;
    color: #3399ff;
    padding-bottom: 20px;
    text-transform: uppercase
}

.sidebar .order-detail .table>thead>tr>th {
    border-bottom: 1px solid #3399ff;
    color: #000;
    text-transform: uppercase
}

.sidebar .order-detail .table>tbody>tr>td,
.sidebar .order-detail .table>thead>tr>th {
    padding: 15px 0
}

.sidebar .order-detail .table tr td {
    text-transform: capitalize
}

.sidebar .order-detail .table tr td strong {
    text-transform: uppercase
}

.sidebar .order-detail .table tr td:last-child,
.sidebar .order-detail .table tr th:last-child {
    text-align: right
}

.sidebar .order-detail form strong {
    border-bottom: 1px solid #3399ff;
    border-top: 1px solid #3399ff;
    color: #000;
    display: block;
    padding: 20px 0
}

.sidebar .order-detail form select {
    color: #7d7d7d;
    margin-bottom: 60px;
    margin-top: 20px;
    padding: 2px 15px;
    text-transform: capitalize;
    width: 100%
}

.sidebar .order-detail form .btn {
    padding: 10px 50px;
    text-transform: uppercase
}

.coupon .nav>li>a,
.product-category a {
    text-align: center;
    text-transform: capitalize
}

.faq-area .panel-heading {
    padding: 0
}

.faq-area .panel-heading .panel-title a {
    border: 1px solid #d7d7d7;
    color: #7d7d7d;
    display: block;
    font-weight: 600;
    padding: 8px 10px;
    position: relative
}

.faq-area .panel-heading .panel-title a span {
    background: #acacac;
    display: inline-block;
    height: 28px;
    position: absolute;
    right: 10px;
    width: 3px
}

.faq-area .panel-heading.active .panel-title a span {
    background: #3399ff
}

.faq-area .panel {
    border: none;
    box-shadow: none;
    margin-top: 0
}

.faq-area .panel-body {
    background: #f5f5f5;
    padding: 15px 0 10px 10px
}

.faq-area .panel-body p {
    color: #7e7e7e;
    font-size: 14px;
    line-height: 28px;
    padding: 0 15px;
    position: relative
}

.faq-area .panel-body p:before {
    background: #3399ff;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 8px;
    width: 3px
}

.panel-default>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #f5f5f5
}

.ask-que h3 {
    color: #7e7e7e;
    font-weight: 300;
    margin-bottom: 20px
}

.ask-que input {
    background: 0 0;
    border: 1px solid #e1e1e1;
    color: #7d7d7d;
    padding: 15px 60px 18px 15px;
    width: 60%
}

.ask-que .btn {
    background: #3399ff;
    display: inline-block;
    left: -5px;
    padding: 14px 8px;
    position: relative
}

.ask-que .btn:hover {
    background: #000;
    border-color: #000;
    color: #fff
}

.coupon .nav>li>a {
    background: #e1e1e1;
    border-radius: 0;
    color: #6b6b6b;
    display: inline-block;
    font-size: 20px;
    font-weight: 700;
    padding: 8px 0;
    width: 190px
}

.coupon .nav-tabs>li.active>a,
.coupon .nav-tabs>li.active>a:focus,
.coupon .nav-tabs>li.active>a:hover {
    background: #3399ff;
    color: #fff
}

.coupon .img-wrap {
    float: left;
    width: 170px
}

.coupon .coupon-content {
    background: #fff;
    display: inline-block;
    padding: 11px 7px;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.coupon .coupon-content span {
    color: #fff;
    font-weight: 300
}

.coupon .coupon-content h4 {
    color: #fff;
    font-size: 18px;
    font-weight: 700
}

.coupon .coupon-content h3 {
    color: #000;
    font-size: 24px;
    font-style: italic;
    font-weight: 700;
    margin: 12px 0
}

.coupon .coupon-content strong a {
    color: #a03737;
    font-weight: 700
}

.coupon .coupon-content ul {
    margin: 15px 0 30px
}

.coupon .coupon-content ul li {
    display: inline-block;
    margin-right: 15px
}

.coupon .coupon-content ul li a {
    color: #000;
    font-size: 18px
}

.coupon .coupon-content ul li a:hover {
    color: #fff
}

.coupon .coupon-content .btn {
    background: #fff;
    color: #000;
    display: block
}

.coupon .coupon-content .btn:hover {
    border: 1px solid #3399ff;
    color: #3399ff
}

.coupon .single:hover .coupon-content {
    background: #3399ff
}

.product-category a {
    color: #4d4d4d;
    font-size: 18px;
    font-weight: 300
}

.product-category a span {
    display: inline-block;
    margin-top: 10px
}

.goto,
.player .title header {
    display: none
}

.product-category a:hover span {
    color: #3399ff
}

.fashion {
    color: #7e7e7e
}

.map-area a i,
.map-area i:focus {
    color: #3399ff
}

.fashion-content h2 {
    border-bottom: 1px solid #3399ff;
    font-family: Raleway, sans-serif;
    margin-top: 15px;
    padding-bottom: 20px
}

.fashion-content p {
    line-height: 2;
    margin-bottom: 0;
    padding-top: 20px
}

.fashion .video iframe {
    height: 320px;
    width: 570px
}

.embed-container {
    height: 0;
    max-width: 100%;
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative
}

.embed-container iframe {
    border: 0!important
}

.embed-container embed,
.embed-container iframe,
.embed-container object {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.goto .fa {
    border: 2px solid #3399ff;
    bottom: 80px;
    position: fixed;
    right: 60px;
    z-index: 50
}

.goto .fa:before {
    color: #3399ff;
    font-size: 18px;
    height: 36px;
    line-height: 36px;
    width: 36px
}

.goto .fa:hover {
    background: 0 0
}

.goto.show {
    display: block
}

.goto.show .fa {
    opacity: 1
}

.page404 {
    display: table;
    height: 100%;
    left: 0;
    position: absolute;
    text-align: center;
    top: 0;
    width: 100%;
    z-index: 999999
}

.map-area {
    border-bottom: 1px solid rgba(255, 255, 255, .1)
}

.map-area a {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-delay: 2s;
    animation-delay: 2s
}

.map-area a i {
    cursor: pointer;
    display: inline-block;
    font-size: 25px;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.map-area i:hover {
    color: #fff
}

.map-area.contact-page {
    border: none
}

.map-container {
    height: 0;
    overflow: hidden;
    position: relative;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.map-container.active {
    height: 400px!important
}

.map-container .map-address-container {
    background: rgba(255, 255, 255, .9);
    border-left: 5px solid #3399ff;
    bottom: 0;
    height: 200px;
    left: 20px;
    padding-left: 30px;
    position: absolute;
    text-align: left;
    width: 250px
}

.map-container .map-address-container .map-icon {
    color: #3399ff;
    font-size: 30px;
    padding: 15px 0
}

.map-container .map-address-container p {
    font-size: 15px;
    margin: 0
}

#map {
    height: 400px;
    width: 100%
}

.btn:hover {
    background: #000;
    border: 1px solid #000;
    color: #fff
}

.product-hover {
    background: #3399ff;
    bottom: 0;
    padding: 20px 0;
    -webkit-transition: all .35s ease 0s;
    transition: all .35s ease 0s
}

.page404 .page404-container {
    display: table-cell;
    vertical-align: middle
}

.page404 .page404-container h1 {
    color: #3399ff;
    font-size: 90px;
    font-weight: 100;
    margin-bottom: 30px
}

.page404 .page404-container p {
    color: #000;
    font-size: 20px;
    font-weight: 400;
    letter-spacing: 3px;
    margin-bottom: 60px
}

.page404 .page404-container .btn {
    margin: 10px
}

.page404 .page404-container .box {
    background: url(../img/404.png) center center no-repeat;
    height: 200px;
    width: 100%
}

.page404 .page404-container .box i {
    -webkit-animation-delay: 3s;
    animation-delay: 3s;
    color: #3399ff;
    font-size: 60px;
    position: relative;
    right: -100px;
    top: 60px
}

.page404 .btn {
    margin-right: 30px;
    margin-top: 40px;
    outline: 0;
    padding: 10px 80px;
    text-transform: uppercase
}

.footer-bottom .alphabetical span,
.footer-widget h4 {
    text-transform: capitalize
}

footer {
    background: #262626;
    margin-top: 150px
}

footer a {
    color: #8b8b8b
}

footer a:hover {
    color: #fff
}

.footer-widget {
    padding: 60px 0 20px
}

.footer-widget h4 {
    color: #3399ff;
    margin-bottom: 30px
}

.footer-social-icon .icon-wrap,
.subscription h3 {
    margin-bottom: 10px
}

.call-to-action .subscribe .fa:before,
.footer-widget h4 span,
.sidebar .subscribe .fa:before,
.single-widget.subscribe .fa:before {
    color: #fff
}

.footer-widget ul li a {
    line-height: 24px
}

.single-widget.subscribe input[type=email] {
    border-radius: 0;
    border: 1px solid #e1e1e1;
    font-size: 11px;
    padding: 10px;
    width: 120px
}

.call-to-action .subscribe button,
.sidebar .subscribe button,
.single-widget.subscribe button {
    background: #000;
    border: 0;
    left: -4px;
    padding: 0;
    position: relative;
    top: 10px
}

.call-to-action .subscribe .fa,
.sidebar .subscribe .fa,
.single-widget.subscribe .fa {
    background: #000;
    padding: 8px 13px
}

#subscribe button.close {
    display: none;
    position: absolute;
    right: 0
}

#subscribe .modal-content:hover button.close {
    display: block
}

#subscribe .modal-content button {
    font-size: 30px;
    padding-right: 10px
}

.subscription {
    background: #fff;
    padding: 0
}

.subscription h3 {
    color: #3399ff
}

.subscription .left,
.subscription .right {
    display: table-cell;
    vertical-align: middle
}

.subscription .left {
    padding: 20px 30px
}

.subscription .left input {
    line-height: 20px;
    width: 90%
}

.subscription .left button {
    padding: 0 3px;
    top: 7px
}

.subscription .left button .fa {
    background: #000!important;
    padding: 2px 10px!important
}

.subscription .left .icon-wrap {
    text-align: left
}

.subscription .left .icon-wrap .fa {
    background: #3399ff;
    height: 30px;
    padding: 0;
    width: 30px
}

.subscription .left .icon-wrap .fa:before {
    line-height: 30px
}

.footer-bottom ul li {
    display: inline
}

.footer-bottom .alphabetical ul,
div.stars {
    display: inline-block
}

.footer-social-icon .icon-wrap .fa {
    color: #fff;
    margin: 0 10px;
    padding: 5px 10px
}

.footer-bottom .change-lang ul li a span,
.live-chat i {
    color: #3399ff
}

.footer-social-icon .icon-wrap .fa:hover {
    background: 0 0;
    color: #3399ff
}

.footer-bottom {
    position: relative;
    padding: 40px 0
}

.footer-bottom ul {
    margin-bottom: 15px
}

.footer-bottom .change-lang li span,
.policy li span {
    display: inline-block;
    margin: 0 5px
}

.footer-bottom .alphabetical ul li {
    border-right: 1px solid #8b8b8b;
    line-height: 0;
    padding: 0 5px
}

.payment-method {
    margin-bottom: 25px
}

.payment-method img {
    margin: 0 5px
}

.live-chat {
    bottom: 0;
    position: absolute
}

.live-chat i {
    font-size: 65px;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.live-chat i:hover {
    color: #fff
}

input.star-5:checked~label.star:before,
label.star {
    color: #3399ff
}

.lazy-load {
    background: #fff;
    height: 100%;
    overflow: hidden;
    position: fixed;
    width: 100%;
    z-index: 9999
}

input.star {
    display: none
}

label.star {
    cursor: pointer;
    float: right;
    font-size: 30px;
    font-weight: 100;
    margin: 0 20px 10px 0;
    -webkit-transition: all .2s;
    transition: all .2s
}

input.star:checked~label.star:before {
    color: #3399ff;
    content: '\f005';
    -webkit-transition: all .25s;
    transition: all .25s
}

label.star:hover {
    -webkit-transform: rotate(-15deg) scale(1.3);
    -ms-transform: rotate(-15deg) scale(1.3);
    transform: rotate(-15deg) scale(1.3)
}

label.star:before {
    content: '\f006';
    font-family: FontAwesome
}

.long-shadow {
    box-shadow: #d7d7d7 1px 1px, #d7d7d7 2px 2px, #d7d7d7 3px 3px, #d8d8d8 4px 4px, #d8d8d8 5px 5px, #d8d8d8 6px 6px, #d9d9d9 7px 7px, #d9d9d9 8px 8px, #d9d9d9 9px 9px, #dadada 10px 10px, #dadada 11px 11px, #dadada 12px 12px, #dbdbdb 13px 13px, #dbdbdb 14px 14px, #dbdbdb 15px 15px, #dcdcdc 16px 16px, #dcdcdc 17px 17px, #dcdcdc 18px 18px, #ddd 19px 19px, #ddd 20px 20px, #ddd 21px 21px, #dedede 22px 22px, #dedede 23px 23px, #dedede 24px 24px, #dfdfdf 25px 25px, #dfdfdf 26px 26px, #dfdfdf 27px 27px, #e0e0e0 28px 28px, #e0e0e0 29px 29px, #e0e0e0 30px 30px, #e1e1e1 31px 31px, #e1e1e1 32px 32px, #e1e1e1 33px 33px, #e2e2e2 34px 34px, #e2e2e2 35px 35px, #e2e2e2 36px 36px, #e3e3e3 37px 37px, #e3e3e3 38px 38px, #e3e3e3 39px 39px, #e4e4e4 40px 40px, #e4e4e4 41px 41px, #e4e4e4 42px 42px, #e5e5e5 43px 43px, #e5e5e5 44px 44px, #e5e5e5 45px 45px, #e6e6e6 46px 46px, #e6e6e6 47px 47px, #e6e6e6 48px 48px, #e7e7e7 49px 49px, #e7e7e7 50px 50px, #e7e7e7 51px 51px, #e8e8e8 52px 52px, #e8e8e8 53px 53px, #e8e8e8 54px 54px, #e9e9e9 55px 55px, #e9e9e9 56px 56px, #e9e9e9 57px 57px, #eaeaea 58px 58px, #eaeaea 59px 59px, #eaeaea 60px 60px, #ebebeb 61px 61px, #ebebeb 62px 62px, #ebebeb 63px 63px, #ececec 64px 64px, #ececec 65px 65px, #ececec 66px 66px, #ededed 67px 67px, #ededed 68px 68px, #ededed 69px 69px, #eee 70px 70px, #eee 71px 71px, #eee 72px 72px, #efefef 73px 73px, #efefef 74px 74px, #efefef 75px 75px, #f0f0f0 76px 76px, #f0f0f0 77px 77px, #f0f0f0 78px 78px, #f1f1f1 79px 79px, #f1f1f1 80px 80px, #f1f1f1 81px 81px, #f2f2f2 82px 82px, #f2f2f2 83px 83px, #f2f2f2 84px 84px, #f3f3f3 85px 85px, #f3f3f3 86px 86px, #f3f3f3 87px 87px, #f4f4f4 88px 88px, #f4f4f4 89px 89px, #f4f4f4 90px 90px
}

button#corporate {
    width: 83%;
    margin-left: 7%;
}

button#individual {
    width: 83%;
    margin-left: 7%;
}
/*Individual membership*/
/* 
select#fname {

    height: 37px;
}
select#fname1 {
    height: 37px;
}

select#memberoftrc { height: 37px; }


.name {
    width: 30%;
    height: 37px;
}

.nric {
    width: 30%;
    height: 37px;
}

.dob {
    width: 30%;
    height: 37px;
}

.nationality {
    width: 30%;
    height: 37px;
}

#gender {
   height: 37px;
} */
.group{ text-align:justify;font-weight:600;line-height:30px;height:auto }
panel-title  {
    color: inherit;
    font-size: 16px;
    font-weight: 600 !important;
    margin-bottom: 0;
    margin-top: 0;
	height:130px;
}
.panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
    color: inherit;
    font-weight: 600;
}
.past
{
 margin-left: 33%;
}
/* #marriage {
    width: 15%;
    height: 37px
}

#residendial {
    width: 50%;
}

#pincode {
    width: 10%;
}

#hometele {
    width: 20%;
}

#handphone {
    width: 20%;
}

#proposername {
    width: 20%;
}

#proposernric {
    width: 20%;
}

#secondernric {
    width: 20%;
}

#secondername {
    width: 20%;
} */
/* End Indivdual Membership*/
/* Organization Membership */
/* .organization{
    width:30%;
    height:37px;

}
#raddress{
    width:50%;
}
#registerdaddress{
    width:50%;
} */
/*End  Organization Membership*/
.Proceed_button{
    margin-right: 10px;
    margin-bottom: 10px;
}
#clinic-reset{
    margin-right: 10px;
    margin-bottom: 10px;
}
#clinic-submit{
    margin-right: 10px;
    margin-bottom: 10px;
}
@-webkit-keyframes toRightFromLeft {
    49% {
        -webkit-transform: translate(100%)
    }
    50% {
        opacity: 0;
        -webkit-transform: translate(-100%)
    }
    51% {
        opacity: 1
    }
}

@-moz-keyframes toRightFromLeft {
    49% {
        -moz-transform: translate(100%)
    }
    50% {
        opacity: 0;
        -moz-transform: translate(-100%)
    }
    51% {
        opacity: 1
    }
}

@keyframes toRightFromLeft {
    49% {
        transform: translate(100%)
    }
    50% {
        opacity: 0;
        transform: translate(-100%)
    }
    51% {
        opacity: 1
    }
}

@media screen and (max-width:360px) {
.formc {
    height: 37px;
    margin-bottom: 12px;
    
}
.btn, h5 {
    font-size: 15px;
}
#divform1 .formc {
    margin-bottom: 12px;
  }
.btnbottom button { margin-bottom:10px; }
#disabled { width:59%; }
#pincode {
    width: 65%;
}
#gender { width: 42%; }

* all */
::-webkit-input-placeholder { color:#f00; font-size:10px; }
::-moz-placeholder { color:#f00; font-size:10px; } /* firefox 19+ */
:-ms-input-placeholder { color:#f00; font-size:10px; } /* ie */
input:-moz-placeholder { color:#f00; font-size:10px; }

}

@media screen and (max-width:1199px) {
    select#fname {
             height: 37px;
    }
    #individualform {
        font-size: 11px;
    }
    .name {
        width: 60%;
        height: 37px;
    }
    .nric {
      
        height: 37px;
        margin-top: 10px;
    }
    #emailaddress {
        height: 37px;
        margin-top: 10px;
    }
    
    .nationality {
      
        height: 37px;
      
    }
    #gender {
       
        height: 37px;
       
    }
 .navbar-collapse.in{
        height:400px;
    }
   
    #clinic{
        width:10px;
    }

    .post-meta .post-status li a {
        padding-left: 2px;
        padding-right: 2px
    }
    .single-post .post-date h2.year {
        margin-left: 0;
        padding-bottom: 10px
    }
    .table>tbody>tr>td,
    .table>tbody>tr>th,
    .table>tfoot>tr>td,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>thead>tr>th {
        padding: 6px
    }
}

@media screen and (max-width:1280px) {
    .single-product {
        height: 200px
    }
    .single-product img {
        width: 100px
    }
    .single-product .product-description p {
        font-size: 13px;
        line-height: 22px
    }
    #belowbimages .a1 {
        margin-top: 15%;
        margin-left: 6%;
    }
    #belowbimages .a2 {
        margin-left: 6%;
    }
    /*#eventsss img
    {
            margin-left:15%;
            height:250px;
            width:250px;
    }	*/
    /*
    #eventsss #eventsimgsss
    {
            margin-left:15%;
    }*/
    #galleryy img {
        margin-left: 30%;
        height: 250px;
        width: 250px;
    }
    .anim-slide img#image-four,
    .anim-slide img#image-one,
    .anim-slide img#image-three,
    .anim-slide img#image-two {
        bottom: 14px;
        height: 356px;
        left: 39%;

    }
}

@media screen and (max-width:1920px) {
    .single-product {
        height: 200px
    }
    .single-product img {
        width: 100px
    }
    .single-product .product-description p {
        font-size: 13px;
        line-height: 22px
    }
    #belowbimages .a1 {
        margin-top: 20%;
        margin-left: 6%;
    }
    #belowbimages .a2 {
        margin-left: 6%;
    }
    /*#eventsss img
    {
            margin-left:24%;
            height:250px;
            width:250px;
    }*/
    #galleryy img {
        margin-left: 0%;
        height: 250px;
        width: 250px;
    }
   
    .anim-slide img#image-one
    {
        bottom: 14px;
        height: 356px;
        left: 39%;
;
    }
 .anim-slide img#image-four,
   
    .anim-slide img#image-three,
    .anim-slide img#image-two {
        bottom: 14px;
        height: 356px;
        left: 39%;
width:60%;
    }
}

@media screen and (max-width:992px) and (max-width:1199px) {
    .single-product {
        height: 200px
    }
    .single-product img {
        width: 100px
    }
    .single-product .product-description p {
        font-size: 13px;
        line-height: 22px
    }
    #belowbimages .a1 {
        margin-top: 14%;
        margin-left: 1%;
    }
    #belowbimages .a2 {
        margin-left: 1%;
    }
    /*
    #eventsss img
    {
            margin-left:32%;
            height:250px;
            width:250px;
    }	*/
    #galleryy img {
        margin-left: 30%;
        height: 250px;
        width: 250px;
    }
    .linkbuilding {
        color: #0082cc;
        cursor: pointer;
        font-size: 15px;
        font-weight: 600;
        margin-left: 35%;
        margin-top: 5%;
    }
    
    .anim-slide img#image-one,
  
    {
        bottom: 14px;
        height: 321px;
        left: 28%;

    }
 .anim-slide img#image-four,
    
    .anim-slide img#image-three,
    .anim-slide img#image-two {
        bottom: 14px;
        height: 321px;
        left: 28%;
width:70%
    }
}

@media screen and (min-width:668px) and (max-width:991px) {
    .main-navigation nav {
        background: #fff
    }
}

@media screen and (max-width:991px) {
	
.main-navigation nav {
    margin: 6px 0;
    overflow: visible;
    position: relative;
    right: 12px;
    z-index: 15
}

.main-navigation .navbar {
    background: 0 0;
    border: none
}

.main-navigation li.menu a.link {
    color: #7d7d7d;
    padding: 30px 15px;
    text-transform: capitalize
}

.main-navigation li.menu:hover a.link {
    color: #000
}

.main-navigation li.menu:before {
    background: #3399ff;
    content: '';
    display: block;
    height: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    top: -1px;
    visibility: hidden;
    width: 100%;
    z-index: -1;
    transform: skew(40deg);
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.main-navigation li.menu:before,
.mr-1000-location {
    -webkit-transform: skew(40deg);
    -moz-transform: skew(40deg)
}

.main-navigation li.menu:hover:before {
    opacity: 1;
    visibility: visible
}

.main-navigation li.dropdown ul {
    display: inline-block;
    left: 34px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    width: 275px;
    transition: all .5s ease-in-out
}
.main-navigation li.dropdown ul, .main-navigation li.megamenu-dropdown ul {
    background: #fff none repeat scroll 0 0;
    box-shadow: 0 0 2px 1px #e9e9e9;
    display: inline-block;
    left: 68px;
    margin-left: 33%;
    opacity: 0;
    padding: 30px;
    position: absolute;
    text-align: left;
    top: 50px;
    transition: all 0.5s ease-in-out 0s;
    visibility: hidden;
    width: 200px;
}
.dropdown-toggle { color:#fff ; }
.navbar-inverse .navbar-nav > li > a {
    color: #fff;
}
#title-one , #title-three{ 	margin-top:-30px !important; }
.banners-trc  { margin-bottom:20px; }
.banners-trc a {margin:auto;display:table }
.company .heading { margin-top:-20px; }

.main-navigation li.dropdown ul li {
    display: block;
    margin: 5px 0!important;
    padding: 5px 0;
}

.main-navigation li.dropdown ul li a {
    display: block;
    text-align: left;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li:hover {
    border-right: 5px solid #3399ff
}

.main-navigation li.dropdown ul li.has-child:before {
    color: #3399ff;
    content: "\f0da";
    font-family: FontAwesome;
    height: 30px;
    left: -15px;
    line-height: 30px;
    position: absolute;
    top: 0;
    width: 20px;
    z-index: 9999;
    -webkit-font-smoothing: antialiased
}

.main-navigation li.dropdown {
    position: relative
}

.main-navigation li.dropdown:hover>ul {
    display: inline-block;
    opacity: 1;
    visibility: visible;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li.dropdown ul {
    display: block;
    left: 150px;
    position: absolute;
    top: -10px;
    width: 200px;
}

.main-navigation li.dropdown ul li.dropdown ul li a {
    color: #6f6f6f;
}

.main-navigation li.dropdown ul li.dropdown ul li a:hover {
    color: #3399ff;
}

.main-navigation li.dropdown ul li.dropdown ul li ul {
    left: -165%
}

.main-navigation li.megamenu-dropdown ul {
    display: hidden;
    min-width: 600px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    z-index: 8888;
    transition: all .5s ease-in-out
}

.main-navigation li.megamenu-dropdown:hover>ul {
    display: block;
    opacity: 1;
    visibility: visible;
}

.main-navigation li ul li {
    margin-left: 20px;
}

.main-navigation li ul li:first-child {
    margin-left: 0
}

.main-navigation li ul li a {
    color: #6f6f6f;
    text-align: center;
}

.main-navigation li ul li a div {
    background: #edebe5;
    height: 124px;
    width: 70px
}

.main-navigation li ul li a .fa {
    line-height: 124px
}

.main-navigation ul li ul li:hover a {
    color: #3399ff
}

.main-navigation li ul li span {
    display: block;
    margin-top: 10px;
    text-transform: capitalize
}

.profile ul li a	{  color: #fff;
    font-weight: 600;
    text-align: center !important;
    text-decoration: none; }
	
    .main-navigation nav ul,
    .nav-slider .profile,
    .profile ul {
        text-align: center;
        background-color: #3399FF;
    }
    .profile {
        background-color: #3399FF;
    }
    .main-content {
        padding: 80px 0
    }
    .lang-currency {
        background: #f5f5f5;
        position: relative
    }
    .profile ul li {
        margin: 0px 0px 0
    }
    .profile ul li a {
        padding: 20px 0
    }
    .main-navigation {
        left: 15px
    }
    .main-navigation li.menu {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.menu a.link {
        padding: 20px 10px;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.menu ul {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.megamenu-dropdown ul {
        left: 0;
        top: 70px
    }
    .main-navigation li.dropdown ul {
        left: 0;
        top: 65px
    }
    .main-navigation li.dropdown ul li.dropdown ul {
        display: block;
        left: 150px;
        position: absolute;
        top: 0;
        width: 200px
    }
    .main-navigation .logo:after,
    .main-navigation .logo:before {
        display: none
    }
    .main-navigation .logo {
        background: #fff;
        display: block;
        display: table;
        height: 100px;
        left: -15px;
        margin: 10px auto;
        position: relative;
        text-align: center;
        width: 100%;
        z-index: 1000
    }
    .main-navigation .logo a {
        left: 0;
        position: relative;
        top: -2px
    }
    .nav-slider .anim-dots span {
        background: #e9be4b!important
    }
    header .page-location {
        background: #000;
        margin: 0 0 20px
    }
    header .page-location strong {
        padding-left: 15px
    }
    .main-navigation .mr-1000 {
        display: none
    }
    .main-navigation nav {
        left: -15px;
        margin: 20px 0
    }
    .mr-1000-left,
    .mr-1000-location {
        display: none!important
    }
    .blog-list .load-more {
        margin-bottom: 40px
    }
    .single-brand,
    .single-widget {
        margin-bottom: 10px
    }
    #ads-item-carousel {
        margin-bottom: 40px
    }
    .product-category {
        padding: 15px
    }
    .product-category a {
        display: block;
        margin-bottom: 20px;
        text-align: left
    }
    .top-brand {
        margin-top: 20px
    }
    .top-brand a {
        display: block;
        text-align: center
    }
    .continue-shopping .btn {
        margin-bottom: 40px
    }
    .signup-form .btn {
        margin-bottom: 20px;
        width: 100%
    }
    .place-order .btn {
        width: 100%
    }
}

@media only screen and (min-width:767px) and (max-width:767px) {
    .logo,
    .main-navigation,
    .main-navigation li,
    .main-navigation li.dropdown ul li.dropdown ul {
        position: relative
    }
    .main-navigation .logo:after,
    .main-navigation .logo:before {
        display: none
    }
    .main-navigation .logo {
        background: #fff;
        display: block;
        display: table;
        height: 140px;
        left: -15px;
        margin: 10px auto;
        position: relative;
        text-align: center;
        width: 200px;
        z-index: 1000;
    }
    #input input {
        width: 100%
    }
    .profile ul li {
        margin: 0 10px
    }
    .profile ul li a {
        padding: 10px
    }
    .single-product .product-description {
        width: 65%
    }
    #label label {
        padding: 0
    }
    #input {
        height: 50px;
        left: 50px;
        width: 300px
    }
    .main-content {
        padding: 40px 0
    }
    .top-social-icon .icon-wrap .fa {
        padding: 0
    }
    .nav-slider .profile {
        margin-top: 20px;
        text-align: center
    }
    #main-nav {
        overflow: hidden
    }
    .main-navigation nav {
        background: rgba(0, 0, 0, .8);
        overflow: hidden;
        text-align: left;
        /*height:200px;*/
        width: 288px;
    }
    .main-navigation li.menu {
        display: block;
        text-align: left
    }
    .main-navigation li.menu:hover {
        background: 0 0
    }
    .main-navigation li.dropdown ul li:active,
    .main-navigation li.dropdown ul li:hover {
        border: 0!important
    }
    .main-navigation li.menu a.link {
        display: block;
        padding: 8px 25px
    }
    .main-navigation li.dropdown ul li.dropdown ul li ul {
        display: block;
        left: 0
    }
    .main-navigation li.dropdown ul,
    .main-navigation li.megamenu-dropdown ul {
        box-shadow: none;
        margin-top: 0;
        background: 0 0;
        display: block;
        margin-left: 0;
        min-width: auto;
        opacity: 1;
        padding: 0;
        position: relative;
        right: 0;
        top: 0;
        -webkit-transform: skew(0);
        -ms-transform: skew(0);
        transform: skew(0);
        visibility: visible
    }
    .main-navigation li.dropdown ul li,
    .main-navigation li.megamenu-dropdown ul li {
        display: block;
        margin-left: 0;
        padding-left: 50px
    }
    .main-navigation li.megamenu-dropdown ul li div,
    .main-navigation li.megamenu-dropdown ul li img {
        display: none
    }
    .main-navigation li.dropdown ul li:hover {
        border: none
    }
    .main-navigation li.megamenu-dropdown ul li a {
        display: block;
        text-align: left
    }
    .main-navigation ul li ul li:hover a {
        background: 0 0;
        color: #fff
    }
    .main-navigation li.dropdown ul li.has-child:before,
    .main-navigation li.menu:before,
    .main-navigation li.menu:hover:before {
        display: none
    }
    .main-navigation li.dropdown ul li.dropdown ul {
        display: block;
        left: 0
    }
    .logo {
        display: block;
        margin: 20px auto
    }
    .logo span.slogan {
        top: -6px
    }
    .main-navigation .mr-1000 {
        background: 0 0;
        box-shadow: none;
        left: 0
    }
    .testa {
        display: none
    }
    header .page-location strong {
        padding-left: 15px
    }
    .single-testimonial .img-wrap {
        display: block;
        float: none;
        margin: 20px auto
    }
    .comment-content {
        border: 0
    }
    .single-testimonial .content {
        display: block;
        float: none;
        padding: 20px 20px 0 10px
    }
    .comment-box button {
        width: 100%
    }
    .continue-shopping .btn,
    .update-checkout .btn {
        width: 100%;
        margin-bottom: 20px
    }
    .wishlist .social-icon .icon-wrap .fa {
        margin: 0 5px
    }
    .product-category a {
        text-align: center
    }
    .product-category a span {
        display: block
    }
    .sidebar-widget {
        margin-top: 40px
    }
    .cart-table {
        overflow-x: scroll
    }
    .ask-que input {
        width: 70%
    }
    .payment-method {
        margin-top: 35px
    }
    .payment-method img {
        margin-bottom: 15px
    }
    .login-form .btn {
        width: 100%
    }
    .footer-bottom {
        padding-left: 10px;
        padding-right: 10px
    }
    #belowbimages .a1 {
        margin-top: 14%;
        margin-left: 1%;
    }
    #belowbimages .a2 {
        margin-left: 1%;
    }
    #galleryy img {
        margin-left: 30%;
        height: 250px;
        width: 250px;
    }
    .linkbuilding {
        color: #0082cc;
        cursor: pointer;
        font-size: 15px;
        font-weight: 600;
        margin-top: 5%;
    }
    /*	#eventsss h4{	color: #000;    font-size: 16px;    line-height: 16px;    margin-bottom: 10px;    margin-left: -5%;    text-align: center;	}		.carousel-heading h2	{		margin-left: 35%;	}	*/
    /*.eventsss123img #eventsimgsss	{		margin-left:25%;			}*/
    .eventsss321img {
        margin-left: 25%;
    }
}

@media only screen and (max-width:600px) {
    #no-more-tables table,
    #no-more-tables tbody,
    #no-more-tables td,
    #no-more-tables th,
    #no-more-tables thead,
    #no-more-tables tr {
        display: block
    }
    #no-more-tables thead tr {
        left: -9999px;
        position: absolute;
        top: -9999px
    }
    #no-more-tables tr {
        border-bottom: 1px solid rgba(0, 0, 0, .2);
        margin-bottom: 20px
    }
    #no-more-tables td {
        border: none;
        margin: 0 auto;
        position: relative;
        white-space: normal;
        width: 100%
    }
    .company h2,
    .faq-area .heading h2,
    .product-category .heading h2,
    .product-review h2,
    .return-policy .heading h2,
    .testimonial .heading h2,
    .top-brand .heading h2,
    .top-rated_feature_recent_item .carousel-heading h2 {
        font-size: 24px;
        font-weight: 400
    }
    .icon-wrap-nav i {
        font-size: 25px
    }
    .lang-currency {
        display: none
    }
    .continue-shopping .btn {
        width: 100%
    }

    .anim-slide img#image-one
  {
        bottom: 46px;
        height: 212px;
        left: 34%
    }
  .anim-slide img#image-four,

    .anim-slide img#image-three,
    .anim-slide img#image-two {
        bottom: 46px;
        height: 212px;
        left: 34%;top:18%;width: 64%;
    }
    /*
    .anim-slide img#image-four, .anim-slide img#image-one, .anim-slide img#image-three, .anim-slide img#image-two
    {
    bottom: 4%;
height: 300px;
left: 25%;
margin-top: 46%;
    }	*/
    #belowbimages .a1 {
        margin-top: 14%;
        margin-left: 10%
    }
    #belowbimages .a2 {
        margin-top: 14%;
        margin-left: 6%
    }
}

@media only screen and (max-width:500px) {
    #no-more-tables table,
    #no-more-tables tbody,
    #no-more-tables td,
    #no-more-tables th,
    #no-more-tables thead,
    #no-more-tables tr {
        display: block
    }
    #no-more-tables thead tr {
        left: -9999px;
        position: absolute;
        top: -9999px
    }
    #no-more-tables tr {
        border-bottom: 1px solid rgba(0, 0, 0, .2);
        margin-bottom: 20px
    }
    #no-more-tables td {
        border: none;
        margin: 0 auto;
        position: relative;
        white-space: normal;
        width: 100%
    }
    .company h2,
    .faq-area .heading h2,
    .product-category .heading h2,
    .product-review h2,
    .return-policy .heading h2,
    .testimonial .heading h2,
    .top-brand .heading h2,
    .top-rated_feature_recent_item .carousel-heading h2 {
        font-size: 24px;
        font-weight: 400
    }
    .icon-wrap-nav i {
        font-size: 25px
    }
    .lang-currency {
        display: none
    }
    .continue-shopping .btn {
        width: 100%
    }
    .anim-slide img#image-four,
    .anim-slide img#image-one,
    .anim-slide img#image-three,
    .anim-slide img#image-two {
        bottom: 46px;
        height: 212px;
        left: 34%
    }
    #galleryy img {
        margin-left: 17%;
    }
    .linkbuilding {
        color: #0082cc;
        cursor: pointer;
        font-size: 15px;
        font-weight: 600;
        margin-left: 21%;
        margin-top: 5%;
    }
    .footer-social-icon {
        margin-top: 2%;
    }
    #belowbimages .a1 {
        margin-top: 14%;
        margin-left: 10%
    }
    #belowbimages .a2 {
        margin-top: 14%;
        margin-left: 6%
    }
}

@media screen and (max-width:480px) {
    .top-rated_feature_recent_item .owl-nav,
    .top-social-icon,
    header .page-location strong {
        display: none
    }
    #print_individual {
        padding-right: 36px;
        margin-top: 10px;
    }
    #print_organization {
        padding-right: 36px;
        margin-top: 10px;
    }
    #btnbox1 {
        margin-top: 10px;
        padding-right: 10px;
		margin-right:16%;	
    }
.group{
height:auto;
}
button#individual{
margin-top:10px;
}
    #btnbox2 {
        margin-top: 10px;
        padding-right: 10px;
    }
    .past{
        margin-left:0px !important;
    }
.memberstyle {
height:auto;
}
    .navbar-collapse.in{
        height:600px;
    }

    .client-social-icon,
    .single-product,
    .widgetSmallWidth {
        text-align: center
    }
    #input input {
        width: 100%
    }
    header .page-location {
        padding-left: 15px
    }
    .single-product .product-description {
        clear: both;
        float: none;
        margin: 20px auto 0;
        width: 100%
    }
    #input {
        width: 200px
    }
    .wishlist .social-icon .icon-wrap {
        display: block;
        margin: 20px 0;
        width: 100%
    }
    .faq-area .panel-heading .panel-title a {
        padding: 10px 20px
    }
    .faq-area .panel-body p {
        padding: 15px 30px
    }
    .widgetSmallWidth {
        width: 100%
    }
    .continue-shopping .table>thead>tr>th {
        font-size: 20px;
        line-height: 30px
    }
    .continue-shopping form input[type=text],
    .continue-shopping form select {
        margin-left: 0;
        width: 60%
    }
    .continue-shopping .table tbody td span {
        width: 60px
    }
    .single-widget.subscribe input[type=email] {
        width: 50%
    }
    .footer-bottom .alphabetical span {
        display: inline-block;
        margin-bottom: 10px
    }
    .client-social-icon ul {
        float: none;
        margin-bottom: 20px
    }
    .live-chat {
        display: none
    }
    .page404 .page404-container .box {
        width: 100%
    }
    .page404 .page404-container .btn {
        font-size: 15px;
        padding: 10px 0;
        margin: 10px 0;
        width: 80%
    }
    .main-navigation .logo a {
        position: relative;
        top: -2px;
    }
    .logo a {
        color: #6a6a6a;
        left: 10px;
        top: 36px;
        width: 100%;
    }
    #belowbimages .a1 {
        margin-top: 14%;
        margin-left: 10%
    }
    #belowbimages .a2 {
        margin-top: 14%;
        margin-left: 6%
    }
}

@media screen and (max-width:430px) {
    .brandwidth {
        text-align: center;
        width: 100%
    }
}

@media screen and (max-width:360px) {
.menulogo { width:109%;margin-left:-14px; }
.logo img { width:91%; }
    .widgetSmallWidth {
        width: 100%
    }
    .main-navigation nav ul,
    .nav-slider .profile,
    .profile ul {
        text-align: center;
    }
    .main-content {
        padding: 80px 0;
    }
    .lang-currency {
        background: #f5f5f5;
        position: relative
    }
    .profile ul li {
        margin: 20px 10px 0
    }
    .profile ul li a {
        padding: 0px;
    }
    .main-navigation {
        left: 15px
    }
    .main-navigation li.menu {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.menu a.link {
        padding: 20px 10px;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.menu ul {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.megamenu-dropdown ul {
        left: 0;
        top: 70px
    }
    .main-navigation li.dropdown ul {
        left: 0;
        top: 65px
    }
    .main-navigation li.dropdown ul li.dropdown ul {
        display: block;
        left: 150px;
        position: absolute;
        top: 0;
        width: 200px
    }
    .main-navigation .logo:after,
    .main-navigation .logo:before {
        display: none
    }
    .main-navigation .logo {
        background: #fff;
        display: block;
        display: table;
        height: 100px;
        left: -15px;
        margin: 10px auto;
        position: relative;
        text-align: center;
        width: 100%;
        z-index: 1000;
    }
    .main-navigation .logo a {
        left: 0;
        position: relative;
        top: 15px
    }
    .nav-slider .anim-dots span {
        background: #e9be4b!important
    }
    header .page-location {
        background: #000;
        margin: 0 0 20px
    }
    header .page-location strong {
        padding-left: 15px
    }
    .main-navigation .mr-1000 {
        display: none
    }
    .main-navigation nav {
        left: -15px;
        margin: 20px 0
    }
    .mr-1000-left,
    .mr-1000-location {
        display: none!important
    }
    .blog-list .load-more {
        margin-bottom: 40px
    }
    .single-brand,
    .single-widget {
        margin-bottom: 10px
    }
    #ads-item-carousel {
        margin-bottom: 40px
    }
    .product-category {
        padding: 15px
    }
    .product-category a {
        display: block;
        margin-bottom: 20px;
        text-align: left
    }
    .top-brand {
        margin-top: 20px
    }
    .top-brand a {
        display: block;
        text-align: center
    }
    .continue-shopping .btn {
        margin-bottom: 40px
    }
    .signup-form .btn {
        margin-bottom: 20px;
        width: 100%
    }
    .place-order .btn {
        width: 100%
    }
    .anim-slide {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 80%;
    }
    .anim-slide p#text-four,
    .anim-slide p#text-one,
    .anim-slide p#text-three,
    .anim-slide p#text-two {
        left: 10%;
        max-width: 80%;
        text-align: center;
        top: 38%;
    }
    .anim-slide img#image-four,
    .anim-slide img#image-one,
    .anim-slide img#image-three,
    .anim-slide img#image-two {
        bottom: -17px;
        left: 31%;
    }
    .main-navigation li.menu a.link {
        color: #fff;
        padding: 34px 18px;
        text-transform: capitalize;
    }
    
    #eventsss img {
        margin-left: -13%;
        height: 250px;
        width: 250px;
    }
    #eventsss h4 {
        color: #000;
        font-size: 16px;
        line-height: 16px;
        margin-bottom: 10px;
        text-align: center;
    }
    #galleryy img {
        margin-left: 5%;
        height: 250px;
        width: 250px;
    }
    .linkbuilding {
        color: #0082cc;
        cursor: pointer;
        font-size: 15px;
        font-weight: 600;
        margin-left: 11%;
        margin-top: 5%;
    }
    #belowbimages .a1 {
        margin-top: 14%;
        margin-left: 10%
    }
    #belowbimages .a2 {
        margin-top: 14%;
        margin-left: 6%
    }
    .main-navigation nav {
        background: rgba(0, 0, 0, .8);
        overflow: hidden;
        text-align: left;
        width: 330px;
    }

}

@media screen and (max-width:320px) {

h2.english{
float:left;

}
h2.tamil{
    float: right !important;
    font-size: 21px !important;
    padding-left: 1px;
    
}
.company .heading h2
{
font-weight:300 !important;
}
    .main-navigation li.dropdown ul {
        display: inline-block;
        left: -48px;
        margin-top: 10px;
        opacity: 0;
        padding: 30px;
        position: absolute;
        top: 80px;
        transition: all 0.5s ease-in-out 0s;
        visibility: hidden;
        width: 150px;
    }
    .widgetSmallWidth {
        width: 100%
    }
    .profile.col-md-5 {
        background-color: #3399FF !important;
    }
    .profile.col-md-6.text-right 
    {
        background-color: #3399FF !important;
    }
    .facebook-right
    {
        background-color: #3399FF !important;
    }
    .main-navigation nav ul,
    .nav-slider .profile,
    .profile ul {
        text-align: center
    }
    .main-content {
        padding: 80px 0
    }
    .lang-currency {
        background: #f5f5f5;
        position: relative
    }
    .profile ul li {
        margin: 20px 10px 0
    }
    .profile ul li a {
        padding: 0px;
    }
    .main-navigation {
        left: 15px
    }
    .main-navigation li.menu {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.menu a.link {
        padding: 20px 10px;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.menu ul {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.megamenu-dropdown ul {
        left: 0;
        top: 70px
    }
    .main-navigation li.dropdown ul {
        left: 0;
        top: 65px
    }
    .main-navigation li.dropdown ul li.dropdown ul {
        display: block;
        left: 150px;
        position: absolute;
        top: 0;
        width: 200px
    }
    .main-navigation .logo:after,
    .main-navigation .logo:before {
        display: none
    }
    .main-navigation .logo {
        background: #fff;
        display: block;
        display: table;
        height: 100px;
        left: -15px;
        margin: 10px auto;
        position: relative;
        text-align: center;
        width: 100%;
        z-index: 1000;
    }
    .main-navigation .logo a {
        left: 0;
        position: relative;
        top: 15px
    }
    .nav-slider .anim-dots span {
        background: #e9be4b!important
    }
    header .page-location {
        background: #000;
        margin: 0 0 20px
    }
    header .page-location strong {
        padding-left: 15px
    }
    .main-navigation .mr-1000 {
        display: none
    }
    .main-navigation nav {
        left: -15px;
        margin: 20px 0
    }
    .mr-1000-left,
    .mr-1000-location {
        display: none!important
    }
    .blog-list .load-more {
        margin-bottom: 40px
    }
    .single-brand,
    .single-widget {
        margin-bottom: 10px
    }
    #ads-item-carousel {
        margin-bottom: 40px
    }
    .product-category {
        padding: 15px
    }
    .product-category a {
        display: block;
        margin-bottom: 20px;
        text-align: left
    }
    .top-brand {
        margin-top: 20px
    }
    .top-brand a {
        display: block;
        text-align: center
    }
    .continue-shopping .btn {
        margin-bottom: 40px
    }
    .signup-form .btn {
        margin-bottom: 20px;
        width: 100%
    }
    .place-order .btn {
        width: 100%
    }
    .anim-slide {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 80%;
    }
    .anim-slide p#text-four,
    .anim-slide p#text-one,
    .anim-slide p#text-three,
    .anim-slide p#text-two {
        left: 10%;
        max-width: 80%;
        text-align: center;
        top: 38%;
    }
    .anim-slide img#image-four,
    .anim-slide img#image-one,
    .anim-slide img#image-three,
    .anim-slide img#image-two {
        bottom: -17px;
        left: 31%;
    }
    .main-navigation li.menu a.link {
        color: #fff;
        padding: 34px 18px;
        text-transform: capitalize;
    }
    #eventsss img {
        margin-left: 9%;
        height: 250px;
        width: 250px;
    }
    #galleryy img {
        margin-left: 5%;
        height: 250px;
        width: 250px;
    }
    .linkbuilding {
        color: #0082cc;
        cursor: pointer;
        font-size: 12px;
        font-weight: 600;
        line-height: unset;
        margin-left: 21%;
        margin-top: 10px;
        width: 221px;
    }
    .carousel-heading h2 {
        margin-left: 33%;
    }
    #belowbimages .a1 {
        margin-top: 14%;
        margin-left: 10%
    }
    #belowbimages .a2 {
        margin-top: 14%;
        margin-left: 6%
    }
    .main-navigation nav {
        background: rgba(0, 0, 0, .8);
        overflow: hidden;
        text-align: left;
        width: 288px;
    }
    #eventsss img {
        margin-left: -13%;
        height: 250px;
        width: 250px;
    }
		#eventsss h4 {
        color: #000;
        font-size: 14px;
        line-height: 16px;
        margin-bottom: 10px;
        text-align: center;
    }
}

@media screen and (max-width:500px) {
    .widgetSmallWidth {
        width: 100%
    }
    .profile.col-md-5 {
        background-color: #3399FF !important;
    }
    .profile.col-md-6.text-right 
    {
        background-color: #3399FF !important;
    }
    .facebook-right
    {
        background-color: #3399FF !important;
    }
    .main-navigation nav ul,
    .nav-slider .profile,
    .profile ul {
        text-align: center;
        background-color: #fff !important; 
    }
    .main-content {
        padding: 80px 0
    }
    .lang-currency {
        background: #f5f5f5;
        position: relative
    }
    .profile ul li {
        margin: 20px 10px 0
    }
    .profile ul li a {
        padding: 0px;
    }
    .main-navigation li.menu {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.menu a.link {
        padding: 20px 10px;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.menu ul {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }
    .main-navigation li.megamenu-dropdown ul {
        left: 0;
        top: 70px
    }
    .main-navigation li.dropdown ul {
        left: 0;
        top: 65px
    }
    .main-navigation li.dropdown ul li.dropdown ul {
        display: block;
        left: 150px;
        position: absolute;
        top: 0;
        width: 200px
    }
    .main-navigation .logo:after,
    .main-navigation .logo:before {
        display: none
    }
    .main-navigation .logo {
        background: #fff;
        display: block;
        display: table;
        height: 100px;
        left: -15px;
        margin: 10px auto;
        position: relative;
        text-align: center;
        width: 100%;
        z-index: 1000;
    }
    .main-navigation .logo a {
        left: 0;
        position: relative;
        top: 15px
    }
    .nav-slider .anim-dots span {
        background: #e9be4b!important
    }
    header .page-location {
        background: #000;
        margin: 0 0 20px
    }
    header .page-location strong {
        padding-left: 15px
    }
    .main-navigation .mr-1000 {
        display: none
    }
    .main-navigation nav {
        left: -15px;
        background: #fff;
        margin: 20px 0;
    }
    .main-navigation li.dropdown ul {
        display: inline-block;
        left: -48px;
        margin-top: 10px;
        opacity: 0;
        padding: 30px;
        position: absolute;
        top: 80px;
        transition: all 0.5s ease-in-out 0s;
        visibility: hidden;
        width: 150px;
    }
    .mr-1000-left,
    .mr-1000-location {
        display: none!important
    }
    .blog-list .load-more {
        margin-bottom: 40px
    }
    .single-brand,
    .single-widget {
        margin-bottom: 10px
    }
    #ads-item-carousel {
        margin-bottom: 40px
    }
    .product-category {
        padding: 15px
    }
    .product-category a {
        display: block;
        margin-bottom: 20px;
        text-align: left
    }
    .top-brand {
        margin-top: 20px
    }
    .top-brand a {
        display: block;
        text-align: center
    }
    .continue-shopping .btn {
        margin-bottom: 40px
    }
    .signup-form .btn {
        margin-bottom: 20px;
        width: 100%
    }
    .place-order .btn {
        width: 100%
    }
    .anim-slide {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 80%;
    }
    .anim-slide p#text-four,
    .anim-slide p#text-one,
    .anim-slide p#text-three,
    .anim-slide p#text-two {
        left: 10%;
        max-width: 80%;
        text-align: center;
        top: 38%;
    }
   
    .anim-slide img#image-one
   
    {
        bottom: -17px;
        left: 31%;
    }
 .anim-slide img#image-one{
        bottom: -17px;
        left: 31%;
top:18%;
    width: 86%;
    }
.anim-slide img#image-four ,
    .anim-slide img#image-three,
    .anim-slide img#image-two {
        bottom: -17px;
        left: 42%;
top:18%;
    width: 80%;
    }
    .main-navigation li.menu a.link {
        color: #fff;
        padding: 34px 18px;
        text-transform: capitalize;
    }
    #eventsimgsss h4 {
        color: #000;
        font-size: 16px;
        line-height: 16px;
        margin-bottom: 10px;
        margin-left: 5%;
        text-align: center;
    }
    #eventsimgsss {
        margin-left: 24%;
        height: 250px;
        width: 250px;
    }
    #galleryy img {
        /* margin-left:5%; */
        height: 250px;
        width: 250px;
    }
    .linkbuilding {
        color: #0082cc;
        cursor: pointer;
        font-size: 15px;
        font-weight: 600;
        line-height: unset;
        margin-left: 21%;
        margin-top: 10px;
    }
    #belowbimages .a1 {
        margin-top: 14%;
        margin-left: 10%;
    }
    #belowbimages .a2 {
        margin-left: 9%;
        margin-top: 5%;
    }
    .single-brand img {
        width: 110px;
        height: 75px;
    }
    .logo img {
        max-width: 100%;
    }
    .carousel-heading h2 {
        margin-left: 33%;
    }
}

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {

.profile ul li a {
    color: #000 !important;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 10px 0;
    text-transform: uppercase
}

.profile ul li a:hover {
    color: #000;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.profile ul li a span {
    color: #000
}
    .profile ul li {
        margin: 11px 12px 0
    }
    .profile ul li a {
        padding: 0px;
    }
	    .main-navigation li.dropdown ul {
        display: inline-block;
        left: 41px;
        margin-top: 10px;
        opacity: 0;
        padding: 30px;
        position: absolute;
        top: 10px;
        transition: all 0.5s ease-in-out 0s;
        visibility: hidden;
        width: 210px;
    }
	.nav {
  
	height:525px;
}
.navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
    background-color: transparent;
    color: #000 !important;
}
.main-content {
    padding: 11px 0;
}
.company .heading, .faq-area .heading, .product-category .heading, .product-review .heading, .return-policy .heading, .testimonial .heading, .top-brand .heading, .top-rated_feature_recent_item .carousel-heading{ height: 42px; }
.company .heading { margin-top:-20px; }
.panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
    color: inherit;
    font-weight: 600;
    line-height: 27px;
}
}
/* iPads (portrait and landscape) ----------- */
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) 
{
	#main-menu {margin-bottom: 5px !important; }
	.nav , .navbar-nav { background-color:#fff !important; }
.main-navigation nav ul, .nav-slider .profile, .profile ul { background-color: #3399ff;
text-align: center !important; font-size: 11px;	 }
.profile ul li a {
    color: #fff;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 10px 0;
    text-transform: uppercase
}



.profile ul li a:hover {
    color: #000;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.profile ul li a span {
    color: #000
}
    .profile ul li {
        margin: 11px 12px 0
    }
    .profile ul li a {
        padding: 0px;
    }
	    .main-navigation li.dropdown ul {
        display: inline-block;
        left: 41px;
        margin-top: 10px;
        opacity: 0;
        padding: 30px;
        position: absolute;
        top: 53px;
        transition: all 0.5s ease-in-out 0s;
        visibility: hidden;
        width: 210px;
    }
	
.navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
    background-color: transparent;
    color: #000 !important;
}
.main-content {
    padding: 11px 0;
}
.company .heading, .faq-area .heading, .product-category .heading, .product-review .heading, .return-policy .heading, .testimonial .heading, .top-brand .heading, .top-rated_feature_recent_item .carousel-heading{ height: 42px; }
.company .heading { margin-top:-20px; }
.panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
    color: inherit;
    font-weight: 600;
    line-height: 27px;
}

.main-navigation nav {
    margin: 6px 0;
    overflow: visible;
    position: relative;
    right: 7px;
    z-index: 15
}

.main-navigation .navbar {
    background: 0 0;
    border: none
}

.main-navigation li.menu a.link {
    color: #7d7d7d;
    padding: 10px 10px;
    text-transform: capitalize
}

.main-navigation li.menu:hover a.link {
    color: #000
}

.main-navigation li.menu:before {
    background: #3399ff;
    content: '';
    display: block;
    height: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    top: -1px;
    visibility: hidden;
    width: 100%;
    z-index: -1;
    transform: skew(40deg);
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.main-navigation li.menu:before,
.mr-1000-location {
    -webkit-transform: skew(40deg);
    -moz-transform: skew(40deg)
}

.main-navigation li.menu:hover:before {
    opacity: 1;
    visibility: visible
}

.main-navigation li.dropdown ul {
    display: inline-block;
    left: 34px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    width: 275px;
    transition: all .5s ease-in-out
}

.main-navigation li.dropdown ul,
.main-navigation li.megamenu-dropdown ul {
    background: #fff;
    box-shadow: 0 0 2px 1px #e9e9e9;
    text-align: left;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    display: inline-block;
    left: -48px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 56px;
    transition: all 0.5s ease-in-out 0s;
    visibility: hidden;
    width: 200px;
}

.main-navigation li.dropdown ul li {
    display: block;
    margin: 5px 0!important;
    padding: 5px 0;
}

.main-navigation li.dropdown ul li a {
    display: block;
    text-align: left;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li:hover {
    border-right: 5px solid #3399ff
}

.main-navigation li.dropdown ul li.has-child:before {
    color: #3399ff;
    content: "\f0da";
    font-family: FontAwesome;
    height: 30px;
    left: -15px;
    line-height: 30px;
    position: absolute;
    top: 0;
    width: 20px;
    z-index: 9999;
    -webkit-font-smoothing: antialiased
}

.main-navigation li.dropdown {
    position: relative
}

.main-navigation li.dropdown:hover>ul {
    display: inline-block;
    opacity: 1;
    visibility: visible;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li.dropdown ul {
    display: block;
    left: 150px;
    position: absolute;
    top: -10px;
    width: 200px;
}

.main-navigation li.dropdown ul li.dropdown ul li a {
    color: #6f6f6f;
}

.main-navigation li.dropdown ul li.dropdown ul li a:hover {
    color: #3399ff;
}

.main-navigation li.dropdown ul li.dropdown ul li ul {
    left: -165%
}

.main-navigation li.megamenu-dropdown ul {
    display: hidden;
    min-width: 600px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    z-index: 8888;
    transition: all .5s ease-in-out
}

.main-navigation li.megamenu-dropdown:hover>ul {
    display: block;
    opacity: 1;
    visibility: visible;
}

.main-navigation li ul li {
    margin-left: 20px;
}

.main-navigation li ul li:first-child {
    margin-left: 0
}

.main-navigation li ul li a {
    color: #6f6f6f;
    text-align: center;
}

.main-navigation li ul li a div {
    background: #edebe5;
    height: 124px;
    width: 70px
}

.main-navigation li ul li a .fa {
    line-height: 124px
}

.main-navigation ul li ul li:hover a {
    color: #3399ff
}

.main-navigation li ul li span {
    display: block;
    margin-top: 10px;
    text-transform: capitalize
}

}
 .main-navigation li.dropdown ul {
        display: inline-block;
        left: 41px;
        margin-top: 10px;
        opacity: 0;
        padding: 30px;
        position: absolute;
        top: 53px;
        transition: all 0.5s ease-in-out 0s;
        visibility: hidden;
        width: 210px;
    }
	
.navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
    background-color: transparent;
    color: #000 !important;
}
.main-content {
    padding: 11px 0;
}
.company .heading, .faq-area .heading, .product-category .heading, .product-review .heading, .return-policy .heading, .testimonial .heading, .top-brand .heading, .top-rated_feature_recent_item .carousel-heading{ height: 42px; }
.company .heading { margin-top:-20px; }
.panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
    color: inherit;
    font-weight: 600;
    line-height: 27px;
}

.main-navigation nav {
    margin: 6px 0;
    overflow: visible;
    position: relative;
    right: 7px;
    z-index: 15
}

.main-navigation .navbar {
    background: 0 0;
    border: none
}

.main-navigation li.menu a.link {
    color: #7d7d7d;
    padding: 10px 10px;
    text-transform: capitalize
}

.main-navigation li.menu:hover a.link {
    color: #000
}

.main-navigation li.menu:before {
    background: #3399ff;
    content: '';
    display: block;
    height: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    top: -1px;
    visibility: hidden;
    width: 100%;
    z-index: -1;
    transform: skew(40deg);
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.main-navigation li.menu:before,
.mr-1000-location {
    -webkit-transform: skew(40deg);
    -moz-transform: skew(40deg)
}

.main-navigation li.menu:hover:before {
    opacity: 1;
    visibility: visible
}

.main-navigation li.dropdown ul {
    display: inline-block;
    left: 34px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    width: 275px;
    transition: all .5s ease-in-out
}

.main-navigation li.dropdown ul,
.main-navigation li.megamenu-dropdown ul {
    background: #fff;
    box-shadow: 0 0 2px 1px #e9e9e9;
    text-align: left;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    display: inline-block;
    left: -48px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 56px;
    transition: all 0.5s ease-in-out 0s;
    visibility: hidden;
    width: 200px;
}

.main-navigation li.dropdown ul li {
    display: block;
    margin: 5px 0!important;
    padding: 5px 0;
}

.main-navigation li.dropdown ul li a {
    display: block;
    text-align: left;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li:hover {
    border-right: 5px solid #3399ff
}

.main-navigation li.dropdown ul li.has-child:before {
    color: #3399ff;
    content: "\f0da";
    font-family: FontAwesome;
    height: 30px;
    left: -15px;
    line-height: 30px;
    position: absolute;
    top: 0;
    width: 20px;
    z-index: 9999;
    -webkit-font-smoothing: antialiased
}

.main-navigation li.dropdown {
    position: relative
}

.main-navigation li.dropdown:hover>ul {
    display: inline-block;
    opacity: 1;
    visibility: visible;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li.dropdown ul {
    display: block;
    left: 150px;
    position: absolute;
    top: -10px;
    width: 200px;
}

.main-navigation li.dropdown ul li.dropdown ul li a {
    color: #6f6f6f;
}

.main-navigation li.dropdown ul li.dropdown ul li a:hover {
    color: #3399ff;
}

.main-navigation li.dropdown ul li.dropdown ul li ul {
    left: -165%
}

.main-navigation li.megamenu-dropdown ul {
    display: hidden;
    min-width: 600px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    z-index: 8888;
    transition: all .5s ease-in-out
}

.main-navigation li.megamenu-dropdown:hover>ul {
    display: block;
    opacity: 1;
    visibility: visible;
}

.main-navigation li ul li {
    margin-left: 20px;
}

.main-navigation li ul li:first-child {
    margin-left: 0
}

.main-navigation li ul li a {
    color: #6f6f6f;
    text-align: center;
}

.main-navigation li ul li a div {
    background: #edebe5;
    height: 124px;
    width: 70px
}

.main-navigation li ul li a .fa {
    line-height: 124px
}

.main-navigation ul li ul li:hover a {
    color: #3399ff
}

.main-navigation li ul li span {
    display: block;
    margin-top: 10px;
    text-transform: capitalize
}

.profile {
  text-align:center !important;
}
.profile ul li a {
    color: #fff;
    padding: 0;
}
@media only screen and (min-device-width : 1024px) 
{
	
.profile ul li a {
    color: #fff;
    padding: 0;
}
		.navbar-inverse .navbar-nav > li > a:hover { color:#fff !important; }
		nav{ background-color:#fff !important; } 
.main-navigation nav ul, .nav-slider .profile, .profile ul { 
text-align: center !important; font-size: 13px;	 }
.profile ul li a {
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 10px 0;
    text-transform: uppercase;
	font-family: arial;
}



.profile ul li a:hover {
    color: #000;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.profile ul li a span {
    color: #fff
}.profile ul li a {
    color: #fff;
}
    .profile ul li {
        margin: 11px 12px 0
    }
    .profile ul li a {
        padding-bottom: 8px;
		padding-left: 18px;
    }
	    .main-navigation li.dropdown ul {
        display: inline-block;
        left: 41px;
        margin-top: 10px;
        opacity: 0;
        padding: 30px;
        position: absolute;
        top: 53px;
        transition: all 0.5s ease-in-out 0s;
        visibility: hidden;
        width: 210px;
    }
	
.navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
    background-color: transparent;
    color: #000 !important;
}
.main-content {
    padding: 11px 0;
}
.company .heading, .faq-area .heading, .product-category .heading, .product-review .heading, .return-policy .heading, .testimonial .heading, .top-brand .heading, .top-rated_feature_recent_item .carousel-heading{ height: 42px; }
.company .heading { margin-top:-20px; }
.panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
    color: inherit;
    font-weight: 600;
    line-height: 27px;
}

.main-navigation nav {
    margin: 6px 0;
    overflow: visible;
    position: relative;
    right: 7px;
    z-index: 15
}

.main-navigation .navbar {
    background: 0 0;
    border: none
}

.main-navigation li.menu a.link {
    color: #7d7d7d;
    padding: 10px 10px;
    text-transform: capitalize
}

.main-navigation li.menu:hover a.link {
    color: #fff
}

.main-navigation li.menu:before {
    background: #3399ff;
    content: '';
    display: block;
    height: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    top: -1px;
    visibility: hidden;
    width: 100%;
    z-index: -1;
    transform: skew(40deg);
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.main-navigation li.menu:before,
.mr-1000-location {
    -webkit-transform: skew(40deg);
    -moz-transform: skew(40deg)
}

.main-navigation li.menu:hover:before {
    opacity: 1;
    visibility: visible
}

.main-navigation li.dropdown ul {
    display: inline-block;
    left: 34px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    width: 275px;
    transition: all .5s ease-in-out
}

.main-navigation li.dropdown ul,
.main-navigation li.megamenu-dropdown ul {
    background: #fff;
    box-shadow: 0 0 2px 1px #e9e9e9;
    text-align: left;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    display: inline-block;
    left: -48px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 56px;
    transition: all 0.5s ease-in-out 0s;
    visibility: hidden;
    width: 200px;
}

.main-navigation li.dropdown ul li {
    display: block;
    margin: 5px 0!important;
    padding: 5px 0;
}

.main-navigation li.dropdown ul li a {
    display: block;
    text-align: left;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li:hover {
    border-right: 5px solid #3399ff
}

.main-navigation li.dropdown ul li.has-child:before {
    color: #3399ff;
    content: "\f0da";
    font-family: FontAwesome;
    height: 30px;
    left: -15px;
    line-height: 30px;
    position: absolute;
    top: 0;
    width: 20px;
    z-index: 9999;
    -webkit-font-smoothing: antialiased
}

.main-navigation li.dropdown {
    position: relative
}

.main-navigation li.dropdown:hover>ul {
    display: inline-block;
    opacity: 1;
    visibility: visible;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li.dropdown ul {
    display: block;
    left: 150px;
    position: absolute;
    top: -10px;
    width: 200px;
}

.main-navigation li.dropdown ul li.dropdown ul li a {
    color: #6f6f6f;
}

.main-navigation li.dropdown ul li.dropdown ul li a:hover {
    color: #3399ff;
}

.main-navigation li.dropdown ul li.dropdown ul li ul {
    left: -165%
}

.main-navigation li.megamenu-dropdown ul {
    display: hidden;
    min-width: 600px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    z-index: 8888;
    transition: all .5s ease-in-out
}

.main-navigation li.megamenu-dropdown:hover>ul {
    display: block;
    opacity: 1;
    visibility: visible;
}

.main-navigation li ul li {
    margin-left: 0px;
}

.main-navigation li ul li:first-child {
    margin-left: 0
}

.main-navigation li ul li a {
    color: #6f6f6f;
    text-align: center;
}

.main-navigation li ul li a div {
    background: #edebe5;
    height: 124px;
    width: 70px
}

.main-navigation li ul li a .fa {
    line-height: 124px
}

.main-navigation ul li ul li:hover a {
    color: #3399ff
}

.main-navigation li ul li span {
    display: block;
    margin-top: 10px;
    text-transform: capitalize
}

}
 .main-navigation li.dropdown ul {
        display: inline-block;
        left: 41px;
        margin-top: 10px;
        opacity: 0;
        padding: 30px;
        position: absolute;
        top: 53px;
        transition: all 0.5s ease-in-out 0s;
        visibility: hidden;
        width: 210px;
    }
	
.navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
    background-color: transparent;
    color: #fff !important;
}
.main-content {
    padding: 11px 0;
}
.company .heading, .faq-area .heading, .product-category .heading, .product-review .heading, .return-policy .heading, .testimonial .heading, .top-brand .heading, .top-rated_feature_recent_item .carousel-heading{ height: 42px; }
.company .heading { margin-top:0px;  }
.company .heading h2 { font-size:21px; font-weight:500; }
.panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
    color: inherit;
    font-weight: 600;
    line-height: 27px;
}

.main-navigation nav {
    margin: 6px 0;
    overflow: visible;
    position: relative;
    right: 7px;
    z-index: 15
}

.main-navigation .navbar {
    background: 0 0;
    border: none
}

.main-navigation li.menu a.link {
    color: #7d7d7d;
    padding: 10px 10px;
    text-transform: capitalize
}

.main-navigation li.menu:hover a.link {
    color: #000
}

.main-navigation li.menu:before {
    background: #3399ff;
    content: '';
    display: block;
    height: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    top: -1px;
    visibility: hidden;
    width: 100%;
    z-index: -1;
    transform: skew(40deg);
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.main-navigation li.menu:before,
.mr-1000-location {
    -webkit-transform: skew(40deg);
    -moz-transform: skew(40deg)
}

.main-navigation li.menu:hover:before {
    opacity: 1;
    visibility: visible
}

.main-navigation li.dropdown ul {
    display: inline-block;
    left: 34px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    width: 275px;
    transition: all .5s ease-in-out
}

.main-navigation li.dropdown ul,
.main-navigation li.megamenu-dropdown ul {
    background: #fff;
    box-shadow: 0 0 2px 1px #e9e9e9;
    text-align: left;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    display: inline-block;
    left: -48px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 56px;
    transition: all 0.5s ease-in-out 0s;
    visibility: hidden;
    width: 200px;
}

.main-navigation li.dropdown ul li {
    display: block;
    margin: 5px 0!important;
    padding: 5px 0;
}

.main-navigation li.dropdown ul li a {
    display: block;
    text-align: left;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li:hover {
    border-right: 5px solid #3399ff
}

.main-navigation li.dropdown ul li.has-child:before {
    color: #3399ff;
    content: "\f0da";
    font-family: FontAwesome;
    height: 30px;
    left: -15px;
    line-height: 30px;
    position: absolute;
    top: 0;
    width: 20px;
    z-index: 9999;
    -webkit-font-smoothing: antialiased
}

.main-navigation li.dropdown {
    position: relative
}

.main-navigation li.dropdown:hover>ul {
    display: inline-block;
    opacity: 1;
    visibility: visible;
    z-index: 999999;
    background-color: #fff;
}

.main-navigation li.dropdown ul li.dropdown ul {
    display: block;
    left: 150px;
    position: absolute;
    top: -10px;
    width: 200px;
}

.main-navigation li.dropdown ul li.dropdown ul li a {
    color: #6f6f6f;
}

.main-navigation li.dropdown ul li.dropdown ul li a:hover {
    color: #3399ff;
}

.main-navigation li.dropdown ul li.dropdown ul li ul {
    left: -165%
}

.main-navigation li.megamenu-dropdown ul {
    display: hidden;
    min-width: 600px;
    margin-top: 10px;
    opacity: 0;
    padding: 30px;
    position: absolute;
    top: 80px;
    visibility: hidden;
    z-index: 8888;
    transition: all .5s ease-in-out
}

.main-navigation li.megamenu-dropdown:hover>ul {
    display: block;
    opacity: 1;
    visibility: visible;
}

.main-navigation li ul li {
   /* margin-left: 20px; */
	width:100%;
}

.main-navigation li ul li:first-child {
    margin-left: 0
}

.main-navigation li ul li a {
    color: #6f6f6f;
    text-align: center;
}

.main-navigation li ul li a div {
    background: #edebe5;
    height: 124px;
    width: 70px
}

.main-navigation li ul li a .fa {
    line-height: 124px
}

.main-navigation ul li ul li:hover a {
    color: #3399ff
}

.main-navigation li ul li span {
    display: block;
    margin-top: 10px;
    text-transform: capitalize
}

.profile {
  text-align:center !important;
}
.navbar-inverse .navbar-nav > li > a:hover { color:#9d9d9d !important; }
}
@media only screen and (min-device-width : 360px) 
{

	.navbar-inverse .navbar-nav > li > a {
    color: #000 !important;
}
	.dropdown-toggle { color:#000 !important;}
.profile ul li a {
    color: #000;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 10px 0;
    text-transform: uppercase
}

.profile ul li a:hover {
    color: #000;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.profile ul li a span {
    color: #000
}
    .profile ul li {
        margin: 11px 12px 0
    }
    .profile ul li a {
        padding: 0px;
    }
	    .main-navigation li.dropdown ul {
        display: inline-block;
        left: 41px;
        margin-top: 10px;
        opacity: 0;
        padding: 30px;
        position: absolute;
        top: 10px;
        transition: all 0.5s ease-in-out 0s;
        visibility: hidden;
        width: 210px;
    }
	.nav {
  
	height:525px;
}
.navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
    background-color: transparent;
    color: #000 !important;
}
.main-content {
    padding: 11px 0;
}
.company .heading, .faq-area .heading, .product-category .heading, .product-review .heading, .return-policy .heading, .testimonial .heading, .top-brand .heading, .top-rated_feature_recent_item .carousel-heading{ height: 42px; }
.company .heading { margin-top:-20px; }
.panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
    color: inherit;
    font-weight: 600;
    line-height: 27px;
}
.navbar-inverse .navbar-nav > li > a:hover { color:#9d9d9d !important; }
}

/* Desktops and laptops ----------- */
@media only screen  and (min-width : 1224px) {
/* Styles */
.navbar-inverse .navbar-nav > li > a:hover {
color:#fff;
    }
	.main-navigation nav ul, .nav-slider .profile, .profile ul {  font-size: 12px; }
}

h2.english{
float:left;

}
h2.tamil{
float:right;
padding-right:15px;
}

/* Large screens ----------- */
@media only screen  and (min-width : 1824px) {
.anim-dots {
    height: 170% !important;
    left: -2px;
    padding-top: 35px;
    top: 35%;
    transform: skewY(50deg);
    width: 38%;
    z-index: 500;
}
}
#disabled { width: 100%; }



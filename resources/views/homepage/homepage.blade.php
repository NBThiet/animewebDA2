<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>homeanime</title>
  <link rel="stylesheet" href="{{asset('./views/homepage/home.css')}}">
  <link rel="stylesheet" href="{{asset('./style.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/font/themify-icons/themify-icons.css')}}">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="{{asset('./stylep2.css')}}">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="./footer-made-in-bootstrap./style.css">
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>



<style>
  .fnc {
  /* you can add color names and their values here
  and then simply add classes like .m--blend-$colorName to .fnc-slide 
  to apply specific color for mask blend mode */
}
.fnc-slider {
  overflow: hidden;
  box-sizing: border-box;
  position: relative;
  height: 100vh;
}
.fnc-slider *, .fnc-slider *:before, .fnc-slider *:after {
  box-sizing: border-box;
}
.fnc-slider__slides {
  position: relative;
  height: 100%;
  transition: transform 1s 0.6666666667s;
}
.fnc-slider .m--blend-dark .fnc-slide__inner {
  background-color: #8a8a8a;
}
.fnc-slider .m--blend-dark .fnc-slide__mask-inner {
  background-color: #7fc4da;
}
.fnc-slider .m--navbg-dark {
  background-color: #575757;
}
.fnc-slider .m--blend-green .fnc-slide__inner {
  background-color: #cc7e4a;
}
.fnc-slider .m--blend-green .fnc-slide__mask-inner {
  background-color: #4e4946;
}
.fnc-slider .m--navbg-green {
  background-color: #cc7e4a;
}
.fnc-slider .m--blend-red .fnc-slide__inner {
  background-color: #ea2329;
}
.fnc-slider .m--blend-red .fnc-slide__mask-inner {
  background-color: #990e13;
}
.fnc-slider .m--navbg-red {
  background-color: #990e13;
}
.fnc-slider .m--blend-blue .fnc-slide__inner {
  background-color: #59aecb;
}
.fnc-slider .m--blend-blue .fnc-slide__mask-inner {
  background-color: #2D7791;
}
.fnc-slider .m--navbg-blue {
  background-color: #2D7791;
}
.fnc-slide {
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  transform: translate3d(0, 0, 0);
}
.fnc-slide.m--before-sliding {
  z-index: 2 !important;
  transform: translate3d(100%, 0, 0);
}
.fnc-slide.m--active-slide {
  z-index: 1;
  transition: transform 1s 0.6666666667s ease-in-out;
  transform: translate3d(0, 0, 0);
}
.fnc-slide__inner {
  position: relative;
  height: 100%;
  background-size: cover;
  background-position: center top;
  transform: translate3d(0, 0, 0);
}
.m--global-blending-active .fnc-slide__inner, .m--blend-bg-active .fnc-slide__inner {
  background-blend-mode: luminosity;
}
.m--before-sliding .fnc-slide__inner {
  transform: translate3d(-100%, 0, 0);
}
.m--active-slide .fnc-slide__inner {
  transition: transform 1s 0.6666666667s ease-in-out;
  transform: translate3d(0, 0, 0);
}
.fnc-slide__mask {
  overflow: hidden;
  z-index: 1;
  position: absolute;
  right: 60%;
  top: 15%;
  width: 50.25vh;
  height: 67vh;
  margin-right: -90px;
  -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 0, 6vh 0, 6vh 61vh, 44vh 61vh, 44vh 6vh, 6vh 6vh);
          clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 0, 6vh 0, 6vh 61vh, 44vh 61vh, 44vh 6vh, 6vh 6vh);
  transform-origin: 50% 0;
  transition-timing-function: ease-in-out;
}
.m--before-sliding .fnc-slide__mask {
  transform: rotate(-10deg) translate3d(200px, 0, 0);
  opacity: 0;
}
.m--active-slide .fnc-slide__mask {
  transition: transform 0.7s 1.2222222222s, opacity 0.35s 1.2222222222s;
  transform: translate3d(0, 0, 0);
  opacity: 1;
}
.m--previous-slide .fnc-slide__mask {
  transition: transform 0.7s 0.3333333333s, opacity 0.35s 0.6833333333s;
  transform: rotate(10deg) translate3d(-200px, 0, 0);
  opacity: 0;
}
.fnc-slide__mask-inner {
  z-index: -1;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 100vw;
  height: 100vh;
  margin-left: -50vw;
  margin-top: -50vh;
  background-size: cover;
  background-position: center center;
  background-blend-mode: luminosity;
  transform-origin: 50% 16.5vh;
  transition-timing-function: ease-in-out;
}
.m--before-sliding .fnc-slide__mask-inner {
  transform: translateY(0) rotate(10deg) translateX(-200px) translateZ(0);
}
.m--active-slide .fnc-slide__mask-inner {
  transition: transform 0.7s 1.2222222222s;
  transform: translateX(0);
}
.m--previous-slide .fnc-slide__mask-inner {
  transition: transform 0.7s 0.3333333333s;
  transform: translateY(0) rotate(-10deg) translateX(200px) translateZ(0);
}
.fnc-slide__content {
  z-index: 2;
  position: absolute;
  left: 40%;
  top: 40%;
}
.fnc-slide__heading {
  margin-bottom: 10px;
  text-transform: uppercase;
}
.fnc-slide__heading-line {
  overflow: hidden;
  position: relative;
  padding-right: 20px;
  font-size: 100px;
  color: #fff;
  word-spacing: 10px;
}
.fnc-slide__heading-line:nth-child(2) {
  padding-left: 30px;
}
.m--before-sliding .fnc-slide__heading-line {
  transform: translateY(100%);
}
.m--active-slide .fnc-slide__heading-line {
  transition: transform 1.5s 1s;
  transform: translateY(0);
}
.m--previous-slide .fnc-slide__heading-line {
  transition: transform 1.5s;
  transform: translateY(-100%);
}
.fnc-slide__heading-line span {
  display: block;
}
.m--before-sliding .fnc-slide__heading-line span {
  transform: translateY(-100%);
}
.m--active-slide .fnc-slide__heading-line span {
  transition: transform 1.5s 1s;
  transform: translateY(0);
}
.m--previous-slide .fnc-slide__heading-line span {
  transition: transform 1.5s;
  transform: translateY(100%);
}
.fnc-slide__action-btn {
  position: relative;
  margin-left: 200px;
  padding: 5px 15px;
  font-size: 20px;
  line-height: 1;
  color: transparent;
  border: none;
  text-transform: uppercase;
  background: transparent;
  cursor: pointer;
  text-align: center;
  outline: none;
}
.fnc-slide__action-btn span {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  perspective: 1000px;
  transform-style: preserve-3d;
  transition: transform 0.3s;
  transform-origin: 50% 0;
  line-height: 30px;
  color: #fff;
}
.fnc-slide__action-btn span:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border: 2px solid #fff;
  border-top: none;
  border-bottom: none;
}
.fnc-slide__action-btn span:after {
  content: attr(data-text);
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  line-height: 30px;
  background: #1F2833;
  opacity: 0;
  transform-origin: 50% 0;
  transform: translateY(100%) rotateX(-90deg);
  transition: opacity 0.15s 0.15s;
}
.fnc-slide__action-btn:hover span {
  transform: rotateX(90deg);
}
.fnc-slide__action-btn:hover span:after {
  opacity: 1;
  transition: opacity 0.15s;
}
.fnc-nav {
  z-index: 5;
  position: absolute;
  right: 0;
  bottom: 0;
}
.fnc-nav__bgs {
  z-index: -1;
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.fnc-nav__bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.fnc-nav__bg.m--nav-bg-before {
  z-index: 2 !important;
  transform: translateX(100%);
}
.fnc-nav__bg.m--active-nav-bg {
  z-index: 1;
  transition: transform 1s 0.6666666667s;
  transform: translateX(0);
}
.fnc-nav__controls {
  font-size: 0;
}
.fnc-nav__control {
  overflow: hidden;
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 100px;
  height: 50px;
  font-size: 14px;
  color: #fff;
  text-transform: uppercase;
  background: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  transition: background-color 0.5s;
}
.fnc-nav__control.m--active-control {
  background: #1F2833;
}
.fnc-nav__control-progress {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  transform-origin: 0 50%;
  transform: scaleX(0);
  transition-timing-function: linear !important;
}
.m--with-autosliding .m--active-control .fnc-nav__control-progress {
  transform: scaleX(1);
}
.m--prev-control .fnc-nav__control-progress {
  transform: translateX(100%);
  transition: transform 0.5s !important;
}
.m--reset-progress .fnc-nav__control-progress {
  transform: scaleX(0);
  transition: transform 0s 0s !important;
}
.m--autosliding-blocked .fnc-nav__control-progress {
  transition: all 0s 0s !important;
  transform: scaleX(0) !important;
}

/* NOT PART OF COMMON SLIDER STYLES */
body {
  margin: 0;
}

.demo-cont {
  overflow: hidden;
  position: relative;
  height: 100vh;
  perspective: 1500px;
  background: #000;
}
.demo-cont__credits {
  box-sizing: border-box;
  overflow-y: auto;
  z-index: 1;
  position: absolute;
  right: 0;
  top: 0;
  width: 400px;
  height: 100%;
  padding: 20px 10px 30px;
  background: #303030;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  color: #fff;
  text-align: center;
  transition: transform 0.7s;
  transform: translate3d(100%, 0, 0) rotateY(-45deg);
  will-change: transform;
}
.credits-active .demo-cont__credits {
  transition: transform 0.7s 0.2333333333s;
  transform: translate3d(0, 0, 0);
}
.demo-cont__credits *, .demo-cont__credits *:before, .demo-cont__credits *:after {
  box-sizing: border-box;
}
.demo-cont__credits-close {
  position: absolute;
  right: 20px;
  top: 20px;
  width: 28px;
  height: 28px;
  cursor: pointer;
}
.demo-cont__credits-close:before, .demo-cont__credits-close:after {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 2px;
  margin-top: -1px;
  background: #fff;
}
.demo-cont__credits-close:before {
  transform: rotate(45deg);
}
.demo-cont__credits-close:after {
  transform: rotate(-45deg);
}
.demo-cont__credits-heading {
  text-transform: uppercase;
  font-size: 40px;
  margin-bottom: 20px;
}
.demo-cont__credits-img {
  display: block;
  width: 60%;
  margin: 0 auto 30px;
  border-radius: 10px;
}
.demo-cont__credits-name {
  margin-bottom: 20px;
  font-size: 30px;
}
.demo-cont__credits-link {
  display: block;
  margin-bottom: 10px;
  font-size: 24px;
  color: #fff;
}
.demo-cont__credits-blend {
  font-size: 30px;
  margin-bottom: 10px;
}

.example-slider {
  z-index: 2;
  transform: translate3d(0, 0, 0);
  transition: transform 0.7s;
}
.credits-active .example-slider {
  transform: translate3d(-400px, 0, 0) rotateY(10deg) scale(0.9);
}
.example-slider .fnc-slide-1 .fnc-slide__inner,
.example-slider .fnc-slide-1 .fnc-slide__mask-inner {
  background-image: url("public/frontend/images/nar4k.jpg");
}
.example-slider .fnc-slide-2 .fnc-slide__inner,
.example-slider .fnc-slide-2 .fnc-slide__mask-inner {
  background-image: url("public/frontend/images/luf4k.jpg");
}
.example-slider .fnc-slide-3 .fnc-slide__inner,
.example-slider .fnc-slide-3 .fnc-slide__mask-inner {
  background-image: url("public/frontend/images/goku4k.jpg");
}
.example-slider .fnc-slide-3 .fnc-slide__inner:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.1);
}
.example-slider .fnc-slide-4 .fnc-slide__inner,
.example-slider .fnc-slide-4 .fnc-slide__mask-inner {
  background-image: url("public/frontend/images/nat4k.jpg");
}
.example-slider .fnc-slide-4 .fnc-slide__inner:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.2);
}
.example-slider .fnc-slide__heading,
.example-slider .fnc-slide__action-btn,
.example-slider .fnc-nav__control {
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
}

/* COLORFUL SWITCH STYLES 
   ORIGINAL DEMO - https://codepen.io/suez/pen/WQjwOb */
.colorful-switch {
  position: relative;
  width: 180px;
  height: 77.1428571429px;
  margin: 0 auto;
  border-radius: 32.1428571429px;
  background: #cfcfcf;
}
.colorful-switch:before {
  content: "";
  z-index: -1;
  position: absolute;
  left: -5px;
  top: -5px;
  width: 190px;
  height: 87.1428571429px;
  border-radius: 37.1428571429px;
  background: #314239;
  transition: background-color 0.3s;
}
.colorful-switch:hover:before {
  background: #4C735F;
}
.colorful-switch__checkbox {
  z-index: -10;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.colorful-switch__label {
  z-index: 1;
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 32.1428571429px;
  cursor: pointer;
}
.colorful-switch__bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 540px;
  height: 100%;
  background: linear-gradient(90deg, #14DCD6 0, #10E7BD 180px, #EF9C29 360px, #E76339 100%);
  transition: transform 0.5s;
  transform: translate3d(-360px, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__bg {
  transform: translate3d(0, 0, 0);
}
.colorful-switch__dot {
  position: absolute;
  left: 131.1428571429px;
  top: 50%;
  width: 5.1428571429px;
  height: 5.1428571429px;
  margin-left: -2.5714285714px;
  margin-top: -2.5714285714px;
  border-radius: 50%;
  background: #fff;
  transition: transform 0.5s;
  transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__dot {
  transform: translate3d(-80.3571428571px, 0, 0);
}
.colorful-switch__on {
  position: absolute;
  left: 104.1428571429px;
  top: 22.5px;
  width: 19.2857142857px;
  height: 36px;
  transition: transform 0.5s;
  transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__on {
  transform: translate3d(-80.3571428571px, 0, 0);
}
.colorful-switch__on__inner {
  position: absolute;
  width: 100%;
  height: 100%;
  transition: transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
  transform-origin: 100% 50%;
  transform: rotate(45deg) scale(0) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__on__inner {
  transition: transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
  transform: rotate(45deg) scale(1) translateZ(0);
}
.colorful-switch__on__inner:before, .colorful-switch__on__inner:after {
  content: "";
  position: absolute;
  border-radius: 2.5714285714px;
  background: #fff;
}
.colorful-switch__on__inner:before {
  left: 0;
  bottom: 0;
  width: 100%;
  height: 6.1428571429px;
}
.colorful-switch__on__inner:after {
  right: 0;
  top: 0;
  width: 6.1428571429px;
  height: 100%;
}
.colorful-switch__off {
  position: absolute;
  left: 131.1428571429px;
  top: 50%;
  width: 41.1428571429px;
  height: 41.1428571429px;
  margin-left: -20.5714285714px;
  margin-top: -20.5714285714px;
  transition: transform 0.5s;
  transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off {
  transform: translate3d(-80.3571428571px, 0, 0);
}
.colorful-switch__off:before, .colorful-switch__off:after {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 5.1428571429px;
  margin-top: -2.5714285714px;
  border-radius: 2.5714285714px;
  background: #fff;
  transition: transform 0.25s 0.25s;
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:before, .colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:after {
  transition-delay: 0s;
}
.colorful-switch__off:before {
  transform: rotate(45deg) scaleX(1) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:before {
  transform: rotate(45deg) scaleX(0) translateZ(0);
}
.colorful-switch__off:after {
  transition-timing-function: cubic-bezier(0.67, -0.16, 0.47, 1.61);
  transform: rotate(-45deg) scaleX(1) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:after {
  transition-timing-function: ease;
  transform: rotate(-45deg) scaleX(0) translateZ(0);
}
    .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
   
}

htl{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
/* anime trong phần mobile*/

#main {
 
}
body,#topanime .anime, #topanime .animelast{
    background-color: #111010;
}

.darkbgr:checked ~ .anime{
    background-color: #050505;
}
/* phần mobile*/

#nav-mobile{
    display:none;
}
#nav2{
    display: none;
}
.fa-bars{
    font-size: 5px;
    color: rgb(241, 99, 99);
}
#topanime2{
    display: none;
}

/* phan mau nen*/
body{
   
}
/*phần header đầu trang*/


#header{
    position: fixed;
    height: 45px;
    background-color: black;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    
}
#nav li{
   
    position: relative;
}

#nav > li{
  display: inline-block;
}
/* phần đổ xuôngs của thể loại*/
#nav .subnav{
    
    min-width:154px;
    display:none;
    position: absolute;
    background-color: #fff;
    box-shadow: 0 0 10px 
    
    
}

#nav > li > a{
    color: #fff;
}

#nav .subnav a{
    color: #000;
   
}

#nav, .subnav{
    list-style-type: none;
}
#nav li a{
    text-decoration: none;
    
    line-height: 45px;
    padding: 0 25px;
    display: block;

}
/* phần hover cua the loại*/

#nav li:hover .subnav {
    display: block;
}
#nav > li:hover > a,
#nav .subnav li:hover a{
  color: #000;
  background-color:darkgrey;
}
</style>
</head>
<body>
<!-- phan nav cuar trang-->
<div id="header" style="background-color: transparent; right: 100px;margin-right:-20px;">
 
  <ul id="nav" style="color:black;font-size:20px; margin-left:-30px;    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  ">
     
      <li style=""><a href="{{URL::to('/discover')}}" class="ti-angle-double-left"> DISCOVER</a></li>
    
     </ul>
  
  </div>






<!-- phan slide cua trang home-->
<div class="demo-cont">
  <!-- slider start -->
  <div class="fnc-slider example-slider">
    <div class="fnc-slider__slides">
      <!-- slide start -->
      <div class="fnc-slide m--blend-green m--active-slide">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Naruto</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span></span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-dark">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>One</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Piece</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-red">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Dragon</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Ball</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-blue">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Fairy</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span> Tail</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
    </div>
    <nav class="fnc-nav">
      <div class="fnc-nav__bgs">
        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
        <div class="fnc-nav__bg m--navbg-dark"></div>
        <div class="fnc-nav__bg m--navbg-red"></div>
        <div class="fnc-nav__bg m--navbg-blue"></div>
      </div>
      <div class="fnc-nav__controls">
        <button class="fnc-nav__control">
          Naruto
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
         One Piece
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Dragon
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Fairy
          <span class="fnc-nav__control-progress"></span>
        </button>
      </div>
    </nav>
  </div>
  <!-- slider end -->
  <div class="demo-cont__credits">
    <div class="colorful-switch">
      <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
      <label class="colorful-switch__label" for="colorful-switch-cb">
        <span class="colorful-switch__bg"></span>
        <span class="colorful-switch__dot"></span>
        <span class="colorful-switch__on">
          <span class="colorful-switch__on__inner"></span>
        </span>
        <span class="colorful-switch__off"></span>
      </label>
    </div>
    <div class="demo-cont__credits-close" style="z-index: 5;"></div>
    <h2 class="demo-cont__credits-heading"style="color: aquamarine;">Cộng Đồng</h2>
   <!----<img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="demo-cont__credits-img" /> -->
    <h3 class="demo-cont__credits-name " style = "color:rgb(199, 72, 188)">Group Anime</h3>
    <a href="https://www.facebook.com/groups/animegroup0" target="_blank" class="demo-cont__credits-link" style="text-decoration: none;">
      > Yêu Anime và Nghiện Nhạc </a>
    
    <h2 class="demo-cont__credits-heading" style = "color:rgb(199, 72, 188)">FanPage</h2>
    <a href="https://www.facebook.com/loveanime05" target="_blank" class="demo-cont__credits-link" style="text-decoration: none;"> > Love Anime</a>
    <h4 class="demo-cont__credits-blend" style="color: aquamarine;">/* Trải Nghiệm Vui Vẻ */</h4>
   
  </div>
</div>
<!--phần footer của trang home-->
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="font-size:15px;">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <style>
            .text-uppercase{
              font-size:20px;
            }
          </style>
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script>
    (function() {

var $$ = function(selector, context) {
  var context = context || document;
  var elements = context.querySelectorAll(selector);
  return [].slice.call(elements);
};

function _fncSliderInit($slider, options) {
  var prefix = ".fnc-";

  var $slider = $slider;
  var $slidesCont = $slider.querySelector(prefix + "slider__slides");
  var $slides = $$(prefix + "slide", $slider);
  var $controls = $$(prefix + "nav__control", $slider);
  var $controlsBgs = $$(prefix + "nav__bg", $slider);
  var $progressAS = $$(prefix + "nav__control-progress", $slider);

  var numOfSlides = $slides.length;
  var curSlide = 1;
  var sliding = false;
  var slidingAT = +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
  var slidingDelay = +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;

  var autoSlidingActive = false;
  var autoSlidingTO;
  var autoSlidingDelay = 5000; // default autosliding delay value
  var autoSlidingBlocked = false;

  var $activeSlide;
  var $activeControlsBg;
  var $prevControl;

  function setIDs() {
    $slides.forEach(function($slide, index) {
      $slide.classList.add("fnc-slide-" + (index + 1));
    });

    $controls.forEach(function($control, index) {
      $control.setAttribute("data-slide", index + 1);
      $control.classList.add("fnc-nav__control-" + (index + 1));
    });

    $controlsBgs.forEach(function($bg, index) {
      $bg.classList.add("fnc-nav__bg-" + (index + 1));
    });
  };

  setIDs();

  function afterSlidingHandler() {
    $slider.querySelector(".m--previous-slide").classList.remove("m--active-slide", "m--previous-slide");
    $slider.querySelector(".m--previous-nav-bg").classList.remove("m--active-nav-bg", "m--previous-nav-bg");

    $activeSlide.classList.remove("m--before-sliding");
    $activeControlsBg.classList.remove("m--nav-bg-before");
    $prevControl.classList.remove("m--prev-control");
    $prevControl.classList.add("m--reset-progress");
    var triggerLayout = $prevControl.offsetTop;
    $prevControl.classList.remove("m--reset-progress");

    sliding = false;
    var layoutTrigger = $slider.offsetTop;

    if (autoSlidingActive && !autoSlidingBlocked) {
      setAutoslidingTO();
    }
  };

  function performSliding(slideID) {
    if (sliding) return;
    sliding = true;
    window.clearTimeout(autoSlidingTO);
    curSlide = slideID;

    $prevControl = $slider.querySelector(".m--active-control");
    $prevControl.classList.remove("m--active-control");
    $prevControl.classList.add("m--prev-control");
    $slider.querySelector(prefix + "nav__control-" + slideID).classList.add("m--active-control");

    $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
    $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);

    $slider.querySelector(".m--active-slide").classList.add("m--previous-slide");
    $slider.querySelector(".m--active-nav-bg").classList.add("m--previous-nav-bg");

    $activeSlide.classList.add("m--before-sliding");
    $activeControlsBg.classList.add("m--nav-bg-before");

    var layoutTrigger = $activeSlide.offsetTop;

    $activeSlide.classList.add("m--active-slide");
    $activeControlsBg.classList.add("m--active-nav-bg");

    setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
  };



  function controlClickHandler() {
    if (sliding) return;
    if (this.classList.contains("m--active-control")) return;
    if (options.blockASafterClick) {
      autoSlidingBlocked = true;
      $slider.classList.add("m--autosliding-blocked");
    }

    var slideID = +this.getAttribute("data-slide");

    performSliding(slideID);
  };

  $controls.forEach(function($control) {
    $control.addEventListener("click", controlClickHandler);
  });

  function setAutoslidingTO() {
    window.clearTimeout(autoSlidingTO);
    var delay = +options.autoSlidingDelay || autoSlidingDelay;
    curSlide++;
    if (curSlide > numOfSlides) curSlide = 1;

    autoSlidingTO = setTimeout(function() {
      performSliding(curSlide);
    }, delay);
  };

  if (options.autoSliding || +options.autoSlidingDelay > 0) {
    if (options.autoSliding === false) return;
    
    autoSlidingActive = true;
    setAutoslidingTO();
    
    $slider.classList.add("m--with-autosliding");
    var triggerLayout = $slider.offsetTop;
    
    var delay = +options.autoSlidingDelay || autoSlidingDelay;
    delay += slidingDelay + slidingAT;
    
    $progressAS.forEach(function($progress) {
      $progress.style.transition = "transform " + (delay / 1000) + "s";
    });
  }
  
  $slider.querySelector(".fnc-nav__control:first-child").classList.add("m--active-control");

};

var fncSlider = function(sliderSelector, options) {
  var $sliders = $$(sliderSelector);

  $sliders.forEach(function($slider) {
    _fncSliderInit($slider, options);
  });
};

window.fncSlider = fncSlider;
}());

/* not part of the slider scripts */

/* Slider initialization
options:
autoSliding - boolean
autoSlidingDelay - delay in ms. If audoSliding is on and no value provided, default value is 5000
blockASafterClick - boolean. If user clicked any sliding control, autosliding won't start again
*/
fncSlider(".example-slider", {autoSlidingDelay: 4000});

var $demoCont = document.querySelector(".demo-cont");

[].slice.call(document.querySelectorAll(".fnc-slide__action-btn")).forEach(function($btn) {
$btn.addEventListener("click", function() {
  $demoCont.classList.toggle("credits-active");
});
});

document.querySelector(".demo-cont__credits-close").addEventListener("click", function() {
$demoCont.classList.remove("credits-active");
});

document.querySelector(".js-activate-global-blending").addEventListener("click", function() {
document.querySelector(".example-slider").classList.toggle("m--global-blending-active");
});
</script>

<!-- partial -->
  <script  src="./script.js"></script>
  <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>

</body>
</html>

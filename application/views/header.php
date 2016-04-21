<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/materialize.min.css" />
      <title><?php echo $title; ?> </title>
      <style type="text/css">
          @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: local('Material Icons'), local('MaterialIcons-Regular'), url(fonts/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
          }
          .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
          }
          @font-face {
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            src: local('Ubuntu'), url(fonts/ODszJI8YqNw8V2xPulzjO_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
          }
          /* cyrillic */
          @font-face {
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            src: local('Ubuntu'), url(fonts/iQ9VJx1UMASKNiGywyyCXvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
          }
          /* greek-ext */
          @font-face {
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            src: local('Ubuntu'), url(fonts/WkvQmvwsfw_KKeau9SlQ2_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
          }
          /* greek */
          @font-face {
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            src: local('Ubuntu'), url(fonts/gYAtqXUikkQjyJA1SnpDLvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0370-03FF;
          }
          /* latin-ext */
          @font-face {
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            src: local('Ubuntu'), url(fonts/Wu5Iuha-XnKDBvqRwQzAG_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
          }
          /* latin */
          @font-face {
            font-family: 'Ubuntu';
            font-style: normal;
            font-weight: 400;
            src: local('Ubuntu'), url(fonts/sDGTilo5QRsfWu6Yc11AXg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
          }
          /*header starts*/
          body {
            /*background-color: #E3E3E3;*/
          }
          h1,h2,h3,h4,h5,h6,b,p,textarea,input,small,li,button,div,a
          {
            font-family: 'Ubuntu' !important;
          }
          html,body {
              padding:0;
              margin: 0;
              background-color: #ddd;
          }
          .content-hide {
              display: none;
          }
          .container {
            margin-top: 60px;
          }
          .container .row {
            margin-bottom: 0;
            text-align: center;
          }
          nav {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030;
            top: 0;
          }
          hr {
            margin: 0;
            opacity: 0.2;
          }
          .nameLabel {
            padding-top: 5px;
          }
          .addexpense {
              padding: 12px;
          }
          .addexpenseDesktop {
              padding: 0px;
          }
          .btnactions , .updateactions{
            margin-top: 10px;
          }
          .btnactions button,.updateactions button{
            width: 60px;
            margin-left: 5px;
            padding: 0;
          }
      </style>
      <link rel="stylesheet" href="<?php echo base_url();?>css/materialdesignicons.min.css">
  </head>
  <body>
    <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo center">Test Me Hire Me</a>
          <a class="modal-trigger right addexpense hide-on-med-and-up" href="#modal1" title="Add Expense">
            <i class="material-icons">add</i>
          </a>  
        </div>
    </nav>
    <div class="container">
    </div> 
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/materialize.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      });
    </script>
  </body>
</html>

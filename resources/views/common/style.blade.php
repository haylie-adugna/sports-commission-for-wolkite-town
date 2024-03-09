<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
<!-- Morris chart -->
<link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/pace/pace.min.css') }}">

<link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



<![endif]-->
<style>
    #app {
    height: 100vh; /* Adjust as needed */
    overflow-y: auto;
}
  </style>
<style>
    #previewContainer img,
    #previewContainer video {
        max-width: 100%;
        max-height: 150px; /* Adjust the height as needed */
        margin-top: 10px; /* Add some spacing between the input and the preview */
    }
</style>
<style>
    /* FROM HTTP://WWW.GETBOOTSTRAP.COM
     * Glyphicons
     *
     * Special styles for displaying the icons and their classes in the docs.
     */

    .bs-glyphicons {
      padding-left: 0;
      padding-bottom: 1px;
      margin-bottom: 20px;
      list-style: none;
      overflow: hidden;
    }

    .bs-glyphicons li {
      float: left;
      width: 25%;
      height: 115px;
      padding: 10px;
      margin: 0 -1px -1px 0;
      font-size: 12px;
      line-height: 1.4;
      text-align: center;
      border: 1px solid #ddd;
    }

    .bs-glyphicons .glyphicon {
      margin-top: 5px;
      margin-bottom: 10px;
      font-size: 24px;
    }

    .bs-glyphicons .glyphicon-class {
      display: block;
      text-align: center;
      word-wrap: break-word; /* Help out IE10+ with class names */
    }

    .bs-glyphicons li:hover {
      background-color: rgba(86, 61, 124, .1);
    }

    @media (min-width: 768px) {
      .bs-glyphicons li {
        width: 12.5%;
      }
    }
  </style>
    <style>
    .VIpgJd-ZVi9od-ORHb-OEVmcd {
 display: none !important;
    }
.VIpgJd-yAWNEb-hvhgNd{
  display: none;
}

.VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c{
display: none !important;
}
#google_translate_element {
  color: transparent;
}
#google_translate_element a {
  display: none;
}
#google_translate_element select{
   background-color:#f6edfd;
   color:#383ffa;
   border: none;
   border-radius:3px;
   padding:6px 8px
}
.goog-te-combo{
    width: 100%;
    height: 40px;
    border-radius: 5px;
}
.goog-te-gadget {
    color: #040f1c00;
}


</style>

<style>
    /* Add this style in your CSS or within a style tag in the HTML */
    .colored-card {
        display: inline-block;
        width: 40px;
        height: 30px;
        border: 1px solid #000;
    }
    #yellowCard:checked + .colored-card {
        background-color: yellow;
    }

    #redCard:checked + .colored-card {
        background-color: red;
    }
    .layout-footer-fixed {
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa; /* Set your preferred background color */
            border-top: 1px solid #ddd; /* Add a border if needed */
            padding: 10px;
            text-align: center;
            z-index: 1000; /* Set a high z-index to ensure it appears on top */
        }
        .custombg {
    background-image: url('{{ asset('assets/images/volleyball.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    /* Add more background properties as needed */
}
</style>
<style>
    .user-box {
        height: 100%
    }

    .user-box .media-object {
        height: 45px;
        width: 45px;
        display: inline-block
    }

    .p-chat-user {
        position: fixed;
        top: 0;
        right: 0;
        width: 280px;
        height: 100%;
        z-index: 1030;
        background-color: #fff;
        -webkit-box-shadow: -2px 0 11px -2px rgba(0, 0, 0, .3);
        box-shadow: -2px 0 11px -2px rgba(0, 0, 0, .3)
    }

    .p-chat-user .chat-search-box {
        padding: 20px
    }

    .p-chat-user .userlist-box {
        cursor: pointer;
        border-bottom: 1px solid #efefef
    }

    .p-chat-user .userlist-box .media-left {
        padding-right: 10px
    }

    .showChat_inner {
        position: fixed;
        top: 0;
        background-color: #fff;
        right: 0;
        display: none;
        width: 280px;
        height: 100%;
        z-index: 1032
    }

    .showChat_inner .chat-reply-box {
        background-color: #fff;
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 20px 20px 0;
        border-top: 1px solid #ccc
    }

    .showChat_inner .chat-inner-header {
        text-align: center;
        margin-bottom: 20px;
        border-bottom: 1px solid #ccc;
        padding: 20px
    }

    .showChat_inner .chat-messages {
        padding-bottom: 20px;
        padding-left: 15px;
        padding-right: 15px
    }

    .showChat_inner .chat-messages .chat-menu-content>div,
    .showChat_inner .chat-messages .chat-menu-reply>div {
        position: relative;
        overflow: visible;
        display: inline-block
    }

    .showChat_inner .chat-messages .chat-menu-content>div .chat-cont,
    .showChat_inner .chat-messages .chat-menu-reply>div .chat-cont {
        padding: 10px;
        margin-bottom: 0
    }

    .showChat_inner .chat-messages .chat-menu-content .chat-time,
    .showChat_inner .chat-messages .chat-menu-reply .chat-time {
        margin: 9px 8px 0 10px
    }

    .showChat_inner .chat-messages .chat-menu-reply {
        text-align: right;
        padding-right: 10px
    }

    .showChat_inner .chat-messages .chat-menu-reply>div {
        border-radius: 10px 10px 0;
        background: #f2f7fb
    }

    .showChat_inner .chat-messages .chat-menu-reply>div:before {
        content: '';
        position: absolute;
        bottom: 0;
        right: -10px;
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-left-color: #f2f7fb;
        border-bottom-color: #f2f7fb
    }

    .showChat_inner .chat-messages .chat-menu-content>div {
        background: #d9ebff;
        border-radius: 0 10px 10px
    }

    .showChat_inner .chat-messages .chat-menu-content>div:before {
        content: '';
        position: absolute;
        top: 0;
        left: -14px;
        width: 0;
        height: 0;
        border: 8px solid transparent;
        border-right-color: #d9ebff;
        border-top-color: #d9ebff
    }


    .users-main {
        height: 100%;
        width: 280px;
        position: fixed;
        border-radius: 0
    }

    .users-main .media {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 0;
        padding-bottom: 10px;
        margin-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
        position: relative
    }

    .users-main .media .chat-header {
        font-size: 14px;
        font-weight: 600
    }

    .users-main .media-body div+div {
        font-size: 12px
    }

    .photo-table img {
        display: inline-block;
        width: 40px;
        margin-bottom: 5px
    }

    .live-status {
        height: 10px;
        width: 10px;
        position: absolute;
        top: 20px;
        right: 20px;
        border-radius: 100%;
        border: 1px solid
    }

    .showChat {
        display: none
    }
</style>

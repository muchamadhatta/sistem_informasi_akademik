<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMK Link And Match</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">
  <style>
    div a[title='Hosted on free web hosting 000webhost.com. Host your own website for FREE.'] {
      display: none;
      z-index: -999 !important;
      ;
      opacity: 0 !important;
      ;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<!-- <body  class="hold-transition login-page" style=" background-image: url('<?= base_url() ?>assets/img/backgroundlogin.jpg');"> -->
<body  class="hold-transition login-page" style=" background-image: linear-gradient( 111.1deg,  rgba(0,40,70,1) -4.8%, rgba(255,115,115,1) 82.7%, rgba(255,175,123,1) 97.2% );">
  <div class="login-box">
    <div class="bg-red" style="padding: 5px;">
      <a style="color: white; text-shadow: 1px 2px 10px black;"><b><small><i class="fa fa-wifi fa-2x"></i> SMK</small>
          Link and Match</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <?php if ($this->session->flashdata('message')) {
      echo $this->session->userdata('message');
    } ?>
      <p class="login-box-msg">Login System</p>

      <?= form_open(''); ?>
      <div class="form-group has-feedback <?= form_error('username') ? 'has-error' : '' ?>">
        <input type="text" class="form-control" placeholder="Username / NIP / NIS" name="username" autocomplete="off"
          autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback <?= form_error('username') ? 'has-error' : '' ?>">
        <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">

          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-danger btn-block btn-flat">Login <i
              class="fa fa-sign-in"></i></button><br>
          <a href="<?= base_url() ?>" class="btn btn-success btn-block pull-left"><i class="fa fa-reply"></i> Back</a>
        </div>
        <!-- /.col -->
      </div>
      <?= form_close() ?>




    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- toasts -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>" />
  <script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
  <script>
    function notifikasi(status, text) {
      if (status == 'success') {
        $.toast({
          heading: 'Success',
          text: text,
          showHideTransition: 'slide',
          icon: 'success',
          hideAfter: 5000,
          position: 'top-right'
        });
        var audio = new Audio('<?= base_url(); ?>assets/sound/1.mp3');
      } else {
        $.toast({
          heading: 'error',
          text: text,
          showHideTransition: 'slide',
          icon: 'error',
          hideAfter: 5000,
          position: 'top-right'
        });
        var audio = new Audio('<?= base_url() ?>assets/sound/1.mp3');
      }

      audio.play();
    }
    $(function () {
      $('.btn').click(function () {
        $(this).html('<i class="fa fa-spin fa-spinner"></i> Loading..');
      });
      $('.alert').alert().delay(3000).hide('slow');
    });
    document.addEventListener("contextmenu", function (e) {
      e.preventDefault();
    }, false);
    shortcut = {
      all_shortcuts: {},
      add: function (a, b, c) {
        var d = {
          type: "keydown",
          propagate: !1,
          disable_in_input: !1,
          target: document,
          keycode: !1
        };
        if (c)
          for (var e in d) "undefined" == typeof c[e] && (c[e] = d[e]);
        else c = d;
        d = c.target, "string" == typeof c.target && (d = document.getElementById(c.target)), a = a.toLowerCase(),
          e = function (d) {
            d = d || window.event;
            if (c.disable_in_input) {
              var e;
              d.target ? e = d.target : d.srcElement && (e = d.srcElement), 3 == e.nodeType && (e = e.parentNode);
              if ("INPUT" == e.tagName || "TEXTAREA" == e.tagName) return
            }
            d.keyCode ? code = d.keyCode : d.which && (code = d.which), e = String.fromCharCode(code).toLowerCase(),
              188 == code && (e = ","), 190 == code && (e = ".");
            var f = a.split("+"),
              g = 0,
              h = {
                "`": "~",
                1: "!",
                2: "@",
                3: "#",
                4: "$",
                5: "%",
                6: "^",
                7: "&",
                8: "*",
                9: "(",
                0: ")",
                "-": "_",
                "=": "+",
                ";": ":",
                "'": '"',
                ",": "<",
                ".": ">",
                "/": "?",
                "\\": "|"
              },
              i = {
                esc: 27,
                escape: 27,
                tab: 9,
                space: 32,
                "return": 13,
                enter: 13,
                backspace: 8,
                scrolllock: 145,
                scroll_lock: 145,
                scroll: 145,
                capslock: 20,
                caps_lock: 20,
                caps: 20,
                numlock: 144,
                num_lock: 144,
                num: 144,
                pause: 19,
                "break": 19,
                insert: 45,
                home: 36,
                "delete": 46,
                end: 35,
                pageup: 33,
                page_up: 33,
                pu: 33,
                pagedown: 34,
                page_down: 34,
                pd: 34,
                left: 37,
                up: 38,
                right: 39,
                down: 40,
                f1: 112,
                f2: 113,
                f3: 114,
                f4: 115,
                f5: 116,
                f6: 117,
                f7: 118,
                f8: 119,
                f9: 120,
                f10: 121,
                f11: 122,
                f12: 123
              },
              j = !1,
              l = !1,
              m = !1,
              n = !1,
              o = !1,
              p = !1,
              q = !1,
              r = !1;
            d.ctrlKey && (n = !0), d.shiftKey && (l = !0), d.altKey && (p = !0), d.metaKey && (r = !0);
            for (var s = 0; k = f[s], s < f.length; s++) "ctrl" == k || "control" == k ? (g++, m = !0) : "shift" ==
              k ? (g++, j = !0) : "alt" == k ? (g++, o = !0) : "meta" == k ? (g++, q = !0) : 1 < k.length ? i[k] ==
              code && g++ : c.keycode ? c.keycode == code && g++ : e == k ? g++ : h[e] && d.shiftKey && (e = h[e],
                e == k && g++);
            if (g == f.length && n == m && l == j && p == o && r == q && (b(d), !c.propagate)) return d
              .cancelBubble = !0, d.returnValue = !1, d.stopPropagation && (d.stopPropagation(), d
              .preventDefault()), !1
          }, this.all_shortcuts[a] = {
            callback: e,
            target: d,
            event: c.type
          }, d.addEventListener ? d.addEventListener(c.type, e, !1) : d.attachEvent ? d.attachEvent("on" + c.type,
            e) : d["on" + c.type] = e
      },
      remove: function (a) {
        var a = a.toLowerCase(),
          b = this.all_shortcuts[a];
        delete this.all_shortcuts[a];
        if (b) {
          var a = b.event,
            c = b.target,
            b = b.callback;
          c.detachEvent ? c.detachEvent("on" + a, b) : c.removeEventListener ? c.removeEventListener(a, b, !1) : c[
            "on" + a] = !1
        }
      }
    }, shortcut.add("Ctrl+U", function () {
      notifikasi('gagal', 'Opsss... Akses Dilarang!!')
    });
  </script>
</body>

</html>
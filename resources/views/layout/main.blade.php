<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="https://laravel.com/img/favicon/favicon-32x32.png">
  <title>
    Laravel School
  </title>


  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />

  <meta name="keywords"
    content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Argon Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, soft design, soft dashboard bootstrap 5 dashboard">
  <meta name="description"
    content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon Dashboard PRO by Creative Tim">
  <meta name="twitter:description"
    content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image"
    content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/argon-dashboard-pro.jpg">

  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Argon Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/landing" />
  <meta property="og:image"
    content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/argon-dashboard-pro.jpg" />
  <meta property="og:description"
    content="Argon Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />

  <link id="pagestyle" href="{{ asset('assets') }}/css/argon-dashboard.min.css?v=2.0.5" rel="stylesheet" />

  <style>
    .async-hide {
      opacity: 0 !important
    }
  </style>
  <script>
    (function(a, s, y, n, c, h, i, d, e) {
      s.className += ' ' + y;
      h.start = 1 * new Date;
      h.end = i = function() {
        s.className = s.className.replace(RegExp(' ?' + y), '')
      };
      (a[n] = a[n] || []).hide = h;
      setTimeout(function() {
        i();
        h.end = null
      }, c);
      h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
      'GTM-K9BGS8K': true
    });
  </script>

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-46172202-22', 'auto', {
      allowLinker: true
    });
    ga('set', 'anonymizeIp', true);
    ga('require', 'GTM-K9BGS8K');
    ga('require', 'displayfeatures');
    ga('require', 'linker');
    ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
  </script>


  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>

</head>

<body class="g-sidenav-show   bg-gray-100">


  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>

  <div class="position-absolute w-100 min-height-300 top-0"
    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>

  {{-- SIDEBAR --}}
  @include('layout.sidebar')

  <main class="main-content position-relative border-radius-lg ">
    {{-- HEADER --}}
    @include('layout.header')
    <div class="container-fluid py-4">

      {{-- CONTENT --}}
      @yield('content')

      {{-- FOOTER --}}
      @include('layout.footer')

    </div>
  </main>
  <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/multistep-form.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/dragula/dragula.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/jkanban/jkanban.js"></script>
  <script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
      searchable: false,
      fixedHeight: true
    });

    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
      searchable: true,
      fixedHeight: true
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="{{ asset('assets') }}/js/argon-dashboard.min.js?v=2.0.5"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
    data-cf-beacon='{"rayId":"76cee4c198841113","version":"2022.11.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>
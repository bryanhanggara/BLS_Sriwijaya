<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

  <meta charset="utf-8">
  <meta name="generator" content="quarto-1.0.36">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  
  <link rel="shortcut icon" type="png" href="{{url('BLS-Sriwijaya/course/images/bls.png')}}">
  <link rel="stylesheet" type="text/css" href="{{url('BLS-Sriwijaya/course/style/navbar_course.css')}}">
  <title>@yield('title')</title>
  <meta name="quarto:offset" content="./">
  <link href="{{url('BLS-Sriwijaya/course/site_libs/quarto-html/tippy.css')}}" rel="stylesheet">
  <link href="{{url('BLS-Sriwijaya/course/site_libs/quarto-html/quarto-syntax-highlighting.css')}}" rel="stylesheet"
    id="quarto-text-highlighting-styles">
  @include('include.style')
  <link href="{{url('BLS-Sriwijaya/course/site_libs/bootstrap/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('BLS-Sriwijaya/course/site_libs/bootstrap/bootstrap.min.css')}}" rel="stylesheet" id="quarto-bootstrap" data-mode="light">

  <script id="quarto-search-options" type="application/json">{
  "location": "sidebar",
  "copy-button": false,
  "collapse-after": 3,
  "panel-placement": "start",
  "type": "textbox",
  "limit": 20,
  "language": {
    "search-no-results-text": "No results",
    "search-matching-documents-text": "matching documents",
    "search-copy-link-title": "Copy link to search",
    "search-hide-matches-text": "Hide additional matches",
    "search-more-match-text": "more match in this document",
    "search-more-matches-text": "more matches in this document",
    "search-clear-button-title": "Clear",
    "search-detached-cancel-button-title": "Cancel",
    "search-submit-button-title": "Submit"
  }

</script>


</head>
@include('include.navbar')

<body class="nav-sidebar docked">


  <!-- content -->
  <div id="quarto-content" class="quarto-container page-columns page-rows-contents page-layout-article">

    <!-- sidebar -->
    <nav id="quarto-sidebar" class="sidebar collapse sidebar-navigation docked overflow-auto"
      style="border-right-width: 10px; padding-right: 25px;">

      <div class="daftarModul">
        <p><b>Daftar Modul</b></p>
        <hr>
      </div>

      <div class="mt-2 flex-shrink-0 align-items-center">

        @foreach ($subs as $item)
        <p>{{$item->sub_name}}</p>
        @foreach ($item->babs as $bab)
        <div class="sidebar-menu-container">
          <ul style="list-style: circle">
            <li class="sidebar-item">
              <div class="sidebar-item-container">
                <a href="{{route('dashboard.show', $bab->id)}}" class="sidebar-item-text sidebar-link" style="text-align: left; color: #DF2771;">
                 {{$bab->name}}</a>
              </div>
            </li>
          </ul>
        </div>
        @endforeach
      @endforeach
</div>

    </nav>

    <!-- margin-sidebar -->
    <div id="quarto-margin-sidebar" class="sidebar margin-sidebar" style="margin-top: 50%;">
      <nav id="TOC" role="doc-toc">
        <h2 id="toc-title">On this page</h2>
        <ul>
          <li><a href="#course-overview" id="toc-course-overview" class="nav-link active"
              data-scroll-target="#course-overview">Definisi & tujuan</a></li>
          <li><a href="#pedoman" id="toc-class-meetings" class="nav-link" data-scroll-target="#pedoman">Lanjutan
            </a></li>
        </ul>
      </nav>

    </div>
    @yield('content')
   
    <script id="quarto-html-after-body" type="application/javascript">
        window.document.addEventListener("DOMContentLoaded", function (event) {
          const toggleBodyColorMode = (bsSheetEl) => {
            const mode = bsSheetEl.getAttribute("data-mode");
            const bodyEl = window.document.querySelector("body");
            if (mode === "dark") {
              bodyEl.classList.add("quarto-dark");
              bodyEl.classList.remove("quarto-light");
            } else {
              bodyEl.classList.add("quarto-light");
              bodyEl.classList.remove("quarto-dark");
            }
          }
          const toggleBodyColorPrimary = () => {
            const bsSheetEl = window.document.querySelector("link#quarto-bootstrap");
            if (bsSheetEl) {
              toggleBodyColorMode(bsSheetEl);
            }
          }
          toggleBodyColorPrimary();
          const icon = "";
          const anchorJS = new window.AnchorJS();
          anchorJS.options = {
            placement: 'right',
            icon: icon
          };
          anchorJS.add('.anchored');
          const clipboard = new window.ClipboardJS('.code-copy-button', {
            target: function (trigger) {
              return trigger.previousElementSibling;
            }
          });
          clipboard.on('success', function (e) {
            // button target
            const button = e.trigger;
            // don't keep focus
            button.blur();
            // flash "checked"
            button.classList.add('code-copy-button-checked');
            var currentTitle = button.getAttribute("title");
            button.setAttribute("title", "Copied!");
            setTimeout(function () {
              button.setAttribute("title", currentTitle);
              button.classList.remove('code-copy-button-checked');
            }, 1000);
            // clear code selection
            e.clearSelection();
          });
          function tippyHover(el, contentFn) {
            const config = {
              allowHTML: true,
              content: contentFn,
              maxWidth: 500,
              delay: 100,
              arrow: false,
              appendTo: function (el) {
                return el.parentElement;
              },
              interactive: true,
              interactiveBorder: 10,
              theme: 'quarto',
              placement: 'bottom-start'
            };
            window.tippy(el, config);
          }
          const noterefs = window.document.querySelectorAll('a[role="doc-noteref"]');
          for (var i = 0; i < noterefs.length; i++) {
            const ref = noterefs[i];
            tippyHover(ref, function () {
              let href = ref.getAttribute('href');
              try {href = new URL(href).hash;} catch {}
              const id = href.replace(/^#\/?/, "");
              const note = window.document.getElementById(id);
              return note.innerHTML;
            });
          }
          var bibliorefs = window.document.querySelectorAll('a[role="doc-biblioref"]');
          for (var i = 0; i < bibliorefs.length; i++) {
            const ref = bibliorefs[i];
            const cites = ref.parentNode.getAttribute('data-cites').split(' ');
            tippyHover(ref, function () {
              var popup = window.document.createElement('div');
              cites.forEach(function (cite) {
                var citeDiv = window.document.createElement('div');
                citeDiv.classList.add('hanging-indent');
                citeDiv.classList.add('csl-entry');
                var biblioDiv = window.document.getElementById('ref-' + cite);
                if (biblioDiv) {
                  citeDiv.innerHTML = biblioDiv.innerHTML;
                }
                popup.appendChild(citeDiv);
              });
              return popup.innerHTML;
            });
          }
        });
    </script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/quarto-nav/quarto-nav.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/clipboard/clipboard.min.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/quarto-search/autocomplete.umd.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/quarto-search/fuse.min.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/quarto-search/quarto-search.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/quarto-html/quarto.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/quarto-html/popper.min.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/coursesite_libs/quarto-html/tippy.umd.min.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/quarto-html/anchor.min.js')}}"></script>
    <script src="{{url('BLS-Sriwijaya/course/site_libs/bootstrap/bootstrap.min.js')}}"></script>
    <script>"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js" ></script>
    <script src="{{url('BLS-Sriwijaya/course/js/kembali.js')}}"></script>
    @include('include.script')
  </div> <!-- /content -->



</body>

</html>
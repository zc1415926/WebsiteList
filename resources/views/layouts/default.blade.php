<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UIkit</title>
    <link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
    <link id="data-uikit-theme" rel="stylesheet" href="../css/uikit.docs.min.css"/>
    <link rel="stylesheet" href="../css/docs.css"/>


</head>

<body class="tm-background">

@include('layouts.partials.nav')

<div class="tm-section tm-section-color-1 tm-section-colored">
    <div class="uk-container uk-container-center uk-text-center">
        @yield('content')


    </div>
</div>

<div class="tm-footer">
    <div class="uk-container uk-container-center uk-text-center">

        <ul class="uk-subnav uk-subnav-line uk-flex-center">
            <li><a href="https://github.com/uikit/uikit">GitHub</a></li>
            <li><a href="https://github.com/uikit/uikit/issues">Issues</a></li>
            <li><a href="https://github.com/uikit/uikit/blob/master/CHANGELOG.md">Changelog</a></li>
            <li><a href="https://twitter.com/getuikit">Twitter</a></li>
        </ul>

        <div class="uk-panel">
            <p>Made by <a href="http://www.yootheme.com">YOOtheme</a> with love and caffeine.<br class="uk-hidden-small">Licensed under <a href="http://opensource.org/licenses/MIT">MIT license</a>.</p>
            <a href="index.html"><img src="../images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></a>
        </div>

    </div>
</div>

<div id="tm-offcanvas" class="uk-offcanvas">

    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="{ multiple: true }">
            <li class="uk-parent"><a href="#">Documentation</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/documentation_get-started.html">Get started</a></li>
                    <li><a href="docs/documentation_how-to-customize.html">How to customize</a></li>
                    <li><a href="docs/documentation_layouts.html">Layout examples</a></li>
                    <li><a href="docs/core.html">Core</a></li>
                    <li><a href="docs/components.html">Components</a></li>
                    <li><a href="docs/documentation_project-structure.html">Project structure</a></li>
                    <li><a href="documentation_less-sass.html">Less &amp; Sass files</a></li>
                    <li><a href="docs/documentation_create-a-theme.html">Create a theme</a></li>
                    <li><a href="docs/documentation_create-a-style.html">Create a style</a></li>
                    <li><a href="docs/documentation_customizer-json.html">Customizer.json</a></li>
                    <li><a href="docs/documentation_javascript.html">Javascript</a></li>
                    <li><a href="docs/documentation_custom-prefix.html">Custom prefix</a></li>
                </ul>
            </li>
            <li class="uk-nav-header">Core</li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-wrench"></i> Defaults</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/base.html">Base</a></li>
                    <li><a href="docs/print.html">Print</a></li>
                </ul>
            </li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-th-large"></i> Layout</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/grid.html">Grid</a></li>
                    <li><a href="docs/panel.html">Panel</a></li>
                    <li><a href="docs/block.html">Block</a></li>
                    <li><a href="docs/article.html">Article</a></li>
                    <li><a href="docs/comment.html">Comment</a></li>
                    <li><a href="docs/utility.html">Utility</a></li>
                    <li><a href="docs/flex.html">Flex</a></li>
                    <li><a href="docs/cover.html">Cover</a></li>
                </ul>
            </li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-bars"></i> Navigations</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/nav.html">Nav</a></li>
                    <li><a href="docs/navbar.html">Navbar</a></li>
                    <li><a href="docs/subnav.html">Subnav</a></li>
                    <li><a href="docs/breadcrumb.html">Breadcrumb</a></li>
                    <li><a href="docs/pagination.html">Pagination</a></li>
                    <li><a href="docs/tab.html">Tab</a></li>
                    <li><a href="docs/thumbnav.html">Thumbnav</a></li>
                </ul>
            </li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-check"></i> Elements</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/list.html">List</a></li>
                    <li><a href="docs/description-list.html">Description list</a></li>
                    <li><a href="docs/table.html">Table</a></li>
                    <li><a href="docs/form.html">Form</a></li>
                </ul>
            </li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-folder-open"></i> Common</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/button.html">Button</a></li>
                    <li><a href="docs/icon.html">Icon</a></li>
                    <li><a href="docs/close.html">Close</a></li>
                    <li><a href="docs/badge.html">Badge</a></li>
                    <li><a href="docs/alert.html">Alert</a></li>
                    <li><a href="docs/thumbnail.html">Thumbnail</a></li>
                    <li><a href="docs/overlay.html">Overlay</a></li>
                    <li><a href="docs/text.html">Text</a></li>
                    <li><a href="docs/animation.html">Animation</a></li>
                    <li><a href="docs/contrast.html">Contrast</a></li>
                </ul>
            </li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-magic"></i> JavaScript</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/dropdown.html">Dropdown</a></li>
                    <li><a href="docs/modal.html">Modal</a></li>
                    <li><a href="docs/offcanvas.html">Off-canvas</a></li>
                    <li><a href="docs/switcher.html">Switcher</a></li>
                    <li><a href="docs/toggle.html">Toggle</a></li>
                    <li><a href="docs/scrollspy.html">Scrollspy</a></li>
                    <li><a href="docs/smooth-scroll.html">Smooth scroll</a></li>
                </ul>
            </li>
            <li class="uk-nav-header">Components</li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-th-large"></i> Layout</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/grid-js.html">Dynamic Grid</a></li>
                </ul>
            </li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-bars"></i> Navigations</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/dotnav.html">Dotnav</a></li>
                    <li><a href="docs/slidenav.html">Slidenav</a></li>
                    <li><a href="docs/pagination-js.html">Dynamic Pagination</a></li>
                </ul>
            </li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-folder-open"></i> Common</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/form-advanced.html">Form advanced</a></li>
                    <li><a href="docs/form-file.html">Form file</a></li>
                    <li><a href="docs/form-password.html">Form password</a></li>
                    <li><a href="docs/form-select.html">Form select</a></li>
                    <li><a href="docs/placeholder.html">Placeholder</a></li>
                    <li><a href="docs/progress.html">Progress</a></li>
                </ul>
            </li>
            <li class="uk-parent"><a href="#"><i class="uk-icon-magic"></i> JavaScript</a>
                <ul class="uk-nav-sub">
                    <li><a href="docs/lightbox.html">Lightbox</a></li>
                    <li><a href="docs/autocomplete.html">Autocomplete</a></li>
                    <li><a href="docs/datepicker.html">Datepicker</a></li>
                    <li><a href="docs/htmleditor.html">HTML editor</a></li>
                    <li><a href="docs/slider.html">Slider</a></li>
                    <li><a href="docs/slideset.html">Slideset</a></li>
                    <li><a href="docs/slideshow.html">Slideshow</a></li>
                    <li><a href="docs/parallax.html">Parallax</a></li>
                    <li><a href="docs/accordion.html">Accordion</a></li>
                    <li><a href="docs/notify.html">Notify</a></li>
                    <li><a href="docs/search.html">Search</a></li>
                    <li><a href="docs/nestable.html">Nestable</a></li>
                    <li><a href="docs/sortable.html">Sortable</a></li>
                    <li><a href="docs/sticky.html">Sticky</a></li>
                    <li><a href="docs/timepicker.html">Timepicker</a></li>
                    <li><a href="docs/tooltip.html">Tooltip</a></li>
                    <li><a href="docs/upload.html">Upload</a></li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li><a href="showcase/index.html">Showcase</a></li>
        </ul>

    </div>

</div>
<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/docs.js"></script>
<script src="http://cdn.bootcss.com/uikit/2.21.0/js/uikit.min.js"></script>

</body>
</html>

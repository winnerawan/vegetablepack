<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul id="nav" class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a href=""><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>

        </li>
        <li>
            <a href="{{url('admin/stores')}}"><div class="pull-left"><i class="zmdi zmdi-store mr-20"></i><span class="right-nav-text">Toko Mitra</span></div><div class="clearfix"></div></a>

        </li>
        <li>
            <a href="{{url('admin/merchants')}}"><div class="pull-left"><i class="zmdi zmdi-face mr-20"></i><span class="right-nav-text">Akun Mitra</span></div><div class="clearfix"></div></a>

        </li>
        <li>
            <a href="{{url('admin/customers')}}"><div class="pull-left"><i class="zmdi zmdi-account mr-20"></i><span class="right-nav-text">Pelanggan</span></div><div class="clearfix"></div></a>

        </li>
        <li>
            <a href="{{url('admin/sales')}}"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Penjualan</span></div><div class="clearfix"></div></a>

        </li>

        <li><hr class="light-grey-hr mb-10"/></li>
        <li class="navigation-header">
            <span>component</span>
            <i class="zmdi zmdi-more"></i>
        </li>

        <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-local-florist mr-20"></i><span class="right-nav-text">Sayur</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
        <ul id="maps_dr" class="collapse collapse-level-1">
            <li>
                <a href="{{ url('admin/vegetables/create') }}">Tambah Sayur</a>
            </li>
            <li>
                <a href="{{ url('admin/vegetables') }}">Daftar Sayur</a>
            </li>
        </ul>
        </li>

        <li>
            <a href=""><div class="pull-left"><i class="zmdi zmdi-view-list mr-20"></i><span class="right-nav-text">Paket Sayur</span></div><div class="clearfix"></div></a>

        </li>


        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="icon_dr" class="collapse collapse-level-1">
                <li>
                    <a href="fontawesome.html">Fontawesome</a>
                </li>
                <li>
                    <a href="themify.html">Themify</a>
                </li>
                <li>
                    <a href="linea-icon.html">Linea</a>
                </li>
                <li>
                    <a href="simple-line-icons.html">Simple Line</a>
                </li>
                <li>
                    <a href="pe-icon-7.html">Pe-icon-7</a>
                </li>
                <li>
                    <a href="glyphicons.html">Glyphicons</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">Lokasi</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="maps_dr" class="collapse collapse-level-1">
                <li>
                    <a href="vector-map.html">Zona</a>
                </li>
                <li>
                    <a href="google-map.html">Desa</a>
                </li>
            </ul>
        </li>
        <li><hr class="light-grey-hr mb-10"/></li>
        <li class="navigation-header">
            <span>featured</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Special Pages</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class="active" href="blank.html">Blank Page</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="auth_dr" class="collapse collapse-level-2">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="signup.html">Register</a>
                        </li>
                        <li>
                            <a href="forgot-password.html">Recover Password</a>
                        </li>
                        <li>
                            <a href="reset-password.html">reset Password</a>
                        </li>
                        <li>
                            <a href="locked.html">Lock Screen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="invoice_dr" class="collapse collapse-level-2">
                        <li>
                            <a href="invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="invoice-archive.html">Invoice Archive</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="error_dr" class="collapse collapse-level-2">
                        <li>
                            <a href="404.html">Error 404</a>
                        </li>
                        <li>
                            <a href="500.html">Error 500</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="timeline.html">Timeline</a>
                </li>
                <li>
                    <a href="faq.html">FAQ</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1"><div class="pull-left"><i class="zmdi zmdi-filter-list mr-20"></i><span class="right-nav-text">multilevel</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
                <li>
                    <a href="#">Item level 1</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Dropdown level 2<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
                        <li>
                            <a href="#">Item level 2</a>
                        </li>
                        <li>
                            <a href="#">Item level 2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
<script>
    function load(filename, content) {
        content = typeof content !== 'undefined' ? content : 'content';
        $('.loading').show();
        $.ajax({
            type: "GET",
            url: filename,
            contentType: false,
            success: function (data) {
                $("#" + content).html(data);
                $('.loading').hide();
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }
</script>

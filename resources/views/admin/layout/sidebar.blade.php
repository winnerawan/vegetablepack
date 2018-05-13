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
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#sayur_dr"><div class="pull-left"><i class="zmdi zmdi-local-florist mr-20"></i><span class="right-nav-text">Sayur</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
        <ul id="sayur_dr" class="collapse collapse-level-1">
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
            <a href="{{url('admin/taxes')}}"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Pajak & Biaya Antar</span></div><div class="clearfix"></div></a>

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
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Pengaturan</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a href="gallery.html"></a>
                </li>
                <li>
                    <a href="timeline.html"></a>
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

<style>
  /* Style untuk sidebar */
  .main-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    background-color: #fff;
    color: #000;
    overflow-y: auto;
    z-index: 1035;
  }

  .sidebar-light-dark {
    background-color: #f8f9fa;
  }

  .bg-primary {
    background-color: #007bff !important;
  }

  .text-white {
    color: #fff !important;
  }

  .brand-link {
    display: flex;
    align-items: center;
    padding: 0.5rem 1rem;
  }

  .brand-image {
    margin-right: 0.5rem;
    max-width: 2.5rem;
    max-height: 2.5rem;
  }

  .brand-text {
    font-size: 0.875rem;
  }

  .sidebar .nav-link {
    color: white;
    font-size: 0.875rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .sidebar .nav-treeview .nav-link {
    padding-left: 2.5rem;
  }

  .sidebar .nav-link.active,
  .sidebar .nav-link:hover {
    background-color: #e2e6ea;
    color: #000;
  }

  .sidebar .nav-treeview>.nav-item>.nav-link {
    padding-left: 2.5rem;
  }

  .sidebar .nav-treeview>.nav-item>.nav-link.active,
  .sidebar .nav-treeview>.nav-item>.nav-link:hover {
    background-color: #d7dadc;
    color: #000;
  }

  /* Responsive CSS */
  @media (max-width: 767.98px) {
    .main-sidebar {
      width: 100%;
    }

    .brand-image {
      margin-right: 0;
    }

    .brand-text {
      display: none;
    }

    .sidebar .nav-link {
      font-size: 1rem;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background-color: #e2e6ea;
      color: #000;
    }

    .sidebar .nav-treeview>.nav-item>.nav-link {
      padding-left: 3rem;
    }

    .sidebar .nav-treeview>.nav-item>.nav-link.active,
    .sidebar .nav-treeview>.nav-item>.nav-link:hover {
      background-color: #d7dadc;
      color: #000;
    }
  }

  .sidebar li.nav-item * {
    color: white;


  }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-dark elevation-4 bg-primary text-white">
  <!-- Brand Logo -->
  <a href="<?php echo base_url ?>admin" class="brand-link bg-primary text-sm">
    <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
    <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
    <div class="os-resize-observer-host observed">
      <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
    </div>
    <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
      <div class="os-resize-observer"></div>
    </div>
    <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
    <div class="os-padding">
      <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
          <!-- Sidebar user panel (optional) -->
          <div class="clearfix"></div>
          <!-- Sidebar Menu -->
          <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item dropdown">
                <a href="./" class="nav-link nav-home">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=accommodations" class="nav-link nav-accommodations">
                  <i class="nav-icon fas fa-th-list"></i>
                  <p>
                    Akomondasi
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=room" class="nav-link nav-room">
                  <i class="nav-icon fas fa-door-closed"></i>
                  <p>
                    Villa
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=bookings" class="nav-link nav-bookings">
                  <i class="nav-icon fas fa-book-open"></i>
                  <p>
                    Book List
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=inquiries" class="nav-link nav-inquiries">
                  <i class="nav-icon fas fa-comment-alt"></i>
                  <p>
                    Pertanyaan pelanggan
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                    Pengaturan
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
      </div>
    </div>
    <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
      <div class="os-scrollbar-track">
        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
      </div>
    </div>
    <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
      <div class="os-scrollbar-track">
        <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
      </div>
    </div>
    <div class="os-scrollbar-corner"></div>
  </div>
  <!-- /.sidebar -->
</aside>
<script>
  $(document).ready(function() {
    var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
    var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
    page = page.split('/');
    page = page[0];
    if (s != '')
      page = page + '_' + s;

    if ($('.nav-link.nav-' + page).length > 0) {
      $('.nav-link.nav-' + page).addClass('active')
      if ($('.nav-link.nav-' + page).hasClass('tree-item') == true) {
        $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active')
        $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open')
      }
      if ($('.nav-link.nav-' + page).hasClass('nav-is-tree') == true) {
        $('.nav-link.nav-' + page).parent().addClass('menu-open')
      }

    }

  })
</script>
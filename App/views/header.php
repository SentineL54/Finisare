<body>
        <!--
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div> -->
        <div class="connect-container align-content-stretch d-flex flex-wrap" style="padding:0px; margin:0px;">
            <div class="page-sidebar" >
                <div class="logo-box"><a href="#" class="logo-text">Connect</a><a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
                <div class="page-sidebar-inner slimscroll">
                    <ul class="accordion-menu  yazi_500" style="text-transform:uppercase;">
                        <li class="sidebar-title">
                            ANA MENÜ
                        </li>
                        <!-- class="active-page"  - class="active" -->
                        <li>
                              <a href=" javascript:void(0); ">
                                <i class="material-icons">desktop_mac</i>
                                Slider
                                <i class="material-icons has-sub-menu">add</i>
                              </a>
                              <ul class="sub-menu ">
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/slider/creat">
                                         Ekle
                                      </a>
                                  </li>
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/slider/read">
                                         Listele
                                      </a>
                                  </li>
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/slider/config">
                                         Ayar
                                      </a>
                                  </li>
                              </ul>
                        </li>
                        <li>
                              <a href=" javascript:void(0); ">
                                <i class="material-icons">list</i>
                                Menü
                                <i class="material-icons has-sub-menu">add</i>
                              </a>
                              <ul class="sub-menu ">
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/menu/creat">
                                         Ekle
                                      </a>
                                  </li>
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/menu/read">
                                         Listele
                                      </a>
                                  </li>
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/menu/config">
                                         Ayar
                                      </a>
                                  </li>
                              </ul>
                        </li>
                        <li>
                              <a href=" javascript:void(0); ">
                                <i class="material-icons">push_pin</i>
                                Kategori
                                <i class="material-icons has-sub-menu">add</i>
                              </a>
                              <ul class="sub-menu ">
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/category/creat">
                                         Ekle
                                      </a>
                                  </li>
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/category/read">
                                         Listele
                                      </a>
                                  </li>
                                  <li>
                                      <a href="<?=domain.dirnameProject?>/category/config">
                                         Ayar
                                      </a>
                                  </li>
                              </ul>
                        </li>
                        <li >
                            <a href="index.html" >
                               <i class="material-icons-outlined">dashboard</i>Menü</a>
                        </li>
                        <li>
                            <a href="mailbox.html"><i class="material-icons-outlined">inbox</i>E</a>
                        </li>
                        <li>
                            <a href="profile.html"><i class="material-icons-outlined">account_circle</i>Profile</a>
                        </li>
                        <li>
                            <a href="file-manager.html"><i class="material-icons">cloud_queue</i>File Manager</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="material-icons-outlined">calendar_today</i>Calendar</a>
                        </li>
                        <li>
                            <a href="todo.html"><i class="material-icons">done</i>Todo</a>
                        </li>
                        <li class="sidebar-title">
                            UI Elements
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Styles<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="styles-code.html">Code</a>
                                </li>
                                <li>
                                    <a href="styles-tables.html">Tables</a>
                                </li>
                                <li>
                                    <a href="styles-icons.html">Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="material-icons">apps</i>Components<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="ui-badge.html">Badge</a>
                                </li>
                                <li>
                                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-card.html">Card</a>
                                </li>
                                <li>
                                    <a href="ui-collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="ui-modal.html">Modal</a>
                                </li>
                                <li>
                                    <a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="ui-popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="ui-toast.html">Toast</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">card_giftcard</i>Extended<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="extended-select2.html">Select2</a>
                                </li>
                                <li>
                                    <a href="extended-datatables.html">Data Tables</a>
                                </li>
                                <li>
                                    <a href="extended-blockui.html">Block UI</a>
                                </li>
                                <li>
                                    <a href="extended-session.html">Session Timeout</a>
                                </li>
                                <li>
                                    <a href="extended-tree.html">Tree View</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="charts.html"><i class="material-icons">bar_chart</i>Charts</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="material-icons">input</i>Forms</a>
                        </li>
                        <li class="sidebar-title">
                            Other
                        </li>
                        <li>
                            <a href=""><i class="material-icons">star_border</i>Pages<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="404.html">404</a>
                                </li>
                                <li>
                                    <a href="500.html">500</a>
                                </li>
                                <li>
                                    <a href="sign-in.html">Sign In</a>
                                </li>
                                <li>
                                    <a href="sign-up.html">Sign Up</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">bookmark_border</i>Documentation</a>
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">access_time</i>Change Log</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-container">
                <div class="page-header">
                    <nav class="navbar navbar-expand">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="http://alinedim.com/images/ali.png" alt="profile image">
                                      <span>Nancy Moore</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">
                                         Calendar
                                         <span class="badge badge-pill badge-info float-right">2</span>
                                      </a>
                                      <a class="dropdown-item Chakra yazi_500" href="<?=homeRoot?>/sistem-ayarlari">
                                         <i class="fa fa-cogs" aria-hidden="true"></i>
                                         <?=space.space;?>Sistem Ayarları
                                      </a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item Chakra yazi_500" href="<?=homeRoot?>/cikis">
                                         <i class="fa fa-power-off" aria-hidden="true"></i>
                                         <?=space.space;?>Çıkış
                                      </a>
                                  </div>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li>
                            <!--
                            <li class="nav-item hidden-xs">
                                <a href="#" class="nav-link">Projects</a>
                            </li>
                            <li class="nav-item hidden-xs">
                                <a href="#" class="nav-link">Tasks</a>
                            </li>
                            <li class="nav-item hidden-xs">
                                <a href="#" class="nav-link">Reports</a>
                            </li>
                            <li class="nav-item hidden-xs hidden-sm">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                            </li>
                            <li class="nav-item hidden-xs">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li>

                            <li class="nav-item hidden-xl hidden-lg hidden-md hidden-sm">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                            </li>
                            <li class="nav-item hidden-xl hidden-lg hidden-md hidden-sm">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li>
                            -->

                        </ul>
                        <div class="collapse navbar-collapse" id="navbarNav">

                            <ul class="navbar-nav">

                                <!--
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Tasks</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Reports</a>
                                </li>
                                -->

                            </ul>
                        </div>
                        <div class="navbar-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" id="nav-search" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>

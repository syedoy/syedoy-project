 <!-- Sidebar -->
 <div class="sidebar" data-background-color="dark">
     <div class="sidebar-logo">
         <!-- Logo Header -->
         <div class="logo-header" data-background-color="dark">
             <a href="" class="logo" style="color: white; ">
                 <img src="{{ url('login/images/logo.png') }}" class="navbar-brand" height="50"> SMK LABOR PKU
             </a>
             <div class="nav-toggle">
                 <button class="btn btn-toggle toggle-sidebar">
                     <i class="gg-menu-right"></i>
                 </button>
                 <button class="btn btn-toggle sidenav-toggler">
                     <i class="gg-menu-left"></i>
                 </button>
             </div>
             <button class="topbar-toggler more">
                 <i class="gg-more-vertical-alt"></i>
             </button>
         </div>
         <!-- End Logo Header -->
     </div>
     <div class="sidebar-wrapper scrollbar scrollbar-inner">
         <div class="sidebar-content">
             <ul class="nav nav-secondary">
                 <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                     <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                         <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                 <path
                                     d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                             </svg></i>
                         <p>Dashboard</p>
                         {{-- <span class="caret"></span> --}}
                     </a>
                     {{-- <div class="collapse" id="dashboard">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="../demo1/index.html">
                                     <span class="sub-item">Dashboard 1</span>
                                 </a>
                             </li>
                         </ul>
                     </div> --}}
                 </li>
                 <li class="nav-section">
                     <span class="sidebar-mini-icon">
                         <i class="fa fa-ellipsis-h"></i>
                     </span>
                     <h4 class="text-section">Data</h4>
                 </li>
                 <li class="nav-item {{ request()->routeIs('admin.guru.index') ? 'active' : '' }}">
                     <a href="{{ route('admin.guru.index') }}">
                         <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                                 <path
                                     d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                 <path
                                     d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                             </svg></i>
                         <p>Guru</p>
                         {{-- <span class="caret"></span> --}}
                     </a>
                     {{-- <div class="collapse" id="sidebarLayouts">
                       <ul class="nav nav-collapse">
                           <li>
                               <a href="sidebar-style-2.html">
                                   <span class="sub-item">Sidebar Style 2</span>
                               </a>
                           </li>
                           <li>
                               <a href="icon-menu.html">
                                   <span class="sub-item">Icon Menu</span>
                               </a>
                           </li>
                       </ul>
                   </div> --}}
                 </li>
                 <li class="nav-item {{ request()->routeIs('admin.eskul.index') ? 'active' : '' }}">
                     <a href="{{ route('admin.eskul.index') }}">
                         <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                 <path
                                     d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                 <path
                                     d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                             </svg></i>
                         <p>Ekstrakurikuler</p>
                         {{-- <span class="caret"></span> --}}
                     </a>
                     {{-- <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Basic Form</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                 </li>
                 <li class="nav-item {{ request()->routeIs('admin.siswa.index') ? 'active' : '' }}">
                     <a href="{{ route('admin.siswa.index') }}">
                         <i class="" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                 height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                 <path
                                     d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                             </svg></i>
                         <p>Siswa</p>
                         {{-- <span class="caret"></span> --}}
                     </a>
                     {{-- <div class="collapse" id="base">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="components/avatars.html">
                                     <span class="sub-item">Avatars</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="components/buttons.html">
                                     <span class="sub-item">Buttons</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="components/gridsystem.html">
                                     <span class="sub-item">Grid System</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="components/panels.html">
                                     <span class="sub-item">Panels</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="components/notifications.html">
                                     <span class="sub-item">Notifications</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="components/sweetalert.html">
                                     <span class="sub-item">Sweet Alert</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="components/font-awesome-icons.html">
                                     <span class="sub-item">Font Awesome Icons</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="components/simple-line-icons.html">
                                     <span class="sub-item">Simple Line Icons</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="components/typography.html">
                                     <span class="sub-item">Typography</span>
                                 </a>
                             </li>
                         </ul>
                     </div> --}}
                 </li>
                 </li>
                 <li class="nav-item {{ request()->routeIs('admin.proposals.index') ? 'active' : '' }}">
                     <a href="{{ route('admin.proposals.index') }}">
                         <i class="" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                 height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                 <path
                                     d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                 <path
                                     d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                 <path
                                     d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                             </svg></i>
                         <p>Proposal</p>
                         {{-- <span class="caret"></span> --}}
                     </a>
                     {{-- <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="components/avatars.html">
                                    <span class="sub-item">Avatars</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/buttons.html">
                                    <span class="sub-item">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/gridsystem.html">
                                    <span class="sub-item">Grid System</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/panels.html">
                                    <span class="sub-item">Panels</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/notifications.html">
                                    <span class="sub-item">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/sweetalert.html">
                                    <span class="sub-item">Sweet Alert</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/font-awesome-icons.html">
                                    <span class="sub-item">Font Awesome Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/simple-line-icons.html">
                                    <span class="sub-item">Simple Line Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/typography.html">
                                    <span class="sub-item">Typography</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                 </li>

                 {{-- <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#tables">
                         <i class="fas fa-table"></i>
                         <p>Tables</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="tables">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="tables/tables.html">
                                     <span class="sub-item">Basic Table</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="tables/datatables.html">
                                     <span class="sub-item">Datatables</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#maps">
                         <i class="fas fa-map-marker-alt"></i>
                         <p>Maps</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="maps">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="maps/googlemaps.html">
                                     <span class="sub-item">Google Maps</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="maps/jsvectormap.html">
                                     <span class="sub-item">Jsvectormap</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#charts">
                         <i class="far fa-chart-bar"></i>
                         <p>Charts</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="charts">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="charts/charts.html">
                                     <span class="sub-item">Chart Js</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="charts/sparkline.html">
                                     <span class="sub-item">Sparkline</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a href="widgets.html">
                         <i class="fas fa-desktop"></i>
                         <p>Widgets</p>
                         <span class="badge badge-success">4</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="../../documentation/index.html">
                         <i class="fas fa-file"></i>
                         <p>Documentation</p>
                         <span class="badge badge-secondary">1</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#submenu">
                         <i class="fas fa-bars"></i>
                         <p>Menu Levels</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="submenu">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a data-bs-toggle="collapse" href="#subnav1">
                                     <span class="sub-item">Level 1</span>
                                     <span class="caret"></span>
                                 </a>
                                 <div class="collapse" id="subnav1">
                                     <ul class="nav nav-collapse subnav">
                                         <li>
                                             <a href="#">
                                                 <span class="sub-item">Level 2</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="#">
                                                 <span class="sub-item">Level 2</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </li>
                             <li>
                                 <a data-bs-toggle="collapse" href="#subnav2">
                                     <span class="sub-item">Level 1</span>
                                     <span class="caret"></span>
                                 </a>
                                 <div class="collapse" id="subnav2">
                                     <ul class="nav nav-collapse subnav">
                                         <li>
                                             <a href="#">
                                                 <span class="sub-item">Level 2</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </li>
                             <li>
                                 <a href="#">
                                     <span class="sub-item">Level 1</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li> --}}
             </ul>
         </div>
     </div>
 </div>
 <!-- End Sidebar -->

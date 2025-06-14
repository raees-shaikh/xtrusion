  <!-- BEGIN LOADER -->
  <div id="load_screen">
      <div class="loader">
          <div class="loader-content">
              <div class="spinner-grow align-self-center"></div>
          </div>
      </div>
  </div>


  <div class="header-container fixed-top">
      <header class="header navbar navbar-expand-sm">

          <ul class="navbar-nav theme-brand flex-row  text-center">

              <li class="nav-item theme-text w-auto d-block">
                  <a href="/" class="nav-link">
                      <img src="{{ asset('frontend/images/logo.jpg') }}" width="15%" height="10%" class="navbar-logo img-fluid"
                          alt="logo" >
                  </a>
              </li>

              <li class="nav-item toggle-sidebar">
                  <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M4 4.15381H21" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                          <path d="M4 12H21" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                          <path d="M4 19.8462H21" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                  </a>
              </li>
          </ul>

          <ul class="navbar-item flex-row search-ul">

          </ul>
          <ul class="navbar-item flex-row navbar-dropdown">

              <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                  <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-settings">
                          <circle cx="12" cy="12" r="3"></circle>
                          <path
                              d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                          </path>
                      </svg>
                  </a>
                  <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                      <div class="user-profile-section">
                          <div class="media mx-auto">
                              {{-- <img src="{{asset('backend/assets/img/90x90.svg')}}" class="img-fluid mr-2" alt="avatar"> --}}
                              <div class="media-body">
                                  <h5>Admin</h5>
                                  {{-- <h5>{{ ucfirst(auth()->user()->name) }}</h5>
                                  <h5>{{ ucfirst(auth()->user()->role) }}</h5> --}}
                                  <!-- <p>Project Leader</p> -->
                              </div>
                          </div>
                      </div>
                      <div class="dropdown-item">
                          <a href="{{ route('cms.changePassword.index') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-user">
                                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                  <circle cx="12" cy="7" r="4"></circle>
                              </svg> <span>Change Password</span>
                          </a>
                      </div>

                      <div class="dropdown-item">
                          <a href="{{ route('cms.logout') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-log-out">
                                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                  <polyline points="16 17 21 12 16 7"></polyline>
                                  <line x1="21" y1="12" x2="9" y2="12"></line>
                              </svg> <span>Log Out</span>
                          </a>
                      </div>
                  </div>
              </li>
          </ul>
      </header>
  </div>
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">
      <div class="overlay"></div>
      <div class="search-overlay"></div>
      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">
          <nav id="sidebar">
              <ul class="list-unstyled menu-categories" id="accordionExample">
                  {{-- <li class="menu">
                      <a href="{{ route('cms.calendar.index') }}"
                          aria-expanded="{{ route('cms.calendar.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                  <rect x="3" y="4" width="18" height="18" rx="2"
                                      ry="2"></rect>
                                  <line x1="16" y1="2" x2="16" y2="6"></line>
                                  <line x1="8" y1="2" x2="8" y2="6"></line>
                                  <line x1="3" y1="10" x2="21" y2="10"></line>
                              </svg>
                              <span>Calendar</span>
                          </div>
                      </a>
                  </li> --}}
                  {{-- @admin() --}}
                  {{-- <li class="menu">
                          <a href="{{ route('cms.statistics.index') }}"
                              aria-expanded="{{ route('cms.statistics.index') == request()->url() ? 'true' : 'false' }}"
                              class="dropdown-toggle">
                              <div class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                  </svg>
                                  <span>Dashboard</span>
                              </div>
                          </a>
                        </li>
                        @endadmin
                  <li class="menu">
                      <a href="{{ route('cms.patients.index') }}"
                      aria-expanded="{{ route('cms.patients.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                  <circle cx="9" cy="7" r="4"></circle>
                                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>Patients</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ route('cms.appointments.index') }}"
                        aria-expanded="{{ route('cms.appointments.index') == request()->url() ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                  </path>
                                  <rect x="8" y="2" width="8" height="4" rx="1"
                                      ry="1"></rect>
                              </svg>
                              <span>Appointments</span>
                          </div>
                      </a>
                  </li>
                    <li class="menu">
                        <a href="{{ route('cms.tempappointment.index') }}"
                            aria-expanded="{{ route('cms.tempappointment.index') == request()->url() ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class='bx bx-folder-open'></i>
                                <span>Temporary Appointment</span>
                            </div>
                        </a>
                    </li>
                  <li class="menu">
                      <a href="{{ route('cms.followups.index') }}"
                          aria-expanded="{{ route('cms.followups.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"
                                  class="feather feather-fast-forward">
                                  <polygon points="13 19 22 12 13 5 13 19"></polygon>
                                  <polygon points="2 19 11 12 2 5 2 19"></polygon>
                              </svg>

                              <span>Follow Ups</span>
                          </div>
                      </a>
                    </li>
                    <li class="menu">
                      <a href="{{ route('cms.surgery.index') }}"
                          aria-expanded="{{ route('cms.surgery.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              <i class='bx bx-cut'></i>
                              <span>Surgeries</span>
                          </div>
                      </a>
                      <li class="menu">
                          <a href="{{ route('cms.dischargecard.index') }}"
                              aria-expanded="{{ route('cms.dischargecard.index') == request()->url() ? 'true' : 'false' }}"
                              class="dropdown-toggle">
                              <div class="">
                                  <i class='bx bx-file'></i>
                                  <span>Discharge Cards</span>
                                </div>
                            </a>
                        </li>
                    </li>
                    <li class="menu">
                        <a href="{{ route('cms.surgerybill.index') }}"
                            aria-expanded="{{ route('cms.surgerybill.index') == request()->url() ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">

                                <i class='bx bx-rupee'></i> <span>Surgery Bills</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{ route('cms.expenses.index') }}"
                        aria-expanded="{{ route('cms.expenses.index') == request()->url() ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            <i class='bx bxs-store'></i>
                            <span>Inventory</span>
                        </div>
                    </a>
                </li> --}}


                  {{-- @admin()
                      <li class="menu">
                          <a href="{{ route('cms.medicine.index') }}"
                              aria-expanded="{{ route('cms.medicine.index') == request()->url() ? 'true' : 'false' }}"
                              class="dropdown-toggle">
                              <div class="">
                                  <i class='bx bx-capsule'></i>
                                  <span>Medicines</span>
                              </div>
                          </a>
                      </li>
                      <li class="menu">
                          <a href="{{ route('cms.expensesmaster.index') }}"
                              aria-expanded="{{ route('cms.expensesmaster.index') == request()->url() ? 'true' : 'false' }}"
                              class="dropdown-toggle">
                              <div class="">
                                  <i class='bx bxs-bar-chart-alt-2'></i>
                                  <span>Expenses Master</span>
                              </div>
                          </a>
                      </li>
                      <li class="menu">
                          <a href="{{ route('cms.subexpensesmaster.index') }}"
                              aria-expanded="{{ route('cms.subexpensesmaster.index') == request()->url() ? 'true' : 'false' }}"
                              class="dropdown-toggle">
                              <div class="">
                                  <i class='bx bx-bar-chart'></i>

                                  <span>Sub Expenses Master</span>
                              </div>
                          </a>
                      </li>
                  @endadmin --}}

                  {{-- <li class="menu">
                      <a href="{{ route('cms.export.index') }}"
                          aria-expanded="{{ route('cms.export.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                                  <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                  <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                  <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                              </svg>
                              <span>Export Data</span>
                          </div>
                      </a>
                  </li> --}}

                  {{-- @admin()
                      <li class="menu">
                          <a href="{{ route('cms.user.index') }}"
                              aria-expanded="{{ route('cms.user.index') == request()->url() ? 'true' : 'false' }}"
                              class="dropdown-toggle">
                              <div class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                                      <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                      <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                      <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                  </svg>
                                  <span>Users</span>
                                </div>
                            </a>
                      </li>
                  @endadmin --}}
                  <li class="menu">
                      <a href="{{ route('cms.statistics.index') }}"
                          aria-expanded="{{ route('cms.statistics.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                              <span>Dashboard</span>
                          </div>
                      </a>
                  </li>
                  <li class="menu">
                    <a href="{{ route('cms.categories.index') }}"
                        aria-expanded="{{ route('cms.categories.index') == request()->url() ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24">
                                <path d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3" />
                            </svg>
                            <span>Categories</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="{{ route('cms.offer.index') }}"
                        aria-expanded="{{ route('cms.offer.index') == request()->url() ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                            <span>Offers</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="{{ route('cms.exhibition.index') }}"
                        aria-expanded="{{ route('cms.exhibition.index') == request()->url() ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
                            <span>Exhibitions</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="{{ route('cms.data.index') }}"
                        aria-expanded="{{ route('cms.data.index') == request()->url() ? 'true' : 'false' }}"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 288c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128z" />
                            </svg>
                            <span>Data</span>
                        </div>
                    </a>
                </li>
                  {{-- <li class="menu">
                      <a href="{{ route('backend.user.index') }}"
                          aria-expanded="{{ route('backend.user.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                  viewBox="0 0 24 24">
                                  <path
                                      d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                              </svg>
                              <span>Users</span>
                          </div>
                      </a>
                  </li> --}}
                  <li class="menu">
                      <a href="" aria-expanded="true">

                      </a>
                  </li>
              </ul>

          </nav>

      </div>
      <!--  END SIDEBAR  -->

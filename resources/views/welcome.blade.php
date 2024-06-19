@include('partiels.header')

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12 position-relative z-index-2">
          <div class="card mb-4 ">
            <div class="d-flex">
              <div class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4">
                <i class="material-icons opacity-10" aria-hidden="true">language</i>
              </div>
              <h6 class="mt-3 mb-2 ms-3 ">Sales by Country</h6>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6 col-md-7">
                  <div class="table-responsive">
                    <table class="table align-items-center ">
                      <tbody>
                        <tr>
                          <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                              <div>
                                <img src="../../assets/img/icons/flags/US.png" alt="Country flag">
                              </div>
                              <div class="ms-4">
                                <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">United States</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">2500</h6>
                            </div>
                          </td>
                          <td>
                            <div class="text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">$230,900</h6>
                            </div>
                          </td>
                          <td class="align-middle text-sm">
                            <div class="col text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">29.9%</h6>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                              <div>
                                <img src="../../assets/img/icons/flags/DE.png" alt="Country flag">
                              </div>
                              <div class="ms-4">
                                <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">Germany</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">3.900</h6>
                            </div>
                          </td>
                          <td>
                            <div class="text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">$440,000</h6>
                            </div>
                          </td>
                          <td class="align-middle text-sm">
                            <div class="col text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">40.22%</h6>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                              <div>
                                <img src="../../assets/img/icons/flags/GB.png" alt="Country flag">
                              </div>
                              <div class="ms-4">
                                <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">Great Britain</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">1.400</h6>
                            </div>
                          </td>
                          <td>
                            <div class="text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">$190,700</h6>
                            </div>
                          </td>
                          <td class="align-middle text-sm">
                            <div class="col text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">23.44%</h6>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                              <div>
                                <img src="../../assets/img/icons/flags/BR.png" alt="Country flag">
                              </div>
                              <div class="ms-4">
                                <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">Brasil</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">562</h6>
                            </div>
                          </td>
                          <td>
                            <div class="text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">$143,960</h6>
                            </div>
                          </td>
                          <td class="align-middle text-sm">
                            <div class="col text-center">
                              <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                              <h6 class="text-sm font-weight-normal mb-0 ">32.14%</h6>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-lg-6 col-md-5">
                  <div id="map" class="mt-0 mt-lg-n4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
              <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <div class="chart">
                      <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h6 class="mb-0 ">Website Views</h6>
                  <p class="text-sm ">Last Campaign Performance</p>
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
              <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                    <div class="chart">
                      <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h6 class="mb-0 "> Daily Sales </h6>
                  <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm"> updated 4 min ago </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mb-3">
              <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                      <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h6 class="mb-0 ">Completed Tasks</h6>
                  <p class="text-sm ">Last Campaign Performance</p>
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm">just updated</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Bookings</p>
                    <h4 class="mb-0">281</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">leaderboard</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                    <h4 class="mb-0">2,300</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">store</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Revenue</p>
                    <h4 class="mb-0 ">34k</h4>
                  </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card ">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Followers</p>
                    <h4 class="mb-0 ">+91</h4>
                  </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 ">Just updated</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-4 col-md-6">
              <div class="card" data-animation="true">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <img src="../../assets/img/products/product-1-min.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                  </a>
                  <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/products/product-1-min.jpg&quot;);"></div>
                </div>
                <div class="card-body text-center">
                  <div class="d-flex mt-n6 mx-auto">
                    <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Refresh">
                      <i class="material-icons text-lg">refresh</i>
                    </a>
                    <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                      <i class="material-icons text-lg">edit</i>
                    </button>
                  </div>
                  <h5 class="font-weight-normal mt-3">
                    <a href="javascript:;">Cozy 5 Stars Apartment</a>
                  </h5>
                  <p class="mb-0">
                    The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                  </p>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer d-flex">
                  <p class="font-weight-normal my-auto">$899/night</p>
                  <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                  <p class="text-sm my-auto"> Barcelona, Spain</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
              <div class="card" data-animation="true">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <img src="../../assets/img/products/product-2-min.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                  </a>
                  <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/products/product-2-min.jpg&quot;);"></div>
                </div>
                <div class="card-body text-center">
                  <div class="d-flex mt-n6 mx-auto">
                    <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Refresh">
                      <i class="material-icons text-lg">refresh</i>
                    </a>
                    <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                      <i class="material-icons text-lg">edit</i>
                    </button>
                  </div>
                  <h5 class="font-weight-normal mt-3">
                    <a href="javascript:;">Office Studio</a>
                  </h5>
                  <p class="mb-0">
                    The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                  </p>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer d-flex">
                  <p class="font-weight-normal my-auto">$1.119/night</p>
                  <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                  <p class="text-sm my-auto"> London, UK</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-5 mt-lg-0">
              <div class="card" data-animation="true">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <img src="../../assets/img/products/product-3-min.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                  </a>
                  <div class="colored-shadow" style="background-image: url(&quot;../../assets/img/products/product-3-min.jpg&quot;);"></div>
                </div>
                <div class="card-body text-center">
                  <div class="d-flex mt-n6 mx-auto">
                    <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Refresh">
                      <i class="material-icons text-lg">refresh</i>
                    </a>
                    <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                      <i class="material-icons text-lg">edit</i>
                    </button>
                  </div>
                  <h5 class="font-weight-normal mt-3">
                    <a href="javascript:;">Beautiful Castle</a>
                  </h5>
                  <p class="mb-0">
                    The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                  </p>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer d-flex">
                  <p class="font-weight-normal my-auto">$459/night</p>
                  <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">place</i>
                  <p class="text-sm my-auto"> Milan, Italy</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Sidenav Mini</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Buy now</a>
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard">Free demo</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

@include('partiels.footer')



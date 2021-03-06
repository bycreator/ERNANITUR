<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= SYS[0] ?>public/dashboard/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= SYS[0] ?>public/dashboard/assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<div class="sidebar-offcanvas-desktop">

<?php include_once 'vendor/include/navbar.inc.php'; ?>

</div>
<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
<div class="page">
    <header class="indigo lighten-2 relative shadow pb-5">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar">
            <div class="relative">
                <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle paper-nav-white">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu p-t-10">
    <ul class="nav navbar-nav">
        <!-- Messages-->
        <li class="dropdown custom-dropdown messages-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <i class="icon-message "></i>
                <span class="badge badge-success badge-mini rounded-circle">4</span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu pl-2 pr-2">
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="<?= SYS[0] ?>public/dashboard/assets/img/dummy/u4.png" alt="">
                                    <span class="avatar-badge busy"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="<?= SYS[0] ?>public/dashboard/assets/img/dummy/u1.png" alt="">
                                    <span class="avatar-badge online"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="<?= SYS[0] ?>public/dashboard/assets/img/dummy/u2.png" alt="">
                                    <span class="avatar-badge idle"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="<?= SYS[0] ?>public/dashboard/assets/img/dummy/u3.png" alt="">
                                    <span class="avatar-badge busy"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                    </ul>
                </li>
                <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
            </ul>
        </li>
        <!-- Notifications -->
        <li class="dropdown custom-dropdown notifications-menu">
            <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-notifications "></i>
                <span class="badge badge-danger badge-mini rounded-circle">4</span>
            </a>
            <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer p-2 text-center"><a href="#">View all</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
               aria-controls="navbarToggleExternalContent"
               aria-expanded="false" aria-label="Toggle navigation">
                <i class=" icon-search3 "></i>
            </a>
        </li>
        <!-- Right Sidebar Toggle Button -->
        <li>
            <a class="nav-link ml-2" data-toggle="control-sidebar">
                <i class="icon-tasks "></i>
            </a>
        </li>
        <!-- User Account-->
        <li class="dropdown custom-dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <img src="<?= SYS[0] ?>public/dashboard/assets/img/dummy/u2.png" class="user-image" alt="User Image">
                <i class="icon-more_vert "></i>
            </a>
            <div class="dropdown-menu p-4">
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Apps</div>
                        </a>
                    </div>
                    <div class="col"><a href="#">
                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Profile</div>
                    </a></div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                            <div class="pt-1">Favourites</div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                            <div class="pt-1">Saved</div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="#">
                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Apps</div>
                        </a>
                    </div>
                    <div class="col"><a href="#">
                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Profile</div>
                    </a></div>
                    <div class="col">
                        <a href="#">
                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Settings</div>
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
        </div>
        <div class="container text-white pb-5">
            <div class="mb-4">
                <h4>
                    <i class="icon-box"></i>
                    Dashboard
                </h4>
            </div>
        </div>
    </header>
    <div class="container relative animatedParent animateOnce pull-up-lg">
      <div class="animated fadeInUpShort my-3 mb-5">
          <div class="lightSlider" data-slide-margin="3" data-item="3" data-item-md="2" data-item-sm="1"
               data-pause="9000" data-pager="false" data-auto="true" data-controls="false"
               data-loop="true">
              <div class="card b-0 r-0">
                  <div class="card-header white no-b">
                      <h6>BitCoin <span class="badge badge-success r-30 float-right"><i
                              class="icon-chevron-up mr-2"></i>+10%</span></h6>
                  </div>
                  <div class="card-body">
                      <div class="d-flex justify-content-between">
                          <div class="">
                              <img height="48" width="48" class="text-green"
                                   src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/btc.svg"/>
                              <div class="s-24 font-weight-lighter mt-3">$8075</div>
                          </div>
                          <div>
                              <div class="sparkline"
                                   data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                   data-options='{
                                      "type": "discrete",
                                      "width": "150",
                                      "height": "90",
                                      "lineColor": "#26B99A",
                                      "fillColor": "rgba(223, 223, 223, 0.57)",
                                       "lineWidth": 4,
                                      "spotColor": "#03a9f4",
                                      "minSpotColor": "#03a9f4"
                                    }'>
                              </div>
                              <div class="btn-group float-right mt-4" data-toggle="buttons">
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY</button>
                                  <button type="button" class="btn btn-outline-primary btn-xs">SELL</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card b-0 r-0">
                  <div class="card-header white no-b">
                      <h6>Ethereum <span class="badge badge-warning r-30 float-right"><i
                              class="icon-chevron-right mr-2"></i>+0%</span></h6>
                  </div>
                  <div class="card-body">
                      <div class="d-flex justify-content-between">
                          <div class="">
                              <img height="48" width="48" class="text-green"
                                   src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/eth.svg"/>
                              <div class="s-24 font-weight-lighter mt-3">$756</div>
                          </div>
                          <div>
                              <div class="sparkline"
                                   data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                   data-options='{
                                      "type": "discrete",
                                      "width": "150",
                                      "height": "90",
                                      "lineColor": "#26B99A",
                                      "fillColor": "rgba(223, 223, 223, 0.57)",
                                       "lineWidth": 4,
                                      "spotColor": "#03a9f4",
                                      "minSpotColor": "#03a9f4"
                                    }'>
                              </div>
                              <div class="btn-group float-right mt-4" data-toggle="buttons">
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY</button>
                                  <button type="button" class="btn btn-outline-primary btn-xs">SELL</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card b-0 r-0">
                  <div class="card-header white no-b">
                      <h6>Lite Coin <span class="badge badge-danger r-30 float-right"><i
                              class="icon-chevron-down mr-2"></i>+10%</span></h6>
                  </div>
                  <div class="card-body">
                      <div class="d-flex justify-content-between">
                          <div class="">
                              <img height="48" width="48" class="text-green"
                                   src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/ltc.svg"/>
                              <div class="s-24 font-weight-lighter mt-3">$8075</div>
                          </div>
                          <div>
                              <div class="sparkline"
                                   data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                   data-options='{
                                      "type": "discrete",
                                      "width": "150",
                                      "height": "90",
                                      "lineColor": "#26B99A",
                                      "fillColor": "rgba(223, 223, 223, 0.57)",
                                       "lineWidth": 4,
                                      "spotColor": "#03a9f4",
                                      "minSpotColor": "#03a9f4"
                                    }'>
                              </div>
                              <div class="btn-group float-right mt-4" data-toggle="buttons">
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY</button>
                                  <button type="button" class="btn btn-outline-primary btn-xs">SELL</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row no-gutters my-1 white">
              <div class="col-md-8 b-r">
                  <div class=" card no-b ">
                      <div class="card-body">
                          <div class="row text-center mb-3">
                              <div class="col-md-4">
                                  <h5>Sales <span class="red-text">+203.48</span></h5>
                                  <span class="s-24">$2652.07</span>
                              </div>
                              <div class="col-md-4 b-r">
                                  <div>
                                      <h5>Net Sales</h5>
                                      <span class="s-24">$2351.08 </span>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div>
                                      <h5>Costs <span class="amber-text">+87.4</span></h5>
                                      <span class="s-24">$900.09</span>
                                  </div>
                              </div>
                          </div>
                          <div style="height: 450px">
                              <canvas
                                      data-chart="line"
                                      data-dataset="[[15, 26, 36, 32, 40, 35, 37, 40, 53, 60, 80],[48, 54, 53, 58, 56, 62, 61, 59, 76, 78, 90]]"
                                      data-labels="['1', '4', '7', '10', '13', '16', '19', '22', '25', '28', '31']"
                                      data-dataset-options="datasets: [{
                    label: 'Revenue',
                    fill: !0,
                    lineTension: 0,
                    backgroundColor: 'rgba(0,172,255, 0.1)',
                    borderWidth: 2,
                    borderColor: '#00AAFF',
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0,
                    borderJoinStyle: 'miter',
                    pointRadius: 4,
                    pointBorderColor: '#00AAFF',
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#00AAFF',
                    pointHoverBorderWidth: 2,
                    spanGaps: !1
                }, {
                    label: 'Profit',
                    fill: !0,
                    lineTension: 0,
                    backgroundColor: 'rgba(163,136,227, 0.1)',
                    borderWidth: 2,
                    borderColor: '#886CE6',
                    pointRadius: 4,
                    pointBorderColor: '#886CE6',
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#886CE6',
                    pointHoverBorderWidth: 2,
                    spanGaps: !1
                }]"
                                      data-options="{
                legend: {
                    display: 0,
                    labels: {
                        fontColor: '#7F8FA4',
                        fontFamily: 'Source Sans Pro, sans-serif',
                        boxRadius: 4,
                        usePointStyle: !0
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        display: !0,
                        ticks: {
                            fontSize: '11',
                            fontColor: '#969da5'
                        },
                        gridLines: {
                            color: 'rgba(0,0,0,0.0)',
                            zeroLineColor: 'rgba(0,0,0,0.0)'
                        }
                    }],
                    yAxes: [{
                        display: !0,
                        gridLines: {
                            color: 'rgba(223,226,229,0.45)',
                            zeroLineColor: 'rgba(0,0,0,0.0)'
                        },
                        ticks: {
                            beginAtZero: !0,
                            max: 100,
                            stepSize: 25,
                            fontSize: '11',
                            fontColor: '#969da5'
                        }
                    }]
                }
            }">
                              </canvas>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="p-3s">
                      <div class="counter-box p-3">
                          <div class="my-3">
                              <div class="float-right">
                                  <img height="48" width="48" class="text-green"
                                       src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/bay.svg"/>
                              </div>
                              <h5 class="counter-title">BitBay</h5>
                              <div class="sc-counter pt-2 font-weight-bold">3000</div>
                          </div>
                          <div class="progress progress-xs r-0">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;"
                                   aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                          </div>
                      </div>
                      <div class="counter-box p-3">
                          <div class="my-3">
                              <div class="float-right">
                                  <img height="48" width="48" class="text-green"
                                       src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/cnx.svg"/>
                              </div>
                              <h5 class="counter-title ">Cryptonex</h5>
                              <div class="sc-counter pt-2 font-weight-bold">1000</div>
                          </div>
                          <div class="progress progress-xs r-0">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                   aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                          </div>
                      </div>
                      <div class="counter-box p-3">
                          <div class="my-3">
                              <div class="float-right">
                                  <img height="48" width="48" class="text-green"
                                       src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/dta.svg"/>
                              </div>
                              <h5 class="counter-title">DATA</h5>
                              <div class="sc-counter pt-2 font-weight-bold">600</div>
                          </div>
                          <div class="progress progress-xs r-0">
                              <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                   aria-valuemin="0" aria-valuemax="128"></div>
                          </div>
                      </div>
                      <div class="counter-box p-3">
                          <div class="my-3">
                              <div class="float-right">
                                  <img height="48" width="48" class="text-green"
                                       src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/rub.svg"/>
                              </div>
                              <h5>RUB</h5>
                              <div class="sc-counter pt-2 font-weight-bold">525</div>
                          </div>
                          <div class="progress progress-xs r-0">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;"
                                   aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive white">
                      <table class="table table-striped table-hover r-0">
                          <thead>
                          <tr class="no-b">
                              <th>COIN NAME</th>
                              <th>PRICE (USD)</th>
                              <th>MARKET CAP</th>
                              <th>CHANGE(24H)</th>
                              <th>STATUS</th>
                              <th>PURCHASE</th>
                              <th></th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>
                                  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                      <img height="48" width="48" class="text-green"
                                           src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/cenz.svg"/>
                                  </div>
                                  <div>
                                      <div>
                                          <strong>Centurs</strong>
                                      </div>
                                      <small>CENZ</small>
                                  </div>
                              </td>
                              <td>$560</td>
                              <td>$1605</td>
                              <td><i class="icon-angle-double-down text-red mr-2"></i>1,4,348</td>
                              <td><span class="sparkline"
                                        data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                        data-options='{
                                          "type": "line",
                                          "width": "100",
                                          "height": "40",
                                          "lineColor": "#7dc855",
                                          "fillColor": "rgba(255, 255, 255, 0.1)",
                                           "lineWidth": 2,
                                          "spotColor": "#03a9f4",
                                          "minSpotColor": "#03a9f4"
                                    }'></span></td>
                              <td>
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY NOW</button>
                              </td>
                              <td>
                                  <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                      <img height="48" width="48" class="text-green"
                                           src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/eth.svg"/>
                                  </div>
                                  <div>
                                      <div>
                                          <strong>Ethereum</strong>
                                      </div>
                                      <small>ETH</small>
                                  </div>
                              </td>
                              <td>$560</td>
                              <td>$1605</td>
                              <td><i class="icon-angle-double-down text-red mr-2"></i>1,4,348</td>
                              <td><span class="sparkline"
                                        data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                        data-options='{
                                          "type": "line",
                                          "width": "100",
                                          "height": "40",
                                          "lineColor": "#7dc855",
                                          "fillColor": "rgba(255, 255, 255, 0.1)",
                                           "lineWidth": 2,
                                          "spotColor": "#03a9f4",
                                          "minSpotColor": "#03a9f4"
                                    }'></span></td>
                              <td>
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY NOW</button>
                              </td>
                              <td>
                                  <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                      <img height="48" width="48" class="text-green"
                                           src="assets/fonts/icons/svg/sbd.svg"/>
                                  </div>
                                  <div>
                                      <div>
                                          <strong>Ethereum</strong>
                                      </div>
                                      <small>SBD</small>
                                  </div>
                              </td>
                              <td>$560</td>
                              <td>$1605</td>
                              <td><i class="icon-angle-double-down text-red mr-2"></i>1,4,348</td>
                              <td><span class="sparkline"
                                        data-values="[2, 4, 3, 34, 5, 4, 25, 4, 3, 4, 5, 22, 17, 5, 1, 3, 5, 6]"
                                        data-options='{
                                          "type": "line",
                                          "width": "100",
                                          "height": "40",
                                          "lineColor": "#fcce54",
                                          "fillColor": "rgba(255, 255, 255, 0.1)",
                                           "lineWidth": 2,
                                          "spotColor": "#03a9f4",
                                          "minSpotColor": "#03a9f4"
                                    }'></span></td>
                              <td>
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY NOW</button>
                              </td>
                              <td>
                                  <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="avatar avatar-md mr-3 mt-1 float-left">
                                      <img height="48" width="48" class="text-green"
                                           src="<?= SYS[0] ?>public/dashboard/assets/fonts/icons/svg/ada.svg"/>
                                  </div>
                                  <div>
                                      <div>
                                          <strong>Ethereum</strong>
                                      </div>
                                      <small>ETH</small>
                                  </div>
                              </td>
                              <td>$560</td>
                              <td>$1605</td>
                              <td><i class="icon-angle-double-down text-red mr-2"></i>1,4,348</td>
                              <td><span class="sparkline"
                                        data-values="[2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6]"
                                        data-options='{
                                          "type": "line",
                                          "width": "100",
                                          "height": "40",
                                          "lineColor": "#ed5564",
                                          "fillColor": "rgba(255, 255, 255, 0.1)",
                                           "lineWidth": 2,
                                          "spotColor": "#03a9f4",
                                          "minSpotColor": "#03a9f4"
                                    }'></span></td>
                              <td>
                                  <button type="button" class="btn btn-outline-primary btn-xs">BUY NOW</button>
                              </td>
                              <td>
                                  <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                              </td>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    </div>
</div>
</div>
<!--/#app -->
<script src="<?= SYS[0] ?>public/dashboard/assets/js/app.js"></script>
</body>
</html>
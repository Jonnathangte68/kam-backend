<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                </a>
            </li>

              <li class="nav-item">
                    <a class="nav-link" href="{{ route('messages') }}">
                      <i class="ni ni-chat-round text-default"></i>
                      <span class="nav-link-text">Chat Messages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_submissions') }}">
                      <i class="ni ni-laptop text-default"></i>
                      <span class="nav-link-text">Contact Forms</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('service_request') }}">
                      <i class="ni ni-app text-default"></i>
                      <span class="nav-link-text">Service Request</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories') }}">
                      <i class="ni ni-collection text-default"></i>
                      <span class="nav-link-text">Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('subcategories') }}">
                      <i class="ni ni-tag text-default"></i>
                      <span class="nav-link-text">Sub Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">
                      <i class="ni ni-bullet-list-67 text-default"></i>
                      <span class="nav-link-text">Services</span>
                    </a>
                </li>
            <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-danger" style="position: absolute; bottom: 0; display: none !important;">
                <a class="nav-link text-white" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                    <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
                </a>
            </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0" style="display: none !important;">Upgrade to PRO</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row mt--5">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="card card-upgrade">
           
            <div class="card-body">
                

                <!-- MANAGE CATEGORIES -->

                <div id="category-form-view">
                    <p id="form-title-model">Add / Edit Category</p>
                    <br/>
                    <input id="title-category" class="form-control" placeholder="Title" type="text">
                    <br/>
                    <input id="image-category" class="form-control" placeholder="Image" type="file">
                    <br/>
                    <input id="order-category" class="form-control" placeholder="Order" type="text">
                    <br/><br/>
                    <input id="file-url-category" class="form-control" type="text" hidden>
                    <button id="save_changes_category" type="button" class="note-color-reset btn btn-light btn-default" style="float: right; clear: both;">Save Changes</button>
                </div>

                <!-- MANAGE SUBCATEGORIES -->

                <div id="subcategory-form-view">
                    <p id="form-title-model">Add / Edit Subcategory </p>
                    <br/>
                    <input id="title-subcategory" class="form-control" placeholder="Title" type="text">
                    <br/>
                    <input id="image-subcategory" class="form-control" placeholder="Image" type="file">
                    <br/>
                    <input id="order-subcategory" class="form-control" placeholder="Order" type="text">
                    <br/><br/>
                    <select id="category-subcategory" class="form-control" ></select>
                    <br/><br/>
                    <input id="file-url-subcategory" class="form-control" type="text" hidden>
                    <button id="save_changes_subcategory" type="button" class="note-color-reset btn btn-light btn-default" style="float: right; clear: both;">Save Changes</button>
                </div>

                <!-- MANAGE SERVICES -->

                <div id="service-form-view">
                    <p id="form-title-model">Add / Edit Service</p>
                    <br/>
                    <input id="title-service" class="form-control" placeholder="Title" type="text">
                    <br/>
                    <input id="description-service" class="form-control" placeholder="Description" type="text">
                    <br/>
                    <input id="image-service" class="form-control" placeholder="Image" type="file">
                    <br/>
                    <input id="price-service" class="form-control" placeholder="Price" type="text">
                    <br/>
                    <input id="order-service" class="form-control" placeholder="Order" type="text">
                    <br/><br/>
                    <select id="subcategory-service" class="form-control" ></select>
                    <br/><br/>
                    <input id="file-url-service" class="form-control" type="text" hidden>
                    <button id="save_changes_service" type="button" class="note-color-reset btn btn-light btn-default" style="float: right; clear: both;">Save Changes</button>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <!-- Custom Format -->
  <script src="../assets/js/table-controller.js?v=1.0.3"></script>

  <script>

    var numberOfAjaxCAllPending = 0;

    // Add a request interceptor
    axios.interceptors.request.use(function (config) {
        numberOfAjaxCAllPending++;
        // show loader
        return config;
    }, function (error) {
        return Promise.reject(error);
    });

    // Add a response interceptor
    axios.interceptors.response.use(function (response) {
        numberOfAjaxCAllPending--;
        console.log("------------  Ajax pending", numberOfAjaxCAllPending);

        if (numberOfAjaxCAllPending !== 0) {


            $("#save_changes_category").prop('disabled', true);


        } else {
            $("#save_changes_category").prop('disabled', false);
        }
        return response;
    }, function (error) {
        numberOfAjaxCAllPending--;
        if (numberOfAjaxCAllPending !== 0) {


            $("#save_changes_category").prop('disabled', true);


        } else {
            $("#save_changes_category").prop('disabled', false);
        }
        return Promise.reject(error);
    });

    function get(name) {
        if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
            return decodeURIComponent(name[1]);
    }

    $(document).ready(() => {
        var modelType = get("model_type");

        console.log("MODEL TYPE READY DEBUG", modelType);









        // CATEGORY MODEL TYPE



        if (modelType === "category") {

            console.log("it should not pass here.");

            $("#form-title-model").text("Manage Category");
            
            // Make visible only this url related form
            
            $("#category-form-view").show();

            // Disable others

            $("#subcategory-form-view").hide();
            $("#service-form-view").hide();



            var categoryID = get("id");

            if (categoryID) {
                axios.get('http://143.244.206.222:8081/api/categories')
                .then(function (response) {
                    // handle success

                    
                    const categoryData = response?.data?.filter(cg => cg.id == categoryID)[0];

                    $("#title-category").val(categoryData?.title);
                    $("#order-category").val(categoryData?.order);

                });
            }

            $(document).on('change', '#image-category', function() {
                $("#save_changes_category").prop('disabled', true);

                // Try to prevent submission for a few secs while uploading image
                setTimeout(function() {
                    $("#save_changes_category").prop('disabled', false);
                }, 4000);

                var file = $(this)[0]; // note the [0] to return the DOMElement from the jQuery object
                var test = 'Event Triggered';

                console.log(test);
                console.log(file.files);
                console.log(file.files[0]);

                $.getScript( "https://cdn.jsdelivr.net/npm/publitio_js_sdk@1.1.5/build/publitio-api.min.js" )
                .done(function( script, textStatus ) {

                    

                    var publitio = new PublitioAPI("3R8PZeVcDM6JZvDZyXB5", "VrazxaSNzH3GGwdr59PszgjfhRRrjP4W");
                    console.log("publitio", publitio);
                    publitio.uploadFile(file.files[0], 'file', {
                        title: 'file name from admin kam',
                        description: 'file description from admin kam',
                        tags: 'category',
                        privacy: 1,
                        option_download: 1,
                        file: file
                        }).then(data => {
                            console.log(data);
                            $("#file-url-category").val(data?.url_short);
                        })
                        .catch(error => { console.log(error) });
                    
                })
                .fail(function( jqxhr, settings, exception ) {
                    console.log("error publitio require");
                });

            });

            $("#save_changes_category").click(function() {

                console.log("save changes category press.");

                var categoryElement = {
                    title: $("#title-category").val(),
                    image: $("#file-url-category").val(),
                    order: $("#order-category").val()
                };

                console.log("category to add");
                console.log(categoryElement);

                if (categoryID) {
                    // category update now save

                    categoryElement['id'] = categoryID;

                    console.log("category element to upload", categoryElement);

                    axios.put('http://143.244.206.222:8081/api/category', categoryElement);

                    window.location.replace("/categories");

                    return;
                }

                try {
                    axios.post('http://143.244.206.222:8081/api/category', categoryElement)
                    .then(function (response) {

                        $("#title-category").val("");
                        $("#file-url-category").val("");
                        $("#order-category").val("");
                        $("#image-category").val("");

                        window.location.replace("/categories");
                    });
                } catch(err) {
                    $("#title-category").val("");
                        $("#file-url-category").val("");
                        $("#order-category").val("");
                        $("#image-category").val("");

                        window.location.replace("/categories");
                }
                
            });
        }








        // SUBCATEGORY MODEL TYPE


        if (modelType === "subcategory") {

            console.log("it should pass here.");

            $("#form-title-model").text("Manage SubCategory");

            $("#subcategory-form-view").show();
            
            $("#category-form-view").hide();
            $("#service-form-view").hide();

            // Load select categories element.

            axios.get('http://143.244.206.222:8081/api/categories')
            .then(function (response) {
                // handle success
                console.log("categories response");
                console.log(response.data);

                $(".thead-light").first("tr").html(`<tr><th scope="col" class="sort" data-sort="name">ID</th><th scope="col" class="sort" data-sort="name">Title</th><th scope="col" class="sort" data-sort="name">Image</th><th scope="col" class="sort" data-sort="name">Order</th></tr>`);

                const tableCategoriesHTML = response?.data?.map(
                    (category, idx) => `<option value="${category?.id}">${category?.title}</option>`
                );

                tableCategoriesHTML?.map(c => {
                    if (c && c !== '') {
                        $("#category-subcategory").append(c);
                    }
                });

            });

            // Subcategory management functionality

            var subcategoryID = get("id");

            if (subcategoryID) {
                axios.get('http://143.244.206.222:8081/api/subcategories')
                .then(function (response) {
                    // handle success

                    
                    const subcategoryData = response?.data?.filter(cg => cg.id == subcategoryID)[0];

                    $("#title-subcategory").val(subcategoryData?.title);
                    $("#order-subcategory").val(subcategoryData?.order);
                    $("#category-subcategory").val(subcategoryData?.category);

                });
            }

            $(document).on('change', '#image-subcategory', function() {
                $("#save_changes_subcategory").prop('disabled', true);

                // Try to prevent submission for a few secs while uploading image
                setTimeout(function() {
                    $("#save_changes_subcategory").prop('disabled', false);
                }, 4000);

                var file = $(this)[0]; // note the [0] to return the DOMElement from the jQuery object
                var test = 'Event Triggered';

                console.log(test);
                console.log(file.files);
                console.log(file.files[0]);

                $.getScript( "https://cdn.jsdelivr.net/npm/publitio_js_sdk@1.1.5/build/publitio-api.min.js" )
                .done(function( script, textStatus ) {

                    

                    var publitio = new PublitioAPI("3R8PZeVcDM6JZvDZyXB5", "VrazxaSNzH3GGwdr59PszgjfhRRrjP4W");
                    console.log("publitio", publitio);
                    publitio.uploadFile(file.files[0], 'file', {
                        title: 'file name from admin kam',
                        description: 'file description from admin kam',
                        tags: 'sub category',
                        privacy: 1,
                        option_download: 1,
                        file: file
                        }).then(data => {
                            console.log(data);
                            $("#file-url-subcategory").val(data?.url_short);
                        })
                        .catch(error => { console.log(error) });
                    
                })
                .fail(function( jqxhr, settings, exception ) {
                    console.log("error publitio require");
                });

            });

            $("#save_changes_subcategory").click(function() {

                console.log("save changes subcategory press.");

                var subcategoryElement = {
                    title: $("#title-subcategory").val(),
                    image: $("#file-url-subcategory").val(),
                    order: $("#order-subcategory").val(),
                    category: $("#category-subcategory").val()
                };

                console.log("subcategory to add");
                console.log(subcategoryElement);

                if (subcategoryID) {
                    // category update now save

                    subcategoryElement['id'] = subcategoryID;

                    console.log("category element to upload", subcategoryElement);

                    axios.put('http://143.244.206.222:8081/api/subcategory', subcategoryElement);

                    window.location.replace("/subcategories");

                    return;
                }

                try {
                    axios.post('http://143.244.206.222:8081/api/subcategory', subcategoryElement)
                    .then(function (response) {

                        $("#title-subcategory").val("");
                        $("#file-url-subcategory").val("");
                        $("#order-subcategory").val("");
                        $("#image-subcategory").val("");

                        // window.location.replace("/subcategories");
                    });
                } catch(err) {
                    $("#title-subcategory").val("");
                        $("#file-url-subcategory").val("");
                        $("#order-subcategory").val("");
                        $("#image-subcategory").val("");

                        // window.location.replace("/subcategories");
                }
                
            });


        }









        // SERVICE MODEL TYPE


        if (modelType === "service") {

            console.log("it should pass here.");

            $("#form-title-model").text("Manage Service");

            $("#service-form-view").show();

            $("#category-form-view").hide();
            $("#subcategory-form-view").hide();

            // Load select categories element.

            axios.get('http://143.244.206.222:8081/api/subcategories')
            .then(function (response) {
                // handle success
                console.log("sc response");
                console.log(response.data);

                $(".thead-light").first("tr").html(`<tr><th scope="col" class="sort" data-sort="name">ID</th><th scope="col" class="sort" data-sort="name">Title</th><th scope="col" class="sort" data-sort="name">Image</th><th scope="col" class="sort" data-sort="name">Order</th></tr>`);

                const tableCategoriesHTML = response?.data?.map(
                    (category, idx) => `<option value="${category?.id}">${category?.title}</option>`
                );

                tableCategoriesHTML?.map(c => {
                    if (c && c !== '') {
                        $("#subcategory-service").append(c);
                    }
                });

            });

            // Service management functionality

            var serviceID = get("id");

            if (serviceID) {
                axios.get('http://143.244.206.222:8081/api/services')
                .then(function (response) {
                    // handle success

                    
                    const serviceData = response?.data?.filter(cg => cg.id == serviceID)[0];

                    $("#title-service").val(serviceData?.title);
                    $("#order-service").val(serviceData?.order);
                    $("#category-service").val(serviceData?.category);
                    $("#description-service").val(serviceData?.description);
                    $("#price-service").val(serviceData?.price);
                    

                });
            }

            $(document).on('change', '#image-service', function() {
                $("#save_changes_service").prop('disabled', true);

                // Try to prevent submission for a few secs while uploading image
                setTimeout(function() {
                    $("#save_changes_service").prop('disabled', false);
                }, 4000);

                var file = $(this)[0]; // note the [0] to return the DOMElement from the jQuery object
                var test = 'Event Triggered';

                console.log(test);
                console.log(file.files);
                console.log(file.files[0]);

                $.getScript( "https://cdn.jsdelivr.net/npm/publitio_js_sdk@1.1.5/build/publitio-api.min.js" )
                .done(function( script, textStatus ) {

                    

                    var publitio = new PublitioAPI("3R8PZeVcDM6JZvDZyXB5", "VrazxaSNzH3GGwdr59PszgjfhRRrjP4W");
                    console.log("publitio", publitio);
                    publitio.uploadFile(file.files[0], 'file', {
                        title: 'file name from admin kam',
                        description: 'file description from admin kam',
                        tags: 'service',
                        privacy: 1,
                        option_download: 1,
                        file: file
                        }).then(data => {
                            console.log(data);
                            $("#file-url-service").val(data?.url_short);
                        })
                        .catch(error => { console.log(error) });
                    
                })
                .fail(function( jqxhr, settings, exception ) {
                    console.log("error publitio require");
                });

            });

            $("#save_changes_service").click(function() {

                console.log("save changes service press.");

                var serviceElement = {
                    title: $("#title-service").val(),
                    image: $("#file-url-service").val(),
                    order: $("#order-service").val(),
                    description: $("#description-service").val(),
                    price: $("#price-service").val(),
                    subcategory: $("#subcategory-service").val()
                };

                console.log("service to add");
                console.log(serviceElement);

                if (serviceID) {
                    // category update now save

                    serviceElement['id'] = serviceID;

                    console.log("category element to upload", serviceElement);

                    axios.put('http://143.244.206.222:8081/api/services', serviceElement);

                    window.location.href = "/services";

                    return;
                }

                try {
                    axios.post('http://143.244.206.222:8081/api/services', serviceElement)
                    .then(function (response) {

                        $("#title-service").val("");
                        $("#file-url-service").val("");
                        $("#order-service").val("");
                        $("#image-service").val("");
                        $("#description-service").val("");
                        $("#price-service").val("");

                    //     window.location.replace("/services");
                    });
                } catch(err) {
                    alert("erorr cannot update.");
                    // $("#title-service").val("");
                    //     $("#file-url-service").val("");
                    //     $("#order-service").val("");
                    //     $("#image-service").val("");
                    //     $("#description-service").val("");
                    //     $("#price-service").val("");

                    //     window.location.replace("/services");
                }
                
            });


        }







    })
    </script>
</body>

</html>
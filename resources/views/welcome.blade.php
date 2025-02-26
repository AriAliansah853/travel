<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="text-white page-title-icon bg-gradient-primary me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="align-middle mdi mdi-alert-circle-outline icon-sm text-primary"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="text-white card bg-gradient-danger card-img-holder">
                <div class="card-body">
                  <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute"
                    alt="circle-image" />
                  <h4 class="mb-3 font-weight-normal">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5">$ 15,0000</h2>
                  <h6 class="card-text">Increased by 60%</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="text-white card bg-gradient-info card-img-holder">
                <div class="card-body">
                  <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute"
                    alt="circle-image" />
                  <h4 class="mb-3 font-weight-normal">Weekly Orders <i
                      class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5">45,6334</h2>
                  <h6 class="card-text">Decreased by 10%</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="text-white card bg-gradient-success card-img-holder">
                <div class="card-body">
                  <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute"
                    alt="circle-image" />
                  <h4 class="mb-3 font-weight-normal">Visitors Online <i class="mdi mdi-diamond mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5">95,5741</h2>
                  <h6 class="card-text">Increased by 5%</h6>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-5 grid-margin stretch-card">
              <div class="card">
                <div class="p-0 card-body d-flex">
                  <div id="inline-datepicker" class="datepicker datepicker-custom"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Updates</h4>
                  <div class="d-flex">
                    <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                      <i class="mdi mdi-account-outline icon-sm me-2"></i>
                      <span>jack Menqu</span>
                    </div>
                    <div class="d-flex align-items-center text-muted font-weight-light">
                      <i class="mdi mdi-clock icon-sm me-2"></i>
                      <span>October 3rd, 2018</span>
                    </div>
                  </div>
                  <div class="mt-3 row">
                    <div class="col-6 pe-1">
                      <img src="{{ asset('assets/images/dashboard/img_1.jpg') }}" class="mb-2 rounded mw-100 w-100"
                        alt="image">
                      <img src="{{ asset('assets/images/dashboard/img_4.jpg') }}" class="rounded mw-100 w-100"
                        alt="image">
                    </div>
                    <div class="col-6 ps-1">
                      <img src="{{ asset('assets/images/dashboard/img_2.jpg') }}" class="mb-2 rounded mw-100 w-100"
                        alt="image">
                      <img src="{{ asset('assets/images/dashboard/img_3.jpg') }}" class="rounded mw-100 w-100"
                        alt="image">
                    </div>
                  </div>
                  <div class="mt-5 d-flex align-items-top">
                    <img src="{{ asset('assets/images/faces/face3.jpg') }}" class="img-sm rounded-circle me-3"
                      alt="image">
                    <div class="flex-grow mb-0">
                      <h5 class="mb-2 me-2">School Website - Authentication Module.</h5>
                      <p class="mb-0 font-weight-light">It is a long established fact that a
                        reader will be distracted
                        by the readable content of a page.</p>
                    </div>
                    <div class="ms-auto">
                      <i class="mdi mdi-heart-outline text-muted"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Project Status</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Name </th>
                          <th> Due Date </th>
                          <th> Progress </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> Herman Beck </td>
                          <td> May 15, 2015 </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> Messsy Adam </td>
                          <td> Jul 01, 2015 </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td> John Richards </td>
                          <td> Apr 12, 2015 </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td> Peter Meggik </td>
                          <td> May 15, 2015 </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td> Edward </td>
                          <td> May 03, 2015 </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%"
                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td> Ronald </td>
                          <td> Jun 05, 2015 </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%"
                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-dark">Todo List</h4>
                  <div class="add-items d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                    <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                      id="add-task">Add</button>
                  </div>
                  <div class="list-wrapper">
                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li class="completed">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked> Call John </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox"> Create invoice </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox"> Print Statements </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li class="completed">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                        </div>
                        <i class="remove mdi mdi-close-circle-outline"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layouts.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('layouts.js')
  <!-- End custom js for this page -->
</body>

</html>
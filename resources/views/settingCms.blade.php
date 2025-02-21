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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Promo</h4>

                  <input type="text" id="search-input" class="mb-3 form-control"
                    placeholder="Cari berdasarkan judul atau deskripsi">

                  <table id="banner-table" class="table table-bordered">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> First name </th>
                        <th> Progress </th>
                        <th> Amount </th>
                        <th> Deadline </th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
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
                      <img src="{{ asset('assets/images/dashboard/img_1.jpg')}}" class="mb-2 rounded mw-100 w-100"
                        alt="image">
                      <img src="{{ asset('assets/images/dashboard/img_4.jpg')}}" class="rounded mw-100 w-100"
                        alt="image">
                    </div>
                    <div class="col-6 ps-1">
                      <img src="{{ asset('assets/images/dashboard/img_2.jpg')}}" class="mb-2 rounded mw-100 w-100"
                        alt="image">
                      <img src="{{ asset('assets/images/dashboard/img_3.jpg')}}" class="rounded mw-100 w-100"
                        alt="image">
                    </div>
                  </div>
                  <div class="mt-5 d-flex align-items-top">
                    <img src="{{ asset('assets/images/faces/face3.jpg')}}" class="img-sm rounded-circle me-3"
                      alt="image">
                    <div class="flex-grow mb-0">
                      <h5 class="mb-2 me-2">School Website - Authentication Module.</h5>
                      <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted
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
  <script>
    $(document).ready(function() {
        // Fungsi untuk mengambil data banner berdasarkan pencarian
        function getData(search = '') {
            $.ajax({
                url: '/api/banner-promosi',  // Mengambil data JSON
                method: 'GET',
                data: { search: search },  // Mengirim parameter pencarian
                success: function(response) {
                    let tableBody = $('#banner-table');
                    tableBody.empty();  // Kosongkan tabel sebelum memasukkan data baru
                    response.forEach(function(row) {
                        let tr = `<tr>
                            <td>${row.id}</td>
                            <td>${row.judul}</td>
                            <td>${row.deskripsi}</td>
                            <td><img src="/storage/${row.gambar}" alt="Gambar Banner" width="100"></td>
                            <td>${row.status}</td>
                            <td>
                                <button class="btn btn-warning btn-sm editBtn">Edit</button>
                                <button class="btn btn-danger btn-sm deleteBtn" data-id="${row.id}">Delete</button>
                            </td>
                        </tr>`;
                        tableBody.append(tr);
                    });
                },
                error: function(error) {
                    alert('Terjadi kesalahan dalam mengambil data');
                }
            });
        }

        // Ambil data pertama kali tanpa filter
        getData();

        // Event listener untuk input pencarian
        $('#search-input').on('keyup', function() {
            let searchValue = $(this).val();  // Ambil nilai input pencarian
            getData(searchValue);  // Ambil data dengan filter pencarian
        });

        // Menghapus banner promosi
        $('body').on('click', '.deleteBtn', function() {
            let id = $(this).data('id');
            if (confirm('Apakah Anda yakin ingin menghapus banner ini?')) {
                $.ajax({
                    url: '/api/banner-promosi/' + id,
                    method: 'DELETE',
                    success: function(response) {
                        alert(response.message);
                        getData();  // Reload data setelah penghapusan
                    },
                    error: function(error) {
                        alert('Terjadi kesalahan dalam menghapus data');
                    }
                });
            }
        });
    });
  </script>
  <!-- End custom js for this page -->
</body>

</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="height: 100vh; width:100%">
          <!-- style="height: 100vh; width:100%" -->
            <div class="col-md-6">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <strong>Welcome</strong>
                        </div>
                        <div class="card-body">
                            <h1>ABSENSI KELAS</h1>


                            <!-- <form class="row">
                              <div class="col-md-6">
                                <label for="kelas" class="form-label">Kelas</label>
                                  <select class="form-select" name="kelas">
                                      <option selected> Nama Siswa</option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                      <option value=""></option>
                                  </select>
                              </div>
                              <div class="col-md-6 mb-4">
                                  <label for="nama" class="form-label">Nama Siswa</label>
                                  <select class="form-select" name="nama">
                                      <option selected>Hadir</option>
                                      <option value="SAKIT">Sakit</option>
                                      <option value="IJIN">Ijin</option>
                                  </select>
                              </div>
                  
                              <div class="col-md-4 mb-4">
                                  <label for="tgl" class="form-label mb-3">Tanggal</label>
                                  <input type="date" id="tgl" class="form-control" name="tanggal">
                              </div>
                              </div>
                            </form> -->

        
                              <div>
                              <button type="button" class="btn btn-danger mt-3" onclick="logout()">Logout</button>
                                                   
                        </div>
                 
                    </div>
                  </div>
            </div>
        </div>
        <div class="container mt-4">
          <!-- <form class="row">
            <div class="col-md-6">
              <label for="kelas" class="form-label">Kelas</label>
                <select class="form-select" name="kelas">
                    <option selected> Nama Siswa</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-6 mb-4">
                <label for="nama" class="form-label">Nama Siswa</label>
                <select class="form-select" name="nama">
                    <option selected>Hadir</option>
                    <option value="SAKIT">Sakit</option>
                    <option value="IJIN">Ijin</option>
                </select>
            </div>

            <div class="col-md-4 mb-4">
                <label for="tgl" class="form-label mb-3">Tanggal</label>
                <input type="date" id="tgl" class="form-control" name="tanggal">
            </div>
            </div>
          </form> -->
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        function logout() {
            console.log("Berhasil logout");
            window.location.href ="login.html";
            history.pushState(null, null, "login.html");
        }
    </script>
  </body>
</html>
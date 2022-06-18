<?php 
if ($mod ==''){
    header('location:../404');
    echo'kosong';
}else{
    include_once 'mod/sw-header.php';
if(!isset($_COOKIE['COOKIES_MEMBER']) OR !isset($_COOKIE['COOKIES_COOKIES'])){

$query = mysqli_query($connection, "SELECT max( employees_code) as kodeTerbesar FROM employees");
$data = mysqli_fetch_array($query);
$kode_karyawan = $data['kodeTerbesar'];
$urutan = (int) substr($kode_karyawan, 3, 3);
$urutan++;
$huruf = "OM";
$kode_karyawan = $huruf . sprintf("%03s", $urutan);

 echo'
 <!-- App Capsule -->
    <div id="appCapsule">
        <div style="border-radius:30px;margin:0 16px;padding:10px 15px" class="section text-center bg-dark">
            <img src="'.$site_url.'/content/'.$site_logo.'" height="70">
        </div>
        <div class="section mb-5 p-2">
            <form id="form-registrasi">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Nama</label>
                                <input type="text" class="form-control" id="name" name="employees_name" placeholder="Nama Lengkap" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="employees_email" placeholder="Masukkan E-mail" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Jabatan</label>
                                <select class="form-control" name="position_id" id="position_id"  required="">
                                  <option value="">- Pilih -</option>';
                                  $query="SELECT * from position order by position_name ASC";
                                  $result = $connection->query($query);
                                  while($row = $result->fetch_assoc()) { 
                                  echo'<option value="'.$row['position_id'].'">'.$row['position_name'].'</option>';
                                  }echo'
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Shift</label>
                                <select class="form-control" name="shift_id" id="shift_id" required="">
                                  <option value="">- Pilih -</option>';
                                  $query="SELECT shift_id,shift_name from shift order by shift_name ASC";
                                  $result = $connection->query($query);
                                  while($row = $result->fetch_assoc()) { 
                                  echo'<option value="'.$row['shift_id'].'">'.$row['shift_name'].'</option>';
                                  }echo'
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">Lokasi</label>
                                <select class="form-control" name="building_id" id="building" required="">
                                  <option value="">- Pilih -</option>';
                                  $query="SELECT building_id,name,address from building order by name ASC";
                                  $result = $connection->query($query);
                                  while($row = $result->fetch_assoc()) { 
                                  echo'<option value="'.$row['building_id'].'">'.$row['name'].'</option>';
                                  }echo'
                              </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Password</label>
                                <input type="password" class="form-control" id="password" name="employees_password"  placeholder="Masukkan Password" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-links mt-2">
                    <div>
                        <a class="btn btn-secondary" href="login"><i class="fa fa-user"></i> Login</a>
                    </div>                     
                    <div>              
                   <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-user-plus"></i> Register</button>
                   </div>
                    <div>
                        <a class="btn btn-danger" href="forgot"><i class="fa fa-key"></i> Reset Password</a>
                    </div>     
                </div>
            </form>
        </div>

    </div>
    <!-- * App Capsule -->';}
  else{
  }

  include_once 'mod/sw-footer.php';
} ?>
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
            <form id="form-forgot">
                <div class="card">
                    <div class="card-body pb-1">
    
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="employees_email" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="form-links mt-2">
                    <div>
                        <a class="btn btn-dark" href="login"><i class="fa fa-user"></i> Login</a>
                    </div>
                    <div>
                    <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-key"></i> Reset</button>
                    </div>
                    <div>
                        <a class="btn btn-secondary" href="registrasi"><i class="fa fa-user-plus"></i> Register</a>
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
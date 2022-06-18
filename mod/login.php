<?php 
if ($mod ==''){
    header('location:../404');
    echo'kosong';
}else{
    include_once 'mod/sw-header.php';
if(!isset($_COOKIE['COOKIES_MEMBER'])){

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
        <div style="border-radius:30px;margin:0 16px;padding:10px 15px" class="section text-center bg-dark" >
            <img src="'.$site_url.'/content/'.$site_logo.'" height="70">
        </div>
        <div class="section mb-5 p-2">
            <form id="form-login">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan E-mail" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                        
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-dark btn-block"><ion-icon name="log-in"></ion-icon> Login</button>
                        <a href="registrasi" class="btn btn-secondary btn-block"><i class="fa fa-user-plus"></i>  Register</a>
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
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=SITE?>" class="brand-link">
    &nbsp;&nbsp;<img src=" https://cdn-icons-png.flaticon.com/512/3037/3037929.png" width="40" height="40" alt="" title="" class="img-small">
      <span class="brand-text font-weight-light"> <b> Planet Bilgisayar</b> 
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src=" https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="40" height="40" alt="" title="" class="img-small">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <b> <?=$_SESSION["adsoyad"]?> </b> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Şirket
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?=SITE?>index.php?sayfa=sekle" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bilgi Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=SITE?>index.php?sayfa=sirketbilgileri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Şirket Bilgileri</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Müşteriler
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?=SITE?>index.php?sayfa=modul-ekle" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Müşteri Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=SITE?>index.php?sayfa=mkayit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Müşteri Bilgileri</p>
                </a>
              </li>
            </ul>
          </li>
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Yönetim 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?=SITE?>index.php?sayfa=yekle" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yönetici Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=SITE?>index.php?sayfa=yliste" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yönetici Listesi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=SITE?>index.php?sayfa=cikis" class="nav-link">
                &nbsp;<img src=" https://cdn-icons-png.flaticon.com/512/3541/3541911.png" width="23" height="23" alt="" title="" class="img-small">
                 
                  <p>Çıkış 
                  
                  </p>
                </a>
              </li>
            </ul>
          
          
          
              
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
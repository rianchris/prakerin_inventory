 <div class="navbar navbar-default sidebar" role="navigation">
     <div class="sidebar-nav navbar-collapse">
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>

         <ul class="nav" id="side-menu">
             <li>
                 <a href="<?=base_url()?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
             </li>
             <!--login jika admin -->
             <?php if($this->session->userdata('role') == 'admin'): ?>
                 <li>
                     <a href="#"><i class="glyphicon glyphicon-user"></i> Administrator<span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level">
                         <li> <a href="#">&raquo; User List</a> </li>
                         <li> <a href="#">&raquo; Activity Log</a> </li>
                     </ul>
                 </li>
             <?php endif; ?>
             <!--selesai -->
             <li>
                 <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Data Barang<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                     <li> <a href="<?=base_url('inventory/i_with_c')?>">&raquo; Daftar Barang</a> </li>
                     <li> <a href=#>&raquo; Barang tanpa kode</a> </li>
                     <li> <a href=#>&raquo; Barang lain-lain</a> </li>
                 </ul>
             </li>
         </ul>
     </div>
 </div>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap-wysihtml5.css" />
<link href="<?php echo base_url('assets/'); ?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/jquery.ui.custom.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap-colorpicker.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap-datepicker.js"></script>

 <script src="<?php echo base_url('assets/'); ?>js/jquery.uniform.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/select2.min.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/matrix.js"></script>
 <script src="<?php echo base_url('assets/'); ?>js/matrix.form_common.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/jquery.peity.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap-wysihtml5.js"></script>

<style type="text/css">.thumb-image{float:left;width:200px;position:relative;padding:5px;}</style>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">BCA Finance</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome   </span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="javascript::void(0);"><i class="icon-user"></i> <?php echo "Your username : ";?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your Level : ";?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your Full Name : ";?></a></li>
        <li class="divider"></li>
        <li><a href="javascript::void(0);"><i class="icon-check"></i> <?php echo "Your NRP : ";?></a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">

</div>
<!--close-top-serch-->

<!--sidebar-menu-->

<div id="sidebar"><a href="<?php echo base_url('dashboard'); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url('dashboard'); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
     <li class="active"><a href="<?php echo base_url('finance/add'); ?>"><i class="icon icon-home"></i> <span>BCA Finance</span></a> </li>

  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
   <div id="breadcrumb">   </div>
  <h1>Form BCA Finance</h1>
</div>
<div class="container-fluid">

  <div class="row-fluid">

  <div class="span12">


   <form action="<?php echo base_url('idea_proposal/pro_add');?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
     <div class="control-group">
       <label class="control-label">No.Referensi :</label>
       <div class="controls">
         <input type="text" class="span11" name="no_ref" value="<?php echo "REF".$lastid;?>" readonly="readonly" />

       </div>
     </div>

  <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
                <h5>Data Konsumen</h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOne">
              <div class="widget-content span6">

                <div class="widget-content nopadding">

                  <div class="control-group">
                    <label class="control-label">Nama Konsumen :</label>
                    <div class="controls">
                    <input type="text" name="nm_konsumen"  class="span11">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">SID Name :</label>
                    <div class="controls">
                        <input type="text" name="sid_konsumen"  class="span11" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Nama Gadis Ibu Kandung :</label>
                    <div class="controls">
                      <input type="text" name="nm_ibu_kandung"   class="span11"  />
                    </div>
                  </div>
                  <div class="control-group">
                   <label class="control-label">Jumlah Tanggungan:</label>
                   <div class="controls">
                     <input type="text" name="nm_ibu_kandung"   class="span11"  />
                   </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Email:</label>
                    <div class="controls">
                      <input type="text" name="email"   class="span11"  />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Alamat Tinggal Sekarang:</label>
                    <div class="controls">
                      <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Alamat Berbeda (Wajib Diisi Jika Berbeda Dengan ID):</label>
                    <div class="controls">
                      <textarea name="alamat_berbeda" class="span11"> </textarea>
                    </div>
                  </div>

                  <div class="control-group">

                    <table class="table">
                      <tr>
                        <td> <span style="font-size:14px;"> RT </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> RW </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
                      </tr>
                      <tr>
                        <td> <span style="font-size:14px;"> No Kav </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> Kode Pos </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
                      </tr>
                      <tr>
                        <td> <span style="font-size:14px;"> Kelurahan </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kelurahan_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> Kecamatan </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kecamatan_skrg"  class="span10" /> </td>
                      </tr>
                      <tr>
                        <td> <span style="font-size:14px;"> Kab/Kota </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kab_kota_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> Provinsi </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="provinsi_skrg"  class="span10" /> </td>
                      </tr>
                    </table>

                  </div>

                  <div class="control-group">

                    <table class="table">
                      <tr>
                          <td colspan="4"> <span style="font-size:14px;"> Status Rumah : </span> </td>
                      </tr>
                      <tr>
                        <td>
                          <label>
                            <input type="radio" name="radios" />
                            Keluarga</label>
                          <label>
                            <input type="radio" name="radios" />
                            Kontrak</label>
                          <label>
                            <input type="radio" name="radios" />
                            Kost</label>
                         </td>

                        <td>
                          <label>
                            <input type="radio" name="radios" />
                            Milik Sendiri</label>
                          <label>
                            <input type="radio" name="radios" />
                            Angsuran</label>
                          <label>
                            <input type="radio" name="radios" />
                            Lainnya (Isi Dibawah)</label>
                          </td>
                      </tr>

                      <tr>
                          <td colspan="4"> <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea> </td>
                      </tr>

                    </table>

                   </div>

                  <div class="control-group">

                    <table class="table">
                      <tr>
                          <td colspan="4"> <span style="font-size:14px;"> Lama Menempati : </span> </td>
                      </tr>
                      <tr>
                        <td> <input type="text" name="lama_bln" class="form_common">    </td>
                        <td> Tahun </td>
                        <td> <input type="text" name="lama_thn" class="form_common">   </td>
                        <td> Bulan </td>
                      </tr>

                    </table>

                  </div>







                </div>

              <!--content here-->
              </div>
              <div class="widget-content span6">
              <!--content here-->

                <div class="widget-content nopadding">

                  <div class="control-group">
                   <label class="control-label">Alamat Pengiriman Surat:</label>
                   <div class="controls">
                     <select name="ss">
                       <option value="1"> Rumah </option>
                       <option value="1"> Kantor </option>
                       <option value="1"> Lainnya </option>
                     </select>
                   </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Alamat Lainnya:</label>
                    <div class="controls">
                      <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
                    </div>
                  </div>

                  <div class="control-group">

                    <table class="table">
                      <tr>
                        <td> <span style="font-size:14px;"> RT </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> RW </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
                      </tr>
                      <tr>
                        <td> <span style="font-size:14px;"> No Kav </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> Kode Pos </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
                      </tr>
                      <tr>
                        <td> <span style="font-size:14px;"> Kelurahan </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kelurahan_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> Kecamatan </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kecamatan_skrg"  class="span10" /> </td>
                      </tr>
                      <tr>
                        <td> <span style="font-size:14px;"> Kab/Kota </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kab_kota_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> Provinsi </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="provinsi_skrg"  class="span10" /> </td>
                      </tr>
                    </table>

                  </div>

                  <div class="control-group">

                    <table class="table">
                      <tr>
                        <td colspan="6"> <span style="font-size:14px;"> Kontak </span> </td>
                      </tr>
                      <tr>
                        <td> <span style="font-size:14px;"> Telepon 1 </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> Telepon 2 </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
                      </tr>
                      <tr>
                        <td> <span style="font-size:14px;"> HP 1 </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
                        <td> <span style="font-size:14px;"> HP 2 </span> </td>
                        <td> : </td>
                        <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
                      </tr>
                    </table>

                  </div>



              <!--content here-->
              </div>
            </div>

  </div>

  </div>

  <div class="accordion-group widget-box">
    <div class="accordion-heading">
      <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
        <h5>Data Pekerjaan</h5>
        </a> </div>
    </div>
    <div class="collapse in accordion-body" id="collapseGTwo">
      <div class="widget-content span6">

        <div class="control-group">
         <label class="control-label">Pekerjaan Konsumen:</label>
         <div class="controls">
           <select name="ss">
             <option value="1"> Wiraswasta </option>
             <option value="1"> Profesional </option>
             <option value="1"> Karyawan </option>
             <option value="1"> Ibu Rumah Tangga </option>
             <option value="1"> Lainnya </option>
           </select>
         </div>
        </div>
        <div class="control-group">
          <label class="control-label">Lainnya : </label>
          <div class="controls">
            <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Nama Perusahaan:</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Jenis Usaha:</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>
        <div class="control-group">

          <table class="table">

            <tr>
              <td> <span style="font-size:14px;"> Kode Sektor Ekonomi </span> </td>
              <td> : </td>
              <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
              <td> <span style="font-size:14px;"> Kode Lokasi Proyek </span> </td>
              <td> : </td>
              <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
            </tr>

          </table>

        </div>
        <div class="control-group">
          <label class="control-label">Jabatan / Profesi :</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Berdiri Sejak Tahun:</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>

        <div class="control-group">
          <label class="control-label"> <h4>Data Pasangan</h4> </label>
        </div>


        <div class="control-group">
          <label class="control-label"> Nama Pasangan Konsumen :</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>
        <div class="control-group">
         <label class="control-label">Pekerjaan Pasangan :</label>
         <div class="controls">
           <select name="ss">
             <option value="1"> Wiraswasta </option>
             <option value="1"> Profesional </option>
             <option value="1"> Karyawan </option>
             <option value="1"> Ibu Rumah Tangga </option>
             <option value="1"> Lainnya </option>
           </select>
         </div>
        </div>
        <div class="control-group">
          <label class="control-label">Lainnya : </label>
          <div class="controls">
            <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Nama Perusahaan Pasangan:</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Jenis Usaha Pasangan:</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Jabatan / Profesi Pasangan :</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Berdiri Sejak Tahun:</label>
          <div class="controls">
            <input type="text" name="nm_ibu_kandung"   class="span11"  />
          </div>
        </div>

      <!--content here-->
      </div>
      <div class="widget-content span6">
      <!--content here-->
      <div class="control-group">
        <label class="control-label">Alamat Perusahaan:</label>
        <div class="controls">
          <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
        </div>
      </div>
      <div class="control-group">

        <table class="table">
          <tr>
            <td> <span style="font-size:14px;"> RT </span> </td>
            <td> : </td>
            <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> RW </span> </td>
            <td> : </td>
            <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> No Kav </span> </td>
            <td> : </td>
            <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Kode Pos </span> </td>
            <td> : </td>
            <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> Kelurahan </span> </td>
            <td> : </td>
            <td> <input type="text" name="kelurahan_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Kecamatan </span> </td>
            <td> : </td>
            <td> <input type="text" name="kecamatan_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> Kab/Kota </span> </td>
            <td> : </td>
            <td> <input type="text" name="kab_kota_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Provinsi </span> </td>
            <td> : </td>
            <td> <input type="text" name="provinsi_skrg"  class="span10" /> </td>
          </tr>
        </table>

      </div>

      <div class="control-group">

        <table class="table">
          <tr>
            <td colspan="6"> <span style="font-size:14px;"> Kontak </span> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> Telepon 1 </span> </td>
            <td> : </td>
            <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Ext </span> </td>
            <td> : </td>
            <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> Telepon 2 </span> </td>
            <td> : </td>
            <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Ext </span> </td>
            <td> : </td>
            <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
          </tr>
        </table>

      </div>

      <div class="control-group">
        <label class="control-label">Alamat Perusahaan Pasangan:</label>
        <div class="controls">
          <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
        </div>
      </div>
      <div class="control-group">

        <table class="table">
          <tr>
            <td> <span style="font-size:14px;"> RT </span> </td>
            <td> : </td>
            <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> RW </span> </td>
            <td> : </td>
            <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> No Kav </span> </td>
            <td> : </td>
            <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Kode Pos </span> </td>
            <td> : </td>
            <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
          </tr>

          <tr>
            <td> <span style="font-size:14px;"> Kab/Kota </span> </td>
            <td> : </td>
            <td colspan="4"> <input type="text" name="kab_kota_skrg"  class="span10" /> </td>

          </tr>
        </table>

      </div>

      <div class="control-group">

        <table class="table">

          <tr>
            <td> <span style="font-size:14px;"> Telp  </span> </td>
            <td> : </td>
            <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> HP </span> </td>
            <td> : </td>
            <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
          </tr>

        </table>

      </div>


    </div>





</div>

</div>

<div class="accordion-group widget-box">
  <div class="accordion-heading">
    <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
      <h5>Data Keuangan</h5>
      </a> </div>
  </div>
  <div class="collapse in accordion-body" id="collapseGThree">
    <div class="widget-content span6">
      <div class="control-group">
        <label class="control-label">Penghasilan Konsumen Rp. </label>
        <div class="controls">
          <input type="text" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Penghasilan Lain Rp. </label>
        <div class="controls">
          <input type="text" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Pendapatan Tetap Pasangan Rp. </label>
        <div class="controls">
          <input type="text" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>



    <!--content here-->
    </div>
    <div class="widget-content span6">
    <!--content here-->
    <div class="control-group">
     <label class="control-label">Cara Pembayaran :</label>
     <div class="controls">
       <select name="ss">
         <option value="1"> Autodebet </option>
         <option value="1"> ATM </option>
         <option value="1"> No Rek BCA </option>
         <option value="1"> Lainnya </option>
       </select>
     </div>
    </div>
    <div class="control-group">
      <label class="control-label">Lainnya : </label>
      <div class="controls">
        <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
      </div>
    </div>

  </div>

</div>

</div>

<div class="accordion-group widget-box">
  <div class="accordion-heading">
    <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGFour" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
      <h5>Data Pinjaman</h5>
      </a> </div>
  </div>
  <div class="collapse in accordion-body" id="collapseGFour">
    <div class="widget-content span6">
      <div class="control-group">
       <label class="control-label">Tujuan Penggunaan Kendaraan :</label>
       <div class="controls">
         <select name="ss">
           <option value="1"> Produktif </option>
           <option value="1"> Non Produktif </option>
         </select>
       </div>
      </div>

      <div class="control-group">
       <label class="control-label">Tujuan Pembiayaan :</label>
       <div class="controls">
         <select name="ss">
           <option value="1"> Investasi </option>
           <option value="1"> Modal Kerja </option>
           <option value="1"> Konsumsi </option>
           <option value="1"> Lainnya</option>
         </select>
       </div>
      </div>

      <div class="control-group">
        <label class="control-label">Lainnya : </label>
        <div class="controls">
          <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
        </div>
      </div>


    <!--content here-->
    </div>
    <div class="widget-content span6">
    <!--content here-->
    <div class="control-group">
      <label class="control-label">BPKB Atas Nama :  </label>
      <div class="controls">
        <input type="text" name="nm_ibu_kandung"   class="span11"  />
      </div>
    </div>

    <div class="control-group">
      <label class="control-label">Hubungan Dengan Konsumen : </label>
      <div class="controls">
        <input type="text" name="nm_ibu_kandung"   class="span11"  />
      </div>
    </div>

  </div>

</div>

</div>

<div class="accordion-group widget-box">
  <div class="accordion-heading">
    <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGFive" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
      <h5>Data Emergency Contact Person</h5>
      </a> </div>
  </div>
  <div class="collapse in accordion-body" id="collapseGFive">
    <div class="widget-content span6">
      <div class="control-group">
        <label class="control-label"> Nama :  </label>
        <div class="controls">
          <input type="text" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Alamat : </label>
        <div class="controls">
          <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
        </div>
      </div>

      <div class="control-group">

        <table class="table">
          <tr>
            <td> <span style="font-size:14px;"> RT </span> </td>
            <td> : </td>
            <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> RW </span> </td>
            <td> : </td>
            <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> No Kav </span> </td>
            <td> : </td>
            <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Kode Pos </span> </td>
            <td> : </td>
            <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
          </tr>

          <tr>
            <td> <span style="font-size:14px;"> Kab/Kota </span> </td>
            <td> : </td>
            <td colspan="4"> <input type="text" name="kab_kota_skrg"  class="span11" /> </td>

          </tr>
        </table>

      </div>





    <!--content here-->
    </div>
    <div class="widget-content span6">
    <!--content here-->

          <div class="control-group">

            <table class="table">

              <tr>
                <td> <span style="font-size:14px;"> Telp  </span> </td>
                <td> : </td>
                <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
                <td> <span style="font-size:14px;"> HP </span> </td>
                <td> : </td>
                <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
              </tr>

            </table>

          </div>

          <div class="control-group">
            <label class="control-label"> Hubungan Dengan Debitur</label>
            <div class="controls">
              <input type="text" name="nm_ibu_kandung"   class="span11"  />
            </div>
          </div>

  </div>

</div>

</div>


<div class="accordion-group widget-box">
  <div class="accordion-heading">
    <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGSix" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
      <h5>Data Asuransi</h5>
      </a> </div>
  </div>
  <div class="collapse in accordion-body" id="collapseGSix">
    <div class="widget-content span6">

      <div class="control-group">

        <table class="table">
          <tr>
            <td colspan="6"> Perusahaan Asuransi yang direkomendasikan oleh BCA </td>
          </tr>
          <tr>
            <td colspan="6">

                <select name="ss">
                  <option value="1"> ACE JAPRO </option>
                  <option value="1"> ASPAN </option>
                  <option value="1"> BCA INSURANCE </option>
                  <option value="1"> BESS INSURANCE </option>
                  <option value="1"> CAKRAWALA PROTEKSI </option>
                  <option value="1"> MPM </option>
                  <option value="1"> PANPACIFIC </option>
                  <option value="1"> RAKSA </option>
                  <option value="1"> SIMAS </option>
                  <option value="1"> Lainnya </option>
                </select>

            </td>
          </tr>

          <tr>
            <td colspan="6">  Lainnya :
              <div class="control-group">

                  <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>

              </div>
            </td>
          </tr>

        </table>

      </div>


    <!--content here-->
    </div>
    <div class="widget-content span6">
    <!--content here-->
    <div class="control-group">

      <table class="table">
        <tr>
          <td colspan="6"> <b>Jenis  Asuransi</b></td>
        </tr>
        <tr>
          <td colspan="6"> <b>Tahun 1 </b> </td>
        </tr>
        <tr>
          <td><input type="radio" name="thcomp" value="1">Comprehensive</td>
          <td><input type="radio" name="thcomp" value="1">TLO</td>
          <td><input type="radio" name="thcomp" value="1">RSCC</td>
          <td> TJH <input type="text" name="thcomp"> Juta </td>
        </tr>

        <tr>
          <td colspan="6"> <b>Tahun 2</b> </td>
        </tr>
        <tr>
          <td><input type="radio" name="thcomp" value="1">Comprehensive</td>
          <td><input type="radio" name="thcomp" value="1">TLO</td>
          <td><input type="radio" name="thcomp" value="1">RSCC</td>
          <td> TJH <input type="text" name="thcomp"> Juta </td>
        </tr>

        <tr>
          <td colspan="6"> <b>Tahun 3</b> </td>
        </tr>
        <tr>
          <td><input type="radio" name="thcomp" value="1">Comprehensive</td>
          <td><input type="radio" name="thcomp" value="1">TLO</td>
          <td><input type="radio" name="thcomp" value="1">RSCC</td>
          <td> TJH <input type="text" name="thcomp"> Juta </td>
        </tr>

        <tr>
          <td colspan="6"> <b>Tahun 4</b> </td>
        </tr>
        <tr>
          <td><input type="radio" name="thcomp" value="1">Comprehensive</td>
          <td><input type="radio" name="thcomp" value="1">TLO</td>
          <td><input type="radio" name="thcomp" value="1">RSCC</td>
          <td> TJH <input type="text" name="thcomp"> Juta </td>
        </tr>


        <tr>
          <td colspan="6"> <b>Tahun 5</b> </td>
        </tr>
        <tr>
          <td><input type="radio" name="thcomp" value="1">Comprehensive</td>
          <td><input type="radio" name="thcomp" value="1">TLO</td>
          <td><input type="radio" name="thcomp" value="1">RSCC</td>
          <td> TJH <input type="text" name="thcomp"> Juta </td>
        </tr>

        <tr>
          <td colspan="6"> <b>Tahun 6</b> </td>
        </tr>
        <tr>
          <td><input type="radio" name="thcomp" value="1">Comprehensive</td>
          <td><input type="radio" name="thcomp" value="1">TLO</td>
          <td><input type="radio" name="thcomp" value="1">RSCC</td>
          <td> TJH <input type="text" name="thcomp"> Juta </td>
        </tr>

      </table>

    </div>

  </div>

</div>

</div>

<div class="accordion-group widget-box">
  <div class="accordion-heading">
    <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGSeven" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
      <h5>Data Penjamin</h5>
      </a> </div>
  </div>
  <div class="collapse in accordion-body" id="collapseGSeven">
    <div class="widget-content span6">
      <div class="control-group">
       <label class="control-label">Jenis Penjamin:</label>
       <div class="controls">
         <select name="ss">
           <option value="1"> Perorangan </option>
           <option value="1"> Perusahaan </option>
        </select>
       </div>
      </div>

      <div class="control-group">
       <label class="control-label">Data Penjamin:</label>

      </div>

      <div class="control-group">
        <label class="control-label">Nama Penjamin / Nama Perusahaan : </label>
        <div class="controls">
          <input type="text" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Pekerjaan Penjamin / Jenis Usaha Perusahaan : </label>
        <div class="controls">
          <input type="text" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Alamat Penjamin / Alamat Perusahaan : </label>
        <div class="controls">
          <input type="text" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>

      <div class="control-group">

        <table class="table">
          <tr>
            <td> <span style="font-size:14px;"> RT </span> </td>
            <td> : </td>
            <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> RW </span> </td>
            <td> : </td>
            <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> No Kav </span> </td>
            <td> : </td>
            <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Kode Pos </span> </td>
            <td> : </td>
            <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> Kelurahan </span> </td>
            <td> : </td>
            <td> <input type="text" name="kelurahan_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Kecamatan </span> </td>
            <td> : </td>
            <td> <input type="text" name="kecamatan_skrg"  class="span10" /> </td>
          </tr>
          <tr>
            <td> <span style="font-size:14px;"> Kab/Kota </span> </td>
            <td> : </td>
            <td> <input type="text" name="kab_kota_skrg"  class="span10" /> </td>
            <td> <span style="font-size:14px;"> Provinsi </span> </td>
            <td> : </td>
            <td> <input type="text" name="provinsi_skrg"  class="span10" /> </td>
          </tr>
        </table>

      </div>






    <!--content here-->
    </div>
    <div class="widget-content span6">
    <!--content here-->
    <div class="control-group">
      <label class="control-label">Hubungan Dengan Konsumen : </label>
      <div class="controls">
        <input type="text" name="nm_ibu_kandung"   class="span11"  />
      </div>
    </div>

    <div class="control-group">
      <label class="control-label">Nama Pasangan Penjamin : </label>
      <div class="controls">
        <input type="text" name="nm_ibu_kandung"   class="span11"  />
      </div>
    </div>

    <div class="control-group">
      <label class="control-label">Pekerjaan Pasangan Penjamin : </label>
      <div class="controls">
        <input type="text" name="nm_ibu_kandung"   class="span11"  />
      </div>
    </div>

    <div class="control-group">
      <label class="control-label">Alamat Pasangan Penjamin : </label>
      <div class="controls">
      <textarea name="alamat_tinggal_sekarang" class="span11"> </textarea>
      </div>
    </div>

    <div class="control-group">

      <table class="table">
        <tr>
          <td> <span style="font-size:14px;"> RT </span> </td>
          <td> : </td>
          <td> <input type="text" name="rt_skrg"  class="span10" /> </td>
          <td> <span style="font-size:14px;"> RW </span> </td>
          <td> : </td>
          <td> <input type="text" name="rw_skrg"  class="span10" /> </td>
        </tr>
        <tr>
          <td> <span style="font-size:14px;"> No Kav </span> </td>
          <td> : </td>
          <td> <input type="text" name="kav_skrg"  class="span10" /> </td>
          <td> <span style="font-size:14px;"> Kode Pos </span> </td>
          <td> : </td>
          <td> <input type="text" name="kodepos_skrg"  class="span10" /> </td>
        </tr>


      </table>

    </div>

    </div>

</div>

</div>

<div class="accordion-group widget-box">
  <div class="accordion-heading">
    <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGEight" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
      <h5>Data Pendukung</h5>
      </a> </div>
  </div>
  <div class="collapse in accordion-body" id="collapseGEight">
    <div class="widget-content span6">

      <div class="control-group">
        <label class="control-label">Upload KTP : </label>
        <div class="controls">
          <input type="file" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Upload Passport : </label>
        <div class="controls">
          <input type="file" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Upload Kartu Keluarga : </label>
        <div class="controls">
          <input type="file" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">Upload Akta Nikah/Cerai/Kematian : </label>
        <div class="controls">
          <input type="file" name="nm_ibu_kandung"   class="span11"  />
        </div>
      </div>



    <!--content here-->
    </div>
    <div class="widget-content span6">
    <!--content here-->

          <div class="control-group">
            <label class="control-label">Upload PBB/HGB/SHM : </label>
            <div class="controls">
              <input type="file" name="nm_ibu_kandung"   class="span11"  />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Upload NPWP/SPT : </label>
            <div class="controls">
              <input type="file" name="nm_ibu_kandung"   class="span11"  />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Upload Rekening Koran : </label>
            <div class="controls">
              <input type="file" name="nm_ibu_kandung"   class="span11"  />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Upload Slip Gaji : </label>
            <div class="controls">
              <input type="file" name="nm_ibu_kandung"   class="span11"  />
            </div>
          </div>

  </div>

</div>

</div>



</div>



</div>


<div align="center">
<br>
<span class="label label-important"> PASTIKAN ANDA TELAH MEMBACA DAN MEMERIKSA SEMUA INPUTAN SEBELUM MENYIMPAN PERUBAHAN DATA INI! </span>
<br>
<br>

<div class="col-md-12">
<button type="submit" name="save" id="save" class="btn btn-block btn-primary"> Save </button>
</div>
</div>


</form>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Created by <a href="javascript::void(0);">Emah Sumiyati</a> </div>
</div>
<!--end-Footer-part-->

</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {


        /*upload ksp*/
        $("#upload_ksp").on("change",function(){
          var filename = $('#upload_ksp').val().replace(/C:\\fakepath\\/i, '')
          $("#fupload_ksp").val(filename);

        });

        $("#upload_ksp").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var imgksp = $("#imgksp");
          imgksp.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++)
              {
                var readerimgksp = new FileReader();
                readerimgksp.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(imgksp);
                }
                imgksp.show();
                readerimgksp.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
         /*upload ksp*/



         /*upload kstp*/
        $("#upload_kstp").on("change",function(){
        var filename = $('#upload_kstp').val().replace(/C:\\fakepath\\/i, '')
          $("#fupload_kstp").val(filename);

        });

        $("#upload_kstp").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var imgkstp = $("#imgkstp");
          imgkstp.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++)
              {
                var readerimgkstp   = new FileReader();
                readerimgkstp.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(imgkstp);
                }
                imgkstp.show();
                readerimgkstp.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
         /*upload kstp*/




     /*upload standarisasi*/
     $("#upload_standarisasi").on("change",function(){
     var filename = $('#upload_standarisasi').val().replace(/C:\\fakepath\\/i, '')
          $("#fupload_standarisasi").val(filename);

        });

        $("#upload_standarisasi").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var imgstd = $("#imgstd");
          imgstd.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++)
              {
                var readerimgstd = new FileReader();
                readerimgstd.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(imgstd);
                }
                imgstd.show();
                readerimgstd.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
         /*upload standarisasi*/




      });

$("#opt_nama").on("change",function(){
      //alert($(this).val());
      var valpeg = $("#opt_nama").val();
      $.ajax({
        url:"<?php echo base_url('idea_proposal/get_val_peg');?>",
        data:{valpeg:valpeg},
        type:"POST",
        success:function(data){
          var isian = JSON.parse(data);
          console.log(isian);
          $("#nrp").val(isian.nrp);
          $("#seksi").val(isian.seksi);
          $("#hid_opt_nama").val(isian.nm_pegawai);
        }
      });
    });

</script>

@extends('materi/layout/main')
@section('sidebar')
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a href="materi/index" class="">
                          <i class="icon_book_alt"></i>
                          <span>Materi</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="assignment/index" class="">
                          <i class="icon_clipboard"></i>
                          <span>Tugas</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="presence/presence" class="">
                          <i class="icon_check"></i>
                          <span>Presensi</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
@endsection
@section('content')

<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/">Home</a></li>
              <li><i class="fa fa-book"></i>Presensi</li>
            </ol>
          </div>
        </div>
        

        <div class="row">
          <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="container">
                <form method="post" action="/presence/store">
                @csrf
                <div class="mb-3">
                  <label for="nama_siswa" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama_siswa" placeholder="Masukkan Nama Siswa" name="nama_siswa">
                </div>
                <div class="mb-3">
                  <label for="status" class="form-label">Status</label>
                  <input type="text" class="form-control" id="status" placeholder="Masukkan Status Kesehatan: Sehat/Tidak Sehat" name="status">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                </div>
              </div>
            </section>
            <!--Project Activity end-->
          </div>
        </div><br><br>

  </section>
  @endsection


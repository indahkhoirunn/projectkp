@extends('materi/layout/main')
@section('sidebar')
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
           <li class="sub-menu">
            <a class="" href="{{ url('/guru')}}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          
            <li class="sub-menu">
            <a href="{{ url('/materi')}}" class="">
                          <i class="icon_book_alt"></i>
                          <span>Materi</span>
                      </a>
          </li>
          
            <li class="active">
            <a href="{{ url('/assignment')}}" class="">
                          <i class="icon_clipboard"></i>
                          <span>Tugas</span>
                      </a>
          </li>
         
            <li class="sub-menu">
            <a href="{{ url('/presence')}}" class="">
                          <i class="icon_check"></i>
                          <span>Presensi</span>
                      </a>

        </ul>

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
            <h3 class="page-header"><i class="fa fa-book"></i> Form Tambah Tugas</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/">Home</a></li>
              <li><i class="fa fa-book"></i>Tugas</li>
            </ol>
          </div>
        </div>
        

        <div class="row">
          <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="container">
                <form method="post" action="/assignment">
                @csrf
                <div class="mb-3">
                  <label for="nama_tugas" class="form-label">Nama Tugas</label>
                  <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan Nama Tugas" name="nama_tugas">
                </div>
                <div class="mb-3">
                  <label for="lampiran" class="form-label">Konten Tugas</label>
                  <input type="text" class="form-control" id="lampiran" placeholder="Masukkan Isi Tugas" name="lampiran">
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


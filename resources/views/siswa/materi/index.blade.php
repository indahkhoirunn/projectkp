@extends('materi/layout/main')
@section('sidebar')
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="sub-menu">
            <a class="" href="{{ url('/siswa')}}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                    </li>
          <li class="active">
          
          <a href="{{ url('/siswa/materi')}}" class="">
                          <i class="icon_book_alt"></i>
                          <span>Materi</span>
                      </a>
                    </li>
          </li>
          <li class="sub-menu">
            <a href="{{ url('/siswa/assignment')}}" class="">
                          <i class="icon_clipboard"></i>
                          <span>Tugas</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="{{ url('/siswa/presence') }}" class="">
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
            <h3 class="page-header"><i class="fa fa-book"></i> Materi</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/">Home</a></li>
              <li><i class="fa fa-book"></i>Materi</li>
            </ol>
          </div>
        </div>


        <br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
          <div class="col-lg-12 md-6 xs-3">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
              <div class="container">
                <div class="row">
                  <table class="table table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul Materi</th>
                        <th>File Pendukung</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($materis as $materi)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$materi->judul_materi}}</td>
                        <td>{{$materi->file_upload}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                      
                      
                  </table>
                </div>
              </div>
            </section>
            <!--Project Activity end-->
          </div>
          </div>
        </div><br><br>


          
        <!-- project team & activity end -->
    <!--main content end-->
  </section>
  @endsection

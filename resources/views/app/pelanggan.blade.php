@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Package Management</h1>
    </div>
    <div class="section-body">
      <h2 class="section-title">List of Packages Question</h2>
      <p class="section-lead">This page is for managing packages including questions and answers.</p>
      <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-md">
              <thead>
              <tr>
                <th>No.</th>
                <th>ID</th>
                <th>ID Nama</th>
                <th>Uptime</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($data as $d)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d['idpel'] }}</td>
                <td>{{ $d['name'] }}</td>
                <td>{{ $d['uptime'] }}</td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    {{ $data->links() }}  
    </div>
  </section>
@endsection

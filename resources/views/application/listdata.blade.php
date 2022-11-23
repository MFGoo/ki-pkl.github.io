@extends('layout.main')
@section('content')

<div class="content bg-light ">
<div class="d-flex justify-content-between mx-5 mt-5" >
<div class="w-75 me-4">

<br>
<h5>
    <div class="fw-blood">
        <i class="fa-solid fa-arrow-left me-2"></i>
        DAFTAR PKL
    </div>
</h5>
<br>

    <div class='row'>
        <div class='col-4'>
        <div class="form-group mb-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
                    <input type="text" placeholder="Cari PKL Disini!!" class="form-control col
                    -1">
                    
                </div>
            </div>
        </div>
        <div class='col-4'>
            <button class='btn-light'><i class="fas fa-filter"></i>Filter</button>
            <button class='btn-light'><i class="fas fa-trash"></i></button>
        </div>
        <div class='col-2 justify-content-end'>
          <button calss='btn btn-light'><i class="fas fa-add"></i>Tambah Daftar</button>
        </div>
    </div>

<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Aset</th>
      <th scope="col">Jenis Aset</th>
      <th scope="col">Harga Satuan (IDR.)</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input class ='form-check-input mt-0'type="checkbox"></th>
      <td>Ucok</td>
      <td>Otto</td>
      <td>5000</td>
      <td><span class='btn btn-sm btn-outline-success'>Aktif</span></td>
      <td>
        <a href="" class='btn btn-sm btn-dark'><i class="fas fa-pencil"></i></a>
        <a href="" class='btn btn-sm btn-danger'><i class="fas fa-trash"></i></a>
      </td>

    </tr>
    <tr>
      <th scope="row"><input class ='form-check-input mt-0'type="checkbox"></th>
      <td>Asep</td>
      <td>Thornton</td>
      <td>50000</td>
      <td><span class='btn btn-sm btn-outline-success'>Aktif</span></td>
      <td>
        <a href="" class='btn btn-sm btn-dark'><i class="fas fa-pencil"></i></a>
        <a href="" class='btn btn-sm btn-danger'><i class="fas fa-trash"></i></a>
      </td>
      
    </tr>
    <tr>
      <th scope="row"><input class ='form-check-input mt-0'type="checkbox"></th>
      <td >Larry the Bird</td>
      <td>YES</td>
      <td>10000</td>
      <td><span class='btn btn-sm btn-outline-success'>Aktif</span></td>
      <td>
        <a href="" class='btn btn-sm btn-dark'><i class="fas fa-pencil"></i></a>
        <a href="" class='btn btn-sm btn-danger'><i class="fas fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>

@endsection
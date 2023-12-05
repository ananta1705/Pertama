@extends('index')
    @section('content')
    
    <div class="row justify-content-center">
          <div class="col-8">
          <div class="card-body">
          <form action="/tambahtrans" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Barang</h4>
                    <br>
                    <form class="forms-sample">
                      <div class="form-group">
                  <div class="form-group">
                  
                  <div class="form-group">
                    <h5 for="exampleInputPassword1">nama kasir</h5>
                  <input type="txt" class="form-control" value="{{ $kasir->namakasir }}" id="exampleInputnokwh" aria-describedby="no kwh" readonly>
                  <input type="hidden" name="idkasir" id="idkasir" class="form-control" value="{{ $kasir->idkasir }}" id="exampleInputnokwh" aria-describedby="no kwh">
                  <br>
                  </div>
                  <div class="form-group">
                    <h5 for="exampleInputPassword1">idbarang</h5>
                    <!-- <input type="txt" name="idbarang" id="idbarang" class="form-control" id="exampleInputnokwh" aria-describedby="no kwh"> -->
                    <select name="idbarang" class="form-control" id="idbarang" >
                      <option value="">-pilih Barang-</option>
                      @foreach ($barang as $item )
                      <option value="{{ $item->idbarang }}">{{ $item->namabarang }}</option>
                      @endforeach
                    </select>
                  </div>
                  <br>
                  <div class="form-group">
                    <h5 for="exampleInputPassword1">qty</h5>
                    <input type="txt" name="gty" id="gty" class="form-control" id="exampleInputnokwh" aria-describedby="no kwh">
                  </div>
                  <br>
                  <div class="col-md-4">
          <!-- <label for="harga_barang" class="form-label">Harga</label>
          <input type="number" id="harga_barang" class="form-control">
        </div>
        <div class="col-md-4">
          <label for="qty" class="form-label">Kuantitas</label>
          <input type="number" id="qty" class="form-control">
        </div>
       </div>
       <div class="row">
        <div class="col-md-8">
          <label for="sub_total" class="form-label">Sub Total</label>
          <input type="number" id="sub_total" class="form-control" readonly disabled>
        </div> -->
                  <div class="card-footer">
                <div class="row">
                    <div class="col-8">
                        </br>
                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>
          </form>
          </div>
  
          

          @endsection

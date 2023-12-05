@extends('index')
    @section('content')
    
    <a href="/tambahtrans" type="button" class="btn btn-warning">tambah</a></td>
            <table class="table" align="center">
            <table class="table table-hover">
                <thead>
                  <tr>
                          <th scope="col">nama kasir</th>
                          <th scope="col">nama barang</th>
                          <th scope="col">idbarang</th>
                          <th scope="col">qty</th>
                          <th scope="col">totalbayar</th>
                          <th scope="col">tgltransaksi</th>
                            <th scope="col">OPSI</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($trans as $row)
                      <tr>
                      <td>{{ $row->tbkasirs->namakasir}}</td>
                      <td>{{ $row->tbbarang->namabarang}}</td>
                      <td>{{ $row->idbarang}}</td>
                      <td>{{ $row ['gty']}}</td>
                      <td>{{ $row->totalbayar}}</td>
                      <td>{{ $row->tgltransaksi}}</td>
                      <td>
                 <a href="/edit/{{ $row->idbarang}}" class="btn btn-info " data-id=" ">EDIT</a>
                 <a href="/transaksi/{{ $row->idtransaksi}}" class="btn btn-danger delete" data-id=" ">DELETE</a>
                      </td>    
                </tr>
                @endforeach
                </tbody>
              </table>
@endsection
               
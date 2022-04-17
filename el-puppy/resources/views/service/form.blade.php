<!DOCTYPE html>
<html>
    <head>
        <title>Form
            {{ $title }}
            Service</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
            crossorigin="anonymous">
        <link href="{!! asset('css/service.css') !!}" rel="stylesheet"/>
        <script src="{{ asset('assets/jquery.js') }}"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
            crossorigin="anonymous"></script>
    </head>
    <body style="width:95%">
        <div class="row justify-content-center" style="margin-top:13%">
            <div class="col-3">
                <h4>Form
                    {{ $title }}
                    Service</h4>
                <form class="border" style="padding:20px" method="POST" action="/{{ $action }}">
                    @csrf
                    <input type="hidden" name="_method" value="{{ $method }}"/>
                    {{-- <div class="form-group">
                        <label>id</label>
                        <input
                            type="number"
                            name="id"
                            class="form-control"
                            value="{{ isset($data)?$data->id:'' }}"/>
                    </div> --}}
                    <div class="form-group">
                        <label class="lab">Nama</label>
                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            value="{{ isset($data)?$data->nama:'' }}"/>
                    </div>
                    <div class="form-group">
                        <label class="lab">Alamat</label>
                        <input
                            type="text"
                            name="alamat"
                            class="form-control"
                            value="{{ isset($data)?$data->alamat:'' }}"/>
                    </div>
                    <div class="form-group">
                        <label class="lab">Nomor telepon</label>
                        <input
                            type="number"
                            name="nomorTelepon"
                            class="form-control"
                            value="{{ isset($data)?$data->nomorTelepon :'' }}"/>
                    </div>
                    <div class="form-group">
                        <label class="lab">Jenis Perawatan</label>
                        <input
                            type="text"
                            name="jenisPerawatan"
                            class="form-control"
                            value="{{ isset($data)?$data->jenisPerawatan:'' }}"/>
                    </div>
                    <div class="form-group">
                        <label class="lab">Jam Service</label>
                        <input
                            type="text"
                            name="jamService"
                            class="form-control"
                            value="{{ isset($data)?$data->jamService:'' }}"/>
                    </div>
                    <div class="form-group">
                        <label class="lab">Catatan</label>
                        <input
                            type="text"
                            name="Catatan"
                            class="form-control"
                            value="{{ isset($data)?$data->Catatan:'' }}"/>
                    </div>
                    <div style="text-align:right">
                        <button class="main-btn">Book</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

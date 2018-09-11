
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <?php $fl = \Input::get('politeknik')?>
                    <?php $fl_status_approved = \Input::get('status') ? : 0?>
                    <div class="col-sm-6">
                        <?php $flpoliteknik = \App\Politeknik::find($fl); ?>
                        @if($flpoliteknik)
                        Politeknik : <strong>{{$flpoliteknik->politeknik}} </strong><br>
                        Jumlah Pendaftar : <strong>{{$data->count()}}</strong>
                        @endif
                    </div>
                    <div class="col-sm-3">
                        <label for="status">Status Verifikasi</label>
                        <select name="" class="form-control" id="status" onchange="pilih()">
                            <option value="0" @if($fl_status_approved == 0) selected @endif>Belum mengajukan</option>
                            <option value="1" @if($fl_status_approved == 1) selected @endif>Menunggu verifikasi</option>
                            <option value="2" @if($fl_status_approved == 2) selected @endif>Terverifikasi</option>
                        </select>
                    </div>
                    <div class="col-sm-3 pull-right">
                        <label for="politeknik">Filter politeknik</label>
                        <select name="" class="form-control" id="politeknik" onchange="pilih()">
                            <option value="0">Semua Politeknik</option>
                            @foreach($list_politeknik as $politeknik)
                            <option value="{{$politeknik->id}}" @if($fl == $politeknik->id) selected @endif>{{$politeknik->politeknik}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if($flpoliteknik)
<div class="row w-no-padding margin-b-30">
    <?php $fl_kategory = \Input::get('kategori');?>
    <?php $status_approved = \Input::get('status') ? : 0;?>
    @foreach($list_kategori as $kategori)
    @if(!$flpoliteknik->getJumlahPeserta($kategori->id, $status, $status_approved)) <?php continue; ?> @endif
    <?php $url =  '?politeknik='.$fl.'&kategori='.$kategori->id.'&status='.$status_approved;?>
    <div class="col-md-3">
        <a href="{{url('ecodeeepis/pendaftaran/'.$ctype.$url)}}">
        <div class="widget  @if($fl_kategory == $kategori->id) bg-warning @else bg-light @endif">
            <div class="row row-table ">
                <div class="margin-b-30">
                    <h2 class="margin-b-5">{{$kategori->kategori}}</h2>
                    <p class="text-muted">Total Peserta</p>
                    <span class="float-right text-primary widget-r-m">{{$flpoliteknik->getJumlahPeserta($kategori->id, $status, $status_approved)}}</span>
                </div>
            </div>
        </a>
        </div>
    </div>
    @endforeach
</div>
@endif
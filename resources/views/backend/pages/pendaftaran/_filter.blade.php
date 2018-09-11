
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <?php $fl = \Input::get('politeknik')?>

                    <div class="col-sm-9">
                        <?php $flpoliteknik = \App\Politeknik::find($fl); ?>
                        @if($flpoliteknik)
                        Politeknik : <strong>{{$flpoliteknik->politeknik}} </strong><br>
                        Jumlah Pendaftar : <strong>{{$data->count()}}</strong>
                        @endif
                    </div>
                    <div class="col-sm-3pull-right">
                        <label for="filter">Filter politeknik</label>
                        <select name="" class="form-control" id="filter" onchange="pilih(this.value)">
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
    @foreach($list_kategori as $kategori)
    @if(!$flpoliteknik->getJumlahPeserta($kategori->id, $status)) <?php continue; ?> @endif
    <?php $url =  '?politeknik='.$fl.'&kategori='.$kategori->id;?>
    <div class="col-md-3">
        <a href="{{url('ecodeeepis/pendaftaran/daftar'.$url)}}">
        <div class="widget  @if($fl_kategory == $kategori->id) bg-warning @else bg-light @endif">
            <div class="row row-table ">
                <div class="margin-b-30">
                    <h2 class="margin-b-5">{{$kategori->kategori}}</h2>
                    <p class="text-muted">Total Peserta</p>
                    <span class="float-right text-primary widget-r-m">{{$flpoliteknik->getJumlahPeserta($kategori->id, $status)}}</span>
                </div>
            </div>
        </a>
        </div>
    </div>
    @endforeach
</div>
@endif
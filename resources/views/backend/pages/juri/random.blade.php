<div class="modal-body">
    <input type="hidden" name="juri_id" value="{{$juri}}" id="juri-id">
    <div class="form-group">
        <label for="status">Jumlah tim untuk dikoreksi oleh juri <strong id="nama-juri-modal"></strong></label> <br>
        <input type="number" class="form-control" name="jumlah_random" id="jumlah-random">
        <small>Jumlah tim maksimal yang tersedia <b id="max">{{$jumlah}}</b> tim</small>
    </div>
    <div class="clearfix">
        <button type="button" class="btn btn-sm btn-primary float-left" onclick="random()">Tampilkan Tim (Random)</button>
    </div>
    <br>
    <div id="body-table">
        @include('backend.pages.juri._form-random')
    </div>
</div>


<script>
    function store() {
        var data = $( '#form-set-juri' ).serialize();
        $.ajax({
            url: '{{url("ecodeeepis/juri/set-juri")}}',
            method: 'POST',
            data: data,
            success: function(res) {
                if (res == 1) {
                    $('#openModal').modal('hide');
                }
            },
            error: function(res) {
                console.log(res);
                alert('Something went wrong!');
            },
        })
    }
</script>
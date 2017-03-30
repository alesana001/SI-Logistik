@extends('layout')

@section('title')
	tambah transaksi
@stop

@section('content')
	<h1>Tambahkan Transaksi</h1><br/>
	<form class="form-horizontal" action="/transaksi/tambah/do" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label class="control-label col-sm-2" for="tanggal">Tanggal:</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Enter email" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="jenistransaksi">Jenis Transaksi:</label>
			<div class="col-sm-10">
				<select class="form-control" id="jenistransaksi" name="jenistransaksi" required>
					<option value="" disabled selected>Pilih jenis</option>
					<option>keluar</option>
					<option>masuk</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pengirim">Pengirim:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Pengirim" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="penerima">Penerima:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="penerima" name="penerima" placeholder="Penerima" required>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="asramatujuan">Asrama Tujuan:</label>
			<div class="col-sm-10">
				<select class="form-control" id="asramatujuan" name="asramatujuan" required>
					<option value="" disabled selected>Asrama Tujuan</option>
					<option>Kidang Pananjung</option>
					<option>Kanayakan</option>
					<option>Sangkuriang</option>
					<option>Internasional</option>
					<option>Jatinangor</option>
				</select>
			</div>
		</div>
		<div class="input_fields_wrap">
			<div name="group-barang">
				<div class="form-group">
					<label class="control-label col-sm-2" for="namabarang">Barang:</label>
					<div class="col-sm-10">
						<select class="form-control" id="barang" name="barang[]" required>
							<option value="" disabled selected>Nama Barang</option>
							@foreach ($names as $name)
							<option value="{{$name->idbarang}}">{{$name->nama}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="jumlah">Jumlah:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="jumlah" name="jumlah[]" placeholder="Jumlah Barang" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="keterangan">Keterangan:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="keterangan" name="keterangan[]" placeholder="Keterangan Barang" required>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group"><div class="col-sm-offset-2 col-sm-10"><button class="btn btn-default add_field_button">Tambahkan Barang</button></div></div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>
@stop

@section('js')
	<script type="text/javascript">
	$(document).ready(function() {
	    var max_fields      = 10; //maximum input boxes allowed
	    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
	    var add_button      = $(".add_field_button"); //Add button ID
	    
	    var x = 1; //initlal text box count
	    $(add_button).click(function(e){ //on add input button click
	        e.preventDefault();
	        if(x < max_fields){ //max input box allowed
	            x++; //text box increment
	            $(wrapper).append(`
			<div name="group-barang">
				<div class="form-group">
					<label class="control-label col-sm-2" for="namabarang">Barang:</label>
					<div class="col-sm-10">
						<select class="form-control" id="barang" name="barang[]" required>
							<option value="" disabled selected>Nama Barang</option>
							@foreach ($names as $name)
							<option value="{{$name->idbarang}}">{{$name->nama}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="jumlah">Jumlah:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="jumlah" name="jumlah[]" placeholder="Jumlah Barang" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="keterangan">Keterangan:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="keterangan" name="keterangan[]" placeholder="Keterangan Barang" required>
					</div>
				</div>
				<a href="#" class="col-sm-offset-2 col-sm-10 remove_field">Remove</a><br/>
			</div>`); //add input box
	        }
	    });
	    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});
	</script>
@stop
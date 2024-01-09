@extends('layouts.app')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
 @if ($survey)
 <div class="d-flex justify-content-between">
    <h2>{{$survey->name}}</h2>
    <div>
        <h5 class="text-light-danger">Tenggat Survei {{Carbon::parse($survey->start_at)->locale('id_ID')->isoFormat('DD MMMM Y')}} - {{Carbon::parse($survey->end_at)->locale('id_ID')->isoFormat('DD MMMM Y')}}</h5>
    </div>
</div>
<form action="{{Route('alumni.submit.survey',['survey' => $survey->id])}}" method="POST" class="card">
    @csrf
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="graduation_year" class="form-label">Nama ( dengan gelar jika ada )</label>
                <input type="text" name="name" id="graduation_year" placeholder="Ex : 2023" class="form-control">
            </div>
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="graduation_year" class="form-label">Tahun Lulus</label>
                <input type="number" name="graduation_year" id="graduation_year" placeholder="Ex : 2023" class="form-control">
            </div>
            <div class="col-lg-6 col-sm-12 mb-3">
                <label for="phone_number" class="form-label">No Telepon</label>
                <input type="text" name="phone_number" placeholder="Ex : 086754...." class="form-control" id="phone_number">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <label for="create-name" class="form-label">Alamat Link/ URL ( Link Website atau Lainya )</label>
                <input type="text" name="url_address" id="create-name" placeholder="Masukan Link" class="form-control">
            </div>
            <div class="col-12 mb-3">
                <label for="" class="form-label">Sebutkan dan Jelaskan Kegiatan Anda ( Jelaskan Secara Rinci )</label>
                <textarea name="activity" class="form-control" placeholder="Deskripsi.." id="" cols="30" rows="10"></textarea>
            </div>
            <div class="col-lg-4 col-sm-12 mb-3">
                <label for="create-tahun-lulus" class="form-check-label">Status Saat Ini</label>
                <div class="gap-3">
                    <input type="radio" name="current_activity" id="kerja" value="kerja" class="form-check-input">  <label class="form-check-label" for="kerja">
                        Kerja
                      </label>                        
                    <input type="radio" name="current_activity" id="kuliah" value="kuliah" class="form-check-input">  <label class="form-check-label" for="kuliah">
                        Kuliah
                      </label>
                    
                    <input type="radio" name="current_activity" id="tidak bekerja" value="tidak bekerja" class="form-check-input">  <label class="form-check-label" for="tidak bekerja">
                        Tidak Bekerja
                      </label>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 mb-3 gap-4">
                <label for="create-tahun-lulus" class="form-check-label">Akan Menghadiri Reuni Alumni (jika ada) ?</label>
                <div class="gap-3">
                    <input type="radio" name="alumni_gathering" id="Ya" value="Ya" class="form-check-input">  <label class="form-check-label" for="Ya">
                        Ya
                      </label>                        
                    <input type="radio" name="alumni_gathering" id="Tidak " value="Tidak " class="form-check-input">  <label class="form-check-label" for="Tidak ">
                        Tidak 
                      </label>
                    
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 mb-3">
                <label for="create-tahun-lulus" class="form-label">Tempat Tinggal Saat Ini</label>
                <input type="text" name="city" class="form-control" id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <label for="create-name" class="form-label">Email</label>
                <input type="email" name="email" id="create-name" placeholder="Masukan Email" class="form-control">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <label for="create-email" class="form-label">Akun Facebook </label>
                <input type="text" name="facebook" id="create-email" placeholder="Masukan Akun Facebook" class="form-control">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn-primary btn">Simpan</button>
        </div>
    </div>
</form>
 @else
 <div class="d-flex justify-content-center">
    <div>
        <img src="{{ asset('showNoData.png') }}" alt="">
        <h5 class="text-center">Belum Ada Survei Ditambahkan!!</h5>
    </div>
</div>
 @endif
@endsection
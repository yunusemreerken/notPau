@extends('layouts.hesabim')



@section('content')
<div class="content">
  <div class="container">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    <!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Not Bilgileri</h4>


                <form action="not-ekle" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <label>Notları Seçin </label>
                  <input type="file" name="filename[]" id="images" multiple >



                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Ders Adı</label>
                            <input type="text" name="ders_adi" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Üniversite</label>
                            <input type="text" name="universite" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Fakülte</label>
                            <input type="text" name="fakulte" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Bölüm</label>
                            <input type="text" name="bolum" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Dönem</label>
                            <input type="text" name="donem" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Yıl</label>
                            <input type="text" name="yil" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Öğretim Üyesi</label>
                            <input type="text" name="ogretim_uyesi" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Fiyat</label>
                            <input type="text" name="fiyat" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-2 col-form-label">Notun Konusu ve İçeriği</label>
                      <div class="col-10">
                        <textarea class="form-control" name="konu_icerik" rows="5"></textarea>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-success">Yükle</button>
                </form>
                <hr>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container -->

</div> <!-- content -->
@endsection

@extends('layouts.hesabim')

@section('content')
<div class="content">
  <div class="container">
    <!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">İletişim Bilgileri</h4>


                <form action="iletisim-ekle" method="post">
                  {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Email*</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Cep</label>
                            <input type="number" name="telefon" class="form-control" id="inputPassword4" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputPassword4" class="col-form-label">Şehir</label>
                          <input type="text" name="sehir" class="form-control" id="inputPassword4" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputPassword4" class="col-form-label">Posta kodu</label>
                          <input type="number" name="posta_kodu" class="form-control" id="inputPassword4" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-2 col-form-label">Adres</label>
                      <div class="col-10">
                        <textarea class="form-control" name="adres" rows="5"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success">Güncelle</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container -->

</div> <!-- content -->
@endsection

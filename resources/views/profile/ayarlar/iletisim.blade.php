@extends('layouts.adminMaster')

@section('content')
<div class="content">
  <div class="container">
    <!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">İletişim Bilgileri</h4>


                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Email*</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Cep</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputPassword4" class="col-form-label">Şehir</label>
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputPassword4" class="col-form-label">Posta kodu</label>
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-2 col-form-label">Adres</label>
                      <div class="col-10">
                        <textarea class="form-control" rows="5"></textarea>
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

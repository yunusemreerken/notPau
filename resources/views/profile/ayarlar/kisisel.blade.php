@extends('layouts.hesabim')

@section('content')
<div class="content">
  <div class="container">
    <!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Kişisel Bilgiler</h4>


                <form action="kisisel-ekle" method="post">
                {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">İsim</label>
                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="col-form-label">Profil Fotoğrafı</label>
                            <input type="file" name="image" class="form-control" id="inputEmail4" placeholder="">
                        </div>

                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputAddress2" class="col-form-label">Doğum Günü</label>
                          <input type="date" name="dogum_gunu" class="form-control" id="inputAddress2" placeholder="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState" class="col-form-label">Cinsiyet</label>
                        <select id="inputState" name="cinsiyet" class="form-control">
                          <option value="erkek">erkek</option>
                          <option value="kadin">kadın</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Hakkımda</label>
                        <div class="col-10">
                            <textarea class="form-control" name="hakkimda" rows="5"></textarea>
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

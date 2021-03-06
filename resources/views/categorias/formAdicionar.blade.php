@include('head')
<div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 mb-5">



          <form action="{{'/categorias/adicionar'}}" method="POST" class="p-5 bg-white">
            @csrf
            <h2 class="h4 text-black mb-5">Insira categoria sua ideia</h2>

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="nome">Categoria</label>
                <input type="text" id="nome" class="form-control rounded-0" name="nome" placeholder="Categoria">
                @error('autor')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>


            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Enviar Ideia" class="btn btn-primary mr-2 mb-2">
              </div>
            </div>


          </form>
        </div>

      </div>

    </div>
  </div>
@include('footer')

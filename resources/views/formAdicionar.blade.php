@include('head')
<div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3">Sua ideia de APP</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-7 mb-5">



          <form action="{{'/adicionar'}}" method="POST" class="p-5 bg-white">
            @csrf
            <h2 class="h4 text-black mb-5">Insira sua ideia</h2>

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="autor">Nome do autor</label>
                <input type="text" id="autor" class="form-control rounded-0" name="autor" placeholder="Autor">
                @error('autor')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="text-black" for="sobrenome">Sobrenome</label>
                <input type="text" id="sobrenome" class="form-control rounded-0" name="sobrenome" placeholder="Sobrenome">
              </div>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria" class="form-control" name="categoria_id">
                    <option value="">Selecione</option>

                    @foreach ($categorias as $categoria)

                        <option value="{{$categoria->id}}"> {{$categoria->nome}} </option>

                    @endforeach
                </select>

                @error('categoria_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!--<div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label>
                <input type="subject" id="subject" class="form-control rounded-0">
              </div>
            </div> -->

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="texto">Descreva sua ideia</label>
                <textarea name="texto" id="texto" cols="30" rows="7" class="form-control rounded-0" placeholder="Escreva aqui sua ideia ;)"></textarea>
                @error('texto')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
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

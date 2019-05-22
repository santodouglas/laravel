
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="..//fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
@include('../../head')
<div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3">Sua ideia de APP</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-7 mb-5">
            <a class="btn btn-primary mr-2 mb-2 float-right" href="{{url('/')}}">< Voltar</a>



          <form action="{{'/editar'}}" method="POST" class="p-5 bg-white">
            @csrf
            <h2 class="h4 text-black mb-5">Insira sua ideia</h2>
            <input type="hidden" name="id" value="{{$idea->id}}">

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="autor">Nome do autor</label>
                <input type="text" id="autor" class="form-control rounded-0" name="autor" value="{{$idea->autor}}" placeholder="Autor">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="sobrenome">Sobrenome</label>
                <input type="text" id="sobrenome" class="form-control rounded-0" name="sobrenome" placeholder="Sobrenome">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="email">Email</label>
                <input type="email" id="email" class="form-control rounded-0">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="texto">Descreva sua ideia</label>
                <textarea name="texto" id="texto" cols="30" rows="7" class="form-control rounded-0" placeholder="Escreva aqui sua ideia ;)">
                    {{$idea->texto}}
                </textarea>
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

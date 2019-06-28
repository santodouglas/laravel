@include('head')
<div class="site-section testimonial-wrap" id="testimonials-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3">Ideias</h2>
        </div>
      </div>
    </div>

    <!-- aqui -->

    <div>
        <a href="{{url('/categorias/form-adicionar')}}" class="btn btn-primary float-right mb-2">Adicionar Ideia</a>
    </div>
    <table class="table ">
        <tr>
            <th>Id</th>
            <th>Categoria</th>

        </tr>
        @forelse ($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}} </td>
            <td>{{$categoria->nome}} </td>

            <td>
                <a class="btn btn-outline-secondary" href="{{url('/categorias/editar/'.$categoria->id)}}">Editar</a>
                <a class="btn btn-outline-secondary" href="{{url('/categorias/excluir/'.$categoria->id)}}">Excluir</a>
            </td>

        </tr>

        @endforeach
        <td>id</td>
         <td>Categoria </td>

    </table>
    <!-- aqui -->

  </div>
@include('footer')

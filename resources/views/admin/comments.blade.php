@extends('layout_admin')

@section('content')
  <div class="container">

      <div class="row">
          <div class="col-lg-12 text-center">
              <h1>Comentarios del Profesor {{ isset($profesor['Nombre']) ? $profesor['Nombre'] : ' ' }} {{ isset($profesor['APaterno']) ? $profesor['APaterno'] : ' ' }}</h3></h1>
              <ul class="list-unstyled">
                <h3><strong>Sistema de evaluacion Docente UTC.</strong></h3>
              </ul>
          </div>
      </div>
      <br><br><br>

      @foreach($comentarios as $key => $value)
          <table class="table">
          <thead>
          </thead>
          <tbody>
            <tr class="active">
              <td><h3 style="padding-left: 20px;">{{ isset($value->comentario) ? $value->comentario : ' ' }}</h3></td>
            </tr>
            <tr class="info">
              <td><p style="float: right; padding-right: 17px;">Fecha: {{ isset($value->created_at) ? $value->created_at : ' ' }}</p></td>
            </tr>
          </tbody>
        </table>
        <br><br>
      @endforeach 
  </div>

  <br><br><br><br><br><br>
@endsection    
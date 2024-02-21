@extends('appAdmin')

@section('home')
    <h5 class="mb-2" style="text-align: center; background-color: rgb(141, 20, 20); padding: 40px; color: white; font-size: 40px"   >Centro De Estudios Tecnológicos Industrial Y De Servicios No.107</h5><br>
    <h4 style="text-align: center">Bienvenido orientador</h4>
    <div class="">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/home1.png') }}" class="d-block w-75 mx-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home2.png') }}" class="d-block w-75 mx-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/home3.png') }}" class="d-block w-75 mx-auto" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div><br><br>
    <div class="row" style="text-align: center">
      <div class='col-6' style="border-radius: 5px; border: 1px solid black; " onmouseover="this.style.backgroundColor='gray'" onmouseout="this.style.backgroundColor='white'" ><a href="{{ asset('alumno/consultar') }}" style="text-decoration: none; color:black">Justificantes</a>

      </div>
      <div class="col-6" style="border-radius: 5px; border: 1px solid black; " onmouseover="this.style.backgroundColor='gray'" onmouseout="this.style.backgroundColor='white'" > <a href="{{ asset('alumno/consultarPases') }}" style="text-decoration: none; color:black">Pases de Salida</a></div>
    </div>
              </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <hr class="bg-light">
        <div class="alert" style="background: chartreuse; color: black" role="alert">
            @if (Session::has('mensaje'))
                {{ Session::get('mensaje') }}
            @endif
        </div>
        <hr class="bg-light">
        <a href="{{ url('Homeworks/create') }}" class="btn" style="background: chartreuse; color: black;">Crear
            Tareas</a>
        <br><br>
        <label for="">
            <h3 class="text-light">Mis Tareas</h3>
        </label>
        <br><br>
        <table class="table table-hover table-dark table-responsive">
            <thead style="background: black; ">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">Nombre Estudiante</th>
                    <th scope="col">Descripcion de la tarea</th>
                    <th scope="col">Esatdo de la tarea</th>
                    <th scope="col">Fecha publicación de la tarea</th>
                    <th scope="col">Hora publicación de la tarea</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($GetHomeworks as $H)
                    <tr>
                        <td scope="col"> <i class="far fa-star" style="color: yellow"></i> </td>
                        <td scope="col"> {{ $H->id_homework }} </td>
                        <td scope="col"> {{ $H->Name_Student }} </td>
                        <td scope="col"> {{ $H->Description_Homework }} </td>
                        <td scope="col"> {{ $H->State_Homework }} </td>
                        <td scope="col"> {{ $H->Date_Homework }} </td>
                        <td scope="col"> {{ $H->Hour_Homework }} </td>
                        <td scope="col">
                            <a href="{{ url('/Homeworks/' . $H->id_homework . '/edit') }}" class="btn"
                                style="background: chartreuse; color: black;">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ url('/Homeworks/' . $H->id_homework) }}" method="POST" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn" style="background: red; color: white;"
                                    onclick="return confirm('¿Deseas borrarlo... ?')">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

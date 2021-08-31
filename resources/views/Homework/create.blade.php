@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('/Homeworks') }}" method="POST">
            @csrf
            <label for="" class="label-control">
                <h3 class="text-light">Crear Tareas</h3>
            </label>
            <hr class="bg-light">

            <label for="" class="text-light label-control">Nombre Studiante</label>
            <input type="text" name="Name_Student" class="form-control" placeholder="Nombre Studiante">
            <br><br>

            <label for="" class="text-light label-control">Descripción de la tarea</label>
            <input type="text" name="Description_Homework" class="form-control" placeholder="Titulo">
            <br><br>

            <div class="form-group">
                <label for="" class="text-light label-control">Estado de la tarea</label>
                <select class="form-control" name="State_Homework" id="exampleFormControlSelect1">
                    <option>Asigandas</option>
                    <option>Pendientes</option>
                    <option>Completadas</option>
                </select>
            </div>
            <br><br>

            <label for="" class="text-light label-control">Fecha de la tarea</label>
            <input type="date" name="Date_Homework" class="form-control" placeholder="Tema">
            <br><br>

            <label for="" class="text-light label-control">Hora de la tarea</label>
            <input type="time" name="Hour_Homework" class="form-control" placeholder="Tema">
            <br><br>

            <input type="submit" class="btn" style="background: chartreuse; color:black;" value="Crear Tareas">
            <a href="{{ url('Homeworks') }}" class="btn" style="background: black; color: white;">Regresar</a>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('/Homeworks/' . $HomeworkEditData->id_homework) }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}
            <label for="" class="label-control">
                <h3 class="text-light">Editar Tareas</h3>
            </label>
            <hr class="bg-light">

            <label for="" class="text-light label-control">Nombre Estudiante</label>
            <input type="text" name="Name_Student" class="form-control" value="{{ $HomeworkEditData->Name_Student }}" placeholder="Nombre Studiante">
            <br><br>

            <label for="" class="text-light label-control">Descripción de la tarea</label>
            <input type="text" name="Description_Homework" class="form-control" value="{{ $HomeworkEditData->Description_Homework }}" placeholder="Titulo">
            <br><br>

            <div class="form-group">
                <label for="" class="text-light label-control">Estado de la tarea</label>
                <select class="form-control" name="State_Homework" id="exampleFormControlSelect1">
                    <option value="{{ $HomeworkEditData->State_Homework }}">Asigandas</option>
                    <option value="{{ $HomeworkEditData->State_Homework }}">Pendientes</option>
                    <option value="{{ $HomeworkEditData->State_Homework }}">Completadas</option>
                </select>
            </div>
            <br><br>

            <label for="" class="text-light label-control">Fecha de la tarea</label>
            <input type="date" name="Date_Homework" class="form-control" value="{{ $HomeworkEditData->Date_Homework }}" placeholder="Tema">
            <br><br>

            <label for="" class="text-light label-control">Hora de la tarea</label>
            <input type="time" name="Hour_Homework" class="form-control" value="{{ $HomeworkEditData->Hour_Homework }}" placeholder="Tema">
            <br><br>

            <input type="submit" class="btn" style="background: chartreuse; color:black;" value="Crear Tareas">
            <a href="{{ url('Homeworks') }}" class="btn" style="background: black; color: white;">Regresar</a>
        </form>
    </div>
@endsection

@extends('layouts.default')
@section('titulo_pagina','Nutriólogo | Frutas')
@section('titulo','Búsqueda de Frutas')
@section('subtitulo','Sección')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Sección</h3>
            </div>
            <div class="box-body">
                <h4>Hoy es el día del:</h4>
                <select>
                    <option> Manzana </option>
                    <option> Platano </option>
                    <option> Mandarina </option>
                </select>
                <button class="btn btn-primary">
                    Evaluar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection


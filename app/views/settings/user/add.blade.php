@extends('layout')

@section('title')
	Sistem Inventeris
@stop

@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah User
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Pengaturan</li>
            <li>User</li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       {{ Form::open() }}
        <div class="form-group">
            <label>Username*</label>
            {{ Form::text('username', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            <label>Email*</label>
            {{ Form::text('email', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            <label>Password*</label>
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
        <input type="submit" class="btn btn-success" value="Simpan"> 
        <input type="reset" class="btn btn-danger" value="Reset">
        {{ Form::close() }} 
    </section><!-- /.content -->
@stop
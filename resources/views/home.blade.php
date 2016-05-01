@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de ratas</div>

                <div class="panel-body">
                    

                {!! Form::open() !!}

                
                {!! Form::date('fecha_solicitud', \Carbon\Carbon::now()) !!}
                {!! Form::text('quien_solicita') !!}

                {!! Form::text('via_de_solicitud') !!}

                {!! Form::select('size', [

                    'L' => 'Large',
                    '2' => '2',
                    '3' => '3',
                    '4' => 'qwe',
                    'dsd' => 'qweq'

                ]) !!}


                {!! Form::label('email', 'E-Mail Address', ['class' => 'awesome']) !!}
                {!! Form::text('fecha_solicitud') !!}
                {!! Form::text('fecha_solicitud') !!}
                {!! Form::text('fecha_solicitud') !!}

                {!! Form::close() !!}








                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{!! Form::open(['url' => 'contact/form']) !!}

<div class=" {!! $errors->has('nom') ? 'has-error' : '' !!}">

    {!! Form::text('nom', null, ['placeholder' => 'Votre nom']) !!}

    {!! $errors->first('nom', '<small>:message</small>') !!}

</div>

<div class=" {!! $errors->has('email') ? 'has-error' : '' !!}">

    {!! Form::email('email', null, ['placeholder' => 'Votre email']) !!}

    {!! $errors->first('email', '<small>:message</small>') !!}

</div>

<div class=" {!! $errors->has('texte') ? 'has-error' : '' !!}">

    {!! Form::textarea ('texte', null, ['placeholder' => 'Votre message']) !!}

    {!! $errors->first('texte', '<small>:message</small>') !!}

</div>

{!! Form::select('theme', array('1' => 'algotithmie', '2' => 'programmation' )) !!}

{!! Form::submit('Envoyer !') !!}

{!! Form::close() !!}
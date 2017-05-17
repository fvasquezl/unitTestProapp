{!! Field::text('name') !!}
{!! Field::email('email') !!}
{!! Field::password('password') !!}
{!! Field::password('password_confirmation') !!}
{!! Field::select('role',config('options.roles') ) !!}



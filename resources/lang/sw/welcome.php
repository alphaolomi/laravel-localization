<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'login'=>'Ingia',
    'register'=>'Jiunge',
    'home'=>'Nyumbani',
    'welcome' => 'Laravel Localisation',
    'welcome' => 'Welcome, :NAME', // Welcome, DAYLE echo __('messages.welcome', ['name' => 'dayle']);
    'goodbye' => 'Goodbye, :Name', // Goodbye, Dayle
    'apples' => 'There is one apple|There are many apples',
    'mapples' => '{0} There are none|[1,19] There are some|[20,*] There are many', // echo trans_choice('messages.apples', 10);
    'minutes_ago' => '{1} :value minute ago|[2,*] :value minutes ago', // echo trans_choice('time.minutes_ago', 5, ['value' => 5]);

];

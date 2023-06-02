<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Il :attribute deve essere accettato.',
    'accepted_if' => 'Il :attribute deve essere accettato quando :other è :value.',
    'active_url' => 'Il :attribute non è un URL valido.',
    'after' => 'Il :attribute deve essere una data successiva al :date.',
    'after_or_equal' => 'Il :attribute deve essere una data successiva o uguale al :date.',
    'alpha' => 'Il :attribute può contenere solo lettere.',
    'alpha_dash' => 'Il :attribute può contenere solo lettere, numeri, trattini e underscores.',
    'alpha_num' => 'Il :attribute può contenere solo lettere e numeri.',
    'array' => 'Il :attribute deve essere un array.',
    'before' => 'Il :attribute deve essere una data antecedente al :date.',
    'before_or_equal' => 'Il :attribute deve essere una data antecedente o uguale al :date.',
    'between' => [
        'numeric' => 'Il :attribute deve essere compreso tra :min e :max.',
        'file' => 'Il :attribute deve essere compreso tra :min e :max kilobytes.',
        'string' => 'Il :attribute deve essere compreso tra :min e :max caratteri.',
        'array' => 'Il :attribute deve avere tra :min e :max elementi.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma di :attribute non corrisponde.',
    'current_password' => 'La password è incorretta.',
    'date' => 'Il :attribute non è una data valida.',
    'date_equals' => 'Il :attribute deve essere una data uguale a :date.',
    'date_format' => 'Il :attribute non corrisponde al formato :format.',
    'different' => 'Il :attribute e :other devono essere diversi.',
    'digits' => 'Il :attribute deve essere di :digits cifre.',
    'digits_between' => 'Il :attribute deve essere compreso tra :min e :max cifre.',
    'dimensions' => 'Il :attribute ha dimensioni di immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'email' => 'Il :attribute deve essere un indirizzo email valido.',
    'ends_with' => 'Il :attribute deve terminare con uno dei seguenti: :values.',
    'exists' => 'Il :attribute selezionato non è valido.',
    'file' => 'Il :attribute deve essere un file.',
    'filled' => 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'numeric' => 'Il :attribute deve essere maggiore di :value.',
        'file' => 'Il :attribute deve essere maggiore di :value kilobytes.',
        'string' => 'Il :attribute deve essere maggiore di :value caratteri.',
        'array' => 'Il :attribute deve avere più di :value elementi.',
    ],
    'gte' => [
        'numeric' => 'Il :attribute deve essere maggiore o uguale a :value.',
        'file' => 'Il :attribute deve essere maggiore o uguale a :value kilobytes.',
        'string' => 'Il :attribute deve essere maggiore o uguale a :value caratteri.',
        'array' => 'Il :attribute deve avere :value elementi o di più.',
    ],
    'image' => 'Il :attribute deve essere un\'immagine.',
    'in' => 'Il :attribute selezionato non è valido.',
    'in_array' => 'Il campo :attribute non esiste in :other.',
    'integer' => 'Il :attribute deve essere un intero.',
    'ip' => 'Il :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'Il :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Il :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'Il :attribute deve essere una stringa JSON valida.',
    'lt' => [
        'numeric' => 'Il :attribute deve essere minore di :value.',
        'file' => 'Il :attribute deve essere minore di :value kilobytes.',
        'string' => 'Il :attribute deve essere minore di :value caratteri.',
        'array' => 'Il :attribute deve avere meno di :value elementi.',
    ],
    'lte' => [
        'numeric' => 'Il :attribute deve essere minore o uguale a :value.',
        'file' => 'Il :attribute deve essere minore o uguale a :value kilobytes.',
        'string' => 'Il :attribute deve essere minore o uguale a :value caratteri.',
        'array' => 'Il :attribute non deve avere più di :value elementi.',
    ],
    'max' => [
        'numeric' => 'Il :attribute non può essere maggiore di :max.',
        'file' => 'Il :attribute non può essere maggiore di :max kilobytes.',
        'string' => 'Il :attribute non può essere maggiore di :max caratteri.',
        'array' => 'Il :attribute non può avere più di :max elementi.',
    ],
    'mimes' => 'Il :attribute deve essere un file di tipo: :values.',
    'mimetypes' => 'Il :attribute deve essere un file di tipo: :values.',
    'min' => [
        'numeric' => 'Il :attribute deve essere almeno :min.',
        'file' => 'Il :attribute deve essere almeno di :min kilobytes.',
        'string' => 'Il :attribute deve essere almeno di :min caratteri.',
        'array' => 'Il :attribute deve avere almeno :min elementi.',
    ],
    'not_in' => 'Il :attribute selezionato non è valido.',
    'not_regex' => 'Il formato del :attribute non è valido.',
    'numeric' => 'Il :attribute deve essere un numero.',
    'password' => 'La password è incorretta.',
    'present' => 'Il campo :attribute deve essere presente.',
    'regex' => 'Il formato del :attribute non è valido.',
    'required' => 'Il campo :attribute è obbligatorio.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other sia in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando :values sono presenti.',
    'required_without' => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno dei :values è presente.',
    'same' => 'Il :attribute e :other devono corrispondere.',
    'size' => [
        'numeric' => 'Il :attribute deve essere :size.',
        'file' => 'Il :attribute deve essere di :size kilobytes.',
        'string' => 'Il :attribute deve essere di :size caratteri.',
        'array' => 'Il :attribute deve contenere :size elementi.',
    ],
    'starts_with' => 'Il :attribute deve iniziare con uno dei seguenti: :values.',
    'string' => 'Il :attribute deve essere una stringa.',
    'timezone' => 'Il :attribute deve essere una zona valida.',
    'unique' => 'Il :attribute è già stato preso.',
    'uploaded' => 'Il :attribute non è riuscito a caricare.',
    'url' => 'Il formato del :attribute non è valido.',
    'uuid' => 'Il :attribute deve essere un UUID valido.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

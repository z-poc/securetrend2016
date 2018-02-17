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

    'accepted'             => ':attribute nem elfogadható.',
    'active_url'           => ':attribute egy nem létező URL.',
    'after'                => ':attribute későbbinek kell lennie, mint :date.',
    'after_or_equal'       => ':attribute nem lehet korábbi, mint :date.',
    'alpha'                => ':attribute csak betűket tartalmazhat.',
    'alpha_dash'           => ':attribute csak betűket, számokat és gondolatjeleket tartalmazhat.',
    'alpha_num'            => ':attribute csak betűket és számokat tartalmazhat.',
    'array'                => ':attribute array-nek kell lennie.',
    'before'               => ':attribute korábbinak kell lennie, mint :date.',
    'before_or_equal'      => ':attribute nem lehet későbbi, mint :date.',
    'between'              => [
        'numeric' => ':attribute kizárólag :min és :max közé eshet.',
        'file'    => ':attribute kizárólag :min és :max kilobytes közé eshet.',
        'string'  => ':attribute kizárólag :min és :max karakter közé eshet.',
        'array'   => ':attribute kizárólag :min és :max elem közé eshet.',
    ],
    'boolean'              => ':attribute mező kizárólag igaz vagy hamis lehet.',
    'confirmed'            => ':attribute megerősítés nem egyezik.',
    'date'                 => ':attribute nem valós dátum.',
    'date_format'          => ':attribute formátum nem egyezik :format formátummal.',
    'different'            => ':attribute és :other nem lehet azonos.',
    'digits'               => ':attribute kizárólag :digits számból állhat.',
    'digits_between'       => ':attribute kizárólag :min és :max közötti számból állhat.',
    'dimensions'           => ':attribute képmérete nem elfogadható.',
    'distinct'             => ':attribute mező dulikátumot tartalmaz.',
    'email'                => ':attribute nem létező e-mail cím.',
    'exists'               => 'A választott :attribute érvénytelen.',
    'file'                 => ':attribute kizárólag file lehet.',
    'filled'               => ':attribute mező kitöltése kötelező.',
    'image'                => ':attribute kizárólag kép lehet.',
    'in'                   => 'A választott :attribute érvénytelen.',
    'in_array'             => ':attribute mező nem szerepel :other -ban/ben.',
    'integer'              => ':attribute kizárólag egész szám lehet.',
    'ip'                   => ':attribute kizárólag valós IP-cím lhet.',
    'ipv4'                 => ':attribute kizárólag valós IPv4-cím lehet.',
    'ipv6'                 => ':attribute kizárólag valós IPv6-cím lehet.',
    'json'                 => ':attribute kizárólag valós JSON string lehet.',
    'max'                  => [
        'numeric' => ':attribute nem lehet nagyobb, mint :max.',
        'file'    => ':attribute nem lehet nagyobb, mint :max kilobytes.',
        'string'  => ':attribute nem lehet nagyobb, mint :max karakter.',
        'array'   => ':attribute nem lehet nagyobb, mint :max elem.',
    ],
    'mimes'                => ':attribute kizárólag :values típusú file lehet.',
    'mimetypes'            => ':attribute kizárólag :values típusú file lehet.',
    'min'                  => [
        'numeric' => ':attribute értékének legalább el kell érnie a :min értéket.',
        'file'    => ':attribute értékének legalább el kell érnie a :min kilobyte-ot.',
        'string'  => ':attribute értékének legalább el kell érnie a :min karaktert.',
        'array'   => ':attribute értékének legalább el kell érnie a :min elemet.',
    ],
    'not_in'               => 'A választott :attribute érvénytelen.',
    'numeric'              => ':attribute kizárólag szám lehet.',
    'present'              => ':attribute mezőnek léteznie kell.',
    'regex'                => ':attribute formátuma érvénytelen.',
    'required'             => ':attribute mező kitöltése kötelező.',
    'required_if'          => ':attribute mező kitöltése kötelező, amikor :other értéke :value.',
    'required_unless'      => ':attribute mező kitöltése kötelező, hacsak :other értéke :values.',
    'required_with'        => ':attribute mező kitöltése kötelező, amikor :values létezik.',
    'required_with_all'    => ':attribute mező kitöltése kötelező, amikor :values létezik.',
    'required_without'     => ':attribute mező kitöltése kötelező, amikor :values nem létezik.',
    'required_without_all' => ':attribute mező kitöltése kötelező, amikor :values egyike sem létezik.',
    'same'                 => ':attribute és :other értékeknek egyezniük kell.',
    'size'                 => [
        'numeric' => ':attribute kizárólag :size lehet.',
        'file'    => ':attribute kizárólag :size kilobytes lehet.',
        'string'  => ':attribute kizárólag :size karakter lehet.',
        'array'   => ':attribute kizárólag :size elemet tartalmazhat.',
    ],
    'string'               => ':attribute kizárólag string lehet.',
    'timezone'             => ':attribute kizárólag a megengedett értékeken belül lehet.',
    'unique'               => ':attribute már foglalt.',
    'uploaded'             => ':attribute feltöltése sikertelen.',
    'url'                  => ':attribute formátuma érvénytelen.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

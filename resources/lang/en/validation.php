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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
        'nama_team' => [
            'required' => 'Tolong dong isi nama team nyaa',
        ],
        'universitas' => [
            'required' => 'Tolong dong isi nama universitas nyaa',
        ],
        'nickname1' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama1' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim1' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas1' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan1' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive1' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email1' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp1' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender1' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game1' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname2' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama2' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim2' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas2' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan2' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive2' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email2' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp2' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender2' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game2' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname3' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama3' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim3' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas3' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan3' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive3' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email3' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp3' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender3' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game3' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname4' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama4' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim4' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas4' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan4' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive4' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email4' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp4' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender4' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game4' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname5' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama5' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim5' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas5' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan5' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive5' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email5' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp5' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender5' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game5' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname6' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama6' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim6' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas6' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan6' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive6' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email6' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp6' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender6' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game6' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname7' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama7' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim7' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas7' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan7' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive7' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email7' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp7' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender7' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game7' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname8' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama8' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim8' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas8' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan8' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive8' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email8' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp8' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender8' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game8' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname9' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama9' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim9' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas9' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan9' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive9' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email9' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp9' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender9' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game9' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname10' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama10' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim10' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas10' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan10' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive10' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email10' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp10' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender10' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game10' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname11' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama11' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim11' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas11' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan11' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive11' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email11' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp11' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender11' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game11' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
        ],


        'nickname12' => [
            'required' => 'Tolong dong isi nickname anggota nyaa',
        ],
        'nama12' => [
            'required' => 'Tolong dong isi nama nyaa',
        ],
        'nim12' => [
            'required' => 'Tolong dong isi nim anggota nyaa',
        ],
        'fakultas12' => [
            'required' => 'Tolong dong isi nama fakultas nyaa',
        ],
        'angkatan12' => [
            'required' => 'Tolong dong isi tahun angkatan nyaa',
        ],
        'link_gdrive12' => [
            'required' => 'Tolong dong isi link drive anggota nyaa',
            'regex' => 'Berkas harus dalam bentuk link google drive',
        ],
        'email12' => [
            'required' => 'Tolong dong isi email anggota nyaa',
            'email' => 'Ada yang ngga beres nih email nya',
        ],
        'hp12' => [
            'required' => 'Tolong dong isi no hp anggota nyaa',
        ],
        'gender12' => [
            'required' => 'Tolong dong isi jenis kelamin anggota nyaa',
        ],
        'id_game12' => [
            'required' => 'Tolong dong isi id game anggota nyaa',
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
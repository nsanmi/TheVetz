<?php 

return [
    'accepted' => 'Атрибут: должен быть принят.',
    'active_url' => 'Атрибут: не является допустимым URL.',
    'after' => 'Атрибут: должен быть датой после: даты.',
    'after_or_equal' => 'Атрибут: должен быть датой после или равен дате.',
    'alpha' => 'Атрибут: может содержать только буквы.',
    'alpha_dash' => 'Атрибут: может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => 'Атрибут: может содержать только буквы и цифры.',
    'array' => 'Атрибут: должен быть массивом.',
    'before' => 'Атрибут: должен быть датой до: даты.',
    'before_or_equal' => 'Атрибут: должен быть датой до или равен дате.',
    'between' => [
        'numeric' => 'Атрибут: должен быть между: min и: max.',
        'file' => 'Атрибут: должен быть между: min и: max килобайтами.',
        'string' => 'Атрибут: должен быть между: min и: max символами.',
        'array' => 'Атрибут: должен содержать от: min до: max элементов.',
    ],
    'boolean' => 'Поле: атрибут должно быть истинным или ложным.',
    'confirmed' => 'Подтверждение атрибута: не совпадает.',
    'date' => 'Атрибут: не является допустимой датой.',
    'date_equals' => 'Атрибут: должен быть датой, равной: date.',
    'date_format' => 'Атрибут: не соответствует формату: формат.',
    'different' => 'Атрибут: и: другое должны быть разными.',
    'digits' => 'Атрибут: должен быть: цифры цифры.',
    'digits_between' => 'Атрибут: должен быть между: min и: max цифрами.',
    'dimensions' => 'Атрибут: имеет недопустимые размеры изображения.',
    'distinct' => 'Поле: атрибут имеет повторяющееся значение.',
    'email' => 'Атрибут: должен быть действительным адресом электронной почты.',
    'exists' => 'Атрибут selected: недействителен.',
    'file' => 'Атрибут: должен быть файлом.',
    'filled' => 'Поле: attribute должно иметь значение.',
    'gt' => [
        'numeric' => 'Атрибут: должен быть больше чем: значение.',
        'file' => 'Атрибут: должен быть больше, чем: значение в килобайтах.',
        'string' => 'Атрибут: должен быть больше, чем: значение символов.',
        'array' => 'Атрибут: должен иметь больше чем: значение элементов.',
    ],
    'gte' => [
        'numeric' => 'Атрибут: должен быть больше или равен значению:',
        'file' => 'Атрибут: должен быть больше или равен: значение в килобайтах.',
        'string' => 'Атрибут: должен быть больше или равен символу: значение.',
        'array' => 'Атрибут: должен иметь: элементы значения или более.',
    ],
    'image' => 'Атрибут: должен быть изображением.',
    'in' => 'Атрибут selected: недействителен.',
    'in_array' => 'Поле: атрибута не существует в: другом.',
    'integer' => 'Атрибут: должен быть целым числом.',
    'ip' => 'Атрибут: должен быть действительным IP-адресом.',
    'ipv4' => 'Атрибут: должен быть действительным адресом IPv4.',
    'ipv6' => 'Атрибут: должен быть действительным адресом IPv6.',
    'json' => 'Атрибут: должен быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => 'Атрибут: должен быть меньше чем: значение.',
        'file' => 'Атрибут: должен быть меньше чем: килобайт.',
        'string' => 'Атрибут: должен быть меньше чем: значение символов.',
        'array' => 'Атрибут: должен иметь меньше чем: значение элементов.',
    ],
    'lte' => [
        'numeric' => 'Атрибут: должен быть меньше или равен значению:',
        'file' => 'Атрибут: должен быть меньше или равен: значение в килобайтах.',
        'string' => 'Атрибут: должен быть меньше или равен символу: значение.',
        'array' => 'Атрибут: не должен содержать больше, чем: значения элементов.',
    ],
    'max' => [
        'numeric' => 'Атрибут: не может быть больше чем: макс.',
        'file' => 'Атрибут: не может быть больше, чем: максимальный килобайт.',
        'string' => 'Атрибут: не может быть больше чем: максимум символов.',
        'array' => 'Атрибут: может содержать не более: максимум элементов.',
    ],
    'mimes' => 'Атрибут: должен быть файлом типа:: values.',
    'mimetypes' => 'Атрибут: должен быть файлом типа:: values.',
    'min' => [
        'numeric' => 'Атрибут: должен быть не менее: мин.',
        'file' => 'Атрибут: должен быть не менее: минимум килобайт.',
        'string' => 'Атрибут: должен содержать не менее мин. Символов.',
        'array' => 'Атрибут: должен содержать как минимум: min элементов.',
    ],
    'not_in' => 'Атрибут selected: недействителен.',
    'not_regex' => 'Формат атрибута: неверен.',
    'numeric' => 'Атрибут: должен быть числом.',
    'present' => 'Поле: атрибут должно присутствовать.',
    'regex' => 'Формат атрибута: неверен.',
    'required' => 'Поле: атрибут обязательно для заполнения.',
    'required_if' => 'Поле: атрибут является обязательным, когда: other is: value.',
    'required_unless' => 'Поле: атрибут является обязательным, если: other не находится в: values.',
    'required_with' => 'Поле: атрибут является обязательным при наличии: значения.',
    'required_with_all' => 'Поле: атрибут является обязательным при наличии: значений.',
    'required_without' => 'Поле: атрибут является обязательным, если: значения отсутствуют.',
    'required_without_all' => 'Поле: атрибут является обязательным, если нет ни одного из: значений.',
    'same' => 'Атрибут: и: другое должны совпадать.',
    'size' => [
        'numeric' => 'Атрибут: должен быть: размер.',
        'file' => 'Атрибут: должен быть: размер в килобайтах.',
        'string' => 'Атрибут: должен быть: размер символов.',
        'array' => 'Атрибут: должен содержать: размер элементов.',
    ],
    'starts_with' => 'Атрибут: должен начинаться с одного из следующих значений:: values',
    'string' => 'Атрибут: должен быть строкой.',
    'timezone' => 'Атрибут: должен быть допустимой зоной.',
    'unique' => 'Атрибут: уже занят.',
    'uploaded' => 'Не удалось загрузить атрибут:',
    'url' => 'Формат атрибута: неверен.',
    'uuid' => 'Атрибут: должен быть действительным UUID.',
    'custom' => [
        'package_title' => [
            'required' => 'Название пакета обязательно',
        ],
        'package_subtitle' => [
            'required' => 'Подзаголовок пакета требуется',
        ],
        'package_price' => [
            'required' => 'Требуется цена пакета',
        ],
        'roles' => [
            'required' => 'Пожалуйста, выберите роль, которую вы хотите назначить пакет',
        ],
        'review_option_title' => [
            'required' => 'Необходимо указать название опции обзора',
        ],
        'desc' => [
            'required' => 'Поле описания обязательно для заполнения',
        ],
        'projects' => [
            'required' => 'Пожалуйста, выберите проекты',
        ],
    ],
    'attributes' => [
    ],
];
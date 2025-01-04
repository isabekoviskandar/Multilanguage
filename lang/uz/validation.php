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
        'accepted' => ':attribute maydonini qabul qilish kerak.',
        'accepted_if' => ':attribute maydoni, agar :other :value ga teng bo\'lsa, qabul qilinishi kerak.',
        'active_url' => ':attribute maydoni to\'g\'ri URL bo\'lishi kerak.',
        'after' => ':attribute maydoni :date dan keyin bo\'lishi kerak.',
        'after_or_equal' => ':attribute maydoni :date ga teng yoki undan keyin bo\'lishi kerak.',
        'alpha' => ':attribute maydoni faqat harflardan iborat bo\'lishi mumkin.',
        'alpha_dash' => ':attribute maydoni faqat harflar, raqamlar, chiziqlar va pastki chiziqlardan iborat bo\'lishi mumkin.',
        'alpha_num' => ':attribute maydoni faqat harflar va raqamlardan iborat bo\'lishi mumkin.',
        'array' => ':attribute maydoni massiv bo\'lishi kerak.',
        'ascii' => ':attribute maydoni faqat bitta baytli alifbo-raqam belgilaridan va belgilaridan iborat bo\'lishi kerak.',
        'before' => ':attribute maydoni :date dan oldin bo\'lishi kerak.',
        'before_or_equal' => ':attribute maydoni :date ga teng yoki undan oldin bo\'lishi kerak.',
        'between' => [
            'array' => ':attribute maydoni :min va :max o\'rtasida elementlarga ega bo\'lishi kerak.',
            'file' => ':attribute maydonidagi faylning hajmi :min va :max kilobayt orasida bo\'lishi kerak.',
            'numeric' => ':attribute maydoni :min va :max o\'rtasida bo\'lishi kerak.',
            'string' => ':attribute maydoni :min va :max belgilar o\'rtasida bo\'lishi kerak.',
        ],
        'boolean' => ':attribute maydoni true yoki false bo\'lishi kerak.',
        'can' => ':attribute maydoni noto\'g\'ri qiymatga ega.',
        'confirmed' => ':attribute maydoni tasdiqlash bilan mos kelmaydi.',
        'contains' => ':attribute maydoni kerakli qiymatni o\'z ichiga olishi kerak.',
        'current_password' => 'Noto\'g\'ri parol.',
        'date' => ':attribute maydoni haqiqiy sana bo\'lishi kerak.',
        'date_equals' => ':attribute maydoni :date ga teng sana bo\'lishi kerak.',
        'date_format' => ':attribute maydoni :format formatiga mos bo\'lishi kerak.',
        'decimal' => ':attribute maydoni :decimal o\'nlik raqamlarini o\'z ichiga olishi kerak.',
        'declined' => ':attribute maydoni rad etilishi kerak.',
        'declined_if' => ':attribute maydoni, agar :other :value ga teng bo\'lsa, rad etilishi kerak.',
        'different' => ':attribute va :other maydonlari farq qilishi kerak.',
        'digits' => ':attribute maydoni :digits raqamlardan iborat bo\'lishi kerak.',
        'digits_between' => ':attribute maydoni :min va :max o\'rtasida raqamlar bo\'lishi kerak.',
        'dimensions' => ':attribute maydoni rasm o\'lchamlari noto\'g\'ri.',
        'distinct' => ':attribute maydoni takrorlanadigan qiymatga ega.',
        'doesnt_end_with' => ':attribute maydoni quyidagi qiymatlar bilan yakunlanmasligi kerak: :values.',
        'doesnt_start_with' => ':attribute maydoni quyidagi qiymatlar bilan boshlanmasligi kerak: :values.',
        'email' => ':attribute maydoni haqiqiy email manzili bo\'lishi kerak.',
        'ends_with' => ':attribute maydoni quyidagi qiymatlar bilan yakunlanishi kerak: :values.',
        'enum' => ':attribute uchun tanlangan qiymat noto\'g\'ri.',
        'exists' => ':attribute uchun tanlangan qiymat noto\'g\'ri.',
        'extensions' => ':attribute maydoni quyidagi kengaytmalar bilan fayl bo\'lishi kerak: :values.',
        'file' => ':attribute maydoni fayl bo\'lishi kerak.',
        'filled' => ':attribute maydoni qiymatga ega bo\'lishi kerak.',
        'gt' => [
            'array' => ':attribute maydoni :value dan ko\'p elementlarga ega bo\'lishi kerak.',
            'file' => ':attribute maydonidagi fayl hajmi :value kilobaytdan katta bo\'lishi kerak.',
            'numeric' => ':attribute maydoni :value dan katta bo\'lishi kerak.',
            'string' => ':attribute maydoni :value belgilaridan ko\'p bo\'lishi kerak.',
        ],
        'gte' => [
            'array' => ':attribute maydoni :value yoki undan ko\'p elementlarga ega bo\'lishi kerak.',
            'file' => ':attribute maydonidagi fayl hajmi :value kilobaytdan katta yoki teng bo\'lishi kerak.',
            'numeric' => ':attribute maydoni :value dan katta yoki teng bo\'lishi kerak.',
            'string' => ':attribute maydoni :value belgilaridan ko\'p yoki teng bo\'lishi kerak.',
        ],
        'hex_color' => ':attribute maydoni haqiqiy shestnadtsaterlik rang bo\'lishi kerak.',
        'image' => ':attribute maydoni rasm bo\'lishi kerak.',
        'in' => ':attribute uchun tanlangan qiymat noto\'g\'ri.',
        'in_array' => ':attribute maydoni :other da mavjud bo\'lishi kerak.',
        'integer' => ':attribute maydoni butun son bo\'lishi kerak.',
        'ip' => ':attribute maydoni haqiqiy IP-manzil bo\'lishi kerak.',
        'ipv4' => ':attribute maydoni haqiqiy IPv4-manzil bo\'lishi kerak.',
        'ipv6' => ':attribute maydoni haqiqiy IPv6-manzil bo\'lishi kerak.',
        'json' => ':attribute maydoni JSON formatidagi satr bo\'lishi kerak.',
        'lowercase' => ':attribute maydoni faqat kichik harflardan iborat bo\'lishi kerak.',
        'lt' => [
            'array' => ':attribute maydoni :value dan kamroq elementlarga ega bo\'lishi kerak.',
            'file' => ':attribute maydonidagi fayl hajmi :value kilobaytdan kichik bo\'lishi kerak.',
            'numeric' => ':attribute maydoni :value dan kichik bo\'lishi kerak.',
            'string' => ':attribute maydoni :value belgilaridan kamroq bo\'lishi kerak.',
        ],
        'lte' => [
            'array' => ':attribute maydoni :value dan ko\'p elementlarga ega bo\'lmasligi kerak.',
            'file' => ':attribute maydonidagi fayl hajmi :value kilobaytdan kichik yoki teng bo\'lishi kerak.',
            'numeric' => ':attribute maydoni :value dan kichik yoki teng bo\'lishi kerak.',
            'string' => ':attribute maydoni :value belgilaridan kamroq yoki teng bo\'lishi kerak.',
        ],
        'mac_address' => ':attribute maydoni haqiqiy MAC-manzil bo\'lishi kerak.',
        'max' => [
            'array' => ':attribute maydoni :max dan ko\'p elementlarga ega bo\'lmasligi kerak.',
            'file' => ':attribute maydonidagi fayl hajmi :max kilobaytdan katta bo\'lmasligi kerak.',
            'numeric' => ':attribute maydoni :max dan katta bo\'lmasligi kerak.',
            'string' => ':attribute maydoni :max belgilaridan ko\'p bo\'lmasligi kerak.',
        ],
        'min' => [
            'array' => ':attribute maydoni kamida :min elementlarga ega bo\'lishi kerak.',
            'file' => ':attribute maydonidagi fayl hajmi kamida :min kilobayt bo\'lishi kerak.',
            'numeric' => ':attribute maydoni kamida :min bo\'lishi kerak.',
            'string' => ':attribute maydoni kamida :min belgilar bo\'lishi kerak.',
        ],
        'not_regex' => ':attribute maydoni noto\'g\'ri formatga ega.',
        'numeric' => ':attribute maydoni son bo\'lishi kerak.',
        'present' => ':attribute maydoni mavjud bo\'lishi kerak.',
        'regex' => ':attribute maydoni noto\'g\'ri formatga ega.',
        'required' => ':attribute maydoni to\'ldirilishi shart.',
        'same' => ':attribute va :other maydonlari mos kelishi kerak.',
        'size' => [
            'array' => ':attribute maydoni :size elementlarga ega bo\'lishi kerak.',
            'file' => ':attribute maydonidagi fayl hajmi :size kilobayt bo\'lishi kerak.',
            'numeric' => ':attribute maydoni :size bo\'lishi kerak.',
            'string' => ':attribute maydoni :size belgilar bo\'lishi kerak.',
        ],
        'url' => ':attribute maydoni to\'g\'ri URL bo\'lishi kerak.',
        'uuid' => ':attribute maydoni to\'g\'ri UUID bo\'lishi kerak.',
    

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

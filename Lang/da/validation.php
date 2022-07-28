<?php

return array(

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

    "accepted"                  => ":attribute skal accepteres.",
    "active_url"                => ":attribute er ikke en gyldig URL.",
    "after"                     => ":attribute skal være en dato efter :date.",
    "alpha"                     => ":attribute må kun indeholde bogstaver.",
    "alpha_dash"                => ":attribute må kun indeholde bogstaver, tal, bindestreger og bundstreger.",
    "alpha_num"                 => ":attribute må kun indeholde bogstaver og tal.",
    "array"                     => ":attribute skal være et array.",
    "before"                    => ":attribute skal være en dato før :date.",
    "between"                   => array(
        "numeric" => ":attribute skal være imellem :min og :max.",
        "file"    => ":attribute skal være imellem :min og :max kilobytes.",
        "string"  => ":attribute skal være imellem :min og :max karakterer.",
        "array"   => ":attribute skal have imellem :min og :max enheder.",
    ),
    "boolean"                   => ":attribute feltet skal være sandt eller falsk.",
    "confirmed"                 => ":attribute bekræftelse matcher ikke.",
    "date"                      => ":attribute er ikke en gyldig dato.",
    "date_format"               => ":attribute matcher ikke formatet :format.",
    "different"                 => ":attribute og :other skal være forskellige.",
    "digits"                    => ":attribute skal være :digits tal.",
    "digits_between"            => ":attribute skal være imellem :min og :max digits.",
    "email"                     => ":attribute skal være en gyldig email addresse.",
    "exists"                    => "den valgte :attribute er ikke gyldig.",
    "image"                     => ":attribute skal være et billede.",
    "in"                        => "den valgte :attribute er ikke gyldig.",
    "integer"                   => ":attribute skal være en integral.",
    "ip"                        => ":attribute skal være en gyldig IP addresse.",
    "max"                       => array(
        "numeric" => ":attribute må ikke være større end :max.",
        "file"    => ":attribute må ikke være større end :max kilobytes.",
        "string"  => ":attribute må ikke være større end :max characters.",
        "array"   => ":attribute må ikke have mere end :max.",
    ),
    "mimes"                     => ":attribute skal være en fil af typen: :values.",
    "min"                       => array(
        "numeric" => ":attribute skal være mindst :min.",
        "file"    => ":attribute skal være mindst :min kilobytes.",
        "string"  => ":attribute skal være mindst :min characters.",
        "array"   => ":attribute skal have mindst :min items.",
    ),
    "not_in"                    => "Den valgte :attribute er ikke gyldig.",
    "numeric"                   => ":attribute skal være a number.",
    "regex"                     => ":attribute formatet er ikke gyldigt.",
    "required"                  => ":attribute felt er påkrævet.",
    "required_if"               => ":attribute felt er påkrævet når :other er :value.",
    "required_with"             => ":attribute felt er påkrævet når :values er til stede.",
    "required_with_all"         => ":attribute felt er påkrævet når :values er til stede.",
    "required_without"          => ":attribute felt er påkrævet når :values ikke er til stede.",
    "required_without_all"      => ":attribute felt er påkrævet når ingen af :values er til stede.",
    "same"                      => ":attribute og :other skal matche.",
    "size"                      => array(
        "numeric" => ":attribute skal være :size.",
        "file"    => ":attribute skal være :size kilobytes.",
        "string"  => ":attribute skal være :size karakterer.",
        "array"   => ":attribute skal indeholde :size.",
    ),
    "unique"                    => ":attribute er allerede brugt.",
    "url"                       => ":attribute format er ikke gyldigt.",
    "template_exists"           => "Den valgte :attribute er ikke gyldig.",
    "is_valid_captcha"          => "Captcha koden indtastet var ikke korrekt, forsøg venligst igen.",
    "user_password_strength"    => ":attribute skal indeholde: :user_password_strength.",
    "operator_password_strength" => ":attribute skal indeholde: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Logoet skal pege på en gyldig billed fil (direkte URL eller relativ fil sti til base biblioteket).",

    /*
     * 2.1.1
     */
    "old_password"              => ":attribute feltet er ikke gyldigt.",

    /*
     * 2.2.0
     */
    "required_with_translation" => ":translation oversættelsen for :attribute feltet er krævet når :values er til stede.",
    "max_translation"           => ":translation oversættelsen for :attribute feltet må ikke være større end :max characters.",
    "unique_translation"        => ":translation oversættelsen for :attribute feltet er allerede blevet brugt.",

    /*
     * 2.3.0
     */
    "required_translation"      => ":translation oversættelsen for :attribute feltet er påkrævet.",
    "customfield_not_cyclic"    => "Feltet kan ikke afhænge af et af dets underfelter.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Slug feltet kan kun indeholde alfanumeriske karakterer, procent enkod venligst special karakterer.",
    "article_slug_unique"       => "Slug er allerede blevet anvendt.",
    "captcha_required"          => "Captcha er påkrævet.",
    "ticket_number_format"      => "Ticket nummer formatet er ikke gyldigt.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => ":attribute skal være en dato efter eller lig med :date.",
    "before_or_equal"           => ":attribute skal være en dato før eller lig med :date.",
    "dimensions"                => ":attribute har ugyldige billed dimensioner.",
    "distinct"                  => ":attribute feltet har en duplikeret værdi.",
    "file"                      => ":attribute skal være en fil.",
    "filled"                    => ":attribute feltet skal have en værdi.",
    "gt"                        => array(
        "numeric" => ":attribute skal være større end :value.",
        "file"    => ":attribute skal være større end :value kilobytes.",
        "string"  => ":attribute skal være større end :value karakterer.",
        "array"   => ":attribute skal have mere end :value.",
    ),
    "gte"                       => array(
        "numeric" => ":attribute skal være større end eller lig med :value.",
        "file"    => ":attribute skal være større end eller lig med :value kilobytes.",
        "string"  => ":attribute skal være større end eller lig med :value karakterer.",
        "array"   => ":attribute skal have :value eller flere.",
    ),
    "in_array"                  => ":attribute feltet eksisterer ikke i :other.",
    "ipv4"                      => ":attribute skal være en gyldig IPv4 address.",
    "ipv6"                      => ":attribute skal være en gyldig IPv6 address.",
    "json"                      => ":attribute skal være en gyldig JSON streng.",
    "lt"                        => array(
        "numeric" => ":attribute skal være mindre end :value.",
        "file"    => ":attribute skal være mindre end :value kilobytes.",
        "string"  => ":attribute skal være mindre end :value karakterer.",
        "array"   => ":attribute skal have mindre end :value.",
    ),
    "lte"                       => array(
        "numeric" => ":attribute skal være mindre end eller lig med :value.",
        "file"    => ":attribute skal være mindre end eller lig med :value kilobytes.",
        "string"  => ":attribute skal være mindre end eller lig med :value karakterer.",
        "array"   => ":attribute må ikke have mere end :value.",
    ),
    "mimetypes"                 => ":attribute skal være en fil af typen: :values.",
    "not_regex"                 => ":attribute format er ikke gyldigt.",
    "present"                   => ":attribute felt skal være til stede.",
    "required_unless"           => ":attribute felt er påkrævet med mindre :other er i :values.",
    "string"                    => ":attribute skal være en streng.",
    "timezone"                  => ":attribute skal være en gyldig zone.",
    "uploaded"                  => ":attribute gennemførte ikke upload.",

    /*
     * 2.5.0
     */
    "domain"                    => "En eller flere domæne navne er ikke gyldige.",

    /*
     * 2.5.1
     */
    "valid_twig"                => ":attribute er ikke gyldig. Brug venligst 'Preview' knappen for at se detaljer.",

    /*
     * 3.0.0
     */
    "embed_image"               => ":attribute skal være en fil af typen: jpeg, png, eller gif.",
    "starts_with"               => ":attribute skal starte med en af de følgende: :values.",

    /*
     * 3.4.0
     */
    "password"                  => "Passwordet er ikke korrekt.",

    /*
     * 3.5.0
     */
    'phone'                     => "Det oplyste telefonnummer er ikke gyldigt.",

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

    "custom" => array(
        "roles.*" => array(
            "exists" => "Den valgte rolle er ikke gyldig.",
        ),
        "category.*.type" => array(
            "required" => "En eller flere selvhjælps typer skal være valgt.",
        ),
        "category.*.categories" => array(
            "required" => "En eller flere kategorier er krævede når en selvhjælps type er valgt.",
            "exists"   => "En eller flere valgte kategorier er ikke gyldig.",
        ),
        "brand.*" => array(
            "exists" => "Det valgte brand er ikke gyldigt.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);

<?php

return array(

    "customfield"               => "Brugerdefineret Felt|Brugerdefinerede Felter",

    // Options
    "boolean"                   => "Ja/Nej",
    "checkbox"                  => "Tjekbox",
    "checklist"                 => "Tjekliste",
    "date"                      => "Dato",
    "multiple"                  => "Flere Muligheder",
    "options"                   => "Muligheder",
    "radio"                     => "Radio Knapper",
    "rating"                    => "Vurdering (1 til 5)",
    "text"                      => "Tekst",
    "textarea"                  => "Tekstområde",

    "public"                    => "Offentlig",
    "public_desc"               => "Vises det brugerdefinerede felt offentligt på frontend eller kun for operatører.",
    "encrypted"                 => "Krypteret",
    "purge_desc"                => "Slettes den brugerdefinerede værdi automatisk når en ticket er løst.",
    "locked"                    => "Låst",
    "locked_desc"               => "Kan den brugerdefinerede værdi ikke ændres af brugeren når først defineret.",
    "department_desc"           => "Vælg hvilke afdelinger feltet er tilgængeligt i.",

    /*
     * 2.0.2
     */
    "please_select"             => "Vælg venligst...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Den beskrivende tekst der vil blive vist under det brugerdefinerede felt, kan alternativt efterlades tom.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Vælg hvilke brands dette felt er tilgængelige i.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Sletter du eksisterende muligheder vil det rydde eventuelle felter der har denne værdi defineret.",
    "regex_basic_desc"          => "Du kan specificere et regulært udtryk for at validere værdien af et brugerdefineret felt.",
    "regex_desc"                => "Det regulære udtryk er verbalfølsomt, der er ikke brug for at definere afgrænsninger på regulære udtryk. Brug af skråstreg vil automatisk blive udelukket. Eksempel: ^[a-z0-9_-]{6,18}$ vil påtvinge at værdien er 6-18 karakterer lang og kun indeholder et mix af alfanumeriske karakterer, underscore og bindestreger.",
    "regex_error_message"       => "Besked ved fejl på validering",
    "regex_error_message_desc"  => "Du kan alternativt specificere en brugerdefineret fejlbesked der vil blive vist hvis værdien ikke matcher det regulære udtyrk, hvis ikke vil en generisk besked blive vist. Beskeden vil blive vist præcis som indtastet, vi foreslår derfor at inkludere navnet på det brugerdefinerede felt for at gøre fejl beskeden mere åbenlys.",
    "custom_field_values"       => "Brugerdefinerede Felt Værdier",
    "depends_on"                => "Afhænger Af",
    "depends_on_desc"           => "Hvis valgt vil dette felt kun blive vist for brugeren når den specificerede felt værdi er valgt. Brand og afdelingens synlighed vil blive nedarvet fra det felt de afhænger af.",
    "select_option"             => "Vælg en mulighed...",
    "purge"                     => "Fjern",
    "encrypted_desc"            => "Er det brugerdefinerede felt sensitivt og skal det gemmes krypteret i databasen. Dette kan ikke ændres når det brugerdefinerede felt først er oprettet.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Skal det brugerdefinerede felt udfyldes. Gældende for tjekbox, tjeklisten eller flere valgmuligheder vil det kræve at brugeren vælger mindst en mulighed.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** KRYPTERET **",
);

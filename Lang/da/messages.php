<?php

return array(

    "deleted"               => "Slettet!",
    "success"               => "Success",
    "error"                 => "Fejl",
    "in_progress"           => "Igang",

    "save_order"            => "Forsøger at gemme den opdaterede sortering",

    "are_you_sure"          => "Er du sikker?",
    "yes_im_sure"           => "Ja, jeg er sikker",

    "success_created"       => "Oprettede ny :item! med success",
    "error_created"         => "Fejlede i oprettelse af :item.",

    "success_deleted"       => "Slettet med success :item!",
    "error_deleted"         => "Fejlede forsøg på sletning af :item.",

    "success_updated"       => "Opdateret med success :item!",
    "error_updated"         => "Fejlede forsøg på opdatering af :item.",

    "error_notfound"        => ":item med ID blev ikke fundet.",
    "error_notfound_name"   => ":item med det givne navn blev ikke fundet.",
    "report_notfound"       => "Raporten med det givne kategori og navn blev ikke fundet.",

    "success_ordering"      => "Sortering opdateret med success!",
    "error_ordering"        => "Fejlede forsøg på opdatering af sortering.",

    "error_login"           => "Login forsøg fejlet.",
    "success_logout"        => "Logget ud med success.",

    "please_correct"        => "Ret venligst følgende fejl og forsøg igen.",

    "success_settings"      => "Indstillinger opdateret med success!",
    "error_settings"        => "Forsøget på opdatering af indstillinger fejlede.",

    "success_action"        => "Handling udført med success!",
    "error_action"          => "Handlingen blev ikke udført.",

    "error_embed_image"     => "Billedet blev ikke uploadet.",

    "unauthorised"          => "Uautoriseret",
    "not_authorised"        => "Du er ikke autoriseret til at udføre denne handling.",
    "not_permitted"         => "Du har ikke tilladelse til at se denne side. Hvis du mener dette er en fejl, kontakt din administrator.",

    "page_not_found"        => "Siden blev ikke fundet",
    "cant_find_page"        => "Vi kan ikke finde den side du leder efter.",

    "please_report"         => "Indberet venligst til en administrator hvis denne handling var uventet.",

    "return_to"             => "Gå tilbage til :page.",

    "session_expired"       => "Din session er udløbet, log venligst ind igen.",
    "session_refresh"       => "Din session er udløbet, opdater venligst siden og prøv igen.",

    "general_error"         => "Der opstod en fejl. Forsøg venligst igen.",

    "no_results"            => "Ingen resultater.",

    "assign_incomplete"     => "Denne handling kunne ikke fuldføres. :names kunne ikke tildeles til nogle tickets.",

    "maintenance_mode"      => "Vedligeholdelses tilstand er aktiv. Helpdesken er utilgængelig for brugere, husk at slå vedligeholdelses tilstand fra igen.",

    "invalid_captcha"       => "Captcha koden indtastet var ikke korrekt, forsøg venligst igen.",
    "blocked_as_spam"       => "Din forespørgsel blev detekteret som spam. Kontakt venligst en administrator hvis du mener dette er en fejl.",
    "account_exists"        => "En aktiv konto med denne email adresse eksisterer allerede. Log venligst ind eller brug funktionen til gendannelse af adgangskode hvis du ikke kan huske din adgangskode.",
    "error_loading_comments" => "Der opstod et problem med indlæsning af kommentarer.",

    "invalid_auth"          => "Dine login oplysninger blev ikke valideret.",

    "forbidden"             => "Forbudt",

    "not_logged_exception"  => "<strong>Ups! Noget gik galt.</strong><br />Underret din administrator hvis fejlen fortsætter med at opstå.",

    "too_many_ticket_reqs"  => "Der er oprettet for mange ticket oprettelser for denne adresse. :email. Grænsen er :max på :decay minutes.",

    "not_operator"          => "Noget gik galt. Den valgte operatør er ikke gyldig, kontroller venligst at de tilhører en operatør gruppe og at gruppen har en associaceret rolle.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>Ups! Noget gik galt.</strong><br />En fejl opstod ved indlæsning af tabel data. Underret venligst din administrator hvis fejlen fortsætter.",

    "missing_extension"     => "Manglende udvidelse",
    "php_ldap_missing"      => "php-ldap udvidelsen er påkrævet for brug af LDAP autorisation. Aktiver den og genindlæs denne side.",

    /*
     * 2.0.3
     */
    "only_ssl_connections"  => "Kun SSL forbindelser er tilladt, du bør opdatere din forespørgsel til at anvende en sikker forbindelse.",
    "queued_emails"         => "Success - Emails vil begynde at blive sat i kø og afsendt om et øjeblik.",
    "error_loading_message" => "En fejl opstod imens beskeden blev indlæst. Forsøg venligst igen.",
    "please_refresh"        => "Genindlæs venligst denne side.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Servicen er ikke til rådighed i øjeblikket.</strong><br />Der kunne ikke tilsluttes til databasen.",
    "category_required"     => "Artiklen skal tilhøre en eller flere kategorier.",
    "warning"               => "Advarsel",
    "note"                  => "Note",
    "brand_invalid_dept"    => "Handlingen kunne ikke udføres til fulde. Afdelingen kunne ikke opdateres på nogle tickets pga. deres brand.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Forsøg på upload af vedhæftning fejlede \":filename\", Årsag: \":reason\"",
    "upload_max_size"       => "Filen skal være mindre end :size",
    "upload_wrong_type"     => "Fil typen er ikke tilladt",

    /*
     * 2.3.0
     */
    "delete_record"         => "Slet :record?",
    "cannot_be_undone"      => "Denne handling kan ikke fortrydes.",
    "warn_delete"           => "Dette vil permanent slette <strong>:name</strong> :record fra systemet.",
    "delete_confirm"        => "Ja tak, Slet :record",
    "keep_record"           => "Nej tak, Behold :record",
    "delete_relations"      => "Sletning af <strong>:name</strong> :record vil også lave permanent sletning af alle de følgende relaterede data:",
    "please_check"          => "Du skal afkrydse alle de ovenstående bokse for at bekræfte du forstår resultatet af denne uigenkaldelige handling.",
    "failed_attachments"    => "Fejlede i vedhæftning af nogle filer.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Success - emailen er blevet sendt.",
    "task_already_running"  => "Planlagt opgave kører automatisk i øjeblikket, forsøg igen om et øjeblik.",
    "linked_account"        => "SOME kontoen er med success blevet linket til din konto.",
    "already_linked"        => "SOME kontoen er allerede koblet til en anden konto. Log venligst ind med den anden konto og afkobl kontoen herfra.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Ser dette korrekt ud?",
    "no_revert"             => "Nej! Gå tilbage",
    "attachment_not_found"  => "Vedhæftningen blev ikke fundet.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Din konto er blevet lukket. Kontakt os venligst hvis du mener dette er sket ved en fejl.",
    "leave_record"          => "Forlad :record?",
    "leave_record_warn"     => "Dette vil fjerne dig permanent fra :record.",
    "success_trashed"       => ":item er flyttet til skraldespanden!",
    "error_trashed"         => "Det lykkedes ikke at flytte :item til skraldespanden.",
    "blocked_by_rule"       => "Forespørgslen blev blokeret af spam reglen ':text'.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Din browser blokerer popup vinduer. Aktiver popup vinduer og videresendelser for denne hjemmeside for anvendelse af forhåndsvisning.",
    "error_editing_message" => "Der opstod en fejl i forsøget op at redigere denne besked.",

    /*
     * 4.1.1
     */
    "brand_not_enabled"     => "This action cannot be performed as the brand is not enabled.",
    "cannot_reply_to_internal" => "A user cannot reply to an internal ticket.",

    /*
     * 4.3.0
     */
    "show_all_results"      => "Vis alle resultater &raquo;",

    /*
     * 5.0.0
     */
    "lock_timeout"          => "Lock Timeout",
    "lock_timeout_desc"     => "The server is currently busy processing other requests. Please try again.",

    /*
     * 5.4.1
     */
    "throttle_error"        => "Too many attempts, please try again :in_time." // :in_time becomes in 1 minute, etc

);

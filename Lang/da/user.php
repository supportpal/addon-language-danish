<?php

return array(

    "user"                          => "Bruger|Brugere",
    "user_details"                  => "Bruger detaljer",
    "add_user"                      => "Tilføj Bruger",
    "account_active"                => "Konto Aktiv",
    "account_active_desc"           => "Skift for at aktivere og deaktivere adgang til autoriserede sektioner.",

    "op_settings_dept_desc"         => "Vælg hvilke afdelinger operatørerne kan se og besvare tickets i.",

    "organisation"                  => "Organisation|Organisationer",
    "members"                       => "Medlem|Medlemmer",
    "owner"                         => "Ejer",
    "manager"                       => "Manager",
    "access_level"                  => "Adgangs Niveau",
    "access_level_desc"             => "Definer adgangs niveau for brugeren i organisationen, baseret på den følgende:<br /><strong>Manager</strong> - Kan se tickets åbnet af alle brugere i organisationen og håndtere brugere i organisationen<br /><strong>User</strong> - Kan udelukkende se tickets åbnet af sig selv",
    "manage_organisation"           => "Håndter Organisation",
    "leave_organisation"            => "Forlad Organisation",
    "user_membership"               => "Bruger medlemsskab",
    "transfer_ownership"            => "Overfør Ejerskab",
    "transfer_ownership_desc"       => "Som den nuværende ejer af organisationen kan du ikke fjernes som manager, og kun du kan slette organisationen. Du kan overføre ejerskab af organisationen til en anden, vær opmærksom på at handlingen ikke kan fortrydes.",
    "transfer_ownership_operator"   => "Kun du som ejer af organisationen kan slette den, og du kan ikke fjernes fra den. Brug denne option for at ændre ejernes af organisationen til en anden bruger.",
    "start_typing_name"             => "Begynd at skrive et navn...",
    "organisation_add_user"         => "Tilføj bruger til organisationen",
    "organisation_desc"             => "Hver organisation kan have <strong>managers</strong>, som kan håndtere brugere og læse og besvare andres tickets, og <strong>brugere</strong>, som kan åbne tickets, men kan ikke læse eller besvare andres tickets.",
    "organisation_operator_desc"    => "Tilføj eksisterende brugere ved at klikke på \"Tilføj Bruger\" og søg efter deres navn, vær opmærksom på at tilføjelse af en bruger vil fjerne forbindelser de har til andre organisationer.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Kan håndtere andre brugere og se &amp; besvare andre brugeres tickets.<br /><strong>Brugere</strong> - Kan kun åbne tickets på vegne af organisationen og besvare egne tickets.",
    "send_password_reset"           => "Send Password Nulstillings Link",

    "profile"                       => "Profil",

    "login"                         => "Login",
    "remember_me"                   => "Husk Mig",
    "logout"                        => "Logud",
    "return_to_login"               => "Returner til Login",

    "user_register_disabled"        => "Beklager, offentlig bruger registrering er i øjeblikket ikke mulig.",
    "success_register"              => "Konto registreret med success!",
    "register_now"                  => "Registrer nu",
    "register"                      => "Registrer",
    "register_account"              => "Registrer Konto",
    "signed_up"                     => "Tilmeldt",
    "last_active"                   => "Sidst aktiv",

    "forgot_password"               => "Glemt password?",
    "reset_password"                => "Nulstil Password",
    "set_password"                  => "Definer et password",
    "please_set_password"           => "Definer venligst dit nye password nedenfor.",
    "missing_email_or_reset"        => "Manglende email adresse eller reset token.",

    "firstname"                     => "Fornavn",
    "lastname"                      => "Efternavn",
    "formatted_name"                => "Vist Navn",
    "country"                       => "Land",
    "avatar"                        => "Avatar",
    "confirm_password"              => "Bekræft Password",

    "confirmed"                     => "Bekræftet",
    "unconfirmed"                   => "Ubekræftet",

    "group"                         => "Bruger Gruppe|Bruger Grupper",
    "group_members"                 => "Gruppe Medlemmer",
    "operator_group"                => "Operatør Gruppe|Operatør Grupper",
    "add_group"                     => "Tilføj til Gruppe",

    "customfield"                   => "Brugerens Brugerdefinerede Felt|Brugerens Brugerdefinerede Felter",
    "customfield_order"             => "Træk rækkerne for at ændre rækkefølgen brugerdefinerede felter vises for brugere.",

    "role"                          => "Rolle|Roller",

    "operator_login_log"            => "Operatør Login Log",
    "system_activity_log"           => "System Aktivitets Log",
    "activity_log"                  => "Aktivitets Log",

    "mass_email"                    => "Send Masse Email",
    "send_email"                    => "Send Email",
    "choose_template"               => "Vælg Skabelon...",

    "ldap_account"                  => "LDAP Konto|LDAP Konti",
    "ldap_operator_desc"            => "Søg efter en operatør, eller opret en ny.",
    "ldap_server"                   => "LDAP Server",
    "ldap_server_desc"              => "Serverens hostname. Alternativt kan du specificere en fuld LDAP URI. For eksempel vil: ldaps://ldap.server:1234/ tislutte via SSL til port 1234.",
    "ldap_username"                 => "LDAP Brugernavn",
    "ldap_username_desc"            => "Brugernavnet som operatører skal anvende for at logge ind på helpdesken (deres LDAP brugernavn.)",
    "ldap_rdn"                      => "LDAP RDN eller DN",
    "ldap_rdn_desc"                 => "Det kendetegnende navn for LDAP brugernavnet, for eksempel: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP Detaljer",

    "operator_details"              => "Operatør Detaljer",

    "email_notifications"           => "Email Notifikationer",
    "email_notifications_desc"      => "De email notifikationer der vil blive modtaget fra systemet.",

    "enable_ldap"                   => "Aktiver LDAP Login",
    "enable_ldap_desc"              => "Hvis du anvender LDAP kan du aktivere det til operatør login. Efter aktivering gå da til LDAP konto indstillinger for at konfigurere.",
    "user_reg_enabled"              => "Bruger Registrering Aktiveret",
    "user_reg_enabled_desc"         => "Tillad nye brugere at registrere en konto på frontend.",
    "user_reg_captcha"              => "Bruger Registrering Captcha",
    "user_reg_captcha_desc"         => "Definerer om captcha skal vises til nye brugere ved registrering.",
    "user_name_format"              => "Navne Format",
    "first_last"                    => "Fornavn Efternavn",
    "last_first"                    => "Efternavn Fornavn",
    "first_l"                       => "Fornavn E.",
    "f_last"                        => "E. Efternavn",
    "password_length"               => "Password Længde",
    "password_length_desc"          => "Den minimums længde i karakterer som der kræves til passwords ved registrering eller opdatering af konti.",
    "password_strength"             => "Password Styrke",
    "password_strength_desc"        => "Vælg hvilke karakterer der er påkrævet ved registrering af et password.",
    "password_str_must_contain"     => "Skal indeholde:",
    "password_str_letters"          => "Mindst en alfabetisk karakter.",
    "password_str_digits"           => "Mindst et tal.",
    "password_str_case"             => "Både store og små karakterer.",
    "password_str_symbols"          => "Mindst et symbol.",

    "load_template"                 => "Indlæs Skabelon",
    "load_template_desc"            => "Vælger du en skabelon erstatter du det nuværende email emne og den nuværende email besked.",
    "clear_template"                => "Ryd Skabelon",

    "personal_settings"             => "Personlige Indstillinger",
    "personal_settings_desc"        => "Opdater din egen profil og rediger indstillinger der relaterer sig til din operatør konto.",
    "two_fa"                        => "To-Faktor Autorisation",
    "notifications"                 => "Notifikationer",
    "two_fa_success_disabled"       => "To-faktor autorisation er blevet deaktiveret med success.",
    "two_fa_success_enabled"        => "To-faktor autorisation er blevet aktiveret med success.",
    "two_fa_incorrect"              => "Koden var ikke korrekt, kontroller venligst at koden du har indtastet er korrekt og at serverens tid er i synk.",
    "two_fa_enabled"                => "2FA Aktiveret",
    "two_fa_disable"                => "Verificer venligst herunder for at deaktivere 2FA.",
    "two_fa_enable"                 => "Aktiver venligst din konto på din telefon med oplysningerne herunder og bekræft den for at aktivere 2FA.",
    "verify_code"                   => "Verificer Kode",
    "verify_and_disable"            => "Verificer & Deaktiver",
    "verify_and_enable"             => "Verificer & Aktiver",
    "verify_code_desc"              => "Indtast en gyldig kode til din 2FA konto for at deaktiverer 2FA autorisation.",
    "qr_code"                       => "QR Kode",
    "two_fa_code"                   => "2FA Kode",
    "two_fa_secret"                 => "2FA Hemmelighed",
    "two_fa_secret_desc"            => "Gem venligst denne et sikkert sted da du vil få brug for den hvis du får brug for at genoprette din authenticator konto på din telefon.",
    "display_notifications"         => "Vis Notifikationer",
    "display_notifications_desc"    => "Systemet vil underrette dig når nye tickets eller svar bliver oprettet. Eller når andre operatører logger ind. Du kan vælge imellem skrivebords notifikationer, browser notifikationer eller ingen notifikationer.",
    "desktop_notifications"         => "Skrivebords Notifikationer",
    "browser_notifications"         => "Browser Notifikationer",

    "search_for_user"               => "Søg efter bruger...",
    "select_operator"               => "Vælg en operatør...",
    "select_group"                  => "Vælg en gruppe...",

    "your_ip_has_been_banned"       => "Din IP er blevet banned.",
    "password_reset_success"        => "Password nulstillet med success!",

    "simpleauth_token_expired"      => "Dit adgangs token er udløbet.",
    "simpleauth_token_invalid"      => "Det oplyste adgangs token er ikke gyldigt.",
    "simpleauth_invalid_guard"      => "Kan ikke logge ind da en gyldig bruger ikke blev indtastet.",
    "simpleauth_not_allowed"        => "Operatører kan ikke logge ind med SimpleAuth i øjeblikket.",

    /*
     * 2.0.2
     */

    "email_history"                 => "Email Historik",
    "view_email"                    => "Vis Email",

    "ban_after_count"               => "Ban IP efter fejlede logins",
    "ban_after_count_user"          => "Antallet af fejlede logins hvorefter en brugers IP bliver banned, og de ikke længere vil være istand til at logge ind på frontenden i det konfigurerede tidsrum. 0 vil deaktivere IP bans fuldstændig.",
    "ban_after_count_operator"      => "Antallet af fejlede logins hvorefter en brugers IP bliver banned, og de ikke længere vil være istand til at logge ind på operatør panelet eller API i det konfigurerede tidsrum. 0 vil deaktivere IP bans fuldstændig.",
    "ban_length"                    => "Varighed af IP Ban",
    "ban_length_desc"               => "Varighed af IP ban når det konfigurerede antal fejlede login forsøg på en enkelt dag.",
    "n_failed_logins"               => ":count fejlede logins indenfor 24 timer",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Tager en pause...",
    "operator_session_expired"      => "Du har været inaktiv eller er logget ind på en anden enhed så jeg tog en pause. Væk mig ved at logge ind igen.",
    "log_back_in"                   => "Log Ind Igen",
    "all_users"                     => "Alle Brugere",
    "all_operators"                 => "Alle Operatører",
    "email_per_batch"               => "Emails Per Batch",
    "email_per_batch_desc"          => "Antallet af emails der afsendes samtidig.",
    "batch_interval"                => "Batch Interval",
    "batch_interval_desc"           => "Pausen imellem email batches i minutter. 1 minut er minimum.",
    "select_user_groups"            => "Vælg bruger/operatør grupper eller indtast i email adresser...",
    "mass_email_sending_time"       => "Det vil tage omtrent :time at sende alle emails.",
    "organisations_enabled"         => "Organisationer Aktiveret",
    "organisations_enabled_desc"    => "Som standard kan brugere tilføje en organisation til deres profil og andre brugere til den organisation. Hvis du kun varetager forbrugere kan du deaktivere organisations muligheden og skjule den fra interfacet.",
    "manager_notifications"         => "Organisationens Manager Notifikationer",
    "manager_notifications_desc"    => "Definerer om managers i organisationer skal modtage email opdateringer på tickets åbnet af andre brugere i organisationen per standard. Hver manager vil have deres egen personlige mulighed for at definere dette i deres profil og kan overstyre denne indstilling.",
    "manager_email_notifications_desc" => "Skal de modtage email notifikationer om opdateringer på tickets åbnet af andre brugere i organisationen.",
    "organisation_notifications_desc" => "Vil du gerne modtage email notifikationer om opdateringer af tickets åbnet af andre brugere i din organisation.",
    "select_operator_group_desc"    => "Vælg venligst mindst en operatør gruppe for denne operatør.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Organisationens Brugerdefinerede Felt|Organisationens Brugerdefinerede Felter",
    "recent_users"                  => "Nylige Brugere",
    "recent_organisations"          => "Nylige Organisationer",
    "group_brand_desc"              => "Vælg hvilke brands operatørerne i denne gruppe har tilladelse til at tilgå.",
    "select_operators"              => "Vælkg operatør(er)...",
    "select_groups"                 => "Vælg gruppe(r)...",
    "group_department_desc"         => "Tildel alle medlemmer af denne gruppe til afdelinger, operatører kan også tildeles individuelt i indstillinger for afdelinger.",
    "op_settings_group_dept"        => "Tildelt via operatør grupper:",
    "op_settings_group_dept_desc"   => "Disse afdelinger er nedarvet automatisk fra operatør grupperne valgt ovenfor. For at tildele via en operatør gruppe, rediger da operatør gruppen eller afdelingens indstillinger.",
    "op_settings_individual_dept"   => "Tildeles individuelt:",
    "op_settings_individual_dept_desc" => "Disse afdelinger er en tilføjelse til de afdelinger operatøren er tildelt til via deres grupper ovenfor.",
    "also_registered_other_brand"   => "Brugerne er også registreret i brandet :brands.|Denne bruger er også registreret i følgende brands :brands.",
    "signature"                     => "Signatur|Signaturer",
    "signature_desc"                => "Opret personlige ticket signaturer, med mulighed for at tilpasse baseret på en tickets brand eller afdeling. Standard signatures anvendes når en signatur for en specifik afdeling og eller brand ikke kan findes.",
    "operator_signature"            => "Operatør Signatur|Operatør Signaturer",
    "ticket_signature_desc"         => "Definer operatørens standard ticket signatur.",
    "operator_signature_desc"       => "Yderligere signaturer for specifikke afdelinger og eller brands kan defineres i <a href=':route' target='_blank'>Operatør Signaturer</a> sektionen.",
    "view_organisation"             => "Vis Organisation",
    "new_owner"                     => "Ny Ejer",
    "operator_role"                 => "Operatør Rolle|Operatør Roller",
    "manage_users"                  => "Håndter Brugere",
    "manage_organisations"          => "Håndter Organisationer",
    "manage_operators"              => "Håndter Operatører",
    "user_profile"                  => "Bruger Profil",
    "organisation_access_level"     => "Organisations Adgangs Niveau",
    "organisation_notifications"    => "Organisations Notifikationer",
    "organisation_users"            => "Organisationens Brugere",
    "organisation_users_ticket"     => "Ovenfor er en liste med din organisations managers som vil modtage email opdateringer om denne ticket.",

    /*
     * 2.1.1
     */
    "change_password"               => "Skift Password",
    "current_password"              => "Nuværende Password",
    "new_password"                  => "Nyt Password",
    "personal_confirm_password"     => "Bekræft venligst dit nuværende password for at definere et nyt password.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Søg efter bruger/operatør...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Formatet der anvendes til visning af brugernavne i hele systemet.",
    "operator_name_format_desc"     => "Formatet der anvendes for visning af operatør navne i hele systemet.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Fjern Fra :record?",
    "remove_from_warn"              => "Dette vil permanent fjerne <strong>:name</strong> brugeren fra denne :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Socialt Login",
    "login_via"                     => "Log ind via :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Log venligst ind for at udføre tilknytning af din SoME konto.",
    "social_linking_register"       => "Udfyld venligst detaljerne nedenfor for at fuldføre registreringen af din konto. Din SoME konto vil automatisk blive linket.",
    "already_registered"            => "Allerede registreret?",
    "linked_accounts"               => "Tilknyttede Konti",
    "unlink_account"                => "Fjern tilknytning til :record konto",
    "unlink_account_warning"        => "Fjerner du tilknytning til SoME konto vil det betyde at den ikke længere kan anvendes til at logge direkte ind på din konto.",
    "failed_login"                  => "Mislykket Login|Mislykkede Logins",
    "resend_confirmation"           => "<strong><a href=':link'>Klik her</a></strong> for at blive tilsendt en ny bekræftelses email.",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "påkrævet \":permission\" tilladelse",
    "deleted_user"                  => "Slettet Bruger",
    "access_level_not_owner"        => "Det er ikke muligt at ændre adgangs niveauet for organisations ejere. Overfør ejerskab af organisationen til en anden bruger før ved at åbne organisationen og klikke på 'brugere' fanen.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Vælg en eksisterende eller indtast en ny organisation...",

    /*
     * 2.5.0
     */
    "organisation_domain_desc"      => "Indtast hvert domæne ejet af organisationen. Brugere som registrerer med en email adresse som tilhører et af disse domæner vil automatisk blive tilføjet til organisationen. Vi anbefaler at verificere at brugeren oprigtigt er en del af organisationen hvis de ikke har bekræftet ejerskab af deres email adresse.",
    "changing_email_desc"           => "Udskiftning af email addressen vil kræve at brugere bekræfter ejerskab af deres email adresse når de logger ind næste gang.",
    "unconfirmed_user_desc"         => "Brugeren har ikke bekræftet ejerskab af deres email adresse.",
    "unregistered_user_desc"        => "Denne konto blev oprettet automatisk uden en adgangskode. Du kan sende en bekræftelsesemail for at lade brugeren konfigurere deres konto eller definere et password for dem nedenfor.",
    "send_confirmation_email"       => "Send Bekræftelses Email",
    "mark_as_confirmed"             => "Marker som Bekræftet",
    "password_reset_already"        => "Du har allerede bekræftet ejerskab af denne email adresse, du kan fortsætte til login.",
    "unconfirmed_account"           => "Tjek venligst din email for at bekræfte ejerskab af denne email adresse.",
    "success_register_desc"         => "Tak for din konto registrering. Tjek venligst din email for at færdiggøre konto opsætning.",
    "resend_confirmation_sent"      => "En ny bekræftelses email er blevet sendt og vil blive modtaget indenfor et par minutter.",
    "register_confirm_desc"         => "Tak for din bekræftelse af email ejerskab, indtast en adgangskode nedenfor for at færdiggøre din konto opsætning.",
    "thank_you_confirm"             => "Tak for din bekræftelse af email ejerskab.",
    "use_gravatar"                  => "Brug Gravatar",
    "use_gravatar_desc"             => "Gravatar er en tjeneste som tilbyder en globalt genkendt avatar til sine registrerede brugere. Helpdesken vil automatisk sende en forespørgsel til secure.gravatar.com med et MD5 hash af hver bruger email adresse for at assistere med visning af avatarer. MD5 hash kan også være offentligt synlig i frontend HTML. Vi anbefaler at opdatere din privatlivs politik hvis du aktiverer denne funktionalitet.",

    /*
     * 2.6.0
     */
    "updating_email_address"        => "Klik venligst på linket sendt til :email for at færdiggøre bekræftelsen af email ejerskab.",
    "confirmation"                  => "Bekræftelse",
    "confirmation_email_in_use"     => "Email addressen er allerede i brug på en anden konto.",
    "continue_to_login"             => "Fortsæt venligst til <a href=':route'>login</a>.",
    "reset_request_desc"            => "Hvis en matchende konto blev fundet vil en email blive sendt til dig indenfor kort tid for at tillade dig at nulstille din adgangskode.",
    "password_reset_error"          => "Linket kan være udløbet. Hvis dit link ikke virker, anmod venligst om et nyt.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Kontoen er linket til en LDAP tjeneste. Log venligst ind med dit LDAP brugernavn og adgangskode.",
    "operator_message"              => "Operatør Beskeder",
    "force_two_fa"                  => "Kræv 2FA",
    "force_two_fa_desc"             => "Kræv to-faktor autorisation (2FA) på alle konti. Konti uden 2FA aktiveret vil blive taget igennem oprettelses processen af 2FA næste gang de logger ind.",
    "two_fa_required"               => "To-faktor autorisation (2FA) er påkrævet. Se venligst vejledningen nedenfor for at fortsætte.",
    "two_fa_user_enable"            => "Brugeren kan aktivere 2FA på deres konto i deres indstillinger.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Tillad brugere at registrere og logge ind med deres SoME konto.",
    "manage_social_login_options"   => "For at tilføje eller håndtere SoME login muligheder se venligst <a href=\":route\">Tredjeparts Integrationer</a> siden.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Download og installer en af de følgende applikationer og scan QR koden eller indtast den hemmelige nøgle. Dette vil tilføje din 2FA konto til din enhed, og du vil herefter være istand til at se kontoen og den vil generere en 6cifret kode som du skal indtaste for at verificere og færdiggøre opsætningen. Husk at klik på verify/bekræft før koden udløber. Din server tid skal være i synk med en NTP server for at denne funktionlitet vil fungere som forventet.",
    "two_fa_successfully_enabled"   => "To-faktor autorisation (2FA) er blevet aktiveret med success.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Telefonnummer|Telefonnumre",

    /*
     * 3.6.0
     */
    "security_settings"             => "Sikkerheds Indstillinger",
    "security_settings_desc"        => "Opdater dit password, aktiver 2FA og varetag andre sikkerheds relaterede indstillinger for din konto.",
    "active_sessions"               => "Aktive Sessioner",
    "active_sessions_desc"          => "Dette er en liste med enheder der har logget ind på din konto, du kan fjerne adgangen for sessioner du ikke genkender.",
    "current_session"               => "Nuværende Sessioner",
    "logged_in"                     => "Logget Ind",
    "revoke_session_desc"           => "Fjernelse af en session vil logge enheden ud af operatør panelet. Det vil også fjerne alle Husk Mig tokens for andre enheder.",

    /**
     * 4.0.0
     */
    "verify_phone_number"           => "Verify Phone Number",
    "verify_phone_method"           => "Select the method you wish to verify your phone number.",
    "verify_phone_code_sent"        => "A verification code has been sent to your phone number, please enter this code below.",
    "verify_phone_code_send_error"  => "An error occurred while sending the verification code. Please try again later.",
    "verify_phone_code_error"       => "Code could not be verified.",
    "logged_in_as"                  => "Logged in as :name",

);

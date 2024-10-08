<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Operatør Panel",
    "welcome"                   => "Velkommen til SupportPal",
    "welcome_desc"              => "Du har taget en smarat beslutning. Klik start for at begynde en hurtig produkt præsentation af vores indstillinger og funktioner.",

    // Dashboard
    "submit_ticket"             => "Opret Ticket",
    "submit_ticket_desc"        => "Brug denne form for at oprette en support ticket til vores højt trænede personale.",
    "track_ticket"              => "Spor en Ticket",
    "track_ticket_desc"         => "Ikke registreret? Brug din email adresse og ticket nummer til at spore din ticket status.",
    "my_tickets"                => "Mine Tickets",
    "my_tickets_desc"           => "Spor dine tickets. Du kan finde både aktive og tidligere tilføjede tickets her.",
    "no_modules"                => "In moduler aktiveret.",
    "search_results"            => "Søgeresultater",
    "found_results"             => "Fandt :resultater for din søgning",

    // Maintenance
    "maintenance"               => "Vi udfører vedligeholdelse i øjeblikket",
    "maintenance_desc"          => "Vores help desk er midlertidigt utilgængelig da vi udfører vedligeholdelse. Tak for din tålmodighed, vi er snart tilbage.",
    "maintenance_active"        => "Vedligeholdelses tilstand er aktiv.",

    // About
    "license_status"            => "Licens Status",
    "license_code"              => "Licens Kode",
    "change_license"            => "Skift License",
    "license_info"              => "Licens Information",
    "license_owner"             => "Licens Ejer",
    "license_created"           => "Licens Oprettet",
    "license_type"              => "Licens Type",
    "branding"                  => "Branding",
    "license_expires"           => "Licens Udløber",
    "license_valid_ip"          => "Licens gyldig IP(er)",
    "support_status"            => "Support Status",
    "support_expires"           => "Support Udløber",
    "version_info"              => "Version Information",
    "installed_version"         => "Installeret Version",
    "available_version"         => "Tilgængelig Version",
    "monthly_product"           => "* Din udløbsdato vil automatisk blive justeret på månedlig bases så snart udestående fakturaer er betalt.",

    // API Tokens
    "api_token"                 => "API Token|API Tokens",
    "token"                     => "Token",
    "regenerate_token"          => "Regenerer token",
    "access_level"              => "Adgangsniveau",
    "read_write"                => "Læs & Skriv",
    "read_only"                 => "Læs kun",

    // Spam Rules & Filtering
    "spam_rule"                 => "Spam Regel|Spam Regler",
    "containing_text"           => "Indeholdende tekst",
    "filter_new_message"        => "Ny Ticket besked (fra bruger)",
    "filter_new_comment"        => "Ny Selv-hjælps kommentar (fra bruger)",
    "filter_user_login"         => "Bruger Login",
    "filter_operator_login"     => "Operatør Login",
    "filter_api_access"         => "API Adgang",
    "content"                   => "Indhold",
    "sender"                    => "Afsender",
    "content_sender"            => "Indhold og Afsender",

    // Company
    "company"                   => "Firma|Firmaer",

    // Email
    "default_email_addr"        => "Standard Email Adresse",
    "default_email_addr_desc"   => "Email adressen der bruges i afsender feltet for størstedelen af system afsendte emails.",
    "include_operator_name"     => "Inkluder Operatør Navn",
    "include_operator_name_desc" => "Inkluder operatørens navn i emailens 'Fra' felt for ticket besvarelser. For eksempel: Fra: Joe Bloggs (DitFirma Support)",
    "include_dept_name"         => "Inkluder navn på afdeling",
    "include_dept_name_desc"    => "Inkluder navn på afdeling i 'Fra' feltet på alle ticket relaterede emails. Bemærk at dette typisk vil kreere en ny email tråd hvis en given ticket ændrer afdeling.",
    "global_email_header"       => "Global Email Header",
    "global_email_header_desc"  => "Tilføj en header til alle emails sendt af systemet. HTML er accepteret.",
    "global_email_footer"       => "Global Email Footer",
    "global_email_footer_desc"  => "Tilføj en footer til alle emails sendt ud af systemet. HTML er accepteret.",
    "email_template"            => "Email Skabelon|Email Skabeloner",
    "email_log"                 => "Email Log",
    "email_queue"               => "Email Kø",
    "email_queue_desc"          => "Nedenfor ses de emails der er planlagt til snarlig afsendelse af cron.",
    "email_method"              => "Email Metode",
    "php_mail_function"         => "PHP mail() funktion",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "SMTP Vært",
    "smtp_port"                 => "SMTP Port",
    "smtp_encryption"           => "SMTP Kryptering",
    "smtp_requires_auth"        => "Kræver Autorisation",
    "smtp_username"             => "SMTP Brugernavn",
    "smtp_password"             => "SMTP Adgangskode",
    "ssl"                       => "SSL",
    "email_content"             => "Email Indhold",
    "email_content_desc"        => "Tilføj et standard emne og email indhold for denne skabelon, du kan også oprette skabelonen på et andet sprog. Hvis en skabelon ikke er defineret for andre sprog vil standard skabelonen blive anvendt.",
    "outgoing"                  => "Udgående",
    "incoming"                  => "Indgående",
    "incoming_spam"             => "Indgående (Afvist - Spam)",
    "incoming_throttled"        => "Indgående (Afvist - begrænset)",
    "email_subject"             => "Email Emne",
    "twig_html_warning"         => "Twig er ikke tilladt i HTML tags/attributter og vil automatisk blive fjernet når du gemmer.",

    // Modules
    "modules"                   => "Modul|Moduler",
    "modules_desc"              => "Nedenfor er en liste med alle tilgængelige moduler, klik på rediger ikoner for at opdatere indstillingerne for et modul.",
    "module_disable"            => "Deaktiverede moduler vil blive fjernet fra frontend og operatør interfacet.",

    // Scheduled tasks
    "scheduled_task"            => "Planlagt Opgave|Planlagte Opgaver",
    "interval_desc"             => "Definer hvor ofte denne opgave køres, for eksempel vil 5 minutter betyde at denne opgave kører hvert 5 minut forudsat cron er aktiv og kører.",
    "cron_settings"             => "Cron Indstillinger",
    "cron_running"              => "Kører",
    "cron_not_running"          => "Kører Ikke",
    "task_ran"                  => "Planlagt opgave blev kørt manuelt med success.",
    "task_failed"               => "Planlagt opgave blev ikke kørt manuelt med success",

    // Plugins
    "plugins"                   => "Tilføjelse|Tilføjelser",
    "visit_plugin"              => "Besøg siden med tilføjelser",

    // Messages
    "last_activity"             => "Sidste aktivitet",
    "send_to"                   => "Send Til",
    "inbox"                     => "Indbakke",
    "compose"                   => "Opret",

    // Utilities
    "utilities"                 => "Værktøjer",

    // System Cleanup
    "system_cleanup"            => "System Oprydning",
    "system_cleanup_desc"       => "Brug de tilgængelige muligheder for at fjerne data der ikke er nødvendige eller ønskede.",
    "files"                     => "Filer",
    "files_desc"                => "Følgende objekter er gemt som filer på filsystemet.",
    "logs"                      => "Logs",
    "logs_desc"                 => "Følgende objekter er gemt som records i databasen.",
    "empty"                     => "Tom",
    "prune"                     => "Fjern",
    "total_records"             => "Objekter i alt",
    "system_cache"              => "System Cache",
    "system_cache_desc"         => "Bruges til at gemme system data der sjældent ændres for at optimere systemhastigheden.",
    "template_cache"            => "Skabelon Cache",
    "template_cache_desc"       => "Pre-kompilerede versioner af skabelon visninger er gemt for at optimere indlæsningstider.",
    "attachments_desc"          => "Ticket vedhæftninger er gemt på filsystemet men optager muligvis plads, du kan fjerne vedhæftede filer før en bestemt dato.",
    "system_activity_log_desc"  => "Gemmer al bruger, operatør og system aktivetet, du kan fjerne records før en bestemt dato.",
    "email_log_desc"            => "Gemmer alle indgående og udgående emails, du kan fjerne records før en bestemt dato.",
    "operator_login_log_desc"   => "Registrerer hver gang en operatør logger ind, du kan fjerne records før en bestemt dato.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Vis Captcha",

    // Widgets
    "dashboard"                 => "Dashboard",
    "add_remove_widget"         => "Tilføj / Fjern Widgets",
    "enable_tour"               => "Aktiver Produkt Demo",

    // Product Tour
    "dashboard_desc"            => "Dit personlige dashboard. Widgets kan fjernes, minimeres og flyttes rundt!",
    "private_messages"          => "Private Beskeder",
    "messages_desc"             => "Private Beskeder anvendes til 1:1 samtaler med andre operatører.",
    "configure"                 => "Konfigurer din Help Desk",
    "configure_desc"            => "SupportPal indeholder en række indstillinger der muliggør konfiguration efter eget ønske.",
    "default_email"             => "Standard Email Adresse",
    "default_email_desc"        => "Standard email adresse til al udgående kommunikation til brugere.",
    "dept_settings_desc"        => "Vi ved at afdelinger i din organisation arbejder forskelligt. Afdelingsbestemte indstillinger gør det muligt at overstyre globale indstillinger.",
    "department_desc"           => "Afdelinger tilsvarer dem du har i din organisation. Brugtbare for at sørge for henvendelser ender hos det rigtige personale.",
    "department_email"          => "Afdelingens Email Adresser",
    "dept_email_desc"           => "Flere email adresser kan tilføjes til en given afdeling. Email opsamling bliver udført på de konfigurerede addresser for at trække emails fra dine kunder ind i helpdesken.",
    "dept_tmpl"                 => "Afdelingens Email Skabeloner",
    "dept_tmpl_desc"            => "Til tider kan man ønske at ændre eller deaktivere afdelingers email skabeloner. Du kan definere afdelings specifikke email skabeloner og aktivere dem her.",
    "schedule_task_desc"        => "Planlagte opgaver bruges til at automatisere forskellige processer i SupportPal, inklusiv email-baserede tickets.",
    "schedule_task_2"           => "Planlagte opgaver kræver at et cron job er oprettet for at kunne fungere. Intervallet for hver opgave udført af cron jobbet kan justerer via redigerings formularen.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Opret et cron job tilvarende det eksempel der gives nedenfor på din egen server for at opnå automatisk kørsel af planlagte opgaver.",
    "ticket_channel_desc"       => "Ticket Kanaler er metoder til at oprette tickets. De kan nemt udvides til at inkludere dine egne kanaler, for eksempel tickets åbnet via Instagram.",
    "user_desc"                 => "Brugere som interagered med dit system bliver vist her. Du kan tilføje reditere og slette brugere som det passer.",
    "organisation_desc"         => "Brugere kan blive tildelt til organisationer givende dem adgang til tickets åbnet af andre brugere i deres organisation.",
    "operator_desc"             => "Andre medlemmer af ansatte kan tilføjes som operatører her, og håndtere hvilke afdelinger de er tildelt.",
    "ticket_desc"               => "Ticket oversigten indeholder en samling af alle tickets relevante for dig.",
    "ticket_toolbar"            => "Værktøjslinje",
    "ticket_desc3"              => "Bulk handlinger kan udføres på tickets igennem værktøjslinjen.",
    "tour_complete"             => "Gennemgangen er Komplet!",
    "tour_complete_desc"        => "Tak fordi du bruger SupportPal.<br /><br />Vi foreslår at du ser kom godt igang guiden nedenfor.",

    // IP Ban
    "ip_ban_time_desc"          => "Er ban permanent eller temporært.",
    "expiry"                    => "Udløb",
    "expired"                   => "Udløbet",
    "expiry_time"               => "Udløbstidspunkt",
    "expiry_time_desc"          => "Tiden hvor ban vil udløbe, hvis en dato ikke er sat eller i fortiden, vil en tid 24 timer fra nu blive sat.",
    "permanent"                 => "Permanent",

    // Languages
    "no_enabled_languages"      => "Fejlede opdatering af :item. Mindst et sprog skal være aktiveret.",

    // General Settings
    "locale"                    => "Sprog",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Admin Mappe",
    "admin_folder_desc"         => "Definer foldernavnet for operatørpanelet. Det anbefales fra et sikkerhedsmæssigt synspunkt at ændre fra standard \"admin\" mappen.",
    "enable_ssl"                => "Aktiver SSL",
    "maintenance_mode"          => "Vedligeholdelses tilstand",
    "maintenance_mode_desc"     => "Deaktiverer den offentlige helpdesk funktionalitet og viser en besked om vedligeholdelses tilstand. Rediger resources/templates/frontend/[template]/core/maintenance.twig for at ændre beskeden der vises for bruger.",
    "default_user_country"      => "Standard Bruger Land",
    "default_user_country_desc" => "Det land der vil blive valgst som standard når brugere registrerer.",
    "system_timezone"           => "System Tidszone",
    "system_timezone_desc"      => "Standard tidszonen der vil blive anvendt igennem systemet. Operatører kan skifte deres tidszone i deres personlige indstillinger.",
    "date_format"               => "Dato Format",
    "date_format_desc"          => "Dato formataet der anvendes globalt.",
    "time_format"               => "Tids Format",
    "time_format_desc"          => "Tidsformatet der anvendes globalt.",
    "simpleauth_key"            => "SimpleAuth Key",
    "simpleauth_key_desc"       => "Nøglen der anvendes til vores single sign on option, minimum 16 karakterer.",
    "simpleauth_operators"      => "Tillad for Operatører",
    "base_url"                  => "System URL",
    "base_url_desc"             => "Indtast den fulde web adresse til din installation, anvendes til generering af de URL´er der sendes til brugere.",
    "debug"                     => "Debug",
    "debug_mode"                => "Debug Mode",
    "pretty_urls"               => "Pretty URLs",
    "pretty_urls_desc"          => "Aktiverer du dette vil det fjerne index.php frm URL'er, aktiver kun only hvis du er istand til at tilgå operatørpanelet uden index.php i adressen. Deaktiver hvis du ikke ønsker mod_rewrite installeret, .htaccess filer er ikke tilladt eller er ikke konverterest til .htaccess rewrite regler der fungerer med din alternative webserver.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Aktivering af dette til anvende sikker forbindelse på hele frontenden og operatør området, en anbefalet indstilling. Kontroller venligst at HTTPS funktionalitet fungerer korrekt på din server før du aktiverer.",
    "unexpected_template_error" => "En uventet fejl opstod ved syntax check af skabelonen. Forsøg venligst igen.",
    "empty_template_preview"    => "Angiv venligst en gyldig skabelon for at anvende forhåndsvisning.",
    "no_department_address"     => "Fandt ikke en afdelinge i modtager listen.",
    "email_loop_detected"       => "Løkke detekteret - email sendt fra en afdelings adresse.",
    "email_ticket_locked"       => "Ticket er låst. Brugeren er bedt åbne en ny ticket via email.",
    "email_no_body"             => "Identifisering af email beskedens body lykkedes ikke.",
    "email_runtime_error"       => "En runtime error opstod ved oprettelse af ticket/besvarelse.",
    "email_reply_disabled"      => "Bruger email svar er blevet deaktiveret for denne afdeling.",
    "email_throttled"           => "For mange indgående mails fra bruger. Begrænsningen er :max_requests emails hver :decay_time minut.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Rediger de indstillinger der gælder for hele SupportPal. Hvis du ønsker at redigere indstillinger for en speficik sektion, eksempelvis tickets - åbn da sektionen i sidebaren for at se tilgængelige indstillinger for modulet. Indstillinger relateret til dine brands kan findes ved at klikke på Brands i sidebaren.",
    "brand"                     => "Brand|Brands",
    "brand_desc"                => "Et brand er din kundevendte identitet i SupportPal, tilladende flere kanaler af kommunikation. Flere brands kan anvendes samtidig under et enkelt samlet operatør panel.",
    "default_brand"             => "Standard Brand",
    "default_brand_desc"        => "Vælg det brand der vil anvendes som standard når gæster besøger din frontend og et matchende brand ikke automatisk kan findes.",
    "brand_enabled_desc"        => "Vælg for at aktivere eller deaktivere dette brand. Deaktiverede brands kan ikke anvendes og vil ikke tælle som en del af de tilladte brands på din licens, deaktivering kan anvendes for midlertidigt at skjule et brand og eller skjule information. Sletning af et brand vil fjerne al information inklusiv brugere og tickets der er relateret til det.",
    "inherit_global_setting"    => "Nedarv Global Indstilling",
    "brand_date_format_desc"    => "Dato formatet anvendt på dette brands frontend.",
    "brand_time_format_desc"    => "Tidsformatet anvendt på dette brands frontend.",
    "brand_timezone"            => "Brand Tidszone",
    "brand_timezone_desc"       => "Tidszonen der anvendes som standard på dette brands, brugere kan vælge deres egen tidszone.",
    "brand_default_lang_desc"   => "Sproget der anvendes som standard på dette brands frontend.",
    "brand_lang_toggle_desc"    => "Skal valgmenuen for sprog vises på dette brands frontend.",
    "brand_groups_desc"         => "Operatører i de valgte grupper kan oprette, opdatere, og slette (afhængig af rolle tilladelser) tickets og andet indhold i dette brand.",
    "select_brand"              => "Vælg et brand...",
    "add_another_language"      => "Tilføj et sprog...",
    "mass_email_brand_desc"     => "Vælg venligst hvilket brand emailen vil blive afsendt fra. Det vil blive anvendt til at afgøre hvilken sendt fra navn og adresse der anvendes, til indlæsning af den korrekte email skabelon og i flet felter. Hvis du sender til en bruger gruppe vil udelukkende brugere som tilhører brandet modtage en email.",
    "brand_limit_exceeded"      => "Din licens er kun tilladt til anvendelse af :allowed brand(s) samtidig. Besøg vores klient område for at tilkøbe yderligere brands.",
    "additional_brands"         => "Yderligere Brands",
    "purchase_more"             => "Køb flere",
    "brand_limit_allowed"       => "Din licens tillader i øjeblikket :allowed brand samtidig.|Din licens tillader i øjeblikket :allowed brands samtidig.",
    "brand_limit_purchase"      => "Hvis dette ikke er korrekt, <strong>genudsted</strong> din licens på vores <a href='http://www.supportpal.com/manage/' target='_blank'>klient område</a> og besøg <a href=':route'>Licens Information</a> siden for at synkronisere din helpdesk med vores licens server.<br />For at tilkøbe yderligere brand, besøg venligst <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>opgrader din licens</a>.",
    "support_expiry"            => "Din support og opdateringsaftale er gyldig indtil :date.",
    "support_status_desc"       => "Venligst <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>forny din support aftale</a> for at få den seneste support og opdateringer fra SupportPal.",
    "ip_ban"                    => "IP Ban|IP Bans",
    "ip_whitelist"              => "IP Whitelist",
    "whitelisted_ip"            => "Whitelisted IP",
    "license_path"              => "Installations Sti",
    "php_info"                  => "PHP Information",
    "log"                       => "Log|Logs",
    "invalid_department_brand"  => "Afdelingen er ikke tildelt et ticket brand.",
    "incoming_rejected"         => "Indgående (Afvist)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Log File Manager",
    "file_manager_desc"         => "Herunder kan du downloade eller slette de logs der gemmes af systemet, de kan anvendes i fejlsøgningsøjemed. Log filerne bliver automatisk slettet, der gemmes kun de logs for de seneste 5 dage.",
    "app_logs"                  => "Applikations Logs",
    "app_logs_desc"             => "Alle advarsler og fejl fra generel brug af helpdesken bliver logget her. Du kan blive bedt om at fremsende en eller flere af disse logs når du anmoder om support.",
    "email_logs"                => "Email Logs",
    "email_logs_desc"           => "Detaljer om indgående emails bliver gemt i disse filer når emails bliver indlæst og oprettet som tickets.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Svar Til",
    "and_number_others"         => "Og :number andre|og :number andre",
    "user_templates"            => "Bruger Skabeloner",
    "operator_templates"        => "Operatør Skabloner",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Kummulativ Vedhæftnings Størrelse Begrænsning",
    "attachment_size_desc"      => "Den maksimale størrelse på alle vedhæftninger der sendes i en enkelt email. Tilgængelige muligheder er K (for Kilobytes) og M (for Megabytes), alt andet antages at være opgivet i bytes. Eksempel: 5M for 5 Megabytes. Sæt til 0 for ikke at tillade afsendelse af vedhæftninger via email og istedet kræve at modtagere downloader vedhæftninger via helpdesken.",
    "attachment_limit_reached"  => "Kummulativ filstørrelses begrænsning nået (:size). Send evt. filer via et andet medie.",
    "no_existing_translations"  => "Ingen eksisterende oversættelser.",
    "add_translation"           => "Tilføj Oversættelse",
    "todo_list"                 => "To Do Liste",
    "version_check"             => "Version Tjek",
    "system_overview"           => "System Overblik",
    "getting_started"           => "Kom igang",
    "operator_notes"            => "Operatør Noter",
    "simpleauth_operators_desc" => "Tillad operatører at logge ind og ud med SimpleAuth, vi anbefaler altid at bevare dette deaktiveret med mindre du bruger det specifikt til dette formål.",
    "upgrade_and_reactivate"    => "Opgrader og Genaktiver",
    "upgrade_pending"           => "Opgradering Afventer",
    "locale_in_uri"             => "Inkluder lokalitet i URI",
    "locale_in_uri_desc"        => "Deaktiver for at fjerne lokalitet fra URI, for eksempel: http://support.mycompany.com/en/announcements bliver til http://support.mycompany.com/announcements. Kan kun deaktiveres når der udelukkende er et aktiveret sprog i systemet.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Dette er i øjeblikket defineret som et standard sprog. Deaktiverer du sproget vil et andet aktiveret sprog blive defineret som standard sprog.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Aktiver venligst JavaScript for at anvende denne side.",
    "go_to_dashboard"           => "Gå til dashboard",
    "brand_colour_desc"         => "Vælg en farve til dit brand, den vil blive anvendt til farveskemaet på både frontend og i operatør skabeloner. Efterlad tom for at anvende standard farveskemaet.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "Favicon billedet fremgår i adressebaren og anvendes til at identificere din hjemmeside. For de bedste resultater kontroller venligst at ikonet indeholder en række af størrelser fra 32x32px til 310x310px, er kvadrate og i ICO/PNG format.",
    "view_original"             => "Vis Original",
    "download_original"         => "Download Original",
    "consume_all"               => "Angiv alternativ en afdelings email addresse  med \"Consume All\" aktiveret.",
    "reprocess_email"           => "Genindlæs Email",
    "reprocess_email_desc"      => "Vi anbefaler at du gennemser hvad der oprindeligt blokerede emailen og foretag de nødvendige ændringer før du forsøger at genprocessere.",
    "email_blocked_desc"        => "Email fejlede afsendelse flere gange, den skal nu afsendes manuelt.",
    "captcha_type"              => "Captcha Type",
    "default_captcha"           => "Default Captcha",
    "recaptcha_site_key"        => "Site Key",
    "recaptcha_secret_key"      => "Secret Key",
    "recaptcha_desc"            => "Registrer venligst et nyt site på <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, vælg den korrekte type reCAPTCHA og kontoller at hver brand domain er inkluderet. Kopier site og secret key ovenfor.",
    "enter_code"                => "Indtast kode",
    "export_data"               => "Eksporter Data",
    "export_data_desc"          => "Generer en downloadbar eksport af data tilhørende hver enkelt bruger.",
    "export_data_select"        => "Vælg venligst hvilken type data du vil eksportere.",
    "export_data_scheduled"     => "Eksporten bliver nu genereret, dette kan tage et stykke tid. Vi vil sende dig en e-mail når den er tilgængelig til download.",
    "database"                  => "Database",
    "database_desc"             => "Følgende er gemt i databasen.",
    "prune_users"               => "Inaktive bruger records kan automatisk blive beskåret. En bruger er antaget inaktiv når de ikke har logget ind eller haft aktivitet i en given tid.",
    "prune_tickets"             => "Inaktive tickets kan automatisk blive beskåret. En ticket er antaget inaktiv når den er løst og ikke har haft aktivitet i en given tid.",
    "prune_organisations"       => "Inaktive organisationer kan automatisk blive beskåret. En organisation er antaget inaktiv når den ikke har brugere linket til den og ikke har haft aktivitet i en given tid.",
    "prune_export"              => "Bruger data eksporter er gemt på filsystemet men kan optage plads, du kan fjerne eksporterede filer genereret før en given dato.",
    "automatically_prune"       => "Slet automatisk",
    "days_after_saved"          => "Emner efter",
    "days_after_last_activity"  => "Inaktive emner efter",
    "record_permanent_delete"   => "Emner vil blive slettet permanent. Dette vil have effekt på rapporter.",
    "record_delete_relations"   => "Emnerne vil blive slettet permanent sammen med de følgende relaterede data: :relations. Dette vil have effekt på rapporter.",
    "manually_prune"            => "Slet manuelt emner oprettet før",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Hvis du aktiverer denne indstilling når siden ikke indlæser korrekt kan du blive låst ude af SupportPal!",
    "verify_frontend_loads"     => "Verificer at frontenden indlæses korrekt herunder.",
    "twig_operator_reply_template"   => "The {{ operator.reply_template|raw }} merge field will be processed at runtime hence the preview may be incorrect.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Tillader kørsel af andre brands på din SupportPal installation.",
    "no_branding"               => "Ingen Branding",
    "no_branding_desc"          => "Fjerner SupportPal branding fra klient siden af helpdesken.",
    "multi_ip"                  => "Multi-IP Support",
    "multi_ip_desc"             => "Tillader at låse SupportPal til mere end en intern eller ekstern IP.",
    "purchase"                  => "Køb",
    "ticket_number_missing"     => "Til ticket relaterede emails, de {{ ticket.number }} flet felter skal være til stede i email emnet og skal være pakket ind i enten <em>[#{{ ticket.number }}]</em> eller <em>(#{{ ticket.number }})</em> for at route svar til den korrekte ticket. Hvis du gerne vil fjerne ticket nummeret, overvej venligst at aktivere <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>email sub-addressering</a>.",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Aktiver debug mode for at vise fejl, anvendes kun til debugging eller hvis instrueret af support. Fejl og andre brugbare logging beskeder er ellers gemt i applikations loggen, som kan downloades ved at gå til -> Logs -> Log File Manager.",
    "record_trash_relations"    => "Emner vil blive flyttet til skraldespanden og permanent slettet efter :number days sammen med følgende relaterede data: :relations. Dette vil påvirke rapporter.",
    "uninstall_plugable_warning" => "Afinstallation af :plugable vil slette alle associacerede filer og data. Vi anbefaler at deaktivere :plugable istedet.",
    "web_settings_desc"         => "Web kanalens indstillinger gælder for frontenden. Per standard kan tickets tilgås af alle der kender en unik ticket URL. Du kan deaktivere dette og kræve login før adgang til ticket information kan opnås.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Indtast en streng (et bestemt ord eller email adresse to vil banne), alle strenge er uafhængige af små og store bogstaver.",
    "spam_is_regex_desc"        => "Regler kan tage nytte af regulære udtryk; hvis du ønsker at anvende dette aktiver da denne indstilling. Du behøver ikke at anvende afgrænsere.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "Filerne kunne ikke uploades grundet en server fejl.",
    "insert_image"              => "Indsæt Billede",
    "quote"                     => "Citat",
    "code"                      => "Kode",
    "format"                    => "Format",
    "paragraph"                 => "Paragraf",
    "heading1"                  => "Overskrift 1",
    "heading2"                  => "Overskrift 2",
    "heading3"                  => "Overskrift 3",
    "heading4"                  => "Overskrift 4",
    "heading5"                  => "Overskrift 5",
    "heading6"                  => "Overskrift 6",
    "upload"                    => "Upload",
    "more_formatting"           => "Mere Formattering",
    "clearformat"               => "Ryd Formattering",
    "bold"                      => "Fed",
    "underline"                 => "Understreg",
    "italic"                    => "Kursiv",
    "strikethrough"             => "Gennemstreg",
    "font_color"                => "Font Farve",
    "insert_link"               => "Indsæt Link",
    "edit_link"                 => "Rediger Link",
    "unlink"                    => "Unlink",
    "orderedlist"               => "Sorteret List",
    "unorderedlist"             => "Usorteret List",
    "outdent"                   => "Udryk",
    "indent"                    => "Indryk",
    "lists"                     => "Lister",
    "edit_html"                 => "Rediger HTML",
    "sEmptyTable"               => "Ingen data tilgængelig i tabellen",
    "sInfo"                     => "Viser _START_ til _END_ af _TOTAL_ registreringer",
    "sInfoEmpty"                => "Viser 0 til 0 af 0 registreringer",
    "sInfoFiltered"             => "(filtreret fra _MAX_ totale registreringer)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Vis _MENU_ registreringer",
    "sLoadingRecords"           => "Indlæser...",
    "sProcessing"               => "Behandler...",
    "sSearchPlaceholder"        => "Søg...",
    "sZeroRecords"              => "Ingen match fundet",
    "sSortAscending"            => ": aktiver sortering i stigende orden",
    "sSortDescending"           => ": aktiver sortering i faldende orden",
    "incoming_auto_reply"       => "Modtaget (Auto-Reply)",
    "logo_dark_mode"            => "Mørk Tilstand Logo",
    "logo_dark_mode_desc"       => "Hvis dit logo kun er designet til at fungere på en lys baggrund vælg da et andet logo til mørk tilstand. Feltet kan enten være en sti relativ til base bibliotektet (vi anbefaler at gemme dit logo i resources/assets/ mappen) eller en direkte URL til billedet.",
    "template_mode"             => "Skabelon Tilstand",
    "template_mode_desc"        => "Vælg et lyst eller mørkt tema til interfacet. Brugere vil kunne vælge deres egen præference i deres profil.",
    "light_mode"                => "Lys Tilstand",
    "dark_mode"                 => "Mørk Tilstand",
    "logo"                      => "Logo",
    "logo_desc"                 => "Skift dit standard logo for dette brand. Feltet kan enten indeholde en sti relativ til base biblioteket (vi anbefaler at gemme dit logo i resources/assets/ mappen) eller en direkte URL til billedet.",
    "website_url"               => "Hjemmeside URL",
    "website_url_desc"          => "Tilføj et link tilbage til din primære hjemmeside i support portal headeren.",
    "back_to_website"           => "Tilbage til hjemmeside",
    "template"                  => "Skabelon",
    "how_can_we_help"           => "Hvordan kan vi hjælpe dig i dag?",
    "ticket_desc2"              => "Ticket griddet kan sorteres som du ønsker og filtreres efter behov.",
    "zip_extension_required"    => "Zip PHP udvidelsen er ikke installeret. Installer den og prøv igen.",
    "zip_file_not_downloaded"   => "Zip filen kunne ikke downloades. Verificer at du er istand til at åbne: :url",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Tredjeparts Integration|Tredjeparts Integrationer",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth Data",
    "client_id"                 => "Client ID",
    "client_secret"             => "Client Secret",
    "create_credentials"        => "Opret venligst dine autorisations detaljer via <a href=\":route\">Tredjeparts Integration</a> siden.",
    "oauth_data_missing"        => "Klient ID og/eller secret er ikke defineret og er påkrævet. Når du tilsvarende instruktionerne nedenfor har konfigureret det, luk venligst popup-en og genvalider.",
    "configure_after_brand_created" => "Dette kan konfigureres efter brandet er blevet oprettet.",
    "get_access_token"          => "Få Access Token",
    "reset_access_token"        => "Nulstil Access Token",

    /*
     * 3.4.0
     */
    "brand_name"                => "Brand Navn",
    "brand_name_desc"           => "Dit Brandnavn anvendes til al korrespondence med brugere.",
    "supportpal_announcements"  => "SupportPal Annonceringer",
    "add_selectize"             => "Tilføj <strong>:item</strong>...",
    "general_settings"          => "Konfigurer generelle indstillinger",
    "configure_brand"           => "Konfigurer brand",
    "configure_department"      => "Konfigurer afdeling",
    "setup_cron"                => "Konfigurer cron job",
    "channel_settings"          => "Opdater ticket kanal indstillinger",
    "add_user"                  => "Tilføj en ny bruger",
    "open_ticket"               => "Åbn en ny ticket",
    "reply_ticket"              => "Besvar ticket",
    "new_version_available"     => "Ny Version Tilgængelig",
    "new_version_desc"          => "En ny version af SupportPal er blevet udgivet, vi anbefaler at du altid holder din installation up to date.<div class='description'>Godkender du denne besked vil underretningen blive skjult indtil en ny opdatering udgives.</div>",
    "acknowledge"               => "Godkend",
    "running_latest_version"    => "Du kører den seneste version.",
    "running_prerelease"        => "Du kører en pre-udgivelses version.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Resultater Per Side",
    "class_name"                => "Class Navn",
    "possible_permission_issue" => "Du kører kommandoen som \":cli_user\", imens \":path\" er ejet af \":path_user\", dette kan lede til udfordringer med fil tilladelser.",
    "system_update"             => "System Opdatering",
    "system_update_desc"        => "Opdater SupportPal til den senest tilgængelige version.",
    "update_available"          => "Opdatering Tilgængelig",
    "up_to_date"                => "Opdateret",
    "release_notes"             => "Frigivelses Noter",
    "about_to_update_to"        => "Du er ved at opdatere til version <strong>:version</strong>. En fuld system backup vil blive taget automatisk, før opdateringen installeres.",
    "waiting_for_update_start"  => "Venter på at opdateringen begynder... Dette kan tage et par minutter.",
    "binary_paths"              => "Binære Stier",
    "binary_paths_desc"         => "PATH miljø variablen er brugt til at finde påkrævede binære filer. Hvis en eller flere af dine binære filer ikke kan findes, kan du specificere den fulde stil til hver binære fil.",
    "cron_makesure"             => "For assistance med registering af cron job, se venligst <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>Cron Job Hjælp</a>.",
    "cron_must_run_for_update"  => "Cron jobbet skal være kørende for at anvende denne funktion.",
    "support_expired"           => "Support og opdatering på din licens er udløbet.",
    "update_permitted_version"  => "Licensen tillader kun opdatering til :version.",
    "update_renew_support"      => "Opdater venligst din support og opdateringsaftale for at opgradere til den seneste version af SupportPal.",
    "renew"                     => "Forny",

    /*
     * 3.7.0
     */
    "background_jobs"           => "Baggrunds Jobs",
    "background_jobs_not_processing" => "Baggrunds jobs bliver ikke behandlet i øjebliket, se <a target='_blank' href='https://docs.supportpal.com/current/Background+Jobs#Troubleshooting'>fejlfindings skridt</a>.",

    /*
     * 4.0.0
     */
    "addon"                     => "Tilføjelse|Tilføjelser",
    "addon_already_exists"      => "En tilføjelse eksisterer allerede på denne sti: :path",
    "addons_marketplace"        => "Markedsplads",
    "addons_missing_valid_artifact" => "Tilføjelsen har ikke et gyldigt arkiv.",
    "checksum_not_matched"      => "Den downloadede fil fejlede checksum verifikation.",
    "invalid_archive_format"    => "Artifakten bør ikke inkludere andre bibliotekter end tilføjelsen.",
    "downloading_version"       => "Downloader tilføjelse version :version til :path...",
    "extracting_addon"          => "Udpakker tilføjelsens filer...",
    "activating_addon"          => "Aktiverer tilføjelse...",
    "addon_install_success"     => "Tilføjelse installeret med success.",
    "addon_install_error"       => "Tilføjelsen blev ikke installeret, kontroller venligst applikations loggen for yderligere detaljer.",
    "addon_latest_version"      => "Tilføjelsen kører allerede den seneste version.",
    "addon_update_success"      => "Tilføjelse opdateret med success.",
    "addon_update_error"        => "Tilføjelsen fejlede opdatering, og er tilbageført til tidligere version, kontroller venligst applikations loggen for yderligere detaljer.",
    "addon_basic_info"          => "Angiv venligst basis information om tilføjelsen.",
    "addon_author_name"         => "Forfatter",
    "addon_author_uri"          => "Forfatter URI (link til din hjemmeside)",
    "addon_author_uri_short"    => "Forfatter URI",
    "addon_vendor_name"         => "Firma navn (Navnet på dit firma, kan defineres tilsvarende forfatter navn)",
    "addon_vendor_name_short"   => "Firma Navn",
    "addon_name"                => "Navn på tilføjelse",
    "addon_description"         => "Beskrivelse af tilføjelse",
    "addon_creating"            => "Opretter tilføjelse...",
    "addon_ready"               => "Tilføjelsen er klar i :directory! Byg noget fantastisk.",
    "addon_version_not_supported" => "Den tilgængelige version af tilføjelsen supporterer ikke den installerede version af SupportPal.",
    "no_addons_found"           => "Ingen tilføjelser fundet.",
    "price"                     => "Pris",
    "one_time"                  => "Engangs",
    "monthly"                   => "Månedlig",
    "quarterly"                 => "Kvartalsvis",
    "semiannually"              => "Halvårlig",
    "annually"                  => "Årlig",
    "biennially"                => "Toårig",
    "triennially"               => "Treårig",
    "tag"                       => "Tag|Tags",
    "login_to_install"          => "<a href=':link'>Login</a> for at Installere",
    "marketplace_login_error"   => "Login fejlede. Gå til <a target='_blank' href='https://www.supportpal.com/manage/logout.php'>logud</a> og sørg da for du logger ind med SupportPal kontoen der har din licens.",
    "payment_required"          => "Betaling Påkrævet",
    "addon_purchase_info"       => "Ved at klikke på ovenstående knap godkender du din konto vil blive opkrævet prisen vist med det valgte tilbagevendede interval, og du godkender <a href=':link' target='_blank'>terms of service</a>.",
    "addon_cancel_info"         => "Anullerer du vil tilføjelsen omgående blive deaktiveret, og du vil ikke blive opkrævet yderligere betaling.",
    "system_health"             => "System Helbred",
    "system_health_desc"        => "Helbreds kontrol monitorerer at systemet yder korrekt og notificerer dig hvis der opstår problemer.",
    "system_health_errors"      => "En eller flere <a href=':link'>system helbreds</a> kontroller er fejlet.",
    "app_log_check"             => "Applikations Log Fejl Antal",
    "app_log_errors_exist"      => "Applikations log filen for i dag indeholder fejlt, kontroller venligst logfiler ved at navigere til Værktøjer -> Logs -> Log Fil Manager -> :filename",
    "redis_check"               => "Redis Forbindelse",
    "web_server_check"          => "Web Server",
    "web_server_error"          => "Ikke i stand til at forbinde til :url",
    "redirection_rules_check"   => "Regler for omdirigering",
    "redirection_rule_error"    => "Server omdirigerings regler skal fjerne /index.php fra stien. Hvis ikke kan angribende parter potientielt tilgå dine filer.",
    "cron_check"                => "Cron",
    "cron_check_error"          => "Cron kører ikke.",
    "cron_check_warning"        => "De følgende opgaver: (:tasks) er ikke blevet kørt indenfor det forventede interval.",
    "database_check"            => "Database Forbindelse",
    "disk_usage_check"          => "Ledig Disk Plads",
    "email_queue_check"         => "Udgående Email Kø",
    "email_queue_warning"       => "Email køen indeholder :number emails som kræver opmærksomhed.",
    "pipe_check"                => "Email Piping",
    "file_not_found"            => "Filen ':path' blev ikke fundet.",
    "file_not_executable"       => "Filen ':path' er ikke eksekverbar.",
    "dependency_resolution"     => "Ikke i stand til at køre helbreds tjek.",
    "debug_mode_warning"        => "Debug tilstand bør kun anvendes midlertidigt.",
    "custom_colour"             => "Brugerdefineret Farve",
    "remove_colour"             => "Fjern Farve",
    "background_colour"         => "Baggrunds Farve",
    "open_link"                 => "Åbn link",
    "open_link_in"              => "Åbn link i...",
    "new_window"                => "Nyt vindue",
    "current_window"            => "Nuværende vindue",
    "edit_image"                => "Rediger billede...",
    "alternative_description"   => "Alternativ beskrivelse",
    "browse_image"              => "Browse efter et billede",
    "drop_image"                => "Drop et billede her",

    /*
     * 4.2.0
     */
    "keyboard_shortcuts"        => "Keyboard Shortcuts",
    "enable_keyboard_shortcuts" => "Enable keyboard shortcuts",
    "shortcut_global"           => "Global shortcuts",
    "shortcut_toggle"           => "Toggle the keyboard shortcuts dialog",
    "shortcut_start_search"     => "Start search",
    "shortcut_goto_new_ticket"  => "Go to the open new ticket page",
    "shortcut_ticket_view"      => "Ticket view shortcuts",
    "shortcut_focus_reply"      => "Focus the reply form",
    "shortcut_focus_notes"      => "Focus the notes form",
    "shortcut_focus_forward"    => "Focus the forward form",
    "shortcut_toggle_user_tab"  => "Toggle the user details tab in the sidebar",
    "shortcut_take_ticket"      => "Take ticket",
    "shortcut_close_ticket"     => "Close ticket",
    "shortcut_lock_ticket"      => "Close & lock ticket",
    "shortcut_unlock_ticket"    => "Unlock ticket",
    "shortcut_trash_ticket"     => "Move ticket to trash",
    "shortcut_block_user"       => "Block user and move ticket to trash",
    "shortcut_watch_ticket"     => "Watch ticket",
    "shortcut_unwatch_ticket"   => "Unwatch ticket",
    "shortcut_merge_ticket"     => "Merge ticket",
    "shortcut_unmerge_ticket"   => "Unmerge ticket",
    "shortcut_expand_all"       => "Expand all messages",
    "shortcut_collapse_all"     => "Collapse all messages",
    "shortcut_print_ticket"     => "Print ticket details and messages",

    /*
     * 4.3.0
     */
    "db_connection_error"       => "Database connection error, please check :path",

    /*
     * 5.0.0
     */
    "favicon_dark_mode"         => "Dark Mode Favicon",
    "favicon_dark_mode_desc"    => "If your favicon was designed to only work on a light background, set a different favicon for dark mode. This will only be used if your browser and/or operating system is running in dark mode.",
    "template_mode_system_desc" => "Choosing system will synchronise the template mode to light or dark mode depending on your operating system theme settings.",

    /*
     * 5.0.1
     */
    "starttls_or_none"          => "STARTTLS / None",

    /*
     * 5.1.0
     */
    "email_attempt_at_desc"     => "The email failed to send. Retrying again :time.", // :time example, "in 5 mins"
    "websockets_connection"     => "Web Sockets Connection",
    "websockets_not_running"    => "Unable to connect to web socket server.",
    "search_driver_check"       => "Search Driver",
    "search_driver_not_working" => "The configured search driver is not working correctly.",

    /*
     * 5.2.0
     */
    "temporary_path"            => "Temporary Path",
    "temporary_path_desc"       => "The temporary path is used to store files during the update. The system temporary path is used by default. The path must have at least 3GB of free space.",
    "background_jobs_desc"      => "Below are a list of background jobs that have failed recently.",
    "failed_jobs"               => "Failed Jobs",
    "horizon_dashboard"         => "Horizon Dashboard",
    "job"                       => "Job|Jobs",
    "job_payload"               => "Job Payload",
    "job_exception"             => "Job Exception",
    "failed_at"                 => "Failed At",
    "queue"                     => "Queue",
    "exception"                 => "Exception",
    "data"                      => "Data",
    "failed_background_jobs"    => "One or more <a target='_blank' href=':link'>background jobs</a> have failed and require manual attention.",

    /*
     * 5.3.0
     */
    "ticket_channel_2"          => "Vi stiller et antal standard kanaler til rådighed. Du kan aktivere og konfigurere Facebook og Twitter kanalerne for at indsamle tickets genereret via sociale medier.",
    "incoming_duplicate"        => "Incoming (Duplicate)",

    /*
     * 5.4.0
     */
    "email_method_overridden"   => "The email method has been overridden in the <a href=':link' target='_blank'>default brand settings</a>.",
    "addon_not_found"           => "Add-on not found.",
    "deactivating_addon"        => "Deactivating add-on...",
    "addon_already_activated"   => "Add-on already activated.",
    "addon_already_deactivated" => "Add-on already deactivated.",
    "addon_cannot_deactivate"   => "Add-on cannot be deactivated.",
    "addon_activation_failed"   => "Add-on activation failed, check the application log for more information.",
    "addon_deactivation_failed" => "Add-on deactivation failed, check the application log for more information.",
    "site_key"                  => "Site Key",
    "secret_key"                => "Secret Key",
    "turnstile_desc"            => "Please register a new Turnstile widget at <a target='_blank' href=\"https://developers.cloudflare.com/turnstile/get-started/\">Cloudflare</a>. Copy the site and secret key above.",
    "hcaptcha_desc"             => "Please register at <a target='_blank' href=\"https://hcaptcha.com/\">hCaptcha</a>. Copy the site and secret key above.",
    "captcha_type_desc"         => "Vælg den Captcha der skal anvendes igennem systemet. Vi anbefaler at skifte til Google reCAPTCHA, som kræver yderligere konfiguration.",

);

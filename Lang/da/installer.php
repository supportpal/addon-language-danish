<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Systemkrav Fejlede",

    // Index
    "supportpal_installer"      => "SupportPal Installationsværktøj",
    "select_language"           => "Vælg Sprog",
    "install_type"              => "Installations Type",
    "install"                   => "Ren Installation",
    "upgrade"                   => "Opgrader Eksisteredende Installation",
    "support"                   => "Licens koden til denne installation har ikke et gyldigt support &amp; opgraderings abbonement, og den er som så ikke tilgængelig for installation af denne version af SupportPal. Venligst <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renew</a> din support &amp; opdaterings aftale.",

    // Upgrade
    "successfully_updated"      => "Tillykke, SupportPal er opgraderet med success.",

    // Install
    // Step 1
    "step_1"                    => "Trin 1 af 7: Accepter EULA",
    "step_1_desc"               => "Læs venligst vores software licens aftale nedenfor. Ved at fortsætte anerkender du licensbetingelserne.",
    "i_accept_and_continue"     => "Jeg accepterer og vil fortsætte",

    // Step 2
    "step_2"                    => "Trin 2 af 7: System Krav",
    "not_available"             => "Ikke tilgængelig",
    "php_version"               => "PHP Version",
    "php_version_not_found"     => "Ikke tilgængelig, fandt PHP version: :version",
    "php_extensions"            => "PHP udvidelser",
    "file_writeable"            => "Fil Rettigheder",
    "file_writeable_desc"       => "Alle nedenstående filer bør være skrivbare for web serveren. Vi anbefaler at anvende 755 fil rettigheder, dog kan nogle systemer kræve 777 hvis filerne ikke er ejet af web server brugeren. Biblioteker bør være rekursivt skrivbare.",

    // Step 3
    "step_3"                    => "Trin 3 af 7: Database",
    "step_3_desc"               => "Indtast venligst detaljerne for den database du har konfigureret til SupportPal.",
    "hostname"                  => "Værtsnavn",
    "port"                      => "Port",
    "port_desc"                 => "(Skiftes kun hvis port 3306 ikke anvendes)",
    "database"                  => "Database",
    "database_not_empty"        => "Databasen må ikke indeholde tabeller.",

    // Step 4
    "step_4"                    => "Trin 4 af 7: Opret Tabeller",
    "step_4_desc"               => "Migrationen vil blive foretaget i baggrunden, og en fuld log vil blive udskrevet nedenfor. Dette kan tage flere minutter, når udført klik venligst på fortsæt.",

    // Step 5
    "step_5"                    => "Trin 5 af 7: Operatør Konto",
    "step_5_desc"               => "SupportPal kræver en gyldig licens for at fungere, indtast venligst en nedenfor.",
    "license_desc"              => "Din SupportPal licens nøgle er 23 karakterer lang og begynder med SP-",
    "operator_desc"             => "Opret venligst en administrator konto til operatør panelet ved at indtaste dine oplysninger nedenfor.",
    "validating_license"        => "Validerer Licens...",

    // Step 6
    "step_6"                    => "Trin 6 af 7: Hurtig opsætning",
    "step_6_desc"               => "Indtast dine firma og hjemmeside detaljer nedenfor.",
    "locale_desc"               => "Definer lokalitets indstillinger for dit system.",
    "operator_success"          => "Din administrator konto er blevet oprettet.",

    // Step 7
    "step_7"                    => "Trin 7 af 7: Installeret!",
    "successfully_installed"    => "Tillykke, SupportPal er blevet installeret med success.",
    "operator_panel"            => "Operatør Panel",
    "help_desc"                 => "Får du brug for hjælp til konfiguration eller brug af SupportPal, har vi to primære kilder af information til rådighed:",
    "submit_a_ticket"           => "Tilføj en Ticket",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Du opfylder :required af :total påkrævede krav.",
    "optional_requirements"     => "Du opfylder :optional af :total optionelle krav.",
    "both_requirements"         => "Du opfylder :required af :total_required påkrævede krav og :optional af :total_optional optionelle krav.",
    "php_version_is"            => "Din PHP Version er :version.",
    "enabled"                   => "Aktiveret",
    "disabled"                  => "Deaktiveret",
    "php_settings"              => "PHP Indstillinger",
    "ipv6_support"              => "IPv6 Support",
    "memory_limit"              => ">= 128MB Hukommelse",
    "memory_limit_error"        => "Din hukommelses grænse er ':limit'.",
    "permission_denied"         => "Tilladelse afvist",
    "writable"                  => "Skrivbar",
    "help_php_version"          => "For assistance med installation af en ny PHP version kontakt venligst din hosting udbyder eller server administrator.",
    "help_php_extensions"       => "PHP udvidelser er variable afhængig af din server, din vært og andre system variabler. For assistance med installation af manglende afhængigheder, kontakt venligst din hosting udbyder eller server administrator.",
    "help_php_settings"         => "For yderligere assistance, læs venligst <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Hjælp til PHP Indstillinger</a>.",
    "disabled_functions"        => "Deaktiverede Funktioner",
    "help_mysql_version"        => "For assistance med installation af en ny MySQL version, kontakt venligst din hosting udbyder eller server administrator.",
    "mysql_version"             => "MySQL Version",
    "mysql_version_not_found"   => "Ikke tilgængelig, fandt MySQL version: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Hvis din server har IPv6 netværks understøttelse, installer da venligst php-sockets udvidelsen.",
    "email_address_desc"        => "Indtast din virksomheds primære email adresse, denne vil blive brugt som standard email adresse til afsendelse og email adressen til din første afdeling. Du kan tilføje flere email adresser senere.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube Loaders version :required eller højere er påkrævet. Fandt: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "PNG & JPEG Support",
    "allow_url_fopen"           => "'allow_url_fopen' Aktiveret",
    "allow_url_fopen_failure"   => "Aktiver 'allow_url_fopen' i din php.ini fil for at anvende Gravatar og andre features.",
    "allowed_methods"           => "HTTP Tilladte Metoder",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Server Version >= :min",
    "mysql_server_version_desc" => "MySQL :min eller højere er påkrævet for at køre SupportPal. Fandt: ':version'.",

    "upgrade_step"              => "Step :num af :total: ",
    "accept_eula"               => "Accepter EULA",
    "system_requirements"       => "Systemkrav",
    "update_database"           => "Opdater Database",
    "upgrade_complete"          => "Opgradering Udført",

    "upgrade_support"           => "Skulle du møde problemer eller have brug for hjælp med de nye funktioner i SupportPal, se venligst vores dokumentation eller åbn en ticket hos os.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Klik venligst på knappen herunder for at starte.",
    "locked"                    => "Installation/Opgradering Igang",

    "error_and_empty_database"  => "Der opstod en fejl. Det kan være nødvendigt at tømme databasen før du starter igen.",
    "login_with_details"        => "Du kan logge ind med detaljerne specificeret tidligere.",
    "command_not_available"     => "Kommando ikke tilgængelig. Hvis du tror dette er blevet vist ved en fejl, kør venligst 'php artisan cache:clear' og kør da denne kommando igen.",
    "read_upgrade_guide"        => "Vores opgraderings guide indeholder brugbar information vedrørende store ændringer og bedste fremgangsmåder til opgradering:\nhttps://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[Advarsel] Kontroller venligst at du har taget en backup af din SupportPal database og programinstallations filer før du fortsætter.\nKontroller venligst du har taget en backup, bekræftet den ikke er korrupt og du er klar til at fortsætte.",
    "error_and_revert_database" => "Der opstod en fejl. Gendan venligst din database fra backup før du starter igen.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "Database konfigurations filen eksisterer allerede. Hvis du er sikker på applikationen ikke allerede er installeret slet da venligst /config/:environment/database.php og start igen.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Tak fordi du har valgt SupportPal. Verificer venligst at installationstypen nedenfor er korrekt og klik dernæst på fortsæt.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Seeding",
    "seeded"                    => "Seeded",
    "migrating"                 => "Migrerer",
    "migrated"                  => "Migreret",
    "database_setup_complete"   => "Database konfiguration udført.",
    "created_repository"        => "Oprettet ':name' repository med success.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Kommando utilgængelig. Kør venligst app:update for at downloade og opgradere til den senest tilgængelige version: %s.",
    "suggest_run_upgrade"       => "En opgradering er allerede igang. Kør venligst app:upgrade istedet.",
    "failed_to_download"        => "Filen blev ikke downloadet: :message",
    "backup_failed_abort"       => "Backup fejlede. Anullerer opdatering.",
    "command_failed"            => "Kommandoen :command, fejlede med output: :message.",
    "already_latest_version"    => "Du har allerede den seneste version installeret (:version).",
    "update_not_supported"      => "Automatisk opdatering til seneste version (:version) er ikke understøttet.",
    "current_and_new_version"   => "Du kører version :current_version. Senest tilgængelige version er :new_version.",
    "update_to_version"         => "Du kører version :current_version. Vil du opgradere til :new_version?",
    "downloading_version"       => "Downloader version :version til :path...",
    "checksum_not_matched"      => "Den downloadede fil fejlede checksum verifikation.",

    "check_readiness"           => "Kontrollerer om applikationen er istand til at opgradere...",
    "read_only"                 => "Filesystemet på \":path\" er kun læsbart. Opdateringer kan ikke blive udført på et udelukkende læsbart fil system.",
    "file_ownership"            => "Filen \":path\" er ejet af \":owner\" men PHP kører som \":actual\". Fil ejeren og PHP brugeren skal være den samme i løbet af en opdatering for alle applikations filer.",
    "minimum_disk_space"        => "Biblioteket \":path\" har utilstrækkelig plads. Der skal minimum være :space megabytes ledig.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Docker opsætning detekteret. For opgradering, følg https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Få fejlfinding tips",

    /*
     * 4.2.0
     */
    "app_manager_version_not_supported" => "App Manager (:version) is not supported.",
    "running_upgrade"           => "Running app upgrade",
    "upgrade_complete_success"  => "App upgrade completed successfully.",
    "app_manager_requires_update" => "Must update app-manager before running helpdesk update. :command",

    /*
     * 5.0.0
     */
    "mysql_client_version"      => "Klient Version >= :min (:mysqlnd_min for MySQLnd)",
    "mysql_client_version_desc" => "MySQL klient version :min eller højere (:mysqlnd_min for MySQLnd) er påkrævet for at køre SupportPal. Fandt: ':version'.",
    "post_install"              => "For at systemet kan fungere korrekt skal et cron job konfigureres. Læs venligst vores <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'>post-installations procedure</a> for detaljer om dette og andre anbefaledede handlinger der kan fordbedre funltionalitet og sikkerhed.",
    "help_allowed_methods"      => "Din web server skal tillade alle de nedenstående HTTP metoder. Se venligst vores <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>New Installation</a> dokumentation for mere information.",

    /*
     * 5.3.0
     */
    "check_file_permissions"    => "Checking file permissions...",

);

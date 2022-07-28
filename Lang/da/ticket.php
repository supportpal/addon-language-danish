<?php

return array(

    "feedback_question"         => "Spørgsmål der vises for brugeren.",
    "open_new"                  => "Åben ny Ticket",
    "select_department"         => "Vælg en Afdeling",
    "select_department_desc"    => "Vælg venligst den relevante afdeling til din henvendelse herunder.",
    "no_departments"            => "Ingen afdelinger fundet.",
    "department_user_details"   => "Afdeling og bruger detaljer",
    "enter_your_details"        => "Indtast dine detaljer",
    "enter_ticket_details"      => "Indtast detaljer",
    "enter_subject_message"     => "Indtast emne og besked",
    "invalid_user"              => "Kontroller venligst at gyldige bruger detaljer er indtastet for at fortsætte.",

    "registered_users"          => "Kun for registrerede brugere",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Emne",
    "no_subject"                => "Intet Emne",
    "last_action"               => "Seneste Handling",
    "due_time"                  => "Afsluttes inden",
    "created_time"              => "Oprettelsestidspunkt",
    "submitted"                 => "Tilføjet",
    "ticket_reply"              => "Ticket Besvarelse",
    "ticket_note"               => "Ticket Note",
    "ticket_type"               => "Ticket Type",

    "user_ticket"               => "Bruger Ticket",
    "user_ticket_desc"          => "Åben en ny ticket på vegne af en ny eller ekstisterende bruger.",
    "existing_user"             => "Eksisternede Bruger",
    "new_user"                  => "Ny Bruger",
    "internal"                  => "Intern",
    "internal_ticket_desc"      => "Åbn en ticket til intern brug. Denne ticket associaceres med dig og ikke en offentlig bruger.",
    "ticket_opened"             => "Din ticket blev åbnet.",
    "enter_user_details"        => "Indtast venligst dine detaljer nedenfor, eller log ind på din konto hvis du har en.",
    "already_have_account"      => "Du har allerde en konto, log venligst ind og åbn herfra din ticket. Brug venligst glemt adgangskode optionen hvis du ikke kan huske dit login.",

    "recent_tickets"            => "Seneste Tickets",
    "last_message_text"         => "Sidste besked Tekst",

    "set_due_time"              => "Sæt et færdiggørelses tidspunkt",

    "settings"                  => "Ticket Indstillinger",

    "priority"                  => "Prioritet|Prioriteter",

    "channel"                   => "Kanal|Kanaler",
    "account"                   => "Konto|Konti",

    "assign_operator"           => "Tildel Operatør",
    "assigned_operator"         => "Tildelte Operatører",
    "assigned_to"               => "Tildelt Til",
    "assigned"                  => "Tildelt",

    "department"                => "Afdeling|Afdelinger",
    "change_department_order"   => "Træk rækkerne for at ændre rækkefølgen som afdelinger vises i for brugere når en ny ticket åbnes.",
    "department_applicable"     => "Tilgængelige Afdelinger",
    "department_applicable_desc" => "Definition af prioriteter der kan vælges af brugere. Kun gældende på frontend, alle prioriteter vil være tilgængelige for operatører i alle afdelinger.",

    "send_now"                  => "Send nu",

    "tag"                       => "Tag|Tags",

    "track_ticket"              => "Spor Ticket",
    "view_ticket"               => "Vis Ticket",

    // Recent activity
    "recent_activity"           => "Nylig aktivitet",

    "ticket_number"             => "Ticket Nummer",
    "ticket_format"             => "Ticket Nummer Format",

    // Departments
    "department_public_desc"    => "Definerer om afdelingen er synlig for brugere på heldesken.",
    "department_parent_desc"    => "Hvis afdelingen er en under afdeling, vælg da venligst en hovedafdeling. Under afdelinger er tiltænkt til intern eskalation og håntering. Indstillinger vil derfor fjerne nogle af mulighederne nedenfor.",
    "department_priority"       => "Afdelingens prioriteter",
    "department_priority_desc"  => "Definerer prioriteterne der vil være tilgængelige for brugere når de åbner en ticket i denne afdeling. Mindst en skal vælges. Som udgangspunkt vil alle prioriteter være tilgængelige i afdelingen.",
    "department_no_format"      => "Optionel, definer kun hvis du ønsker at overstyre det ticket nummer format der anvendes som standard.",
    "department_operator"       => "Afdelingens Operatører",
    "department_default_assign" => "Tildeles som standard til",
    "dept_default_assign_desc"  => "Brug denne funktionalitet hvis du ønsker at tickets der åbnes i denne afdeling automatisk bliver tildelt en eller flere operatører.",

    // Department emails
    "email_accounts_desc"       => "Konfigurer email adresser for denne afdeling, alle indgående emails til disse email adresser vil åbne tickets i denne afdeling. Den første email adresse anvendes som standard afsendelses adresse til udgående email.",
    "department_port"           => "Standard værdier er: 110 til POP3, 995 til sikker POP3, 143 til IMAP, og 993 til sikker IMAP. Efterlad tom for at bruge disse standard værdier.",
    "department_encryption"     => "Nogle email udbydere kræver sikker SSL eller TLS kryptering, kender du ikke din udbyders krav efterlad da denne indstilling som Ingen.",
    "department_delete_mail"    => "Hvis du anvender IMAP, kan du vælge ikke at slette emails på serveren efter de er blevet importeret som tickets.",
    "protocol"                  => "Protokol",
    "server"                    => "Mail Server",
    "port"                      => "Port",
    "encryption"                => "Kryptering",
    "delete_downloaded"         => "Slet Downloadet Email",
    "consume_all"               => "Hent Alle Emails",
    "email_download"            => "Email Download",
    "email_piping"              => "Email Piping",
    "email_piping_desc"         => "Konfigurer en email videresender som følgende, stien til PHP eksekvering kan være anderledes på din server.",
    "remote_email_piping"       => "Remote Email Piping",

    // Department email options
    "email_options"             => "Email Optioner",
    "email_user_on_email"       => "Email brugere ved åbning af tickets per email",
    "email_user_on_email_desc"  => "Vælg om brugere skal notificeres per email når en email de har afsendt resulterer i en ny ticket bliver åbnet.",
    "email_operators"           => "Underret Operatører",
    "email_operators_desc"      => "Vælg om operatør besvarelser skal videresendes til andre operatører. Som standard kontrolleres \"email operators\" optionen i operatør panelet, og vil automatisk sende en email ved modtagelse af email besvarelser.",
    // Department email templates
    "new_ticket_opened"         => "Ny Ticket Åbnet",
    "waiting_for_response"      => "Afventer Svar",
    "ticket_auto_closed"        => "Ticket Automatisk Lukket",
    "closed_by_operator"        => "Lukket Af Operatør",

    // Feedback
    "feedback"                  => "Feedback",
    "feedback_form"             => "Feedback Formular|Feedback Formularer",
    "feedback_form_desc"        => "Feedback formularer processeres i den orden de fremstår. Træk og slil rækkerne for at organisere og justere prioriteterne.",
    "view_feedback"             => "Vis Feedback",
    "ticket_feedback"           => "Ticket Feedback",
    "feedback_fields_error"     => "Der opstod et problem ved afhentning af feedback felterne.",
    "time_after_resolved"       => "Tid Før Feedback Formular",
    "time_after_resolved_desc"  => "Tiden der skal gå fra en ticket er markeret som løst, til feedback formularen bliver sendt til brugeren.",
    "expires_after"             => "Udløber efter",
    "expires_after_desc"        => "Tiden der går fra afsendelse af en feedback formular til denne udløber og ikke længere kan besvares. Vi anbefaler 7 dage men du kan indtaste 0 i alle felterne for at deaktivere feedback formular udløb.",
    "form_conditions"           => "Formular Betingelser",
    "form_conditions_desc"      => "Definerer ticket betingelser som nyligt afsluttede tickets kontolleres imod for at se om de matcher denne formular. Hvis en afsluttet ticket matcher flere formularer, vil det blive afgjort af formular prioriteten. Formular prioriteten kan modificeres ved at gå til listen med formularer og ændre rækkefølgen.",
    "form_fields"               => "Formular Felter",
    "rating"                    => "Rating",
    "feedback_desc"             => "Tak fordi du kontaktede os, vi håber din henvendelse er løst til funde. Vurder venligst din oplevelse herunder.",
    "good_satisfied"            => "God, Jeg er tilfreds",
    "bad_not_satisfied"         => "Dårlig, Jeg er utilfreds",
    "feedback_not_found"        => "Din feedback kunne ikke modtages, åbn venligst en ny sag hvis du ønsker at dele din feedback - tak.",
    "feedback_malformed_token"  => "Din feedback kunne ikke modtages grundet et forkert token. åbn venligst en ny sag hvis du ønsker at dele din feedback - tak.",
    "feedback_expired"          => "Din ticket har været lukket i en rum tid, og det er desværre ikke længere muligt at give feedback.",
    "feedback_questions"        => "Kan du undvære et par minutter? Besvar venligst de følgende spørgsmål og hjælp os med at fortsætte forbedringen af den support vi yder.",
    "feedback_for_ticket"       => "Feedback til Ticket #:number",
    "feedback_rating_desc"      => "Supporten modtaget på denne ticket er blevet vurderet som <strong>:rating</strong> af brugeren.",

    // Custom fields
    "customfield"               => "Ticket Brugerdefineret Felt|Ticket Brugerdefinerede Felter",
    "customfield_order"         => "Træk rækkerne for at ændre den rækkefølge som brugerdefinerede felter vises i for brugere når de åbner en ticket via web.",

    // Canned responses
    "cannedresponse"            => "Standardsvar|Standardsvar",

    // Filters
    "filter"                    => "Filter|Filtre",
    "filter_condition"          => "Filtrer betingelser",
    "filter_condition_desc"     => "Definer betingelser for tickets i dette filter.",

    // Macros
    "macro"                     => "Makro|Makroer",
    "macro_condition"           => "Makro Betingelser",
    "macro_action"              => "Makro Handlinger",
    "macro_action_desc"         => "Definer handlinger som udføres når en makro køres. Kontroller venligst at handlingerne er gyldige for den afdeling som ticketen er oprettet i, ellers vil de ikke blive udført.",

    "from"                      => "Fra",
    "to"                        => "Til",
    "cc"                        => "CC",

    "allowed_files"             => "Tilladte fil vedhæftningstyper",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> ser også denne ticket.",
    "draft_saved"               => "Kladde gemt :time",
    "save_draft"                => "Gem Kladde",
    "discard_draft"             => "Slet Kladde",

    // Locked
    "error_ticket_locked"       => "Denne ticket er blevet låst og kan ikke opdateres, åbn venligst en ny ticket hvis du har brug for yderligere support.",

    // Ticket Followups
    "follow_up"                 => "Følg op",
    "follow_up_status_desc"     => "Sæt en ny status for denne ticket indtil opfølgningsdatoen.",
    "exact_date_time"           => "Eksakt dato & tid",
    "time_from_now"             => "Tid fra nu",

    // Schedule
    "schedule"                  => "Skema|Skemaer",
    "business_hour"             => "Åbningstider",
    "business_hour_desc"        => "Åbningstider indikerer de tider hvor der er support medarbejdere tilgængelige til besvarelse af henvendelser. Åbningstider bliver taget i betragtning når besvarelsestidspunktet for en ticket beregnes.",

    // Holidays
    "holiday"                   => "Ferie|Ferier",
    "holiday_or_on_the"         => "eller, på den",
    "holiday_month_year_desc"   => "År er optionel hvis ferien er tilbagevendende. Vælg kun et år hvis ferien ligger på en bestemt dato i et bestemt år.",

    // SLA Plans
    "sla_plan"                  => "SLA Plan|SLA Planer",
    "specific_schedule"         => "Specifikke Skemaer",
    "calendar_hours_24"         => "Kalender timer (24 Timer)",
    "resolution_time"           => "Løsnings Tider",
    "resolution_time_desc"      => "Sæt tider som tickets skal være besvaret og løst indenfor, afhængig af prioritet. Tiden vil kun blive talt i åbningstider baseret på det valgte tidsskema, decimal værdier kan anvendes.",
    "reply_within"              => "Besvar indenfor",
    "resolve_within"            => "Løs indenfor",
    "plan"                      => "Plan",
    "sla_condition"             => "SLA Betingelser",
    "sla_condition_desc"        => "Definer de ticket betingelser som nye tickets bliver kontrolleret imod for at tjekke om de falder indenfor denne plan. Hvis en ny ticket matcher flere SLA planer, vil det blive afgjort på baggrund af SLA plan prioritet, hvilket kan defineres ved at gå til listen med SLA planer og prioritere disse her.",
    "escalation_rule"           => "Eskalations Regler",
    "escalation_rule_desc"      => "Definer handlinger som udføres når en ticket tilhæørende denne SLA plan er tæt på eller overskredet. Kontroller venligst at dine regler er gyldige for den afdeling en ticket tilhører, ellers vil de blive ignoreret.",
    "condition"                 => "Betingelse",
    "condition_group"           => "Betingelses Gruppe",
    "all_groups"                => "ALLE grupper skal være sande",
    "any_group"                 => "HVILKEN som helst gruppe kan være sand",
    "all_conditions"            => "ALLE betingelser i gruppen skal være sande",
    "any_condition"             => "HVILKEN som helst betingelse i gruppen kan være sand",
    "sla_plan_desc"             => "SLA Planer bliver behandlet i den rækkefølge de fremgår. Træk og slip rækker for at organisere og justere prioriteten på SLA Planer.",

    // Reply options
    "reply_options"             => "Svar Muligheder",
    "send_email_to_users"       => "Send Email Til Bruger(e)",
    "send_email_to_operators"   => "Send Email Til Operatør(er)",
    "back_to_grid"              => "Gå Tilbage til Ticket Oversigt",
    "take"                      => "Overtag",
    "take_ownership"            => "Tag Ejerskab",
    "pause_duetime"             => "Pause Færdiggørelsestid",
    "add_to_canned_responses"   => "Tilføj til Standardsvar",
    "visible_to_all_operators"  => "Gær synlig for alle operatører",
    "set_status"                => "Sæt Status",
    "add_selfservice_link"      => "Tilføj Selv-hjælps Link Link",
    "search_selfservice"        => "Søg efter en selv-hjælps artikel",
    "search_canned"             => "Søg efter et standardsvar",

    "mark_resolved"             => "Marker som Løst",

    "ticket_signature"          => "Ticket Signatur",

    "default_open_status"       => "Standard Åben Status",

    "default_resolve_status"    => "Standard Løst Status",
    "default_resolve_status_desc" => "Vælg den status som anvendes for tickets der er blevet løst.",

    "waiting_response_time"      => "Afventer svar på Email",
    "waiting_response_time_desc" => "Tiden hvorefter en email er sendt til brugere på inaktive tickets, med spørgsmålet om de finder at deres henvendelse er blevet løst. Sæt som 0 for at deaktivere disse emails.",

    "close_inactive_tickets"    => "Luk inaktive tickets",
    "close_inactive_tickets_desc" => "Tiden hvorefter inaktive tickets automatisk bliver lukket. Sæt som 0 hvis tickets aldrig skal lukkes automatisk.",

    "ticket_reply_order"        => "Ticket Besvarelses Visning",
    "ticket_reply_order_desc"   => "Vælg den retning som ticket beskeder vises i, stigende hvor den seneste besked vises sidst eller faldende hvor den seneste besked vises først.",

    "ticket_notes_position"     => "Ticket Note Position",
    "ticket_notes_position_desc" => "Vælg hvor i en ticket ticket noten vises.",
    "ticket_notes_top_messages" => "I top og i beskeder",
    "ticket_notes_top"          => "Kun i toppen",
    "ticket_notes_messages"     => "Kun i beskeder",

    "captcha_desc"              => "Hvornår skal captcha vises for brugere der åbner nye tickets",
    "unregistered_only"         => "Kun uregistrerede brugere",

    "allow_unauth_users"        => "Tillad uautoriserede Brugere",
    "allow_unauth_users_desc"   => "Tillad brugere der ikke er logget ind at vise og besvare tickets. Deaktiverer du dette vil det også fjerne spor ticket funktionelitet og brugere vil være nødt til at være registrerede og logge ind før det er muligt at tilgå tickets.",

    "default_department"        => "Standard Afdeling",
    "default_department_desc"   => "Den afdeling der som standard modtager alle indgående tickets via denne kanal.",

    "show_related_articles"     => "Vis Relaterede Artikler",
    "show_related_articles_desc" => "Når en bruger indtaster emne, kan de blive vist relaterede artikler baseret på hvad de har søgt på. Kræver at selv-hjælps modulet er aktivert og MySQL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Standard Prioritet",
    "default_priority_desc"     => "Den prioritet der bliver sat på alle indgående tickets via denne kanal.",
    "verbose_email_log"         => "Verbose Email Log",

    "last_reply"                => "Sidste Svar",
    "opened_at"                 => "Åbnet",

    "change_department"         => "Skift Afdeling",
    "change_status"             => "Skift Status",
    "no_statuses"               => "Ingen statuser fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "no_priorities"             => "Ingen prioriteter fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "no_templates"              => "Ingen brugertilpassede email skabeloner fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "no_tags"                   => "Ingen ticket tags fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "no_departments_found"      => "Ingen afdelinger fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "no_operators_found"        => "Ingen operatører fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "change_priority"           => "Skift prioritet",
    "add_tag"                   => "Tilføj tag",

    "unlock"                    => "Lås op",
    "merge"                     => "Sammenlæg",
    "merged"                    => "Sammenlagt",
    "unmerge"                   => "Opdel",
    "close_and_lock"            => "Luk & Lås",

    "mass_reply"                => "Masse Svar",

    "due_today"                 => "Til færdiggørelse Idag",
    "overdue"                   => "Over færdiggørelses tidspunkt",
    "unassigned"                => "Ikke tildelt",

    "pause_duetime_desc"        => "Pause den tilbageværende tid indtil efter opfølgningstidspunkt hvis der er en aktiv SLA plan på denne ticket. Færdiggørelsestidspunktet vil først starte igen når et svar eller en note er blevet tilføjet denne ticket (inklusiv fra opfølgning).",

    "add_cc"                    => "Tilføj CC",
    "reply_above_line"          => "Besvar venligst over denne linie",

    "email_settings"            => "Email Indstillinger",
    "web_settings"              => "Web Indstillinger",
    "split_selected_replies"    => "Split Valgte Svar",

    "track_ticket_not_found"    => "Kunne ikke finde ticket med ticket number og den indtastede email addresse.",

    "type_in_tags"              => "Indtast tags",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Liste med filendelser, separeret af | karakteren, der er tilladte som vedhæftninger. For eksempel: txt|png|jpg. For tilladelse af alle filtyper, indtast: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Ingen operatør gruppe blev fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "no_user_groups"            => "Ingen bruger gruppe blev fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "remote_email_piping_desc"  => "Download <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>remote email piping scriptet</a> og følg <a href='https://docs.supportpal.com/current/Remote+Email+Piping' target='_blank'>dokumentationen</a> for konfiguration af dette på din egen mail server.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Som standard har SupportPal email alias support og vil tjekke TIL adressen på indgående mail for at kontrollere hvilken afdeling en ticket skal åbnes i. En ticket bliver ikke åbnet hvis en matchende afdelingens email adresse ikke kan findes. Aktiverer du denne indstilling vil alle emails uden en matchende afdelinges email adresse blive importeret som tickets i denne afdeling.",
    "default_reply_options"     => "Standard Svar Muligheder",
    "default_reply_options_desc" => "Vælg de standard svar muligheder der skal være tilgængelige ved åbning eller besvarelse af en ticket. ':reply_option' muligheden vil være ticket afhængig baseret på ':department_option' afdelings indstillingen.",
    "associate_response_tag"    => "Associater standardsvar med et tag...",
    "canned_response_tags_desc" => "Tilføj tags som kan hjælpe med at finde et standard svar når der sendes ticket besvarelser.",
    "append_ip_address"         => "Tilføj IP Address",
    "append_ip_address_desc"    => "Tilføj IP addressen for en bruger til deres beskeder når de åbner eller besvarer ticket fra frontenden.",
    "unassign_operator"         => "Fjern Operatør",
    "remove_tag"                => "Fjern Tag",
    "message_clipped"           => "[Besked begrænset]",
    "view_entire_message"       => "Vis hele beskeden",
    "no_custom_fields"          => "Ingen brugerdefinerede felter fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "follow_up_active"          => "En <a class='view-followup' style='text-decoration: underline;'>opfølgning</a> er aktiv på denne ticket og vil køre <strong>:time</strong>.",
    "disable_user_email_replies" => "Deaktiver Bruger Email Besvarelser",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Standard Ticket Filter",
    "default_ticket_filter_desc" => "Ticket filtret der bliver brugt som standard når 'Håndter Tickets'. Kan blive sat som 'None', hvilket er standard og vil vise alle uløste tickets.",
    "recent_filters"            => "Seneste Filtre",
    "inactive_tickets"          => "Inaktive Tickets",
    "default_open_status_desc"  => "Vælg den standard status som automatisk skal vælges når en bruger åbner en ny ticket eller besvarer en ticket der endnu ikke har et operatør svar.",
    "default_reply_status"      => "Standard Svar Status",
    "default_reply_status_desc" => "Vælg den standard status som automatisk defineres når en bruger svarer på en ticket, gælder kun når en operatør har besvaret en ticket.",
    "ticket_reply_order_default" => "System standard vil bruge værdien der er sat i ticket generelle indstillinger.",
    "select_a_parent"           => "Vælg en hoved afdeling...",
    "select_a_department"       => "Vælg en afdeling...",
    "department_operator_desc"  => "Du kan også tildele individuelle operatører til afdelingen. Disse operatører vil blive tilmeldt ud over grupper tildelt ovenfor.",
    "department_group"          => "Afdelingens grupper",
    "department_group_desc"     => "Du kan tildele operatør grupper til afdelingen, det er foreslået hvis din liste af operatører er lang og ofte ændres.",
    "ticket_other_brands"       => "Tickets i andre Brands",
    "add_for_department"        => "Tilføj til afdeling...",
    "record_order"              => "Træk rækkerne for at ændre rækkefølgen.",
    "reply_all"                 => "Svar Alle",
    "reply_without_cc"          => "Svar (foruden CC)",
    "email_accounts"            => "Email Konti",
    "add_another_email"         => "Tilføj en ekstra email adresse",
    "follow_up_date"            => "Opfølgningsdato",
    "post_reply"                => "Send Svar",
    "post_note"                 => "Tilføj Note",
    "ticket_details"            => "Ticket Detaljer",
    "organisation_tickets"      => "Organisationens Tickets",
    "manage_tickets"            => "Håndter Tickets",
    "via_channel"               => "via :channel",
    "department_parent"         => "Afdelingens Parent",
    "department_brands"         => "Afdelings Brands",
    "email_item"                => "Email :item",
    "from_name"                 => "Fra Navn",
    "from_address"              => "Fra Adresse",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user d. :date",
    "prioritise_reply-to"       => "Prioriter Svar-Til",
    "prioritise_reply-to_desc"  => "Vælg for at prioritere Reply-To header over fra headeren. Hvis aktiveret vil ticket åbnet via email blive åbnet på vegne af Reply-To navn og adresse.",
    "note_options"              => "Note Optioner",
    "escalation_rules_desc"     => "Nedenstående SLA plan eskalations regler er planlagt til kørsel efter tiderne listet. Disse tider kan skifte eller reglerne fjernes hvis en operatør svarer på denne ticket.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Ikke en registreret bruger. Email kanal indstillingerne er defineret til kun at importere emails fra registrerede brugere.",
    "display_name"              => "Email Display Navn",
    "display_name_desc"         => "Optionel indstilling, definer kun for at overskrive det display navn der anvendes på udgående mails fra denne afdeling.",
    "display_name_options"      => "De følgende Twig variabler kan anvendes:<br >{{ brand.name }} - Brand navn<br />{{ department.name }} - Afdelings Navn<br />{{ department.frontend_name }} - Viser hovedafdelingens navn, hvis ticket tilhører en under afdeling.<br />{{ operator.formatted_name }} - Operatør Navn<br /><em>Operatør navnet vil ikke altid være tilgængelig wrap den derfor i en 'not empty' kondition, eksempelvis: {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Vedhæftning Afvist",
    "enable_subaddresses"       => "Aktiver Sub-adresser",
    "enable_subaddresses_desc"  => "Vælg for at aktivere email sub-adressering for alle afdelinger. Dette vil skabe en unik sub-adresse for hver ticket der er sat som Reply-To adresse på alle udgående emails. Din mail server skal kunne være istand til at håndtere sub-adressering, yderligere handlinger kan være påkrævet hvis du anvender email piping for at sikre emails til disse adresser er videresendt korrekt. Aktivering af dette vil tillade dig at fjerne ticket nummeret fra emailens skabelonens emne felt.",
    "email_replies_disabled"    => "Email Svar Deaktiveret",
    "disable_user_email_replies_desc" => "Aktiver for at blokere email svar fra brugere, og samtidig fjerne reply clipping linien fra udgående ticket emails. Som standard vil emailen blive stiltiende ignoreret men du kan definere en email der skal sendes til brugeren ved at ændre den valgte email skabelon sendt til 'Email Svar Deaktiveret' optionen nedenfor.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Tildelt til Ticket",
    "user_ticket_reply"         => "Bruger Ticket Svar",
    "new_internal_ticket"       => "Ny Intern Ticket",
    "department_changed"        => "Afdeling Ændret",
    "operator_ticket_reply"     => "Operatør Ticket Svar",
    "new_ticket_note"           => "Ny Ticket Note",
    "email_template_desc"       => "Du kan vælge en anden email skabelon end standard skabelonen til afsendelse til brugeren eller operatører for hver af de nedenstående handlinger. Denne skabelon vil udelukkende blive standard skabelon for denne afdeling.",
    "create_new_user"           => "Opret ny bruger",
    "user_reply_internal_ticket" => "Ikke operatør. Kun operatører kan besvare interne tickets.",
    "enter_email_address"       => "Indtast email adresse...",
    "email_user_frontend"       => "Email brugere der åbner tickets på frontend",
    "email_user_frontend_desc"  => "Definerer om brugere skal underrettes på email når de selv åbner en ticket via frontend.",
    "department_template_disabled" => "Den relevante email skabelon for afdelingen er deaktiveret, så denne email kan ikke sendes.",
    "verbose_email_log_desc"    => "Om email opsamling skal logges til fil, denne funktion foreslås deaktiveret med mindre du bliver instrueret til at aktivere den af support i fejlfindings øjemed. Der opbevares fem dages logs, ældre log filer bliver slettet automatisk af systemet.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Åbn ny ticket på vegne af en eksisterende bruger.",
    "canned_response_tag"       => "Standardsvar Tag|Standardsvar Tags",
    "response"                  => "Svar|Svar",
    "response_desc"             => "Standardsvaret kan oprettes på flere sprog. Det passende standardsvar vil automatisk blive sendt, bestemt af brugerens sprog præferencer.",
    "no_slaplans"               => "Ingen SLA planer fundet. Klik <a href=':route'>her</a> for at oprette en.",
    "filter_performance"        => "Performance overvejelser og anbefalinger",
    "filter_performance_desc"   => "<li>Filtre der matcher flere tickets vil være langsommere, prøv i de fleste tilfælde at udeluk løste tickets.</li><li>Filtre der anvender 'er ikke' konditioner vil typisk være langsommere end 'er' konditioner.</li><li>Filtre der tjekker for nul værdier (eks. Ticket tag er ingen) vil være langsommere.</li><li>Undgå flere konditioner som involverer at tjekke strenge/ord da de introducerer mere kompleksitet.</li><li>Filtre der anvender 'begynder med' eller 'indeholder' konditioner vil typisk være langsommere end 'lig med' eller 'ender med' konditioner.</li><li>Løste tickets er eksluderet fra antallet vist i sidebaren.</li>",
    "run_macro"                 => "Kør Makro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Aktiver for kun at vise denne afdeling til brugere der er logget ind og kun acceptere email fra brugere der er aktivt registrerede i helpdesken. Hvis aktiveret vil en bounce-back email blive sendt til uregistrerede brugere der sender en email til denne afdeling. For at ændre eller deaktivere emailen se venligst 'Kun Registrerede Brugere' skabelon muligheder nedenfor.",
    "form_fields_desc"          => "Hvis du ønsker at indsamle yderligere information når en bruger tilføjer deres feedback, kan du sætte brugerdefinerede felter op til visning på formen her. Felt typerne vil være låske når formen er blevet anvendt af en bruger.",
    "feedback_ratings"          => "Bruger tilfredsheds Ratings (påvirkende din kunde tilfredsheds score)",
    "email_and_other_accounts"  => "Email og andre kanal konti",
    "delete_message"            => "Slet besked",
    "linked_tickets"            => "Linkede Tickets",
    "add_linked_ticket"         => "Tilføj Linked Ticket",
    "create_linked_ticket"      => "Opret linked ticket",
    "copy_link"                 => "Kopier link",
    "forward_message"           => "Videresend denne besked",
    "forward_from_here"         => "Videresend ticket herfra",
    "forward"                   => "Videresend",
    "forward_options"           => "Videresend Optioner",
    "forwarded_to"              => "Videresendt til",
    "new_operator_reply"        => "Ny Operatør Besvarelse",
    "new_user_reply"            => "Nyt Bruger Svar",
    "add_bcc"                   => "Tilføj BCC",
    "at_least_one_recipient"    => "Definer venligst minimum en modtager.",
    "forwarded_message"         => "---------- Videresendt besked ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "OBS: Påvirker kun tickect der tilhører en status med 'Luk inaktive Tickets' aktiveret.",
    "close_inactive_status_desc" => "Aktiver for at ak eller deaktivere automatisk lukning af inaktive tickets og inaktive email påmindelser ('Venter på svar' og 'Ticket Automatisk Lukket' skabeloner). Hvis aktiveret kan tiden der går før påmindelser afsendes konfigureres via ticket generelle indstillinger.",
    "from_header_missing"       => "Fra: header mangler i email.",
    "move_ticket"               => "Flyt Ticket",
    "move_ticket_step1"         => "Step 1: Vælg et nyt brand denne ticket skal flyttes til",
    "move_ticket_step2"         => "Step 2: Vælg en afdeling fra det nye brand",
    "current_record"            => "Nuværende :record",
    "new_record"                => "Ny :record",
    "department_email"          => "Afdelingens Email",
    "select_a_department_email" => "Vælg en afdelings email...",
    "record_public_desc"        => "Aktiver for kun at lade :record være tilgængelig for dig selv.",
    "record_group_desc"         => "Hvis du ønsker at lade :record være synlig for udvalgte operatør grouper. Efterlad tom for at gøre synlig for alle operatører.",
    "ticket_format_desc"        => "Kan indeholde alfanumeriske karakterer og special karakterer <code>-_.+!*,</code><br />De følgende variabler kan også anvendes: %S for et sekventielt nummer | %N for et tilfældigt nummer | %L for et tilfældigt bogstav<br />Brug {number} for gentagelse <strong>kun</strong> efter %N eller %L, eks. %N{4} tilsvarer 4 tilfældige numbre, %L{3} tilsvarer 3 tilfældige bogstaver<br />Det følgende <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a> Parameter prefixed med % Y,y,m,d,j,g,G,h,H,i,s",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Vælg for at deaktivere makroen og forhindre at den kører automatisk eller vises i ticket interfacet.",
    "macro_order_drag"          => "Træk rækkerne for at ændre sorteringen af makroerne.",
    "macro_order_processed"     => ":type makroer bliver behandlet i den rækkefølge de fremgår.",
    "macro_type"                => "Makro Type",
    "macro_type_desc"           => "Der er tre typer makroer til rådighed. Manuelle makroer kan kun køres fra ticket visning eller overblikket. Automatiske makroer kører på uløste tickets hver time, og hook makroer kører på specificerede ticket begivenheder. Automatiske og hook makroer kan også defineres til kun at køre indenfor bestemte tidsplaner. Hvilken som helst hook makro handling vil ikke udløse andre hook makroer. Dette gøres for at undgå løkker.",
    "macro_run_at_most"         => "Kør flest",
    "macro_run_times"           => "gange", // As in '5 times'
    "macro_run_at_most_desc"    => "Begræns hvor mange gange en automatisk makro kan køre på den samme ticket, efterlad tom for at lade en makro køre et ubegrænset antal gange.",
    "macro_events_desc"         => "Vælg en eller flere begivenheder som makroer skal køre ved. Betingelserne sat nedenfor vil blive kontrolleret før en makro køresThe conditions set below will be checked before the macro runs.",
    "macro_schedules_desc"      => "Makroen vil i udgangspunktet køre 24/7, men du kan vælge en eller flere helpdesk tidsplaner så makroen kun er aktiv indenfor disse.",
    "macro_condition_desc"      => "Definer de betingelser der afgør hvilke tickets denne makro vil være tilgængelig for. Som standard uden betingelser vil den være gyldig for alle tickets. Mindst en betingelse skal vælges for automatiske makroer.",
    "add_remove_headers"        => "Tilføj/Fjern Headers",
    "webhook_merge_fields"      => "Flet felter kan anvendes i URL og indholds felter, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">Læs mere</a>.",
    "webhook_ticket_required"   => "En ticket skal eksistere for at denne funktionelitet vil virke.",
    "not_permitted"             => "Beklager, du er ikke tilladt at vise de eller den forespurgte ticket(s). Hvis du mener dette er en fejl, kontakt da venligst din administrator.",
    "watch"                     => "Følg",
    "unwatch"                   => "Følg ikke",
    "watching"                  => "Følger",
    "internal_ticket"           => "Intern Ticket|Interne Tickets",

    /*
     * 2.4.1
     */
    "downloading"               => "Downloader...",
    "downloading_desc"          => "Hvis din download ikke starter automatisk indenfor et par sekunder, <a href=':href'>klik her</a> for at tilgå download URLen direkte.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Tilhørende :name)",
    "block_user"                => "Bloker Bruger",
    "merge_tickets"             => "Flet Tickets",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Opfølgninger",
    "follow_up_multiple_active" => "Flere <a class='view-followup' style='text-decoration: underline;'>opfølgninger</a> er aktive på denne ticket og den næst planlagte vil køre <strong>:time</strong>.",
    "follow_up_no_actions"      => "Opfølgningen har ingen handlinger defineret, bekræft venligst hvorvidt du vil fortsætte.",
    "status_after_running"      => "Status Efter Kørsel",
    "older_messages"            => ":count ældre beskeder",
    "holiday_single_day"        => "Enkelt Dato",
    "holiday_date_range"        => "Dato Spænd",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Vælg den ticket du vil flette med",
    "search_number_or_subject"  => "Søg efter ticket nummer eller emne",
    "im_not_sure"               => "Jeg er ikke sikker",
    "auto_reply_detected"       => "Autosvar detekteret - ingen notifikation vil blive sendt til brugere.",
    "cc_desc"                   => "Du kan CC andre personer på denne ticket ved at indstaste deres email adresser her.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> var igang med en kladde",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Konfigurer manuelt",
    "unresolved"                => "Uløst",
    "resolved"                  => "Løst",
    "manage_oauth_options"      => "For at tilføje eller administrere OAuth muligheder, besøg venligst <a href=\":route\">Tredjeparts Integrations</a> siden.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "Vi har gemt din feedback.",
    "how_was_the_help"          => "Hvordan oplevede du hjælpen du modtog?",
    "update_feedback"           => "Opdater Feedback",
    "verify_user"               => "Verificer venligst autenticiteten af brugeren.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Tickets åbnet igennem frontend interfacet for brugere eller operatører eller operatør panelet for operatører.",
    "email_channel_name"        => "Email",
    "email_channel_desc"        => "Tickets åbnet via processering af indgående email.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Tickets og svar sendt via API.",

    /*
     * 4.0.0
     */
    "on_behalf_of"              => "Created on behalf of",
    "reply_canned_be_posted"    => "It is not currently possible to reply to this ticket; the channel or channel account may be disabled.",

);

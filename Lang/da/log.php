<?php

return array(

    // Standard messages
    "item_created"                      => "Oprettet ny :item :rel.",
    "item_updated"                      => "Opdateret :item :rel.",
    "item_deleted"                      => "Slettet :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Ny IP ban oprettet af :rel.",
    "ip_ban_updated"                    => "IP ban opdateret :rel.",
    "ip_ban_deleted"                    => "IP ban slettet :rel.",
    "banned_ip_on_login"                => "IP banned :rel i 15 minutter.",

    "ip_whitelist_created"              => "IP :rel tilføjet til whitelist.",
    "ip_whitelist_updated"              => "IP :rel opdateret på whitelist.",
    "ip_whitelist_deleted"              => "IP :rel slettet fra whitelist.",

    "system_cleanup"                    => "System oprydning kørt på :rel.",

    "api_failed_login"                  => "IP :rel fejlede autorisation til API.",

    "user_successful_login"             => "Logget ind i help desk.",
    "user_failed_login"                 => "Fejlede autorisation.",
    "user_successful_logout"            => "Logget ud af help desk.",

    "user_registered"                   => "Registrerede en konto.",
    "user_confirmed"                    => "Bekræftede deres konto.",
    "user_password_set"                 => "Definerede en adgangskode til sin konto.",
    "user_password_reset"               => "Nulstillede adgangskoden til deres konto.",

    "user_added_to_organisation"        => "Brugeren :rel er tilføjet til organisationen :new_value.",
    "user_removed_from_organisation"    => "Brugeren :rel er fjernet fra organisationen :old_value.",
    "user_profile_updated"              => "Opdateret konto profil",
    "user_left_organisation"            => "Forlod organisationen :rel.",
    "user_organisation_emptied"         => "Fjernede alle brugere fra organisationen :rel.",
    "user_organisation_updated"         => ":rel's organisations adgangs niveau skiftet fra :old_value til :new_value.",
    "organisation_membership_updated"   => "Opdateret bruger medlemsskab af organisationen :rel.",
    "organisation_profile_updated"      => "Opdateret profil for organisation :rel.",
    "organisation_owner_updated"        => "Flyttede organisation :rel ejerskab til :new_value.",

    "mass_email_queued"                 => "I kø :new_value emails i batches til afsendelse.",
    "mass_email_sent"                   => "Sendte :new_value emails i kø.",

    "email_queue_deleted"               => "Slettede kø email to :rel.",

    "scheduled_task_run"                => "Planlagt opgave :rel er blevet kørt manuelt.",

    "selfservice_article_upvoted"       => "Vurderede en artikel som postiv :rel.",
    "selfservice_article_downvoted"     => "Vurderede en artikel som negativ :rel.",
    "selfservice_comment_posted"        => "Postede en ny :rel.",
    "selfservice_comment_upvoted"       => "Up-voted :rel rating fra :old_value til :new_value.",
    "selfservice_comment_downvoted"     => "Down-voted :rel rating fra :old_value til :new_value.",

    "ticket_opened"                     => "Åbnede en ny ticket #:rel.",
    "ticket_opened_on_behalf"           => "Åbnede en ny ticket #:rel på vegne af :new_value.",
    "ticket_opened_email"               => "Importederede email som ny ticket #:rel.",

    "ticket_message_reply"              => "Postede et nyt svar til ticket #:rel.",
    "ticket_message_note"               => "Postede en ny note til ticket #:rel.",
    "ticket_message_deleted"            => "Slettede en besked i ticket #:rel.",

    "ticket_user_updated"               => "Opdaterede brugeren på ticket #:rel fra :old_value til :new_value.",
    "ticket_subject_updated"            => "Opdaterede emnet på ticket #:rel.",
    "ticket_department_updated"         => "Opdaterede afdeling på ticket #:rel fra :old_value til :new_value.",
    "ticket_status_updated"             => "Opdaterede status på ticket #:rel fra :old_value til :new_value.",
    "ticket_priority_updated"           => "Opdaterede prioritet på ticket #:rel fra :old_value til :new_value.",
    "ticket_tag_added"                  => "Tilføjede tag :new_value to ticket #:rel.",
    "ticket_tag_updated"                => "Opdaterede tag på ticket #:rel.",
    "ticket_tag_removed"                => "Fjernede tag :new_value fra ticket #:rel.",
    "ticket_slaplan_updated"            => "Opdaterede SLA plan på ticket #:rel fra :old_value til :new_value.",
    "ticket_duetime_updated"            => "Opdaterede tilbageværende tid på ticket #:rel til :new_value.",
    "ticket_customfield_updated"        => "Opdaterede brugerdefinerede felter på ticket #:rel.",
    "ticket_converted_user"             => "Konverterede intern ticket #:rel til bruger ticket.",
    "ticket_converted_internal"         => "Konverterede bruger ticket #:rel til intern ticket.",

    "ticket_assigned_operator"          => "Tildelte :new_value til ticket #:rel.",
    "ticket_unassigned_operator"        => "Fjernede :new_value fra ticket #:rel.",
    "ticket_assigned_self"              => "Tilføjede sig selv til ticket #:rel.",
    "ticket_assigned_updated"           => "Opdaterede tildelte operatører på ticket #:rel.",

    "ticket_locked"                     => "Låste ticket #:rel.",
    "ticket_unlocked"                   => "Låste ticket op #:rel.",
    "ticket_locked_reply"               => "Svar kunne ikke tilføjes låst ticket #:rel.",

    "ticket_merged"                     => "Ticket(s) :new_value flettet ind i ticket #:rel.",
    "ticket_unmerged"                   => "Ticket :rel er blevet flettet ud.",

    "ticket_user_blocked"               => "Blokeret email :new_value (fra bruger på ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel er blevet lukket.",
    "ticket_inactive_closed"            => "Lukkede inaktiv ticket #:rel fra status :old_value.",
    "ticket_awaiting_response"          => "Sendte venter på besvarelse email til bruger på #:rel.",

    "ticket_split_from"                 => "Beskeder splittet fra gammel ticket #:rel til ny ticket #:new_value.",
    "ticket_split_to"                   => "Beskeder splittet fra gammel ticket #:old_value til ny ticket #:rel.",

    "ticket_attachment_saved"           => "Tilføjede vedhæftning til ticket #:rel.",
    "ticket_attachment_deleted"         => "Slettede vedhæftning fra ticket #:rel.",

    "ticket_throttled"                  => "Afviste en ny ticket fra :rel pga. throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Tilføjede vedhæftning ':new_value' til artikkel ID :rel.",
    "selfservice_attachment_deleted"    => "Slettede vedhæftning ':new_value' fra til artikel ID :rel.",
    "ticket_unassigned_self"            => "Fjernede sig selv fra ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Besvarelse kunne ikke blive tilføjet på grund af ticket tilhører et deaktiveret brand #:rel.",
    "personal_signatures_updated"       => "Opdaterede personlig signatur.",
    "check_email_failed"                => "Fejl: Fejlede download af email fra konto :old_value: ':rel'.",
    "ticket_added_cc"                   => "Email(s) :new_value tilføjet til CC adresse liste for ticket #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value fjernet fra CC adresse liste for ticket #:rel.",
    "invalid_department_brand"          => "Fejlede at definere afdeling ':new_value' på ticket #:rel, afdelingen tilhører ikke et ticket brand.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Sendte en email med emne ':extra_rel1' til :rel.",
    "sent_template_email_to"            => "Sendt ':extra_rel1' email til :rel.",
    "sent_ticket_email_to_user"         => "Sendt ':extra_rel1' email til bruger på ticket #:rel.",
    "sent_email_to_operators"           => "Sendt ':extra_rel1' email til operatører.",
    "sent_ticket_email_to_operators"    => "Sendt ':extra_rel1' email til operatører på ticket #:rel.",
    "sent_email_to_operator_group"      => "Sendt ':extra_rel1' email til operatør gruppe ':new_value' på ticket #:rel.",
    "ticket_macro_applied"              => "Makroen ':new_value' blev kørt på ticket #:rel.",
    "ticket_macro_automatic"            => "Makroen ':new_value' automatisk kørt på ticket #:rel.",
    "email_template_not_found"          => "Email skabelon ID ':new_value' ikke fundet, afbrød email afsendelse.",
    "private_conversation_started"      => "Startede en samtale med :rel.",
    "private_message_sent"              => "Sendte en besked til :rel.",
    "not_imported_replies_disabled"     => "En email :extra_rel1 blev modtaget på ticket #:rel, men blev ikke importeret da ticket email svar er deaktiveret.",
    "not_imported_ticket_locked"        => "En email :extra_rel1 blev modtaget på ticket #:rel, men blev ikke importeret da ticket er låst.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Ticket bruger tilføjet til bruger gruppe :new_value.",
    "ticket_user_removed_from_group"    => "Ticket bruger fjernet fra bruger gruppe :old_value.",
    "email_on_behalf"                   => "Videresendte :extra_rel2 på vegne af ':extra_rel1' på ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Sendte ':extra_rel1' email til :new_value, afdelingen accepterer ikke emails fra uregistrerede brugere.",
    "deleted_user"                      => "Slettede :item ':rel' med email ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Linkede ticket #:rel med ticket :extra_rel1.",
    "unlinked_ticket"                   => "Unlinkede ticket #:rel fra ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Slettede vedhæftning ':old_value' fra email køen ':rel'.",
    "forward_ticket_email"              => "Videresendte ticket #:rel til tredjepart, vis ':extra_rel1' email.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Opdateret :rel af :extra_rel1.",
    "selfservice_comment_status"        => "Ændret status af :rel af :extra_rel1 fra :old_value til :new_value.",
    "selfservice_comment_deleted"       => "Slettet kommentar af :extra_rel1.",
    "ticket_message_posted"             => "Postede en ny :extra_rel1 til ticket #:rel.",
    "ticket_message_edited"             => "Redigerede en :extra_rel1 på ticket #:rel.",
    "email_send_failed"                 => "Fejlede email afsendelse.",
    "ticket_brand_updated"              => "Opdaterede brand på ticket #:rel fra :old_value til :new_value.",
    "export_scheduled"                  => "Em eksport af bruger :rel er blevet planlagt.",
    "deleted_inactive_records"          => "Automatisk sletning af :old_value inaktiv :rel.",
    "deleted_old_records"               => "Automatisk sletning af gamle :rel records.",
    "sent_email_to_user_group"          => "Satte email i kø til bruger gruppe ':new_value' på ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Seer ticket #:rel.",
    "ticket_unwatching"                 => "Seer ikke længere ticket #:rel.",
    "ticket_watch_operator"             => "Sæt :new_value til ser ticket #:rel.",
    "ticket_unwatch_operator"           => "Fravalgte :new_value fra ser ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Bekræftede ejerskab af email adresse på vegne af bruger :rel.",
    "ticket_department_email_updated"   => "Opdateret afdelings email på ticket #:rel fra :old_value til :new_value.",
    "ticket_watching_updated"           => "Opdaterede seende operatører på ticket #:rel.",
    "ticket_deleted"                    => "Permanent slettet ticket ':old_value' (#:rel).",
    "ticket_trashed"                    => "Flyttede ticket #:rel to trash.",
    "ticket_restored"                   => "Gendannede ticket #:rel from trash.",
    "emptied_ticket_trash"              => "Ticket trash er tømt for ':old_value' records.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "En ny opfølgning tilføjet ticket #:rel.",
    "ticket_followup_updated"           => "En opfølgning på ticket #:rel er blevet opdateret.",
    "ticket_followup_deleted"           => "En opfølgning på ticket #:rel er blevet slettet.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutralt vurderet artikel :rel.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "User :old_value merged into user :rel.",
    "user_organisation_merged"          => "User organisation :old_value merged into user organisation :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Updated :rel's reply templates.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => "Activated :item (add-on) :rel.",
    "addon_deactivated"                 => "Deactivated :item (add-on) :rel.",
    "addon_installed"                   => "Installed :item (add-on) :rel.",
    "addon_uninstalled"                 => "Uninstalled :item (add-on) :rel.",
    "addon_cancelled"                   => "Cancelled :item (add-on) :rel.",
    "addon_updated"                     => "Updated :item (add-on) :rel to version :new_value.",
    "ticket_reply_duetime_updated"      => "Updated the reply due time on ticket #:rel to :new_value.",
    "ticket_resolve_duetime_updated"    => "Updated the resolve due time on ticket #:rel to :new_value.",
    "ticket_duetime_unset"              => "Deaktiveret færdiggørelsestid på ticket #:rel.",
    "ticket_reply_duetime_unset"        => "Unset the reply due time on ticket #:rel.",
    "ticket_resolve_duetime_unset"      => "Unset the resolve due time on ticket #:rel.",
    "ticket_duetime_paused"             => "Pausede tilbageværende tid på ticket #:rel indtil næste bruger besvarelse.",
    "ticket_duetime_unpaused"           => "Unpaused the due times on ticket #:rel.",
    "user_email_verified"               => "Verified their email address.",
    "marked_email_as_verified"          => "Verified ownership of email address on behalf of user :rel.",
    "user_invited_to_organisation"      => "User :rel invited to organisation :extra_rel1.",
    "user_accepted_organisation_invite" => "User :rel accepted invitation to organisation :extra_rel1.",
    "user_additional_email_verified"    => "Verified an additional email address (:new_value).",
    "export_generated"                  => "Eksport af :new_value for bruger :rel er blevet genereret og gemt på systemet.",
    "export_deleted"                    => "Eksport :old_value af bruger :rel er blevet slettet fra systemet.",
    "user_export_generated"             => "Export :new_value of user :rel has been generated and stored on the system.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Updated their reply templates.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Deleted attachment ':old_value' from ticket #:rel.",
    "user_added_to_group"               => "User :rel added to user group :new_value.",
    "user_removed_from_group"           => "User :rel removed from user group :old_value.",
    "operator_added_to_group"           => "Operator :rel added to operator group :new_value.",
    "operator_removed_from_group"       => "Operator :rel removed from operator group :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Deleted background job :rel.",
    "background_job_retried"            => "Retried background job :rel.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Set a password for their account.",
    "password_reset_sent"               => "Reset password link sent to :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Rated ticket #:rel as :extra_rel1.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => "Saved :extra_rel1 on ticket #:rel.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => "Saved :extra_rel1 on article :rel.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

);

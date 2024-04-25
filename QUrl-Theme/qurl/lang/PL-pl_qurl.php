<?php 
// QUrl Theme for YOURLS
// A simple theme for YOURLS built based on the Bootstrap framework.
// Author: ookris => https://github.com/ookris/QUrl

declare(strict_types=1);

// Polish translation
// "unique_string" => "text to be translated"

return [
    // index.php
    "total_urls_tooltip_before"             => "Tak zdaję sobie sprawę, że",
    "total_urls_tooltip_after"              => "linków to nie jest dużo ale od czegoś trzeba zacząć ;)",
    "total_urls_before"                     => "Do tej pory skróciliśmy",
    "total_urls_after"                      => "linków, które zostały kliknięte",
    "total_urls_after_times"                => "razy.",
    "add_link_form_long_url"                => "Wklej tutaj długi adres URL",
    "add_link_form_long_url_placeholder"    => "Długi adres www",
    "add_link_form_settings"                => "Opcje",
    "add_link_form_keyword-url"             => "Niestandardowe słowo kluczowe",
    "add_link_form_long_url_placeholder_keyword"    => "moj-super-link",
    "add_link_form_keyword-url_info"        => "Słowo kluczowe zastępuje domyślmy, generowany losowo ciąg znaków.",
    "add_link_form_title-url"               => "Niestandardowy tytuł",
    "add_link_form_title-url_placeholder"   => "Mój własny tytuł",
    "add_link_form_title-url_info"          => "Opcjonalny tytuł używany podczas udostępniania linku za pomocą serwisów społecznościowych.",
    "add_link_form_button_submit"           => "Skróć",

    // getLink.php
    "get_link_form_h2"                  => "Twój skrócony link",
    "get_link_form_original_url"        => "Oryginalny link",
    "get_link_form_short_url"           => "Skrócony link",
    "get_link_form_stats_url"           => "Link do statystyk",
    "get_link_form_qr_h2"               => "Kod QR",
    "get_link_form_qr_info"             => "Udostępnij swój link urządzeniom mobilnym",
    "get_link_form_qr_info2"            => "Kod QR mozna zapisać. Klikamy na niego prawym przyciskiem myszy a następne wybieramy opcję Zapisz obrazek jako.",
    "get_link_form_qr_message"          => "Informacja:",

    // sendEmail.php
    "send_email_message_subject"        => "QUrl Wiadomość #ID",
    "send_email_message_body_h2"        => "=== Wiadomość ze strony QUrl.pl ===",
    "send_email_message_body_date"      => "Data wysłania:",
    "send_email_message_body_email"     => "Email:",
    "send_email_message_body_message"   => "Wiadomość:",
    "send_email_message_success"        => "Wiadomość została wysłana. Odpowiem na nią najszybciej jak to będzie możliwe. Zazwyczaj odpowiadam w ciągu kilku godzin. ",
    "send_email_message_error"          => "Nie udało się wysłać wiadomości. Jeśli błąd będzie się powtarzał skontaktuj się z administratorem.",

    // sendReport.php
    "send_report_message_subject"       => "QUrl Raport #ID",
    "send_report_message_subject2"      => " / Raport", // add to email subject
    "send_report_message_body_h2"       => "=== Zgłoszenie podejrzanego linka ===",
    "send_report_message_link"          => "Link:",
    "send_report_message_description"   => "Opis:",
    "send_report_message_email"         => "Email:",
    "send_report_message_date"          => "Data zgłoszenia:",
    "send_report_message_success"       => "Zgłoszenie zostało wysłane.<br>Jeśli podałeś swój adres email otrzymasz informację o podjętych dziłaniach.",
    "send_report_message_error"         => "Nie udało się wysłać wiadomości. Jeśli błąd będzie się powtarzał skontaktuj się ze mną wysyłając wiadomość z wiadomością o błędie.",

    // qurl/footer.php
    "footer_design_by"                  => "Design by",
    "footer_powered_by"                 => "Napędzany przez",

    // user/pages/contact.php
    "pages_contact_h1"                  => "Kontakt",
    "pages_contact_description"         => "Wszelkie pytania, uwagi i sugestie mozna zgłaszać za pośrednictwem tego formularza. ",
    "pages_contact_form_email"          => "Adres email",
    "pages_contact_form_email_info"     => "Podanie adresu email jest konieczne abyśmy mogli się z Tobą skontaktować.",
    "pages_contact_form_message"        => "Wiadomość",
    "pages_contact_form_button_send"    => "Wyślij wiadomość",

    // user/pages/report.php
    "pages_report_h1"                    => "Zgłoś link",
    "pages_report_description"           => "Jeśli natrafiłeś na link z QUrl.pl, który według Ciebie prowadzi do dziwnej, podejrzanej lub nielegalnej strony możesz go zgłosić za pomocą ponizszego formularza. ",
    "pages_report_url"                   => "Podejrzany link",
    "pages_report_url_description"       => "Podaj cały zgłaszany adres np. <u class=\"text-secondary font-monospace\">https://qurl.pl/ytN60Ut06aW</u>.",
    "pages_report_link"                  => "Krótki opis (opcjonalnie)",
    "pages_report_link_description"      => "Na jakiej stronie znalazłeś link, czy dostałeś go w wiadomości email, na facebooku czy w SMSie (max. 500 znaków).",
    "pages_report_email"                 => "Adres email (opcjonalnie)",
    "pages_report_email_description"     => "Jeśli podasz swój adres email otrzymasz informację o podjętych działaniach ",
    "pages_report_button_send"           => "Wyślij zgłoszenie",

    // custom page title 
    "current_page_title_contact"              => "Kontakt",
    "current_page_title_contact_send"         => "Wiadomość została wysłana",
    "current_page_title_report"               => "Zgłoszenie linka",
    "current_page_title_report_send"          => "Raport został wysłany",
];
?>
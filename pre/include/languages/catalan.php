<?php
/*
***********************************************************************************
This program is distributed "as is" and WITHOUT ANY WARRANTY, either expressed or implied, without even the implied warranties of merchantability or fitness for a particular purpose.

This program is distributed under the terms of the DaDaBIK license, which is included in this package (see dadabik_license.txt). For all the details see dadabik_license.txt.

If you are unsure about what you are allowed to do with this license, feel free to contact info@dadabik.com
***********************************************************************************
*/
?>
<?php
// submit buttons
$submit_buttons_ar = array (
	"insert"    => "Crear una fitxa nova",
	"quick_search"    => "Cerca ràpida",
	"search/update/delete" => "Cercar/modificar/esborrar fitxes",
	"insert_short"    => "Crear",
	"search_short" => "Cercar",
	"advanced_search" => "Advanced Search", // to change
	"insert_anyway"    => "Crear igualment",
	"search"    => "Cercar fitxa",
	"update"    => "Desar",
	"ext_update"    => "Actualitzar el teu perfil",
	"yes"    => "Sí",
	"no"    => "No",
	"go_back" => "Enrere",
	"edit" => "Editar",
	"delete" => "Esborrar",
	"details" => "Detalls",
	"insert_as_new" => "Insert as new", // to change
	"multiple_inserts" => "Multiple inserts", // to change
	"change_table" => "Canviar de taula"
);

// normal messages
$normal_messages_ar = array (
	"cant_edit_record_locked_by" => "Aquesta fitxa no es pot modificar perquè està blocada per l'usuari: ",
	"lost_locked_not_safe_update" => "Has perdut o no tenies el blocatge d'aquesta fitxa. No és segur actualitzar-la. Sisplau, comença l'edició de bell nou",
	"insert_item" => "Insereix element",
	"show_all_records" => "Mostrar totes les fitxes",
	"show_records" => "Mostrar fitxes",
	"ldap_user_dont_update" => "Aquest és un usuari importat de LDAP: només hauries de canviar-ne el grup, si és necessari.",
	"remove_search_filter" => "elimina el filtre de cerca",
	"logout" => "Sortir",
	"top" => "Dalt",
	"last_search_results" => "Darrers resultats de la cerca",
	"show_all" => "Totes les fitxes",
	"home" => "Inici",
	"select_operator" => "Seleccioneu l'operador:",
	"all_conditions_required" => "Cal que es compleixin totes les condicions",
	"any_conditions_required" => "N'hi ha prou que es compleixi una condició",
	"all_contacts" => "Tots els contactes",
	"removed" => "suprimit",
	"please" => "Si us plau aneu",
	"and_check_form" => "i reviseu el formulari.",
	"and_try_again" => "i proveu-ho un altre cop.",
	"none" => "cap",
	"are_you_sure" => "Estàs segur?",
	"delete_all" => "esborrar-ho tot",
	"really?" => "De veritat?",
	"delete_are_you_sure" => "Estàs a punt d'esborrar la fitxa.  Segur?",
	"required_fields_missed" => "No has emplenat alguns camps necessaris.",
	"alphabetic_not_valid" => "Has teclejat números a un camp només alfabètic.",
	"numeric_not_valid" => "Has teclejat lletres o símbols en un camp només numèric.",
	"email_not_valid" => "L'adreça de correu entrada no és correcta.",
	"timestamp_not_valid" => "Les dates especificades no són vàlides.",
	"url_not_valid" => "L'adreça de plana web entrada no és correcta.",
	"phone_not_valid" => "El número de telèfon entrat no és correcte.<br>Si us plau, useu el format \"+(codi país)(codi àrea)(número)\" per exemple +34971855141, 0034971855141, 971855141, 971855141.",
	"date_not_valid" => "Una data entrada no és correcta.",
	"similar_records" => "Les fitxes de sota s'assemblen molt a la que has entrat  (I'll show max ".$number_duplicated_records." similar items, there could be more).<br>Què vols fer?", // to change
	"similar_records_short" => "Les fitxes de sota s'assemblen molt a la que has entrat  (I'll show max ".$number_duplicated_records." similar items, there could be more).", // to change
	"no_records_found" => "Cap fitxa trobada.",
	"records_found" => "fitxes trobades",
	"number_records" => "Fitxes: ",
	"details_of_record" => "Detalls de la fitxa",
	"details_of_record_just_inserted" => "Detalls de la fitxa acabada de crear",
	"edit_record" => "Editar la fitxa",
	"back_to_the_main_table" => "Torna a la taula principal",
	"previous" => "Previ",
	"next" => "Següent",
	"edit_profile" => "Actualitzar les dades del teu perfil",
	"i_think_that" => "Em sembla que ",
	"is_similar_to" => " és semblant a ",
	"page" => "Pàgina ",
	"of" => " de ",
	"records_per_page" => "registres per plana",
	"day" => "Dia",
	"month" => "Mes",
	"year" => "Any",
	"administration" => "Administració",
	"create_update_internal_table" => "Crear o actualitzar la taula interna",
	"other...." => "una altra ...",
	"insert_record" => "Crear una fitxa nova",
	"search_records" => "Cercar fitxes",
	"exactly" => "exactament",
	"like" => "com",
	"required_fields_red" => "Els camps indispensables estan en vermell.",
	"insert_result" => "Entra resultat:",
	"record_inserted" => "Fitxa creada correctament.",
	"update_result" => "Actualitza el resultat:",
	"record_updated" => "Fitxa actualitzada correctament.",
	"profile_updated" => "El teu perfil està actualitzat.",
	"delete_result" => "Resultat de l'eliminació:",
	"record_deleted" => "Fitxa esborrada correctament.",
	"duplication_possible" => "La duplicació està permesa",
	"fields_max_length" => "Has entrat massa text en un o més camps.",
	"current_upload" => "Arxiu actual",
	"delete" => "esborrar",
	"total_records" => "Fitxes",
	"confirm_delete?" => "Esborrar la fitxa?",
    "unselect_all" => "Unselect all", // to change
    "select_all" => "Select all", // to change
    "only_elements_this_page_selected_other_pages_kept" => "Only the elements of the current page will be selected. If you selected elements in other pages, such selection will be kept.", // to change
    "all_elements_will_be_unselected_also_other_pages" => "All the elements will be unselected, also elements selected in other pages.", // to change
    "delete_selected" => "Delete selected", // to change
	"is_equal" => "és igual a",
	"is_different" => "no és igual a",
	"is_not_null" => "no és nul",
	"is_not_empty" => "no està buit",
	"contains" => "conté",
	"doesnt_contain" => "doesn't contain", // to change
	"starts_with" => "comença amb",
	"ends_with" => "acaba amb",
	"greater_than" => "és més gran que",
	"less_than" => "és més petit que",
    "greater_equal_than" => ">=",
    "less_equal_than" => "<=",
    "between" => "between", // to change,
    "between_and" => "and", // to change, used for the between search operator: between .... AND .....
	"export_to_csv" => "Exportar a CSV",
	"new_insert_executed" => "Nova inserció feta",
	"new_update_executed" => "Nova actualització feta",
	"null" => "Nul",
	"is_null" => "és nul",
	"is_empty" => "és buit",
	"continue" => "continua",
	'current_password' => 'current password', // to change
	'new_password' => 'new password', // to change
	'new_password_repeat' => 'new password (repeat)', // to change
	'password_changed' => 'the password has been changed', // to change
	'change_your_password' => 'change your password', // to change
	'your_info' => 'your info', // to change
	'sort_by' => 'sort by', // to change
	'sort' => 'sort', // to change
	'pie_chart' => 'Pie chart', // to change
'bar_chart' => 'Bar chart', // to change
'line_chart' => 'Line chart', // to change
'doughnut_chart' => 'Doughnut chart', // to change
'show_report' => 'Show chart', // to change
'show_labels' => 'Show labels', // to change
'show_legend' => 'Show legend', // to change
'group_data_by' => 'Aggregate data by', // to change
'x_axis' => 'X-axis', // to change
'y_axis' => 'Y-axis', // to change
'show' => 'show', // to change
'percentage' => '%', // to change
'count' => 'count', // to change
'sum' => 'sum', // to change
'average' => 'average', // to change
'min' => 'min', // to change
'max' => 'max', // to change
'variance' => 'variance', // to change
'standard_deviation' => 'standard deviation', // to change

'simple_report' => 'simple report', // to change
'advanced_sql_report' => 'advanced SQL report', // to change
'type_your_custom_sql_query_here' => 'Type your custom SQL query here: ', // to change
'current_search_filter_is_not_used' => '(The current search filter won\'t be used)', // to change
'advanced_sql_reports_are_disabled' => 'Advanced SQL reports are disabled', // to change
'advanced_sql_report_instructions_first_part' => 'You can write a custom SQL select query, e.g. suppose you have a <b>customers</b> table having an <b>age_customer</b> field, you can show the age composition of your customers using the following query:', // to change
'advanced_sql_report_instructions_query_part' => '<br/><br/><div class=&quot;code_snippet&quot; // to change>SELECT age_customer, count(*) FROM customers GROUP BY age_customer</div><br/><br/>', // DON'T TRANSLATE, LEAVE IT UNCHANGED
'advanced_sql_report_instructions_second_part' => 'Remember, the first field you select will be used for the <b>X axis</b> of the graph, the second field for the <b>Y axis</b>.<br/><br/>Read the documentation for further examples.', // to change
'generate_report' => 'Generate chart', // to change
'use_semicolon_forbidden_omit_trailing_semicolmn' => 'The use of semicolon (;) is not allowed for security reason, you can omit the final semicolon.', // to change
'sql_report_must_start_with_select' => 'The custom SQL report must start with "SELECT "', // to change
'show_embed_code' => 'Show embed code', // to change
'embed_code_instructions' => 'You can copy the code below and paste it in a custom page to embed this graph; by embedding several graphs in a page you can easily create a dashboard. Please note that, if the report has been generated after a search, the search filter is not saved in the embed code. If you need to embed a report based on a stable search filter, the best way is to create a VIEW and generate the report starting from it. Also consider that pagination is not available in an embedded grid report, only X records will be displayed, where X is your current <i>items per page</i> setting.', // to change
'produce_pdf' => 'Produce PDF', // to change
'choose_pdf_template' => 'Choose PDF template', // to change
'no_pdf_template' => 'Standard Template', // to change,
'show_revisions' => 'Show revisions', // to change,
'hide_revisions' => 'Hide revisions', // to change,
'record_revisions' => 'Record revisions', // to change,
'revisions' => 'Revisions', // to change,
'for_this_table_revisions_not_enabled_no_revisions' => 'For this table, revisions are not enabled or you haven\'t revisions yet.', // to change

'generate_pivot' => 'Generate pivot', // to change
'you_might_have_additional_rows_admin_set_to' => 'You might have additional rows but the admin set the maximum rows to ', // to change
'add_column' => 'add column', // add column in the pivot report // to change
'remove_this_column' => 'remove this column', // remove column in the pivot report // to change
'advanced_sql_report_instructions_pivot_part' => 'For Pivot Table generation, in addtion, you can use alias (to specify labels) and you can use more than one aggreagete functions, for example: SELECT brand AS ProductBrand, count(*) As Number, AVG(price_product) AS AvgPrice FROM products GROUP BY brand', // to change
"record_inserted_close_window" => "The item has been correctly inserted, you can <a href='#' onclick='window.close();return false;'>close</a> this window.", // to change

"import" => "Import", // to change
'file_type' => 'File type', // to change
'delimiter' => 'Delimiter', // to change
'values_enclosed_by' => 'Values optionally enclosed by', // to change
'load_file' => 'Upload file', // to change
'error_no_file_selected' => 'Error, you have not selected a file to upload.', // to change
'values_enclosed_cannot_be_blank' => 'The parameter "Values optionally enclosed by" cannot be blank, you can leave the default one even if you do not use any enclose character.', // to change
'error_file_type_not_supported_or_different' => 'Error, this file type is not supported or it is not the one you selected in the previous page', // to change
'error_too_much_time_passed' => 'Error, too much time has passed.', // to change
'processing_row' => 'Processing row', // to change
'new_elements_will_be_inserted_to_proceed_click_continue' => 'new elements will be added. To proceed, click "Continue" at the end of the page', // this message will be used with a number, e.g. "5 new elements will be added ... ", // to change
'following_as_example_20_rows' => 'The following are only the first 20 rows of your file.', // to change
'possible_duplication_continue_to_update' => 'Possible duplication, some elements have the same values on the unique fields (the duplication could also be within your file). Here are the duplicated elements. At the moment no elements have been inserted or updated. If you click "Continue" at the end of the page, for these elements, I will update the records with teh new information provided in the file. ', // to change
'elements_have_been_inserted_updated' => 'elements have been inserted/updated.', // this message will be used with a number, e.g. "5 elements have been inserted/updated" // to change
'to_verify_elements_click_continue_filter_set' => 'To verify the elements inserted/updated click on "Continue". I have set a search filter that allows you to see only the inserted/updated elements (you might only see some of them if the administrator has set additional filters).', // to change
'no_element_has_been_inserted' => 'No element has been inserted.', // to change
'error_no_sheet_with_name'=> 'Error, no sheet with name:', // to change
'elements_results_last_import' => 'The elements you see are the result of the last import (you might only see some of them if the administrator has set additional filters). To see all the elements click on "Remove search filter"', // to change
'csv_file_must_be_utf8_encoded' => 'The CSV file must be UTF-8 encoded.', // to change,
'hide_show_quick_filters' => 'Hide/Show quick filters', // to change,
'show_search_url' => 'Show search URL', // to change,
'search_url_instructions' => 'This URL executes the same search you made, also adding the sort criteria you applied (if any).', // to change,
"double_click_to_edit" => 'Double click to edit', // to change
'it_seems_you_uploaded_other_files_cancelled' => ' It seems you uploaded some files in another form but you finally did not complete the save/insert process. Those uplaods have been cancelled.', // to change,
'number_uploaded_files' => 'Number of uploaded files: ', // to change
'file_uploaded_file_will_replace' => 'File uploaded! The file will replace the current one (if any) after saving the form.',// to change
'generic_upload_error' => 'Generic upload error! ', // to change
'collapse_sidebar' => 'Collapse sidebar', // to change




);
$normal_messages_ar['months_short'][1] = 'Jan';
$normal_messages_ar['months_short'][2] = 'Feb';
$normal_messages_ar['months_short'][3] = 'Mar';
$normal_messages_ar['months_short'][4] = 'Apr';
$normal_messages_ar['months_short'][5] = 'May';
$normal_messages_ar['months_short'][6] = 'Jun';
$normal_messages_ar['months_short'][7] = 'Jul';
$normal_messages_ar['months_short'][8] = 'Aug';
$normal_messages_ar['months_short'][9] = 'Sep';
$normal_messages_ar['months_short'][10] = 'Oct';
$normal_messages_ar['months_short'][11] = 'Nov';
$normal_messages_ar['months_short'][12] = 'Dec';

// please don't change the indexes (1,2,3,...) if you want your week to start on Sunday, set $weeks_start_on_sunday = 1 in config.php
$normal_messages_ar['days_short'][1] = 'Mon';
$normal_messages_ar['days_short'][2] = 'Tue';
$normal_messages_ar['days_short'][3] = 'Wed';
$normal_messages_ar['days_short'][4] = 'Thu';
$normal_messages_ar['days_short'][5] = 'Fri';
$normal_messages_ar['days_short'][6] = 'Sat';
$normal_messages_ar['days_short'][7] = 'Sun';


// error messages
$error_messages_ar = array (
	"int_db_empty" => "Error: la base de dades interna està buida.",
	"get" => "Error a l'agafar les variables.",
	"no_functions" => "Error, cap funció seleccionada<br>Si us plau, torna a la plana d'inici.",
	"no_unique_key" => "Error, no tens cap clau primària a la taula.",
	"upload_error" => "Errors amb l'enviament de l'arxiu.",
	"no_authorization_update" => "No estàs autoritzat per modificar aquesta fitxa.",
	"no_authorization_delete" => "No estàs autoritzat per esborrar aquesta fitxa.",
	"no_authorization_view" => "No estàs autoritzat per veure aquesta fitxa.",
	"deleted_only_authorizated_records" => "Només pots esborrar les fitxes per les que hi tens autorització.",
	"record_from_which_you_come_no_longer_exists" => "El registre de partida no existeix.",
	"date_not_representable" => "Un valor de data en aquesta fitxa no es pot representar amb una llista DaDaBIK dia-mes-any. El valor és: ",
	"this_record_is_the_last_one" => "Aquest registre és el darrer.",
	"this_record_is_the_first_one" => "Aquest registre és el primer.",
	"current_password_wrong" => 'the current password is wrong', // to change
	"passwords_are_different" => 'the two passwords are different', // to change
	"new_password_must_be_different_old" => 'the new password must be different from the current one', // to change
	"new_password_is_empty" => 'the new password is empty', // to change,
	"you_cant_live_edit_click_edit" => 'You can\'t live edit this field, please click on the edit icon on your left to edit the entire record.', // to change
	"you_dont_have_enough_permissions_to_edit_field" => 'You don\'t have enough permissions to edit this field.' // to change

	);



//login messages
$login_messages_ar = array(
	"username" => "Usuari",
	"password" => "Contrasenya",
	"please_authenticate" => "Necessites identificar-te per a continuar",
	"login" => "entrada",
	"username_password_are_required" => "Cal nom d'usuari i contrasenya",
	"pwd_gen_link" => "crear contrasenya",
	"incorrect_login" => "Usuari o contrasenya incorrectes",
	"pwd_explain_text" =>"Entra la paraula que usaràs de contrasenya i clica <b>Xifra-la!</b>.",
	"pwd_explain_text_2" =>"Prem <b>Registrar</b> per a escriure-la en el formulari que hi ha a sota",
	"pwd_suggest_email_sending"=>"Pots demanar un missatge per a recordar la contrasenya",
	"pwd_send_link_text" =>"enviar missatge!",
	"pwd_encrypt_button_text" => "Xifra-la!",
	"pwd_register_button_text" => "Registrar contrasenya i sortir",
	"too_many_failed_login_account_blocked" => "Massa intents fallits d'entrada. S'ha blocat el compte.",
	"warning_you_still_have" => "Ull, només et queden ",
	"attempts_before_account_blocking" => " intents abans el compte no sigui blocat.",
	"verification_code" => "Verification code", // to change
	"verification_code_is_required" => "Verification code is required", // to change
	"incorrect_verification_code" => "The verification code is not correct", // to change
	"enable_two-factor_authentication" => "Enable Two-Factor Authentication", // to change
	"two-factor_authentication" => "Two-Factor Authentication", // to change
);

// to change, all the messages below

// Link "Register" in the login form
$login_messages_ar['register'] = 'Register';

// Registration form messages
$login_messages_ar['create_your_account'] = 'Create your account';
$login_messages_ar['email'] = 'email';
$login_messages_ar['first_name'] = 'first name';
$login_messages_ar['last_name'] = 'last name';
$login_messages_ar['registration_form_checkbox_1'] = 'Accept <a href="example_terms.html" target="_blank">terms and conditions</a>'; // to change
$login_messages_ar['registration_form_checkbox_2'] = 'Accept <a href="example_terms.html" target="_blank">terms and conditions</a>'; // to change
$login_messages_ar['registration_form_checkbox_3'] = 'Accept <a href="example_terms.html" target="_blank">terms and conditions</a>'; // to change


// form submit buttons
$login_messages_ar['submit_register_new_account'] = 'Submit and register a new account';
$login_messages_ar['back_to_login'] = 'Back to login';

// registration creation and confirmation messages and errors
$login_messages_ar['account_created_please_confirm_via_email'] = 'Account created, you will receive a confirmation email containing an activation link. Please click on the link to activate your account.';
$login_messages_ar['email_confirmed_login'] = 'Your account has been activated, you can now login: ';
$login_messages_ar['account_created_login'] = 'Your account has been created, you can now login: ';
$login_messages_ar['confirmation_link_expired_resent'] = 'The confirmation link has expired, a new link has been sent to your email address.';
$login_messages_ar['confirmation_link_not_correct_account_not_activated'] = 'This confirmation link is not correct, your account cannot be activated.';
$login_messages_ar['your_email_not_confirmed_yet'] = 'Your email has not been confirmed yet.';
$login_messages_ar['email_already_in_use'] = 'This email is already in use.'; // to change
$login_messages_ar['username_already_in_use'] = 'This username is already in use.'; // to change
$login_messages_ar['registration_email_subject'] = "Please confirm your registration"; // to change
$login_messages_ar['registration_email_content'] = "Hello,\nsomeone (hopefully you) has registered an account at ".$site_url_to_display.". To complete your registration click on this link within 24h:"; // to change

// Link "Forgotten password" in the login form
$login_messages_ar['forgotten_passowrd'] = 'Forgotten password';

// forgotten password form
$login_messages_ar['enter_email_will_get_temporary_password'] = 'Enter your email, you will receive your username and a temporary new password';
// form submit button
$login_messages_ar['submit'] = 'Submit';

// forgotten password confirmation messages and email
$login_messages_ar['if_email_is_user_temporary_password_sent'] = 'If this email address corresponds to an existing user, you will receive a message with a temporary password.';
// email subject
$login_messages_ar['your_temporary_password'] = 'Your temporary password';
// email body
$login_messages_ar['temporary_password_email_content_part_1'] = "Someone (hopefully you) has requested a new password to access ".$site_url_to_display."\n\nIf YOU requested the new password, everything is fine, here is your new temporary password (valid for five minutes only). Please note that email is not a secure communication channel for passwords so immediately change your main password after logging-in and never use - as your main password - the  temporary passwords we sent.";
$login_messages_ar['temporary_password_email_content_part_2'] = "If you can't access your account using this temporary password we sent, it means someone else accessed your account first, please contact your system administrator.\n\nIf you did not request the new password, it means someone else might be trying to access your account: please login as soon as possible using your OLD password (this make the temporary password invalid) and contact your system administrator. If you can't login using your old password, it means that someone else probably already accessed your account using the new temporary password, please contact your system administrator.";

$login_messages_ar['intro_2fa_secret_page'] = '<h2>Important: This page is displayed only once for security reasons.</h2><p>Please complete the setup instructions before leaving the page, as you will not be able to access this information again.</p><p><b>Download an Authentication App:</b> Visit your app store (Google Play/App Store) and download an authentication app, such as Google Authenticator or Authy.<br><br><b>Scan the QR Code:</b> Use the app to scan the QR code displayed below. This will link your account to the authentication app.<br><br><b>Future Logins:</b> The next time you log in, you will be prompted to enter a verification code generated by your authentication app.</p>'; // to change




?>

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/space' => [[['_route' => 'app_admin_space_index', '_controller' => 'AppBundle\\Controller\\Admin\\SpaceController::index'], null, null, null, false, false, null]],
        '/admin/space/add' => [[['_route' => 'app_admin_space_add', '_controller' => 'AppBundle\\Controller\\Admin\\SpaceController::manage'], null, null, null, false, false, 1]],
        '/admin/space/sort' => [[['_route' => 'app_admin_space_sort', '_controller' => 'AppBundle\\Controller\\Admin\\SpaceController::sort'], null, null, null, false, false, null]],
        '/admin/system/cronjob' => [[['_route' => 'app_admin_system_cronjob_index', '_controller' => 'AppBundle\\Controller\\Admin\\System\\CronjobController::index'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_admin_user_default_index', '_controller' => 'AppBundle\\Controller\\Admin\\User\\DefaultController::index'], null, null, null, false, false, null]],
        '/admin/user/export' => [
            [['_route' => 'app_admin_user_export_form', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ExportController::form'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_admin_user_export_download', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ExportController::download'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/user-group' => [[['_route' => 'app_admin_user_group_index', '_controller' => 'AppBundle\\Controller\\Admin\\User\\GroupController::index'], null, null, null, false, false, null]],
        '/admin/user-group/create' => [[['_route' => 'app_admin_user_group_create', '_controller' => 'AppBundle\\Controller\\Admin\\User\\GroupController::manage'], null, null, null, false, false, null]],
        '/admin/user/import/csv' => [[['_route' => 'app_admin_user_import_csv', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ImportController::csvAction'], null, null, null, false, false, null]],
        '/admin/user/create' => [[['_route' => 'app_admin_user_manage_create', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ManageController::create'], null, null, null, false, false, null]],
        '/admin/user/invite' => [[['_route' => 'app_admin_user_manage_invite', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ManageController::create'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_default_index', '_controller' => 'AppBundle\\Controller\\Admin\\DefaultController::index'], null, null, null, false, false, null]],
        '/asset/grunt/js/remote/celum.min.js' => [[['_route' => 'app_asset_script_connection', 'type' => 'celum', '_controller' => 'AppBundle\\Controller\\Asset\\ScriptController::connection'], null, null, null, false, false, null]],
        '/component/menu-aside/custom-links' => [[['_route' => 'app_components_menu_aside_custom_links', '_controller' => 'AppBundle\\Controller\\Components\\MenuAsideController::customLinks'], null, null, null, false, false, null]],
        '/element/clipboard/clear' => [[['_route' => 'app_element_clipboard_clear', '_controller' => 'AppBundle\\Controller\\Element\\ClipboardController::clear'], null, null, null, false, false, null]],
        '/ajax/spaces.json' => [[['_route' => 'app_ajax_spaces', '_controller' => 'AppBundle\\Controller\\AjaxController::spaces'], null, null, null, false, false, null]],
        '/ajax/categories.json' => [[['_route' => 'app_ajax_categories', '_controller' => 'AppBundle\\Controller\\AjaxController::categories'], null, null, null, false, false, 1]],
        '/ajax/internal-link' => [[['_route' => 'app_ajax_internal_link', '_controller' => 'AppBundle\\Controller\\AjaxController::internalLink'], null, null, null, false, false, null]],
        '/ajax/short-link.json' => [[['_route' => 'app_ajax_short_link', '_controller' => 'AppBundle\\Controller\\AjaxController::shortLink'], null, ['POST' => 0], null, false, false, null]],
        '/ajax/toggle-aside-menu' => [[['_route' => 'app_ajax_toggle_aside_menu', '_controller' => 'AppBundle\\Controller\\AjaxController::toggleAsideMenu'], null, ['POST' => 0], null, false, false, 1]],
        '/ajax/toggle-aside-sorting' => [[['_route' => 'app_ajax_toggle_aside_sorting', '_controller' => 'AppBundle\\Controller\\AjaxController::toggleAsideSorting'], null, ['POST' => 0], null, false, false, 1]],
        '/ajax/toggle-edit-mode' => [[['_route' => 'app_ajax_toggle_edit_mode', '_controller' => 'AppBundle\\Controller\\AjaxController::toggleEditMode'], null, ['POST' => 0], null, false, false, 1]],
        '/ajax/toggle-sidebar' => [[['_route' => 'app_ajax_toggle_sidebar', '_controller' => 'AppBundle\\Controller\\AjaxController::toggleSidebar'], null, ['GET' => 0], null, false, false, null]],
        '/download-center/download' => [[['_route' => 'app_feature_download_center_collection_download', '_controller' => 'AppBundle\\Controller\\Feature\\DownloadCenter\\CollectionController::download'], null, null, null, false, false, null]],
        '/download-center' => [[['_route' => 'app_feature_download_center_default_index', '_controller' => 'AppBundle\\Controller\\Feature\\DownloadCenter\\DefaultController::index'], null, null, null, false, false, null]],
        '/download-center/list' => [[['_route' => 'app_feature_download_center_default_list', '_controller' => 'AppBundle\\Controller\\Feature\\DownloadCenter\\DefaultController::list'], null, null, null, false, false, 1]],
        '/download-center/edit/intro' => [[['_route' => 'app_feature_download_center_edit_intro', '_controller' => 'AppBundle\\Controller\\Feature\\DownloadCenter\\EditController::intro'], null, null, null, false, false, null]],
        '/feature/form/global-contact' => [[['_route' => 'app_feature_form_global_contact', '_controller' => 'AppBundle\\Controller\\Feature\\FormController::globalContact'], null, null, null, false, false, null]],
        '/file/tag/list' => [[['_route' => 'app_file_tag_list_xhr', '_controller' => 'AppBundle\\Controller\\File\\TagController::listXhr'], null, null, null, false, false, 1]],
        '/upload/base64' => [[['_route' => 'app_file_upload_base64', '_controller' => 'AppBundle\\Controller\\File\\UploadController::base64'], null, null, null, false, false, null]],
        '/search/related-categories.json' => [[['_route' => 'app_search_related_categories', '_controller' => 'AppBundle\\Controller\\SearchController::relatedCategories'], null, null, null, false, false, 1]],
        '/search' => [[['_route' => 'app_search_full', '_controller' => 'AppBundle\\Controller\\SearchController::full'], null, null, null, false, false, null]],
        '/search/result' => [[['_route' => 'app_search_full_result', '_controller' => 'AppBundle\\Controller\\SearchController::full'], null, null, null, false, false, null]],
        '/search/quick' => [[['_route' => 'app_search_quick', '_controller' => 'AppBundle\\Controller\\SearchController::quick'], null, null, null, false, false, null]],
        '/search/suggestion' => [[['_route' => 'app_search_suggestions', '_controller' => 'AppBundle\\Controller\\SearchController::suggestions'], null, null, null, false, false, null]],
        '/settings/analytics' => [[['_route' => 'app_settings_analytics_index', '_controller' => 'AppBundle\\Controller\\Settings\\Analytics\\DefaultController::index'], null, null, null, false, false, null]],
        '/settings/category/approval' => [[['_route' => 'app_settings_category_approval_index', '_controller' => 'AppBundle\\Controller\\Settings\\Category\\ApprovalController::index'], null, null, null, false, false, null]],
        '/settings/category/public/set-all-non-public' => [[['_route' => 'app_settings_category_public_disable', '_controller' => 'AppBundle\\Controller\\Settings\\Category\\PublicController::disable'], null, null, null, false, false, null]],
        '/settings/category' => [[['_route' => 'app_settings_category_index', '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::index'], null, null, null, false, false, null]],
        '/settings/color' => [[['_route' => 'app_settings_color_index', '_controller' => 'AppBundle\\Controller\\Settings\\ColorController::index'], null, null, null, false, false, null]],
        '/settings/color/add' => [[['_route' => 'app_settings_color_add', '_controller' => 'AppBundle\\Controller\\Settings\\ColorController::manage'], null, null, null, false, false, null]],
        '/settings/feature/approval' => [[['_route' => 'app_settings_feature_approval_index', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\ApprovalController::index'], null, null, null, false, false, null]],
        '/settings/feature/approval/save' => [[['_route' => 'app_settings_feature_approval_save', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\ApprovalController::save'], null, null, null, false, false, null]],
        '/settings/feature/connection/celum' => [[['_route' => 'app_settings_feature_connection_celum', 'type' => 1, '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\ConnectionController::manage'], null, null, null, false, false, 1]],
        '/settings/feature/connection/mediacockpit' => [[['_route' => 'app_settings_feature_connection_mediacockpit', 'type' => 2, '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\ConnectionController::manage'], null, null, null, false, false, 1]],
        '/settings/feature/connection/mediacockpit/attributes' => [[['_route' => 'app_settings_feature_connection_mediacockpit_attributes', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\ConnectionController::mediacockpitAttributes'], null, null, null, false, false, 1]],
        '/settings/feature' => [[['_route' => 'app_settings_feature_index', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\DefaultController::index'], null, null, null, false, false, null]],
        '/settings/feature/reload-file-transfer' => [[['_route' => 'app_settings_feature_index_reload_file_transfer', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\DefaultController::indexReload'], null, null, null, false, false, null]],
        '/settings/feature/reload-qr-code-generator' => [[['_route' => 'app_settings_feature_index_reload_qr_generator', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\DefaultController::indexReload'], null, null, null, false, false, null]],
        '/settings/feature/connection' => [[['_route' => 'app_settings_feature_connection', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\DefaultController::connection'], null, null, null, false, false, null]],
        '/settings/feature/form' => [[['_route' => 'app_settings_feature_form', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\DefaultController::form'], null, null, null, false, false, null]],
        '/settings/feature/legal' => [[['_route' => 'app_settings_feature_legal', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\DefaultController::legal'], null, null, null, false, false, null]],
        '/settings/feature/news/category/index' => [[['_route' => 'app_settings_feature_news_category_index', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsCategoryController::index'], null, null, null, false, false, null]],
        '/settings/feature/news/category/create' => [[['_route' => 'app_settings_feature_news_category_create', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsCategoryController::edit'], null, null, null, false, false, null]],
        '/settings/feature/news/index' => [[['_route' => 'app_settings_feature_news_index', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsController::index'], null, null, null, false, false, null]],
        '/settings/feature/news/upgrade' => [[['_route' => 'app_settings_feature_news_app_settings_feature_news_upgrade', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsController::upgrade'], null, null, null, false, false, null]],
        '/settings/feature/news/create' => [[['_route' => 'app_settings_feature_news_create', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsController::create'], null, null, null, false, false, 1]],
        '/settings/feature/news/sort' => [[['_route' => 'app_settings_feature_news_sort', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsController::sort'], null, null, null, false, false, null]],
        '/settings/locale' => [[['_route' => 'app_settings_locale_index', '_controller' => 'AppBundle\\Controller\\Settings\\LocaleController::index'], null, null, null, false, false, null]],
        '/settings/locale/add' => [[['_route' => 'app_settings_locale_add', '_controller' => 'AppBundle\\Controller\\Settings\\LocaleController::manage'], null, null, null, false, false, 1]],
        '/settings/locale/export' => [[['_route' => 'app_settings_locale_export', '_controller' => 'AppBundle\\Controller\\Settings\\LocaleController::export'], null, null, null, false, false, null]],
        '/settings/locale/import' => [[['_route' => 'app_settings_locale_import', '_controller' => 'AppBundle\\Controller\\Settings\\LocaleController::import'], null, null, null, false, false, null]],
        '/settings/pattern' => [[['_route' => 'app_settings_pattern_index', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::index'], null, null, null, false, false, null]],
        '/settings/pattern/font-upload' => [[['_route' => 'app_settings_pattern_fontupload', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::fontUpload'], null, null, null, false, false, null]],
        '/settings/pattern/style' => [[['_route' => 'app_settings_pattern_style', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::style'], null, null, null, false, false, null]],
        '/settings/pattern/style/add-file' => [[['_route' => 'app_settings_pattern_style_add_file', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::resource'], null, null, null, false, false, null]],
        '/settings/pattern/style/add-uri' => [[['_route' => 'app_settings_pattern_style_add_uri', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::resource'], null, null, null, false, false, null]],
        '/settings/pattern/script/add-file' => [[['_route' => 'app_settings_pattern_script_add_file', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::resource'], null, null, null, false, false, null]],
        '/settings/pattern/script/add-uri' => [[['_route' => 'app_settings_pattern_script_add_uri', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::resource'], null, null, null, false, false, null]],
        '/settings/tool/framing' => [[['_route' => 'app_settings_tool_framing_index', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\FramingController::index'], null, null, null, false, false, null]],
        '/settings/tool/framing/format/add' => [[['_route' => 'app_settings_tool_framing_format_add', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\FramingController::formatAction'], null, null, null, false, false, null]],
        '/settings/tool/framing/group/add' => [[['_route' => 'app_settings_tool_framing_group_add', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\FramingController::groupAction'], null, null, null, false, false, null]],
        '/settings/smart-tool/inspiration' => [[['_route' => 'app_settings_smart_tool_inspiration_index', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\Inspiration\\DefaultController::index'], null, null, null, false, false, null]],
        '/settings/smart-tool/inspiration/eye-catcher/add' => [[['_route' => 'app_settings_smart_tool_inspiration_eye_catcher_add', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\Inspiration\\EyeCatcherController::edit'], null, null, null, false, false, null]],
        '/settings/smart-tool/inspiration/eye-catcher/add-type-new' => [[['_route' => 'app_settings_smart_tool_inspiration_eye_catcher_add_type_new', 'type' => 1, '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\Inspiration\\EyeCatcherController::edit'], null, null, null, false, false, null]],
        '/settings/design' => [[['_route' => 'app_settings_theme_index', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::index'], null, null, null, false, false, null]],
        '/settings/design/theme/add' => [[['_route' => 'app_settings_theme_add', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::manage'], null, null, null, false, false, 1]],
        '/settings/design/login' => [[['_route' => 'app_settings_theme_login', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::login'], null, null, null, false, false, null]],
        '/settings/design/login-reload-browser-hint' => [[['_route' => 'app_settings_theme_login_reload_browser_hint', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::loginReload'], null, null, null, false, false, null]],
        '/settings/tool/inspiration/tag-type/add' => [[['_route' => 'app_settings_tool_inspiration_tag_type_add', '_controller' => 'AppBundle\\Controller\\Settings\\ToolInspirationController::tagTypeAction'], null, null, null, false, false, null]],
        '/settings/tool/inspiration/tag-type/sort' => [[['_route' => 'app_settings_tool_inspiration_tag_type_sort', '_controller' => 'AppBundle\\Controller\\Settings\\ToolInspirationController::tagTypeSort'], null, null, null, false, false, null]],
        '/news/dropdown' => [[['_route' => 'app_feature_news_dropdown', '_controller' => 'AppBundle\\Controller\\Feature\\NewsController::dropdown'], null, null, null, false, false, 1]],
        '/news' => [[['_route' => 'app_feature_news_index', '_controller' => 'AppBundle\\Controller\\Feature\\NewsController::index'], null, null, null, false, false, null]],
        '/news/load' => [[['_route' => 'app_feature_news_load', '_controller' => 'AppBundle\\Controller\\Feature\\NewsController::load'], null, null, null, false, false, null]],
        '/news/mark-as-seen' => [[['_route' => 'app_feature_news_mark_seen', '_controller' => 'AppBundle\\Controller\\Feature\\NewsController::markAsSeen'], null, null, null, false, false, 1]],
        '/' => [[['_route' => 'app_default_index', '_controller' => 'AppBundle\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/toggle-restore' => [[['_route' => 'app_default_toggle_restore', '_controller' => 'AppBundle\\Controller\\DefaultController::toggleRestore'], null, null, null, false, false, null]],
        '/legal-popup' => [[['_route' => 'app_default_legal_popup', '_controller' => 'AppBundle\\Controller\\DefaultController::legalPopup'], null, null, null, false, false, null]],
        '/help' => [[['_route' => 'app_default_help', '_controller' => 'AppBundle\\Controller\\DefaultController::help'], null, null, null, false, false, null]],
        '/releases' => [[['_route' => 'app_default_releases', '_controller' => 'AppBundle\\Controller\\DefaultController::releases'], null, null, null, false, false, null]],
        '/doc' => [[['_route' => 'app_default_doc', '_controller' => 'AppBundle\\Controller\\DefaultController::doc'], null, null, null, false, false, null]],
        '/imprint' => [[['_route' => 'app_default_legal_imprint', 'type' => 'imprint', 'key' => 'config_legal_internal_sites', '_controller' => 'AppBundle\\Controller\\DefaultController::legal'], null, null, null, false, false, null]],
        '/privacy' => [[['_route' => 'app_default_legal_privacy', 'type' => 'privacy', 'key' => 'config_legal_internal_sites', '_controller' => 'AppBundle\\Controller\\DefaultController::legal'], null, null, null, false, false, null]],
        '/tos' => [[['_route' => 'app_default_legal_tos', 'type' => 'tos', 'key' => 'config_legal_internal_sites', '_controller' => 'AppBundle\\Controller\\DefaultController::legal'], null, null, null, false, false, null]],
        '/settings' => [[['_route' => 'app_settings_index', '_controller' => 'AppBundle\\Controller\\SettingsController::index'], null, null, null, false, false, null]],
        '/source/sort' => [[['_route' => 'app_source_sort', '_controller' => 'AppBundle\\Controller\\SourceController::sortAction'], null, null, null, false, false, null]],
        '/user/bookmark/list' => [[['_route' => 'app_user_bookmark_list', '_controller' => 'AppBundle\\Controller\\User\\BookmarkController::list'], null, null, null, false, false, 1]],
        '/user/bookmark/toggle' => [[['_route' => 'app_user_bookmark_toggle', '_controller' => 'AppBundle\\Controller\\User\\BookmarkController::toggle'], null, ['POST' => 0], null, false, false, 1]],
        '/reset' => [[['_route' => 'app_user_password_reset_request', '_controller' => 'AppBundle\\Controller\\User\\PasswordResetController::request'], null, ['GET' => 0], null, false, false, null]],
        '/reset/send-mail' => [[['_route' => 'app_user_password_reset_send_mail', '_controller' => 'AppBundle\\Controller\\User\\PasswordResetController::sendMail'], null, ['POST' => 0], null, false, false, null]],
        '/reset/check-email' => [[['_route' => 'app_user_password_reset_check_email', '_controller' => 'AppBundle\\Controller\\User\\PasswordResetController::checkEmail'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_user_security_login', '_controller' => 'AppBundle\\Controller\\User\\SecurityController::login'], null, null, null, false, false, null]],
        '/login_check' => [[['_route' => 'app_user_security_check', '_controller' => 'AppBundle\\Controller\\User\\SecurityController::check'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_user_security_logout', '_controller' => 'AppBundle\\Controller\\User\\SecurityController::logout'], null, null, null, false, false, null]],
        '/account/change-password' => [[['_route' => 'app_user_changepassword', '_controller' => 'AppBundle\\Controller\\UserController::changePasswordAction'], null, null, null, false, false, null]],
        '/account/impersonate' => [[['_route' => 'app_user_impersonate', '_controller' => 'AppBundle\\Controller\\UserController::impersonate'], null, null, null, false, false, null]],
        '/account/impersonate/back' => [[['_route' => 'app_user_impersonate_back', '_controller' => 'AppBundle\\Controller\\UserController::impersonateBack'], null, null, null, false, false, null]],
        '/login/check-oauth' => [[['_route' => 'wirdesign_wirhub_oauth_login'], null, null, null, false, false, null]],
        '/login/check-azure' => [[['_route' => 'wirdesign_wirhub_azure_login'], null, null, null, false, false, null]],
        '/login/check-okta' => [[['_route' => 'wirdesign_wirhub_okta_login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/connect/(?'
                    .'|([^/]++)(*:27)'
                    .'|service/([^/]++)(*:50)'
                    .'|registration/([^/]++)(*:78)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|space/([^/]++)/(?'
                            .'|delete(*:123)'
                            .'|edit(*:135)'
                        .')'
                        .'|user(?'
                            .'|\\-group/([^/]++)/(?'
                                .'|edit(*:175)'
                                .'|delete(*:189)'
                            .')'
                            .'|/([^/]++)/(?'
                                .'|delete(*:217)'
                                .'|edit(*:229)'
                                .'|resend\\-invitation(*:255)'
                                .'|password\\-reset(*:278)'
                                .'|unlink\\-oauth(*:299)'
                            .')'
                        .')'
                        .'|([^/]++)/config(*:324)'
                    .')'
                    .'|sset/(?'
                        .'|file/([^/]++)/([^/]++)(*:363)'
                        .'|theme/([^/]++)/([^/\\.]++)\\.(?'
                            .'|css(*:404)'
                            .'|min\\.css(*:420)'
                        .')'
                    .')'
                .')'
                .'|/bundles/app/([^/]++)/js/runtime\\.js(*:467)'
                .'|/([^/]++)/(?'
                    .'|category/(?'
                        .'|export/([^/\\.]++)\\.html(*:523)'
                        .'|([^/]++)/translate/(?'
                            .'|tools(*:558)'
                            .'|copy(*:570)'
                        .')'
                    .')'
                    .'|style(*:585)'
                .')'
                .'|/dashboard/create/([^/]++)/for/([^/]++)(*:633)'
                .'|/([^/]++)/s(?'
                    .'|ettings(*:662)'
                    .'|tyle/dashboard(*:684)'
                .')'
                .'|/download(?'
                    .'|/file\\-transfer/([^/]++)(?'
                        .'|(*:732)'
                        .'|/(?'
                            .'|files\\.zip(*:754)'
                            .'|([^/]++)/([^/]++)(*:779)'
                        .')'
                    .')'
                    .'|\\-center/([^/]++)/(?'
                        .'|detail(*:816)'
                        .'|edit(*:828)'
                    .')'
                .')'
                .'|/element/(?'
                    .'|([^/]++)/a(?'
                        .'|jax/(?'
                            .'|get(?'
                                .'|(*:876)'
                                .'|\\-for\\-dashboard(*:900)'
                            .')'
                            .'|preview(*:916)'
                        .')'
                        .'|lias/relations(*:939)'
                    .')'
                    .'|c(?'
                        .'|lipboard/([^/]++)/(?'
                            .'|c(?'
                                .'|opy(*:980)'
                                .'|ut(?'
                                    .'|(*:993)'
                                    .'|/paste/in/([^/]++)(*:1019)'
                                .')'
                            .')'
                            .'|link/in/([^/]++)(*:1046)'
                            .'|paste/in/([^/]++)(*:1072)'
                        .')'
                        .'|reate/(?'
                            .'|choice/for/([^/]++)(*:1110)'
                            .'|type/([^/]++)/in/([^/]++)/(?'
                                .'|full\\-size(*:1158)'
                                .'|quick(*:1172)'
                            .')'
                        .')'
                    .')'
                    .'|([^/]++)/(?'
                        .'|edit/(?'
                            .'|content(*:1211)'
                            .'|description(*:1231)'
                            .'|visibility/(?'
                                .'|language(*:1262)'
                                .'|hidden(*:1277)'
                                .'|public(*:1292)'
                            .')'
                            .'|link\\-(?'
                                .'|optional(*:1319)'
                                .'|required(*:1336)'
                            .')'
                            .'|qick(*:1350)'
                            .'|upload/([^/]++)(*:1374)'
                            .'|toggle/([^/]++)(*:1398)'
                        .')'
                        .'|file(?'
                            .'|/(?'
                                .'|attach(*:1425)'
                                .'|([^/]++)/(?'
                                    .'|detach(?'
                                        .'|(*:1455)'
                                        .'|\\-inline(*:1472)'
                                    .')'
                                    .'|move(*:1486)'
                                    .'|remove(*:1501)'
                                .')'
                            .')'
                            .'|\\-transfer/(?'
                                .'|([^/]++)/(?'
                                    .'|create(*:1544)'
                                    .'|delete(*:1559)'
                                    .'|edit(*:1572)'
                                .')'
                                .'|upload(*:1588)'
                            .')'
                        .')'
                        .'|s(?'
                            .'|hare(*:1607)'
                            .'|mart\\-tool/(?'
                                .'|icon\\-list/edit/attribute\\-folder(*:1663)'
                                .'|mediacockpit(?'
                                    .'|/(?'
                                        .'|edit/attribute\\-(?'
                                            .'|f(?'
                                                .'|older(*:1719)'
                                                .'|ilter(*:1733)'
                                            .')'
                                            .'|views(*:1748)'
                                        .')'
                                        .'|([^/]++)/attributes(*:1777)'
                                        .'|derivate/([^/]++)/embedded(*:1812)'
                                        .'|([^/]++)/(?'
                                            .'|d(?'
                                                .'|etail(*:1842)'
                                                .'|ownload(?'
                                                    .'|/([^/]++)(*:1870)'
                                                    .'|\\-(?'
                                                        .'|preview/([^/]++)(*:1900)'
                                                        .'|group\\-member/([^/]++)/([^/]++)(*:1940)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|embedded/([^/]++)(*:1969)'
                                            .'|preview(?'
                                                .'|/([^/]++)(*:1997)'
                                                .'|\\-large/([^/]++)(*:2022)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:2034)'
                                .')'
                            .')'
                            .'|corm/(?'
                                .'|index\\.html(*:2064)'
                                .'|(.+)(*:2077)'
                            .')'
                            .'|lider/(?'
                                .'|create\\-slide(*:2109)'
                                .'|([^/]++)/(?'
                                    .'|edit(*:2134)'
                                    .'|delete(*:2149)'
                                    .'|move(*:2162)'
                                .')'
                            .')'
                            .'|paces/(?'
                                .'|add\\-space(*:2192)'
                                .'|edit/([^/]++)(*:2214)'
                                .'|delete/([^/]++)(*:2238)'
                                .'|move/([^/]++)(*:2260)'
                            .')'
                            .'|tage/video(*:2280)'
                        .')'
                        .'|a(?'
                            .'|ccordion/(?'
                                .'|add(*:2309)'
                                .'|([^/]++)/edit(*:2331)'
                                .'|sort(*:2344)'
                                .'|remember/([^/]++)(*:2370)'
                            .')'
                            .'|nnotation/markdown\\-to\\-html(*:2408)'
                            .'|ttachment/confirm/([^/]++)(*:2443)'
                        .')'
                        .'|c(?'
                            .'|hapter\\-teaser/(?'
                                .'|add\\-item(*:2484)'
                                .'|edit/([^/]++)(*:2506)'
                                .'|delete/([^/]++)(*:2530)'
                                .'|move/([^/]++)(*:2552)'
                            .')'
                            .'|o(?'
                                .'|l(?'
                                    .'|ors/(?'
                                        .'|delete/([^/]++)(*:2592)'
                                        .'|add(*:2604)'
                                        .'|edit(?:/([^/]++))?(*:2631)'
                                        .'|sort(*:2644)'
                                    .')'
                                    .'|umns/layout/([^/]++)(*:2674)'
                                .')'
                                .'|ntact(?'
                                    .'|/form(*:2697)'
                                    .'|\\-person/edit(*:2719)'
                                .')'
                            .')'
                            .'|ta/button(*:2739)'
                        .')'
                        .'|do\\-dont/(?'
                            .'|delete/([^/]++)(*:2776)'
                            .'|edit/([^/]++)(*:2798)'
                            .'|create/do(?'
                                .'|nt(*:2821)'
                                .'|(*:2830)'
                            .')'
                            .'|move/([^/]++)(*:2853)'
                        .')'
                        .'|h(?'
                            .'|eadline/(?'
                                .'|content(*:2885)'
                                .'|align\\-(?'
                                    .'|left(*:2908)'
                                    .'|center(*:2923)'
                                    .'|right(*:2937)'
                                .')'
                            .')'
                            .'|tml/preview(*:2959)'
                        .')'
                        .'|i(?'
                            .'|con\\-list/(?'
                                .'|c(?'
                                    .'|ategory/(?'
                                        .'|index(*:3006)'
                                        .'|create(*:3021)'
                                        .'|([^/]++)/(?'
                                            .'|edit(*:3046)'
                                            .'|delete(*:3061)'
                                            .'|show(*:3074)'
                                        .')'
                                        .'|show(*:3088)'
                                        .'|([^/]++)/download(*:3114)'
                                        .'|download(*:3131)'
                                        .'|sort(*:3144)'
                                    .')'
                                    .'|ollection/(?'
                                        .'|create(*:3173)'
                                        .'|([^/]++)/(?'
                                            .'|edit(*:3198)'
                                            .'|d(?'
                                                .'|elete(*:3216)'
                                                .'|ownload(*:3232)'
                                            .')'
                                            .'|show(*:3246)'
                                        .')'
                                        .'|sort(*:3260)'
                                    .')'
                                .')'
                                .'|([^/]++)/(?'
                                    .'|download(*:3291)'
                                    .'|([^/]++)/download(*:3317)'
                                    .'|edit(*:3330)'
                                    .'|additional/files/edit(*:3360)'
                                .')'
                                .'|list(?'
                                    .'|(*:3377)'
                                    .'|/([^/]++)(*:3395)'
                                .')'
                                .'|attach(?'
                                    .'|/(?'
                                        .'|col/([^/]++)(*:3430)'
                                        .'|([^/]++)(?'
                                            .'|(*:3450)'
                                            .'|/([^/]++)(*:3468)'
                                        .')'
                                    .')'
                                    .'|(*:3479)'
                                .')'
                                .'|download/([^/]++)/status(*:3513)'
                                .'|tag/(?'
                                    .'|index(*:3534)'
                                    .'|create(*:3549)'
                                    .'|([^/]++)/(?'
                                        .'|edit(*:3574)'
                                        .'|delete(*:3589)'
                                    .')'
                                    .'|sort(*:3603)'
                                .')'
                            .')'
                            .'|mage/(?'
                                .'|con(?'
                                    .'|tent(*:3632)'
                                    .'|vert(*:3645)'
                                .')'
                                .'|upload(*:3661)'
                            .')'
                        .')'
                        .'|pattern/(?'
                            .'|download\\-(?'
                                .'|style(?'
                                    .'|(*:3704)'
                                    .'|s(*:3714)'
                                .')'
                                .'|variables(*:3733)'
                            .')'
                            .'|([^/\\.]++)\\.html(*:3759)'
                            .'|history/([^/\\.]++)\\.html(*:3792)'
                            .'|preview(?'
                                .'|\\-create(*:3819)'
                                .'|/([^/\\.]++)\\.html(*:3845)'
                            .')'
                            .'|([^/\\.]++)\\.(?'
                                .'|js(*:3872)'
                                .'|css(*:3884)'
                            .')'
                        .')'
                        .'|qr\\-generator/(?'
                            .'|c(?'
                                .'|odes(*:3920)'
                                .'|reate(*:3934)'
                            .')'
                            .'|d(?'
                                .'|elete/([^/]++)(*:3962)'
                                .'|ownload/([^/]++)(*:3987)'
                            .')'
                            .'|edit/([^/]++)(*:4010)'
                        .')'
                        .'|table/(?'
                            .'|edit/row\\-([^/]++)/col\\-([^/]++)(*:4061)'
                            .'|grid/(?'
                                .'|add\\-(?'
                                    .'|row/([^/]++)(?:/([^/]++))?(*:4112)'
                                    .'|col/([^/]++)(?:/([^/]++))?(*:4147)'
                                .')'
                                .'|remove\\-(?'
                                    .'|row/([^/]++)(*:4180)'
                                    .'|col/([^/]++)(*:4201)'
                                .')'
                            .')'
                            .'|inline(*:4218)'
                            .'|reload(*:4233)'
                        .')'
                        .'|video/upload(*:4255)'
                    .')'
                    .'|in/([^/]++)/sort(*:4281)'
                    .'|([^/]++)/(?'
                        .'|t(?'
                            .'|oolbar/inline(*:4319)'
                            .'|ranslate(*:4336)'
                            .'|humbnail/([^/]++)(*:4362)'
                        .')'
                        .'|de(?'
                            .'|bug(*:4380)'
                            .'|lete(*:4393)'
                        .')'
                        .'|in/([^/]++)/edit(?'
                            .'|(*:4422)'
                            .'|/full\\-size(*:4442)'
                        .')'
                        .'|restore(*:4459)'
                        .'|attach(?'
                            .'|(*:4477)'
                            .'|\\-chunk/([^/]++)(*:4502)'
                        .')'
                        .'|comment(?'
                            .'|(*:4522)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:4548)'
                                .'|delete(*:4563)'
                            .')'
                        .')'
                        .'|upload\\-collection/([^/]++)(*:4601)'
                    .')'
                .')'
                .'|/category/([^/]++)/(?'
                    .'|history/([^/]++)(?'
                        .'|(*:4653)'
                        .'|/revert\\-to/([^/]++)(*:4682)'
                    .')'
                    .'|approval/(?'
                        .'|approve(*:4711)'
                        .'|re(?'
                            .'|ject(*:4729)'
                            .'|quest(*:4743)'
                        .')'
                    .')'
                .')'
                .'|/tool/([^/]++)/(?'
                    .'|framing/(?'
                        .'|d(?'
                            .'|ownload(*:4795)'
                            .'|elete/([^/]++)(*:4818)'
                        .')'
                        .'|edit/([^/]++)(*:4841)'
                        .'|add/([^/]++)(*:4862)'
                    .')'
                    .'|inspiration/(?'
                        .'|add(*:4890)'
                        .'|([^/]++)/(?'
                            .'|edit(*:4915)'
                            .'|delete(*:4930)'
                        .')'
                        .'|count\\.json(*:4951)'
                        .'|more(*:4964)'
                        .'|([^/]++)/show(*:4986)'
                        .'|comment/([^/]++)/(?'
                            .'|edit(*:5019)'
                            .'|delete(*:5034)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|like\\-toggle(*:5068)'
                            .'|share(*:5082)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|jax/(?'
                        .'|element/by/comment/([^/]++)(*:5133)'
                        .'|([^/]++)/(?'
                            .'|elements/([^/\\.]++)\\.json(*:5179)'
                            .'|categories\\.json(*:5204)'
                        .')'
                    .')'
                    .'|sset/(?'
                        .'|file/([^/]++)/thumbnail/w500\\.jpg(*:5256)'
                        .'|setting/font/([^/]++)/(?'
                            .'|([^/\\.]++)\\.css(*:5305)'
                            .'|preview\\.png(*:5326)'
                        .')'
                    .')'
                .')'
                .'|/f(?'
                    .'|eature/(?'
                        .'|connection/([^/]++)/mediacockpit/(?'
                            .'|([^/]++)/preview/([^/]++)(*:5414)'
                            .'|collection(*:5433)'
                        .')'
                        .'|metrics/([^/]++)/category(*:5468)'
                    .')'
                    .'|ile/(?'
                        .'|([^/]++)/(?'
                            .'|rename(*:5503)'
                            .'|meta\\.json(*:5522)'
                        .')'
                        .'|download/([^/]++)(?'
                            .'|(*:5552)'
                            .'|/([^/]++)(*:5570)'
                        .')'
                        .'|([^/]++)/([^/]++)(*:5597)'
                    .')'
                .')'
                .'|/upload/([^/]++)/(?'
                    .'|chunk(*:5633)'
                    .'|finish(?'
                        .'|(*:5651)'
                        .'|\\-and\\-attach/([^/]++)(*:5682)'
                    .')'
                    .'|remove(*:5698)'
                .')'
                .'|/se(?'
                    .'|arch/result/more/([^/]++)(*:5739)'
                    .'|ttings/(?'
                        .'|analytics/graph/login/(?'
                            .'|user/([^/]++)/to/([^/]++)(*:5808)'
                            .'|daily/([^/]++)/to/([^/]++)(*:5843)'
                        .')'
                        .'|c(?'
                            .'|ategory/(?'
                                .'|approval/([^/]++)/notes(*:5891)'
                                .'|([^/]++)/(?'
                                    .'|delete(*:5918)'
                                    .'|restore(*:5934)'
                                    .'|edit(*:5947)'
                                .')'
                                .'|create\\-(?'
                                    .'|in(?:/([^/]++))?(*:5984)'
                                    .'|for/([^/]++)(*:6005)'
                                .')'
                                .'|s(?'
                                    .'|pace/([^/]++)(*:6032)'
                                    .'|ort\\-directory/([^/]++)(*:6064)'
                                .')'
                                .'|toggle\\-hidden/([^/]++)(*:6097)'
                            .')'
                            .'|olor/([^/]++)/(?'
                                .'|edit(*:6128)'
                                .'|delete(*:6143)'
                            .')'
                        .')'
                        .'|feature/news/(?'
                            .'|category/([^/]++)/(?'
                                .'|edit(*:6195)'
                                .'|delete(*:6210)'
                            .')'
                            .'|([^/]++)/(?'
                                .'|edit(*:6236)'
                                .'|delete(*:6251)'
                            .')'
                        .')'
                        .'|locale/([^/]++)/(?'
                            .'|edit(*:6285)'
                            .'|delete(*:6300)'
                            .'|template(?'
                                .'|(*:6320)'
                                .'|/([^/]++)(*:6338)'
                            .')'
                        .')'
                        .'|pattern/(?'
                            .'|font/([^/]++)/(?'
                                .'|edit(*:6381)'
                                .'|delete(*:6396)'
                            .')'
                            .'|s(?'
                                .'|tyle/([^/]++)/(?'
                                    .'|edit(*:6431)'
                                    .'|delete(*:6446)'
                                .')'
                                .'|cript/([^/]++)/(?'
                                    .'|edit(*:6478)'
                                    .'|delete(*:6493)'
                                .')'
                            .')'
                        .')'
                        .'|tool/(?'
                            .'|framing/(?'
                                .'|format/([^/]++)/(?'
                                    .'|edit(*:6547)'
                                    .'|delete(*:6562)'
                                .')'
                                .'|group/([^/]++)/(?'
                                    .'|edit(*:6594)'
                                    .'|delete(*:6609)'
                                .')'
                            .')'
                            .'|inspiration/(?'
                                .'|([^/]++)/tag(?'
                                    .'|s(*:6651)'
                                    .'|/(?'
                                        .'|add(*:6667)'
                                        .'|([^/]++)/(?'
                                            .'|edit(*:6692)'
                                            .'|delete(*:6707)'
                                        .')'
                                    .')'
                                .')'
                                .'|tag\\-type/([^/]++)/(?'
                                    .'|edit(*:6745)'
                                    .'|delete(*:6760)'
                                .')'
                            .')'
                        .')'
                        .'|smart\\-tool/inspiration/eye\\-catcher/(?'
                            .'|delete/([^/]++)(*:6827)'
                            .'|edit/([^/]++)(*:6849)'
                        .')'
                        .'|design/(?'
                            .'|theme/([^/]++)/edit(*:6888)'
                            .'|([^/]++)/(?'
                                .'|de(?'
                                    .'|lete(*:6918)'
                                    .'|tail(*:6931)'
                                .')'
                                .'|file(*:6945)'
                                .'|refresh(*:6961)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/([^/]++)/(?'
                    .'|style/category/([^/]++)(*:7010)'
                    .'|([^/]++)/jump\\-marks(*:7039)'
                .')'
                .'|/feature/connection/([^/]++)/file\\-dialog(*:7090)'
                .'|/news/([^/]++)(*:7113)'
                .'|/c(?'
                    .'|omment/([^/]++)(*:7142)'
                    .'|ategory/([^/]++)/(?'
                        .'|favour(*:7177)'
                        .'|defavour(*:7194)'
                    .')'
                .')'
                .'|/invitation/([^/\\.]++)\\.html(*:7233)'
                .'|/s(?'
                    .'|h(?'
                        .'|are/([^/\\.]++)\\.html(*:7271)'
                        .'|ort\\-link/([^/]++)(*:7298)'
                    .')'
                    .'|ettings/([^/]++)/edit(?'
                        .'|(*:7332)'
                        .'|\\-with\\-help(*:7353)'
                    .')'
                .')'
                .'|/locale/([^/]++)(*:7380)'
                .'|/qr/([^/]++)(*:7401)'
                .'|/re(?'
                    .'|leases/page(?:/([^/]++))?(*:7441)'
                    .'|set/token/([^/]++)(*:7468)'
                .')'
                .'|/doc(?:/([^/]++))?(*:7496)'
                .'|/user/bookmark/(?'
                    .'|missing/([^/]++)(*:7539)'
                    .'|remove/([^/]++)(*:7563)'
                .')'
                .'|/account/impersonate/group(?:/([^/]++))?(*:7613)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'hwi_oauth_service_redirect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController::redirectToServiceAction'], ['service'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'hwi_oauth_connect_service', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction'], ['service'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        78 => [[['_route' => 'hwi_oauth_connect_registration', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction'], ['key'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        123 => [[['_route' => 'app_admin_space_delete', '_controller' => 'AppBundle\\Controller\\Admin\\SpaceController::delete'], ['_slug'], null, null, false, false, null]],
        135 => [[['_route' => 'app_admin_space_edit', '_controller' => 'AppBundle\\Controller\\Admin\\SpaceController::manage'], ['_slug'], null, null, false, false, 1]],
        175 => [[['_route' => 'app_admin_user_group_edit', '_controller' => 'AppBundle\\Controller\\Admin\\User\\GroupController::manage'], ['slug'], null, null, false, false, null]],
        189 => [[['_route' => 'app_admin_user_group_delete', '_controller' => 'AppBundle\\Controller\\Admin\\User\\GroupController::delete'], ['slug'], null, null, false, false, null]],
        217 => [[['_route' => 'app_admin_user_manage_delete', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ManageController::delete'], ['_username'], null, null, false, false, null]],
        229 => [[['_route' => 'app_admin_user_manage_edit', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ManageController::edit'], ['_username'], null, null, false, false, null]],
        255 => [[['_route' => 'app_admin_user_invitation_mail', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ManageController::invitationMail'], ['username'], null, null, false, false, null]],
        278 => [[['_route' => 'app_admin_user_password_reset', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ManageController::passwordReset'], ['username'], null, null, false, false, null]],
        299 => [[['_route' => 'app_admin_user_unlink_oauth', '_controller' => 'AppBundle\\Controller\\Admin\\User\\ManageController::unlinkOauth'], ['username'], null, null, false, false, null]],
        324 => [[['_route' => 'app_admin_default_config', '_controller' => 'AppBundle\\Controller\\Admin\\DefaultController::config'], ['key'], null, null, false, false, null]],
        363 => [[['_route' => 'app_asset_file_inline', '_controller' => 'AppBundle\\Controller\\Asset\\FileController::inline'], ['randomId', 'fileNameAscii'], null, null, false, true, null]],
        404 => [[['_route' => 'app_asset_theme_default', '_controller' => 'AppBundle\\Controller\\Asset\\ThemeController::default'], ['theme', 'fileName'], null, null, false, false, null]],
        420 => [[['_route' => 'app_theme_minified', '_controller' => 'AppBundle\\Controller\\Asset\\ThemeController::default'], ['theme', 'fileName'], null, null, false, false, null]],
        467 => [[['_route' => 'app_asset_script_runtime', '_controller' => 'AppBundle\\Controller\\Asset\\ScriptController::runtime'], ['version'], null, null, false, false, null]],
        523 => [[['_route' => 'app_category_export_print', '_controller' => 'AppBundle\\Controller\\Category\\ExportController::print'], ['_space', 'slug'], null, null, false, false, null]],
        558 => [[['_route' => 'app_category_translate_tools', '_controller' => 'AppBundle\\Controller\\Category\\TranslateController::tools'], ['_space', 'category'], null, null, false, false, 1]],
        570 => [[['_route' => 'app_category_translate_copy', '_controller' => 'AppBundle\\Controller\\Category\\TranslateController::copy'], ['_space', 'category'], null, null, false, false, null]],
        585 => [[['_route' => 'app_dashboard_index', '_controller' => 'AppBundle\\Controller\\DashboardController::index'], ['_space'], null, null, true, false, null]],
        633 => [[['_route' => 'app_dashboard_create', '_controller' => 'AppBundle\\Controller\\DashboardController::create'], ['type', '_space'], null, null, false, true, null]],
        662 => [[['_route' => 'app_dashboard_settings', '_controller' => 'AppBundle\\Controller\\DashboardController::settings'], ['_space'], null, null, false, false, null]],
        684 => [[['_route' => 'app_dashboard_deprecated', '_controller' => 'AppBundle\\Controller\\DashboardController::deprecated'], ['_space'], null, null, false, false, null]],
        732 => [[['_route' => 'app_download_file_transfer', 'file' => '', '_controller' => 'AppBundle\\Controller\\DownloadController::fileTransfer'], ['slug'], null, null, false, true, null]],
        754 => [[['_route' => 'app_download_file_transfer_files', 'file' => '', '_controller' => 'AppBundle\\Controller\\DownloadController::fileTransfer'], ['slug'], null, null, false, false, null]],
        779 => [[['_route' => 'app_download_file_transfer_file', '_controller' => 'AppBundle\\Controller\\DownloadController::fileTransfer'], ['slug', 'file', 'name'], null, null, false, true, null]],
        816 => [[['_route' => 'app_feature_download_center_default_detail', '_controller' => 'AppBundle\\Controller\\Feature\\DownloadCenter\\DefaultController::detail'], ['randomId'], null, null, false, false, 1]],
        828 => [[['_route' => 'app_feature_download_center_default_edit', '_controller' => 'AppBundle\\Controller\\Feature\\DownloadCenter\\DefaultController::edit'], ['randomId'], null, null, false, false, 1]],
        876 => [[['_route' => 'app_element_ajax_get', '_controller' => 'AppBundle\\Controller\\Element\\AjaxController::get'], ['randomId'], null, null, false, false, 1]],
        900 => [[['_route' => 'app_element_ajax_get_dashboard', 'suffix' => 'dashboard', '_controller' => 'AppBundle\\Controller\\Element\\AjaxController::get'], ['randomId'], null, null, false, false, 1]],
        916 => [[['_route' => 'app_element_ajax_preview', '_controller' => 'AppBundle\\Controller\\Element\\AjaxController::preview'], ['randomId'], ['POST' => 0, 'GET' => 1], null, false, false, 1]],
        939 => [[['_route' => 'app_element_alias_relations', '_controller' => 'AppBundle\\Controller\\Element\\AliasController::relations'], ['_randomId'], null, null, false, false, 1]],
        980 => [[['_route' => 'app_element_clipboard_copy', '_controller' => 'AppBundle\\Controller\\Element\\ClipboardController::copy'], ['randomId'], null, null, false, false, null]],
        993 => [[['_route' => 'app_element_clipboard_cut', '_controller' => 'AppBundle\\Controller\\Element\\ClipboardController::cut'], ['randomId'], null, null, false, false, null]],
        1019 => [[['_route' => 'app_element_clipboard_cut_paste', '_controller' => 'AppBundle\\Controller\\Element\\ClipboardController::cutInsert'], ['randomId', 'slug'], null, null, false, true, null]],
        1046 => [[['_route' => 'app_element_clipboard_paste_link', '_controller' => 'AppBundle\\Controller\\Element\\ClipboardController::pasteLink'], ['randomId', 'slug'], null, null, false, true, null]],
        1072 => [[['_route' => 'app_element_clipboard_paste', '_controller' => 'AppBundle\\Controller\\Element\\ClipboardController::paste'], ['randomId', 'slug'], null, null, false, true, null]],
        1110 => [[['_route' => 'app_element_create_choice', '_controller' => 'AppBundle\\Controller\\Element\\CreateController::choice'], ['category'], null, null, false, true, null]],
        1158 => [[['_route' => 'app_element_create_type_full_size', '_controller' => 'AppBundle\\Controller\\Element\\CreateController::type'], ['type', 'category'], null, null, false, false, null]],
        1172 => [[['_route' => 'app_element_create_type_quick', '_controller' => 'AppBundle\\Controller\\Element\\CreateController::type'], ['type', 'category'], null, null, false, false, null]],
        1211 => [[['_route' => 'app_element_edit_content', '_controller' => 'AppBundle\\Controller\\Element\\EditController::content'], ['_randomId'], null, null, false, false, null]],
        1231 => [[['_route' => 'app_element_edit_description', '_controller' => 'AppBundle\\Controller\\Element\\EditController::description'], ['_randomId'], null, null, false, false, null]],
        1262 => [[['_route' => 'app_element_edit_visibility_language', '_controller' => 'AppBundle\\Controller\\Element\\EditController::visibility'], ['_randomId'], null, null, false, false, 1]],
        1277 => [[['_route' => 'app_element_edit_visibility_hidden', '_controller' => 'AppBundle\\Controller\\Element\\EditController::visibility'], ['_randomId'], null, null, false, false, 1]],
        1292 => [[['_route' => 'app_element_edit_visibility_public', '_controller' => 'AppBundle\\Controller\\Element\\EditController::visibility'], ['_randomId'], null, null, false, false, 1]],
        1319 => [[['_route' => 'app_element_edit_link_optional', 'required' => false, '_controller' => 'AppBundle\\Controller\\Element\\EditController::link'], ['_randomId'], null, null, false, false, 1]],
        1336 => [[['_route' => 'app_element_edit_link_required', 'required' => true, '_controller' => 'AppBundle\\Controller\\Element\\EditController::link'], ['_randomId'], null, null, false, false, 1]],
        1350 => [[['_route' => 'app_element_edit_quick', '_controller' => 'AppBundle\\Controller\\Element\\EditController::quick'], ['_randomId'], null, null, false, false, 1]],
        1374 => [[['_route' => 'app_element_edit_upload', '_controller' => 'AppBundle\\Controller\\Element\\EditController::upload'], ['_randomId', 'type'], null, null, false, true, null]],
        1398 => [[['_route' => 'app_element_edit_toggle', '_controller' => 'AppBundle\\Controller\\Element\\EditController::toggle'], ['_randomId', 'field'], null, null, false, true, 1]],
        1425 => [[['_route' => 'app_element_file_attach', '_controller' => 'AppBundle\\Controller\\Element\\FileController::attach'], ['element'], null, null, false, false, 1]],
        1455 => [[['_route' => 'app_element_file_detach', '_controller' => 'AppBundle\\Controller\\Element\\FileController::detach'], ['element', 'fileId'], null, null, false, false, 1]],
        1472 => [[['_route' => 'app_element_file_detach_inline', '_controller' => 'AppBundle\\Controller\\Element\\FileController::detach'], ['element', 'fileId'], null, null, false, false, 1]],
        1486 => [[['_route' => 'app_element_file_move', '_controller' => 'AppBundle\\Controller\\Element\\FileController::move'], ['element', 'fileId'], null, null, false, false, null]],
        1501 => [[['_route' => 'app_element_file_remove', '_controller' => 'AppBundle\\Controller\\Element\\FileController::remove'], ['element', 'fileId'], null, null, false, false, 1]],
        1544 => [[['_route' => 'app_element_smart_block_file_transfer_create', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\FileTransferController::create'], ['element', 'identifier'], null, null, false, false, 1]],
        1559 => [[['_route' => 'app_element_smart_block_file_transfer_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\FileTransferController::delete'], ['element', 'slug'], null, null, false, false, null]],
        1572 => [[['_route' => 'app_element_smart_block_file_transfer_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\FileTransferController::edit'], ['element', 'slug'], null, null, false, false, 1]],
        1588 => [[['_route' => 'app_element_smart_block_file_transfer_upload', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\FileTransferController::upload'], ['element'], null, null, false, false, null]],
        1607 => [[['_route' => 'app_element_share_form', '_controller' => 'AppBundle\\Controller\\Element\\ShareController::form'], ['element'], null, null, false, false, 1]],
        1663 => [[['_route' => 'app_element_smart_block_icon_list_backend_attribute_folder', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\BackendController::attributeFolder'], ['element'], null, null, false, false, 1]],
        1719 => [[['_route' => 'app_element_smart_block_mediacockpit_backend_attribute_folder', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\BackendController::attributeFolder'], ['element'], null, null, false, false, 1]],
        1733 => [[['_route' => 'app_element_smart_block_mediacockpit_backend_attribute_filter', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\BackendController::attributeFilter'], ['element'], null, null, false, false, 1]],
        1748 => [[['_route' => 'app_element_smart_block_mediacockpit_backend_attribute_views', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\BackendController::attributeViews'], ['element'], null, null, false, false, 1]],
        1777 => [[['_route' => 'app_element_smart_block_mediacockpit_attributes', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::attributes'], ['element', 'asset'], null, null, false, false, null]],
        1812 => [[['_route' => 'app_element_smart_block_mediacockpit_derivate_embedded', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::derivate'], ['element', 'derivateApiId'], null, null, false, false, null]],
        1842 => [[['_route' => 'app_element_smart_block_mediacockpit_detail', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::detail'], ['element', 'asset'], null, null, false, false, null]],
        1870 => [[['_route' => 'app_element_smart_block_mediacockpit_download', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::download'], ['element', 'asset', 'file'], null, null, false, true, null]],
        1900 => [[['_route' => 'app_element_smart_block_mediacockpit_download_preview', 'isPreview' => true, 'isLarge' => true, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::download'], ['element', 'asset', 'file'], null, null, false, true, null]],
        1940 => [[['_route' => 'app_element_smart_block_mediacockpit_download_group_member', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::downloadGroupMember'], ['element', 'asset', 'apiId', 'file'], null, null, false, true, null]],
        1969 => [[['_route' => 'app_element_smart_block_mediacockpit_embedded', 'isEmbedded' => true, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::download'], ['element', 'asset', 'file'], null, null, false, true, null]],
        1997 => [[['_route' => 'app_element_smart_block_mediacockpit_preview', 'isPreview' => true, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::download'], ['element', 'asset', 'file'], null, null, false, true, null]],
        2022 => [[['_route' => 'app_element_smart_block_mediacockpit_preview_large', 'isPreview' => true, 'isLarge' => true, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::download'], ['element', 'asset', 'file'], null, null, false, true, null]],
        2034 => [[['_route' => 'app_element_smart_block_mediacockpit_list', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\MediaCockpit\\FrontendController::list'], ['element'], null, null, false, false, 1]],
        2064 => [[['_route' => 'app_element_smart_block_scorm_index', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ScormController::index'], ['randomId'], null, null, false, false, null]],
        2077 => [[['_route' => 'app_element_smart_block_scorm_file', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ScormController::file'], ['randomId', 'fileName'], null, null, false, true, null]],
        2109 => [[['_route' => 'app_element_smart_block_slider_slide_create', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\SliderController::slide'], ['element'], null, null, false, false, 1]],
        2134 => [[['_route' => 'app_element_smart_block_slider_slide_edit', 'slide' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\SliderController::slide'], ['element', 'slide'], null, null, false, false, 1]],
        2149 => [[['_route' => 'app_element_smart_block_slider_slide_delete', 'slide' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\SliderController::slide'], ['element', 'slide'], null, null, false, false, 1]],
        2162 => [[['_route' => 'app_element_smart_block_slider_slide_move', 'slide' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\SliderController::slide'], ['element', 'slide'], null, null, false, false, 1]],
        2192 => [[['_route' => 'app_element_smart_block_spaces_space_add', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\SpacesController::space'], ['element'], null, null, false, false, null]],
        2214 => [[['_route' => 'app_element_smart_block_spaces_space_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\SpacesController::space'], ['element', 'id'], null, null, false, true, null]],
        2238 => [[['_route' => 'app_element_smart_block_spaces_space_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\SpacesController::space'], ['element', 'id'], null, null, false, true, null]],
        2260 => [[['_route' => 'app_element_smart_block_spaces_move', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\SpacesController::move'], ['element', 'id'], ['POST' => 0], null, false, true, null]],
        2280 => [[['_route' => 'app_element_smart_block_stage_video', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\StageController::video'], ['randomId'], null, null, false, false, null]],
        2309 => [[['_route' => 'app_element_smart_block_accordion_item_add', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\AccordionController::item'], ['element'], null, null, false, false, null]],
        2331 => [[['_route' => 'app_element_smart_block_accordion_item_edit', 'child' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\AccordionController::item'], ['element', 'child'], null, null, false, false, null]],
        2344 => [[['_route' => 'app_element_smart_block_accordion_sort', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\AccordionController::sort'], ['element'], ['POST' => 0], null, false, false, null]],
        2370 => [[['_route' => 'app_element_smart_block_accordion_remember', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\AccordionController::remember'], ['element', 'item'], null, null, false, true, null]],
        2408 => [[['_route' => 'app_element_smart_block_annotation__markdown_to_html', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\AnnotationController::markdownToHtml'], ['element'], null, null, false, false, null]],
        2443 => [[['_route' => 'app_element_smart_block_attachment_confirm', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\AttachmentController::confirm'], ['element', 'file'], null, null, false, true, 1]],
        2484 => [[['_route' => 'app_element_smart_block_chapter_teaser_item_add', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ChapterTeaserController::item'], ['element'], null, null, false, false, null]],
        2506 => [[['_route' => 'app_element_smart_block_chapter_teaser_item_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ChapterTeaserController::item'], ['element', 'id'], null, null, false, true, null]],
        2530 => [[['_route' => 'app_element_smart_block_chapter_teaser_item_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ChapterTeaserController::item'], ['element', 'id'], null, null, false, true, null]],
        2552 => [[['_route' => 'app_element_smart_block_chapter_teaser_move', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ChapterTeaserController::move'], ['element', 'id'], ['POST' => 0], null, false, true, null]],
        2592 => [[['_route' => 'app_element_smart_block_colors_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ColorsController::delete'], ['element', 'color'], null, null, false, true, null]],
        2604 => [[['_route' => 'app_element_smart_block_colors_add', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ColorsController::manage'], ['element'], null, null, false, false, null]],
        2631 => [[['_route' => 'app_element_smart_block_colors_edit', 'color' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ColorsController::manage'], ['element', 'color'], null, null, false, true, null]],
        2644 => [[['_route' => 'app_element_smart_block_colors_sort', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ColorsController::sort'], ['element'], null, null, false, false, null]],
        2674 => [[['_route' => 'app_element_smart_block_columns_layout', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ColumnsController::layout'], ['element', 'setting'], null, null, false, true, null]],
        2697 => [[['_route' => 'app_element_smart_block_contact_form', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ContactController::form'], ['element'], null, null, false, false, null]],
        2719 => [[['_route' => 'app_element_smart_block_contact_person_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ContactPersonController::edit'], ['element'], null, null, false, false, null]],
        2739 => [[['_route' => 'app_element_smart_block_cta_button', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\CtaController::button'], ['element'], null, null, false, false, 1]],
        2776 => [[['_route' => 'app_element_smart_block_do-dont_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\DoDontController::delete'], ['element', 'id'], ['GET' => 0], null, false, true, null]],
        2798 => [[['_route' => 'app_element_smart_block_do-dont_edit', 'type' => 0, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\DoDontController::item'], ['element', 'id'], null, null, false, true, null]],
        2821 => [[['_route' => 'app_element_smart_block_do-dont_create_dont', 'type' => 2, 'item' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\DoDontController::item'], ['element'], null, null, false, false, null]],
        2830 => [[['_route' => 'app_element_smart_block_do-dont_create_do', 'type' => 1, 'item' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\DoDontController::item'], ['element'], null, null, false, false, null]],
        2853 => [[['_route' => 'app_element_smart_block_do-dont_move', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\DoDontController::move'], ['element', 'id'], ['POST' => 0], null, false, true, null]],
        2885 => [[['_route' => 'app_element_smart_block_headline_content', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\HeadlineController::content'], ['randomId'], null, null, false, false, 1]],
        2908 => [[['_route' => 'app_element_smart_block_headline_align_left', 'align' => 'left', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\HeadlineController::alignment'], ['randomId'], null, null, false, false, null]],
        2923 => [[['_route' => 'app_element_smart_block_headline_align_center', 'align' => 'center', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\HeadlineController::alignment'], ['randomId'], null, null, false, false, null]],
        2937 => [[['_route' => 'app_element_smart_block_headline_align_right', 'align' => 'right', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\HeadlineController::alignment'], ['randomId'], null, null, false, false, null]],
        2959 => [[['_route' => 'app_element_smart_block_html_preview', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\HtmlController::preview'], ['element'], ['POST' => 0], null, false, false, null]],
        3006 => [[['_route' => 'app_element_icon_list_categories', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::index'], ['randomId'], null, null, false, false, null]],
        3021 => [[['_route' => 'app_element_icon_list_category_create', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::edit'], ['randomId'], null, null, false, false, null]],
        3046 => [[['_route' => 'app_element_icon_list_category_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::edit'], ['randomId', 'category'], null, null, false, false, null]],
        3061 => [[['_route' => 'app_element_icon_list_category_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::delete'], ['randomId', 'category'], null, null, false, false, null]],
        3074 => [[['_route' => 'app_element_icon_list_category_show', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::show'], ['randomId', 'category'], null, null, false, false, null]],
        3088 => [[['_route' => 'app_element_icon_list_category_show_empty', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::show'], ['randomId'], null, null, false, false, null]],
        3114 => [[['_route' => 'app_element_icon_list_category_download', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::download'], ['randomId', 'category'], null, null, false, false, null]],
        3131 => [[['_route' => 'app_element_icon_list_category_download_empty', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::download'], ['randomId'], null, null, false, false, null]],
        3144 => [[['_route' => 'app_element_icon_list_category_sort', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CategoryController::sort'], ['randomId'], null, null, false, false, null]],
        3173 => [[['_route' => 'app_element_icon_list_collection_create', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CollectionController::edit'], ['randomId'], null, null, false, false, null]],
        3198 => [[['_route' => 'app_element_icon_list_collection_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CollectionController::edit'], ['randomId', 'collection'], null, null, false, false, null]],
        3216 => [[['_route' => 'app_element_icon_list_collection_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CollectionController::delete'], ['randomId', 'collection'], null, null, false, false, null]],
        3232 => [[['_route' => 'app_element_icon_list_collection_download', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CollectionController::download'], ['randomId', 'collection'], null, null, false, false, null]],
        3246 => [[['_route' => 'app_element_icon_list_collection_show', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CollectionController::show'], ['randomId', 'collection'], null, null, false, false, null]],
        3260 => [[['_route' => 'app_element_icon_list_collection_sort', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\CollectionController::sort'], ['randomId'], null, null, false, false, null]],
        3291 => [[['_route' => 'app_element_icon_list_download', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\IconController::download'], ['randomId', 'file'], null, null, false, false, 1]],
        3317 => [[['_route' => 'app_element_icon_list_download_category', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\IconController::download'], ['randomId', 'file', 'category'], null, null, false, false, 1]],
        3330 => [[['_route' => 'app_element_icon_list_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\IconController::edit'], ['randomId', 'file'], null, null, false, false, 1]],
        3360 => [[['_route' => 'app_element_icon_list_additional_files_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\IconController::edit'], ['randomId', 'file'], null, null, false, false, 1]],
        3377 => [[['_route' => 'app_element_smart_block_icon_list_no_category', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\IconController::list'], ['randomId'], null, null, false, false, null]],
        3395 => [[['_route' => 'app_element_smart_block_icon_list_with_category', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\IconController::list'], ['randomId', 'iconCategory'], null, null, false, true, null]],
        3430 => [[['_route' => 'app_element_icon_list_attach_collection', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\ListController::attach'], ['randomId', 'collection'], null, null, false, true, null]],
        3450 => [[['_route' => 'app_element_icon_list_attach_category', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\ListController::attach'], ['randomId', 'category'], null, null, false, true, null]],
        3468 => [[['_route' => 'app_element_icon_list_attach_category_collection', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\ListController::attach'], ['randomId', 'category', 'collection'], null, null, false, true, null]],
        3479 => [[['_route' => 'app_element_icon_list_attach', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\ListController::attach'], ['randomId'], null, null, false, false, null]],
        3513 => [[['_route' => 'app_element_icon_list_download_status', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\ListController::iconDownloadStatus'], ['randomId', 'iconDownload'], null, null, false, false, null]],
        3534 => [[['_route' => 'app_element_icon_list_tags', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\TagController::index'], ['randomId'], null, null, false, false, null]],
        3549 => [[['_route' => 'app_element_icon_list_tag_create', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\TagController::edit'], ['randomId'], null, null, false, false, null]],
        3574 => [[['_route' => 'app_element_icon_list_tag_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\TagController::edit'], ['randomId', 'tag'], null, null, false, false, null]],
        3589 => [[['_route' => 'app_element_icon_list_tag_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\TagController::delete'], ['randomId', 'tag'], null, null, false, false, null]],
        3603 => [[['_route' => 'app_element_icon_list_tag_sort', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\IconList\\TagController::sort'], ['randomId'], null, null, false, false, null]],
        3632 => [[['_route' => 'app_element_smart_block_image_content', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ImageController::content'], ['randomId'], null, null, false, false, null]],
        3645 => [[['_route' => 'app_element_smart_block_image_convert', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ImageController::convert'], ['randomId'], null, null, false, false, null]],
        3661 => [[['_route' => 'app_element_smart_block_image_upload', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\ImageController::upload'], ['randomId'], null, null, false, false, null]],
        3704 => [[['_route' => 'app_element_smart_block_pattern_download_style', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::downloadStyles'], ['randomId'], null, null, false, false, null]],
        3714 => [[['_route' => 'app_element_smart_block_pattern_download_styles', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::downloadStyles'], ['randomId'], null, null, false, false, null]],
        3733 => [[['_route' => 'app_element_smart_block_pattern_download_variables', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::downloadVariables'], ['randomId'], null, null, false, false, null]],
        3759 => [[['_route' => 'app_element_smart_block_pattern_frame', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::frame'], ['randomId', 'version'], null, null, false, false, null]],
        3792 => [[['_route' => 'app_element_smart_block_pattern_frame_history', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::frame'], ['randomId', 'version'], null, null, false, false, null]],
        3819 => [[['_route' => 'app_element_smart_block_pattern_preview_create', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::previewCreate'], ['randomId'], null, null, false, false, null]],
        3845 => [[['_route' => 'app_element_smart_block_pattern_preview_show', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::previewShow'], ['randomId', 'random'], null, null, false, false, null]],
        3872 => [[['_route' => 'app_element_smart_block_pattern_script', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::script'], ['randomId', 'version'], null, null, false, false, null]],
        3884 => [[['_route' => 'app_element_smart_block_pattern_style', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\PatternController::style'], ['randomId', 'version'], null, null, false, false, null]],
        3920 => [[['_route' => 'app_element_smart_block_qr_generator_codes', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\QrGeneratorController::codes'], ['element'], null, null, false, false, 1]],
        3934 => [[['_route' => 'app_element_smart_block_qr_generator_add', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\QrGeneratorController::manage'], ['element'], null, null, false, false, null]],
        3962 => [[['_route' => 'app_element_smart_block_qr_generator_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\QrGeneratorController::delete'], ['element', 'slug'], null, null, false, true, 1]],
        3987 => [[['_route' => 'app_element_smart_block_qr_generator_download', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\QrGeneratorController::download'], ['element', 'slug'], null, null, false, true, 1]],
        4010 => [[['_route' => 'app_element_smart_block_qr_generator_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\QrGeneratorController::manage'], ['element', 'slug'], null, null, false, true, null]],
        4061 => [[['_route' => 'app_element_smart_block_table_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\TableController::edit'], ['element', 'row', 'col'], null, null, false, true, null]],
        4112 => [[['_route' => 'app_element_smart_block_table_grid_add_row', 'type' => 'row', 'action' => 'add', 'direction' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\TableController::grid'], ['element', 'number', 'direction'], null, null, false, true, null]],
        4147 => [[['_route' => 'app_element_smart_block_table_grid_add_col', 'type' => 'col', 'action' => 'add', 'direction' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\TableController::grid'], ['element', 'number', 'direction'], null, null, false, true, null]],
        4180 => [[['_route' => 'app_element_smart_block_table_grid_remove_row', 'type' => 'row', 'action' => 'remove', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\TableController::grid'], ['element', 'number'], null, null, false, true, null]],
        4201 => [[['_route' => 'app_element_smart_block_table_grid_remove_col', 'type' => 'col', 'action' => 'remove', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\TableController::grid'], ['element', 'number'], null, null, false, true, null]],
        4218 => [[['_route' => 'app_element_smart_block_table_inline', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\TableController::inline'], ['element'], null, null, false, false, null]],
        4233 => [[['_route' => 'app_element_smart_block_table_reload', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\TableController::reload'], ['element'], null, null, false, false, null]],
        4255 => [[['_route' => 'app_element_smart_block_video_upload', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\VideoController::upload'], ['randomId'], null, null, false, false, null]],
        4281 => [[['_route' => 'app_element_sort_category', '_controller' => 'AppBundle\\Controller\\Element\\SortController::category'], ['_slug'], null, null, false, false, null]],
        4319 => [[['_route' => 'app_element_toolbar_inline', '_controller' => 'AppBundle\\Controller\\Element\\ToolbarController::inline'], ['element'], null, null, false, false, null]],
        4336 => [[['_route' => 'app_element_translate', '_controller' => 'AppBundle\\Controller\\ElementController::translate'], ['element'], null, null, false, false, 1]],
        4362 => [[['_route' => 'app_file_thumbnail_gallery', '_controller' => 'AppBundle\\Controller\\File\\ThumbnailController::gallery'], ['element', 'file'], null, null, false, true, null]],
        4380 => [[['_route' => 'app_element_debug', '_controller' => 'AppBundle\\Controller\\ElementController::debug'], ['element'], null, null, false, false, null]],
        4393 => [[['_route' => 'app_element_delete', '_controller' => 'AppBundle\\Controller\\ElementController::delete'], ['element'], null, null, false, false, null]],
        4422 => [[['_route' => 'app_element_edit', '_controller' => 'AppBundle\\Controller\\ElementController::edit'], ['_element', 'category'], null, null, false, false, null]],
        4442 => [[['_route' => 'app_element_edit_full_size', 'fullSize' => true, '_controller' => 'AppBundle\\Controller\\ElementController::edit'], ['_element', 'category'], null, null, false, false, null]],
        4459 => [[['_route' => 'app_element_restore', '_controller' => 'AppBundle\\Controller\\ElementController::restore'], ['element'], null, null, false, false, null]],
        4477 => [[['_route' => 'app_element_attach', '_controller' => 'AppBundle\\Controller\\ElementController::attach'], ['element'], null, null, false, false, null]],
        4502 => [[['_route' => 'app_element_attach_chunk', '_controller' => 'AppBundle\\Controller\\ElementController::attachChunk'], ['element', 'identifier'], null, null, false, true, null]],
        4522 => [[['_route' => 'app_element_comment', '_controller' => 'AppBundle\\Controller\\ElementController::comment'], ['element'], null, null, false, false, null]],
        4548 => [[['_route' => 'app_element_comment_edit', '_controller' => 'AppBundle\\Controller\\ElementController::commentManage'], ['element', 'comment'], null, null, false, false, null]],
        4563 => [[['_route' => 'app_element_comment_delete', '_controller' => 'AppBundle\\Controller\\ElementController::commentManage'], ['element', 'comment'], null, null, false, false, null]],
        4601 => [[['_route' => 'app_element_upload_collection', '_controller' => 'AppBundle\\Controller\\ElementController::uploadCollection'], ['element', 'position'], null, null, false, true, null]],
        4653 => [[['_route' => 'app_element_history_list', '_controller' => 'AppBundle\\Controller\\Element\\HistoryController::list'], ['category', '_element'], null, null, false, true, null]],
        4682 => [[['_route' => 'app_element_history_revert', '_controller' => 'AppBundle\\Controller\\Element\\HistoryController::revertAction'], ['category', '_element', 'version'], null, null, false, true, null]],
        4711 => [[['_route' => 'app_category_approval_approve', '_controller' => 'AppBundle\\Controller\\Category\\ApprovalController::approve'], ['_slug'], null, null, false, false, null]],
        4729 => [[['_route' => 'app_category_approval_reject', '_controller' => 'AppBundle\\Controller\\Category\\ApprovalController::reject'], ['_slug'], null, null, false, false, null]],
        4743 => [[['_route' => 'app_category_approval_request', '_controller' => 'AppBundle\\Controller\\Category\\ApprovalController::request'], ['_slug'], null, null, false, false, null]],
        4795 => [[['_route' => 'app_element_smart_block_framing_download', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\FramingController::download'], ['_tool'], null, null, false, false, null]],
        4818 => [[['_route' => 'app_element_smart_block_framing_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\FramingController::delete'], ['_tool', '_media'], null, null, false, true, null]],
        4841 => [[['_route' => 'app_element_smart_block_framing_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\FramingController::edit'], ['_tool', '_media'], null, null, false, true, null]],
        4862 => [[['_route' => 'app_element_smart_block_framing_add', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\FramingController::manage'], ['_tool', '_type'], null, null, false, true, null]],
        4890 => [[['_route' => 'app_element_smart_block_inspiration_add', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::manage'], ['tool'], null, null, false, false, null]],
        4915 => [[['_route' => 'app_element_smart_block_inspiration_edit', 'inspiration' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::manage'], ['tool', 'inspiration'], null, null, false, false, null]],
        4930 => [[['_route' => 'app_element_smart_block_inspiration_delete', 'inspiration' => null, '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::manage'], ['tool', 'inspiration'], null, null, false, false, null]],
        4951 => [[['_route' => 'app_element_smart_block_inspiration_count', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::count'], ['tool'], null, null, false, false, null]],
        4964 => [[['_route' => 'app_element_smart_block_inspiration_more', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::page'], ['tool'], null, null, false, false, null]],
        4986 => [[['_route' => 'app_element_smart_block_inspiration_show', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::show'], ['tool', 'inspiration'], null, null, false, false, null]],
        5019 => [[['_route' => 'app_element_smart_block_inspiration_comment_edit', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::comment'], ['tool', 'comment'], null, null, false, false, null]],
        5034 => [[['_route' => 'app_element_smart_block_inspiration_comment_delete', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::comment'], ['tool', 'comment'], null, null, false, false, null]],
        5068 => [[['_route' => 'app_element_smart_block_inspiration_like', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::like'], ['tool', 'inspiration'], null, null, false, false, null]],
        5082 => [[['_route' => 'app_element_smart_block_inspiration_share', '_controller' => 'AppBundle\\Controller\\Element\\SmartBlock\\InspirationController::share'], ['tool', 'inspiration'], null, null, false, false, null]],
        5133 => [[['_route' => 'app_ajax_element_by_comment', '_controller' => 'AppBundle\\Controller\\AjaxController::elementByCommentAction'], ['comment'], null, null, false, true, null]],
        5179 => [[['_route' => 'app_ajax_elements', '_controller' => 'AppBundle\\Controller\\AjaxController::elements'], ['category', 'type'], null, null, false, false, null]],
        5204 => [[['_route' => 'app_ajax_categories_for_space', '_controller' => 'AppBundle\\Controller\\AjaxController::categories'], ['_space'], null, null, false, false, 1]],
        5256 => [[['_route' => 'app_file_thumbnail_w500', 'width' => 500, '_controller' => 'AppBundle\\Controller\\File\\ThumbnailController::file'], ['randomId'], null, null, false, false, null]],
        5305 => [[['_route' => 'app_settings_font_asset_css', 'time' => 0, '_controller' => 'AppBundle\\Controller\\Settings\\Font\\AssetController::css'], ['slug', 'time'], null, null, false, false, null]],
        5326 => [[['_route' => 'app_settings_font_asset_preview', '_controller' => 'AppBundle\\Controller\\Settings\\Font\\AssetController::preview'], ['slug'], null, null, false, false, null]],
        5414 => [[['_route' => 'app_feature_connection_mediacockpit_asset_preview', '_controller' => 'AppBundle\\Controller\\Feature\\Connection\\MediaCockpitController::assetPreview'], ['id', 'asset', 'file'], null, null, false, true, null]],
        5433 => [[['_route' => 'app_feature_connection_mediacockpit_collection', '_controller' => 'AppBundle\\Controller\\Feature\\Connection\\MediaCockpitController::collection'], ['id'], ['POST' => 0], null, false, false, 1]],
        5468 => [[['_route' => 'app_feature_metrics_category', '_controller' => 'AppBundle\\Controller\\Feature\\MetricsController::category'], ['token'], ['POST' => 0], null, false, false, null]],
        5503 => [[['_route' => 'app_file_manage_rename', '_controller' => 'AppBundle\\Controller\\File\\ManageController::rename'], ['randomId'], null, null, false, false, 1]],
        5522 => [[['_route' => 'app_file_meta', '_controller' => 'AppBundle\\Controller\\FileController::meta'], ['randomId'], null, null, false, false, 1]],
        5552 => [[['_route' => 'app_file_by_name', '_controller' => 'AppBundle\\Controller\\FileController::byName'], ['nameOnDisk'], null, null, false, true, null]],
        5570 => [[['_route' => 'app_file_attachment', 'download' => true, '_controller' => 'AppBundle\\Controller\\FileController::get'], ['randomId', 'fileNameAscii'], null, null, false, true, null]],
        5597 => [[['_route' => 'app_file_inline', '_controller' => 'AppBundle\\Controller\\FileController::get'], ['randomId', 'fileNameAscii'], null, null, false, true, null]],
        5633 => [[['_route' => 'app_file_upload_chunk', '_controller' => 'AppBundle\\Controller\\File\\UploadController::chunk'], ['identifier'], ['POST' => 0], null, false, false, null]],
        5651 => [[['_route' => 'app_file_upload_finish', '_controller' => 'AppBundle\\Controller\\File\\UploadController::finish'], ['identifier'], ['GET' => 0], null, false, false, 1]],
        5682 => [[['_route' => 'app_file_upload_finish_and_attach', '_controller' => 'AppBundle\\Controller\\File\\UploadController::finishAndAttach'], ['identifier', 'randomId'], ['GET' => 0], null, false, true, 1]],
        5698 => [[['_route' => 'app_file_upload_remove', '_controller' => 'AppBundle\\Controller\\File\\UploadController::remove'], ['identifier'], ['GET' => 0], null, false, false, null]],
        5739 => [[['_route' => 'app_search_full_more', '_controller' => 'AppBundle\\Controller\\SearchController::fullMore'], ['type'], null, null, false, true, null]],
        5808 => [[['_route' => 'app_settings_analytics_graph_login_user', '_controller' => 'AppBundle\\Controller\\Settings\\Analytics\\GraphLoginController::user'], ['from', 'to'], null, null, false, true, 1]],
        5843 => [[['_route' => 'app_settings_analytics_graph_login_daily', '_controller' => 'AppBundle\\Controller\\Settings\\Analytics\\GraphLoginController::daily'], ['from', 'to'], null, null, false, true, 1]],
        5891 => [[['_route' => 'app_settings_category_approval_notes', '_controller' => 'AppBundle\\Controller\\Settings\\Category\\ApprovalController::notes'], ['category'], null, null, false, false, 1]],
        5918 => [[['_route' => 'app_settings_category_delete', '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::delete'], ['_slug'], null, null, false, false, null]],
        5934 => [[['_route' => 'app_settings_category_restore', '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::restore'], ['_slug'], null, null, false, false, null]],
        5947 => [[['_route' => 'app_settings_category_edit', '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::edit'], ['_category'], null, null, false, false, null]],
        5984 => [[['_route' => 'app_settings_category_add', 'space' => null, '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::edit'], ['space'], null, null, false, true, null]],
        6005 => [[['_route' => 'app_settings_category_add_child', '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::edit'], ['_category'], null, null, false, true, null]],
        6032 => [[['_route' => 'app_settings_category_index_space', '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::index'], ['slug'], null, null, false, true, null]],
        6064 => [[['_route' => 'app_settings_category_sort', '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::sort'], ['_space'], null, null, false, true, null]],
        6097 => [[['_route' => 'app_settings_category_toggle_hidden', '_controller' => 'AppBundle\\Controller\\Settings\\CategoryController::toggleHidden'], ['slug'], null, null, false, true, null]],
        6128 => [[['_route' => 'app_settings_color_edit', '_controller' => 'AppBundle\\Controller\\Settings\\ColorController::manage'], ['_slug'], null, null, false, false, null]],
        6143 => [[['_route' => 'app_settings_color_delete', '_controller' => 'AppBundle\\Controller\\Settings\\ColorController::manage'], ['_slug'], null, null, false, false, null]],
        6195 => [[['_route' => 'app_settings_feature_news_category_edit', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsCategoryController::edit'], ['randomId'], null, null, false, false, null]],
        6210 => [[['_route' => 'app_settings_feature_news_category_delete', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsCategoryController::delete'], ['randomId'], null, null, false, false, null]],
        6236 => [[['_route' => 'app_settings_feature_news_edit', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsController::edit'], ['randomId'], null, null, false, false, null]],
        6251 => [[['_route' => 'app_settings_feature_news_delete', '_controller' => 'AppBundle\\Controller\\Settings\\Feature\\NewsController::delete'], ['randomId'], null, null, false, false, null]],
        6285 => [[['_route' => 'app_settings_locale_edit', '_controller' => 'AppBundle\\Controller\\Settings\\LocaleController::manage'], ['_slug'], null, null, false, false, 1]],
        6300 => [[['_route' => 'app_settings_locale_delete', '_controller' => 'AppBundle\\Controller\\Settings\\LocaleController::delete'], ['name'], null, null, false, false, null]],
        6320 => [[['_route' => 'app_settings_locale_template_list', '_controller' => 'AppBundle\\Controller\\Settings\\LocaleController::templateList'], ['_code'], null, null, false, false, null]],
        6338 => [[['_route' => 'app_settings_locale_template_edit', '_controller' => 'AppBundle\\Controller\\Settings\\LocaleController::templateEdit'], ['locale', 'type'], null, null, false, true, null]],
        6381 => [[['_route' => 'app_settings_pattern_font_edit', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::fontManage'], ['slug'], null, null, false, false, null]],
        6396 => [[['_route' => 'app_settings_pattern_font_delete', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::fontManage'], ['slug'], null, null, false, false, null]],
        6431 => [[['_route' => 'app_settings_pattern_style_edit', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::resource'], ['_slug'], null, null, false, false, null]],
        6446 => [[['_route' => 'app_settings_pattern_style_delete', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::resource'], ['_slug'], null, null, false, false, null]],
        6478 => [[['_route' => 'app_settings_pattern_script_edit', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::resource'], ['_slug'], null, null, false, false, null]],
        6493 => [[['_route' => 'app_settings_pattern_script_delete', '_controller' => 'AppBundle\\Controller\\Settings\\PatternController::resource'], ['_slug'], null, null, false, false, null]],
        6547 => [[['_route' => 'app_settings_tool_framing_format_edit', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\FramingController::formatAction'], ['_slug'], null, null, false, false, null]],
        6562 => [[['_route' => 'app_settings_tool_framing_format_delete', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\FramingController::formatAction'], ['_slug'], null, null, false, false, null]],
        6594 => [[['_route' => 'app_settings_tool_framing_group_edit', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\FramingController::groupAction'], ['_slug'], null, null, false, false, null]],
        6609 => [[['_route' => 'app_settings_tool_framing_group_delete', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\FramingController::groupAction'], ['_slug'], null, null, false, false, null]],
        6651 => [[['_route' => 'app_settings_tool_inspiration_tags', '_controller' => 'AppBundle\\Controller\\Settings\\ToolInspirationController::tags'], ['type'], null, null, false, false, null]],
        6667 => [[['_route' => 'app_settings_tool_inspiration_tag_add', '_controller' => 'AppBundle\\Controller\\Settings\\ToolInspirationController::tagManage'], ['type'], null, null, false, false, null]],
        6692 => [[['_route' => 'app_settings_tool_inspiration_tag_edit', '_controller' => 'AppBundle\\Controller\\Settings\\ToolInspirationController::tagManage'], ['type', '_slug'], null, null, false, false, null]],
        6707 => [[['_route' => 'app_settings_tool_inspiration_tag_delete', '_controller' => 'AppBundle\\Controller\\Settings\\ToolInspirationController::tagManage'], ['type', '_slug'], null, null, false, false, null]],
        6745 => [[['_route' => 'app_settings_tool_inspiration_tag_type_edit', '_controller' => 'AppBundle\\Controller\\Settings\\ToolInspirationController::tagTypeAction'], ['_slug'], null, null, false, false, null]],
        6760 => [[['_route' => 'app_settings_tool_inspiration_tag_type_delete', '_controller' => 'AppBundle\\Controller\\Settings\\ToolInspirationController::tagTypeAction'], ['_slug'], null, null, false, false, null]],
        6827 => [[['_route' => 'app_settings_smart_tool_inspiration_eye_catcher_delete', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\Inspiration\\EyeCatcherController::delete'], ['_slug'], null, null, false, true, null]],
        6849 => [[['_route' => 'app_settings_smart_tool_inspiration_eye_catcher_edit', '_controller' => 'AppBundle\\Controller\\Settings\\SmartTool\\Inspiration\\EyeCatcherController::edit'], ['_slug'], null, null, false, true, null]],
        6888 => [[['_route' => 'app_settings_theme_edit', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::manage'], ['_slug'], null, null, false, false, 1]],
        6918 => [[['_route' => 'app_settings_theme_delete', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::delete'], ['_slug'], null, null, false, false, null]],
        6931 => [[['_route' => 'app_settings_theme_detail', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::detail'], ['_slug'], null, null, false, false, null]],
        6945 => [[['_route' => 'app_settings_theme_file', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::file'], ['_slug'], null, null, false, false, null]],
        6961 => [[['_route' => 'app_settings_theme_refresh', '_controller' => 'AppBundle\\Controller\\Settings\\ThemeController::refresh'], ['_slug'], null, null, false, false, null]],
        7010 => [[['_route' => 'app_category_index', '_controller' => 'AppBundle\\Controller\\CategoryController::index'], ['_space', 'slug'], null, null, false, true, null]],
        7039 => [[['_route' => 'app_category_jump_marks', '_controller' => 'AppBundle\\Controller\\CategoryController::jumpMarks'], ['_space', 'slug'], null, null, false, false, 1]],
        7090 => [[['_route' => 'app_feature_connection_file_dialog', '_controller' => 'AppBundle\\Controller\\Feature\\ConnectionController::fileDialog'], ['id'], null, null, false, false, 1]],
        7113 => [[['_route' => 'app_feature_news_view', '_controller' => 'AppBundle\\Controller\\Feature\\NewsController::view'], ['randomId'], null, null, false, true, null]],
        7142 => [[['_route' => 'app_default_comment', '_controller' => 'AppBundle\\Controller\\DefaultController::comment'], ['slug'], null, null, false, true, null]],
        7177 => [[['_route' => 'app_default_toggle_favour', '_controller' => 'AppBundle\\Controller\\DefaultController::toggleFavoredAction'], ['slug'], null, null, false, false, null]],
        7194 => [[['_route' => 'app_default_toggle_defavour', '_controller' => 'AppBundle\\Controller\\DefaultController::toggleFavoredAction'], ['slug'], null, null, false, false, null]],
        7233 => [[['_route' => 'app_default_invitation', '_controller' => 'AppBundle\\Controller\\DefaultController::invitation'], ['token'], null, null, false, false, null]],
        7271 => [[['_route' => 'app_default_shared', '_controller' => 'AppBundle\\Controller\\DefaultController::shared'], ['hash'], null, null, false, false, null]],
        7298 => [[['_route' => 'app_default_short_link', '_controller' => 'AppBundle\\Controller\\DefaultController::shortLink'], ['slug'], null, null, false, true, null]],
        7332 => [[['_route' => 'app_settings_edit', 'help' => false, '_controller' => 'AppBundle\\Controller\\SettingsController::edit'], ['key'], null, null, false, false, null]],
        7353 => [[['_route' => 'app_settings_edit_help', 'help' => true, '_controller' => 'AppBundle\\Controller\\SettingsController::edit'], ['key'], null, null, false, false, null]],
        7380 => [[['_route' => 'app_default_locale', '_controller' => 'AppBundle\\Controller\\DefaultController::locale'], ['locale'], null, null, false, true, null]],
        7401 => [[['_route' => 'app_default_qr', '_controller' => 'AppBundle\\Controller\\DefaultController::qr'], ['slug'], null, null, false, true, null]],
        7441 => [[['_route' => 'app_default_releases_page', 'page' => 1, '_controller' => 'AppBundle\\Controller\\DefaultController::releases'], ['page'], null, null, false, true, null]],
        7468 => [[['_route' => 'app_user_password_reset_reset', '_controller' => 'AppBundle\\Controller\\User\\PasswordResetController::reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        7496 => [[['_route' => 'app_default_doc_page', 'page' => null, '_controller' => 'AppBundle\\Controller\\DefaultController::doc'], ['page'], null, null, false, true, null]],
        7539 => [[['_route' => 'app_user_bookmark_missing', '_controller' => 'AppBundle\\Controller\\User\\BookmarkController::missing'], ['id'], null, null, false, true, 1]],
        7563 => [[['_route' => 'app_user_bookmark_remove', '_controller' => 'AppBundle\\Controller\\User\\BookmarkController::remove'], ['id'], null, null, false, true, 1]],
        7613 => [
            [['_route' => 'app_user_impersonate_group', 'group' => null, '_controller' => 'AppBundle\\Controller\\UserController::impersonate'], ['group'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function ($condition, $context, $request, $params) { // $checkCondition
        switch ($condition) {
            case 1: return $request->isXmlHttpRequest();
        }
    },
];

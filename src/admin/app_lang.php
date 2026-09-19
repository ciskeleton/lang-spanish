<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Componentes';
$lang['admin_content'] = 'Contenido';
$lang['admin_database_backup'] = 'Respaldos de bases de datos';
$lang['admin_extensions'] = 'Extensiones';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Ayuda';
$lang['admin_languages'] = 'Idiomas';
$lang['admin_logs'] = 'Registros del sistema';
$lang['admin_media'] = 'Biblioteca multimedia';
$lang['admin_modules'] = 'Módulos';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Registro de actividad';
$lang['admin_settings'] = 'Configuración del sistema';
$lang['admin_sysinfo'] = 'Información del sistema';
$lang['admin_system'] = 'Sistema';
$lang['admin_system_firewall'] = 'Firewall del sistema';
$lang['admin_themes'] = 'Temas';
$lang['admin_updates'] = 'Actualizaciones del sistema';
$lang['admin_users'] = 'Usuarios';
$lang['admin_view_site'] = 'Ver Sitio';
$lang['per_page'] = 'Por página';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Gracias por crear con <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{No hay elementos activos.} other{<b>#</b> de <b>%s</b> elementos están activos.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Instalar';
$lang['admin_install_error'] = 'No se pudo instalar el paquete.';
$lang['admin_install_error_com'] = 'La instalación falló: %s';
$lang['admin_install_location_app'] = 'Solo esta aplicación';
$lang['admin_install_location_core'] = 'Todas las aplicaciones';
$lang['admin_install_location_select'] = '&#151; Seleccionar ubicación &#151;';
$lang['admin_install_success'] = 'Paquete instalado correctamente.';
$lang['admin_install_upload'] = 'Subir';
$lang['admin_install_upload_error'] = 'No se pudo subir el paquete.';
$lang['admin_install_upload_success'] = 'Paquete subido correctamente.';
$lang['admin_install_upload_tip'] = 'Instale un paquete subiendo aquí su archivo <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'No se pueden limpiar los antiguos archivos de respaldo.';
$lang['admin_database_backup_clean_success'] = '%d archivos de respaldo eliminados. Se liberaron %d espacio en disco.';
$lang['admin_database_backup_create'] = 'Crear copia de seguridad';
$lang['admin_database_backup_create_confirm'] = '¿Está seguro de que desea crear una copia de seguridad ahora?';
$lang['admin_database_backup_create_error'] = 'No se puede crear el archivo de respaldo. Asegúrese de que la carpeta <b>%s</b> tenga permisos de escritura.';
$lang['admin_database_backup_create_success'] = 'Archivo de respaldo de la base de datos <b>%s</b> creado con éxito.';
$lang['admin_database_backup_delete_confirm'] = '¿Está seguro de que desea eliminar estos archivos de respaldo?';
$lang['admin_database_backup_delete_error'] = 'No se pueden eliminar los archivos de respaldo seleccionados.';
$lang['admin_database_backup_delete_success'] = 'Archivos de respaldo eliminados con éxito.';
$lang['admin_database_backup_download_error'] = 'No se pudo descargar el archivo de copia de seguridad seleccionado.';
$lang['admin_database_backup_download_success'] = 'Archivo de copia de seguridad descargado correctamente.';
$lang['admin_database_backup_lock_confirm'] = '¿Está seguro de que desea bloquear estos archivos de respaldo?';
$lang['admin_database_backup_lock_error'] = 'No se pueden bloquear los archivos de respaldo seleccionados.';
$lang['admin_database_backup_lock_success'] = 'Archivos de respaldo bloqueados con éxito.';
$lang['admin_database_backup_locked_error'] = 'No se pueden eliminar los archivos de respaldo bloqueados.';
$lang['admin_database_backup_missing_error'] = 'No se pudo encontrar el archivo de respaldo.';
$lang['admin_database_backup_unlock_confirm'] = '¿Está seguro de que desea desbloquear estos archivos de respaldo?';
$lang['admin_database_backup_unlock_error'] = 'No se pueden desbloquear los archivos de respaldo seleccionados.';
$lang['admin_database_backup_unlock_success'] = 'Archivos de respaldo desbloqueados con éxito.';
$lang['admin_database_prune'] = 'Purgar';
$lang['admin_database_prune_confirm'] = '¿Está seguro de que desea purgar la base de datos? Se creará una copia de seguridad antes de la ejecución.';
$lang['admin_database_prune_error'] = 'No se puede purgar la base de datos.';
$lang['admin_database_prune_next'] = 'Próxima purga: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Base de datos purgada con éxito.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Eliminar registros';
$lang['admin_logs_delete_confirm'] = '¿Está seguro de que desea eliminar los archivos de registro seleccionados?';
$lang['admin_logs_delete_error'] = 'No se pueden eliminar los archivos de registro.';
$lang['admin_logs_delete_success'] = 'Archivos de registro eliminados con éxito.';
$lang['admin_logs_error_disabled'] = 'Actualmente, el registro no está habilitado.';
$lang['admin_logs_error_empty'] = 'No se encontraron registros.';
$lang['admin_logs_error_missing'] = 'No se pudo encontrar el archivo de registro o estaba vacío.';
$lang['admin_logs_tip'] = 'El registro puede crear archivos muy grandes rápidamente. Para sitios en vivo, considere eliminar los antiguos.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = '¿Está seguro de que desea eliminar los correos seleccionados?';
$lang['admin_emails_delete_error'] = 'No se pudieron eliminar los correos seleccionados.';
$lang['admin_emails_delete_success'] = 'Los correos seleccionados se eliminaron correctamente.';
$lang['admin_emails_email_from'] = 'Enviado desde';
$lang['admin_emails_mail_queue'] = 'Cola de correos';
$lang['admin_emails_mailer'] = 'Correo masivo';
$lang['admin_emails_search'] = 'Buscar correos electrónicos por asunto o contenido...';
$lang['admin_emails_send_error'] = 'No se pudo poner el correo en la cola. Inténtelo de nuevo.';
$lang['admin_emails_send_none'] = 'No hay usuarios que coincidan con los criterios seleccionados.';
$lang['admin_emails_send_success'] = 'El correo ha sido puesto en la cola y se enviará en breve.';
$lang['admin_emails_send_to_banned'] = 'Enviar a usuarios bloqueados.';
$lang['admin_emails_send_to_deleted'] = 'Enviar a usuarios eliminados.';
$lang['admin_emails_send_to_disabled'] = 'Enviar a usuarios inactivos.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Agregar usuario';
$lang['admin_users_all_users'] = 'Todos los usuarios';
$lang['admin_users_ban_confirm'] = '¿Está seguro de que desea prohibir el acceso a los usuarios seleccionados?';
$lang['admin_users_ban_error'] = 'No se pudo prohibir el acceso a los usuarios seleccionados.';
$lang['admin_users_ban_success'] = 'Se prohibió el acceso a los usuarios seleccionados correctamente.';
$lang['admin_users_delete_confirm'] = '¿Está seguro de que desea eliminar los usuarios seleccionados?';
$lang['admin_users_delete_error'] = 'No se pudieron eliminar los usuarios seleccionados.';
$lang['admin_users_delete_success'] = 'Los usuarios seleccionados se eliminaron correctamente.';
$lang['admin_users_disable_confirm'] = '¿Está seguro de que desea desactivar los usuarios seleccionados?';
$lang['admin_users_disable_error'] = 'No se pudieron desactivar los usuarios seleccionados.';
$lang['admin_users_disable_success'] = 'Los usuarios seleccionados se desactivaron correctamente.';
$lang['admin_users_edit'] = 'Editar usuario';
$lang['admin_users_edit_error'] = 'No se puede actualizar el usuario.';
$lang['admin_users_edit_success'] = 'Usuario actualizado con éxito.';
$lang['admin_users_enable_confirm'] = '¿Está seguro de que desea activar los usuarios seleccionados?';
$lang['admin_users_enable_error'] = 'No se pudieron activar los usuarios seleccionados.';
$lang['admin_users_enable_success'] = 'Los usuarios seleccionados se activaron correctamente.';
$lang['admin_users_groups'] = 'Grupos';
$lang['admin_users_lock_confirm'] = '¿Está seguro de que desea bloquear a los usuarios seleccionados?';
$lang['admin_users_lock_error'] = 'No se pudo bloquear a los usuarios seleccionados.';
$lang['admin_users_lock_success'] = 'Los usuarios seleccionados han sido bloqueados con éxito.';
$lang['admin_users_logged'] = 'Usuarios Conectados';
$lang['admin_users_manage'] = 'Gestionar usuarios';
$lang['admin_users_remove_confirm'] = '¿Está seguro de que desea eliminar permanentemente los usuarios seleccionados y todos sus datos?';
$lang['admin_users_remove_error'] = 'No se pudieron eliminar permanentemente los usuarios seleccionados y todos sus datos.';
$lang['admin_users_remove_success'] = 'Los usuarios seleccionados y todos sus datos se eliminaron correctamente.';
$lang['admin_users_restore_confirm'] = '¿Está seguro de que desea restaurar los usuarios seleccionados?';
$lang['admin_users_restore_error'] = 'No se pudieron restaurar los usuarios seleccionados.';
$lang['admin_users_restore_success'] = 'Los usuarios seleccionados se restauraron correctamente.';
$lang['admin_users_search'] = 'Buscar por nombre o correo...';
$lang['admin_users_unban_confirm'] = '¿Está seguro de que desea levantar la prohibición de acceso a los usuarios seleccionados?';
$lang['admin_users_unban_error'] = 'No se pudo levantar la prohibición de acceso a los usuarios seleccionados.';
$lang['admin_users_unban_success'] = 'Se levantó la prohibición de acceso a los usuarios seleccionados correctamente.';
$lang['admin_users_unlock_confirm'] = '¿Está seguro de que desea desbloquear a los usuarios seleccionados?';
$lang['admin_users_unlock_error'] = 'No se pudieron desbloquear los usuarios seleccionados.';
$lang['admin_users_unlock_success'] = 'Los usuarios seleccionados se han desbloqueado correctamente.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Limpiar Registros';
$lang['admin_reports_clear_confirm'] = '¿Está seguro de que desea limpiar el registro de acciones?';
$lang['admin_reports_clear_error'] = 'No se pudo limpiar el registro de acciones.';
$lang['admin_reports_clear_success'] = 'Registro de acciones limpio correctamente.';
$lang['admin_reports_latest_actions'] = 'Últimas acciones';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = '¿Está seguro de que desea eliminar los archivos seleccionados?';
$lang['admin_media_delete_error'] = 'No se pueden eliminar los archivos.';
$lang['admin_media_delete_success'] = 'Archivos eliminados con éxito.';
$lang['admin_media_file_delete_error'] = 'No se puede eliminar el archivo.';
$lang['admin_media_file_delete_success'] = 'Archivo eliminado con éxito.';
$lang['admin_media_file_update_error'] = 'No se puede actualizar el archivo.';
$lang['admin_media_file_update_success'] = 'Archivo actualizado con éxito.';
$lang['admin_media_search'] = 'Buscar por nombre, descripción o nombre de archivo...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{No hay módulos activos.} other{<b>#</b> de <b>%s</b> módulos están activos.}';
$lang['admin_modules_add'] = 'Agregar módulo';
$lang['admin_modules_delete_confirm'] = '¿Está seguro de que desea eliminar el módulo: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'No se puede eliminar el módulo.';
$lang['admin_modules_delete_success'] = 'Módulo eliminado con éxito.';
$lang['admin_modules_disable_all_confirm'] = '¿Está seguro de que desea desactivar todos los módulos?';
$lang['admin_modules_disable_all_error'] = 'No se pudieron desactivar todos los módulos.';
$lang['admin_modules_disable_all_success'] = 'Todos los módulos se desactivaron correctamente.';
$lang['admin_modules_disable_confirm'] = '¿Está seguro de que desea deshabilitar el módulo: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'No se puede desactivar el módulo.';
$lang['admin_modules_disable_success'] = 'Módulo desactivado con éxito.';
$lang['admin_modules_enable_all_confirm'] = '¿Está seguro de que desea activar todos los módulos?';
$lang['admin_modules_enable_all_error'] = 'No se pudieron activar todos los módulos.';
$lang['admin_modules_enable_all_success'] = 'Todos los módulos se activaron correctamente.';
$lang['admin_modules_enable_confirm'] = '¿Está seguro de que desea habilitar el módulo: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'No se puede activar el módulo.';
$lang['admin_modules_enable_success'] = 'Módulo activado con éxito.';
$lang['admin_modules_install_tip'] = 'Los módulos añaden nuevas funciones a su sitio. Explore los módulos disponibles en el <a href="%s" target="_blank" rel="noopener">directorio de módulos</a> o suba un archivo <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{No hay plugins activos.} other{<b>#</b> de <b>%s</b> plugins están activos.}';
$lang['admin_plugins_add'] = 'Agregar Plugin';
$lang['admin_plugins_delete_confirm'] = '¿Está seguro de que desea eliminar el plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'No se pudo eliminar el plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin eliminado con éxito.';
$lang['admin_plugins_disable_all_confirm'] = '¿Está seguro de que desea desactivar todos los plugins?';
$lang['admin_plugins_disable_all_error'] = 'No se pudieron desactivar todos los plugins.';
$lang['admin_plugins_disable_all_success'] = 'Todos los plugins se desactivaron correctamente.';
$lang['admin_plugins_disable_confirm'] = '¿Está seguro de que desea desactivar el plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'No se pudo desactivar el plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin desactivado con éxito.';
$lang['admin_plugins_enable_all_confirm'] = '¿Está seguro de que desea activar todos los plugins?';
$lang['admin_plugins_enable_all_error'] = 'No se pudieron activar todos los plugins.';
$lang['admin_plugins_enable_all_success'] = 'Todos los plugins se activaron correctamente.';
$lang['admin_plugins_enable_confirm'] = '¿Está seguro de que desea activar el plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'No se pudo activar el plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin activado con éxito.';
$lang['admin_plugins_install_tip'] = 'Los plugins amplían las funciones existentes con opciones o integraciones adicionales. Instálelos desde el <a href="%s" target="_blank" rel="noopener">directorio de plugins</a> o suba un archivo <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Agregar tema';
$lang['admin_themes_delete_confirm'] = '¿Está seguro de que desea eliminar el tema: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'No se puede eliminar el tema.';
$lang['admin_themes_delete_error_active'] = 'No puede eliminar el tema actualmente activo.';
$lang['admin_themes_delete_success'] = 'Tema eliminado con éxito.';
$lang['admin_themes_disable_confirm'] = '¿Está seguro de que desea desactivar el tema: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'No se pudo desactivar el tema.';
$lang['admin_themes_disable_success'] = 'Tema desactivado correctamente.';
$lang['admin_themes_enable_confirm'] = '¿Está seguro de que desea habilitar el tema: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'No se puede activar el tema.';
$lang['admin_themes_enable_success'] = 'Tema activado con éxito.';
$lang['admin_themes_install_tip'] = 'Los temas cambian la apariencia y el diseño de su sitio. Elija de la <a href="%s" target="_blank" rel="noopener">biblioteca de temas</a> o suba un archivo <b>.zip</b> para instalar el suyo.';
$lang['admin_themes_none_tip'] = 'Esta aplicación se está ejecutando sin un tema. Instale uno para personalizar la interfaz pública.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menús';
$lang['admin_menus_assign_error'] = 'No se pudieron actualizar las ubicaciones de los menús.';
$lang['admin_menus_assign_success'] = 'Las ubicaciones de los menús se actualizaron correctamente.';
$lang['admin_menus_header'] = 'Hay <b>%s</b> ubicaciones de menú disponibles.';
$lang['admin_menus_location'] = 'Ubicación';
$lang['admin_menus_locations'] = 'Ubicaciones de menú';
$lang['admin_menus_manage'] = 'Gestionar menús';
$lang['admin_menus_menu'] = 'Menú asignado';
$lang['admin_menus_none'] = '&#151; Ninguno &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Agregar idioma';
$lang['admin_languages_default_confirm'] = '¿Está seguro de que desea establecer este idioma como idioma predeterminado del sitio?';
$lang['admin_languages_default_error'] = 'No se puede cambiar el idioma predeterminado.';
$lang['admin_languages_default_error_nochange'] = 'Este idioma ya es el predeterminado.';
$lang['admin_languages_default_success'] = 'Idioma predeterminado cambiado con éxito.';
$lang['admin_languages_disable_all_confirm'] = '¿Está seguro de que desea deshabilitar todos los idiomas?';
$lang['admin_languages_disable_all_error'] = 'No se pudieron deshabilitar todos los idiomas.';
$lang['admin_languages_disable_all_success'] = 'Todos los idiomas se han deshabilitado correctamente.';
$lang['admin_languages_disable_confirm'] = '¿Está seguro de que desea deshabilitar el idioma: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'No se puede deshabilitar el idioma.';
$lang['admin_languages_disable_error_default'] = 'El idioma predeterminado no se puede desactivar.';
$lang['admin_languages_disable_error_nochange'] = 'Este idioma ya está deshabilitado.';
$lang['admin_languages_disable_success'] = 'Idioma desactivado con éxito.';
$lang['admin_languages_enable_all_confirm'] = '¿Está seguro de que desea habilitar todos los idiomas?';
$lang['admin_languages_enable_all_error'] = 'No se pudieron habilitar todos los idiomas.';
$lang['admin_languages_enable_all_success'] = 'Todos los idiomas se han habilitado correctamente.';
$lang['admin_languages_enable_confirm'] = '¿Está seguro de que desea habilitar el idioma: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'No se puede habilitar el idioma.';
$lang['admin_languages_enable_error_nochange'] = 'Este idioma ya está habilitado.';
$lang['admin_languages_enable_success'] = 'Idioma activado con éxito.';
$lang['admin_languages_install_tip'] = 'Los idiomas agregan traducciones para la interfaz y el contenido de su sitio. Explore los idiomas disponibles en el <a href="%s" target="_blank" rel="noopener">directorio de idiomas</a> o suba un paquete <b>.zip</b> para instalar el suyo propio.';
$lang['admin_languages_tip'] = 'Habilitar, deshabilitar y establecer el idioma predeterminado del sitio. Los idiomas habilitados están disponibles para los visitantes del sitio.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = '¡Nuevas actualizaciones disponibles!';
$lang['update_backup_error'] = 'No se pudo crear una copia de seguridad del paquete existente. La actualización fue cancelada.';
$lang['update_check_disabled'] = 'Las comprobaciones automáticas de actualización están desactivadas. Actívelas para ver las actualizaciones.';
$lang['update_check_error'] = 'No se puede ejecutar la comprobación de actualizaciones en este momento.';
$lang['update_check_success'] = 'Comprobación de actualizaciones completada con éxito.';
$lang['update_install_error'] = 'No se pudo instalar el paquete. Se mantuvo la versión anterior.';
$lang['update_install_success'] = 'Paquete actualizado correctamente a la versión más reciente.';
$lang['update_interval_3days'] = 'Cada 3 días';
$lang['update_interval_biweekly'] = 'Cada 2 semanas';
$lang['update_interval_daily'] = 'Cada día';
$lang['update_interval_monthly'] = 'Una vez al mes';
$lang['update_interval_weekly'] = 'Una vez a la semana';
$lang['update_not_available'] = 'Su sitio web está actualizado.';
$lang['update_rollback_error'] = 'No se pudo restaurar la versión anterior. Puede ser necesaria una intervención manual.';
$lang['update_rollback_success'] = 'Versión anterior restaurada correctamente.';
$lang['updates_available'] = 'Actualizaciones disponibles';
$lang['updates_check_now'] = 'Comprobar ahora';
$lang['updates_check_now_confirm'] = '¿Está seguro de que desea comprobar las actualizaciones ahora?';
$lang['updates_current_version'] = 'Versión actual';
$lang['updates_enable'] = 'Activar actualizaciones';
$lang['updates_last_check'] = 'Última comprobación: %s';
$lang['updates_latest_version'] = 'Última versión';
$lang['updates_next_check'] = 'Próxima comprobación programada: %s';
$lang['updates_previous_version'] = 'Versión anterior';
$lang['updates_recent'] = 'Actualizado recientemente';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Error al bloquear la dirección IP especificada.';
$lang['admin_firewall_ban_success'] = 'La dirección IP ha sido bloqueada correctamente.';
$lang['admin_firewall_block_ip'] = 'Bloquear dirección IP';
$lang['admin_firewall_delete_confirm'] = '¿Está seguro de que desea desbloquear las direcciones IP seleccionadas?';
$lang['admin_firewall_delete_error'] = 'Error al desbloquear las direcciones IP seleccionadas.';
$lang['admin_firewall_delete_success'] = 'Las direcciones IP seleccionadas han sido desbloqueadas correctamente.';
$lang['admin_firewall_duration'] = 'Duración del bloqueo';
$lang['admin_firewall_permanent'] = 'Permanente';
$lang['admin_firewall_reason'] = 'Motivo del bloqueo';
$lang['admin_firewall_tip'] = 'Visualice y gestione las direcciones IP bloqueadas por el firewall debido a infracciones repetidas o actividad sospechosa.';

// Settings
$lang['404_ban_duration'] = 'Duración del bloqueo 404';
$lang['404_threshold'] = 'Límite de infracciones 404';
$lang['uri_ban_duration'] = 'Duración del bloqueo URI';
$lang['uri_strike_threshold'] = 'Límite de infracciones URI';

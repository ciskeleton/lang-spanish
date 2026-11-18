<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Actualizaciones del sistema disponibles';
$lang['emails_updates_available_message'] = <<<EOT
Hola,

Se han detectado nuevas actualizaciones del sistema para {site_anchor}.

Estas actualizaciones pueden incluir correcciones de seguridad, mejoras de rendimiento o nuevas funciones.
Le recomendamos que las revise lo antes posible.

Puede revisar y gestionar las actualizaciones disponibles desde el panel de administración:
{link}

Si ya ha revisado o aplicado las actualizaciones, no es necesario que realice ninguna otra acción.

Este es un mensaje automático del sistema enviado por {site_name}.
No responda a este correo electrónico.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Activación de cuenta';
$lang['emails_account_activation_request_message'] = <<<EOT
Hola {name},

Gracias por registrarte en {site_anchor}. Tu cuenta ha sido creada y debe ser activada antes de que puedas utilizarla.

Para activar tu cuenta, haz clic en el siguiente enlace o cópialo y pégalo en tu navegador:
{link}

Saludos cordiales,
-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nuevo enlace de activación';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hola {name},

Recientemente has solicitado un nuevo enlace de activación en {site_anchor} porque tu cuenta no estaba activa.
Para activar tu cuenta, haz clic en el siguiente enlace o cópialo y pégalo en tu navegador:
{link}

Si no solicitaste esto, no es necesario tomar ninguna medida adicional.

Esta acción fue solicitada desde la siguiente dirección IP: {ip_link}.

Saludos cordiales,
-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Cuenta activada';
$lang['emails_account_activation_success_message'] = <<<EOT
Hola {name},

Tu cuenta en {site_anchor} se ha activado correctamente. Ahora puedes <a href="{login_url}" target="_blank" rel="noopener">iniciar sesión</a> en cualquier momento.

Esperamos que disfrutes tu estancia, por favor, acepta nuestros cordiales saludos.

-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Cuenta pendiente de aprobación';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hola {name},

Gracias por unirte a nosotros en {site_anchor}. Tu cuenta ha sido creada pero necesita la aprobación de un administrador del sitio antes de estar activa.
Nos disculpamos sinceramente por este paso crucial, pero es solo por razones de seguridad.

Recibirás un correo electrónico de confirmación tan pronto como tu cuenta sea aprobada.

Esperamos que disfrutes tu estadía, por favor, acepta nuestros cordiales saludos.

-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Cuenta aprobada';
$lang['emails_account_approval_success_message'] = <<<EOT
Hola {name},

¡Buenas noticias! Tu cuenta en {site_anchor} ha sido aprobada.

Ya puedes iniciar sesión y comenzar a usar tu cuenta de inmediato:
{link}

Estamos encantados de tenerte con nosotros.

-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Cuenta restaurada';
$lang['emails_account_restored_message'] = <<<EOT
Hola {name},

Este correo electrónico confirma que tu cuenta en {site_anchor} ha sido restaurada con éxito.

Te damos la bienvenida de nuevo y esperamos que esta vez disfrutes de tu estancia.

Saludos cordiales,
-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Bienvenido a {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hola {name},

La mayoría de las personas tienen secuencias de bienvenida muy largas después de que te registras en su sitio.

Buenas noticias: no somos la mayoría de las personas.
Sin embargo, queremos darte la bienvenida de todos modos y agradecerte por unirte a nosotros en {site_anchor}.

Esperamos que disfrutes tu estadía. Por favor, acepta nuestros amables saludos.

-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Solicitud de cambio de correo electrónico';
$lang['emails_email_change_request_message'] = <<<EOT
Hola {name},

Estás recibiendo este correo electrónico porque hemos recibido una solicitud para cambiar el correo electrónico de tu cuenta en {site_anchor}.

Haz clic en el siguiente enlace o cópialo y pégalo en tu navegador si deseas continuar:
{link}

Si no solicitaste un cambio de correo electrónico, no es necesario realizar ninguna otra acción.

Esta acción fue solicitada desde la siguiente dirección IP: {ip_link}.

Saludos cordiales,
-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Dirección de correo electrónico cambiada';
$lang['emails_email_change_success_message'] = <<<EOT
Hola {name},

Este correo electrónico confirma que tu dirección de correo electrónico utilizada en {site_anchor} se ha cambiado correctamente.

Si no realizaste esta acción, contáctanos lo antes posible para resolver este problema.

Esta acción se realizó desde la siguiente dirección IP: {ip_link}.

Saludos cordiales,
-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Alerta de inicio de sesión fallido';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hola {name},

Alguien intentó recientemente usar contraseñas incorrectas para iniciar sesión en tu cuenta de {site_name}.

Fecha del servidor: {date}
Dispositivo: {browser}, {platform}
Dirección IP: {ip_link}

Si no fuiste tú, no te preocupes, el intento de inicio de sesión no tuvo éxito.

Si fuiste tú y no recuerdas tu contraseña, haz clic en el enlace de abajo para restablecerla:
{reset_link}

Si tienes problemas para iniciar sesión en tu cuenta, contacta a nuestro equipo o solicita un enlace de inicio de sesión con un solo clic.

-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notificación de inicio de sesión exitoso';
$lang['emails_login_alert_success_message'] = <<<EOT
Hola {name},

Le enviaremos este correo electrónico luego de iniciar sesión exitosamente en su cuenta {site_name}.

Fecha del servidor: {date}
Dispositivo: {browser}, {platform}
Dirección IP: {ip_link}

Si fuiste tú, puedes ignorar este correo electrónico.

Si no fuiste tú, cambia tu contraseña de inmediato para proteger tu cuenta.

Para cualquier ayuda, contacta con nuestro equipo de soporte.

-- El equipo de {site_name}
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Enlace de inicio de sesión rápido';
$lang['emails_login_magic_link_message'] = <<<EOT
Hola {name},

Has solicitado un inicio de sesión con un solo clic en tu cuenta de {site_anchor}.

Haz clic en el siguiente enlace o cópialo y pégalo en tu navegador para iniciar sesión al instante:
{link}

Este enlace caducará en 15 minutos. Si no solicitaste esto, por favor ignora este correo.

Esta solicitud se realizó desde la siguiente dirección IP: {ip_link}.

Saludos cordiales,
-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Autenticación de dos factores';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hola {name},

Tu código de autenticación de dos factores es: <strong>{code}</strong>

Siempre puedes desactivar la autenticación de dos factores en la configuración de tu cuenta.

Esta acción se realizó desde la siguiente dirección IP: {ip_link}.

Saludos cordiales,
-- Equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Solicitud de restablecimiento de contraseña';
$lang['emails_password_change_request_message'] = <<<EOT
Hola {name},

Estás recibiendo este correo electrónico porque hemos recibido una solicitud para restablecer la contraseña de tu cuenta en {site_anchor}.

Haz clic en el siguiente enlace o cópialo y pégalo en tu navegador si deseas continuar:
{link}

Si no solicitaste restablecer la contraseña, no es necesario realizar ninguna otra acción.

Esta solicitud se realizó desde la siguiente dirección IP: {ip_link}.

Saludos cordiales,
-- El equipo de {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Contraseña cambiada correctamente';
$lang['emails_password_change_success_message'] = <<<EOT
Hola {name},

Este correo electrónico confirma que tu contraseña en {site_anchor} se ha cambiado correctamente. Ahora puedes <a href="{login_url}" target="_blank" rel="noopener">iniciar sesión</a> utilizando la nueva contraseña.

Si no realizaste esta acción, por favor contáctanos lo más pronto posible para resolver este problema.

Esta acción se realizó desde la siguiente dirección IP: {ip_link}.

Saludos cordiales,
-- El equipo de {site_name}.
EOT;

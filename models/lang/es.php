<?php
        /*
                UserPie Langauge File.
                Language: Spanish.
        */
        
        /*
                %m1% - Dymamic markers which are replaced at run time by the relevant index.
        */

        $lang = array();
        
        //Account
        $lang = array_merge($lang,array(
                "ACCOUNT_SPECIFY_USERNAME"                                 => "Introduzca su usario",
                "ACCOUNT_SPECIFY_PASSWORD"                                 => "Introduzca su contraseña",
                "ACCOUNT_SPECIFY_EMAIL"                                    => "Introduzca una dirección mail",
                "ACCOUNT_INVALID_EMAIL"                                    => "Email no valido",
                "ACCOUNT_INVALID_USERNAME"                                 => "Usuario no valido",
                "ACCOUNT_USER_OR_EMAIL_INVALID"                            => "Usuario o email no validos",
                "ACCOUNT_USER_OR_PASS_INVALID"                             => "Usuario o contraseña no validos",
                "ACCOUNT_ALREADY_ACTIVE"                                   => "Su cuenta ha sido activada",
                "ACCOUNT_INACTIVE"                                         => "Su cuenta esta en proceso de activación. Revise su correo / carpeta spam para seguir las instrucciones de activación",
                "ACCOUNT_USER_CHAR_LIMIT"                                  => "Su nombre de usuario debe tener menos de %m1% caracteres y mas de %m2%",
                "ACCOUNT_PASS_CHAR_LIMIT"                                  => "Su contraseña no debe tener menos de %m1% caracteres ni mas de %m2%",
                "ACCOUNT_PASS_MISMATCH"                                    => "Las contraseña deben coincidir",
                "ACCOUNT_USERNAME_IN_USE"                                  => "El usuario %m1% ya existe",
                "ACCOUNT_EMAIL_IN_USE"                                     => "El email %m1% ya está en uso",
                "ACCOUNT_LINK_ALREADY_SENT"                                => "El email de activación ha sido enviado hace %m1% hora(s)",
                "ACCOUNT_NEW_ACTIVATION_SENT"                              => "Hemos enviado un nuevo mail de confirmación, por favor revise su correo",
                "ACCOUNT_NOW_ACTIVE"                                       => "Su cuenta ahora está activa",
                "ACCOUNT_SPECIFY_NEW_PASSWORD"                             => "Por favor, introduzca su nueva contraseña",        
                "ACCOUNT_NEW_PASSWORD_LENGTH"                              => "Su nueva contraseña no debe tener menos de %m1% caracteres ni mas de %m2%",        
                "ACCOUNT_PASSWORD_INVALID"                                 => "Su contraseña actual no coincide con la que tenemos almacenada",        
                "ACCOUNT_EMAIL_TAKEN"                                      => "Esta dirección de email esta siendo utilizada por otro usuario",
                "ACCOUNT_DETAILS_UPDATED"                                  => "Datos de la cuenta actualizados",
                "ACTIVATION_MESSAGE"                                      => "Usted debe activar su cuenta antes de acceder, siga el siguiente enlace para activar su cuenta. \n\n
                                                                                                        %m1%activate-account.php?token=%m2%",                                                        
                "ACCOUNT_REGISTRATION_COMPLETE_TYPE1"        => "Usted se ha registrado correctamente. Puede acceder ahora <a href=\"login.php\">aquí</a>.",
                "ACCOUNT_REGISTRATION_COMPLETE_TYPE2"        => "Usted se ha registrado correctamente. En breve recibirá un correo de activación. 
                                                                                                        Debe activar su cuenta antes de acceder.",
        ));
        
        //Forgot password
        $lang = array_merge($lang,array(
                "FORGOTPASS_INVALID_TOKEN"                                => "token no válido",
                "FORGOTPASS_NEW_PASS_EMAIL"                                => "Le hemos enviado una nueva contraseña",
                "FORGOTPASS_REQUEST_CANNED"                                => "Solicitud de recuperación de contraseña anulada",
                "FORGOTPASS_REQUEST_EXISTS"                                => "Ya existe una solicitud de recuperación de contraseña en esta cuenta",
                "FORGOTPASS_REQUEST_SUCCESS"                        => "Le hemos enviado intrucciones de como recuperar el acceso a su cuenta a su email",
        ));
        
        //Miscellaneous
        $lang = array_merge($lang,array(
                "CONFIRM"                                                                => "Confirmar",
                "DENY"                                                                        => "Rechazar",
                "SUCCESS"                                                                => "Conseguido",
                "ERROR"                                                                        => "Error",
                "NOTHING_TO_UPDATE"                                                => "Ningún cambio",
                "SQL_ERROR"                                                                => "Error SQL fatal",
                "MAIL_ERROR"                                                        => "Error al enviar el email, pongase en contacto con el administrador",
                "MAIL_TEMPLATE_BUILD_ERROR"                                => "Error al crear la plantilla de email",
                "MAIL_TEMPLATE_DIRECTORY_ERROR"                        => "Imposible abrir el directorio de plantillas email. Quizás configure el directorio como %m1%",
                "MAIL_TEMPLATE_FILE_EMPTY"                                => "Archivo de plantilla vacío... se ha enviado nada",
                "FEATURE_DISABLED"                                                => "Esta opción esta deshabilitada",
        ));
?>

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'Entrar';
$lang['login_subheading']      = 'Por favor entre com o seu email e password em baixo';
$lang['login_identity_label']  = 'Email:';
$lang['login_password_label']  = 'Senha:';
$lang['login_remember_label']  = 'Lembra-te de mim:';
$lang['login_submit_btn']      = 'Entrar';
$lang['login_forgot_password'] = 'Esqueceu a sua senha?';

// Index
$lang['index_heading']           = 'Utilizadores';
$lang['index_subheading']        = 'Ema baixo esta uma lista dos utilizadores.';
$lang['index_fname_th']          = 'Primeiro nome';
$lang['index_lname_th']          = 'Ultimo nome';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = 'Grupos';
$lang['index_status_th']         = 'Status';
$lang['index_action_th']         = 'Accao';
$lang['index_active_link']       = 'Activo';
$lang['index_inactive_link']     = 'Inactivo';
$lang['index_create_user_link']  = 'Criar um novo utilizador';
$lang['index_create_group_link'] = 'Criar um novo grupo';

// Deactivate User
$lang['deactivate_heading']                  = 'Desactivar Utilizador';
$lang['deactivate_subheading']               = 'Tem a certeza que quer desactivar o utilizador \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Sim:';
$lang['deactivate_confirm_n_label']          = 'Nao:';
$lang['deactivate_submit_btn']               = 'Submeter';
$lang['deactivate_validation_confirm_label'] = 'confirmacao';
$lang['deactivate_validation_user_id_label'] = 'utilizador ID';

// Create User
$lang['create_user_heading']                           = 'Criar Utilizador';
$lang['create_user_subheading']                        = 'Por favor preencha a informacao dos utilizadores em baixo.';
$lang['create_user_fname_label']                       = 'Primeiro nome:';
$lang['create_user_lname_label']                       = 'Ultimo nome:';
$lang['create_user_company_label']                     = 'Nome da empresa:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Telefone:';
$lang['create_user_password_label']                    = 'Senha:';
$lang['create_user_password_confirm_label']            = 'Confirmacao de Senha:';
$lang['create_user_submit_btn']                        = 'Criar utilizador';
$lang['create_user_validation_fname_label']            = 'Primeiro nome';
$lang['create_user_validation_lname_label']            = 'Ultimo nome';
$lang['create_user_validation_email_label']            = 'Endereco de Email';
$lang['create_user_validation_phone1_label']           = 'Primeira parte do telefone';
$lang['create_user_validation_phone2_label']           = 'Segunda parte do telefone';
$lang['create_user_validation_phone3_label']           = 'Terceira parte do telefone';
$lang['create_user_validation_company_label']          = 'Nome da empresa';
$lang['create_user_validation_password_label']         = 'Senha';
$lang['create_user_validation_password_confirm_label'] = 'Confirmacao da senha';

// Edit User
$lang['edit_user_heading']                           = 'Editar Utilizador';
$lang['edit_user_subheading']                        = 'Por favor preencha a informacao dos utilizadores em baixo.';
$lang['edit_user_fname_label']                       = 'Primeiro nome:';
$lang['edit_user_lname_label']                       = 'Ultimo nome:';
$lang['edit_user_company_label']                     = 'Nome da empresa:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Telefone:';
$lang['edit_user_password_label']                    = 'Senha: (se vai alterar a senha)';
$lang['edit_user_password_confirm_label']            = 'Confirmar Password: (se vai alterar a senha)';
$lang['edit_user_groups_heading']                    = 'Membro de grupos';
$lang['edit_user_submit_btn']                        = 'Gravar utilizador';
$lang['edit_user_validation_fname_label']            = 'Primeiro nome';
$lang['edit_user_validation_lname_label']            = 'Ultimo nome';
$lang['edit_user_validation_email_label']            = 'Endereço de email';
$lang['edit_user_validation_phone1_label']           = 'Primeira parte do telefone';
$lang['edit_user_validation_phone2_label']           = 'Segunda parte do telefone';
$lang['edit_user_validation_phone3_label']           = 'Terceira parte do telefone';
$lang['edit_user_validation_company_label']          = 'Nome da empresa';
$lang['edit_user_validation_groups_label']           = 'Grupos';
$lang['edit_user_validation_password_label']         = 'Senha';
$lang['edit_user_validation_password_confirm_label'] = 'Confirmacao da senha';

// Create Group
$lang['create_group_title']                  = 'Criar Grupo';
$lang['create_group_heading']                = 'Criar Grupo';
$lang['create_group_subheading']             = 'Por favor preencha a informacao do grupo em baixo.';
$lang['create_group_name_label']             = 'Nome do grupo:';
$lang['create_group_desc_label']             = 'Descricao:';
$lang['create_group_submit_btn']             = 'Criar Grupo';
$lang['create_group_validation_name_label']  = 'Nome do Grupo';
$lang['create_group_validation_desc_label']  = 'Descricao';

// Edit Group
$lang['edit_group_title']                  = 'Editar Grupo';
$lang['edit_group_saved']                  = 'Grupo gravado';
$lang['edit_group_heading']                = 'Editar Grupo';
$lang['edit_group_subheading']             = 'Por favor preencha a informacao do grupo em baixo.';
$lang['edit_group_name_label']             = 'Nome do grupo:';
$lang['edit_group_desc_label']             = 'Descricao:';
$lang['edit_group_submit_btn']             = 'Gravar o Grupo';
$lang['edit_group_validation_name_label']  = 'Nome do Grupo';
$lang['edit_group_validation_desc_label']  = 'Descricao';

// Change Password
$lang['change_password_heading']                               = 'Alterar a palavra passe';
$lang['change_password_old_password_label']                    = 'Password Antiga:';
$lang['change_password_new_password_label']                    = 'Nova Password (com pelo menos %s caracteres):';
$lang['change_password_new_password_confirm_label']            = 'Confirmacao da nova Password:';
$lang['change_password_submit_btn']                            = 'Alterar';
$lang['change_password_validation_old_password_label']         = 'Password Antiga';
$lang['change_password_validation_new_password_label']         = 'Nova Password';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirmar Nova Password';

// Forgot Password
$lang['forgot_password_heading']                 = 'Esqueceu a Password';
$lang['forgot_password_subheading']              = 'Por favor insira a sua %s de maneira a podermos enviar-lhe um email para fazer reset a sua password.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Submeter';
$lang['forgot_password_validation_email_label']  = 'Endereco de Email';
$lang['forgot_password_username_identity_label'] = 'Utilizador';
$lang['forgot_password_email_identity_label']    = 'Email';


// Reset Password
$lang['reset_password_heading']                               = 'Alterar Password';
$lang['reset_password_new_password_label']                    = 'Nova Password  (com pelo menos %s caracteres):';
$lang['reset_password_new_password_confirm_label']            = 'Confirmacao da nova Password:';
$lang['reset_password_submit_btn']                            = 'Alterar';
$lang['reset_password_validation_new_password_label']         = 'Nova Password';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirmar Nova Password';

// Activation Email
$lang['email_activate_heading']    = 'Activar conta para %s';
$lang['email_activate_subheading'] = 'Por favor clique neste link para %s.';
$lang['email_activate_link']       = 'Active a sua conta';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Faca reset a sua password %s';
$lang['email_forgot_password_subheading'] = 'Por favor clique neste link para %s.';
$lang['email_forgot_password_link']       = 'Faca Reset a sua Password';

// New Password Email
$lang['email_new_password_heading']    = 'Nova Password para %s';
$lang['email_new_password_subheading'] = 'A sua password foi alterada para: %s';


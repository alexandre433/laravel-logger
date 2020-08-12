<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Logger Language Lines - Global
    |--------------------------------------------------------------------------
    */
    'userTypes' => [
        'guest'      => 'Convidado',
        'registered' => 'Registado',
        'crawler'    => 'Robo/Crawler',
    ],

    'verbTypes' => [
        'created'    => 'Criado',
        'edited'     => 'Modificado',
        'deleted'    => 'Apagado',
        'viewed'     => 'Visualizado',
        'crawled'    => 'Crawled',
    ],

    'tooltips' => [
        'viewRecord' => 'Visualizar Detalhes',
    ],

    'placeholders' => [
        'description' => 'Descrição',
        'route' => 'Rota',
        'ip_address' => 'Endereço Ip',
    ],

    'buttons' => [
        'close' => 'Fechar',
    ],

    'status' => [
        'success' => 'Sucesso',
        'error' => 'Erro',
    ],

    'errors' => [
        'ip_not_available' => 'Informação adicional do Endereço de Ip não disponível.',
    ],


    /*
    |--------------------------------------------------------------------------
    | Laravel Logger Admin Dashboard Language Lines
    |--------------------------------------------------------------------------
    */
    'dashboard' => [
        'title'     => 'Atividade Registada',
        'subtitle'  => 'Eventos',

        'labels'    => [
            'id'            => 'Id',
            'time'          => 'Tempo',
            'description'   => 'Descrição',
            'user'          => 'Utilizador',
            'method'        => 'Método',
            'route'         => 'Rota',
            'ipAddress'     => '<span class="hidden-sm hidden-xs">Endereço</span> Ip',
            'agent'         => '<span class="hidden-sm hidden-xs">Utilizador </span>Agente',
            'deleteDate'    => '<span class="hidden-sm hidden-xs">Data </span> Apagada',
        ],

        'menu'      => [
            'alt'           => 'Menu de Atividade Registada',
            'clear'         => 'Limpar Atividade Registada',
            'show'          => 'Visualizar Atividade Registada Limpa',
            'back'          => 'Voltar à Atividade Registada',
        ],

        'search'    => [
            'all'           => 'Todas',
            'search'        => 'Procurar',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Logger Admin Drilldown Language Lines
    |--------------------------------------------------------------------------
    */

    'drilldown' => [
        'title'                 => 'Atividade Registada :id',
        'title-details'         => 'Detalhes de Atividade',
        'title-ip-details'      => 'Detalhes de Endereço de Ip',
        'title-user-details'    => 'Detalhes do Utilizador',
        'title-user-activity'   => 'Detalhes Adicionais do Utilizador',

        'buttons'   => [
            'back' => '<span class="hidden-xs hidden-sm">Voltar a </span><span class="hidden-xs">Ativiadde Registada</span>',
        ],

        'labels' => [
            'userRoles'     => 'User Roles', # TODO
            'userLevel'     => 'Nível de Utilizador',
        ],

        'list-group' => [
            'labels'    => [
                'id'            => 'Activity Log ID:',
                'ip'            => 'Endereço de Ip',
                'description'   => 'Descrição',
                'userType'      => 'Tipo de Utilziador',
                'userId'        => 'Id do Utilizador',
                'route'         => 'Rota',
                'agent'         => 'Utilizador Agente',
                'locale'        => 'Linguagem',
                'referer'       => 'Referenciador',

                'methodType'    => 'Tipo de Método',
                'createdAt'     => 'Tempo do Evento',
                'updatedAt'     => 'Atualizado a',
                'deletedAt'     => 'Apagado a',
                'timePassed'    => 'Tempo Passado',
                'userName'      => 'Nome de Utilizador',
                'userFirstName' => 'Primeiro Nome',
                'userLastName'  => 'Último Nome',
                'userFulltName' => 'Nome Complete',
                'userEmail'     => 'Email do Utilizador',
                'userSignupIp'  => 'Ip de Registo',
                'userCreatedAt' => 'Criado',
                'userUpdatedAt' => 'Atualizado',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Logger Modals
    |--------------------------------------------------------------------------
    */

    'modals' => [
        'shared' => [
            'btnCancel'   => 'Cancelar',
            'btnConfirm'  => 'Confirmado',
            'areYouSure'  => 'Tem a certeza?',
        ],
        'clearLog' => [
            'title'     => 'Limpar Atividade Regista',
            'message'   => 'Tem a certeza que quer limpar o registo de atividade?',
        ],
        'deleteLog' => [
            'title'     => 'Apagar Permanentemente a Atividade Regista',
            'message'   => 'Tem a certeza que quer APAGAR permanentemente a atividade de registo?',
        ],
        'restoreLog' => [
            'title'     => 'Restaurar Atividade Registada Limpa',
            'message'   => 'Tem a certeza que quer restaurar a atividade de registo que foi limpa?',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Logger Flash Messages
    |--------------------------------------------------------------------------
    */

    'messages' => [
        'logClearedSuccessfuly'   => 'Atividade Registada limpa com sucesso',
        'logDestroyedSuccessfuly' => 'Atividade Registada apagada com sucesso',
        'logRestoredSuccessfuly'  => 'Atividade Registada restaurada com sucesso',
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Logger Cleared Dashboard Language Lines
    |--------------------------------------------------------------------------
    */

    'dashboardCleared' => [
        'title'     => 'Atividade Registada Limpa',
        'subtitle'  => 'Eventos Limpos',

        'menu'      => [
            'deleteAll'  => 'Apagar toda a Ativiadae Registada',
            'restoreAll' => 'Restaurar toda a Atividade RegistadaRestore All Activity Logs',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Logger Pagination Language Lines
    |--------------------------------------------------------------------------
    */
    'pagination' => [
        'countText' => 'A mostrar :firstItem - :lastItem de :total resultados <small>(:perPage por página)</small>',
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Logger Activities
    |--------------------------------------------------------------------------
    */
    'activities' => [
        'authenticated' =>'Authenticated Activity',
        'authentication_attempt' => 'Authenticated Attempt',
        'failed_login' => 'Failed Login Attempt',
        'locked_out' => 'Locked Out',
        'reset_password' => 'Reset Password',
        'logged_in' => 'Logged In',
        'logged_out' => 'Logged Out',
    ],
];

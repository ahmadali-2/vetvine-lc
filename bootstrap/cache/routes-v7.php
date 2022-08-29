<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k9ieG5RjOZJDRDtw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L7XOjHwr3DHmfILU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile-information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-profile-information.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CHXE7vsASGO5A2hH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-password-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/two-factor-challenge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZgAq7OMXewMBlBPO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.enable',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.disable',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-qr-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.qr-code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-secret-key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.secret-key',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-recovery-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.recovery-codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CaGE4jLU5FbK9OpX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::klmos7XXnTmGOUTW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::74iHEduV6D4MbNiO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pbZlPvl9Zw9WIX5m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notify/demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jHN5dhrOhiCpw6Su',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chatify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::agXWCD1VnY89NAVL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pusher.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'messages.seen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/updateContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'star',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'favorites',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shared',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'conversation.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/deleteMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'avatar.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'activeStatus.set',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.pusher.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.idInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.send.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fetch.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.messages.seen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contacts.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.star',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.favorites',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shared',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.conversation.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.avatar.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chatify/api/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.activeStatus.set',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/captcha-handler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NRE85aLBK82AEhRe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/simple-captcha-handler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CecCiftdoEcgHQ3C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DVNIBPHkOag2Vxi8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OL6hfighb4qbjXk3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D1771gZ6OxEw5vsd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hkrpXPYmhQMoOm2U',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QXNuRcduoMjNO75a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seed/timezones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2jWvBoqoYJWfCuuI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seed/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyoYmOgCXligxRrQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seed/membertypes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iOC3IPvKQqizJxwB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seed/privacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EfTlv04wo7g2EGR5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/phpinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CM3t0erd0ZrPwDYL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contactusschedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kw8Sul5i7R0LxbIk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/run-queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sFB5qVmaHaYNPlzL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/must-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verifyEmailPopup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sexNlA2XG2uhh52y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-user-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkusertype',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loginroute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loginroute',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-chatify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admindashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/sample-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sampleform',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/sample-table' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sampletable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/general-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generalsetting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/store-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storegeneralsetting',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/generalsettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generalsettings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generalsettings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/generalsettings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generalsettings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/ads-campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-campaign.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ads-campaign.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/ads-campaign/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-campaign.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/ads-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-manage.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ads-manage.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/ads-manage/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-manage.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'membership.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/membership/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/membership-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'membership-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/membership-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/guest-registration-fee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'guestRegistrationFee',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/update-guest-registration-fee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateRegistrationFee',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/network' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'network',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/unapproved-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unapproved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/approved-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'approveuser',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/member-permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'memberstatus',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/member-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membertype',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/update-video-rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateVideoRating',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/forums-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/forums-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/forums' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/forums/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/announcements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/announcements/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/manageuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manageuser.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'manageuser.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/manageuser/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manageuser.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/subscribed-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribed-users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subscribed-users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/subscribed-users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribed-users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'news.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/news/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/naveed-testing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/webinars-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars-category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'webinars-category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/webinars-category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars-category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/webinars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/webinars/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/sponsors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/sponsors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/videos-on-demand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos-on-demand.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videos-on-demand.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/videos-on-demand/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos-on-demand.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/videodata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videoajaxdata',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/buyevent-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyevent-users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'buyevent-users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/buyevent-users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyevent-users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/terms-and-conditions/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'TermsCondition.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/terms-and-conditions/add-terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'TermsCondition.create.db',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy-policy.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'privacy-policy.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/privacy-policy/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy-policy.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/coupon-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon-code.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coupon-code.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/coupon-code/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon-code.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/manageuser/group/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group.mail.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/manageuser/group/mail/sent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group.mail.sent',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/email-compaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'emailCompaign',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/cms-pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.pages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/cms-page/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/cms-page/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.page.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin/email/compaign/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email.compaign.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/next-guest-screen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nextGuestScreen',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/calendar-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EccLKb4NQdAYS1Km',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/calendar-crud-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bR1tfEoP71kcmuSb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-vetvine-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZULM7Vdwob5TbkK9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/member-home-paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member_home_paginate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mftXvuWIHZBJrbXL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/share-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'share.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/frontend-forums' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forumsfrontend',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forums-posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums-posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forums-posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search-form-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchFormCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search-category-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchCategoryForm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search-form-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchFormPosts',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/why-vetvine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'why_vetvine',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/grow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'grow',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thrive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thrive',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/heal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'heal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms&conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy&policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacypolicy.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/upcoming-webinars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upcoming_webinars',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/load-other-timezones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yjpRvZYCvfOIa5JV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submitPayment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payementwebinars',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/publications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upcoming_publications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/educations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search_educations',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/eventpayments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'eventpayments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'eventpayments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/eventpayments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'eventpayments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsfrontend',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchNews',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/show-more' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showmore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/show-comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showComments',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/videos-on-demand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videosOnDemand',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ce-archives' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ceArchives',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comment/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/savelike' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'likesave',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/getEventPrice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getEventPrice',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/getVideoPrice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getVideoPrice',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userdashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/member-home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member_home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/myupcomming-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'myupcomming.events',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/mypast-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypast.events',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/personelinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'personelinfo.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'personelinfo.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/personelinfo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'personelinfo.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/profile-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vetvineUserProfile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vetvineUserChat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/chatify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zIanlIuOX9Rui00X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vetvineUserNotifications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/apply_couponcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usermemberships.applycouponcode',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/updateprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateprofile.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'updateprofile.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/updateprofile/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateprofile.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/usermemberships' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usermemberships.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'usermemberships.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/usermemberships/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usermemberships.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'general.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/general/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/privacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/privacy/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/post/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/reply/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reply.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/review-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reviewstore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/review-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'review.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/update-comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/edit-comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change_password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vetvine-member/update-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateUserPassword',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/videos-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos.search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rating-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rating.videos',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mark-as-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'read.notification',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/licensure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'licensure.show',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q5CaffbvcxPUBMlN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/reset\\-password/([^/]++)(*:32)|/e(?|mail/verify/([^/]++)/([^/]++)(*:73)|ventpayments/([^/]++)(?|(*:104)|/edit(*:117)|(*:125)))|/l(?|ivewire/(?|message/([^/]++)(*:167)|preview\\-file/([^/]++)(*:197))|ogin/([^/]++)/callback(*:228))|/c(?|hatify/(?|download/([^/]++)(*:269)|group/([^/]++)(*:291)|([^/]++)(*:307)|api/download/([^/]++)(*:336))|ategory/forum/posts/([^/]++)(*:373))|/s(?|ocial/([^/]++)/([^/]++)/([^/]++)(*:419)|uperadmin/(?|generalsettings/([^/]++)(?|(*:467)|/edit(*:480)|(*:488))|a(?|ds\\-(?|campaign/([^/]++)(?|(*:528)|/edit(*:541)|(*:549))|manage/([^/]++)(?|(*:576)|/edit(*:589)|(*:597)))|nnouncements/([^/]++)(?|(*:631)|/edit(*:644)|(*:652)))|m(?|ember(?|ship(?|/([^/]++)(?|(*:693)|/edit(*:706)|(*:714))|\\-category/([^/]++)(?|(*:745)|/edit(*:758)|(*:766)))|\\-permissions/([^/]++)(*:798))|anageuser/([^/]++)(?|(*:828)|/edit(*:841)|(*:849)))|delete\\-users/([^/]++)(*:881)|c(?|hange\\-users\\-type/([^/]++)(*:920)|oupon\\-code/([^/]++)(?|(*:951)|/edit(*:964)|(*:972)))|u(?|pdate\\-users\\-type/([^/]++)(*:1013)|ser(?|\\-history/([^/]++)(*:1046)|event\\-history/([^/]++)(*:1078)))|forums(?|\\-category/([^/]++)(?|(*:1120)|/edit(*:1134)|(*:1143))|/([^/]++)(?|(*:1165)|/edit(*:1179)|(*:1188)))|s(?|ubscribed\\-users/([^/]++)(?|(*:1231)|/edit(*:1245)|(*:1254))|ponsors/([^/]++)(?|(*:1283)|/edit(*:1297)|(*:1306)))|news/([^/]++)(?|(*:1333)|/edit(*:1347)|(*:1356))|webinars(?|\\-category/([^/]++)(?|(*:1399)|/edit(*:1413)|(*:1422))|/([^/]++)(?|(*:1444)|/edit(*:1458)|(*:1467)))|videos\\-on\\-demand/([^/]++)(?|(*:1508)|/edit(*:1522)|(*:1531))|buyevent\\-users/([^/]++)(?|(*:1568)|/edit(*:1582)|(*:1591))|privacy\\-policy/([^/]++)(?|(*:1628)|/edit(*:1642)|(*:1651))))|/forum(?|s(?|/([^/]++)(*:1685)|\\-posts/([^/]++)(?|(*:1713)|/edit(*:1727)|(*:1736)))|/posts/([^/]++)(*:1762))|/pages/([^/]++)(*:1787)|/upcoming\\-webinars\\-details/([^/]++)(*:1833)|/v(?|etvine\\-member/(?|p(?|ersonelinfo/([^/]++)(?|(*:1892)|/edit(*:1906)|(*:1915))|rivacy/([^/]++)(?|(*:1943)|/edit(*:1957)|(*:1966))|ost/([^/]++)(?|(*:1991)|/edit(*:2005)|(*:2014)))|u(?|pdateprofile/([^/]++)(?|(*:2053)|/edit(*:2067)|(*:2076))|sermemberships/([^/]++)(?|(*:2112)|/edit(*:2126)|(*:2135)))|general/([^/]++)(?|(*:2165)|/edit(*:2179)|(*:2188))|c(?|reate\\-forumpost/([^/]++)(*:2227)|omment\\-destroy/([^/]++)(*:2260))|forumpostlist/([^/]++)(*:2292))|ideo\\-description/([^/]+)([^/]++)(*:2335)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'eventpayments.show',
          ),
          1 => 
          array (
            0 => 'eventpayment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'eventpayments.edit',
          ),
          1 => 
          array (
            0 => 'eventpayment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'eventpayments.update',
          ),
          1 => 
          array (
            0 => 'eventpayment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'eventpayments.destroy',
          ),
          1 => 
          array (
            0 => 'eventpayment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      167 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LXn2gQev7r1PTwoH',
          ),
          1 => 
          array (
            0 => 'belong',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      336 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getForumcategoryPosts',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F6IZUgEZRbF1nyHv',
          ),
          1 => 
          array (
            0 => 'belong',
            1 => 'user_type',
            2 => 'network_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generalsettings.show',
          ),
          1 => 
          array (
            0 => 'generalsetting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generalsettings.edit',
          ),
          1 => 
          array (
            0 => 'generalsetting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generalsettings.update',
          ),
          1 => 
          array (
            0 => 'generalsetting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generalsettings.destroy',
          ),
          1 => 
          array (
            0 => 'generalsetting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-campaign.show',
          ),
          1 => 
          array (
            0 => 'ads_campaign',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-campaign.edit',
          ),
          1 => 
          array (
            0 => 'ads_campaign',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-campaign.update',
          ),
          1 => 
          array (
            0 => 'ads_campaign',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ads-campaign.destroy',
          ),
          1 => 
          array (
            0 => 'ads_campaign',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-manage.show',
          ),
          1 => 
          array (
            0 => 'ads_manage',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-manage.edit',
          ),
          1 => 
          array (
            0 => 'ads_manage',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads-manage.update',
          ),
          1 => 
          array (
            0 => 'ads_manage',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ads-manage.destroy',
          ),
          1 => 
          array (
            0 => 'ads_manage',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.show',
          ),
          1 => 
          array (
            0 => 'announcement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.edit',
          ),
          1 => 
          array (
            0 => 'announcement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.update',
          ),
          1 => 
          array (
            0 => 'announcement',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.destroy',
          ),
          1 => 
          array (
            0 => 'announcement',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.show',
          ),
          1 => 
          array (
            0 => 'membership',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.edit',
          ),
          1 => 
          array (
            0 => 'membership',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.update',
          ),
          1 => 
          array (
            0 => 'membership',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'membership.destroy',
          ),
          1 => 
          array (
            0 => 'membership',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership-category.show',
          ),
          1 => 
          array (
            0 => 'membership_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      758 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership-category.edit',
          ),
          1 => 
          array (
            0 => 'membership_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership-category.update',
          ),
          1 => 
          array (
            0 => 'membership_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'membership-category.destroy',
          ),
          1 => 
          array (
            0 => 'membership_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'memberpermissions',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manageuser.show',
          ),
          1 => 
          array (
            0 => 'manageuser',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manageuser.edit',
          ),
          1 => 
          array (
            0 => 'manageuser',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      849 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manageuser.update',
          ),
          1 => 
          array (
            0 => 'manageuser',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'manageuser.destroy',
          ),
          1 => 
          array (
            0 => 'manageuser',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7el7vtMhnv8XAQ2d',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changeusertype',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon-code.show',
          ),
          1 => 
          array (
            0 => 'coupon_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon-code.edit',
          ),
          1 => 
          array (
            0 => 'coupon_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon-code.update',
          ),
          1 => 
          array (
            0 => 'coupon_code',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coupon-code.destroy',
          ),
          1 => 
          array (
            0 => 'coupon_code',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateusertype',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1046 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userhistory',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usereventhistory',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-category.show',
          ),
          1 => 
          array (
            0 => 'forums_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-category.edit',
          ),
          1 => 
          array (
            0 => 'forums_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-category.update',
          ),
          1 => 
          array (
            0 => 'forums_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums-category.destroy',
          ),
          1 => 
          array (
            0 => 'forums_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.show',
          ),
          1 => 
          array (
            0 => 'forum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.edit',
          ),
          1 => 
          array (
            0 => 'forum',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums.update',
          ),
          1 => 
          array (
            0 => 'forum',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums.destroy',
          ),
          1 => 
          array (
            0 => 'forum',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribed-users.show',
          ),
          1 => 
          array (
            0 => 'subscribed_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribed-users.edit',
          ),
          1 => 
          array (
            0 => 'subscribed_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribed-users.update',
          ),
          1 => 
          array (
            0 => 'subscribed_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subscribed-users.destroy',
          ),
          1 => 
          array (
            0 => 'subscribed_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.show',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.edit',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.update',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sponsors.destroy',
          ),
          1 => 
          array (
            0 => 'sponsor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.show',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.edit',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.update',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'news.destroy',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1399 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars-category.show',
          ),
          1 => 
          array (
            0 => 'webinars_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars-category.edit',
          ),
          1 => 
          array (
            0 => 'webinars_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars-category.update',
          ),
          1 => 
          array (
            0 => 'webinars_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'webinars-category.destroy',
          ),
          1 => 
          array (
            0 => 'webinars_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.show',
          ),
          1 => 
          array (
            0 => 'webinar',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.edit',
          ),
          1 => 
          array (
            0 => 'webinar',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.update',
          ),
          1 => 
          array (
            0 => 'webinar',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.destroy',
          ),
          1 => 
          array (
            0 => 'webinar',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos-on-demand.show',
          ),
          1 => 
          array (
            0 => 'videos_on_demand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos-on-demand.edit',
          ),
          1 => 
          array (
            0 => 'videos_on_demand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'videos-on-demand.update',
          ),
          1 => 
          array (
            0 => 'videos_on_demand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'videos-on-demand.destroy',
          ),
          1 => 
          array (
            0 => 'videos_on_demand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyevent-users.show',
          ),
          1 => 
          array (
            0 => 'buyevent_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyevent-users.edit',
          ),
          1 => 
          array (
            0 => 'buyevent_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyevent-users.update',
          ),
          1 => 
          array (
            0 => 'buyevent_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'buyevent-users.destroy',
          ),
          1 => 
          array (
            0 => 'buyevent_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy-policy.show',
          ),
          1 => 
          array (
            0 => 'privacy_policy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy-policy.edit',
          ),
          1 => 
          array (
            0 => 'privacy_policy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy-policy.update',
          ),
          1 => 
          array (
            0 => 'privacy_policy',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'privacy-policy.destroy',
          ),
          1 => 
          array (
            0 => 'privacy_policy',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getForums',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-posts.show',
          ),
          1 => 
          array (
            0 => 'forums_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-posts.edit',
          ),
          1 => 
          array (
            0 => 'forums_post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forums-posts.update',
          ),
          1 => 
          array (
            0 => 'forums_post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forums-posts.destroy',
          ),
          1 => 
          array (
            0 => 'forums_post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getForumPosts',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1787 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cms.page.content',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upcoming_details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'personelinfo.show',
          ),
          1 => 
          array (
            0 => 'personelinfo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'personelinfo.edit',
          ),
          1 => 
          array (
            0 => 'personelinfo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'personelinfo.update',
          ),
          1 => 
          array (
            0 => 'personelinfo',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'personelinfo.destroy',
          ),
          1 => 
          array (
            0 => 'personelinfo',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.show',
          ),
          1 => 
          array (
            0 => 'privacy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.edit',
          ),
          1 => 
          array (
            0 => 'privacy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.update',
          ),
          1 => 
          array (
            0 => 'privacy',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.destroy',
          ),
          1 => 
          array (
            0 => 'privacy',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.show',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateprofile.show',
          ),
          1 => 
          array (
            0 => 'updateprofile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateprofile.edit',
          ),
          1 => 
          array (
            0 => 'updateprofile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateprofile.update',
          ),
          1 => 
          array (
            0 => 'updateprofile',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'updateprofile.destroy',
          ),
          1 => 
          array (
            0 => 'updateprofile',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usermemberships.show',
          ),
          1 => 
          array (
            0 => 'usermembership',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usermemberships.edit',
          ),
          1 => 
          array (
            0 => 'usermembership',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usermemberships.update',
          ),
          1 => 
          array (
            0 => 'usermembership',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'usermemberships.destroy',
          ),
          1 => 
          array (
            0 => 'usermembership',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.show',
          ),
          1 => 
          array (
            0 => 'general',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.edit',
          ),
          1 => 
          array (
            0 => 'general',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.update',
          ),
          1 => 
          array (
            0 => 'general',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'general.destroy',
          ),
          1 => 
          array (
            0 => 'general',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'createforumpost',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forumpostlist',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video_desc',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:476:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:257:"function () {
    if (\\session()->get(\'emailError\')) {
        $controller = new \\App\\Http\\Controllers\\Controller();
        $controller->dangerMessage(\'Email not valid!\');
        \\session()->forget(\'emailError\');
    }
    return \\view(\'frontend.home\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000111e0000000000000000";}";s:4:"hash";s:44:"jPb2KhU6VR+BUp8nwLke1o2Kc0YqX8exe+qYpppE5ck=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k9ieG5RjOZJDRDtw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:login',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::k9ieG5RjOZJDRDtw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L7XOjHwr3DHmfILU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::L7XOjHwr3DHmfILU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\EmailVerificationPromptController@__invoke',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\EmailVerificationPromptController@__invoke',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify/{id}/{hash}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\VerifyEmailController@__invoke',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\VerifyEmailController@__invoke',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'throttle:6,1',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\EmailVerificationNotificationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\EmailVerificationNotificationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-profile-information.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile-information',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-profile-information.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CHXE7vsASGO5A2hH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CHXE7vsASGO5A2hH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirmed-password-status',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZgAq7OMXewMBlBPO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:two-factor',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZgAq7OMXewMBlBPO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.enable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirmed-two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.disable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.qr-code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-qr-code',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.qr-code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.secret-key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-secret-key',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.secret-key',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.recovery-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.recovery-codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CaGE4jLU5FbK9OpX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CaGE4jLU5FbK9OpX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::klmos7XXnTmGOUTW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::klmos7XXnTmGOUTW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::74iHEduV6D4MbNiO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::74iHEduV6D4MbNiO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pbZlPvl9Zw9WIX5m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::pbZlPvl9Zw9WIX5m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jHN5dhrOhiCpw6Su' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notify/demo',
      'action' => 
      array (
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'generated::jHN5dhrOhiCpw6Su',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'notify::notify',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chatify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@index',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@index',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'chatify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::agXWCD1VnY89NAVL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@idFetchData',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@idFetchData',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'generated::agXWCD1VnY89NAVL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@send',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@send',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@fetch',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@fetch',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'fetch.messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@download',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@download',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'attachments.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@pusherAuth',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@pusherAuth',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'pusher.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@seen',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@seen',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'messages.seen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@getContacts',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@getContacts',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'contacts.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/updateContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@updateContactItem',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@updateContactItem',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'contacts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@favorite',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@favorite',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'star',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@getFavorites',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@getFavorites',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'favorites',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@search',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@search',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@sharedPhotos',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@sharedPhotos',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'shared',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@deleteConversation',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@deleteConversation',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'conversation.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/deleteMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@deleteMessage',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@deleteMessage',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'message.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@updateSettings',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@updateSettings',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'avatar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@setActiveStatus',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@setActiveStatus',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'activeStatus.set',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify/group/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@index',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@index',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'group',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\MessagesController@index',
        'controller' => 'Chatify\\Http\\Controllers\\MessagesController@index',
        'namespace' => 'Chatify\\Http\\Controllers',
        'prefix' => 'chatify',
        'where' => 
        array (
        ),
        'as' => 'user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@pusherAuth',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@pusherAuth',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.pusher.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.idInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@idFetchData',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@idFetchData',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.idInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@send',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@send',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@fetch',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@fetch',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.fetch.messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify/api/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@download',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@download',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.attachments.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@seen',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@seen',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.messages.seen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify/api/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@getContacts',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@getContacts',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.contacts.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@favorite',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@favorite',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.star',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@getFavorites',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@getFavorites',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.favorites',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chatify/api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@search',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@search',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@sharedPhotos',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@sharedPhotos',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.shared',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@deleteConversation',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@deleteConversation',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.conversation.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@updateSettings',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@updateSettings',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.avatar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chatify/api/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@setActiveStatus',
        'controller' => 'Chatify\\Http\\Controllers\\Api\\MessagesController@setActiveStatus',
        'namespace' => 'Chatify\\Http\\Controllers\\Api',
        'prefix' => 'chatify/api',
        'where' => 
        array (
        ),
        'as' => 'api.activeStatus.set',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NRE85aLBK82AEhRe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha-handler',
      'action' => 
      array (
        'uses' => 'LaravelCaptcha\\Controllers\\CaptchaHandlerController@index',
        'controller' => 'LaravelCaptcha\\Controllers\\CaptchaHandlerController@index',
        'as' => 'generated::NRE85aLBK82AEhRe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CecCiftdoEcgHQ3C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'simple-captcha-handler',
      'action' => 
      array (
        'uses' => 'LaravelCaptcha\\Controllers\\SimpleCaptchaHandlerController@index',
        'controller' => 'LaravelCaptcha\\Controllers\\SimpleCaptchaHandlerController@index',
        'as' => 'generated::CecCiftdoEcgHQ3C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DVNIBPHkOag2Vxi8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::DVNIBPHkOag2Vxi8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OL6hfighb4qbjXk3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011010000000000000000";}";s:4:"hash";s:44:"Fqq7y2Nm6q5taQoNBi86rev8VoIMhYplZ0XsqkwgU5k=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OL6hfighb4qbjXk3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D1771gZ6OxEw5vsd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:507:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:288:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'route:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'cache:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'view:clear\');
    return \'clear done\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011030000000000000000";}";s:4:"hash";s:44:"zGoh27UJSMy6xSUJaK3kwLbZgA/srexRGyM8UUgsKZI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D1771gZ6OxEw5vsd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hkrpXPYmhQMoOm2U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:296:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:78:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:cache\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011050000000000000000";}";s:4:"hash";s:44:"5D8bnOs1oBFoVTHCLvO2YVHJ2rNpUHe5GId64b9g4ss=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hkrpXPYmhQMoOm2U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QXNuRcduoMjNO75a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:328:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:109:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'migrate\');
    return \'migrated successfully\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011070000000000000000";}";s:4:"hash";s:44:"Ol2hqAu5BxXJ6HwgxXq1wpSZuNN9ErUs5rg4z/7yrYg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QXNuRcduoMjNO75a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2jWvBoqoYJWfCuuI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seed/timezones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:353:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:134:"function () {
    $wSeeder = new \\Database\\Seeders\\TimeZoneSeeder();
    $wSeeder->run();
    return \'Timezone seeded successfully\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011090000000000000000";}";s:4:"hash";s:44:"fqnw1VTpbokKSe2N4HiFXr57MeQJH1k7NGUU8Feta5g=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2jWvBoqoYJWfCuuI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iyoYmOgCXligxRrQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seed/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:365:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:146:"function () {
    $wSeeder = new \\Database\\Seeders\\MemberPermissionsSeeder();
    $wSeeder->run();
    return \'Permissions seeded successfully\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000110b0000000000000000";}";s:4:"hash";s:44:"VrBFdJ82sy/LtamkDoChButt9JNAf3q58KOzla6rI2Y=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iyoYmOgCXligxRrQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iOC3IPvKQqizJxwB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seed/membertypes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:352:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:133:"function () {
    $wSeeder = new \\Database\\Seeders\\MemberTypeSeeder();
    $wSeeder->run();
    return \'Types seeded successfully\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000110d0000000000000000";}";s:4:"hash";s:44:"I1uhGt/W/iCOLygUn06lFYc8mJ+JFr90WJxXJKr1y+k=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iOC3IPvKQqizJxwB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EfTlv04wo7g2EGR5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seed/privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:358:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:139:"function () {
    $wSeeder = new \\Database\\Seeders\\PrivacyPolicySeeder();
    $wSeeder->run();
    return \'Timezone seeded successfully\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000110f0000000000000000";}";s:4:"hash";s:44:"GqR2nVTFHPKQbkEkQnBuYqSWyrXN75503P+adpzfy6k=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EfTlv04wo7g2EGR5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CM3t0erd0ZrPwDYL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'phpinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:249:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:31:"function () {
    \\phpinfo();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011110000000000000000";}";s:4:"hash";s:44:"7AUqhnEodQPKvsSuX9zgRkKOoPa2oTpElAs57uB0YlY=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CM3t0erd0ZrPwDYL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kw8Sul5i7R0LxbIk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contactusschedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:357:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:138:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'schedule:run\');
    return \'Contact Us Cron Job Schedule Run Successfully\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011130000000000000000";}";s:4:"hash";s:44:"G3O4n5b7NQlpVX1yvyFLjhnWpJc6ArKA/yuWt4e2GpQ=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kw8Sul5i7R0LxbIk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sFB5qVmaHaYNPlzL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'run-queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:327:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:108:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'queue:listen\');
    return \'Queue Listening\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011150000000000000000";}";s:4:"hash";s:44:"jNypTR0502WpGaKuzcwiddO9ibBq4K7VpeVN5k4xgxw=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sFB5qVmaHaYNPlzL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verifyEmailPopup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'must-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\UsersRegistrationController@verifyEmailPopup',
        'controller' => 'App\\Http\\Controllers\\Auth\\UsersRegistrationController@verifyEmailPopup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verifyEmailPopup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sexNlA2XG2uhh52y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permission',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:233:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:15:"function () {
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000123b0000000000000000";}";s:4:"hash";s:44:"z29iMTpBvNgK3rVppYDykLDTU71xcIdkYF/8EAPC1U8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sexNlA2XG2uhh52y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F6IZUgEZRbF1nyHv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social/{belong}/{user_type}/{network_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialController@redirect',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialController@redirect',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::F6IZUgEZRbF1nyHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LXn2gQev7r1PTwoH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/{belong}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialController@handleProviderCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LXn2gQev7r1PTwoH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkusertype' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check-user-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\UserTypeController@checkType',
        'controller' => 'App\\Http\\Controllers\\Auth\\UserTypeController@checkType',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkusertype',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'loginroute' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loginroute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\UsersRegistrationController@userLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\UsersRegistrationController@userLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'loginroute',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-chatify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:270:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function () {
    return \\view("admins.chat.app");
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011200000000000000000";}";s:4:"hash";s:44:"TgbSlMiZ7ttexXUAhYXH8oSv1y5PlbYI8RyYFxILelE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admindashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:dashboard',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@dashboard',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'admindashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sampleform' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/sample-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:dashboard',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@sampleForm',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@sampleForm',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'sampleform',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sampletable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/sample-table',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:dashboard',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@sampleTable',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@sampleTable',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'sampletable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generalsetting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/general-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@generalsetting',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@generalsetting',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'generalsetting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storegeneralsetting' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/store-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@storegeneralsetting',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@storegeneralsetting',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'storegeneralsetting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generalsettings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/generalsettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'generalsettings.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generalsettings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/generalsettings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'generalsettings.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generalsettings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/generalsettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'generalsettings.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generalsettings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/generalsettings/{generalsetting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'generalsettings.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generalsettings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/generalsettings/{generalsetting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'generalsettings.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generalsettings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/generalsettings/{generalsetting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'generalsettings.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generalsettings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/generalsettings/{generalsetting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'generalsettings.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\AdminProfileController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-campaign.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/ads-campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-campaign.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-campaign.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/ads-campaign/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-campaign.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-campaign.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/ads-campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-campaign.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-campaign.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/ads-campaign/{ads_campaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-campaign.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-campaign.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/ads-campaign/{ads_campaign}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-campaign.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-campaign.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/ads-campaign/{ads_campaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-campaign.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-campaign.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/ads-campaign/{ads_campaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-campaign.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\CampaignController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-manage.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/ads-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-manage.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-manage.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/ads-manage/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-manage.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-manage.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/ads-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-manage.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-manage.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/ads-manage/{ads_manage}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-manage.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-manage.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/ads-manage/{ads_manage}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-manage.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-manage.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/ads-manage/{ads_manage}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-manage.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads-manage.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/ads-manage/{ads_manage}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:ads',
        ),
        'as' => 'ads-manage.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdsCampaign\\ManageAdController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/membership/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/membership/{membership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/membership/{membership}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/membership/{membership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/membership/{membership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlansController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/membership-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership-category.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/membership-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership-category.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/membership-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership-category.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership-category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/membership-category/{membership_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership-category.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership-category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/membership-category/{membership_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership-category.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership-category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/membership-category/{membership_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership-category.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership-category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/membership-category/{membership_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'membership-category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\MemberShipPlanCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'guestRegistrationFee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/guest-registration-fee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Guest\\GuestController@guestRegistrationFee',
        'controller' => 'App\\Http\\Controllers\\Admins\\Guest\\GuestController@guestRegistrationFee',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'guestRegistrationFee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateRegistrationFee' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/update-guest-registration-fee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Guest\\GuestController@updateRegistrationFee',
        'controller' => 'App\\Http\\Controllers\\Admins\\Guest\\GuestController@updateRegistrationFee',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'updateRegistrationFee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'network' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/network',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@network',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@network',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'network',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unapproved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/unapproved-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@unapprovedUsers',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@unapprovedUsers',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'unapproved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'approveuser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/approved-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@approvedUsers',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@approvedUsers',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'approveuser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'memberstatus' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/member-permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Members\\MemberTypeController@MemberStatus',
        'controller' => 'App\\Http\\Controllers\\Admins\\Members\\MemberTypeController@MemberStatus',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'memberstatus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membertype' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/member-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Members\\MemberTypeController@MemberTypes',
        'controller' => 'App\\Http\\Controllers\\Admins\\Members\\MemberTypeController@MemberTypes',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'membertype',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'memberpermissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/member-permissions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Members\\MemberTypeController@MemberPermissions',
        'controller' => 'App\\Http\\Controllers\\Admins\\Members\\MemberTypeController@MemberPermissions',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'memberpermissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7el7vtMhnv8XAQ2d' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/delete-users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@deleteUser',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@deleteUser',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'generated::7el7vtMhnv8XAQ2d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changeusertype' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/change-users-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@changeUserType',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@changeUserType',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'changeusertype',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateusertype' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/update-users-type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@updateUserType',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@updateUserType',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'updateusertype',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateVideoRating' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/update-video-rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@updateVideoRating',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@updateVideoRating',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'updateVideoRating',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/forums-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'forums-category.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/forums-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'forums-category.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/forums-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'forums-category.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/forums-category/{forums_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'forums-category.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/forums-category/{forums_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'forums-category.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/forums-category/{forums_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'forums-category.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/forums-category/{forums_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'forums-category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/forums',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:forums',
        ),
        'as' => 'forums.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/forums/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:forums',
        ),
        'as' => 'forums.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/forums',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:forums',
        ),
        'as' => 'forums.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/forums/{forum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:forums',
        ),
        'as' => 'forums.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/forums/{forum}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:forums',
        ),
        'as' => 'forums.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/forums/{forum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:forums',
        ),
        'as' => 'forums.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/forums/{forum}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:forums',
        ),
        'as' => 'forums.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/announcements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'announcements.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/announcements/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'announcements.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/announcements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'announcements.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/announcements/{announcement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'announcements.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/announcements/{announcement}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'announcements.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/announcements/{announcement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'announcements.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/announcements/{announcement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'announcements.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Announcement\\AnnouncementController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manageuser.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/manageuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'manageuser.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manageuser.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/manageuser/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'manageuser.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manageuser.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/manageuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'manageuser.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manageuser.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/manageuser/{manageuser}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'manageuser.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manageuser.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/manageuser/{manageuser}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'manageuser.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manageuser.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/manageuser/{manageuser}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'manageuser.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manageuser.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/manageuser/{manageuser}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'manageuser.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribed-users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/subscribed-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:membership_plans',
        ),
        'as' => 'subscribed-users.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribed-users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/subscribed-users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:membership_plans',
        ),
        'as' => 'subscribed-users.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribed-users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/subscribed-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:membership_plans',
        ),
        'as' => 'subscribed-users.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribed-users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/subscribed-users/{subscribed_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:membership_plans',
        ),
        'as' => 'subscribed-users.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribed-users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/subscribed-users/{subscribed_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:membership_plans',
        ),
        'as' => 'subscribed-users.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribed-users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/subscribed-users/{subscribed_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:membership_plans',
        ),
        'as' => 'subscribed-users.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribed-users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/subscribed-users/{subscribed_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:membership_plans',
        ),
        'as' => 'subscribed-users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userhistory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/user-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@userHistory',
        'controller' => 'App\\Http\\Controllers\\Admins\\Memberships\\BuyMemberShipPlanController@userHistory',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'userhistory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'news.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/news/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'news.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'news.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'news.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/news/{news}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'news.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'news.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'news.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/naveed-testing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@testing',
        'controller' => 'App\\Http\\Controllers\\Admins\\AdminDashboardController@testing',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'testing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars-category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/webinars-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:webinars',
        ),
        'as' => 'webinars-category.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars-category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/webinars-category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:webinars',
        ),
        'as' => 'webinars-category.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars-category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/webinars-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:webinars',
        ),
        'as' => 'webinars-category.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars-category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/webinars-category/{webinars_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:webinars',
        ),
        'as' => 'webinars-category.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars-category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/webinars-category/{webinars_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:webinars',
        ),
        'as' => 'webinars-category.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars-category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/webinars-category/{webinars_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:webinars',
        ),
        'as' => 'webinars-category.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars-category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/webinars-category/{webinars_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
          3 => 'permission:webinars',
        ),
        'as' => 'webinars-category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/webinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'webinars.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/webinars/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'webinars.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/webinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'webinars.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/webinars/{webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'webinars.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/webinars/{webinar}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'webinars.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/webinars/{webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'webinars.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'webinars.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/webinars/{webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'webinars.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\EventController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/sponsors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'sponsors.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/sponsors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'sponsors.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/sponsors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'sponsors.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/sponsors/{sponsor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'sponsors.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/sponsors/{sponsor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'sponsors.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/sponsors/{sponsor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'sponsors.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/sponsors/{sponsor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'sponsors.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\SponserController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos-on-demand.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/videos-on-demand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'videos-on-demand.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos-on-demand.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/videos-on-demand/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'videos-on-demand.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos-on-demand.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/videos-on-demand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'videos-on-demand.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos-on-demand.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/videos-on-demand/{videos_on_demand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'videos-on-demand.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos-on-demand.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/videos-on-demand/{videos_on_demand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'videos-on-demand.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos-on-demand.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/videos-on-demand/{videos_on_demand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'videos-on-demand.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos-on-demand.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/videos-on-demand/{videos_on_demand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'videos-on-demand.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videoajaxdata' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/videodata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@videodata',
        'controller' => 'App\\Http\\Controllers\\Admins\\VideosOnDemand\\VideosOnDemandController@videodata',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'videoajaxdata',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyevent-users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/buyevent-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'buyevent-users.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyevent-users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/buyevent-users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'buyevent-users.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyevent-users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/buyevent-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'buyevent-users.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyevent-users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/buyevent-users/{buyevent_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'buyevent-users.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyevent-users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/buyevent-users/{buyevent_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'buyevent-users.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyevent-users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/buyevent-users/{buyevent_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'buyevent-users.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyevent-users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/buyevent-users/{buyevent_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'buyevent-users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usereventhistory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/userevent-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@usereventHistory',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\BuyEventController@usereventHistory',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'usereventhistory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'TermsCondition.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/terms-and-conditions/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPageController@TermsAndConditionsAdd',
        'controller' => 'App\\Http\\Controllers\\StaticPageController@TermsAndConditionsAdd',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'TermsCondition.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'TermsCondition.create.db' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/terms-and-conditions/add-terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPageController@TermsAndConditionsAddDb',
        'controller' => 'App\\Http\\Controllers\\StaticPageController@TermsAndConditionsAddDb',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'TermsCondition.create.db',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy-policy.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'privacy-policy.index',
        'uses' => 'App\\Http\\Controllers\\PrivacyPolicyController@index',
        'controller' => 'App\\Http\\Controllers\\PrivacyPolicyController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy-policy.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/privacy-policy/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'privacy-policy.create',
        'uses' => 'App\\Http\\Controllers\\PrivacyPolicyController@create',
        'controller' => 'App\\Http\\Controllers\\PrivacyPolicyController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy-policy.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'privacy-policy.store',
        'uses' => 'App\\Http\\Controllers\\PrivacyPolicyController@store',
        'controller' => 'App\\Http\\Controllers\\PrivacyPolicyController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy-policy.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/privacy-policy/{privacy_policy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'privacy-policy.show',
        'uses' => 'App\\Http\\Controllers\\PrivacyPolicyController@show',
        'controller' => 'App\\Http\\Controllers\\PrivacyPolicyController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy-policy.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/privacy-policy/{privacy_policy}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'privacy-policy.edit',
        'uses' => 'App\\Http\\Controllers\\PrivacyPolicyController@edit',
        'controller' => 'App\\Http\\Controllers\\PrivacyPolicyController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy-policy.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/privacy-policy/{privacy_policy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'privacy-policy.update',
        'uses' => 'App\\Http\\Controllers\\PrivacyPolicyController@update',
        'controller' => 'App\\Http\\Controllers\\PrivacyPolicyController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy-policy.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/privacy-policy/{privacy_policy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'privacy-policy.destroy',
        'uses' => 'App\\Http\\Controllers\\PrivacyPolicyController@destroy',
        'controller' => 'App\\Http\\Controllers\\PrivacyPolicyController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon-code.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/coupon-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'coupon-code.index',
        'uses' => 'App\\Http\\Controllers\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\CouponController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon-code.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/coupon-code/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'coupon-code.create',
        'uses' => 'App\\Http\\Controllers\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\CouponController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon-code.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/coupon-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'coupon-code.store',
        'uses' => 'App\\Http\\Controllers\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\CouponController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon-code.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/coupon-code/{coupon_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'coupon-code.show',
        'uses' => 'App\\Http\\Controllers\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\CouponController@show',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon-code.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/coupon-code/{coupon_code}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'coupon-code.edit',
        'uses' => 'App\\Http\\Controllers\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\CouponController@edit',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon-code.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin/coupon-code/{coupon_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'coupon-code.update',
        'uses' => 'App\\Http\\Controllers\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\CouponController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon-code.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin/coupon-code/{coupon_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'as' => 'coupon-code.destroy',
        'uses' => 'App\\Http\\Controllers\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\CouponController@destroy',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group.mail.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/manageuser/group/mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@groupMail',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@groupMail',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'group.mail.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group.mail.sent' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/manageuser/group/mail/sent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@groupMailSent',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@groupMailSent',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'group.mail.sent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'emailCompaign' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/email-compaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@emailCompaign',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@emailCompaign',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'emailCompaign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.pages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/cms-pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\CMS\\CMSController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\CMS\\CMSController@index',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'cms.pages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin/cms-page/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\CMS\\CMSController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\CMS\\CMSController@create',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'cms.pages.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/cms-page/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\CMS\\CMSController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\CMS\\CMSController@store',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'cms.page.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email.compaign.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin/email/compaign/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'adminRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Generalsettings\\ManageUserController@update',
        'namespace' => NULL,
        'prefix' => '/superadmin',
        'where' => 
        array (
        ),
        'as' => 'email.compaign.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nextGuestScreen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'next-guest-screen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Guest\\GuestController@nextGuestScreen',
        'controller' => 'App\\Http\\Controllers\\Admins\\Guest\\GuestController@nextGuestScreen',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'nextGuestScreen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EccLKb4NQdAYS1Km' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'calendar-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventManagement\\CalandarEventsController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventManagement\\CalandarEventsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EccLKb4NQdAYS1Km',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bR1tfEoP71kcmuSb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'calendar-crud-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventManagement\\CalandarEventsController@calendarEvents',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventManagement\\CalandarEventsController@calendarEvents',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bR1tfEoP71kcmuSb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZULM7Vdwob5TbkK9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-vetvine-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventManagement\\CalandarEventsController@addVetvineEvent',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventManagement\\CalandarEventsController@addVetvineEvent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZULM7Vdwob5TbkK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member_home_paginate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'member-home-paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@paginateMemberHomePost',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@paginateMemberHomePost',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'member_home_paginate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mftXvuWIHZBJrbXL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:288:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:70:"function () {
    return \\view("frontend.pages.forums.post_detail");
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011c30000000000000000";}";s:4:"hash";s:44:"kcWyjxdRwJvPXDUJa3lmsbfyM7vq1AV8ScRw5lroZkU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mftXvuWIHZBJrbXL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'share.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'share-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@sharePost',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@sharePost',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'share.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forumsfrontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'frontend-forums',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@frontendIndex',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@frontendIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'forumsfrontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getForums' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forums/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@getForums',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@getForums',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getForums',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forums-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'forums-posts.index',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@index',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forums-posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'forums-posts.create',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@create',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forums-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'forums-posts.store',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forums-posts/{forums_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'forums-posts.show',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@show',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forums-posts/{forums_post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'forums-posts.edit',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'forums-posts/{forums_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'forums-posts.update',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@update',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forums-posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'forums-posts/{forums_post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'forums-posts.destroy',
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchFormCategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search-form-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@searchFormCategory',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@searchFormCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchFormCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchCategoryForm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search-category-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@searchCategoryForm',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@searchCategoryForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchCategoryForm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchFormPosts' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search-form-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@searchFormPosts',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@searchFormPosts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchFormPosts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getForumPosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forum/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@getForumPosts',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@getForumPosts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getForumPosts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getForumcategoryPosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/forum/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@getForumcategoryPosts',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumController@getForumcategoryPosts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getForumcategoryPosts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cms.page.content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\CMS\\CMSController@pages',
        'controller' => 'App\\Http\\Controllers\\Admins\\CMS\\CMSController@pages',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cms.page.content',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:276:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"function () {
        return \\view(\'frontend.home\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011d60000000000000000";}";s:4:"hash";s:44:"Qs9+dDfNN0sHAxRBMS+/Fo0mxSQ/Rb18UP0yeUkhAdw=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@delete_user',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@delete_user',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'why_vetvine' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'why-vetvine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@whyVetvine',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@whyVetvine',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'why_vetvine',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'grow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'grow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@grow',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@grow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'grow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thrive' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thrive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@thrive',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@thrive',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thrive',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'heal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'heal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@heal',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@heal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'heal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\ContactUsController@submitContactForm',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ContactUsController@submitContactForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contactus.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms&conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\TermsController@indexTerms',
        'controller' => 'App\\Http\\Controllers\\TermsController@indexTerms',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacypolicy.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy&policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\TermsController@indexprivacy',
        'controller' => 'App\\Http\\Controllers\\TermsController@indexprivacy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'privacypolicy.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upcoming_webinars' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'upcoming-webinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@upcomingWebinars',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@upcomingWebinars',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'upcoming_webinars',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upcoming_details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'upcoming-webinars-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@upcomingWebinarsdetails',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@upcomingWebinarsdetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'upcoming_details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yjpRvZYCvfOIa5JV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'load-other-timezones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@loadOtherTimeZones',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@loadOtherTimeZones',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yjpRvZYCvfOIa5JV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'submitPayment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'submitPayment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payementwebinars' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@paymentWebinars',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@paymentWebinars',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payementwebinars',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upcoming_publications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'publications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@publications',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@publications',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'upcoming_publications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search_educations' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'educations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@searceducations',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@searceducations',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'search_educations',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'eventpayments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'eventpayments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'as' => 'eventpayments.index',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'eventpayments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'eventpayments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'as' => 'eventpayments.create',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@create',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'eventpayments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'eventpayments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'as' => 'eventpayments.store',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@store',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'eventpayments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'eventpayments/{eventpayment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'as' => 'eventpayments.show',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@show',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'eventpayments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'eventpayments/{eventpayment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'as' => 'eventpayments.edit',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'eventpayments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'eventpayments/{eventpayment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'as' => 'eventpayments.update',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@update',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'eventpayments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'eventpayments/{eventpayment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'as' => 'eventpayments.destroy',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\EventPayments\\EventPaymentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@faqs',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@faqs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsfrontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@frontIndex',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@frontIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'newsfrontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchNews' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@newsSearch',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@newsSearch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchNews',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showmore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-more',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@showmore',
        'controller' => 'App\\Http\\Controllers\\Admins\\News\\NewsController@showmore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'showmore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showComments' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'show-comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\CommentController@showComments',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\CommentController@showComments',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'showComments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videosOnDemand' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos-on-demand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@videosOnDemand',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@videosOnDemand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'videosOnDemand',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ceArchives' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ce-archives',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@ceArchives',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@ceArchives',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ceArchives',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comment.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'comment/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\CommentController@store',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\CommentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'comment.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'likesave' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'savelike',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@likeSave',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@likeSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'likesave',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getEventPrice' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/getEventPrice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@getEventPrice',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@getEventPrice',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'getEventPrice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getVideoPrice' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/getVideoPrice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@getVideoPrice',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@getVideoPrice',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'getVideoPrice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userdashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@userdashboard',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@userdashboard',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'userdashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member_home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/member-home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@memberHome',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@memberHome',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'member_home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'myupcomming.events' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/myupcomming-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@myUpcommingEvents',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@myUpcommingEvents',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'myupcomming.events',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypast.events' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/mypast-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@myPastEvents',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@myPastEvents',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'mypast.events',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'personelinfo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/personelinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'personelinfo.index',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@index',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'personelinfo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/personelinfo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'personelinfo.create',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@create',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@create',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'personelinfo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/personelinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'personelinfo.store',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@store',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@store',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'personelinfo.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/personelinfo/{personelinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'personelinfo.show',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@show',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@show',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'personelinfo.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/personelinfo/{personelinfo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'personelinfo.edit',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@edit',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@edit',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'personelinfo.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'vetvine-member/personelinfo/{personelinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'personelinfo.update',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@update',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@update',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'personelinfo.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'vetvine-member/personelinfo/{personelinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'personelinfo.destroy',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@destroy',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@destroy',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vetvineUserProfile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/profile-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@userProfile',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@userProfile',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'vetvineUserProfile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vetvineUserChat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@chat',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@chat',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'vetvineUserChat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zIanlIuOX9Rui00X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/chatify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function () {
            return \\view("vendor.chatify.pages.app");
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000012000000000000000000";}";s:4:"hash";s:44:"Xkffvuxn3re9q+DvQtkeXYPLVSybnUXb0+65Weas12U=";}}',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'generated::zIanlIuOX9Rui00X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vetvineUserNotifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@notifications',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\PersonelInfoController@notifications',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'vetvineUserNotifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usermemberships.applycouponcode' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/apply_couponcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@applyCouponCode',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@applyCouponCode',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'usermemberships.applycouponcode',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprofile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'updateprofile.index',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@index',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprofile.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/updateprofile/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'updateprofile.create',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@create',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@create',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprofile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'updateprofile.store',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@store',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@store',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprofile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/updateprofile/{updateprofile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'updateprofile.show',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@show',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@show',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprofile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/updateprofile/{updateprofile}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'updateprofile.edit',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@edit',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprofile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'vetvine-member/updateprofile/{updateprofile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'updateprofile.update',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@update',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprofile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'vetvine-member/updateprofile/{updateprofile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'updateprofile.destroy',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@destroy',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MyProfile\\ProfileController@destroy',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usermemberships.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/usermemberships',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'usermemberships.index',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@index',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usermemberships.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/usermemberships/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'usermemberships.create',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@create',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@create',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usermemberships.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/usermemberships',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'usermemberships.store',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@store',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@store',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usermemberships.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/usermemberships/{usermembership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'usermemberships.show',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@show',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@show',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usermemberships.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/usermemberships/{usermembership}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'usermemberships.edit',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@edit',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usermemberships.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'vetvine-member/usermemberships/{usermembership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'usermemberships.update',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@update',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@update',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usermemberships.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'vetvine-member/usermemberships/{usermembership}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'usermemberships.destroy',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\MemberShips\\StripePaymentController@destroy',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'general.index',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@index',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/general/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'general.create',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@create',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@create',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'general.store',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@store',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@store',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/general/{general}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'general.show',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@show',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@show',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/general/{general}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'general.edit',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@edit',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@edit',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'vetvine-member/general/{general}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'general.update',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@update',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@update',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'vetvine-member/general/{general}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'general.destroy',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\GeneralSettingController@destroy',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'privacy.index',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@index',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/privacy/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'privacy.create',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@create',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@create',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'privacy.store',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@store',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@store',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/privacy/{privacy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'privacy.show',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@show',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@show',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/privacy/{privacy}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'privacy.edit',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@edit',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@edit',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'vetvine-member/privacy/{privacy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'privacy.update',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@update',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@update',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'vetvine-member/privacy/{privacy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'privacy.destroy',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\Settings\\PrivacySettingController@destroy',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'post.index',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@index',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/post/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'post.create',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@create',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'post.store',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@store',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'post.show',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@show',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@show',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/post/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'post.edit',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@edit',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'vetvine-member/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'post.update',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@update',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'vetvine-member/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'as' => 'post.destroy',
        'uses' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\VetvineUsers\\PostManagement\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'createforumpost' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/create-forumpost/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@createPost',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@createPost',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'createforumpost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forumpostlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/forumpostlist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@forumPostList',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\ForumPostController@forumPostList',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'forumpostlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/comment-destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\CommentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\CommentController@destroy',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'comment.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reply.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/reply/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Forum\\CommentController@replyStore',
        'controller' => 'App\\Http\\Controllers\\Admins\\Forum\\CommentController@replyStore',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'reply.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reviewstore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/review-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\ReviewController@reviewstore',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\ReviewController@reviewstore',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'reviewstore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'review.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/review-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@reviewdelete',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@reviewdelete',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'review.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comment.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/update-comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\ReviewController@commentupdate',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\ReviewController@commentupdate',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'comment.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/edit-comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admins\\Webinar\\ReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admins\\Webinar\\ReviewController@edit',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'comment.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change_password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vetvine-member/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@changePassword',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'change_password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateUserPassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vetvine-member/update-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'frontendUserRole',
          2 => 'emailVerification',
          3 => 'auth:sanctum',
          4 => 'vetvineUserRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@updateUserPassword',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@updateUserPassword',
        'namespace' => NULL,
        'prefix' => '/vetvine-member',
        'where' => 
        array (
        ),
        'as' => 'updateUserPassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video_desc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'video-description/{id}{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\VideoDescriptionController@video_desc',
        'controller' => 'App\\Http\\Controllers\\VideoDescriptionController@video_desc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'video_desc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'videos.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'videos-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\VideoDescriptionController@video_search',
        'controller' => 'App\\Http\\Controllers\\VideoDescriptionController@video_search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'videos.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rating.videos' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'rating-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\VideoDescriptionController@rating_videos',
        'controller' => 'App\\Http\\Controllers\\VideoDescriptionController@rating_videos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'rating.videos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'read.notification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mark-as-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PushNotificationController@mark_as_read',
        'controller' => 'App\\Http\\Controllers\\PushNotificationController@mark_as_read',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'read.notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'licensure.show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'licensure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LicensureController@licensure',
        'controller' => 'App\\Http\\Controllers\\LicensureController@licensure',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'licensure.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q5CaffbvcxPUBMlN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:645:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:426:"function () {
    $client = new \\MailchimpMarketing\\ApiClient();

    $client->setConfig([
        \'apiKey\' => \\env(\'MAILCHIMP_API_KEY\'),
        \'server\' => \'us17\',
    ]);

    $response = $client->templates->list();
    // $response = $client->templates->getTemplate("11579038");
    // $response = $client->templates->create([
    //     "name" => "Wajid Ali",
    //     "html" => "html",
    // ]);
    \\dd($response);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000011190000000000000000";}";s:4:"hash";s:44:"rnaYIYpjlBZpgcfXr3+FODYR+WBJSZMS4aC11LsmVO0=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Q5CaffbvcxPUBMlN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

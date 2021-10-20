<?php

namespace App\Exceptions;

class ExceptionList
{

    // AUTH
    public const INVALID_CREDENTIALS = 'error_invalid_credentials';
    public const INVALID_REFRESH_TOKEN = 'error_invalid_refresh_token';
    public const UNAUTHENTICATED = 'error_user_is_unauthenticated';
    public const ACCESS_DENIED = 'error_access_denied';
    public const INVALID_CLIENT = 'error_invalid_client';
    public const EXISTED_EMAIL = 'error_email_is_already_used';
    public const EXISTED_NAME = 'error_name_is_already_used';
    public const USER_INACTIVE = 'error_user_is_inactive';

    public const CONFIRMATION_NOT_FOUND = 'error_confirmation_not_found';
    public const CONFIRMATION_EXPIRED = 'error_confirmation_expired';

    public const USER_NOT_FOUND = 'error_user_not_found';
    public const ATTACH_NOT_FOUND = 'error_attach_not_found';

    // VALIDATION
    public const INVALID_REQUEST_BODY = 'error_body_format_invalid';
    public const INVALID_TYPE = 'error_invalid_type';
    public const INVALID_ROLE = 'error_invalid_role';
    public const INVALID_STATUS = 'error_invalid_status';
    public const INVALID_NAME = 'error_invalid_name';
    public const INVALID_TITLE = 'error_invalid_title';



    public const INVALID_LIMIT = 'error_invalid_limit';
    public const INVALID_FILTER = 'error_invalid_filter';
    public const INVALID_SORT = 'error_invalid_sort';
    public const INVALID_SKIP = 'error_invalid_skip';



  }

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Darabonba\Url\Models;

use AlibabaCloud\Tea\Model;

class Auth extends Model
{
    public $username;

    public $password;

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Auth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        return $model;
    }
}

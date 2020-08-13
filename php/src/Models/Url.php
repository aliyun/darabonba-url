<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Darabonba\Url\Models;

use AlibabaCloud\Tea\Model;

class Url extends Model
{
    public $scheme;

    public $auth;

    public $host;

    public $path;

    public $hash;

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheme) {
            $res['scheme'] = $this->scheme;
        }
        if (null !== $this->auth) {
            $res['auth'] = null !== $this->auth ? $this->auth->toMap() : null;
        }
        if (null !== $this->host) {
            $res['host'] = null !== $this->host ? $this->host->toMap() : null;
        }
        if (null !== $this->path) {
            $res['path'] = null !== $this->path ? $this->path->toMap() : null;
        }
        if (null !== $this->hash) {
            $res['hash'] = $this->hash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Url
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scheme'])) {
            $model->scheme = $map['scheme'];
        }
        if (isset($map['auth'])) {
            $model->auth = Auth::fromMap($map['auth']);
        }
        if (isset($map['host'])) {
            $model->host = Host::fromMap($map['host']);
        }
        if (isset($map['path'])) {
            $model->path = Path::fromMap($map['path']);
        }
        if (isset($map['hash'])) {
            $model->hash = $map['hash'];
        }

        return $model;
    }
}
